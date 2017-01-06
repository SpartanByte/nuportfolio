<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


/**
 * THIS CONTROLLER IS FOR CONTROLLING THE AUTO-GENERATED IMAGE GALLERIES AFTER AN IMAGE IS UPLOADED TO THE images/ FOLDER
 * DATE: JAN 6TH 2017, LINK: https://davidwalsh.name/generate-photo-gallery
 */

class ImageGalleryController extends Controller
{
    //
    public function make_thumb($src, $dest, $desired_width){

    	/* read the source image */
    	$source_image = imagecreatefromjpeg($src);
    	$width = imagesx($source_image);
    	$height = imagesy($source_image);
    	/*Find desired height, relative to desired width */
    	$desired_height = floor($height*($desired_width/$width));
    	/* Create a new, "virtual" image */
    	$virtual_image = imagecreatetruecolor($desired_width, $desired_height);
    	/* copy source image at a resized size */
    	imagecopyresized($virtual_image,$souce_image,0,0,0,0,$desired_width, $desired_height,$width,$height);
    	/* create the physical thumbnail image to its destination */
    	imagejpeg($virtual_image,$dest);
    }

    public function get_files($images_dir, $ext = array('jpg', 'png', 'gif')){

    	$files = array();
    	if($handle = opendir($images_dir)){
    		while(false != ($file = readdir($handle)){
    			$extension = strtolower(get_file_extension($file));
    			if($extension && in_array($extension, $exts)){
    				$files[] = $file;
    				// this if statement could likely be in the Blade template @if, @endif
    			}

    		}
    		closedir($handle);
    	}

    	return $files;
    }

    public function get_file_extension($file_name){
    	return substr(strrchr($file_name, '.'), 1);
    }

    /**
     * generate_gallery() (in the example) has this code in what would be the View file, but this should be different with Laravel
     */
    public function generate_gallery(){

    	$images_dir = 'images/';
    	$thumbs_dir = 'images-thumbs/';
    	$thumbs_width = 300;
    	$images_per_row = 2;

    	/* Generate the Image Gallery */
    	$image_files = get_files($image_dir);
    		if(count($image_files)){
    			$index = 0;

    			// Condition
    			foreach($image_files as $index=>$file){
    				$index++;
    				$thumbnail_image = $thumbs_dir.$file;
    				if(!file_exists($thumbnail_image)){
    					$extension = get_file_extension($thumbnail_image);
    					if($extension){
    						make_thumb($images_dir.$file,$thumbnail_image,$thumb_width);
    					}
    				}

    				/* Currently incomplete */
    			}
    		}
}
