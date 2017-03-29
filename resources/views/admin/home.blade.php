@extends('layouts.app')

@section('content')
<div id="admin-backdrop" class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default dashboard-panel">
                <div class="panel-heading">Dashboard</div>
                <div class="panel-body">
                   {{-- <div class="dashboardHeaders">Welcome to the Admin Center!</div> --}}
                </div>
                <div>
                    <div id="dashboardHeaders"><h3>Areas Available to Update</h3></div>
                        <ul class="updateList">
                            <li><a href="#">Photography Gallery</a></li>
                            <li><a href="#">Photoshop Gallery</a></li>
                        </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
