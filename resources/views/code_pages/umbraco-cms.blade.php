    @extends('layouts.default')

      @section('title', 'Umbraco CMS: About')

    @section('content')
    <div class="static-content code-sample-page">

        {{-- Current CSS isn't showing anything above the following H1, will need to fix this  --}}
        <h1 class="page-header">Umbraco: An ASP.NET CMS</h1>
        <hr />


        <img src="/images/logos/umbraco-logo.png"/>
        <h3>Umbraco</h3>
            <p>Simply put, Umbraco is a content management system for ASP.NET and written in C#. However, that is likely too simply put as Umbraco is far more than that including implementation of full MVC (Model-View-Controller) architecture. For more information or for assistance, Umbraco has a fantastic support community as well as documentation at <a href="outgoingLink" title="Our.Umbraco">Our.Umbraco.org</a>.</p>


        <hr />
        {{-- <img src="https://dummyimage.com/450x300/000/fff" /> --}}
        <img src="/images/logos/vuejs-logo.jpg" />
        <h3>Vue.js</h3>
            <p><a href="https://vuejs.org/" target="_blank">Vue.js</a> has gained quick popularity after being released just three years ago in 2014. An advanced framework, complete with a "vue-router" package, that was bit to simplify the process of building interactive user interfaces. Much as <a href="https://en.wikipedia.org/wiki/Vue.js" target="_blank">Wikipedia</a> reports, it has power in SPA's (Single Page Applications) as well as transitions (regarding the "DOM", Document Object Model) and runs by the use of templates and components.</p>
        <hr />

    
    </div>
@stop