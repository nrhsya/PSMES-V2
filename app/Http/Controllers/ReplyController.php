<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Forum;
use App\Models\Reply;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ReplyController extends Controller
{
    // display list of replies for chosen forum
    public function listReply()
    {
        // $data_forum = Reply::with(['forums' => function($query){
        //     $query->with(['replies']);
        // }])->get();

        $data_forum = Reply::all();
        // $data_forum = Reply::whereForumId(Forum::id())->get();
        // dd($data_forum);

        return view('manageForum/forumDetails', ['data_forum' => $data_forum]);
    }

    //reply to forum
    public function replyForum(Request $request)
    {
        $reply = new Reply();

        $reply->forum_id = $request->forum_id;
        $reply->user_id = Auth::id();
        $reply->reply_detail = $request->reply_detail;
        
        $reply->save();

        return back()->with('success', 'Reply Successfully Posted!');
    }

    // calculate total reply for each forum
    // public function calcReply()
    // {
    //     $data_reply = Reply::all()
    //     ->groupBy('forum_id')
    //     ->count();

    //     return view('manageForum/viewForum', ['data_reply' => $data_reply]);
    // }
}
