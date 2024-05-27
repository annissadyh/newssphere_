<?php

namespace App\Http\Controllers;

use App\Models\Article;    
use App\Models\Kategori;    
use Illuminate\Http\Request;

class LandingPageController extends Controller
{
    public function index()
    {
        $category = Kategori::all();
        $article = Article::all();
        return view('landingpage.home', [
            'category' => $category,
            'article' => $article
        ]);
    }

    public function detail($slug)
    {
        $category = Kategori::all();
        $article = Article::where('slug', $slug)->first();
        $postinganTerbaru = Article::orderBy('created_at', 'DESC')->limit('5')->get();

        return view('landingpage.article.detail-article', [
            'article' => $article,
            'category' => $category,
            'postinganTerbaru' => $postinganTerbaru
        ]);
    }
}
