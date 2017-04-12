

@extends('layouts.default')

@section('content')

    <header class="row">
        @include('includes.header')
    </header>

	<div class="panel panel-default">
        <div class="page-header">
             <h1>Uploaded Photos</h1>
                  </div>

	{{ HTML::image('images/logos/'.'.png')}}
                    </div>{{-- end of panel-body --}}

                </div>

@stop