<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use App\Models\Article;

class PageFirstController extends Controller
{

    function pageindex()
    {
        $article = Article::all();
        return view('PageFirst.pagefirst',['articles' => $article], ['tittle' => 'Aplikasi Pintar Tani']);
    }

}