<?php  
	
	namespace Services\Gallery;

	use Illuminate\Http\Request;
	use App\Http\Controllers\Controller;
	use Illuminate\Support\Facades\File;
	use Image;
	use Input;

	class GalleryService{

		public function getPhotography(){

			// $imagePath = 'images/photography'; <--- this needs to be in the controller -- you can only return one value
        	$imageFiles = File::allFiles($imagePath);
        	return $imageFiles;
        	
        	/* return [
        		'imagePath', 
        		'imageFiles',
        	]; */
		}

		public function makePhotoshopGallery(){
        // $imagePath = 'images/photoshop'; <--- this needs to be in the controller -- you can only return one value
        
        	$imageFiles = File::allFiles($imagePath);
        	return $imageFiles;

	        	/* return [
	        		'imagePath', 
	        		'imageFiles',
	        	]; */
    	}
	}