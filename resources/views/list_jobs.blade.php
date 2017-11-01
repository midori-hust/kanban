@extends('layouts.app')
@section('content')
<table border="1px solid #ccc">
    <caption> <h1> List Job - ALL </h1> </caption>
    <tr>
        <th>DO</th>
        <th>DOING</th>
        <th>DONE</th>
    </tr>
        <?php
         foreach ($list_job as $jobs) {
          echo "<td>";
          $i=1;
            foreach ($jobs as $job) {
                echo $i++.".<a href=\"".url('/view_detail_job/'.$job->id)."\">".$job->job_title."</a><br>";
                echo "<hr>";
            }
           echo "</td>";
        }
        ?>
    </tr>
    </tr>
        <?php
         foreach ($list_job as $jobs) {
          echo "<td>Count:".$jobs->count()."</td>";
        }
        ?>
    </tr>

</table>
@endsection