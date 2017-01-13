<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Intervention\Image\ImageManager;
use Image;
use Response;
use File;

class PageController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function home(){
        return view('pages.home')
    }
    public function about()
    {
    	return view('pages.about');
    }

    public function upload()
    {
        return view('pages.upload');
    }
    // Move soon? (page turned into a template)
    public function gallery(){
        return view('pages.gallery-test');
    }

    public function success(){
        return view('pages.success');
    }
    public function upload2(){
        return view('pages.upload2');
    }
    public function showJava(){
        return view('pages.java-samples');
    }
    public function intervention(){
        return view('photos.create');
    }
    public function photoshop(){
        return view('pages.photoshop-gallery');
    }
    // new method for gallery page template
    public function galleryTemplate(){
        return view('templates.gallery-template');
    }

    
    public function interventionExample(){

    // These are temporary static values until the "pull each image from folder and display" issue is solved
        $fileName = 'PastelTile.jpg';
        $image = Image::make('images/PastelTile.jpg');
        $imageTitle = 'Pastel Title';
        return view('photos.image_example', ['fileName' => $fileName, 'uploadedImage' => $image, 'imageTitle' => $imageTitle]);
    }

}
