    @extends('layouts.default')
   @section('description', 'General information about Cascading Stylesheets, animate.css, SASS')
    @section('title', 'CSS Information')

    @section('content')
    <div class="static-content code-sample-page">

        <span class="page-header uppercase-shadow">CSS Code Samples</span>
        <hr />

        <img src="/images/logos/CSS.png" />
        <h3>CSS</h3>
        <p>CSS (Cascading Style Sheets) is a stylesheet language used for styling colors, fonts, placement, layouts, and other necessities required for making beautiful websites. Many developers still use "straight" CSS and implement the new features that come when versions update, which is now on CSS3. There are also CSS preprocessors, sometimes called frameworks or libraries, such as SASS and Less. It's also become common for frameworks to mix prewritten CSS with Javascript, which is where Bootstrap, a now common framework, came from. There are other front end frameworks spawning and testing such as Modernizer and Pure. Modernizer mimics the Bootstrap framework but is much more lightweight. However, each developer always has their preference and style for CSS just as they do with "backend" programming.</p>
        <p>For additional information, <a href="https://css-tricks.com/" title="CSS Tricks">CSS Tricks</a> is a wonderful resource as well as training/tutorial hub for beginner developers.</p>

        <hr />
        <a href="https://daneden.github.io/animate.css/" target="_blank" title="Animate.css" alt="Animate.css library on GitHub"><img src="/images/logos/animate-css.png" /></a>
        <h4><a class="outgoing-link" href="https://daneden.github.io/animate.css/" target="_blank" title="Animate.css" alt="Animate.css library on GitHub">Animate.css</a></h4>
        <p>Animate.css was created by <a class="outgoing-link" href="https://daneden.me/" target="_blank" alt="Daniel Eden's personal site">Daniel Eden</a> and is as simple to use as a developer's own CSS starter stylesheet framework. It is applied by using classes and sub-classes that define the animation, the animation name, and the duration of the animation. You can also apply more than one animation sequence to an element if a design ever calls for it.</p>

        <section>
            <p>For example, hovering over the black box below will trigger Animate.css's <code>flash</code> class of keyframes to make the image blink. By default, when including <code>infinite</code> as one of the classes, it would blink on the page once it was loaded and as long as the page was on your monitor.</p>
            <img class="animated infinite flash-demo" src="/images/box-black.jpg" />
        </section>
        <section>
            <p>Let's show another example. We're seeing animation again, however, this time it is upon page load and using the <code>slideInRight</code> class.</p>
            <img class="animated infinite slideInRight-demo"  src="/images/box-black.jpg"  width="50px" height="50px" />
            <p>As you may imagine, in many cases, this would quickly annoy the user as it will repeat, well, infinitely. With a little Javascript, that can be changed. To help show an example, the button below the gold box will turn the animation on/and off. Though the animation is set to an infinite loop, this enables toggling functionality. </p>
            <img id="delay-img" class="delay-slide" src="/images/box-gold.jpg" width="150px" height="150px" /><br />
            <button id="delay-btn" class="btn-animate" onclick="slideDelay()">Click to Toggle</button>
            <p>The JavaScript flips this on and on by adding and removing classes associated with that particular element's ID and triggered, in this case, by a button.</p>

            {{-- code display starts here --}}
            <code class="code-example">
                    function slideDelay(){ <br />
                    <span class="indent-1">var allClasses = document.getElementById("delay-img").classList; </span><br /><br />
                    <span class="indent-1">if(allClasses.contains("slideInRight")){ </span><br />
                            <span class="indent-2">allClasses.remove("slideInRight"); </span><br />
                        <span class="indent-1">} else { </span><br />
                            <span class="indent-2">allClasses.add("animated", "infinite", "slideInRight");</span><br />
                        <span class="indent-1"}</span> <br />
                } <br />
            </code>
            {{-- end of code display --}}
        </section>
    </div>

    {{-- JavaScript for coding/css < especially animate.css > --}}
    <script src="{{ URL::asset('js/css-examples.js') }}" /></script>

@stop