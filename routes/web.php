<?php
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
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
Route::get('/', 'PageController@home');
Route::get('pages.about', 'PageController@about' );
Route::get('pages.upload', 'PageController@upload');
Route::get('pages.gallery-test', 'PageController@gallery');
Route::get('pages.success', 'PageController@success');
Route::get('upload-success', 'PageController@uploadSuccess');
Route::get('pages.picturetest', 'PageController@pictureTest');
Route::get('photos.create', 'PageController@intervention');
Route::get('photos.image_example', 'PageController@interventionExample');
Route::get('pages.photoshop-gallery', 'PageController@photoshop');
Route::get('pages.photography-gallery', 'PageController@photography');
Route::get('pages.slideshow', 'PageController@slideshow');

// * Gallery Template, will eventually move to a TemplateController when Admin Panel is built
Route::get('templates.gallery-template', 'PageController@galleryTemplate');

/**
 * CODE PAGE CONTROLLER ROUTES
 */
Route::get('code_pages.code-information', 'CodePageController@info');
Route::get('code_pages.java-samples', 'CodePageController@javaSamples');
Route::get('code_pages.javascript-samples', 'CodePageController@javascriptPage');
Route::get('code_pages.php-samples', 'CodePageController@phpSamples');
Route::get('code_pages.python-samples', 'CodePageController@pythonSamples');
Route::get('code_pages.csharp-samples', 'CodePageController@csharpSamples');
Route::get('code_pages.css-samples', 'CodePageController@cssSamples');
Route::get('code_pages.umbraco-cms', 'CodePageController@umbracoCms');
/*
  |--------------------------------------------------------------------------
  | FORM ROUTES
  |--------------------------------------------------------------------------
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
 *       for testing
 */
function user_photos_path(){
	return public_path() . '/images/';
} 

Route::resource('photos', 'PhotosController');
/**
 * Routes to image uploads, index and gallery
 */
Route::get('photos/create', 'PhotosController@create');
Route::get('photos.show', 'PhotosController@show');
Route::get('photos/index', 'PhotosController@index');
Route::get('photos/image-fill-test', 'PhotosController@imageTest');

// post functionality for photos
Route::post('photos.show', function(){
	$imageName = new ImageName;
	$imageName->fileName = $request->fileName;
	$imageName->save();
	return redirect('photos/index');
});

/**
 *  Contact Form Routes
 */
Route::get('contact',
  ['as' => 'contact', 'uses' => 'ContactController@create']);
Route::post('contact',
  ['as' => 'contact_store', 'uses' => 'ContactController@store']);

Auth::routes();

Route::get('/home', 'HomeController@index');
/**
 *  START OF ADMIN AREA ROUTES
 *  
 */
Route::get('/admin/home', 'AdminController@home');


/*
  |--------------------------------------------------------------------------
  | ROUTES FOR DISTRIBUTING TRAFFIC AND ANY OTHER NEEDED PROGRAMMING FOR THE 
  | PROGRAM SAMPLES OF JAVASCRIPT, PHP, C#, JAVA, ETC
  |--------------------------------------------------------------------------
 */
Route::get('javascript-programs/jquery-toggling', 'ProgramSampleController@jqueryToggle');
