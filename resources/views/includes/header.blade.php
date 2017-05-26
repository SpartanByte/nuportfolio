<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" type="text/css">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

<!-- Fonts -->
<link href="https://fonts.googleapis.com/css?family=Julius+Sans+One" rel="stylesheet">

<nav class="navbar navbar-default" id="navbar-override">
    <div class="container-fluid">
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li><a href="/">Home</a></li>

                    {{-- Start of dropdown available items | Projects dropdown --}}
                    <ul class="nav navbar-nav">
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" id="dropdown-toggle-override" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Projects <span class="caret"></span></a>
                            <ul class="dropdown-menu" id="navbar-dropdown-override">
                                <li><a href="http://musicbytes.us/">MusicBytes</a></li>
                                <li><a href="#">My Old Portfolio</a></li>
                                <li><a href="http://newlinecharacter.com/">New Line Character (Coming Soon)</a></li>
                                <li><a href="#">The Music Pavilion (Coming Soon)</a></li>
                            </ul>
                        </li>
                    </ul>

                    {{-- Code Samples Dropdown --}}
                    <ul class="nav navbar-nav">
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" id="dropdown-toggle-override" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Coding<span class="caret"></span></a>
                            <ul class="dropdown-menu" id="navbar-dropdown-override">
                                <li><a href="{{ url('code_pages.code-information') }}">General Information</a></li>
                                <li><a href="{{ url('code_pages.csharp-samples') }}" title="C# Programming Samples">C#</a></li>
                                <li><a href="{{ url('code_pages.css-samples') }}" titile="Cascading Style Sheets">CSS (Cascading Style Sheets)</a></li>
                                <li><a href="{{ url('code_pages.java-samples') }}" title="Java Programming Samples">Java Samples</a></li>
                                <li><a href="{{ url('code_pages.javascript-samples') }}" title="JavaScript Programming Scripting Samples">JavaScript</a></li>
                                <li><a href="{{ url('code_pages.php-samples')  }}" title="PHP Code Examples">PHP</a></li>
                                <li><a href="{{ url('code_pages.python-samples') }}" title="Python Programming Samples">Python</a></li>
                                <li><a href="{{ url('code_pages.umbraco-cms') }}" title="Umbraco ASP.NET CMS">Umbraco CMS</a></li>
                                <li><a href="{{ url('javascript-programs/jquery-toggling') }}" title="jQuery Toggle Example">jQuery Toggling</a></li>
                            </ul>
                        </li>
                    </ul>

                    {{-- Galleries Dropdown  --}}
                    <ul class="nav navbar-nav">
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" id="dropdown-toggle-override" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Galleries<span class="caret"></span></a>
                            <ul class="dropdown-menu" id="navbar-dropdown-override">
                                <li><a href="{{ url('pages.photoshop-gallery') }}">Photoshop Gallery</a></li>
                                <li><a href="{{ url('pages.photography-gallery') }}">Photography Gallery</a></li>
                                {{-- <li><a href="{{ url('templates.gallery-template') }}">Gallery Template</a></li> --}}
                            </ul>
                        </li>
                    </ul>

                    {{-- NON-dropdown menu items  --}}
                    <ul class="nav navbar-nav">
                        <li><a href="{{ url('pages.about') }}">About</a></li>
                        <li><a href="{{ url('contact') }}">Contact</a></li>
                    </ul>

                    {{-- Galleries Dropdown  --}}
                    <ul class="nav navbar-nav">
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" id="dropdown-toggle-override" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Img CRUD Testing<span class="caret"></span></a>
                            <ul class="dropdown-menu" id="navbar-dropdown-override">
                                <li><a href="{{ url('photos.image_example') }}">Example Result of Intervention Image</a></li>
                                <li><a href="{{ url('photos.create') }}">Test the Upload/Display Intervention Image Functionality</a></li>
                                <li><a href="{{ url('upload') }}">Image Uploader</a></li>
                                <li><a href="{{ url('pages.slideshow') }}">Slideshow</a></li>
                            </ul>
                        </li>
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