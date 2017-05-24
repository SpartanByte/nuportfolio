
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
                      <table class="table table-striped task-table">

                          <thead>
                              <th>Image Title</th>
                          </thead>
                            @foreach($imageFiles as $imageFile){{-- $imageFile should be coming from PhotosController  --}}
                              <tr>
                                <td class="table-text">
                                  <div>{{ $imageFile }}</div>
                                </td>
                                </tr>
                            }
                            }
                            @endforeach

                              <form action="/photos/show/{{imageName}}" method="POST">
                            </form>
                      </table>
                    </div>{{-- end of panel-body --}}

                </div>

@stop