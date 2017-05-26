<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use Image;
use Input;

class GalleryController extends Controller
{
    //
    

	/**
	 * Automatically pulls folders from the images/photography/full 
	 * @return displays these images on "pages/photography-gallery"
	 */
    public function showPhotography(){
    	
    $imagePath = 'images/photography/full';

    $imageFiles = File::allFiles($imagePath);

    return view('pages.photography-gallery', ['imagePath' => $imagePath, 'imageFiles' => $imageFiles]);
    	
    }
}
