    @extends('layouts.default')
   @section('description', 'General information about Umbraco - a ASP.NET and C# based  content management system')
    @section('title', 'Umbraco CMS: About')

    @section('content')
    <div class="static-content code-sample-page">

        {{-- Current CSS isn't showing anything above the following H1, will need to fix this  --}}
        <span class="page-header uppercase-shadow">Umbraco: An ASP.NET CMS</span> 
        <hr />


        <img src="/images/logos/umbraco-logo.png"/>
        <h3>Umbraco</h3>
            <p>Simply put, Umbraco is a content management system for ASP.NET and written in C#. However, that is likely too simply put as Umbraco is far more than that including implementation of full MVC (Model-View-Controller) architecture. For more information or for assistance, Umbraco has a fantastic support community as well as documentation at <a href="outgoingLink" title="Our.Umbraco">Our.Umbraco.org</a>.</p>
            <br />
            <p>Key features and benefits of the Umbraco CMS (for the developer, client, and end user):</p>
            <ul class="standard-ul">
                <li>Media Types and the Media Document Library</li>
                <li>Macros and Partial View Macro Files</li>
                <li>Support for XSLT Files</li>
                <li>Data Types and installable Packages</li>
                <li>Document Types (includes declaration of parent nodes and children)</li>
                <li>Templates and Partial Views</li>
                <li>Support for many languages, accessible from a simple drop-down menu</li>
            </ul>
            {{-- <iframe width="560" height="315" src="https://www.youtube.com/embed/giYeaKsXnsI" frameborder="0" allowfullscreen></iframe> --}}
        <hr />
    </div>
@stop