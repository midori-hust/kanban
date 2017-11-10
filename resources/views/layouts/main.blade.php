@extends('layouts.app')
@section('content')
<div id="main">
    <div id="profile" >
        <div id="info">
            <div id="username">
                <h3> {{Auth::user()->name}} </h3>    
            </div>
            <img src="{{url(Auth::user()->avatar_path)}}"></img>
        </div>
        <div id="form_update">
            <form action="{{url('update_avatar')}}" enctype="multipart/form-data" method="POST">
                <h3> Update avatar </h3>
                {{csrf_field()}}
                <input type="hidden" name="id" value="{{Auth::id()}}" />
                <input id="link_img" type="file" name="avatar" required='true' class="form-control"/>
                <input id="submit_img" type="submit" value="Update avatar"  class="form-control"/>
            </form>
        </div>   
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
            @yield('function_handle')
        </div>
    </div>    
</div>
@endsection
