<?php
namespace App\Services;

use Illuminate\Support\Facades\Storage;

class ImageService
{
  public static function upload($imageFile, $folderName)
  {
    if(is_array($imageFile)){
      $file = $imageFile['image'];
    } else {
      $file = $imageFile;
    }
    Storage::putFile('public/'. $folderName . '/', $file);

    return $file;
  }
}