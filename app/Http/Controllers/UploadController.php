<?php

    namespace App\Http\Controllers;

    use Input;
    use Validator;
    use Redirect;
    use Request;
    use Session;
    use App\Services\ImageUploader\ImageUploaderService;

    /**
     *  FOR "IMAGE UPLOADER" functionality
     */
    class UploadController extends Controller{

        public function getUpload(ImageUploaderService $currentUpload){

            $newUpload = new ImageUploaderService();
            $currentUpload = $newUpload->upload();

            return view('pages/success')->with(['currentUpload' => $currentUpload]);
        }
        /* 
        public function upload(){

            // getting post data
            $file = array('image'=> Input::file('image'));
            // setting up rules for upload
            $rules = array('image'=>'required'); // includes mime types for: jpeg, bmp, png, max size "max:10000"
            // validation, passing data and rules
            $validator = Validator::make($file, $rules);

                if($validator->fails()){
                    //sending back the page with the input data and errors
                    return Redirect::to('upload')->withInput()->withErrors($validator);
                }
                else {
                    // checking for file validity
                    if(Input::file('image')->isValid()){
                        
                        $input = Input::all(); // new instance
                        $imgInputPath = $input['uploadImgPath']; // setting path
                        $imgInputTitle = $input['uploadImgTitle']; // setting title
                        $extension = Input::file('image')->getClientOriginalExtension(); // getting image extension
                        $fileName = $imgInputTitle . '.' .$extension; // merging all values
                        Input::file('image')->move($imgInputPath, $fileName); // adding image to directory folder

                        // returning view with file name for img tags and index
                        return view('pages/success')->with(['fileName' => $fileName]);
                    }
                }
        } 
        */
        /*
            Controls image display from upload.
        */
}