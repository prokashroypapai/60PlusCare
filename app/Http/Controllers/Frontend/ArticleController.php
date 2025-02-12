<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\Page;
use App\Models\Picture;
use App\Models\Seo;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ArticleController extends Controller
{
    public function index($slug = null){

        if($slug != null){
            $article = Article::where('slug', $slug)->first();

            $numViews = $article->num_of_views;

            $article->update(['num_of_views' => $numViews + 1]);

            $metaseo = [
                'picture_id' => $article->picture_id,
                'meta_title' => $article->title,
                'meta_description' => Str::limit(strip_tags($article->description), 180),
                'meta_keywords' => '60plus care',
                'og_title' => $article->title,
                'og_description' => Str::limit(strip_tags($article->description), 180),
            ];

            return view('frontend.article.show', compact('article', 'metaseo'));
        }
        else {
            $articles = Article::active()
                ->orderby('created_at', 'desc')
                ->get();
            $page = Page::where('page_slug', 'article')->first();
            $metaseo = Seo::where('page_id', $page->id)->first();
            return view('frontend.article.index', compact('articles', 'metaseo'));
        }
    }
}
