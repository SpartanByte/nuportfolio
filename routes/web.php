<?php
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
<<<<<<< HEAD
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
=======
>>>>>>> bwardwell
*/

  Route::get('/home', 'HomeController@index');
  Route::get('/', 'PageController@home');

  // Intervention Image Example 
  Route::get('photos/image_example', 'PageController@interventionExample');

/**
 * PAGE CONTROLLER ROUTES ======================================
<<<<<<< HEAD
 * ==== replacing PageController
=======
>>>>>>> bwardwell
 */
Route::group(['prefix' => 'pages'], function(){
  Route::get('about', 'PageController@about'); // About page
  Route::get('image-example', 'PageController@interventionExample'); // Image Intervention Example page
  Route::get('upload', 'PageController@upload'); // Image Upload page
  Route::get('intervention', 'PageController@interventionCreate'); // Image Intervention upload page 'photos/create'
}); 

<<<<<<< HEAD
  Route::get('about', 'PageController@about');
  Route::get('image-example', 'PageController@interventionExample');

  Route::get('intervention', function(){
    return view('photos/create');
  });

});

  Route::get('pages.upload', 'PageController@upload');
  Route::get('pages.success', 'PageController@success');
  Route::get('upload-success', 'PageController@uploadSuccess');

=======
>>>>>>> bwardwell
/**
 * CODE PAGE CONTROLLER ROUTES ======================================
 * 
 */
Route::group(['prefix' => 'coding'], function()
{
<<<<<<< HEAD
    Route::get('general', 'CodePageController@general');
    Route::get('java', 'CodePageController@javaPage');
    Route::get('javascript', 'CodePageController@javascriptPage');
    Route::get('php', 'CodePageController@phpPage');
    Route::get('python', 'CodePageController@pythonPage');
    Route::get('csharp', 'CodePageController@csharpPage');
    Route::get('css', 'CodePageController@cssPage');
    Route::get('umbraco', 'CodePageController@umbracoPage');
=======
    Route::get('general', 'CodePageController@general'); // General Coding Information page
    Route::get('java', 'CodePageController@javaPage'); // Java page
    Route::get('javascript', 'CodePageController@javascriptPage'); // JavaScript page
    Route::get('php', 'CodePageController@phpPage'); // PHP page
    Route::get('python', 'CodePageController@pythonPage'); // Python page
    Route::get('csharp', 'CodePageController@csharpPage'); // C# page
    Route::get('css', 'CodePageController@cssPage'); // CSS page
    Route::get('umbraco', 'CodePageController@umbracoPage'); // Umbraco page
>>>>>>> bwardwell
});

/**
 * GALLERY ROUTES ====================================================
 */
// * Gallery Template, will eventually move to a TemplateController when Admin Panel is built
Route::get('templates/gallery-template', 'PageController@galleryTemplate');
Route::get('pages/photography', 'GalleryController@makePhotographyGallery'); // Generates gallery/shows view
Route::get('pages/photoshop', 'GalleryController@makePhotoshopGallery'); // Generates gallery/shows view

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
<<<<<<< HEAD
// Refactoring routes, will remove
Route::get('contact', 'ContactController@create')->name('contact');
  // ['as' => 'contact', 'uses' => 'ContactController@create']);
Route::post('contact', 'ContactController@store')->name('contact_store');
  // ['as' => 'contact_store', 'uses' => 'ContactController@store']);


=======
// Creates and sends contact email
Route::get('contact', 'ContactController@create')->name('contact');
Route::post('contact', 'ContactController@store')->name('contact_store');
>>>>>>> bwardwell

/**
 * IMAGE INTERVENTION (EXAMPLE AND UPLOAD) ROUTES
 */
Route::resource('photos', 'PhotosController'); 
/**
 * Routes to image uploads, index and gallery
 */
Route::group(['prefix' => 'photos'], function()
{
  Route::get('create', 'PhotosController@create'); // upload page
  Route::get('show', 'PhotosController@show'); // show and index both list uploaded files (will only need one view)
  Route::get('index', 'PhotosController@index');
  Route::get('image_example', 'PhotosController@interventionExample'); // Static example of the Image Intervention resizing result page
});

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

/**
 * START OF ROUTES FOR PROGRAMMING EXAMPLES
 */
Route::group(['prefix' => 'programs/js'], function(){
<<<<<<< HEAD

  Route::get('jquery-toggling', 'ProgramSampleController@jqueryToggle');
  Route::get('slideshow', 'ProgramSampleController@jsSlideshow');

});


=======
  Route::get('jquery-toggling', 'ProgramSampleController@jqueryToggle'); // jQuery toggle example
  Route::get('slideshow', 'ProgramSampleController@jsSlideshow'); // JavaScript slideshow example
>>>>>>> bwardwell

});