@if(Auth::check())
    <h1> Create JOB </h1>
    <form action="{{url('handle_create_job')}}" method="post">
        {{csrf_field()}}
        <input type="hidden" name="user_id" value="{{Auth::id()}}"/><br/>
        <input type="text" name="job_title" placeholder="Job Title" value="{{old('job_title')}}"/><br/>
        <input type="text" name="job_description" placeholder="Job Description" value="{{old('job_description')}}"/><br/>
        <input type="date" name="deadline" placeholder="DeadLine" value="{{old('deadline')}}"/><br/>
        <label for="">Job status </label><br/>
        <input type="radio" name="job_status" value="1"> Do  </input><br/>
        <input type="radio" name="job_status" value="2"> Doing </input><br/>
        <input type="radio" name="job_status" value="3"> Done </input><br/>
        <input type="submit" value="Create Job"/>
    </form>
@endif

