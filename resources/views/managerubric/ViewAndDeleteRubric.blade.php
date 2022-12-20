<!-- to be called inside the master.blade.php -->
@extends('layouts.PSMCoordinatorHomepageStyle')

<head>
    <title> View Rubric/ Edit Rubric/ Delete Rubric  | PSMES</title>
</head>
<!-- call function -->
@section('content') 
 </style>
    
        @if(session('success'))
        <div class="alert alert-primary" role="alert">
             {{session('success')}}
        </div>
        @endif
        

<div class="container rounded bg-white">
        <div class="row">
           <center>
            <div class="col-12"style="background-color:#11ADA4;padding:10px;color:white;width:100%;">

            <div style="padding:2px; background-color:#e2e9e9">
            <a id="customButton" href="viewPSM1"><b>PSM 1</b></a>
            <a id="customButton" href="viewPSM2"><b>PSM 2</b></a>
            <a id="customButton" href="viewPTA"><b>PTA</b></a>

        </div>

          
                
                <h1>Rubric Information</h1><br>
               

                <div class="table-wrapper-scroll-y my-custom-scrollbar">
                    <table class="table table-hover table-success table-striped" width="100%">
                        <tr>
                            <th> ID</th>
                            <th>Rubric ID</th>
                            <th>Competency</th>
                            <th>Excellent Grade</th>
                            <th>Good Grade</th>
                            <th>Moderate Grade</th>
                            <th>Weak Grade</th>
                            <th>Very Weak Grade</th>
                            <th>Fail Grade</th>
                            <th>Weightage</th>
                            <th>Mark Given</th>
                            <th>Final Percent</th>
                            <th colspan="2">Update / Delete</th>
                        </tr>
                        @foreach($data_rubric as $rubric)
                        <tr>
                            <td>{{$rubric->id}}</td>
                            <td>{{$rubric->rubric_id}}</td>
                            <td>{{$rubric->competency}}</td>
                            <td>{{$rubric->excellent_grade}}</td>
                            <td>{{$rubric->good_grade}}</td>
                            <td>{{$rubric->moderate_grade}}</td>
                            <td>{{$rubric->weak_grade}}</td>
                            <td>{{$rubric->vweak_grade}}</td>
                            <td>{{$rubric->fail_grade}}</td>
                            <td>{{$rubric->weightage}}</td>
                            <td>{{$rubric->mark_given}}</td>
                            <td>{{$rubric->final_percent}}</td>
                            
                            <td><a href="rubricdata/{{$rubric->id}}/edit" class="btn btn-success">Update</a></td>
                            <td><a href="rubricdata/{{$rubric->id}}/delete" class="btn btn-danger" onClick = "return confirm('Are you sure you want to delete this data?')">Delete</a></td>
                    </tr> 
                    @endforeach 
                    </table>
                </div><br>

            </div>
        </div>

    </div>
    @endsection
