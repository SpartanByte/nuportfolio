<?php  
	
	namespace Services\Gallery;

	use Illuminate\Http\Request;
	use App\Http\Controllers\Controller;
	use Illuminate\Support\Facades\File;
	use Image;
	use Input;


	class GalleryWorker{

		public function getPhotography(){


			$imagePath = 'images/photography';
        	$imageFiles = File::allFiles($imagePath);
        	
        	return [
        		'imagePath', 
        		'imageFiles',
        	];

		}

		public function makePhotoshopGallery(){

        	$imagePath = 'images/photoshop';
        	$imageFiles = File::allFiles($imagePath);

        	return [
        		'imagePath', 
        		'imageFiles',
        	];

    	}


	}


