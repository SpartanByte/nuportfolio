
@extends('/layouts.default')

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
                      <div style="margin-left:20px;">
                          <p class="h3">You uploaded the following image: <span class="h4">{{$fileName}}</p>
                              
                      </div>{{-- End of div holiding upload feedback information  --}}
                    </div>
                  
                    <div class="panel-body">
                      <div style="margin-left:30px;">
                        <img src="images/{{ $fileName }}" class="img-rounded col-md-2" title="This image was just uploaded with Laravel!"/><br />
                        <h5 class="h3 col-md-2" style="text-align:center;clear:both;float:left;">{{ $imageTitle }}</h5>
                      </div>
                    </div>{{-- end of panel-body --}}


@stop