    @extends('layouts.default')
   @section('description', 'General information about Umbraco - a ASP.NET and C# based  content management system')
    @section('title', 'Coding -> Umbraco CMS')

    @section('content')
{{--     <div class="static-content code-sample-page"> --}}
            <div class="static-content general-coding">

        {{-- Current CSS isn't showing anything above the following H1, will need to fix this  --}}
         <span class="page-header uppercase-shadow mid-size-font">Umbraco: An ASP.NET CMS</span>
        <hr />
        <img src="/images/logos/umbraco-logo.png" class="img-25 pad-bottom-1"/>
        <span class="section-header mid-size-font">Umbraco</span>
            <p>Simply put, <a href="https://our.umbraco.org/" title="Our Umbraco" target="_blank">Umbraco</a> is an opens source content management system for ASP.NET and written in C#. 
                It's distributed under a <a href="https://en.wikipedia.org/wiki/MIT_License" title="MIT License explanation" target="_blank">MIT License</a> (Wikipedia) and, as it requires Microsoft's .NET framework, it's usually deployed on <a href="https://www.iis.net/" title="Microsoft's Internet Information Services Website" target="_blank">Microsoft IIS</a> (Internet Information Services, which is Microsoft's web server. However, that is likely too simply put as Umbraco is far more than that including implementation of full MVC (Model-View-Controller) architecture. One of its key attractions for developers and clients alike is that it is very "developer friendly". The CMS is primarily a skeleton install, meaning that there is no theme or lots of plugins that are default and have to be stripped down. Out of the box, it does include very powerful query helpers for anything from grabbing media content to tags and also has a very extendable and detailed administrator and developer area called "backoffice". Or course, like most CMS's, permissions can easily be set for the client to manage content by only having the "Content" and "Media" tabs available. The Umbraco community have many packages to provide additional functionality, if the developer is not writing it themselves, such as blogs, calendars, and more.</p>
                <p>Other ASP.NET based content management systems include <a href="http://www.dnnsoftware.com/" title="DNN CMS" target="_blank">DNN</a> (formerly "DotNetNuke") and <a href="https://www.kentico.com/" title="Kentico Content Management System" target="_blank">Kentico</a>. These are paid but do require subscriptions in some cases such as  for different editions, addons, and so forth which can become quite expensive. <a href="http://www.sitefinity.com/" title="Sitefinity CSM" target="_blank">Sitefinity</a> is another popular choice, however it is premium only and is quite costly to start, starting at $899/yr for the standard edition and $8,000 for the first year of the Enterprise Edition when rates change in January of 2018 (<a href="http://sitefinityinsider.com/sitefinity-renewal-pricing-will-update-january-1-2018/" title="Sitefinity Renewal Pricing Updating January 2018, Sitefinity Insider" target="_blank">Source</a>).</p>
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
            <hr />
             <p class="med-size-font text-uppercase">Umbraco's Backoffice: Umbraco 7.6</p>
             <p>Photo courtesy of <a href="https://umbraco.com" title="umbraco.com" target="_blank">Umbraco.com</a></p>
            <img src="/images/umbraco-backoffice-2017.png" alt="Screenshot of the Umbraco administrator area in 2017" style="width:80%;" />
            <hr />
            <p class="med-size-font text-uppercase black-txt-block">Helpful Links</p>
            <ul class="standard-ul">
                <li><a href="https://our.umbraco.org/documentation/" title="Our.Umbraco" target="_blank">The Umbraco Documentation at Our.Umbraco.org</a></li>
                <li><a href="https://umbraco.com/blog/biggest-release-week-ever-3-umbraco-upgrades/" title="Umbraco.com Releases Version 7.6">Umbraco.com Release 7.6: "What's New"</a></li>
                <li><a href="https://www.iis.net/overview" title="Get Started with Microsoft IIS" target="_blank">An introduction and more information on Microsoft IIS</a></li>
                <li><a href="https://our.umbraco.org/projects/" title="Umbraco Projects" target="_blank">Umbraco Packages</a></li>
                <li><a href="http://sitefinityinsider.com/sitefinity-renewal-pricing-will-update-january-1-2018/" title="Sitefinity Insider" target="_blank">Sitefinity Insider: "Sitefinity Renwal Pricing Will Update on January 1, 2018"</a></li>
            </ul>
    </div>
@stop