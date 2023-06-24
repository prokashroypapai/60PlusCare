<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\Location;
use Illuminate\Http\Request;
use View;
use Response;

class SitemapController extends Controller
{
    public function index()
    {
        $content = View::make('sitemap.index');
        return Response::make($content)->header('Content-Type', 'text/xml;charset=utf-8');
    }

    public function pagesitemap()
    {
        /*$pages = Page::select('page_slug')
            ->where('status', 'ACTIVE')
            ->orderBy('page_slug', 'asc')
            ->get();*/

        $content = View::make('sitemap.pages');
        return Response::make($content)->header('Content-Type', 'text/xml;charset=utf-8');
    }

    public function articlesitemap()
    {
        $blogs = Article::select('slug', 'updated_at')
            ->where('status', true)
            ->orderBy('id', 'desc')
            ->get();

        $content = View::make('sitemap.article', ['blogs' => $blogs]);
        return Response::make($content)->header('Content-Type', 'text/xml;charset=utf-8');
    }

    public function locationsitemap()
    {
        $locations = Location::select('location_slug', 'updated_at')
            ->where('status', true)
            ->orderBy('id', 'desc')
            ->get();

        $content = View::make('sitemap.location', ['locations' => $locations]);
        return Response::make($content)->header('Content-Type', 'text/xml;charset=utf-8');
    }

}
