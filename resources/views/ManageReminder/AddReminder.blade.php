<!-- to be called inside the master.blade.php -->
@extends('evaluator.dashboard')

<head>
    <title> Add Reminder | PSMES</title>
</head>
<!-- call function -->
@section('content') 

@if ($errors->any())
    <div class="alert alert-primary" role="alert">
     
            @foreach ($errors->all() as $error)
                {{ $error }}
            @endforeach
    </div>
@endif

    <div class="row" style="padding:20px;background-color:#e2e9e9">
        <div class=" mb-5" style="background-color:#11ADA4;padding:10px;color:white;width:100%;">

            <form action="submit" method="POST">    
                        @csrf
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Title : </label>
                            <input name="inreminder_title" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Title">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Description : </label>
                            <input name="inreminder_description" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Description">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Date :</label>
                            <input name="inreminder_date" type="date" class="form-control" id="exampleFormControlInput1" placeholder="Date">
                        </div>       
                        

                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>  

        </div>

        
    </div>
@endsection
