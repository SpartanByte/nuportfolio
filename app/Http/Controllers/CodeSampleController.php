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
    	$CST = date_default_timezone_set("America/Chicago"); 
        $currentDate = date("n/j/Y");
    	$timestamp = date("h:i");
        return view('programs/php/timeanddates')->with(compact('currentDate', 'timestamp')); 
    }

    public function phpHolidays(){
        // Setting default timezone
        $timezone = date_default_timezone_set("America\Chicago");
        $today = date("n/j/Y");

        // Need to get each holiday name and date into a multidimensional array to print to a table "days until..." for example
        
    }

}
