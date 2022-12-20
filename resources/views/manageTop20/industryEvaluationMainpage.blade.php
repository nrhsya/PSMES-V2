<!-- to be called inside the master.blade.php -->
@extends('layouts.PSMCoordinatorHomepageStyle')

<!-- mainpage for the industry evaluation function -->

<head>
    <title>Industry Evaluation Homepage | PSMES</title>
</head>

@section('content')

    <!-- Page Content  -->
    <div class="row text-center" style="padding:20px;background-color:#e2e9e9">
        <div class="text-center mb-5" style="background-color:#11ADA4;padding:10px;color:white;width:100%;">
            <h1><b>Industry Evaluation Homepage</b></h1>
        </div>

        <div style="padding:10px;">
            <!-- button to the list of student marks page -->
            <a id="customButton" href="/viewMarks"><b>View Student Marks</b></a> 

            <!-- button to the list of student evaluation schedule page -->
            <a id="customButton" href="/evaluationSchedule"><b>Industry Evaluation Schedule</b></a>
        </div>
    </div>
@endsection