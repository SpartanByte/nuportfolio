<?php
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/
  // not using yet (requires authentication code)
  Route::get('/home', 'HomeController@index');

  // Homepage
  Route::get('/', 'PageController@home');

/**
 * PAGE CONTROLLER ROUTES ======================================
 */
Route::group(['prefix' => 'pages'], function(){
  Route::get('about', 'PageController@about'); // About page
  Route::get('image-example', 'PageController@interventionExample'); // Image Intervention Example page
  Route::get('upload', 'PageController@upload'); // Image Upload page
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
 * CODE SAMPLE ROUTES ====================================================
 * Programming examples going from (language from dropdown menu)-> selected example
 */
Route::group(['prefix' => 'programs/js'], function(){
  Route::get('jquery-toggling', 'CodeSampleController@jqueryToggle'); // jQuery toggle example
  Route::get('slideshow', 'CodeSampleController@jsSlideshow'); // JavaScript slideshow example
});

Route::group(['prefix' => 'programs/php'], function(){
  Route::get('timeanddates', 'CodeSampleController@phpTime');
  Route::get('timeanddates', 'CodeSampleController@phpHolidays');
});

/**
 * CONTACT FORM ROUTES ====================================================
 * Creates and sends contact email
 */
Route::get('contact', 'ContactController@create')->name('contact');
Route::post('contact', 'ContactController@store')->name('contact_store');

/**
 * GALLERY ROUTES ====================================================
 */
// * Gallery Template, will eventually move to a TemplateController when Admin Panel is built
Route::get('templates/gallery-template', 'PageController@galleryTemplate'); // just a static template for page structure copy/paste
Route::get('pages/photography', 'GalleryController@makePhotographyGallery'); // Generates gallery/shows view
Route::get('pages/photoshop', 'GalleryController@makePhotoshopGallery'); // Generates gallery/shows view

/**
 * IMAGE UPLOADER ROUTES ('/upload') ==================================
 * Note: This image uploader is not using Invervention Image 
 */
Route::get('upload', function(){
    return View::make('pages.upload');
});
Route::post('apply/upload', 'UploadController@upload');

/**
 * IMAGE INTERVENTION ROUTES ('/photos/create') ============================================
 * Portion of Image Intervention for upload functionality and example of uploaded result
 */

// Intervention Image Example 
Route::get('photos/image_example', 'PhotosController@interventionExample');

// RESTful Resource Controller for CRUD
Route::resource('photos', 'PhotosController'); 
/**
 * Routes to image uploads, index and gallery
 */
Route::group(['prefix' => 'photos'], function()
{
  Route::get('create', 'PhotosController@create'); // upload page
  Route::get('show', 'PhotosController@show'); // show and index both list uploaded files (will only need one view)
  Route::get('index', 'PhotosController@index');
});


// post functionality for photos
Route::post('photos/show', function(){
	$imageName = new ImageName;
	$imageName->fileName = $request->fileName;
	$imageName->save();
	return redirect('photos/index');
});

/**
 * ROUTE RETURNING UPLOADED IMAGES ======================================
 */
  // Making sure this is not being used before removing completely
 /*Route::get('intervention-resizeImage',['as'=>'intervention.getresizeimage','uses'=>'FileController@getResizeImage']);
 Route::post('intervention-resizeImage',['as'=>'intervention.postresizeimage','uses'=>'FileController@postResizeImage']); */

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

// Route::get('includes/phpimagefunctions.php', 'ImageFunctionController@getInclude');