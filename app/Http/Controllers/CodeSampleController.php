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

class CodeSampleController extends Controller
{
    //
    public function jqueryToggle()
    {
        return view('programs/js/jquery-toggling');
    }
    public function jsSlideshow()
    {
    	return view('programs/js/slideshow');
    }

    public function phpTime(){

    	$currentDate = date("n/d/Y");
    	$CST = date_default_timezone_set("America/Chicago"); 
    	$timestamp = date('h:m', time());
    	return view('programs/php/timeanddates')->with(['currentDate' => $currentDate, 'timestamp' => $timestamp]);
    }


}
