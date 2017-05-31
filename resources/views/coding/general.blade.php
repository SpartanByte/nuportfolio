    @extends('layouts.default')

    @section('title', 'General Information')

    @section('content')
    <div class="static-content general-coding">

        <span class="page-header uppercase-shadow">General Coding Information</span>

        <hr />
        <img src="/images/logos/php.png" />

        <span class="section-header mid-size-font">PHP</span>
            <p>PHP (Hypertext Preprocessor) is a server-side language that was specifically designed for web development in 1994 by Rasmus Lerdorf. While
                PHP is often considered easier to learn as a first programming language, special consideration and best practices need to be followed
                to ensure security and proper implementation. As with many programming languages, <em>Procedural</em> PHP is where many get their start. However, with the popularity and usefulness of <em><strong>Object Oriented Languages</strong></em> such as Java, C#, C++ and Python; PHP evolved to be optionally written using Object Oriented principles. Older Object Oriented Languages including C# and Java have libraries of classes and methods that "come with" the language itself. Although PHP's implementation is much different in this respect, what it lacks in pre-written functionality allows it to be extremely flexible when the programmer is allowed to write custom classes, methods and libraries.</p>

            <p>PHP frameworks also assisted in the solution of pre-written classes and methods. Early frameworks, which are commonly debated as frameworks, were Phplib and PEAR which were introduced between 2000 and 2002. While the amount and sophistication of PHP frameworks slowly grew, its truly powerful object oriented and MVC (Model View Controller) really took off in 2005 when both <strong>CakePHP</strong> and <strong><a href="https://symfony.com/" target="_blank">Symfony</a></strong> took off. Alongside them were <a href="http://www.tinymvc.com/" target="_blank">TinyMVC</a>, <a href="https://codeigniter.com/" target="_blank">CodeIgniter</a>, and <a href="https://framework.zend.com/" target="_blank">Zend</a>. </p>

            <p>While Symfony, Zend, and CodeIgniter each provided follow up versions in the meantime, <strong><a href="https://laravel.com/" target="_blank">Laravel</a></strong> (an MVC framework based on Symfony itself) was introduced in 2011 with Laravel 2 upgrading it the same year. Laravel is currently on version 5 and is arguably the most popular and widely used PHP frameworks. Of course, CakePHP, Zend, and Symfony continue to advance as well.</p>

            <p>One of the forthcoming examples is an application that I originally developed as a course project which involved listing course ID's, course title, the semester in which the course was taken, professor's name, and the grade received. The program demonstrated the ability to create, update, view and remove courses and fields in this list, which was displayed in HTML using a table. This is otherwise known as a <strong>CRUD</strong> application, which is an acronym for "<strong>C</strong>reate, <strong>R</strong>ead, <strong>U</strong>pdate, and <strong>D</strong>elete".</p>

        <hr />
        <img src="/images/logos/CSS.png" />

        <span class="section-header mid-size-font">CSS</span>
            <p>CSS (or <strong>Cascading Styling Sheets</strong>) is still one of my favorite codes to play with even though isn't programming. The challenge of achieving the visual/user interface design along with the "WOW" factor has always been exciting. CSS is a <em>stylesheet</em> language that was introduced in 1996 after styling had begun to be added to HTML standards as need to give pages more than a "white background and black text" look quickly arose. It's still often explained to beginners that HTML is the structure, CSS is the "look and feel". CSS's syntax ranges from very simple to fairly complex. Much can be done using HTML tags alone, however without classes and ID's, it would be extremely difficult to maintain even the most basic of sites. Pseudo-classes are also extremely useful to put conditions on styles without the use of programming, such as when a link is being hovered by a mouse. CSS Preprocessors have also evolved by, at least, when <em><a href="http://sass-lang.com/" target="_blank">Sass</a></em>(Syntatically Awesome StyleSheets) was introduced in 2006. Other very common examples are <a href="http://lesscss.org/" target="_blank">Less</a> (influenced by Sass) and <a href="http://stylus-lang.com/" target="_blank">Stylus</a>. </p>

        <hr />
        <img src="/images/logos/javascript.png" />
        <h3>JavaScript</h3>
            <p>One of the least appreciated references is when JavaScript (a client side scripting language) is assumed to be similar to or confused with <strong>Java</strong> (a server-side object oriented programming language birthed long before web programming. The shortest and quickest explanation is simply that JavaScript was introduced in 1995 to add functionality to websites which was also a period where Java was exceptionally popular for desktop applications and some web programming as it evolved. I'm still unsure why its proper name, <strong>ECMAScript</strong> (or ES) hasn't replaced by the marketing driven given name. While many developers debate on if JavaScript (JS) should even be classified as a programming language, I won't lie or deny that it is still one of my least popular of the programming languages. My opinion of its scattered, messy syntax could be the same reason why JS libraries, years later, exploded as the language matured.</p> 

            <p><strong>jQuery</strong> was created to make writing JavaScript functionality quicker and with less lines of code. JS's nature is to run within the browser to add user interface functionality and interaction with the end user. I'm sure I will update this as there are many but many JavaScript libraries have come and gone over the years, in a trendy fashion, though jQuery is still very often a developer's first choice. Main reasons on the rising and falling of various libraries and frameworks for JavaScript over the years lays within concerns of security and maintainability. I personally also believe that the more libraries there are, the more confusing it is to use which library for what functionality. Currently, the most popular are jQuery, <strong>Angular</strong>, <strong>React</strong>, and the recently released <strong>Vue.js</strong>. However, the most recent version of JavaScript (ES6) greatly expanded its native capabilities such as objects, methods, and closures. Uniquely, <strong>Node.js</strong> continues popularity as it is built as a server-side language library rather than to run on the browser. There is even Node based servers and databases.</p>   


        <img src="/images/logos/python.png" />
        <h3>Python</h3>
            <p>Enter Python information here (including Django and Flask). </p>

        <hr />  
        <img src="/images/logos/csharp.png" />
        <h3>C# (and ASP.NET)</h3>
            <p>Arriving in 2010, C# is a strong-typed programming language that is based on both C++ and Java. C# was developed as a multi-paradigm programming language which allows it to encompass the object oriented, functional, and many other programming paradigms. It was also designed and developed for CLI (Client Language Infrastructure) which enables the ability to write code that doesn't have to be rewritten or amended for different platform architectures. It's often referred to be <em>platform agnostic</em> meaning a C# compiler (which translates human readable program code into machine language(binary) could be C++ based.</p>
            <p>Though other high-level programming languages such as Java, Python, Perl, Ruby and many more implement specific features and classes that enable functionality such as encapsulation (which increases security), C# is arguably particularly popular with many developers for various reasons. A very common reason is the frequency in which C#'s syntax and libraries are updated. Version 5.0 add Async Features and Caller Information, Version 6.0 added primary structures, exception filters and other features.</p>
            <p>Built with C# and ontop of Microsoft's ASP.NET foundation and alongside another ASP.NET CMS (<a href="https://www.kentico.com" title="Kentico" target="_blank">Kentico</a>) is the hugely popular Content Management System, <a href="https://umbraco.com/" title="Umbraco" target="_blank">Umbraco</a>. Known for being both user friendly as well as developer friendly, Umbraco features a powerful "BackOffice" that allows access and manuplation to data types, document types, macros/partials, templates and XSLT files conveniently through its BackOffice interface. Additionally, using Visual Studio, Umbraco can be extended into a full fledged MVC system to apply and implement even further customizations. Unlike PHP's Wordpress, developers have much more freedom in customizing and mixing high level programming code with HTML markup using ASP.NET's templating and rendering language: Razor. Specific web server configurations can be modified through the web.config files as well as configuring specific properties, rules, and even assigning specific CSS stylesheets to more than one property editor and events. Umbraco also boasts its "friendliest community" and documentation at <a href="https://our.umbraco.org/" title="Our.Umbraco" target="_blank">Our.Umbraco</a>.</p>
        <hr /> 
    </div>
    <div class="bottom-spacer"></div>
@stop