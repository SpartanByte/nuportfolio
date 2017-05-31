<?php

namespace App\Http\Controllers;

use App\Http\Requests\Gallery\GalleryRequest;
// use Services; <-- currently trying this from App\Http\Requests
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

        return view('pages/photography', ['imagePath' => $imagePath, 'imageFiles' => $imageFiles]); 

        /* Am trying to move this to a Request(?), using

        public function makePhotographyGallery(GalleryRequest $request){
            
            $this->request->imageFiles = $imageFiles;
            'imageFiles' => $request->get('imageFiles'); 
            return view('pages.photography-gallery')->with($imagePath, $imageFiles); */
    }

    /**
     * Automatically pulls folders from the images/photoshop directory
     * Displays these images on "pages/photoshop-gallery"
     */
    public function makePhotoshopGallery(){

        $imagePath = 'images/photoshop';
        $imageFiles = File::allFiles($imagePath);

        return view('pages/photoshop', ['imagePath' => $imagePath, 'imageFiles' => $imageFiles]);

    }
}
