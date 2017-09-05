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
              Route::get('/', 'PageController@home')->name('home');


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
        /* JavaScript */
        Route::group(['prefix' => 'programs/js'], function(){
          Route::get('jquery-toggling', 'CodeSampleController@jqueryToggle'); // jQuery toggle example
          Route::get('slideshow', 'CodeSampleController@jsSlideshow'); // JavaScript slideshow example
        });

        /* PHP */
        Route::group(['prefix' => 'programs/php'], function(){
          Route::get('timeanddates', 'CodeSampleController@phpTime');
          Route::get('timeanddates', 'CodeSampleController@setHolidays');
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
      Route::get('templates/gallery-template', 'PageController@galleryTemplate'); // just a static template for page structure copy/paste
      Route::get('pages/photography', 'GalleryController@makePhotographyGallery'); // Generates gallery/shows view
      Route::get('pages/photoshop', 'GalleryController@makePhotoshopGallery'); // Generates gallery/shows view
      Route::get('pages/galleries', 'GalleryController@home');

/**
 * IMAGE UPLOADER ROUTES ('/upload') ==================================
 * Note: This image uploader is not using Invervention Image 
 */
      Route::get('upload', function(){
          return View::make('pages.upload');
      });
      Route::post('apply/upload', 'UploadController@upload');

/**IMAGE INTERVENTION ROUTES ('/photos/create') ============================================ */
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

        function user_photos_path(){
          return public_path() . '/images/';} 

      // Route::get('includes/phpimagefunctions.php', 'ImageFunctionController@getInclude');
      Route::get('/files/python/py-calculations.html', 'CodeSampleController@testPython');

/* ======================== POSTS ROUTING ==================================== */
      // Backend Posting Routes
      // Route::resource('admin', 'PostController');
        // Route::group(['prefix' => 'admin'], function()
        // {
        //       Route::get('index', 'PostController@index')->name('admin'); // indexing posts
        //       Route::get('show', 'PostController@show'); // showing posts
        //       Route::get('{id}', 'PostController@showPost'); //
        //       Route::get('store', 'PostController@store');
        //       Route::get('home', 'PostController@home');
        // });

      // Frontend Post Routes
      Route::resource('posts', 'PostViewController');
        Route::group(['prefix' => 'posts'], function()
        { 
            Route::get('index', 'PostViewController@index')->name('posts'); // indexing posts
              Route::get('show', 'PostViewController@show'); // showing posts
              Route::get('{id}', 'PostViewController@showPost'); //
              // Route::get('store', 'PostViewController@store')->name('admin.store');

        });

      // setting up user to be required to sign in to access /admin
      Auth::routes();
      Route::group(['middleware' => ['auth']], function()
      {
          Route::get('/admin/create', 'PostController@create')->name('admin.create');
          Route::post('/', 'PostController@store')->name('admin.store');
          Route::get('/admin/index', 'PostController@home')->name('admin.home');
          Route::get('/admin', 'PostController@home');

          Route::get('/admin/{id}/edit', 'PostController@edit')->name('admin.edit');
          Route::put('{id}',  'PostController@update')->name('admin.update');

          Route::get('admin/{id}', 'PostController@show')->name('admin.show');
      });

      Route::get('/register', 'PageController@denyRegister')->name('deny.register'); // denies unauthorized registration
// Route::get('pages/confirmation', '')