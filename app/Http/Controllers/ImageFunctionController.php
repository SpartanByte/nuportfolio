<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ImageFunctionController extends Controller
{
    //
    public function getInclude(){
    	return view('includes/phpimagefunctions.php');
    }
}
