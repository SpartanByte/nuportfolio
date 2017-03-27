
{{-- THIS UPLOAD FORM/PAGE IS OLDER AND LIKELY WON'T BE USED SO DON'T WORRY ABOUT HOW THE STYLING ISN'T MATCHING UP  --}}
@extends('layouts.default')

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

                                <div class="control-group">
                                    <div class="controls">
                                        {!! Form::file('image') !!}
                                        <p class="errors">{!! $errors->first('image') !!}</p>

                                        @if(Session::has('error'))
                                            <p class="errors">{!! Session::get('error') !!}</p>
                                         @endif
                                    </div>
                                </div>{{-- END OF CONTROL-GROUP  --}}
                            
                                <div id="success"></div>
                                    {!! Form::submit('Submit', array('class'=>'send-btn')) !!}
                                    {!! Form::close() !!}
                                </div>
                                </div>{{-- END OF CONTROL GROUP  --}}
                            </div>{{-- END OF SECURE  --}}
                        </div>{{-- END OF UPLOAD-FORM-CONTAINER  --}}
                    </div>{{-- END OF SPAN7  --}}
                </div>{{-- END OF TEXT-CONTENT  --}}
            </div>{{-- ABOUT-SECTION --}}
        </div>{{-- END OF STATIC-CONTENT  --}}    
    @stop