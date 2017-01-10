<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" type="text/css">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

<!-- Fonts -->
<link href="https://fonts.googleapis.com/css?family=Julius+Sans+One" rel="stylesheet">

<nav class="navbar navbar-default">
    <div class="container-fluid">
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li><a href="/">Home</a></li>

                    {{-- Start of dropdown available items | Projects dropdown --}}
                    <ul class="nav navbar-nav">
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Projects <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="#">MusicBytes</a></li>
                                <li><a href="#">New Line Character (Coming Soon)</a></li>
                            </ul>
                        </li>
                    </ul>

                    {{-- Code Samples Dropdo  --}}
                    <ul class="nav navbar-nav">
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Code Samples<span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="{{ url('code_pages.code-information') }}">Index & Information</a></li>
                                <li><a href="#" title="Javascript Code Examples">JavaScript</a></li>
                                <li><a href="{{ url('pages.java-samples') }}">Java Code Samples</a></li>
                                <li><a href="#" title="Python Code Examples">Python</a></li>
                                <li><a href="#" title="PHP Code Examples">PHP</a></li>
                                <li><a href="#" title="C# Code Examples">C#</a></li>
                            </ul>
                        </li>
                    </ul>

                    <ul class="nav navbar-nav">
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Public Profiles<span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="https://github.com/SpartanByte" title="SpartanByte: GitHub" target="_blank">GitHub</a></li>
                                <li><a href="https://gitlab.com/SpartanByte" title="SpartanByte: GitLab" target="_blank">GitLab</a></li>
                                <li><a href="http://stackexchange.com/users/9660538/nintensified" title="Stack Overflow, More" target="_blank">StackExchange</a></li>
                                <li><a href="https://www.sitepoint.com/premium/users/urlbyte" title="SitePoint Coding Community" target="_blank">SitePoint</a></li>
                                <li><a href="https://www.linkedin.com/in/briantwardwell" title="Brian Wardwell: LinkedIn" target="_blank">LinkedIn</a></li>
                            </ul>
                        </li>
                    </ul>

                    {{-- Galleries Dropdown  --}}
                    <ul class="nav navbar-nav">
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Galleries<span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="{{ url('pages.photoshop-gallery') }}">Photoshop Gallery</a></li>
                                <li><a href="#">Photography</a></li>
                                <li><a href="{{ url('templates.gallery-template') }}">Gallery Template</a></li>
                            </ul>
                        </li>
                    </ul>




                    {{-- NON-dropdown menu items  --}}
                    <ul class="nav navbar-nav">
                        <li><a href="{{ url('pages.about') }}">About</a></li>
                        <li><a href="#">Contact</a></li>
                    </ul>

                    {{-- Galleries Dropdown  --}}
                    <ul class="nav navbar-nav">
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Img CRUD Testing<span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="{{ url('photos.image_example') }}">Example Result of Intervention Image</a></li>
                                <li><a href="{{ url('photos.create') }}">Test the Upload/Display Intervention Image Functionality</a></li>
                                <li><a href="{{ url('upload') }}">Image Uploader</a></li>
                            </ul>
                        </li>
                    </ul>

            </ul>{{-- End of left side menu  --}}


            {{-- Start of right side search  --}}
            <form class="navbar-form navbar-right">
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Search">
                </div>
                <button type="submit" class="btn btn-default">Submit</button>
            </form>

        </div>
    </div>
    <!-- end of header.blade.php -->