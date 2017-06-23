
{{-- THIS UPLOAD FORM/PAGE IS OLDER AND LIKELY WON'T BE USED SO DON'T WORRY ABOUT HOW THE STYLING ISN'T MATCHING UP  --}}
@extends('layouts.default')
    @section('description', 'Uploading an image using the Input facade in Laravel')
    @section('title', 'Upload via Laravel Facade')
@section('content')
    <div class="static-content">
        <div class="about-section">
            <div class="text-content">
                <div class="span7 offset1">

                        @if(Session::has('success'))
                            <div class="alert-box success">
                                <h2>{!! Session::get('success') !!}</h2>
                            </div>
                        @endif

                        <div class="upload-form-container">
                            <div class="secure"><h3>Upload Form</h3></div>
                                {!! Form::open(array('url'=>'apply/upload', 'method'=>'POST', 'files'=>true)) !!}

                                    {{-- Start of container for input box  --}}

                                    <div class="col-md-6">
                                        {!! Form::label('pathLabel', 'Image Path:') !!}
                                        {!! Form::text('uploadImgPath', null, ['class' => 'form-control']) !!}
                                        {!! Form::label('titleLabel', 'Title for image:') !!}
                                        {!! Form::text('uploadImgTitle', null, ['class' => 'form-control']) !!}
                                    {{-- End of container for input box  --}}<br />

                                      {!! Form::file('image', array('class' => 'browse-btn')) !!}
                                        <p class="errors">{!! $errors->first('image') !!}</p>

                                        @if(Session::has('error'))
                                            <p class="errors">{!! Session::get('error') !!}</p>
                                         @endif


                                         {!! Form::submit('Submit', array('class'=>'send-btn uploader')) !!}
                                            {!! Form::close() !!}
                                    </div>
                                <div id="success"></div>
                                    {{-- <div class="col-md-6">
                                    {!! Form::submit('Submit', array('class'=>'send-btn')) !!}
                                    {!! Form::close() !!} --}}
                                    </div>
                                </div>
                                </div>{{-- END OF CONTROL GROUP  --}}
                            </div>{{-- END OF SECURE  --}}
                        </div>{{-- END OF UPLOAD-FORM-CONTAINER  --}}
                    </div>{{-- END OF SPAN7  --}}
                </div>{{-- END OF TEXT-CONTENT  --}}
            </div>{{-- ABOUT-SECTION --}}
        </div>{{-- END OF STATIC-CONTENT  --}}    
    @stop

