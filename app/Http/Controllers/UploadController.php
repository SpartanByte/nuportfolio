<?php

    namespace App\Http\Controllers;

    use Input;
    use Validator;
    use Redirect;
    use Request;
    use Session;

    /**
     *  FOR "IMAGE UPLOADER" functionality
     */
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
                        
                        $input = Input::all();
                        $imgInputPath = $input['uploadImgPath'];
                        $imgInputTitle = $input['uploadImgTitle'];
                        $extension = Input::file('image')->getClientOriginalExtension(); // image extension
                        $fileName = $imgInputTitle . '.' .$extension;
                        Input::file('image')->move($imgInputPath, $fileName);

                        //Sending back message
                        return view('pages.success')->with(['fileName' => $fileName]);
                    }
                }
        }
        /*
            Controls image display from upload.
        */
}