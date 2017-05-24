
@extends('layouts.default')

@section('content')
        <div class="about-section">
            <div class="text-content">
                <div class="span7 offset1">

                    <?php
                        echo Form::open(array('url' => '/uploadimage', 'files' => 'true'));
                        echo 'Select a file to upload.';
                        echo Form::file('image');
                        echo Form::submit('Upload File');
                        echo Form::close();
                    ?>

                </div>
                </div>
            </div>
        </div>
    @stop