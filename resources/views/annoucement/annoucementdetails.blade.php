   <!-- to be called inside the master.blade.php -->
@extends('layouts.annoucementStyle')

<head>
    <title>FYP Annoucement Mainpage | PSMES</title>

   

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
    <div style="margin: 0px 0px; padding:10px 10px;height:90%; background-color: #11ADA4;">
        <div style="margin-top: 15px; padding:10px 16px; height:100%;background-color: #11ADA4;">
          
        <h2 style="height: 50px;  color: #FFFFFF; font-size: 18px; padding: 10px 10px; background-color:#11ADA4; text-align: left;  font-size: 40px; color: black">{{ $anns['annoucement_title'] }}</h2>
    


        <h2 style="height: 50px;  color: #FFFFFF; font-size: 18px; padding: 10px 10px; background-color:#11ADA4; text-align: left;  font-size: 20px; color: black">{{ $anns['annoucement_details'] }}</h2>
    

       


        <div>

        </div>

        </div>
    </div>
          
@endsection