<!-- to be called inside the master.blade.php -->
@extends('layouts.studentHomepageStyle')

<head>
    <title>Evaluation Schedule | PSMES</title>
</head>

@section('content')

    <!-- Page Content  -->
    <div class="row text-center" style="padding:20px;background-color:#e2e9e9">
        <div style="background-color:#11ADA4;padding:10px;color:white;width:100%;">
            <h1><b>Industry Evaluation Schedule</b></h1>
        </div>

        <div class="container text-center font-weight-bold mt-2">
            <!-- to alert the users with the status of their actions -->
            @if(session('success'))
            <div class="alert alert-success" role="alert">
            {{session('success')}}
            </div>
            @endif
        </div>

        <div style="padding:10px;">
            <div class="table-wrapper-scroll-y my-custom-scrollbar">
                <!-- table to show students's industry evaluation schedule (STUDENT) -->
                <table class="table table-hover" style="LINE-HEIGHT:35px;" width="100%">
                    <tr style="background-color:#0958A3;color:white;">
                        <th>No.</th>
                        <th>Student ID</th>
                        <th>Student Name</th>
                        <th>Evaluation Date</th>
                        <th>Attendance Status</th>
                        <th>ACTIONS</th>
                    </tr>
                    @foreach($data_schedule as $schedule)
                    <tr style="background-color:white;color:#0958A3;">
                        <td>{{$schedule->schedule_id}}</td>
                        <td>{{$schedule->std_id}}</td>
                        <td>{{$schedule->std_name}}</td>
                        <td>{{$schedule->eva_date}}</td>
                        <td>{{$schedule->attendance_status}}</td>
                        <!-- button that redirects students to the confirm attendance page -->
                        <td><a href="scheduleData/{{$schedule->schedule_id}}/viewEvaluationDateDetails" class="btn btn-warning"> Confirm Attendance</a></td>
                    </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
@endsection