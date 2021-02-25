@extends('layouts.default')
@section('description', 'General information about JavaScript and libraries/frameworks Vue.js, React.js, Angular.js')
@section('title', 'Projects')

@section('content')
<div class="static-content code-sample-page projects">
    <span class="page-header uppercase-shadow mid-size-font">Personal Projects</span><hr />
    <div class="project-container">
        <div><span class="page-header mid-size-font">The Music Pavilion</span></div>
        <p>Website URL: <a href="http://themusicpavilion.com/" title="The Music Pavilion" target="_blank">themusicpavilion.com</a></p>
        <p>In 2014, while still attending college for web development, I launched a website based in the PHP based <a href="https://wordpress.org/" title="Wordpress CMS" target="_blank">WordPress</a> CMS titled <strong>Musicbytes</strong>. Being very passionate about music, I wanted a music blog that didn't center around one or two musical genres but catered to <em>all</em> genres. Posts weren't only based around musical releases but also concert reviews. Quickly, this evolved into articles for "Featured Artsists" and more. I knew the now "entertainment website" would need to be able to expand beyond the current design and also wanted a more scalable and completely customizable CMS for its environment.</p>
        <p>While working on a professional project, I fell in love with the <a href="https://umbraco.com/" title="Umbraco" target="_blank">Umbraco</a> CMS (based in ASP.NET with C#). Other than the Admin Center (called the "Backoffice" in Umbraco), it comes very "bare bones" as well as developer friendly to scale anything from a very small entertainment all the way up to complex corporate websites. The Music Pavilion features Album/Concert Reviews, Featured Artist articles, and a resource articles for music charities and organizations. Only launched in February 2018, tags for posts will still be added as well as other additions in development.</p>
        <p>Summed Up: I've already enjoyed the challenge Umbraco brings, especially as there aren't nearly as many themes which can often be a crutch in WordPress rather than "from scratch" development. Working with packages that often require specific configuration, rather than Wordpress plugins that are so easily installed but can open security vulnerabilities, has also been a wonderful challenge.</p>

        <a class="img-link" href="http://themusicpavilion.com/" title="The Music Pavilion" target="_blank"><img src="/images/projects/the-music-pavilion/tmp-home.png"></a>
  
    </div>

    <div class="project-container">
        <div><br /><span class="page-header mid-size-font">My Original Portfolio</span><br /></div>
        <p>Website URL: <a href="http://brianwardwell.net/" title="Brian Wardwell PHP Portfolio" target="_blank">brianwardwell.net</a></p>
        <p>My original portfolio was a step up from my school portfolio project when I redesigned it and launched it in my own environment in 2015. It was built using procedural PHP (no framework or CMS) and ran a "course catalog" record keeping program which allowed an example of viewing, creating, updating, and removing course records from a MySQL database. The "Academics" page includes all of my coursework from my <strong>Web Development, AAS</strong> from <a href="http://www.minnesota.edu/" title="MSCTC / M State" target="_blank">Minnesota State Community & Technical College</a> with details in a jQuery toggle interface to show course descriptions.</p> 
        <a class="img-link" href="http://brianwardwell.net" title="brianwardwell.net" target="_blank"><img src="/images/projects/php-portfolio/php-portfolio-home.png"></a>
    </div>

    <div class="project-container">
        <div><br /><span class="page-header mid-size-font">Musicbytes.us (rebranded as The Music Pavilion, 2018)</span><br /></div>
        <p>As mentioned above, I began Musicbytes in late 2014 using Wordpress and was launched in January of 2015. Beginning it as a simple music blog, I found many other things that I wanted to add to it. After working with Umbraco on another project professionally, I fell in love with its scalability and flexibility. Musicbytes was rebranded when <a href="http://themusicpavilion.com" title="The Music Pavilion">The Music Pavilion</a> was launched in March of 2018. Musicbytes is no longer a live site.</p>
        <img src="/images/projects/musicbytes/musicbytes.jpg">
    </div>
</div>
@stop