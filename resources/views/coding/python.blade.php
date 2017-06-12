    @extends('layouts.default')

    @section('title', 'Python Examples')

    @section('content')
    <div class="static-content code-sample-page">

        {{-- Current CSS isn't showing anything above the following H1, will need to fix this  --}}
        <span class="page-header uppercase-shadow">Python Code Samples</span>
        <hr />

        <img src="/images/language-icons/python-header.png" />
        <h3>Python</h3>
        <p><a class="outgoingLink" href="https://www.python.org/community/">Visit the Python Community!</a></p>
        
        <p><a class="internalLink" href="/files/python/py-calculations.py">Python Calculations Example</a>
                <img src="/images/language-icons/python.png" width="50" height="50">(Note: this is in .py format)</p>
        <p><a class="internalLink" href="/files/python/python-calculations.txt">Python Calculations (.txt format)</a></p>

        <form action="/files/python/py-calculations.html" method = "POST">
            <input type="submit" value="Run the Python program">
        </form>


        <hr />

   
    </div>
@stop