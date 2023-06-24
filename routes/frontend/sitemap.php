<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\SitemapController;

/*sitemap controller*/
Route::get('sitemap.xml', [SitemapController::class, 'index']);

Route::get('page_sitemap.xml', [SitemapController::class, 'pagesitemap']);

Route::get('article_sitemap.xml', [SitemapController::class, 'articlesitemap']);

Route::get('location_sitemap.xml', [SitemapController::class, 'locationsitemap']);





Route::get('service_sitemap.xml', [SitemapController::class, 'servicesitemap']);

Route::get('product_sitemap.xml', [SitemapController::class, 'productsitemap']);
