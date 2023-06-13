<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;



class ArticleController extends Controller
{
    function index()
    {
        
        $article = Article::all();
        return view('HomePage.article', ['articles' => $article], ['title' => 'Article Page']);
    }
}