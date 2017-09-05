    @extends('layouts.default')
    @section('description', 'About Brian Wardwell: web developer, musician, amateur photographer, writer, native of Fargo North Dakota')
    @section('title', 'About')

    @section('content')
    <div class="static-content about">
        <span class="page-header uppercase-shadow mid-size-font">A Little Bit About Myself</span><br />
        <img src="http://via.placeholder.com/600x400"  /><br />
        <span class="img-caption" style="width:600px;">Caption for the Image</span>

        {{-- start of background/bio --}}
        <section class="background">
            <span class="section-header uppercase-shadow mid-size-font">Background</span><br />

            <p>I am a native of Fargo, North Dakota and attended Fargo North High School. Years later, I enrolled in the <em>Web Development AAS</em> program at <a href="#" alt="Minnesota State Community and Technical College" target="_self">Minnesota State Community and Technical College</a> to which I graduated from in the summer of 2015 with additional credits. Course areas included HTML/CSS, Javascript, Web Applications Programming, PHP/MySQL, Python (from the Computer Programming courses), Content Management Systems, and User Interface/Experience Design. However, my passion to learn more and dig deeper didn't end there.</p>

            <p> I am currently enrolled in the <em>Internet Programming</em> certificate program at <a href="#">North Hennepin Community College</a> which is focusing on Object Oriented Programming, Structured Computer Programming, Software Engineering and Database Design. I loved learning more Java and C# and am looking forward to adding ASP.NET to my skillset. I had also taken Java, C++/C# and SQL during a semester at <a href="#">Minnesota State College - Southeast Technical</a> in the spring of 2016.</p>


            <p>Professionally, I began a temporary contract with <a href="#">Dakota Supply Group</a> merging two internal websites into one cohesive Wordpress site. When this concluded in October, I joined <a href="#">Insight Technologies</a>as a full time Web Developer. It has been a wonderful experience already and introduced me to PHP's <a href="#">Laravel</a> MVC framework among other technologies.</p>
        </section>


        <hr />
        <section class="skillset">
           <span class="mid-size-font">Skill-Set</span>
            <ul>
                <li class="ul-header"><strong>Front-End</strong></li>
                    <ul class="skills">
                        <li>CSS</li>
                            <blockquote>CSS Animations, Text Hovers and Shadow Effects, Grid Positioning Layouts, Responsive Web Design for desktop to mobile views, Float based layouts, Z-Index Layering, and plenty more.</blockquote>
                        <li>JavaScript</li>
                            <blockquote>JavaScript interactive elements such as button, hover, and other animations used with user interaction, dynamic views. I often use plain JavaScript and jQuery but recently started adapting and adding in Vue.js.</blockquote>
                        <li>Adobe Photoshop</li>
                            <blockquote>I've had a love for photomanipulation, Photoshop composites, image editing and more since approximately 2005. For many years, I've enjoyed amateur photography such as nature and self-portraits, which lead me to start using Photoshop to add professional touches long before I started working on my Web Development degree. More recently, I've adapted to making web application mockups before starting the actual coding of a website.</blockquote>
                    </ul>
                <li class="ul-header"><strong>Back-End</strong></li>
                    <ul class="skills">
                        {{-- <li>Laravel (PHP Framework)</li> --}}
                        <li>PHP</li>
                            <blockquote>Dynamic backend/server side programming for database applications, dynamic content, processing of user and other types of input, procedural and object oriented PHP. Though I started with starting from scratch with PHP sites and developing Wordpress websites, my more recent projects have included the Laravel MVC framework for small to large scale applications, database interaction such as record keeping, user management, profile management and more.</blockquote>
                        <li>C#</li>
                            <blockquote>I started with C# building Windows Form Applications within Microsoft's Visual Studio for small desktop software applications such as cabin rental quotes and more. Recently, I've moved ahead with C# (and some ASP.NET) while learning to use the Umbraco CMS.</blockquote>
                        <li>Java</li>
                            <blockquote>I've used Java to work with small interactive applets using Swing as well as console-only/command-line processing programs for calculations, information processing, and more.</blockquote>
                    </ul>
            </ul>
        </section>

        {{-- Start of Professional/Personal Development --}}
        <section>
        <span class="history-header">Professional and Personal Development:</span><br />
            <span class="history-title">Insight Technologies</section>
                <p class="history-details">Web Developer, October 2016 - Current</p>
                <blockquote>I have been working at Insight Technologies with a wonderful Web Development/E-Business team since October of 2016. I've never before been challenged so much and enjoying complicated and highly customized development. My work at Insight introduced me to the Laravel PHP framework, Umbraco (C#/ASP.NET) framework, and powerful backend applications involving authentication, database and product management, as well as starting to develop with Vue.js.</blockquote>
            <span class="history-title">Dakota Supply Group</span>
                <p class="history-details">Intranet/Internal Website (Temp/Contract), June 2016-Current (Maintenance Contract)</p>
                <blockquote>I worked with Preference Personnel during a project-based contract to rebuild and merge DSG's two Intranet sites using Wordpress.</blockquote>
           <span class="history-title"><a href="http://musicbytes.us/" title="MusicBytes: Entertainment" alt="MusicBytes.us: Entertainment Website">MusicBytes.us</span></a>
                <p class="history-details">Music Entertainment Website, Web Developer (2015 - Current)</p>
                <blockquote>I launched Musicbytes as a Wordpress-based music blog in January of 2015. I quickly started using it for more article and feature based content as well, edging it toward an Entertainment Website. I'm currently working on it as a project in my freetime by rebranding and redeveloping it as "The Music Pavilion" using Umbraco as for high customization and flexibility. I hope to finish developing it and launch it before the end of the year.</blockquote>
        </section>

        <section>
            <span class="history-header">Academics:</span><br />
                <span class="history-title">North Hennepin Community College, Internet and Object-Oriented Programming</span>
                    <p class="history-details">Attended 2016-??, eCampus</p>
                <span class="history-title">Minnesota State College - Southeast Technical, Web Programming</span>
                    <p class="history-details">Attended Spring 2016, eCampus</p>
                <span class="history-title">Minnesota State Community and Technical College, Web Development AAS</span>
                    <p class="history-details">Graduated: May 2015, Moorhead MN</p>
        </section>
    </div>
@stop