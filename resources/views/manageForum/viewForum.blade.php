<!-- to be called inside the master.blade.php -->
@extends('layouts.studentHomepageStyle')

<head>
    <title>Forum | PSMES</title>
</head>

@section('content')

    <div class = "container">
        <!-- to alert the users -->
        @if(session('success'))
        <div class="alert alert-success text-center text-sm m-2" role="alert">
            {{session('success')}}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif
    </div>

    <!-- Page Content  -->
    <div class="row" style="background-color:#e2e9e9">
        <div class="text-center" style="background-color:#11ADA4;padding:10px;color:white;width:100%;">
            <h1><b>FORUM</b></h1>
        </div>

        <div class="row m-2">
            <div class="col-md-3">
                <div class="card mb-3">
                    <div class="card-body">
                        <p class="text-sm">Start your own discussion so that others can join</p>
                        {{-- <button type="button" class="btn btn-block btn-success" onclick="window.location.href='/createForum'">Start a new discussion</button> --}}
                        <button type="button" class="btn btn-block btn-success" data-coreui-toggle="modal" data-coreui-target="#createForum">Start a new discussion</button>
                    </div>
                </div>

                <div class="card mb-3">
                    <div class="card-body">
                        <strong>CATEGORIES </strong><hr>
                        <button type="button" class="btn btn-outline-dark m-2" onclick="window.location.href='/viewForum'">All</button>
                        <button type="button" class="btn btn-outline-success m-2" onclick="window.location.href='filterCategory'">PSM Related (General)</button>
                        <button type="button" class="btn btn-outline-warning m-2" onclick="window.location.href='filterCategory'">Others</button>
                        <button type="button" class="btn btn-outline-info m-2" onclick="window.location.href='filterCategory'">PSM Rubric</button>
                        <button type="button" class="btn btn-outline-danger m-2" onclick="window.location.href='filterCategory'">Industry Evaluation</button>
                    </div>
                </div>

                {{-- <div class="card mb-3">
                    <div class="card-body">
                        <p class="text-sm text-black"><i class="bi bi-star-fill text-warning"></i>  Popular this week</p>
                        <p class="text-sm text-black"><i class="bi bi-hand-thumbs-up-fill text-success"></i>  All time popular</p>
                    </div>
                </div> --}}
            </div>

            <div class="col-md-9">
                <div class="text-center p-2" style="background-color:#8cc3c0;color:white;width:100%;">
                    <h1><b>Discussions</b></h1>
                </div>
                <div class="table-wrapper-scroll-y my-custom-scrollbar col-12">	
                    @if ($data_forum->count() > 0)
                        @foreach ($data_forum as $forum)
                        <div class="card m-2 p-2">
                            <div class="card-body">
                                {{-- Thread --}}
                                <div class="col-span-7 space-y-6">
                                    <div class="space-y-3">
                                        <h4 class="text-xl tracking-wide hover:text-blue-400"><a href="viewForum/{{$forum->id}}/forumDetail">{{$forum->title}}</a></h4>
                                        <p class="text-black text-sm text-justify text-break">
                                            {{$forum->description}}
                                        </p>
                                    </div>

                                    {{-- Posted By --}}
                                    <div class="flex items-center text-sm text-end text-gray-500">
                                        {{-- <i class="bi bi-person"></i> --}}
                                        Posted by: {{$forum->user->name}}
                                    </div>

                                    <div class="flex justify-between">

                                        {{-- Replies --}}
                                        {{-- <div class="flex space-x-5 text-gray-500">
                                            <a href="" class="flex items-center space-x-2">
                                                <span class="text-xs font-bold">148</span>
                                            </a>
                                        </div> --}}

                                        <div class="flex float-right">
                                            {{-- Total replies for this post --}}
                                            <a href="viewForum/{{$forum->id}}/forumDetail" class="flex items-center m-2 space-x-2 text-gray-500">
                                                <strong>
                                                    {{-- <span class="text-sm text-success">{{$data_reply}}</span> --}}
                                                    {{-- <span class="text-sm text-success">View Replies</span> --}}
                                                    <i class="bi bi-chat-dots text-success"></i>
                                                </strong>
                                            </a>

                                            {{-- Reply --}}
                                            {{-- <a href="" class="flex items-center m-2 space-x-2 text-gray-500">
                                                <strong>
                                                <span class="text-sm text-success">Reply</span>
                                                <i class="bi bi-reply-all-fill text-success"></i>
                                                </strong>
                                            </a> --}}

                                            {{-- @if ($data_forum->user_id === auth()->id()) --}}
                                                {{-- Edit button --}}
                                                <a href="viewForum/{{$forum->id}}/edit" class="flex items-center m-2 space-x-2 text-gray-500">
                                                    <strong>
                                                    {{-- <span class="text-sm text-primary">Edit</span> --}}
                                                    <i class="bi bi-pencil-square text-primary"></i>
                                                    </strong>
                                                </a>

                                                {{-- Delete Button --}}
                                                <a href="viewForum/{{$forum->id}}/delete" class="flex items-center m-2 space-x-2 text-gray-500" onClick = "return confirm('Are you sure you want to delete this data?')">
                                                    <strong>
                                                    {{-- <span class="text-sm text-danger">Delete</span> --}}
                                                    <i class="bi bi-trash text-danger"></i>
                                                    </strong>
                                                </a>
                                            {{-- @endif --}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    @else
                    <div class="text-center m-5">
                        <span>No discussions posted</span>
                    </div>
                    @endif
                    
                </div>
            </div>
        </div>
    </div>

    {{-- modal to create new forum --}}
    <div class="modal fade" id="createForum" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Post A Forum</h5>
                    <button type="button" class="btn btn-secondary" data-coreui-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <form action="/viewForum/createForum" method="POST">
                    {{csrf_field()}}

                    {{-- forum heading --}}
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label"><b>Forum Title:</b></label>
                        <input name="title" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Forum Title">
                    </div>

                    {{-- forum categories --}}
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label"><b>Categories:</b></label>
                        <select name="category" class="form-control" aria-label="gender">
                            <option disabled selected>Choose Forum Category</option>
                            <option value="PSM Related (General)">PSM Related (General)</option>
                            <option value="Others">Others</option>
                            <option value="PSM Rubric">PSM Rubric</option>
                            <option value="Industry Evaluation">Industry Evaluation</option>
                        </select>
                    </div>

                    {{-- forum description --}}
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label"><b>Description:</b></label>
                        <textarea name="description" class="form-control summernote" id="" cols="30" rows="10"></textarea>
                        {{-- <div id="editor">
                            <input name="description" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Forum Description">
                        </div> --}}
                    </div>
                    
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-success">Post Forum</button>
                    <button type="button" class="btn btn-danger" data-coreui-dismiss="modal">Cancel</button>
                </div>
            </form>
            </div>
        </div>
    </div>

    {{-- modal to edit existing forum --}}
    {{-- <div class="modal fade" id="editForum" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Post A Forum</h5>
                    <button type="button" class="btn btn-secondary" data-coreui-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <form action="/viewForm/{{$data_forum->id}}/update" method="POST">
                    {{csrf_field()}}

                    
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label"><b>Forum Title:</b></label>
                        <input name="title" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Forum Title" value="{{$data_forum->title}}">
                    </div>

                    
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label"><b>Category:</b></label>
                        <select name="category" class="form-control" aria-label="gender">
                            
                            <option value="PSM Related (General)" @if($data_forum->category=='PSM Related (General)') selected @endif>PSM Related (General)</option>
                            <option value="Others" @if($data_forum->category=='Others') selected @endif>Others</option>
                            <option value="PSM Rubric" @if($data_forum->category=='PSM Rubric') selected @endif>PSM Rubric</option>
                            <option value="Industry Evaluation" @if($data_forum->category=='Industry Evaluation') selected @endif>Industry Evaluation</option>
                        </select>
                    </div>

                    
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label"><b>Description:</b></label>
                        <textarea name="description" class="form-control summernote" id="" cols="30" rows="10">{{$data_forum->description}}</textarea>
                    </div>
                    
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-success">Update Forum</button>
                    <button type="button" class="btn btn-danger" data-coreui-dismiss="modal">Cancel</button>
                </div>
            </form>
            </div>
        </div>
    </div> --}}
@endsection