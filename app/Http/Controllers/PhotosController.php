<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use Image;
use Input;

class PhotosController extends Controller
{
    public function index(){
    	return view('photos/index');
    }

    public function create(){
    	return view('photos/create');
    }

    public function store(){
    	$input = Input::all();
    	$path = user_photos_path();
    	$fileName = $input['fileName']->getClientOriginalName();

    	File::exists($path) or File::makeDirectory($path);
    	$file = 'name-of-file';
    	$image = Image::make($input['fileName']->getRealPath());
        $imageTitle = $input['imageTitle'];

    	$image->save($path . $fileName)
    		->greyscale()
    		->save($path . 'amended-' . $fileName);
        return view('photos.index', ['fileName' => $fileName, 'uploadedImage' => $image, 'imageTitle' => $imageTitle]);
    }

    public function show(){
<<<<<<< HEAD
    	
        $imagePath = 'uploads';
    	/* $imagePath = user_photos_path(); */

=======
        $imagePath = 'uploads';
>>>>>>> bwardwell
    	$imageFiles = File::allFiles($imagePath);
    	return view('photos/show', ['imagePath' => $imagePath, 'imageFiles' => $imageFiles]);
    }

    public function interventionExample(){
    // These are temporary static values until the "pull each image from folder and display" issue is solved
        $fileName = 'PastelTile.jpg';
        $image = Image::make('images/PastelTile.jpg');
        $imageTitle = 'Pastel Title';
        return view('photos/image_example', ['fileName' => $fileName, 'uploadedImage' => $image, 'imageTitle' => $imageTitle]);
    }
    /* Create a worker class for image functionality and run it through the controller rather than the Controller doing the logic */
}
