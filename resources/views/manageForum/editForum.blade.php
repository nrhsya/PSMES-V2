<!-- to be called inside the master.blade.php -->
@extends('layouts.studentHomepageStyle')

<head>
    <title>Edit Forum | PSMES</title>
</head>

@section('content')

    <!-- Page Content  -->
    <div class="row" style="padding:20px;background-color:#e2e9e9">
        <div class="text-center" style="background-color:#11ADA4;padding:10px;color:white;width:100%;">
            <h1><b>Edit Forum</b></h1>
        </div>

        <div class="row m-2">
            <form action="/viewForm/{{$data_forum->id}}/update" method="POST">
            {{ csrf_field() }}
                {{-- forum heading --}}
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label"><b>Forum Title:</b></label>
                    <input name="title" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Forum Title" value="{{$data_forum->title}}">
                </div>

                {{-- forum categories --}}
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label"><b>Category:</b></label>
                    <select name="category" class="form-control" aria-label="gender">
                        {{-- <option disabled selected>Choose Forum Category</option> --}}
                        <option value="PSM Related (General)" @if($data_forum->category=='PSM Related (General)') selected @endif>PSM Related (General)</option>
                        <option value="Others" @if($data_forum->category=='Others') selected @endif>Others</option>
                        <option value="PSM Rubric" @if($data_forum->category=='PSM Rubric') selected @endif>PSM Rubric</option>
                        <option value="Industry Evaluation" @if($data_forum->category=='Industry Evaluation') selected @endif>Industry Evaluation</option>
                    </select>
                </div>

                {{-- forum description --}}
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label"><b>Description:</b></label>
                    <textarea name="description" class="form-control summernote" id="" cols="30" rows="10">{{$data_forum->description}}</textarea>
                </div>

                <div class="text-center">
                    <button type="submit" class="btn btn-success">Update</button>
                    <button type="button" class="btn btn-danger" onclick="window.location.href='/viewForum'">Cancel</button>
                </div>
                
            </form>
        </div>
    </div>
@endsection