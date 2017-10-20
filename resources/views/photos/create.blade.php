
@extends('layouts.default')
@section('title', 'Intervention Example')
@section('content')
          <h1>Upload a New Photo</h1>
          {!! Form::open(['route' => 'photos.store', 'files' => true]) !!}

          <div class="form-group">
            <p class="h4" style="margin-left: 20px;">
              {!! Form::label('title', 'Title for Captioning:') !!}</p>

              {{-- Start of container for input box  --}}
              <div class="col-md-6">
                  {!! Form::text('imageTitle', null, ['class' => 'form-control']) !!}
              </div>{{-- End of container for input box  --}}<br />

                <div class="form-group">
                <div class="col-md-6" style="clear:both;float:left;"> {{-- Start of container for upload styling  --}}
                  <p class="h5" style="margin-left:5px;padding-top:10px;padding-bottom:10px;">
                    {!! Form::label('fileName', 'Upload:') !!}
                    {!! Form::file('fileName') !!}
                  </p>{{-- end of uploading container  --}}

                  <div class="form-group">
                    {!! Form::submit('Upload Photo', ['class' => 'btn btn-primary' ]) !!}
                  </div>
                </div>{{-- end of uploading styling --}}
              </div> {{-- end of form-group  --}}
            </div>            
            {!! Form::close() !!}

@stop