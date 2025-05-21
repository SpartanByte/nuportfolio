{{-- These should should be in the head.php file only, they are doubled up --}}
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" type="text/css">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<link href="https://fonts.googleapis.com/css?family=Julius+Sans+One" rel="stylesheet">

<nav class="navbar navbar-default desktop" id="navbar-override">
    <div class="container-fluid desktop">
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li><a href="/">Home</a></li>
                <li class="dropdown">
                            <a href="#" class="dropdown-toggle" id="dropdown-toggle-override" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">About<span class="caret"></span></a>
                            <ul class="dropdown-menu" id="navbar-dropdown-override">
                                <li><a href="{{ url('pages/about') }}">My Background</a></li>
                                <li><a href="{{ url('pages/experience') }}">My Experience</a></li>
                                {{-- <li><a href="{{ url('pages/skills-rundown') }}">Skills/Technology Rundown</a></li> --}}
                            </ul>
                        </li>
                <li><a href="{{ url('pages/projects') }}">Projects</a></li>
                {{--<li><a href="{{ url('/posts') }}">Posts</a></li>--}}
                <li><a href="{{ url('/pages/skills') }}">Skills</a></li>
                    <ul class="nav navbar-nav">
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" id="dropdown-toggle-override" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Coding<span class="caret"></span></a>
                            <ul class="dropdown-menu" id="navbar-dropdown-override">
                                {{-- <li><a href="{{ url('coding/general') }}" title="General Coding Information">General Information</a></li> --}}
                                <li><a href="https://github.com/SpartanByte?tab=repositories" title="Brian Wardwell on GitHub" target="_blank">GitHub Repos</a></li>
                                <li><a href="{{ url('coding/examples') }}" title="Code Examples">Code Samples</a></li>
                                {{-- <li><a href="{{ url('coding/css') }}" title="Cascading Style Sheets">CSS (Cascading Style Sheets)</a></li>
                                <li><a href="{{ url('coding/java') }}" title="Java Programming Samples">Java </a></li>
                                <li><a href="{{ url('/coding/javascript') }}" title="Javascript & Libraries">JavaScript</a></li>
                                <li><a href="{{ url('/coding/php') }}" title="PHP Information">PHP</a></li>
                                <li><a href="{{ url('/coding/laravel') }}" title="Laravel PHP Framework">Laravel</a></li>
                                <li><a href="{{ url('/coding/csharp') }}" title="C# Information">C#</a></li>
                                <li><a href="{{ url('coding/umbraco') }}" title="Umbraco CMS">Umbraco CMS</a></li>
                                <li><a href="{{ url('coding/python') }}" title="Python">Python</a></li> --}}
                            </ul>
                        </li>
                    </ul>
                    {{--<ul class="nav navbar-nav">
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" id="dropdown-toggle-override" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">IoT/AR<span class="caret"></span></a>
                            <ul class="dropdown-menu" id="navbar-dropdown-override">
                                <li><a href="{{ url('/coding/iot-ar') }}" title="Internet of Things & Augmented Reality">About IoT and AR</a></li>
                            </ul>
                        </li>
                    </ul>--}}
                    <ul class="nav navbar-nav">
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" id="dropdown-toggle-override" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Galleries<span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu" id="navbar-dropdown-override">
                                <li><a href="{{ url('pages/photoshop') }}">Photoshop Gallery</a></li>
                                <li><a href="{{ url('pages/photography') }}">Photography Gallery</a></li>
                            </ul>
                        </li>
                    </ul>
                    <ul class="nav navbar-nav">
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" id="dropdown-toggle-override" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Public Profiles<span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu" id="navbar-dropdown-override">
                                <li><a href="https://www.linkedin.com/in/briantwardwell" title="Brian Wardwell: LinkedIn" target="_blank">LinkedIn</a></li>
                                <li><a href="https://www.facebook.com/briantwardwell" title="Brian Wardwell: Facebook" target="_blank">Facebook</a></li>
                                <li><a href="https://github.com/SpartanByte" title="SpartanByte: GitHub" target="_blank">GitHub</a></li>
                                <li><a href="https://gitlab.com/SpartanByte" title="SpartanByte: GitLab" target="_blank">GitLab</a></li>
                                <li><a href="https://stackoverflow.com/users/7168765/jeepers-brian" title="Stack Overflow" target="_blank">Stack Overflow</a></li>
                            </ul>
                        </li>
                        {{-- <li><a href="{{ url('contact') }}">Contact</a></li> --}}
                    </ul>

                </ul>
            </div>
        </div>



            <div class="container-fluid mobile">
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                        <li><a href="/">Home</a></li>
                        <li><a href="{{ url('pages/about') }}">My Background</a></li>
                        <li><a href="{{ url('pages/experience') }}">My Experience</a></li>
                        <li><a href="{{ url('pages/projects') }}">Projects</a></li>
                        <li><a href="{{ url('/pages/skills') }}">Skills</a></li>
                        <li><a href="https://github.com/SpartanByte?tab=repositories" title="Brian Wardwell on GitHub" target="_blank">GitHub Repos</a></li>
                        <li><a href="{{ url('coding/examples') }}" title="Code Examples">Code Samples</a></li>
                        <li><a href="{{ url('pages/photoshop') }}">Photoshop Gallery</a></li>
                        <li><a href="{{ url('pages/photography') }}">Photography Gallery</a></li>
                        <li><a href="https://www.linkedin.com/in/briantwardwell" title="Brian Wardwell: LinkedIn" target="_blank">LinkedIn</a></li>
                        <li><a href="https://www.facebook.com/briantwardwell" title="Brian Wardwell: Facebook" target="_blank">Facebook</a></li>
                        </ul>
                    </div>
                </div>