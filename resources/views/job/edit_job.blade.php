@extends('layouts.main')
@section('function_handle')
@if(Auth::check() )
    <h1> Edit JOB </h1>

    <form action="{{url('edit_job/'.$job->id)}}" method="post">
        {{csrf_field()}}
        
        <label for="job_title"> Job Title</label><br/>
        <input type="text" name="job_title" value="{{$job->job_title}}"/><br/><br/>
        
        <label for="job_description"> Job Description </label><br/>
        <input type="text" name="job_description"  value="{{$job->job_description}}"/><br/><br/>
        
        <label for="deadline">Deadline </label><br/>
        <input type="date" name="deadline"  value="{{$job->deadline}}"/><br/><br/>
        
        <label for="job_status">Job status </label><br/> 
            <input type="radio" name="job_status" value="1" <?php if($job->job_status == 'do') echo 'checked'?> > Do  </input><br/>
            <input type="radio" name="job_status" value="2" <?php if($job->job_status == 'doing') echo 'checked'?> > Doing </input><br/>
            <input type="radio" name="job_status" value="3" <?php if($job->job_status == 'done') echo 'checked'?> > Done </input><br/>
        
        <input type="hidden" name="id" value="{{$job->id}}"/>
        <input type="submit" value="Edit"/>
    </form>
@endif
@endsection