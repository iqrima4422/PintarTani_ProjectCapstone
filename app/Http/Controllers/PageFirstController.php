<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageFirstController extends Controller
{

    function pageindex()
    {
        return view('PageFirst.pagefirst',['tittle' => 'Aplikasi Pintar Tani']);
    }

}
