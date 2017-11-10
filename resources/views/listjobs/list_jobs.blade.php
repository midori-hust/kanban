@extends('layouts.main')
@section('function_handle')
<table border="1px solid #ccc">
    <caption> <h1> List Job - ALL </h1> </caption>
    <tr>
        <th>DO</th>
        <th>DOING</th>
        <th>DONE</th>
    </tr>
    
    @if(isset($list_job))
    <tr>
     <?php
     foreach ($list_job as $jobs) {
            echo "<td>";
            $i=1;
            if(isset($jobs)){
                foreach ($jobs as $job) {
                echo $i++.".<a href=\"".url('/view_detail_job/'.$job->id)."\">".$job->job_title."</a><br>";
                echo "<hr>";
                }
            }
        echo "</td>";
        }                        
    ?>
    </tr>
    @endif
       

   

</table>
@endsection