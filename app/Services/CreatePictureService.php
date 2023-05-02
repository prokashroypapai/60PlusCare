<?php


namespace App\Services;


use App\Models\Picture;
use Image;

class CreatePictureService
{
    public function CreateSinglePictureUpload($request){
        if($request->hasFile('upload')) {
            $image = $request->file('upload');

            $name = time() . '-' . time() . '-' . rand(0, 999999999) . '.' . $image->extension();
            $thumbnailImage = Image::make($image);
            $smallImage = Image::make($image);

            Image::make($image)->save('static/images/full/' . $name);

            $thumbnailImage->save('static/images/thumb/' . $name);
            $thumbnailImage->resize(512, 512);
            $thumbnailImage->save('static/images/thumb/' . $name);

            $smallImage->save('static/images/small/' . $name);
            $smallImage->resize(65, 65);
            $smallImage->save('static/images/small/' . $name);

            $image_title = $name;
            $image_alt = $name;
            $image_full = 'static/images/full/' . $name;
            $image_thumb = 'static/images/thumb/' . $name;
            $image_small = 'static/images/small/' . $name;


            $image = new Picture;
            $image->image_title = $image_title;
            $image->image_alt = $image_alt;
            $image->image_full = $image_full;
            $image->image_thumb = $image_thumb;
            $image->image_small = $image_small;
            $image->save();

            $pictureId = $image->id;
        }
        else{
            $pictureId = Picture::getDefaultImage()->id;
        }

        return $pictureId;
    }
}
