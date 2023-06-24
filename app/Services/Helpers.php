<?php

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Str;

function navActive($route_name)
{
    return (in_array(request()->route()->getName(), $route_name) ? "active" : '');
}


function slugGenerator($value, $model ,$column_name)
{
    $slug = Str::slug($value);

    if ($model::where($column_name, $slug)->exists()) {
        $slug = $slug.'-'.date('dmyhis');
    }

    return $slug;
}

//  function getPages()
// {
//     return PagesContent::where('status',1);
// }


// function getPageContent($type, $key)
// {
//     try {
//         return CMSPages::where('page_type', $type)->where('data_key', $key)->first()?->data_value;
//     } catch (\Throwable $th) {
//        return null;
//     }
// }


function getMediaType($url,$type)
{
    $imgExts = array("gif", "jpg", "jpeg", "png", "tiff", "tif");
    $vidExts = ["mp4", "3gp", "ogg"];
    $urlExt = pathinfo($url, PATHINFO_EXTENSION);
    return in_array($urlExt, $type == "img" ? $imgExts : $vidExts);
}
