
@extends('layouts.default')

@section('content')
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

                    @if(Session::has('success'))
                        <div class="alert-box success">
                            <h2>{!! Session::get('success') !!}</h2>
                        </div>
                    @endif
                        {{-- <img src="uploads/{{ $fileName }}" /> --}}
                    <div class="control-group">
                        <div class="controls">
                            

                            <p class="errors">{!! $errors->first('image') !!}</p>

                            @if(Session::has('error'))
                                <p class="errors">{!! Session::get('error') !!}</p>
                             @endif
                        </div>
                    </div>
                    <div id="success"></div>

                   
                </div>
                </div>
            </div>
        </div>
    @stop