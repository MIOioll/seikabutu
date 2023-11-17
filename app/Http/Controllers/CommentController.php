<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;
use App\Http\Requests\CommentRequest; 
use App\Models\Subject;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\Comment_returnRequest; 
use App\Models\CommentReturn;

class CommentController extends Controller
{
    public function index(Comment $comment)
    {
       return view('comments.index')->with(['comments' => $comment->getPaginateByLimit()]);
    }
    
    public function show(Comment $comment)
    {
        return view('comments.show')->with(['comment' => $comment]);
    }

    public function create(Subject $subject)
    {
        return view('comments.create')->with(['subjects' => $subject->get()]);
    }
    
    public function store(Request $request, Comment $comment)
    {
        $input = $request['comment'];
        $input['user_id']=Auth::id();
        //dd($input);
        $comment->fill($input)->save();
        return redirect('/comments/' . $comment->id);
    }
    
    public function store2(Comment_returnRequest $Comment_returnrequest, CommentReturn $comment_return)
    {
        $input = $Comment_returnrequest['comment_return'];
        $input['user_id']=Auth::id();
        //dd($input);
        $comment_return->fill($input)->save();
        return redirect('/comments/' . $comment_return->id);
    }
}
