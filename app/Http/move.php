<?php


namespace App\Http;


use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;

class move
{
    //Delacement de l'image,verification et sauvegarde apres upload.
    function move_file($file, $type='products.slide', $withWatermark = false){
        // Prenez toutes les variables
        $path = explode('.', $type)[0];
        $destinationPath = config('variables.'.$path.'.folder');
        $width           = config('variables.' . $type . '.width');
        $height          = config('variables.' . $type . '.height');
        $full_name       = Str::random(16) . '.' . $file->getClientOriginalExtension();

        if ($width == null && $height == null) { // Deplacer l'image
            $file->storeAs($destinationPath, $full_name);
            return $full_name;
        }

        // Creer l'image
        $image           = Image::make($file->getRealPath());

        if ($width == null || $height == null) {
            $image->resize($width, $height, function ($constraint) {
                $constraint->aspectRatio();
            });
        }else{
            $image->fit($width, $height);
        }

        if ($withWatermark) {
            $watermark = Image::make(public_path() . '/img/watermark.png')->resize($width * 0.5, null);

            $image->insert($watermark, 'center');
        }

        return $image->save($destinationPath . '/' . $full_name)->basename;
    }
}
