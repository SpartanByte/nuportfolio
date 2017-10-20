<?php
// not using yet (requires authentication code)
Route::get('/home', 'HomeController@index');
// Homepage
Route::get('/', 'PageController@home');
Route::get('/', 'PageController@home')->name('home');

/* === PAGE CONTROLLER ROUTES  === */
Route::group(['prefix' => 'pages'], function(){
    Route::get('about', 'PageController@about'); // About page
    Route::get('image-example', 'PageController@interventionExample'); // Image Intervention Example page
    Route::get('upload', 'PageController@upload'); // Image Upload page
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
});

/** === CODE SAMPLE ROUTES === */
/* JavaScript */
Route::group(['prefix' => 'programs'], function()
{
    // jQuery show/hide example
    Route::get('/js/jquery-toggling', 'CodeSampleController@jqueryToggle')->name('js.jquery-toggle');
    // JS slidehow
    Route::get('/js/slideshow', 'CodeSampleController@jsSlideshow')->name('js.slideshow');
    // JS Tuition Calculator
    Route::get('/js/tuition-calculator', 'CodeSampleController@tuitionCalculator')->name('js.tuition-calculator');
});

/* PHP */
Route::group(['prefix' => 'programs'], function(){
  // Route::get('/php/timeanddates', 'CodeSampleController@phpTime')->name('php.timeanddates');
  Route::get('/php/timeanddates', 'CodeSampleController@setHolidays')->name('php.timeanddates');
});

/* C# */
Route::group(['prefix' => 'programs'], function()
{
  Route::get('/csharp/guess-a-word', 'CodeSampleController@guessAWord')->name('csharp.guess-a-word');
  Route::get('/csharp/prime-numbers', 'CodeSampleController@primeNumbers')->name('csharp.prime-numbers');
});

/* === CONTACT FORM ROUTES === */
  Route::get('contact', 'ContactController@create')->name('contact');
  Route::post('contact', 'ContactController@store')->name('contact_store');

/** === GALLERY ROUTES ===*/
  Route::get('templates/gallery-template', 'PageController@galleryTemplate'); // just a static template for page structure copy/paste
  Route::get('pages/photography', 'GalleryController@makePhotographyGallery'); // Generates gallery/shows view
  Route::get('pages/photoshop', 'GalleryController@makePhotoshopGallery'); // Generates gallery/shows view
  Route::get('pages/galleries', 'GalleryController@home');

 /** === IMAGE UPLOADER ROUTES ('/upload') ===
 * Note: This image uploader is not using Invervention Image */
Route::get('upload', function(){
  return View::make('pages.upload');
});
Route::post('apply/upload', 'UploadController@upload');

/**=== IMAGE INTERVENTION ROUTES === */
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

/**ROUTE RETURNING UPLOADED IMAGES ====================================== */
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

function user_photos_path()
{
    return public_path() . '/images/';
}

Route::get('/files/python/py-calculations.html', 'CodeSampleController@testPython');

/* === POSTS ROUTING ===*/
// Frontend Post Routes
Route::resource('posts', 'PostViewController');
Route::group(['prefix' => 'posts'], function()
{
    Route::get('index', 'PostViewController@index')->name('posts'); // indexing posts
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
      Route::put('{id}',  'PostController@update')->name('admin.update');
      Route::get('/admin/upload-image', 'GalleryController@create');

  });

Route::get('/admin/show', function(){
    return view('/');
});

      // Route::get('/register', 'PageController@denyRegister')->name('deny.register'); // denies unauthorized registration

// Route::get('/', function(){
//   return view('/programs/vuejs/vue-todo');
// });

//  Route::get('programs/vuejs/vue-todo', 'TaskController@taskList');
// Route::group(['prefix' => 'api'], function () {
//   Route::resource('tasks', 'TaskController');
// });

// Route::get('/tasks', function(){
//   return view('vue');
// });
// Route::group(['prefix' => '/vue'], function () {
//     Route::post('/tasks', 'TaskController@store');

//   Route::resource('tasks', 'TaskController');
//   // Route::post('/tasks', 'TaskController@store');
// });
// Route::post('/api/tasks', 'TaskController@store');
// Route::group(['prefix' => 'api'], function(){
//   Route::resource('tasks', 'TaskController');
// });