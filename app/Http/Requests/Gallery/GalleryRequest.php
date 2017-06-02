<?php  
	
namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

	use Illuminate\Http\Request;
	use App\Http\Controllers\Controller;
	use Illuminate\Support\Facades\File;
	use Image;
	use Input;


	class GalleryRequest extends FormRequest{

		public function getPhotography(){


			$imagePath = 'images/photography';
        	$imageFiles = File::allFiles($imagePath);
        	
        	return [
        		'imagePath', 
        		'imageFiles',
        	]; 

            /* return [
                'imagepath' => $imagePath, 
                'imageFiles' => $imageFiles,
            ]; */

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

