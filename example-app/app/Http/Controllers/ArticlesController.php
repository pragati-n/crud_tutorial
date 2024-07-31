<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\TodoList;

class ArticlesController extends Controller
{
    public function index()
	{
		$articles = TodoList::latest()->get();
		return view("articles.index",["articles" => $articles]);
	}
	
	public function show($id)
	{
		$article = TodoList::findOrFail($id);
		return view("articles.show",["article" => $article]);
		
	}
	public function create()
	{
		return view("articles.create");
		
	}
	public function store()
	{
		$data = $_POST;
		$article = TodoList::create(['item'=>$data['items'] , 'done_flag'=>1] );
		return redirect('articles');
	}
}
