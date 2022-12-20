<!-- to be called inside the master.blade.php -->
@extends('layouts.PSMCoordinatorHomepageStyle')

<head>
    <title>Add FYP Details | PSMES</title>
</head>

@section('content')


        <!-- Page Content  -->
        <div style="margin: 0px 0px; padding:0px 0px;height:90%; background-color: white;">
        <div style="margin-top: 15px; padding:10px 16px; height:100%;background-color: #F5F5F5;">
          
            <h2 style="height: 50px;  color: #FFFFFF; font-size: 18px; padding: 10px 10px; background-color:#11ADA4; text-align: center;">Add New Student FYP Details</h2>

    <form style="width:100%;" action="/fypdata/create" method="POST" class="form-group">
    {{csrf_field()}}    
    <table style="margin-left: 300px; margin-top: 50px">
    <tr style="height: 60px;">
        <td style="width:10%"><label  class="form-label">Student ID</label></td>
        <td style="width:85%"><input style="width:70%;  " name="std_id" type="text" class="form-control" placeholder="Enter Student ID"></td>
    </tr>
    <tr style="height: 60px;">
        <td><label class="form-label">Student Name</label></td>
        <td><input style="width:70%;" required="required"  name="std_name" type="text" class="form-control"  placeholder="Enter Student Name"></td>
    </tr>
    <tr style="height: 60px;">
        <td><label class="form-label">Supervisor Name</label></td>
        <td><input style="width:70%; " required="required" name="sv_name" type="text" class="form-control" placeholder="Enter Supervisor Name"></td>
    </tr>
    <tr style="height: 60px;">
        <td><label class="form-label">Evaluator Name</label></td>
        <td><input style="width:70%; " required="required" name="eva_name" type="text"  class="form-control" placeholder="Enter Evaluator Name"></td>
    </tr>
    <tr style="height: 60px;">
        <td><label class="form-label">FYP Title</label></td>
        <td><input style="width:70%; "required="required" name="fyp_title" type="text" class="form-control" placeholder="Enter FYP Title"></td>
    </tr>
    </table> 
    <button style="margin: 40px 45% 80px; padding: 15px 20px;" id="customButton" type="submit" class="btn btn-primary">Save</button>   
    </form>
</div>
</div>
</div>
          

@endsection