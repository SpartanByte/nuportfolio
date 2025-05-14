    @extends('layouts.default')
    @section('description', 'About Brian Wardwell: web developer, musician, amateur photographer, writer, native of Fargo North Dakota')
    @section('title', 'My Background')

    @section('content')
    <div class="static-content about">
        <span class="page-header uppercase-shadow mid-size-font">A Little Bit About Myself</span><br />
        <img src="/images/site-images/about-me.jpg">
        <section class="background">
            <span class="section-header uppercase-shadow mid-size-font">Background</span><br />

            <p>To formally introduce myself, I am Brian Wardwell and am a native of Fargo, North Dakota. Recently, I relocated to the Minneapolis, Minnesota area and am loving it so far. My journey to Web Development officially dates back to early 2004 when I began to work on a clumsy website builder, which were still new at the time, on <a href="http://www.tripod.lycos.com/" title="Tripod - Web Publishing" target="_blank">Tripod.com</a>. The motivation for a website came to promote my original music, Battle Cry, that I was distributing myself. The site used templates and the web builder tools provided by Tripod, however, I pushed it further by using Flash banner tools from another service to create ads and animation. I also began working on Adobe Photoshop the same year to create logos and other artwork.</p>

            <p>Years later, in 2011, I made the decision that this is truly what I want to do in life and finally started to learn some code. I also enrolled in the Web Development AAS program at <a href="http://www.minnesota.edu/" title="Minnesota Community and Technical College" target="_blank">Minnesota State Community &amp; Technical College</a>. At the time, the program included more advanced Adobe Photoshop, HTML, CSS, JavaScript, Web Development Strategies &amp; Practices and moved into PHP/MySQL, Content Management Systems (CMS), eCommerce, JavaScript libraries and API's, User Interface &amp; User Experience Design, and Search Engine Optimization. Although not required, I also took Python and Microcomputer Database courses to learn further programming techniques.</p>

            <p>After graduating with my AAS in Web Development in May of 2015, I took online courses at both <a href="http://www.southeastmn.edu/" title="Minnesota State College: Southeast Technical" target="_blank">Minnesota State College: Southeast Technical</a> and <a href="https://www.nhcc.edu/" title="North Hennepin Community College" target="_blank">North Hennepin Community College</a> to learn more <em>Object Oriented Programming</em> and .NET languages. My studies included work with C# (creating small Windows Forms Applications), C++ console applications development and Java console applications/applets development as well as additional SQL Database Design &amp; Implementation.</p>

            <p>My professional career began in 2016 when I was contracted by <a href="https://www.dakotasupplygroup.com/" title="Dakota Supply Group" target="_blank">Dakota Supply Group</a> (DSG) to merge their two intranet websites into one company-wide Wordpress intranet site. Following DSG, I joined <a href="https://www.greatinsight.com/" title="Insight Technologies" target="_blank">Insight Technologies</a> which gifted me an abundance of opportunities to new tools such as <a href="https://laravel.com/" title="Laravel's PHP MVC Framework" target="_blank">Laravel</a> PHP Framework and further development in <a href="https://www.tutorialspoint.com/design_pattern/mvc_pattern.htm" title="TutorialsPoint: MVC" target="_blank">MVC</a> design pattern, setting up and managing <a href="https://www.vagrantup.com/" title="Vagrant/Homestead" target="_blank">Vagrant</a> development environments, development in <a href="https://umbraco.com/" title="Umbraco CMS" target="_blank">Umbraco</a>'s C# CMS, and other tools such as using <a href="http://php.net/manual/en/book.curl.php" title="cURL PHP" target="_blank">cURL PHP</a> (client URL) to run verification checks on hosted SSL certificates. In addition, I was also introduced to working with <a href="https://www.sitefinity.com/" title="Sitefinity CMS" target="_blank">Sitefinity</a> and <a href="https://www.oscommerce.com/" title="osCommerce CMS" target="_blank">osCommerce</a> content management systems.</p>

            <p>In May 2018, I transitioned my employment to <a href="https://www.nvgo.com/" title="New Vision Engineering Solutions" target="_blank">New Vision Solutions</a> as a Software Engineer I. New Vision's introduced the fascinating world of the Internet of Things (IoT), much of what I have worked on to this point has been PTC's IoT development platform: <a href="https://www.ptc.com/en/resources/iot/product-brief/thingworx-platform" title="PTC ThingWorx Studio" target="_blank">ThingWorx Studio</a>. ThingWorx very often interacts with <a href="https://www.ptc.com/en" title="PTC Products Introduction" target="_blank">PTC</a> Product LifeCycle Management (PLM) products such as <a href="https://www.ptc.com/en/products/plm/plm-products/navigate" title="Navigate Role-Based PLM" target="_blank">Navigate</a> and <a href="https://www.ptc.com/en/products/plm/plm-products/windchill" title="Windchill PLM Management" target="_blank">Windchill</a> (for interaction with BoM Management (Bill of Materials) and more). ThingWorx customization entails JavaScript based services, Java entities and objects, XML exporting/importing, etc. Other New Vision past and present IoT projects include .NET applications in C#.</p>

            <p>In July 2019, I joined <a href="https://codelation.com/" title="Codelation" target="_blank">Codelation</a> as a Software Engineer. It was challenging and exciting to get into the world of Ruby and Ruby on Rails. It was also my first experience developing with a MacBook and using other technologies including Heroku, Postgres, Jira, and some React JS. The development team was collaborative and fun to work with.</p>


            <a href="{{ url('pages/experience') }}"><span class="professional-header" style="background:none;">View Professional Experience</span></a><br />

