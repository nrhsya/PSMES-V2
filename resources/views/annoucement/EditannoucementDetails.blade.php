<!-- to be called inside the master.blade.php -->
@extends('layouts.PSMCoordinatorHomepageStyle')

<head>
    <title>Edit Announcement Details | PSMES</title>
</head>

@section('content')


        <!-- Page Content  -->
        <div style="margin: 0px 0px; padding:0px 0px;height:90%; background-color: white;">
        <div style="margin-top: 15px; padding:10px 16px; height:100%;background-color: #F5F5F5;">
          
            <h2 style="height: 50px;  color: #FFFFFF; font-size: 18px; padding: 10px 10px; background-color:#11ADA4; text-align: center;">Edit Announcement Details</h2>

    <form style="width:100%;" action="/update/{{$anns->id}}/data" method="POST" class="form-group">
    {{csrf_field()}}    
    
    <table style="margin-left: 30px; margin-top: 50px">
        <tr style="height: 60px;">
            <td style="width:10%"><label  class="form-label">Title</label></td>
            <td style="width:70%"><input style="width:200%;  " name="annoucement_title" id="annoucement_title" type="text" class="form-control" value="{{ $anns['annoucement_title'] }}"required></td>
        </tr>
        <tr style="height: 60px;">
            <td style="width:10%"><label class="form-label">Details</label></td>
            <td style="width:70%"><input style="width:200%;  " name="annoucement_details" id="annoucement_details" type="text" class="form-control" value="{{ $anns->annoucement_details }}"required></td>
        </tr>
        <tr style="height: 60px;">
            <td style="width:10%"><label class="form-label">For</label></td>
            <td style="width:70%">
                <select style="width:200%;" id="annoucement_type" name="annoucement_type" required>
                    <option value="{{ $anns->annoucement_type }}">
                        {{ $anns->annoucement_type }}
                    </option>
                    <option value="Both">
                                   Both
                     </option>    
                    <option value="Evaluators">
                                   Evaluators
                    </option>
                    <option value="Students">
                                   Students
                  </option>
                  </select>
            </td>
    
    
    
    
    
        </tr>



        </table> 
    <button style="margin: 40px 45% 80px; padding: 15px 20px;" id="customButton" type="submit" class="btn btn-primary">Save</button>   

    </form>
</div>
</div>
</div>
          

@endsection