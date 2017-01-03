@extends('layouts.default')

    {{-- I am testing comments in Blade that should not be seen in inspect page --}}

    <script>
        var fadeEffect=function(){

            /* This is starting Javascript (From example) to start modifying to have a flash message when a
            *  a visitor first comes to the site (not a box but an unintrusive welcome message)
             */
            return{
                init:function(id, flag, target){
                    this.elem = document.getElementById(id);
                    clearInterval(this.elem.si);
                    this.target = target ? target : flag ? 100 : 0;
                    this.flag = flag || -1;
                    this.alpha = this.elem.style.opacity ? parseFloat(this.elem.style.opacity) * 100 : 0;
                    this.elem.si = setInterval(function(){fadeEffect.tween()}, 20);
                },
                tween:function(){
                    if(this.alpha == this.target){
                        clearInterval(this.elem.si);
                    }else{
                        var value = Math.round(this.alpha + ((this.target - this.alpha) * .05)) + (1 * this.flag);
                        this.elem.style.opacity = value / 100;
                        this.elem.style.filter = 'alpha(opacity=' + value + ')';
                        this.alpha = value
                    }
                }
            }
        }();

    </script>

@section('content')
    <div class="title-container">
    <header class="page-title">Title of Site</header>
    </div>
        <section class="site-description">Web Development: Skill 1, Skill 2, Skill 3</section>

        <div class="landing-image">
            <img src="https://placeholdit.imgix.net/~text?txtsize=75&txt=800%C3%97640&w=800&h=640" />
        </div>

        <div class="right-home">
            <h1>Header Text</h1>
            <p>Testing Text.</p>
        </div>





@stop