    @extends('layouts.default')
    @section('description', 'image toggling example using jQuery, JavaScript and Laravel')
    @section('title', 'jQuery Toggling')

    @section('content')

        <script>
            $(document).ready(function() {
                $('.image-module article').hide(); 
                $('.imgtoggle-buttons').click(function() {
                        var $this = $(this).closest('section').find('article');
                    $('.image-module article').not($this).slideUp();
                        $this.fadeToggle(800);
                });
            });

            // Image hover effects - jquery
            $(document).ready(function(){
                    $('.image-color').mouseenter(function(){
                    $('.image-color').css("filters", "grayscale(100%)");
                });
            });
        </script>

    <div class="static-content program-page">

        {{-- Current CSS isn't showing anything above the following H1, will need to fix this  --}}
        <h1 class="page-header extended-header">Toggling and Other Visual Effects with jQuery</h1>
        <hr />

        <img src="/images/logos/jquery.png" width="225" height="150" />
        <div class="program-description">
            <h3 class="program-header">Very Simple Toggling with jQuery</h3>
        </div>
        
        <section class="image-module btn title3" type="button">
            <ul class="imgtoggle-buttons">
                <li><span class="showhide img-list"></span>
                <h4><span class="showhide image-toggle">CLICK TO TOGGLE IMAGE</span></h4>
           
                <article class="image-result">
                    <img src="/images/slide/red.jpg" width="333" height="292" />
                </article>

                </li>
            </ul>
        </section>

        <p><span class="h3" style="text-align:left;">Image will appear here.</span></p>
        {{-- <img class="image-color" src="/images/slide/red.jpg" width="333" height="292" /> --}}
        <hr />
    </div>
@stop