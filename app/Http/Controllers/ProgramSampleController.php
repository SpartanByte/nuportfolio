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

class ProgramSampleController extends Controller
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
}
