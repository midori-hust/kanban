 
@if($job != NULL)
    <h2> Create Detail Job</h2>
    <h3> Title: {{$job->job_title}}</h3>
    <h3> Description: {{$job->job_description}}</h3>
    <h3> Status: {{$job->job_status}}</h3>
    <h3> Deadline: {{$job->deadline}}</h3>
@endif