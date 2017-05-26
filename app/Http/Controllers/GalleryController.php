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
	 * Automatically pulls folders from the images/photography
	 * Displays these images on "pages/photography-gallery"
	 */
    public function showPhotography(){
    	
        $imagePath = 'images/photography';
        $imageFiles = File::allFiles($imagePath);

        return view('pages.photography-gallery', ['imagePath' => $imagePath, 'imageFiles' => $imageFiles]);	
    }

    /**
     * Automatically pulls folders from the images/photoshop directory
     * Displays these images on "pages/photoshop-gallery"
     */
    
    public function makePhotoshopGallery(){

        $imagePath = 'images/photoshop';
        $imageFiles = File::allFiles($imagePath);

        return view('pages.photoshop-gallery', ['imagePath' => $imagePath, 'imageFiles' => $imageFiles]);

    }
}
