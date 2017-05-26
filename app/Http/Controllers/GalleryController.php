<?php

namespace App\Http\Controllers;

use Services;
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
    public function makePhotographyGallery(){
    	
        $imagePath = 'images/photography';
        $imageFiles = File::allFiles($imagePath); 
        // $this->request->imageFiles = $imageFiles;
       // 'imageFiles' => $request->get('imageFiles');
        return view('pages.photography-gallery', ['imagePath' => $imagePath, 'imageFiles' => $imageFiles]);	
        // return view('pages.photography-gallery', ['imageFiles' => $imageFiles]);
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
