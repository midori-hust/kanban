@extends('layouts.app')
@section('content')
<h1> Profile </h1>

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
@endsection
