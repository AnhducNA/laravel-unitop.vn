<?php

namespace App\Http\Controllers;

use App\Models\FeaturedImages;
use Illuminate\Http\Request;

class FeaturedImagesController extends Controller
{
    //
    function read()
    {
        $post = FeaturedImages::find(1)
            ->post;

        return $post;
    }
}
