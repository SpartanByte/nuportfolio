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
    	return view('photos.index');
    }

    public function create(){
    	return view('photos.create');
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


    	/*
    	$imagePath = user_photos_path();
    	$imageFiles = File::allFiles($imagePath);

    	return view('photos.show', $imageFiles);
    	*/
    }
}
