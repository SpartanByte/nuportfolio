<?php
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
*/
/*
  |--------------------------------------------------------------------------
  | PAGE ROUTES
  |--------------------------------------------------------------------------
  | Main routes to pages using the PageController
*/

  Route::get('/home', 'HomeController@index');
  Route::get('/', 'PageController@home');

  // Intervention Image Example 
  Route::get('photos/image_example', 'PageController@interventionExample');
/**
 * Page Routes 
 */
Route::group(['prefix' => 'pages'], function(){

  Route::get('about', function(){
    return view('pages/about');
  });

  Route::get('slideshow', function(){
    return view('pages/slideshow');

  Route::get('image-example', function(){
    return view('photos/image_example');
  });

  Route::get('intervention', function(){
    return view('photos/create');
  });

});



});


  Route::get('pages.upload', 'PageController@upload');
  Route::get('pages.success', 'PageController@success');
  Route::get('upload-success', 'PageController@uploadSuccess');
  Route::get('pages.picturetest', 'PageController@pictureTest');
/**
 * CODE PAGE CONTROLLER ROUTES ======================================
 */
Route::group(['prefix' => 'coding'], function()
{
    Route::get('general', function(){ // Coding -> General Information page
      return view('coding/general');
    });

    Route::get('java', function(){ // Coding --> Java Information page
      return view('coding/java');
    });

    Route::get('javascript', function(){ // Coding --> JavaScript Information page
      return view('coding/javascript');
    });

    Route::get('php', function(){ // Coding --> CSS Information page
      return view('coding/php');
    });

    Route::get('python', function(){ // Coding --> Python Information page
      return view('coding/python');
    });

    Route::get('csharp', function(){ // Coding --> C# Information page
      return view('coding/csharp');
    });

    Route::get('css', function(){ // Coding --> CSS Information page
      return view('coding/css');
    });

    Route::get('umbraco', function(){ // Coding --> Umbraco page
      return view('coding/umbraco');
    });

    // Route::get('coding/java', 'CodePageController@javaSamples');
    // Route::get('coding/javascript', 'CodePageController@javascriptPage');
    // Route::get('coding/php', 'CodePageController@phpSamples');
    // Route::get('coding/python', 'CodePageController@pythonSamples');
    // Route::get('coding/csharp', 'CodePageController@csharpSamples');
    // Route::get('coding/css', 'CodePageController@cssSamples');
    // Route::get('coding/umbraco-cms', 'CodePageController@umbracoCms');
});

/**
 * GALLERY ROUTES ====================================================
 */
// * Gallery Template, will eventually move to a TemplateController when Admin Panel is built
Route::get('templates/gallery-template', 'PageController@galleryTemplate');
// Photography Route :: Generates gallery and shows view
Route::get('pages/photography', 'GalleryController@makePhotographyGallery');
// Photoshop Route :: Generates gallery and shows view
Route::get('pages/photoshop', 'GalleryController@makePhotoshopGallery');


/*
  |--------------------------------------------------------------------------
  | FORM ROUTES
  |--------------------------------------------------------------------------
 */
/**
 * Routes for Image Uploader
 */
Route::get('upload', function(){
    return View::make('pages.upload');
});
Route::post('apply/upload', 'UploadController@upload');

/**
 *  Contact Form Routes
 */
Route::get('contact',
  ['as' => 'contact', 'uses' => 'ContactController@create']);
Route::post('contact',
  ['as' => 'contact_store', 'uses' => 'ContactController@store']);
/**
 * Routes for Upload/Display Intervention Image example
 */
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

function user_photos_path(){
  return public_path() . '/images/';
} 


/*
  |--------------------------------------------------------------------------
  | ROUTES FOR DISTRIBUTING TRAFFIC AND ANY OTHER NEEDED PROGRAMMING FOR THE 
  | PROGRAM SAMPLES OF JAVASCRIPT, PHP, C#, JAVA, ETC
  |--------------------------------------------------------------------------
 */
/**
 * START OF ROUTES FOR PROGRAMMING EXAMPLES
 */
Route::get('javascript-programs/jquery-toggling', 'ProgramSampleController@jqueryToggle');

<<<<<<< HEAD

Route::get('includes/phpimagefunctions.php', 'ImageFunctionController@getInclude');
=======
/**
 * ROUTE RETURNING UPLOADED IMAGES ======================================
 */
  // Making sure this is not being used before removing completely
 /*Route::get('intervention-resizeImage',['as'=>'intervention.getresizeimage','uses'=>'FileController@getResizeImage']);
 Route::post('intervention-resizeImage',['as'=>'intervention.postresizeimage','uses'=>'FileController@postResizeImage']); */
>>>>>>> 267022cfa791e5ccc784a04ccfdc6ff26a23108f
