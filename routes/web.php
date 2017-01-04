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


/**
 * Page Routes 
 */
Route::get('/', function () {
    return view('pages.home');
});

/**
 * Main routes to pages using the PageController
 */
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


/**
 * Start of Coding Samples and Information Pages
 */
Route::get('code_pages.code-information', 'CodeController@info');

/**
 * Form Routes
 */
Route::get('upload', function(){
    return View::make('pages.upload');
});
Route::post('apply/upload', 'UploadController@upload');


/**
 * ROUTE RETURNING UPLOADED IMAGES
 */

Route::get('/image/{path}/{file}', ['as'=>'image', 'uses'=>'GalleryManagerController@getImage']);


 Route::get('intervention-resizeImage',['as'=>'intervention.getresizeimage','uses'=>'FileController@getResizeImage']);
 Route::post('intervention-resizeImage',['as'=>'intervention.postresizeimage','uses'=>'FileController@postResizeImage']);

/**
 * FUNCTION FOR IMAGES PATH
 */
Route::post('/pictures', function(Request $request){

	// Image code
	
	return redirect('/pictures');
});

Route::get('/pictures', function() {

	// Image code
	// $image = 
	
	return view('/pictures', $image);
});



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
