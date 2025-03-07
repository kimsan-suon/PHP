<?php

namespace App\Http\Controllers;

use App\Models\article;
use App\Models\Post;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index(){
        $articles = Article::all();
        return view('articles', ['items' => $articles]);
    }
}
