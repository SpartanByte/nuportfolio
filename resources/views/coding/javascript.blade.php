 @extends('layouts.default')
    @section('description', 'General information about JavaScript and libraries/frameworks Vue.js, React.js, Angular.js')
      @section('title', 'JavaScript Information')

    @section('content')
    <div class="static-content code-sample-page">

        {{-- Current CSS isn't showing anything above the following H1, will need to fix this  --}}
        <span class="page-header uppercase-shadow mid-size-font">JavaScript</span>
        <hr />

        <img src="/images/logos/javascript.jpg" width="400"/>
         <div><br /><span class="page-header mid-size-font">JAVASCRIPT</span><br /></div>
            <p>The following simple examples show basic functionality of native JavaScript. I will be adding examples that show the diversity of the numberous JavaScript libraries and frameworks including AnglularJS and VueJS</p>

        <img src="/images/logos/jquery.png" width="400" />
         <div><br /><span class="page-header mid-size-font">jQuery</span><br /></div>
            <p>After being released initially in 2006, <a href="https://jquery.com/" title="jQuery Documentation" target="_blank">jQuery</a> has become quite likely the most widely used JavaScript library. Much of  this is that it mutates much of the tediousness of plain JavaScript into a much more straight-forward syntax. This is especially true when regarding Document  Object Model elements, animations, event handling and Ajax applications. jQuery's prewritteen functions for grabbing HTML "id" attributes, button events, and so forth most often include less code and with less repitition. Hence it's mantra of <em>"write less, do more"</em>.</p>
            <p>jQuery has also expanded by adding the <a href="https://jqueryui.com/" title="jQuery UI Documentation" target="_blank">jQuery UI</a> library designed for better handling of user interface features  such as interactions, effects, widgets, and even themes. <a href="https://jquerymobile.com/" target="_blank">jQuery Mobile</a> is also very widely used for making mobile sites quickly or adding it to "responsive breakpoints" of desktop sites for responsive, mutli-platform/multi-device websites and applications</p>


        <hr />
        <img src="/images/logos/vuejs.jpg"  width="300"/>
         <div><br /><span class="page-header mid-size-font">Vue.js</span><br /></div>
            <p><a href="https://vuejs.org/" target="_blank">Vue.js</a> has gained quick popularity after being released just three years ago in 2014. An advanced framework, complete with a "vue-router" package, that was bit to simplify the process of building interactive user interfaces. As <a href="https://en.wikipedia.org/wiki/Vue.js" target="_blank">Wikipedia</a> reports, it has power in SPA's (Single Page Applications) as well as transitions (regarding the "DOM", Document Object Model) and runs by the use of templates and components. It is considered an lightweight alternative to AngularJS, however it is a library designed to sit on top of framework architecture rather than to be relied on by itself.  Goals for Vue.js are versatility and simplicity. Laravel comes with Vue.js out of the box, making it an more powerful choice for more "lightweight" needs where an entire JavaScript framework is overkill.</p>
        <hr />

        <img src="/images/logos/angular.png" width="400" />
         <div><br /><span class="page-header mid-size-font">AngularJS</span><br /></div>
            <p>In my experience so far, I don't think there is a more commonly debated topic than discussing how relevant (in the past or today) <a href="https://angularjs.org/" title="AngularJS Documentation" target="_blank">AngularJS</a> really is. It's true that new JavaScript frameworks and libraries seem to pop up nearly monthly, but Angular is one that really took off leaving other frameworks such as Ember or Knockout quite a bit behind, although Knockout seems to still be used on occasion. Developed by Google in 2010, it's goal as a front-end framework was to provide both client-side MVC (Model View Controller) and MVVM (model-view-viewmodel) architectures for rich web applications that can be updated in real-time, provide declarative programming for the user interfaces and connecting software components. By separating the client-side of the application with the server-side, you can dramatically improve dynamic capabilities using two-way binding. These topics can become complex and out of the scope of a simple descriptions. However, I attached some resources for a couple of these topics below for aspiring programmers and developers.</p>
            <ul>
                <li><a href="http://whatis.techtarget.com/definition/model-view-controller-MVC" title="Model-View-Controller Explanation" target="_blank">Model-View-Controller (MVC) | From TechTarget.com</a></li>
                <li><a href="https://blogs.msdn.microsoft.com/msgulfcommunity/2013/03/13/understanding-the-basics-of-mvvm-design-pattern/" title="Model-View-ViewModel Explained" target="_blank">"Understanding the basics of MVVC Design Pattern" | From Microsoft Developer</a></li>
                <li><a href="https://en.wikipedia.org/wiki/Declarative_programming" title="Declarative Programming Explained" target="_blank">Declarative Programming | From Wikipedia</a></li>
                <li><a href="https://docs.angularjs.org/guide/databinding" title="Data Binding Explanation" target="_blank">Data Binding Explained | From AngularJS's Developer Guide</a></li>
            </ul>   

            <img src="/images/logos/react.png" width="400" />
            <div><br /><span class="page-header mid-size-font">React</span><br /></div>
            <p>Relatively newer, <a href="https://facebook.github.io/react/" title="React.js" target="_blank">React</a> (also called React.js or ReactJS) was developed by a community of programmers from Facebook, Instragram and more in 2013. React (library) is another choice for rich user interfaces that provide real time interactions, animations, and one-way data flow. Though it is a library, it's built to correspond and be implemented by an MVC framework. One of its unique features is "JSX", which allows rendering subcomponents by using a JavaScript extensible syntax. Additionally, a adjacent version of React is <a href="https://reactjs.net/" title="ReactJS.NET Documentation" target="_blank">ReactJS.NET</a> which is specifically designed to work with and communicate with Microsoft's C# programming language and ASP.NET (latest release 3.1 on July 2nd, 2017). Though I have not used React yet, this makes me far more curious based on my more recent adoration for the ASP.NET Content Management System, <a href="https://umbraco.com/" title="Umbraco" target="_blank">Umbraco</a> which is written in and uses C#.</p>

            <img src="/images/logos/node.png" width="400" />
            <div><br /><span class="page-header mid-size-font">Node.js</span><br /></div>
            <p><a href="https://nodejs.org/en/" title="Node.js Documentation" target="_blank">Node.js</a> is likely unlike any other JavaScript library or framework that I know of. Very different from most, if not all, JavaScript frameworks is that Node.js is a <em>server-side</em> framework that runs on asynchronous programming. To make it even more of an advantage is that it is a runtime built on top of Chrome's V8 JavaScript engine. Further, Node.js explains that it <em>"uses an event-driven, non-blocking I/O model that makes it lightweight and efficient"</em>(<a href="https://nodejs.org/en/" target="_blank">source</a>).  Node's packaging ecosystem, <strong>npm</strong> (run by command line) is the largest ecosystem of open source libraries in the world. The packages are as varied as they are numerous. In fact, the previously mentioned Vue.js requires Node's npm. Other popular package tools requiring npm include <a href="https://www.npmjs.com/package/grunt" title="Grunt Task Runner" target="_blank">Grunt</a> (a JavaScript Task Runner), <a href="https://www.npmjs.com/package/bower" title="Bower Package" target="_blank">Bower</a> (front-end package management), and others ranging from utility packages to debugging additions and more.</p>

           <div><br /><span class="page-header mid-size-font">The Bottom Line:</span><br /></div>
            <p>There are many, many other JavaScript frameworks and libraries exist and it is very often debated on which ones to use or even how important many of these are considering they appear and disappear so rapidly. In most cases, it would come down to the developer, the needs of the project, and the scale of the project. Some of these "Best of (Year)" lists/reviews are below.</p>
            <br />
            <div><br /><span class="page-header mid-size-font">The many lists:</span><br /></div>
            <ul>
                <li><a href="https://www.sitepoint.com/top-javascript-frameworks-libraries-tools-use/" title="Sitepoint: Best JavaScript Frameworks" target="_blank">Best JavaScript Frameworks, LIbraries and Tools to use in 2017</a> (Source: Sitepoint.com)</li>
                <li><a href="https://colorlib.com/wp/javascript-frameworks/" title="Top 23 Best Free JavaScript Frameworks for Web Developers 2017" target="_blank">Top 23 Best Free JavaScript Frameworks for Web Developers 2017</a> (Source: colorlib.com)</li>
                <li><a href="https://superdevresources.com/popular-javascript-frameworks/" title="Top 7 Most Popular JavaScript Frameworks in 2017" target="_blank">Top 7 Most Popular JavaScript Frameworks in 2017</a> (Source: superdevresources.com)</li>
                <li><a href="https://hackernoon.com/5-best-javascript-frameworks-in-2017-7a63b3870282" title="Hackernoon: 5 Best JavaScript Frameworks" target="_blank">5 Best JavaScript Frameworks in 2017</a> (Source: hackernoon.com)</li>
                <li>...and the list goes on.</li>
            </ul>

 
    </div>
@stop