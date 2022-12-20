<!-- to be called inside the master.blade.php -->
@extends('layouts.PSMCoordinatorHomepageStyle')

<head>
    <title>Evaluation Schedule | PSMES</title>
</head>

@section('content')

    <!-- Page Content  -->
    <div class="row text-center" style="padding:20px;background-color:#e2e9e9">
        <div style="background-color:#11ADA4;padding:10px;color:white;width:100%;">
            <h1><b>Industry Evaluation Schedule</b></h1>
        </div>

        <div class="container text-center font-weight-bold">
            <!-- to alert the users with the status of their actions -->
            @if(session('success'))
            <div class="alert alert-success" role="alert">
            {{session('success')}}
            </div>
            @endif
        </div>

        <div style="padding:10px;">
            <div class="table-wrapper-scroll-y my-custom-scrollbar">
                <!-- table that display student's evaluation schedule (COORDINATOR) -->
                <table class="table table-hover" style="LINE-HEIGHT:35px;" width="100%">
                    <tr style="background-color:#0958A3;color:white;">
                        <th>No.</th>
                        <th>Student ID</th>
                        <th>Student Name</th>
                        <th>Evaluation Date</th>
                        <th>Attendance</th>
                    </tr>
                    @foreach($data_schedule as $schedule)
                    <tr style="background-color:white;color:#0958A3;">
                        <td>{{$schedule->schedule_id}}</td>
                        <td>{{$schedule->std_id}}</td>
                        <td>{{$schedule->std_name}}</td>
                        <td>{{$schedule->eva_date}}</td>
                        <td>{{$schedule->attendance_status}}</td>
                    </tr>
                    @endforeach
                </table>
            </div>

            <div class="mt-5">
                <!-- button to redirect coordinator to the manage evaluation date page -->
                <a id="customButton" href="/manageEvaluationDate"><b>Manage Schedule</b></a>
            </div>
        </div>
    </div>
@endsection