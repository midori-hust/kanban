 
@if($job != NULL)
    <h2> Create Detail Job</h2>
    <p> <b> Title: </b> {{$job->job_title}}</p>
    <p> <b> Description: </b> {{$job->job_description}}</p>
    <p> <b> Status: </b> {{$job->job_status}}</p>
    <p> <b> Deadline: </b>{{$job->deadline}}</p>
    <a href="{{url('edit_job/'.$job->id)}}"> Edit </a>
    <a href="{{url('delete_job/'.$job->id)}}"> Delete </a>
@endif