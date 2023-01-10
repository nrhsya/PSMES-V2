<!-- to be called inside the master.blade.php -->
@extends('layouts.PSMCoordinatorHomepageStyle')

<head>
    <title>FYP Announcement Mainpage | PSMES</title>

    <style>
        table {
          border-collapse: collapse;
          width: 100%;
        }
        
        th, td {
          text-align: left;
          padding: 8px;
        }
        
        tr:nth-child(even) {
          background-color: #D6EEEE;
        }
        </style>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

@section('content')

@if(session('success'))
        <div class="alert alert-primary" role="alert">
             {{session('success')}}
        </div>
        @endif 

        @if ($errors->any())
    <div class="alert alert-primary" role="alert">
     
            @foreach ($errors->all() as $error)
                {{ $error }}
            @endforeach
    </div>
@endif

    <!-- Page Content  -->
    <div style="margin: 0px 0px; padding:0px 0px;height:90%; background-color: white;">
        <div style="margin-top: 15px; padding:10px 16px; height:100%;background-color: #F5F5F5;">
          
        <h2 style="height: 50px;  color: #FFFFFF; font-size: 18px; padding: 10px 10px; background-color:#11ADA4; text-align: center;">Announcement</h2>
    
        <a style="margin-top:10px; margin-right:10px; margin-bottom:30px; margin-left:1085px; padding-right:10px; padding-left:10px; padding-bottom: 10px;padding-top:10px;" id="customButton" href="/AddannoucementDetails"><b>Add</b></a>

        

    

        <table id="itemList" class="p-auto m-auto display table text-right"
                        style="border-collapse:collapse;">
                        <thead>



                     
                          @foreach ($anns as $data)
                            <tr>
                               
                                <td>{{ $data->annoucement_title }}</td>
                                 <td style="width:15%" > 
                                  <button type="button" class="fa fa-info-circle"
                                  onclick="Popup=window.open('detail/{{ $data['id'] }}','Popup','toolbar=no,location=no,status=no,menubar=no,scrollbars=no,resizable=no,width=1150, height=300,left=300,top=250'); return false;"
                                  ></button>
                                  
                                  
                                    <button class="btn"> <a href="update/{{ $data['id'] }}"><i style='font-size:15px'
                                        class="fa fa-edit"></i></a></button>
                                        <button class="btn"> <a href="annodata/{{$data->id}}/delete"><i style='font-size:15px'
                                            class="fa fa-trash"></i></a></button>

                                </td>
                            </tr>
                          @endforeach


                        </thead>
                        <tbody>


                    </table>

        <div>

        </div>

        </div>
    </div>
          
@endsection