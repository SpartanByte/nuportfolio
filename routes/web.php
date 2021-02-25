<?php

    /**
     * Last Updated: 12/2020
     */
    Route::get('/home', 'HomeController@index');
    Route::get('/register', 'HomeController@index');
    // Homepage
    Route::get('/', 'PageController@home')->name('home');
    Route::get('/vue', function(){
        return view('vue');
    });

/* === PAGE CONTROLLER ROUTES  === */
Route::group(['prefix' => 'pages'], function(){
    Route::get('about', 'PageController@about'); // About page
    Route::get('experience', 'PageController@experience'); // My Experience page
    Route::get('projects', 'PageController@projects'); // Projects Page
    Route::get('image-example', 'PageController@interventionExample'); // Image Intervention Example page
    Route::get('upload', 'PageController@upload'); // Image Upload page
    Route::get('skills-rundown', 'PageController@skillSRundown')->name('skills-rundown');
});

/* === CODING PAGES ROUTES === */
Route::group(['prefix' => 'coding'], function()
{
    // General
    Route::get('general', 'CodePageController@general')->name('general');
    // Java
    Route::get('java', 'CodePageController@javaPage')->name('java');
    // JavaScript
    Route::get('javascript', 'CodePageController@javascriptPage')->name('javascript');
    // PHP
    Route::get('php', 'CodePageController@phpPage')->name('php');
    // Python
    Route::get('python', 'CodePageController@pythonPage')->name('python');
    // C#
    Route::get('csharp', 'CodePageController@csharpPage')->name('csharp');
    // CSS
    Route::get('css', 'CodePageController@cssPage')->name('css');
    // Umbraco
    Route::get('umbraco', 'CodePageController@umbracoPage')->name('umbraco');
    // Laravel
    Route::get('examples', 'CodePageController@examplesIndex')->name('examples');
    Route::get('iot-ar', 'CodePageController@internetOfThingsAR')->name('iot-ar');
});
    // Laravel
    Route::get('coding/laravel', 'CodePageController@laravelPage')->name('coding.laravel');

/** === CODE SAMPLE ROUTES === */


/* Code Examples */
Route::group(['prefix' => 'programs'], function(){
    // PHP
    Route::get('/php/timeanddates', 'CodeSampleController@setHolidays')->name('php.timeanddates');
    // JavaScript
    Route::get('/js/jquery-toggling', 'CodeSampleController@jqueryToggle')->name('js.jquery-toggle');
    Route::get('/js/slideshow', 'CodeSampleController@jsSlideshow')->name('js.slideshow');
    Route::get('/js/tuition-calculator', 'CodeSampleController@tuitionCalculator')->name('js.tuition-calculator');
    // C#
    Route::get('/csharp/guess-a-word', 'CodeSampleController@guessAWord')->name('csharp.guess-a-word');
    Route::get('/csharp/prime-numbers', 'CodeSampleController@primeNumbers')->name('csharp.prime-numbers');
});

/* Code File Location Routes */
    Route::get('/files/python/py-calculations.html', 'CodeSampleController@testPython');

/* === CONTACT FORM ROUTES === */
    Route::get('contact', 'ContactController@create')->name('contact');
    Route::post('contact', 'ContactController@store')->name('contact_store');

/** === GALLERY ROUTES ===*/
    Route::get('templates/gallery-template', 'PageController@galleryTemplate'); // just a static template for page structure copy/paste
    Route::get('pages/photography', 'GalleryController@makePhotographyGallery'); // Generates gallery/shows view
    Route::get('pages/photoshop', 'GalleryController@makePhotoshopGallery'); // Generates gallery/shows view
    Route::get('pages/galleries', 'GalleryController@home');

 /** === IMAGE UPLOADER ROUTES ('/upload') === */
    Route::get('upload', function(){
      return View::make('pages.upload');
    });
    Route::post('apply/upload', 'UploadController@upload');

/**=== IMAGE INTERVENTION ROUTES === */
    Route::get('photos/image_example', 'PhotosController@interventionExample');

// RESTful Resource Controller for CRUD
Route::resource('photos', 'PhotosController');
/* Routes to image uploads, index and gallery */
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

// post functionality for photos
Route::post('photos/show', function(){
  $imageName = new ImageName;
  $imageName->fileName = $request->fileName;
  $imageName->save();
  return redirect('photos/index');
});

function user_photos_path()
{
    return public_path() . '/images/';
}

/* === POSTS ROUTING ===*/
Route::resource('posts', 'PostViewController');
Route::group(['prefix' => 'posts'], function()
{
    Route::get('index', 'PostViewController@index')->name('index'); // indexing posts
    Route::get('show', 'PostViewController@show'); // showing posts
    Route::get('{id}', 'PostViewController@showPost'); //
});

// setting up user to be required to sign in to access /admin
Auth::routes();
Route::group(['middleware' => ['auth']], function()
{
    // Create & Store
    Route::get('/admin/create', 'PostController@create')->name('admin.create');
    Route::post('/', 'PostController@store')->name('admin.store');
    // Index & Show
    Route::get('/admin/index', 'PostController@home')->name('admin.home');
    Route::get('/admin', 'PostController@home');
    Route::get('admin/{id}', 'PostController@show')->name('admin.show');
    // Edit & Update
    Route::get('/admin/{id}/edit', 'PostController@edit')->name('admin.edit');
    Route::post('{id}',  'PostController@update')->name('admin.update');

    Route::get('/admin/{id}/delete', 'PostController@destroy')->name('admin.delete');
    Route::get('/admin/upload-image', 'GalleryController@create');
});

Route::get('tags/index', 'TagsController@index')->name('tags.index');
Route::get('/admin/show', function(){
    return view('/');
});

Route::get('lightbox-test', function(){
    return view('/pages/lightbox-test');
});

Route::get('lightbox-test', 'PageController@lightbox');

Route::get('rsvp', 'PageController@rsvp'); // rsvp page