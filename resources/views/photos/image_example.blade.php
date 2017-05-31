
@extends('layouts.default')

@section('content')

    <header class="row">
        @include('includes.header')
    </header>

            <div class="page-header">
                      <br /><br />{{-- These are only being used to space the "Uploaded Photos" header for now (below navigation)  --}}
                </div>
                  <div style="margin-left:40px;">
                     <h3 class="h1">Uploading and Displaying Photo Application Using <a href="https://laravel.com/" title="Laravel" target="_blank">
                                    <span style="color:#ff3300;text-decoration:underline;hover:text-decoration:none;">Laravel</a></span>
                                    <img src="https://cdn.auth0.com/blog/laravel-auth/logo.png" height="50" width="50"></h3>

                          <p class="h4" style="margin-left:20px;padding-top:10px;padding-bottom:10px;">The following is an example of the result after uploading an image from the 
                                "Create" patch which utilizes the PHP Package <a style="color:#ff3300;" href="http://image.intervention.io/" title="Get Intervention Image" target="_blank">Intervention Image</a> while using the PHP MVC framework <a href="#">Laravel</a>. This example was preloaded with static, hard-coded content.If you would like to run a test upload and display yourself, feel free to visit the <span class="h3"><a style="color:#ff3300;" href="{{ url('photos.create') }}">Create</a></span> page. However, please note that the image being uploaded is saved within a folder in Laravel's directory within this application.</p>

                          <hr class="h4" style="background-color:black;" />

                          <div style="margin-left:20px;">
                              <p class="h3">You uploaded the following image: <span class="h4">{{$fileName}}</p>
                                  
                          </div>{{-- End of div holiding upload feedback information  --}}
                        </div>
                  
                    <div class="panel-body">
                      <div style="margin-left:30px;">
                        <img src="/images/{{ $fileName }}" class="img-rounded col-md-2" title="This image was just uploaded with Laravel!"/><br />
                        <h5 class="h3 col-md-2" style="text-align:center;clear:both;float:left;">{{ $imageTitle }}</h5>{{--  $imageTitle from PhotosController --}}
                      </div>
                    </div>{{-- end of panel-body --}}

@stop