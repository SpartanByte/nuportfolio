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
        return view('pages.home');
    }
    public function about(){
        return view('pages/about');
    }
    public function upload()
    {
        return view('pages/upload');
    }
    // new method for gallery page template
    public function galleryTemplate(){
        return view('templates/gallery-template');
    }

    public function currentPage(){
        $currentPage = url()->current();
        return view('code_pages.code-information', $currentPage);
    }
}