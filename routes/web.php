<?php
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
*/

  Route::get('/home', 'HomeController@index');
  Route::get('/', 'PageController@home');

  // Intervention Image Example 
  Route::get('photos/image_example', 'PageController@interventionExample');

/**
 * PAGE CONTROLLER ROUTES ======================================
 * ==== replacing PageController
 */
Route::group(['prefix' => 'pages'], function(){

  Route::get('about', 'PageController@about');
  Route::get('image-example', 'PageController@interventionExample');

  Route::get('intervention', function(){
    return view('photos/create');
  });

});

  Route::get('pages.upload', 'PageController@upload');
  Route::get('pages.success', 'PageController@success');
  Route::get('upload-success', 'PageController@uploadSuccess');

/**
 * CODE PAGE CONTROLLER ROUTES ======================================
 * 
 */
Route::group(['prefix' => 'coding'], function()
{
    Route::get('general', 'CodePageController@general');
    Route::get('java', 'CodePageController@javaPage');
    Route::get('javascript', 'CodePageController@javascriptPage');
    Route::get('php', 'CodePageController@phpPage');
    Route::get('python', 'CodePageController@pythonPage');
    Route::get('csharp', 'CodePageController@csharpPage');
    Route::get('css', 'CodePageController@cssPage');
    Route::get('umbraco', 'CodePageController@umbracoPage');
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
// Refactoring routes, will remove
Route::get('contact', 'ContactController@create')->name('contact');
  // ['as' => 'contact', 'uses' => 'ContactController@create']);
Route::post('contact', 'ContactController@store')->name('contact_store');
  // ['as' => 'contact_store', 'uses' => 'ContactController@store']);



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
Route::post('photos/show', function(){
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
Route::group(['prefix' => 'programs/js'], function(){

  Route::get('jquery-toggling', 'ProgramSampleController@jqueryToggle');
  Route::get('slideshow', 'ProgramSampleController@jsSlideshow');

});



/**
 * ROUTE RETURNING UPLOADED IMAGES ======================================
 */
  // Making sure this is not being used before removing completely
 /*Route::get('intervention-resizeImage',['as'=>'intervention.getresizeimage','uses'=>'FileController@getResizeImage']);
 Route::post('intervention-resizeImage',['as'=>'intervention.postresizeimage','uses'=>'FileController@postResizeImage']); */