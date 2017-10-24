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
    public function general(){
        return view('coding.general');
    }
    public function javaPage()
    {
        return view('coding.java');
    }
    public function javascriptPage()
    {
    	return view('coding.javascript');
    }
    public function phpPage(){

        return view('coding.php');
    }
    public function pythonPage(){
        return view('coding.python');
    }
    public function csharpPage(){
        return view('coding.csharp');
    }
    public function cssPage(){
        return view('coding.css');
    }
    public function umbracoPage(){
        return view('coding.umbraco');
    }

}
