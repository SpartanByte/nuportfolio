    @extends('layouts.default')
   @section('description', 'General information about C# and .NET applications')
    @section('title', 'C# Examples')

    @section('content')
    <div class="static-content code-sample-page">

        <span class="page-header uppercase-shadow mid-size-font">C# Code Samples</span>
        <hr />

        <img src="/images/logos/csharp.png" width="200" />
       <div><br /><span class="page-header mid-size-font">About C#</span><br /></div>
       {{-- Start of Description --}}
       <p>C# (pronounced C-Sharp) was developed by Microsoft in 2000 and is a "C-based" programming language and is an object-oriented .NET programming language. In other words, it is similar to C++ and Java, but it strongly-typed much like C++. However, it as not as strongly-typed as some of its language predecessors. A strongly-typed programming language regards data types in which it's required that constants must be defined within these predetermined data types. This also comes into play in using variables in, for example, data calculations where using an integer and a "double" (a type of decimal capable value) can conflict and cause errors. Beyond the scope of this short paragraph are ways to implement code to  sometimes work around these conflicts. An example of a "loosely-typed" programming language, which is the opposite, is PHP. Again, like <em>many things</em> within programming, most developers have certain tastes and preferences other than respecting "good practice". This is great in the sense that, in my opinion, it keeps minds and development diverse with many perspectives.</p>

       <p>As C# requires the .NET framework, it is not platform independent and does require the use of a Windows IDE such as Visual Studio. The good news for aspiring programmers and others interested in learning code but not to commit to expensive software, Microsoft offers <a href="https://www.visualstudio.com/vs/community/" title="Microsoft Visual Studio Community 2017" alt="Visual Studio Community Edition 2017">Visual Studio Community Edition 2017</a> for free. Though it is still a powerful IDE and still has support for creating Android, iOS, Windows, Cloud applications and so forth; it can be assumed that it doesn't have all the "bells and whistles" that are seen in <a href="https://www.visualstudio.com/vs/enterprise/" title="Visual Studio Enterprise Edition">Visual Studio: Enterprise Edition</a> (or Professional Edition).</p>

        <p>For additional information, visit<a class="outgoingLink" href="http://www.c-sharpcorner.com/"> C# Corner</a>, a social and support community for C# developers and programmers.</a></p>

        {{-- Note: message..... --}}
        <blockquote class="normal-size-font grey-rgba"><strong>Note:</strong> Due to working a solution to convert the current C# programs, Windows Forms Applications, to ASP.NET and considering using a Connected System to show them,
                major code portions/examples are in .pdf format. Also listed in a downloadable zip file which includes the solution but not every detail, for security reasons.</blockquote>

        {{-- Start of Examples --}}
            <p class="mid-size-font uppercase-shadow">C# Samples</p>
            <ul class="file-list med-size-font">
                    <li><a href="/files/csharp/AveragesForm-CSharp.pdf">Averages Form: 'Form1.cs'</a><img src="/icons/file-icons/pdf-file.png"/> 
                    <a href="/files/csharp/AveragesForm.zip">AveragesForm.zip</a><img src="/icons/file-icons/zip-file.png"/></li>
                    <li><a href="/files/csharp/GuessAWord.pdf">GuessAWord: 'GuessAWord.cs' (Web Form)</a><img src="/icons/file-icons/pdf-file.png"/></li>
                    <li><a href="/files/csharp/AveragesForm.zip">GuessAWord.zip</a><img src="/icons/file-icons/zip-file.png"/></li>
                     <li><a href="/files/csharp/GuessAWord.pdf">PrimeFactors: 'PrimeForm.cs' (Web Form)</a><img src="/icons/file-icons/pdf-file.png"/></li>
                    <li><a href="/files/csharp/AveragesForm.zip">Prime Factors.zip</a><img src="/icons/file-icons/zip-file.png"/></li>
            </ul>

    </div>
@stop