{{-- These should should be in the head.php file only, they are doubled up --}}
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" type="text/css">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

<!-- Fonts -->
<link href="https://fonts.googleapis.com/css?family=Julius+Sans+One" rel="stylesheet">

<nav class="navbar navbar-default" id="navbar-override">
    <div class="container-fluid">
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

             {{-- Start of Navigation Elements --}}  
            <ul class="nav navbar-nav">
                <li><a href="/">Home</a></li>

            {{--Projects dropdown --}}
            <ul class="nav navbar-nav">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" id="dropdown-toggle-override" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Projects <span class="caret"></span></a>
                    <ul class="dropdown-menu" id="navbar-dropdown-override">
                        <li><a href="http://musicbytes.us/">MusicBytes</a></li>
                        <li><a href="http://themusicpavilion.com">The Music Pavilion</a></li>
                        <li><a href="#">My Old Portfolio</a></li>
                        <li><a href="http://newlinecharacter.com/">New Line Character (Coming Soon)</a></li>
                    </ul>
                </li>
            </ul>

            {{-- Start of Coding  Dropdown --}}
            <ul class="nav navbar-nav">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" id="dropdown-toggle-override" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Coding<span class="caret"></span></a>
                        <ul class="dropdown-menu" id="navbar-dropdown-override">
                            <li><a href="{{ url('coding/general') }}">General Information</a></li>
                            {{-- CSS --}}
                            <li><a href="{{ url('coding/css') }}" titile="Cascading Style Sheets">CSS (Cascading Style Sheets)</a></li>
                            {{-- Java --}}
                            <li><a href="{{ url('coding/java') }}" title="Java Programming Samples">Java </a></li>
                            {{-- Javascript --}}
                            <li class="dropdown-submenu">
                                <a class="dropdown-toggle" href="{{ url('coding/javascript') }}" title="JavaScript Programming Scripting Samples">JavaScript</a>
                                    <ul class="dropdown-menu fade-in">
                                        <li><a href="{{ url('programs/js/jquery-toggling') }}" title="jQuery Toggle">jQuery Toggling</a></li>
                                        <li><a href=" {{ url('programs/js/slideshow') }}" title="Javascript Slideshow">Slideshow</a></li>
                                    </ul>
                                </li>

                                {{-- PHP --}}
                                 <li class="dropdown-submenu">
                                        <a class="dropdown-toggle" href="{{ url('coding/php')  }}" title="PHP Code Examples">PHP</a>
                                        <ul class="dropdown-menu fade-in">
                                                <li><a  href="{{ url('programs/php/timeanddates') }}" title="PHP Time/Date Examples">Time and Date</a></li>
                                        </ul>
                                </li>

                                {{-- Laravel --}}
                                <li class="dropdown-submenu">
                                        <a href="#" class="dropdown-toggle lang-row" data-toggle="dropdown">Laravel</a>
                                        <ul class="dropdown-menu fade-in">
                                                <li><a href="{{ url('upload') }}">Facade Image Upload</a></li>
                                                <li><a href="{{ url('photos/image_example') }}">Intervention Image Demo</a></li>
                                                <li><a href="{{ url('photos/create') }}">Test Intervention Image</a></li>
                                         </ul>
                                    </li>

                                    {{-- PYTHON --}}
                                    <li class="dropdown-submenu">
                                         <li><a href="{{ url('coding/python') }}" title="Python Programming Examples">Python</a></li>
                                    </li>

                                    {{-- C# --}}
                                    <li class="dropdown-submenu">
                                            <a href="{{ url('coding/csharp') }}" class="dropdown-toggle lang-row" data-toggle="dropdown">C# Programming</a>
                                            <ul class="dropdown-menu fade-in">
                                                <li><a href="{{ route('csharp.guess-a-word') }}">Guess A Word Example</a></li> 
                                            </ul>
                                        </li>
                                    <li><a href="{{ url('coding/umbraco') }}" title="Umbraco CMS">Umbraco CMS</a></li>
                                </ul>
                            </li>
                        </ul>
                        {{-- End of Coding dropdown menus --}}

                        {{-- Galleries Dropdown  --}}
                        <ul class="nav navbar-nav">
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" id="dropdown-toggle-override" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Galleries<span class="caret"></span></a>
                                        <ul class="dropdown-menu" id="navbar-dropdown-override">
                                            <li><a href="{{ url('pages/photoshop') }}">Photoshop Gallery</a></li>
                                            <li><a href="{{ url('pages/photography') }}">Photography Gallery</a></li>
                                         </ul>
                                </li>
                        </ul>

                    {{-- NON-dropdown menu items  --}}
                    <ul class="nav navbar-nav">
                        <li><a href="{{ route('posts.index') }}">Posts</a></li>{{--  Route/link to enter Posts/Blog --}}
                        <li><a href="{{ url('pages/about') }}">About</a></li>
                        <li><a href="{{ url('contact') }}">Contact</a></li>
                    </ul>

                    <ul class="nav navbar-nav">
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" id="dropdown-toggle-override" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Public Profiles<span class="caret"></span></a>
                            <ul class="dropdown-menu" id="navbar-dropdown-override">
                                <li><a href="https://github.com/SpartanByte" title="SpartanByte: GitHub" target="_blank">GitHub</a></li>
                                <li><a href="https://gitlab.com/SpartanByte" title="SpartanByte: GitLab" target="_blank">GitLab</a></li>
                                <li><a href="http://stackexchange.com/users/9660538/nintensified" title="Stack Overflow, More" target="_blank">StackExchange</a></li>
                                <li><a href="https://www.sitepoint.com/premium/users/urlbyte" title="SitePoint Coding Community" target="_blank">SitePoint</a></li>
                                <li><a href="https://www.linkedin.com/in/briantwardwell" title="Brian Wardwell: LinkedIn" target="_blank">LinkedIn</a></li>
                            </ul>
                        </li>
                    </ul>
            </ul>{{-- End of left side menu  --}}
        </div>
    </div>
<!-- end of header.blade.php -->