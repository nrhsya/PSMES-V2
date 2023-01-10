<!-- to be called inside the master.blade.php -->
@extends('layouts.studentHomepageStyle')

<head>
    <title>Forum Details | PSMES</title>
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

        {{-- back button --}}
        <div class="m-2">
            <button type="button" class="btn btn-success" onclick="window.location.href='/viewForum'">
                <i class="bi bi-arrow-left"></i>
            </button>
        </div>

        <div class="row m-2">
            <div class="card mb-3 p-2">
                <div class="card-body">
                    {{-- Thread --}}
                    <div class="col-span-7 space-y-6">
                        <div class="space-y-3">
                            <h4 class="text-xl tracking-wide hover:text-blue-400">{{$data_forum->title}}</h4>
                            <p class="text-black text-sm text-justify text-break">
                                {{$data_forum->description}}
                            </p>
                        </div>

                        <div class="flex justify-between">
                            <div class="flex float-right">
                                {{-- Reply --}}
                                <a href="" class="flex items-center m-2 space-x-2 text-gray-500">
                                    <strong>
                                    <span class="text-sm text-success">Reply</span>
                                    <i class="bi bi-reply-all-fill text-success"></i>
                                    </strong>
                                </a>
                            </div>

                            {{-- Posted By --}}
                            <div class="flex items-center text-sm text-gray-500">
                                Posted by: {{$data_forum->user->name}}
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>

            <div class="card mb-3">
                <div class="row">
                    <div class="col-md-12">
                        {{-- list of replies for this post --}}
                        {{-- @if ($data_forum->count() > 0)
                            @foreach ($data_forum as $forum)
                                <div class="card mb-3">
                                    <div class="card-body">
                                        <p class="text-black text-sm text-justify text-break">
                                            {{$data_forum->reply_detail}}
                                        </p>
                                    </div>
                                    <div class="flex items-center text-sm text-gray-500 m-3">
                                        Replied by: {{$data_forum->forum->user->name}}
                                    </div>
                                </div>
                            @endforeach
                        @else
                            <div class="card mb-3">
                                <div class="card-body">
                                    <p class="text-center">No replies available for this post</p>
                                </div>
                            </div>
                        @endif --}}
                    </div>
                </div>
            </div>

            {{-- post a reply --}}
            <div class="card shadow-lg">
                <div class="card-body">
                    <form action="/forumDetails/replyForum" method="POST">
                    {{ csrf_field() }}
                        {{-- forum id --}}
                        <div class="mb-3">
                            <input name="forum_id" type="hidden" class="form-control" id="floatingName" value="{{$data_forum->id}}">
                        </div>

                        {{-- reply --}}
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label"><b>Post A Reply:</b></label>
                            <textarea name="reply_detail" class="form-control summernote" ></textarea>
                        </div>

                        <button type="submit" class="btn btn-success">Post Reply</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection