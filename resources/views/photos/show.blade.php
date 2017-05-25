
@extends('layouts.default')

@section('content')

    <header class="row">
        @include('includes.header')
    </header>


                <div class="panel panel-default">
                  <div class="page-header">
                      <h1>Uploaded Photos</h1>
                  </div>
                  <div class="panel-body">
                      @foreach($imageFiles as $imageFile){{-- $imageFile should be coming from PhotosController  --}}
                          
                          <img src="{{ $imageFile }}" />

                      @endforeach
                    </div>{{-- end of panel-body --}}
                </div>
@stop