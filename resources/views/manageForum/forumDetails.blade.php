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
            
                {{-- <div class="table-wrapper-scroll-y my-custom-scrollbar col-12"> --}}
                    <div class="card mb-3 p-2">
                        <div class="card-body">
                            {{-- Thread --}}
                            <div class="col-span-7 space-y-6">
                                <div class="space-y-3">
                                    <h4 class="text-xl tracking-wide hover:text-blue-400">{{$data_forum->title}}</h4>
                                    {{-- <h4 class="text-xl tracking-wide hover:text-blue-400">Forum Title</h4> --}}
                                    <p class="text-black text-sm text-justify text-break">
                                        {{$data_forum->description}}
                                        {{-- Forum Descriptions --}}
                                    </p>
                                </div>

                                <div class="flex justify-between">

                                    {{-- Replies --}}
                                    {{-- <div class="flex space-x-5 text-gray-500">
                                        <a href="" class="flex items-center space-x-2">
                                            <span class="text-xs font-bold">148</span>
                                        </a>
                                    </div> --}}

                                    <div class="flex float-right">
                                        {{-- Reply --}}
                                        <a href="" class="flex items-center m-2 space-x-2 text-gray-500">
                                            <strong>
                                            <span class="text-sm text-success">Reply</span>
                                            <i class="bi bi-reply-all-fill text-success"></i>
                                            </strong>
                                        </a>

                                        {{-- @if ($data_forum->user_id === auth()->id()) --}}
                                            {{-- Edit button --}}
                                            {{-- <a href="viewForum/{{$forum->id}}/edit" class="flex items-center m-2 space-x-2 text-gray-500">
                                                <strong>
                                                <span class="text-sm text-primary">Edit</span>
                                                <i class="bi bi-pencil-square text-primary"></i>
                                                </strong>
                                            </a> --}}

                                            {{-- Delete Button --}}
                                            {{-- <a href="viewForum/{{$forum->id}}/delete" class="flex items-center m-2 space-x-2 text-gray-500" onClick = "return confirm('Are you sure you want to delete this data?')">
                                                <strong>
                                                <span class="text-sm text-danger">Delete</span>
                                                <i class="bi bi-trash text-danger"></i>
                                                </strong>
                                            </a> --}}
                                        {{-- @endif --}}
                                    </div>

                                    {{-- Posted By --}}
                                    <div class="flex items-center text-sm text-gray-500">
                                        {{-- <x-heroicon-o-clock class="w-4 h-4 mr-1" /> --}}
                                        Posted by: {{$data_forum->user->name}}
                                        {{-- Posted by: Hasya --}}
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

                                <div class="m-2">
                                    <p class="text-black"><strong>Replies <i class="bi bi-arrow-return-left"></i></strong></p>
                                </div>
                                
                                <div class="card m-3 shadow">
                                    <div class="card-body">
                                        <p class="text-black text-sm text-justify text-break">
                                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime mollitia,
                                            molestiae quas vel sint commodi repudiandae consequuntur voluptatum laborum
                                            numquam blanditiis harum quisquam eius sed odit fugiat iusto fuga praesentium
                                            optio, eaque rerum! Provident similique accusantium nemo autem. Veritatis
                                            obcaecati tenetur iure eius earum ut molestias architecto voluptate aliquam
                                            nihil, eveniet aliquid culpa officia aut! Impedit sit sunt quaerat, odit,
                                        </p>
                                    </div>
                                    <div class="flex items-center text-sm text-gray-500 m-3">
                                        Replied by: NUR HASYA BINTI MOHD NORDIN
                                    </div>
                                </div>

                                <div class="card m-3 shadow">
                                    <div class="card-body">
                                        <p class="text-black text-sm text-justify text-break">
                                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime mollitia,
                                            molestiae quas vel sint commodi repudiandae consequuntur voluptatum laborum
                                        </p>
                                    </div>
                                    <div class="flex items-center text-sm text-gray-500 m-3">
                                        Replied by: NUR NADIA SYAKIRAH BINTI MOHD SAUKI
                                    </div>
                                </div>

                                <div class="card m-3 shadow">
                                    <div class="card-body">
                                        <p class="text-black text-sm text-justify text-break">
                                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime mollitia,
                                            molestiae quas vel sint commodi repudiandae consequuntur voluptatum laborum
                                            numquam blanditiis harum quisquam eius sed odit fugiat iusto fuga praesentium
                                            optio, eaque rerum! Provident similique accusantium nemo autem. Veritatis
                                            obcaecati tenetur iure eius earum ut molestias architecto voluptate aliquam
                                            nihil, eveniet aliquid culpa officia aut! Impedit sit sunt quaerat, odit,
                                        </p>
                                    </div>
                                    <div class="flex items-center text-sm text-gray-500 m-3">
                                        Replied by: LOGADARSHAN A/L KRISHNAN
                                    </div>
                                </div>
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
                {{-- </div> --}}
        </div>
    </div>
@endsection