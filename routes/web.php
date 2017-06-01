<?php
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

  Route::get('/home', 'HomeController@index');
  Route::get('/', 'PageController@home');

  // Intervention Image Example 
  Route::get('photos/image_example', 'PageController@interventionExample');

/**
 * PAGE CONTROLLER ROUTES ======================================
 */
Route::group(['prefix' => 'pages'], function(){
  Route::get('about', 'PageController@about'); // About page
  Route::get('image-example', 'PageController@interventionExample'); // Image Intervention Example page
  Route::get('upload', 'PageController@upload'); // Image Upload page
  Route::get('intervention', 'PageController@interventionCreate'); // Image Intervention upload page 'photos/create'
}); 

/**
 * CODE PAGE CONTROLLER ROUTES ======================================
 */
Route::group(['prefix' => 'coding'], function()
{
    Route::get('general', 'CodePageController@general'); // General Coding Information page
    Route::get('java', 'CodePageController@javaPage'); // Java page
    Route::get('javascript', 'CodePageController@javascriptPage'); // JavaScript page
    Route::get('php', 'CodePageController@phpPage'); // PHP page
    Route::get('python', 'CodePageController@pythonPage'); // Python page
    Route::get('csharp', 'CodePageController@csharpPage'); // C# page
    Route::get('css', 'CodePageController@cssPage'); // CSS page
    Route::get('umbraco', 'CodePageController@umbracoPage'); // Umbraco page
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
// Creates and sends contact email
Route::get('contact', 'ContactController@create')->name('contact');
Route::post('contact', 'ContactController@store')->name('contact_store');

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
  Route::get('jquery-toggling', 'ProgramSampleController@jqueryToggle'); // jQuery toggle example
  Route::get('slideshow', 'ProgramSampleController@jsSlideshow'); // JavaScript slideshow example

});