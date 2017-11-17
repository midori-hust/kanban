@extends('layouts.main')
@section('function_handle')
    @if(Auth::check())
    <h2>Profile </h2>
        <h3> Username : <i>{{Auth::user()->name}}</i></h3>
        <h3> Email: <i> {{Auth::user()->email}} </i></h3>
    @endif
@endsection
    