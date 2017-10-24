@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>
    
                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    @if(Auth::check())
                       <a href="{{url('create_job')}}"> Add Job </a> <br/>
                       View To Do Lists<br/>
                      <a href="{{url('view_listjobs/'.Auth::id().'/1')}}"> Status : DO </a> <br/>
                      <a href="{{url('view_listjobs/'.Auth::id().'/2')}}"> Status : DOING </a> <br/>
                      <a href="{{url('view_listjobs/'.Auth::id().'/3')}}"> Status : DONE </a> <br/>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
