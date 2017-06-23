    @extends('layouts.default')
   @section('description', 'General information about server-side programming lanuage Python including smaller desktop application scripts')
    @section('title', 'Python Examples')

    @section('content')
    <div class="static-content code-sample-page">

        {{-- Current CSS isn't showing anything above the following H1, will need to fix this  --}}
       <span class="page-header uppercase-shadow mid-size-font">Python Code Samples</span>
        <hr />

        <img src="/images/language-icons/python-header.png" width="400"/>
        <div><br /><span class="page-header mid-size-font">About Python</span><br /></div>

        {{-- Start of Description --}}
        <p>Python is a programming language, some developers may call it a scripting language or interpreted language, that is labeled as "general purpose". It was, homorously named after Monty Python when it was revealed in 1991 by Guido van Rossum. Generally, many web developers as well as software developers started their learning with Python. In many ways, the concepts of program design and programming structure are easier to start students and self-taught developers are easier to begin accessing and understanding with Python. For myself, the ability to install it and open up IDLE (the Python interpreter that can also work as a command-line in a sense) and start doing calculations, returning words ('strings'), and other simple tasks helped me begin to understand how the backend of web and desktop applications work. Python's syntax is slightly different from many programming languages but on minor levels, in my opinion. </p>

        <p>
            As in PHP, JavaScript, C#, Java and so forth: <code>/* This is a multiline comment in many programming languages such as PHP and C# */</code><br />
            A comment in Python resembles config files:  <code> # This is a comment in Python (multiline or single line)</code>.</p>

        <p>
            A function in PHP: <code>function nameYourFunction($parameter1, $parameter2){</code>... and so forth. <br />
            A function in Python: <code>def nameyourfunction(paramter1, parameter2):</code>... and so forth.</p>

        <p>Python also uses colons rather than semicolons, functions are defined diffently and in quick desktop applications "task main" is required. You can also visit the very large <a class="outgoingLink" href="https://www.python.org/community/">Python Community</a>.</p>

        {{-- Note: message.... --}}
        <blockquote class="normal-size-font grey-rgba"><strong>Note:</strong> These examples were created in the Python IDE (IDLE) and have not yet been translated to web standard Python so that they can be rendered in a web page. As a result, these examples are a combination of PDF files showing Python code and images of the interfaces.</blockquote>

        {{-- Start of Examples --}}
        <ul class="file-list med-size-font">
                <li><a href="/files/python/py-calculations.py">Python Calculations Example</a> 
                        <img src="/images/language-icons/python.png" width="50" height="50" /></li>
                <li><a href="/files/python/python-calculations.txt">Python Calculations  (.txt file)</a>
                        <img src="/icons/file-icons/txt-file.png" /></li>

        </ul>
            {{--         <p><a class="internalLink" href="/files/python/py-calculations.py">Python Calculations Example</a>
                            <img src="/images/language-icons/python.png" width="50" height="50">(Note: this is in .py format)</p>
                    <p><a class="internalLink" href="/files/python/python-calculations.txt">Python Calculations (.txt format)</a></p>

                    <form action="/files/python/py-calculations.html" method = "POST">
                        <input type="submit" value="Run the Python program">
                    </form> --}}


Yes, me as well...kinda like an "okay", etc. Kinda like when people don't text back lol. Communication goes two ways. At least you're close to the end of the day, right?
        <hr />
    </div>
@stop