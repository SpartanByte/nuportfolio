<?php

    namespace App\Http\Controllers;

    use Input;
    use Validator;
    use Redirect;
    use Request;
    use Session;

    class UploadController extends Controller{

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
                        $destinationPath = 'uploads';
                        $extension = Input::file('image')->getClientOriginalExtension(); // image extension
                        $fileName = rand(11111,99999).'.'.$extension; // renaming image
                        Input::file('image')->move($destinationPath, $fileName); // moving file to given path

                        //Sending back message
                        Session::flash('success', 'Upload is successful!');
                        return Redirect::to('upload2'); 

                    }
                }
        }

        /*
            Controls image display from upload.
        */
}