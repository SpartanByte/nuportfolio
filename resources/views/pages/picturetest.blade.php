    @extends('layouts.default')

    @section('content')
    <div class="static-content">
        
        <h1>This is an initial page test</h1>

    <?php
        $img = new Image;
        $img->insert('/uploads/25114.jpg');

    ?>

    </div>
@stop