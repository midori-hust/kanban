@extends('layouts.app')

@section('content')
@if(Auth::check())
    <h1> Create JOB </h1>
    <form action="{{url('handle_create_job')}}" method="post">
        {{csrf_field()}}
        <label for="job_title"> Job Title</label><br/>
        <input type="text" name="job_title" placeholder="新聞を読む" value="{{old('job_title')}}"/><br/><br/>
        
        <label for="job_description"> Job Description </label><br/>
        <input type="text" name="job_description" placeholder="中部経済新聞を読む" value="{{old('job_description')}}"/><br/><br/>
        
        <label for="deadline">Deadline </label><br/>
        <input type="date" name="deadline" placeholder="YY/MM/DD" value="{{old('deadline')}}"/><br/><br/>
        
        <label for="job_status">Job status </label><br/>
            <input type="radio" name="job_status" value="1" <?php if(old('job_status')== NULL || old('job_status') ==1) echo 'checked'?> > Do  </input><br/>
            <input type="radio" name="job_status" value="2" <?php if(old('job_status') ==2) echo 'checked'?>> Doing </input><br/>
            <input type="radio" name="job_status" value="3" <?php if(old('job_status') ==3) echo 'checked'?>> Done </input><br/>
        
        <input type="hidden" name="user_id" value="{{Auth::id()}}"/>
        
        <input type="submit" value="Create Job"/>
    </form>
@endif

@endsection