{{--  <div class="toolbox-list pad-bottom-1">
                <h4>What Do I Love In My Toolbox? (tech gear)</h4>
                <p>View the newly added <a href="{{ url('pages/skills-rundown') }}">Skills and Technologies Rundown</a> for tools, programming/scripting languages, development environments, and other technologies I prefer and have used.</p>
            </div> --}}



       {{-- <section class="skillset">
            <span class="mid-size-font">Skill-Set</span>
            <ul>
                <li class="ul-header"><strong>Front-End</strong></li>
                    <ul class="skills">
                        <li>CSS</li>
                        <blockquote>Development using established practices in CSS for layouts, positioning, animations, responsive web design, and other practical use. Other: some experience using <a href="https://getbootstrap.com/" title="Boostrap CSS/JS" target="_blank">Bootstrap</a> and <a href="https://sass-lang.com/" title="Sass: Syntactically Awesome Style Sheets" target="_blank">Sass</a> CSS Frameworks and <a href="https://daneden.github.io/animate.css/" title="Animate.css: CSS Animations" target="_blank">Animate.css</a> CSS animations library.</blockquote>

                        <li>JavaScript</li>
                        <blockquote>Developing and modifications to new or existing JavaScript and <a href="https://jquery.com/" title="jQuery libary" target="_blank">jQuery</a> functionality for interface interaction, form verification, <a href="https://developers.google.com/maps/" title="Google Maps APIs" target="_blank">Google Maps API</a>, and general front-end programming. Other: some experience using <a href="https://getbootstrap.com/" title="Bootstrap.js" target="_blank">Bootstrap</a>, <a href="https://vuejs.org/" title="Vue.js" target="_blank">Vue.js</a>, and <a href="https://angularjs.org/" title="Angular.js" target="_blank">Angular.js</a>.
                        </blockquote>

                        <li>Wordpress CMS (Front-End)</li>
                        <blockquote>Development and modifications of themes, child themes, custom post types, custom taxonomies, and other front-end customizations of <a href="https://wordpress.org/" title="Wordpress CMS" target="_blank">Wordpress</a> CMS. 
                        </blockquote>

                        <li>Umbraco CMS (Front-End)</li>
                        <blockquote>Stylesheets, Content Pages (from developed Document Types &amp; Templates) management, template management, and other general front-end customizations of <a href="https://umbraco.com/" title="Umbraco CMS" target="_blank">Umbraco CMS</a>. 
                        </blockquote>

                        <li>Adobe Photoshop</li>
                        <blockquote>Photoshop composites, photomanipulation, image editing, and other customized or original graphics.</blockquote>
                    </ul>

                <li class="ul-header"><strong>Back-End</strong></li>
                    <ul class="skills">
                        <li>PHP</li>
                        <blockquote>Dynamic and static PHP, <a href="https://laravel.com/" title="Laravel MVC Framework" target="_blank">Laravel</a> MVC Framework, CRUD database applications, object oriented PHP, PHPUnit testing, and general server/backend programming.</blockquote>

                        <li>Wordpress CMS (Back-End)</li>
                        <blockquote>Development: themes, child themes, custom post types, custom taxonomies, additional backend functions, database management, and other back-end customizations of <a href="https://wordpress.org/" title="Wordpress CMS" target="_blank">Wordpress</a> CMS. 
                        </blockquote>

                        <li>C#</li>
                        <blockquote>C# programming in Windows Form Applications, small desktop applications, and console applications.</blockquote>

                        <li>Umbraco CMS (Back-End)</li>
                        <blockquote>Site development including Document Types, Templates, Views/Partial Views, custom Data Types, Umbraco database querying, Macros, and other general C# programming with Umbraco.
                        </blockquote>

                        <li>Java</li>
                        <blockquote>Java programming developing small desktop applications, applets and console applications.</blockquote>

                        <li>Python</li>
                        <blockquote>Procedural Python programming in small desktop scripts and console applications.</blockquote>
                    </ul>
            </ul>
        </section> --}}
    </div>
@stop