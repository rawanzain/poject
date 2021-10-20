<?php


use Illuminate\Support\Facades\Config;
use Illuminate\Support\Str;


function uploadImage ($folder , $image){
    $image_extension = $image->getClientOriginalExtension();
    $image_name = $folder ."/". time().".".$image_extension ;
    $image->move($folder , $image_name);
    return $image_name;
}

function deletedImage($image){

    $img = Str::after($image ,'shops/');

    $img_path = base_path($img);

    unlink($img_path);

}
