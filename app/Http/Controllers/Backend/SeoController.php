<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\Location;
use App\Models\Page;
use App\Models\Picture;
use App\Models\Seo;
use App\Models\Service;
use App\Services\CreatePictureService;
use Illuminate\Http\Request;

class SeoController extends Controller
{
    public function update(Request $request, CreatePictureService $createPictureService){
        $type = $request->type;
        $id = $request->id;

        if($type == 'service') {
            $service = Service::select('id')->where('id', $id)->first();
            $iddata = [
                'service_id' => $service->id
            ];
            $seo = Seo::where('service_id', $id)->first();
        }

        else if($type == 'location') {
            $location = Location::select('id')->where('id', $id)->first();
            $iddata = [
                'location_id' => $location->id
            ];
            $seo = Seo::where('location_id', $id)->first();
        }

        else if($type == 'page') {
            $page = Page::select('id')->where('id', $id)->first();
            $iddata = [
                'page_id' => $page->id
            ];
            $seo = Seo::where('page_id', $id)->first();
        }
        else if($type == 'article') {
            $article = Article::select('id')->where('id', $id)->first();
            $iddata = [
                'article_id' => $article->id
            ];
            $seo = Seo::where('article_id', $id)->first();
        }
        else{
            abort(404);
        }

        if($request->useDefault == 1){
            $ogImage = $this->getId($type, $id);
        }
        else {
            if($request->hasFile('upload')) {
                $ogImage = $createPictureService->CreateSinglePictureUpload($request);
            }
            else {
                $ogImage = isset($seo->picture_id) == null ? Picture::getDefaultImage()->id : $seo->picture_id;
            }
        }

        $data = [
            'picture_id' => $ogImage,
            'page_id' => $type == 'page' ? $request->id : null,
            'service_id' =>  $type == 'service' ? $request->id : null,
            'location_id' => $type == 'location' ? $request->id : null,
            'article_id' => $type == 'article' ? $request->id : null,
            'meta_title' => $request->meta_title,
            'meta_description' => $request->meta_description,
            'meta_keyword' => $request->meta_keyword,
            'og_title' => $request->og_title,
            'og_description' => $request->og_description,
            'og_image' => $ogImage
        ];

        Seo::updateOrCreate(
            $iddata,
            $data
        );

        return redirect()->back()->with('success', 'Saved');
    }

    public function getId($type, $id){
        if($type == 'service'){
            $service = Service::select('picture_id')->where('id', $id)->first();
            $ogImage = $service->picture_id;
        }

        if($type == 'location'){
            $location = Location::select('id')->where('id', $id)->first();
            $ogImage = $location->picture_id;
        }

        if($type == 'page'){
            $ogImage = Picture::getDefaultImage()->id;
        }

        if($type == 'article'){
            $article = Article::select('id')->where('id', $id)->first();
            $ogImage = $article->picture_id;
        }

        return $ogImage;
    }
}
