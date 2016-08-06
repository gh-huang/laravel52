<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Comment;

class CommentController extends Controller
{
    public function index()
    {
    	return view('admin/comment/index')->withComments(Comment::all());
    }

    public function edit($id)
    {
    	return view('admin/comment/edit')->withComment(Comment::find($id));
    }

    // public function update(Request $request, $id)
    // {
    // 	$this->validate($request, [
    // 		'nickname' => 'required|unique:comments,nickname,'.$id.'|max:10',
    // 		'email' => 'required|unique:comments,email,'.$id.'|max:256',
    // 		'website' => 'required|unique:comments,website,'.$id.'|max:256',
    // 		])
    // }
}
