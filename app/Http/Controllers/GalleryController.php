<?php

namespace App\Http\Controllers;

use App\Http\Requests\Gallery\GalleryRequest;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use Image;
use Input;

class GalleryController extends Controller
{    
	/**
	 * Automatically pulls folders from the images/photography
	 * Displays these images on "pages/photography-gallery"
	 */
    public function makePhotographyGallery(){
        $imagePath = 'images/photography';
        $imageFiles = File::allFiles($imagePath); 
        return view('pages/photography')->with(compact('imagePath', 'imageFiles'));
    }

    /**
     * Automatically pulls folders from the images/photoshop directory
     * Displays these images on "pages/photoshop-gallery"
     */
    public function makePhotoshopGallery(){
        $imagePath = 'images/photoshop';
        $imageFiles = File::allFiles($imagePath);
        return view('pages/photoshop')->with(compact('imagePath', 'imageFiles'));
    }
}
