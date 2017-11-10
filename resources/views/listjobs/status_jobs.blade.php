@extends('layouts.main')
@section('function_handle')
<h1> List Job -{{$job_status}} </h1>
<a href="{{url('/home')}}"> Home </a>
<table>
    <tr>
        <th>No.</th>
        <th>Title</th>
        <th>View detail</th>
        <th>Edit</th>
        <th>Delete</th>
    </tr>
<?php
    $i = 0;
    foreach ($list_job as $job) {
        $i++;
        echo "<tr>";
            echo "<td> $i </td>";
            echo "<td> $job->job_title </td>";
            echo "<td><a href=\"".url('view_detail_job/'.$job->id)."\"> View detail </a></td>";
            echo "<td><a href=\"".url('edit_job/'.$job->id)."\"> Edit </a></td>";
            echo "<td><a href=\"".url('delete_job/'.$job->id)."\"> Delete </a></td>";
        echo "</tr>";
    }
?>
</table>
@endsection