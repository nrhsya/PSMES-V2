<?php

namespace App\Http\Controllers;

use App\Models\Forum;
use App\Models\Reply;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class ForumController extends Controller
{
    // display forum list
    public function displayForum()
    {
        $data_forum = Forum::all();
        // dd($data_forum);

        return view('manageForum/viewForum', ['data_forum' => $data_forum]);
    }

    // view details of forum
    public function forumDetail($id)
    {
        $data_forum = Forum::find($id);

        return view('manageForum/forumDetails', ['data_forum' => $data_forum]);
    }

    //create new forum
    public function createForum(Request $request)
    {
        $forum = new forum();

        $forum->user_id = Auth::id();
        $forum->title = $request->title;
        $forum->category = $request->category;
        $forum->description = $request->description;

        $forum->save();

        return redirect('/viewForum')->with('success', 'Forum created');
    }

    // edit existing forum
    public function edit($id)
    {
        $data_forum = Forum::find($id);
        // dd($data_forum);

        return view('manageForum/editForum', ['data_forum' => $data_forum]);
    }

    // update existing forum
    public function update(Request $request, $id)
    {
        $data_forum = Forum::find($id);
        $data_forum->update($request->all());

        return redirect('/viewForum')->with('success', 'Forum successfully updated');
    }

    // delete forum
    public function delete($id)
    {
        $data_forum = Forum::find($id);
        $data_forum->delete($data_forum);

        return redirect('/viewForum')->with('success', 'Forum successfully deleted');
    }

    // filter by category
    public function filterCategory(Request $request)
    {
        $data_forum = Forum::all()
        ->where('category', '=', $request->category);

        return view('manageForum/viewForum', ['data_forum' => $data_forum]);
    }
}
