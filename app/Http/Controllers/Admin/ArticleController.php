<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Article;

class ArticleController extends Controller
{
    public function index()
    {
    	return view('admin/article/index')->withArticles(Article::all());
    }

    public function create()
    {
    	return view('admin/article/create');
    }

    public function store(Request $request)
    {
    	$this->validate($request, [
    		'title' => 'required|unique:articles|max:255',
    		'body' => 'required',
    	]);

    	$article = new Article;
    	$article->title = $request->get('title');
    	$article->body = $request->get('body');
    	$article->user_id = $request->user()->id;	//使用者id

    	if ($article->save()) {
    		return redirect('admin/article');
    	} else {
    		return redirect()->back()->withInput()->withErrors('保存失败!!');
    	}
    }

    public function edit(Request $request)
    {
    	var_dump($request->get('article'));
    }
}








