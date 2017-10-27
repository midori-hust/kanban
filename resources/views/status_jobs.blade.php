<h1> List Job -{{$job_status}} </h1>
<table>
    <tr>
        <td>No.</td>
        <td>Title</td>
        <td>Edit</td>
        <td>Delete</td>
    </tr>
<?php
    $i = 0;
    foreach ($list_job as $job) {
        $i++;
        echo "<tr>";
            echo "<td> $i </td>";
            echo "<td> $job->job_title </td>";
            echo "<td><a href=\"".url('edit_job/'.$job->id)."\"> Edit </a></td>";
            echo "<td><a href=\"".url('delete_job/'.$job->id)."\"> Delete </a></td>";
        echo "</tr>";
    }
?>
</table>