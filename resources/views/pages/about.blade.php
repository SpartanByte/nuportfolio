    @extends('layouts.default')

    @section('title', 'About')

    @section('content')
    <div class="static-content about">
 
        <span class="page-header uppercase-shadow small-header-font">A Little Bit About Myself</span><br /><br />

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
           <hr />
            <ul>
                <span class="mid-size-font"><li class="ul-header"><strong>Front-End</strong></li></span>
                    <ul class="skills small-header-font">
                        <li>CSS / Sass</li>
                        <li>JavaScript</li>
                        <li>Adobe Photoshop</li>
                    </ul>
                <span class="mid-size-font"><li class="ul-header"><strong>Back-End</strong></li></span>
                    <ul class="skills small-header-font">
                        <li>Laravel (PHP Framework)</li>
                        <li>PHP</li>
                        <li>C#</li>
                        <li>Java</li>
                    </ul>
            </ul>
        </section>

        {{-- Start of Professional/Personal Development --}}
        <section>
        <span class="history-header">Professional and Personal Development:</span><br />
            <span class="history-header second-level">Insight Technologies</section></br />
                <p>Web Developer, October 2016 - Current</p>
            <span class="history-header second-level">Dakota Supply Group</span><br />
                <p>Intranet/Internal Website (Temp/Contract), June 2016-Current (Maintenance Contract)</p>
           <span class="history-header second-level"><a href="http://musicbytes.us/" title="MusicBytes: Entertainment" alt="MusicBytes.us: Entertainment Website">MusicBytes.us</span></a>
                <p>Music Entertainment Website, Web Developer (2012 - Current)</p>
        </section>

        <section>
            <span class="history-header">Academics:</span><br />
                <span class="history-header second-level">North Hennepin Community College, Internet and Object-Oriented Programming</span><br />
                    <p>Attended 2016-??, eCampus</p>
                <span class="history-header second-level">Minnesota State College - Southeast Technical, Web Programming</span><br />
                    <p>Attended Spring 2016, eCampus</p>
                <span class="history-header second-level">Minnesota State Community and Technical College, Web Development AAS</span><br />
                    <p>Graduated: May 2015, Moorhead MN</p>
        </section>
    </div>
@stop