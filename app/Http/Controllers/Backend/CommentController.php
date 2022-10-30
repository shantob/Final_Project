<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function commentlist()
    {
        $comments = Comment::all();
        return view('backend.comment',compact('comments'));
    }
    public function commenttdelete($id)
    {
        $comments = Comment::find($id);
        $comments->delete();
        return redirect()->route('admin.commentlist')->with('success','Comment Successfull Delete!!!');
    }
}
