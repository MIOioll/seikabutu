<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CommentReturn;
use App\Models\Comment;
use App\Http\Requests\Comment_returnRequest;
use Illuminate\Support\Facades\Auth;

class CommentReturnController extends Controller
{
    public function creturn(Comment $comment)
    {
        return view('comments.creturn')->with(['comment' => $comment]);
    }

    public function store2(Comment_returnRequest $Comment_returnrequest, Comment $comment, CommentReturn $comment_return)
    {
        $input = $Comment_returnrequest['comment_return'];
        $input['user_id']=Auth::id();
        $input['comment_id']=$comment->id;
        $comment_return->fill($input)->save();
        return redirect('/');
    }
}
