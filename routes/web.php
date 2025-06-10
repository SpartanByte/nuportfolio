<?php
    use Illuminate\Http\Request;
    use App\Models\ImageName;

    use App\Http\Controllers\CodePageController;
    use App\Http\Controllers\CodeSampleControllers;
    use App\Http\Controllers\ContactController;
    use App\Http\Controllers\GalleryController;
    use App\Http\Controllers\PageController;
    use App\Http\Controllers\PhotosController;
    use App\Http\Controllers\PostController;
    use App\Http\Controllers\PostViewController;

    /**
     * Last Updated: 05/2025
     */
    // Route::get('/home', 'HomeController@index');
    // Route::get('/register', 'HomeController@index');
    // Homepage
    Route::get('/', [PageController::class, 'home'])->name('home');
    // Route::get('/vue', function(){
    //     return view('vue');
    // });
 
/* === PAGE CONTROLLER ROUTES  === */
Route::prefix('pages')->controller(PageController::class)->group(function () {
    Route::get('background', 'background')->name('background'); // My background page
    Route::get('experience', 'experience')->name('experience'); // My Experience page
    Route::get('projects', 'projects')->name('projects'); // Projects Page
    Route::get('image-example', 'interventionExample'); // Image Intervention Example page
    Route::get('upload', 'upload'); // Image Upload page
    Route::get('skills-rundown', 'skillSRundown')->name('skills-rundown');
    Route::get('skills', 'skills')->name('skills');
});

/* === CODING PAGES ROUTES === */
Route::prefix('coding')->controller(CodePageController::class)->group(function () {
    Route::get('general', 'CodePageController@general')->name('general'); // General
    Route::get('java', 'CodePageController@javaPage')->name('java'); // Java
    Route::get('javascript', 'CodePageController@javascriptPage')->name('javascript'); // JavaScript
    Route::get('php', 'CodePageController@phpPage')->name('php'); // PHP
    Route::get('python', 'CodePageController@pythonPage')->name('python'); // Python
    Route::get('csharp', 'CodePageController@csharpPage')->name('csharp'); // CSharp
    Route::get('css', 'CodePageController@cssPage')->name('css'); // CSS
    Route::get('umbraco', 'CodePageController@umbracoPage')->name('umbraco'); // Umbraco
    Route::get('laravel', 'CodePageController@laravelPage')->name('laravel'); // Laravel
    Route::get('examples', 'CodePageController@examplesIndex')->name('examples');
    Route::get('iot-ar', 'CodePageController@internetOfThingsAR')->name('iot-ar'); // IoT
});

/** === CODE SAMPLE ROUTES === */
/* Code Examples */
Route::prefix('programs')->controller(CodeSampleControllers::class)->group(function () {
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
Route::get('contact', [ContactController::class, 'create'])->name('contact');
Route::post('contact', [ContactController::class, 'store'])->name('contact_store');

/** === GALLERY ROUTES ===*/
Route::get('templates/gallery-template', [PageController::class, 'galleryTemplate']); // just a static template for page structure copy/paste
Route::get('pages/photography', [GalleryController::class, 'makePhotographyGallery']); // Generates gallery/shows view
Route::get('pages/photoshop', [GalleryController::class, 'makePhotoshopGallery']); // Generates gallery/shows view
Route::get('pages/galleries', [GalleryController::class, 'home']);

 /** === IMAGE UPLOADER ROUTES ('/upload') === */
    Route::get('upload', function(){
      return View::make('pages.upload');
    });
    Route::post('apply/upload', 'UploadController@upload');

/**=== IMAGE INTERVENTION ROUTES === */
// Route::get('photos/image_example', 'PhotosController@interventionExample');

// RESTful Resource Controller for CRUD
Route::resource('photos', PhotosController::class);

/* Routes to image uploads, index and gallery */
Route::prefix('photos')->controller(PhotosController::class)->group(function () {
    Route::get('create', 'create');
    Route::get('show', 'show');
    Route::get('index', 'index');
});

// post functionality for photos
Route::post('photos/show', function(Request $request) {
    $imageName = new ImageName;
    $imageName->fileName = $request->fileName;
    $imageName->save();
    return redirect('photos/index');
});

// post functionality for photos
Route::post('photos/show', function(Request $request) {
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
// Resource route
Route::resource('posts', PostViewController::class);

// Additional custom routes with the 'posts' prefix
Route::prefix('posts')->group(function () {
    Route::get('index', [PostViewController::class, 'index'])->name('index'); // indexing posts
    Route::get('show', [PostViewController::class, 'show']); // showing posts
    Route::get('{id}', [PostViewController::class, 'showPost']); // show single post by id
});


// setting up user to be required to sign in to access /admin
Auth::routes();
// Admin Routes
Route::middleware(['auth'])->group(function () {
    // Create & Store
    Route::get('/admin/create', [PostController::class, 'create'])->name('admin.create');
    Route::post('/', [PostController::class, 'store'])->name('admin.store');

    // Index & Show
    Route::get('/admin/index', [PostController::class, 'home'])->name('admin.home');
    Route::get('/admin', [PostController::class, 'home']);
    Route::get('/admin/{id}', [PostController::class, 'show'])->name('admin.show');

    // Edit & Update
    Route::get('/admin/{id}/edit', [PostController::class, 'edit'])->name('admin.edit');
    Route::post('/{id}', [PostController::class, 'update'])->name('admin.update');

    // Delete
    Route::get('/admin/{id}/delete', [PostController::class, 'destroy'])->name('admin.delete');

    // Upload Image
    Route::get('/admin/upload-image', [GalleryController::class, 'create']);
});


// TODO: REMOVE THIS AFTER UPGRADE 
// Route::get('tags/index', 'TagsController@index')->name('tags.index');
// Route::get('/admin/show', function(){
//     return view('/');
// });

// Route::get('lightbox-test', function(){
//     return view('/pages/lightbox-test');
// });

// Route::get('lightbox-test', 'PageController@lightbox');