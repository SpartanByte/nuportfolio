<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/



/*
  |--------------------------------------------------------------------------
  | PAGE ROUTES
  |--------------------------------------------------------------------------
  | Main routes to pages using the PageController
  |
 */

/**
 * Page Routes 
 */
Route::get('/', function () {
    return view('pages.home');
});

Route::get('welcome', 'PageController@welcome');
Route::get('pages.about', 'PageController@about' );
Route::get('pages.upload', 'PageController@upload');
Route::get('pages.gallery-test', 'PageController@gallery');
Route::get('pages.success', 'PageController@success');
Route::get('upload2', 'PageController@upload2');
Route::get('pages.java-samples', 'PageController@showJava');
Route::get('pages.picturetest', 'PageController@pictureTest');
Route::get('photos.create', 'PageController@intervention');
Route::get('photos.image_example', 'PageController@interventionExample');
Route::get('pages.photoshop-gallery', 'PageController@photoshop');


// * Gallery Template, will eventually move to a TemplateController when Admin Panel is built
Route::get('templates.gallery-template', 'PageController@galleryTemplate');

/**
 * CODE PAGE CONTROLLER ROUTES
 */
Route::get('code_pages.code-information', 'CodePageController@info');
Route::get('code_pages.javascript-examples', 'CodePageController@javascriptPage');

/*
  |--------------------------------------------------------------------------
  | FORM ROUTES
  |--------------------------------------------------------------------------
  |
 */
Route::get('upload', function(){
    return View::make('pages.upload');
});
Route::post('apply/upload', 'UploadController@upload');


/**
 * ROUTE RETURNING UPLOADED IMAGES
 */

 Route::get('intervention-resizeImage',['as'=>'intervention.getresizeimage','uses'=>'FileController@getResizeImage']);
 Route::post('intervention-resizeImage',['as'=>'intervention.postresizeimage','uses'=>'FileController@postResizeImage']);


/**
 * The following is a tutorial from Laracasts Image Manipulation tutorial
 */
function user_photos_path(){
	return public_path() . '/images/';
} 

Route::resource('photos', 'PhotosController');
/**
 * Routes to image uploads, index and gallery
 */
Route::get('photos/create', 'PhotosController@create');
Route::get('photos/show', 'PhotosController@show');
Route::get('photos/index', 'PhotosController@index');

// post functionality for photos
Route::post('/photos/show', function(){
	$imageName = new ImageName;
	$imageName->fileName = $request->fileName;
	$imageName->save();

	return redirect('photos/index');

});

