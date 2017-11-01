@extends('layouts.app')
@section('content')
<h1> Profile </h1>
Username : {{Auth::user()->name}} <br/>
Email: {{Auth::user()->email}}
@if(!isset($avatar_path))
    <h1> hhhhhhh </h1>
  
@endif
<form action="{{url('update_avatar')}}" enctype="multipart/form-data" method="POST">
    <h3> Update avatar </h3>
    {{csrf_field()}}
    <input type="file" name="avatar" required='true'/>
    <input type="submit" value="Update avatar"/>
</form>
@endsection
