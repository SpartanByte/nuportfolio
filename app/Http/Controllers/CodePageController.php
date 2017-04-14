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
    public function javaSamples()
    {
        return view('code_pages.java-samples');
    }
    public function javascriptPage()
    {
    	return view('code_pages.javascript-samples');
    }
    public function phpSamples(){

        return view('code_pages.php-samples');
    }
    public function pythonSamples(){
        return view('code_pages.python-samples');
    }
    public function csharpSamples(){
        return view('code_pages.csharp-samples');
    }
    public function cssSamples(){
        return view('code_pages.css-samples');
    }
    public function umbracoCms(){
        return view('code_pages.umbraco-cms');
    }
}
