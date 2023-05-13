<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index($slug = null){

        if($slug != null){
            $article = Article::where('slug', $slug)->first();
            return view('frontend.article.show', compact('article'));
        }
        else {
            $articles = Article::active()->get();
            return view('frontend.article.index', compact('articles'));
        }
    }
}
