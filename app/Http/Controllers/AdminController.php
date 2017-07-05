<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;

class AdminController extends Controller
{

     // Creates a new auth controller instance
     public function __construct(){
     	$this->middleware('auth');
     }
     
     // getting the admin dashboard/home
    public function home()
    {
          $posts = Post::all();
          return view ('admin/home')->with('posts', $posts);
    }
}
