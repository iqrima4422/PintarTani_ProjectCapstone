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

    function detail($id)
    {
        $article = Article::find($id);
        return view('HomePage.detail-article', ['article' => $article], ['title' => 'Detail Article']);
    }
    
    function createArticle() {
        return view('AdminView.createDataArticle')->with('title', 'Create Article');
    }

    function storeArticle (Request $request) {
        $this->validate($request, [
            'judul' => 'required',
            'penulis' => 'required',
            'tahun' => 'required',
            'gambar' => 'required',
            'deskripsi' => 'required',
        ]);

        if($request->file('gambar')){
            $image_name = $request->file('gambar')->store('image', 'public');
        }

        $article = new Article;
        $article->judul = $request->judul;
        $gambar = $request->file('gambar')->store('gambar', 'public');
        $article -> gambar = $gambar;
        $article->penulis = $request->penulis;
        $article->tahun = $request->tahun;
        $article->deskripsi = $request->deskripsi;
        
        $article->save();

        return redirect('/dataArticle');
    }

    function editArticle ($id) {
        $article = Article::find($id);
        return view('AdminView.editDataArticle')->with('title', 'Edit Article')->with('article', $article);
    }

    function updateDataArticle (Request $request, $id) {
        $this->validate($request, [
            'judul' => 'required',
            'penulis' => 'required',
            'tahun' => 'required|numeric',
            'gambar' => 'required',
            'deskripsi' => 'required',
        ]);

        if($request -> hasFile('gambar')){
            $article = Article::find($id);
            $article->judul = $request->judul;
            $gambar = $request->file('gambar')->store('gambar', 'public');
            $article ->gambar = $gambar;
            $article->penulis = $request->penulis;
            $article->tahun = $request->tahun;
            $article->deskripsi = $request->deskripsi;
            $article->save();
            return redirect('/dataArticle')->with('success', 'Data Berhasil Diubah');
        } else {
            $article = Article::find($id);
            $article->judul = $request->judul;
            $article->gambar = $request->gambar;
            $article->penulis = $request->penulis;
            $article->tahun = $request->tahun;
            $article->deskripsi = $request->deskripsi;
            $article->save();
            return redirect('/dataArticle')->with('success', 'Data Berhasil Diubah');
        }
    }

    function destroyArticle ($id) {
        $article = Article::find($id);
        $article->delete();
        return redirect('/dataArticle');
    }
}