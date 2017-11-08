@extends('layouts.app')
@section('content')
<div id="main">
    <div id="profile" >
        <h4> Profile </h4>
        <img src="{{Auth::user()->avatar_path}}" height="150" width="150"></img><br/>
        Username : {{Auth::user()->name}} <br/>
        Email: {{Auth::user()->email}}
        <form action="{{url('update_avatar')}}" enctype="multipart/form-data" method="POST">
            <h3> Update avatar </h3>
            {{csrf_field()}}
            <input type="hidden" name="id" value="{{Auth::id()}}"/>
            <input type="file" name="avatar" required='true'/>
            <input type="submit" value="Update avatar"/>
        </form>
    </div >
    <div id="content1" >
        <div id="function">
            <ul>
                <li> <a href="{{url('create_job')}}"> Add Job </a> </li>
                <li> <a class="navtext"> |  View To Do Lists : </a> </li>
                <li> <a href="{{url('view_listjobs/'.Auth::id().'/do')}}"> Status : DO </a> </li>
                <li> <a href="{{url('view_listjobs/'.Auth::id().'/doing')}}"> Status : DOING </a> </li>
                <li> <a href="{{url('view_listjobs/'.Auth::id().'/done')}}"> Status : DONE </a> </li>
                <li> <a href="{{url('view_listjobs/'.Auth::id())}}"> Status : ALL </a></li>
            </ul>
           
        </div>
        <div id="function_handle">
            <h1>function handle </h1>
        </div>
    </div>    
    
</div>

@endsection
