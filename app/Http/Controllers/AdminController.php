<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{

     // Creates a new auth controller instance
     public function __construct(){
     	$this->middleware('auth');
     }
     
     // getting the admin dashboard/home
    public function home()
    {
        return view('admin/home');
    }
}
