<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Intervention\Image\ImageManager;
use Image;
use Response;
use File;

class CodePageController extends Controller
{
    /**
     * THIS CONTROLLER IS RESPONSIBLE FOR ALL PAGES WITHIN THE CODE SAMPLES AND THEIR FUNCTIONALITY
     * @return [type] [description]
     */
    public function info()
    {
        return view('code_pages.code-information');
    }
    
    public function javascriptPage()
    {
    	return view('code_pages.javascript-examples');
    }
}
