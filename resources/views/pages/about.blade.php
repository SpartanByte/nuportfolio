    @extends('layouts.default')

    @section('content')
    <div class="static-content">
        <h1>A Brief Story About Myself</h1>

        {{-- start of background/bio --}}
        <section class="background">
            <h3>Background</h3>

            <p>I am a native of Fargo, North Dakota and attended Fargo North High School. Years later, I enrolled in the <em>Web Development AAS</em> program at <a href="#" alt="Minnesota State Community and Technical College" target="_self">Minnesota State Community and Technical College</a> to which I graduated from in the summer of 2015 with additional credits. Course areas included HTML/CSS, Javascript, Web Applications Programming, PHP/MySQL, Python (from the Computer Programming courses), Content Management Systems, and User Interface/Experience Design. However, my passion to learn more and dig deeper didn't end there.</p>

            <p> I am currently enrolled in the <em>Internet Programming</em> certificate program at <a href="#">North Hennepin Community College</a> which is focusing on Object Oriented Programming, Structured Computer Programming, Software Engineering and Database Design. I loved learning more Java and C# and am looking forward to adding ASP.NET to my skillset. I had also taken Java, C++/C# and SQL during a semester at <a href="#">Minnesota State College - Southeast Technical</a> in the spring of 2016.</p>


            <p>Professionally, I began a temporary contract with <a href="#">Dakota Supply Group</a> merging two internal websites into one cohesive Wordpress site. When this concluded in October, I joined <a href="#">Insight Technologies</a>as a full time Web Developer. It has been a wonderful experience already and introduced me to PHP's <a href="#">Laravel</a> MVC framework among other technologies.</p>
        </section>


        <hr />
        <section class="skillset">
            <h4>Skill-Set</h4>
            <ul>
                <li class="skill-headers"><strong>Front-End</strong></li>
                    <ul class="skills">
                        <li>CSS / Sass</li>
                        <li>JavaScript</li>
                        <li>Adobe Photoshop</li>
                    </ul>
                <li class="skill-headers"><strong>Back-End</strong></li>
                    <ul class="skills">
                        <li>Laravel (PHP Framework)</li>
                        <li>PHP</li>
                        <li>C#</li>
                        <li>Java</li>
                    </ul>
            </ul>
        </section>

        {{-- Start of Professional/Personal Development --}}
        <section class="development-history">
        <h4>Professional and Personal Development:</h4>
            <h5>Insight Technologies</h5>
                <p><strong>Web Developer, October 2016 - Current</strong></p>
            <h5>Dakota Supply Group</h5>
                <p><strong>Intranet/Internal Website (Temp/Contract), June 2016-Current (Maintenance Contract)</strong></p>
            <h5><a href="http://musicbytes.us/" title="MusicBytes: Entertainment" alt="MusicBytes.us: Entertainment Website">MusicBytes.us</a></h5>
                <p><strong>Music Entertainment Website, Web Developer (2012 - Current)</strong></p>
        </section>

        <section class="academic-history">
            <h4>Academics:</h4>
                <h5>North Hennepin Community College, Internet and Object-Oriented Programming</h5>
                    <p>Attended 2016-??, eCampus</p>
                <h5>Minnesota State College - Southeast Technical, Web Programming</h5>
                    <p>Attended Spring 2016, eCampus</p>
                <h5>Minnesota State Community and Technical College, Web Development AAS</h5>
                    <p><strong>Graduated: May 2015, Moorhead MN</strong></p>
        </section>
    </div>
@stop