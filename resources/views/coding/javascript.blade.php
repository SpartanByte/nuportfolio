    @extends('layouts.default')
    @section('description', 'General information about JavaScript and libraries/frameworks Vue.js, React.js, Angular.js')
      @section('title', 'JavaScript Information')

    @section('content')
    <div class="static-content code-sample-page">

        {{-- Current CSS isn't showing anything above the following H1, will need to fix this  --}}
        <span class="page-header uppercase-shadow">JavaScript</span>
        <hr />


        {{-- <img src="https://dummyimage.com/450x300/000/fff" /> --}}
        <img src="/images/logos/javascript.jpg" width="400"/>
        <h3>JavaScript Code Samples</h3>
            <p>The following simple examples show basic functionality of native JavaScript. I will be adding examples that show the diversity of the numberous JavaScript libraries and frameworks including AnglularJS and VueJS</p>


        <hr />
        <img src="/images/logos/vuejs.jpg"  width="300"/>
        <h3>Vue.js</h3>
            <p><a href="https://vuejs.org/" target="_blank">Vue.js</a> has gained quick popularity after being released just three years ago in 2014. An advanced framework, complete with a "vue-router" package, that was bit to simplify the process of building interactive user interfaces. Much as <a href="https://en.wikipedia.org/wiki/Vue.js" target="_blank">Wikipedia</a> reports, it has power in SPA's (Single Page Applications) as well as transitions (regarding the "DOM", Document Object Model) and runs by the use of templates and components.</p>
        <hr />

        <p class="med-size-font uppercase-shadow">Popular Javascript Frameworks and Libraries</p>
            <ul class="med-size-font uppercase-shadow">
                <li><img src="/images/logos/jquery.png" width="200" /><br />jQuery</li>
                <li><img src="/images/logos/vuejs.jpg" width="200" /><br />Vue.js</li>
                <li><img src="/images/logos/angular.png" width="200"/><br />Angular.js</li>
                <li><img src="/images/logos/node.png" width="200"/><br />Node.js</li>
                <li><img src="/images/logos/react.png" width="200"/><br />React.js</li>
            </ul>     
    </div>
@stop