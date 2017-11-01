@extends('layouts.app')
@section('title')
    Home!
@stop
@section('description', 'Web Developer from Fargo, ND. He is also a musician and working on projects Battle Cry and LaconicAura, amateur photographer and writer.')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>
                    <div class="panel-body">
                        <div class="static-content general-coding">You sir, have logged in. Now, access the <a href="{{ url('/admin/index') }}">Admin Center!</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection