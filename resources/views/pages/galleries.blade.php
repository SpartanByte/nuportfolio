@extends('layouts.default')
@section('description', 'Brian Wardwell amateur photography: portraits, landscapes, macro. some from my profile as x-ample on deviantart.com')
@section('title', 'Photography')

@section('content')
	<div class="static-content gallery">
	    <div id="gallery-thumbnails" style="padding-bottom:15px;">
	        <span class="page-header uppercase-shadow gallery-header">Galleries Home</span>
	            <ul class="photo-list">
                    <li><a href="photography"><img src="http://via.placeholder.com/500x500" style="width:100%;"  /><p style="text-align:center;">Photography</p></a></li>
                    <li><a href="photoshop"><img src="http://via.placeholder.com/500x500" style="width:100%;" /><p style="text-align:center;">Photoshop</p></a></li>
	         </div>
	    <div id="gallery-clear-bottom"></div>
	</div>
@stop