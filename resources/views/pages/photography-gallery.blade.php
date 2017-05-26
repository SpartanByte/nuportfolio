@extends('layouts.default')

@section('title', 'Photography')

@section('content')
<div class="static-content">
    <div id="gallery-thumbnails" style="padding-bottom:15px;">

        <span class="page-header uppercase-shadow gallery-header">Photography</span>
            <ul class="photo-list">
<<<<<<< HEAD
                <li><img src="/images/photography/big-sur-400-300.png" /></li>
                <li><img src="/images/photography/golden-gate-400-300.png" /></li>
                <li><img src="/images/photography/falls-park-400-300.png" /></li>
                <li><img src="/images/photography/pelican-rapids-flower-400-300.png" /></li>
                <li><img src="/images/photography/bridget-400-300.png" /></li>
                <li><img src="/images/photography/abandoned-schoolhouse-400-300.png" /></li>
                <li><img src="/images/photography/self-portrait-400-300.png" /></li>
                <li><img src="/images/photography/lake-nacimiento-400-300.png" /></li>
                <li><img src="/images/photography/san-jose-400-300.png" /></li>
                <li><a href="/images/photography/full/general-avalon-full.jpg" title="Avalon Events Center, 2005">
                    <img src="/images/photography/thumbs/general-avalon-thumb.jpg" /></a></li>
                <li><a href="/images/photography/full/und-ralph-full.jpg" title="Ralph Engelstad Arena">
                        <img src="/images/photography/thumbs/und-ralph-thumb.jpg" /></a></li>
                <li><a href="/images/photography/full/hollywood-vampires-full.jpg" title="Hollywood Vampires, Fargo ND">
                    <img src="/images/photography/thumbs/hollywood-vampires-thumb.jpg" /></a></li>
                <li><a href="/images/photography/full/sevendust-rose-full.jpg" title="Morgan Rose of Sevendust">
                    <img src="/images/photography/thumbs/sevendust-rose-thumb.jpg" /></a></li>
                <li><a href="/images/photography/full/hallway-2005-full.jpg" title="Hallway Self Portrait">
                    <img src="/images/photography/thumbs/hallway-2005-thumb.jpg" /></a></li>
                <li><a href="/images/photography/full/izzy-stare-full.jpg">
                    <img src="/images/photography/thumbs/izzy-stare-thumb.jpg" /></a></li>
                {{--<li><img src="/images/photograhy/san-francisco-face-400-300.png" /></li>--}}
            </ul>
            <ul class="photo-list">

           
            <?php
                /* Settings */
                $image_dir = 'images/photography/full/';
                $thumbs_dir = 'images/photography/thumbs/';
                $images_per_row = 6;

                /* generating photo gallery */
                $image_files = get_files($images_dir);

                if(count($image_files))
                {
                    $index = 0;
                    foreach($image_files as $index=>$file)
                    {
                        $index++;
                        $thumbnail_image = $thumbs_dir.$file;
                        
                        if(!file_exists($thumbnail_images))
                        {
                            $extension = get_file_extension($thumbnail_image);
                            if($extension)
                            {
                                make_thumb($images_dir.$file, $thumbnail_image, $thumbs_width);
                            }
                            echo '<li><a href="', $images_dir.$file, '">
                                <img src="', $thumbnail_image,'" /></a></li>';
                            if($index % $images_per_row == 0) { echo '<div class="clear"></div>'; }
                        }
                        echo '<div class="clear"></div>';
                    }
                    
                    } else {
                        echo '<p>There are no images in this gallery.</p>';
                    }

            ?>

            </ul>
    </div>
=======

                {{-- Images generated from ImageController@showPhotography --}}
                @foreach($imageFiles as $imageFile)
                    <li><a href="{{ $imageFile }}" title="View Full Size" style="width:100%;height:100%;"><img src="{{ $imageFile }}" width="400" height="300" /></a></li>
                @endforeach

         </div>
>>>>>>> 3f69ac3b2d6b681775d9b7f795816324e9b637b3
    <div id="gallery-clear-bottom"></div>
</div>
@stop