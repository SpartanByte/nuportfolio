@extends('layouts.default')
@section('description', 'General information about server-side programming lanuage Java and libraries such as Swing')
@section('title', 'Coding Examples')

@section('content')
<div class="static-content general-coding" >
    <span class="page-header uppercase-shadow mid-size-font">Code Examples</span><hr />
        <ul class="file-list med-size-font">
            <span class="section-header example-type mid-size-font examples">JavaScript Examples</span>

        <li>
            <a href="http://brianwardwell.net/academics.php">
                <img src="/icons/link-icon.png" alt="chain icon for internal link"/> jQuery Tab Show/Hide Example (Link to Page) <em>(New!)</em>
            </a>
        </li>
        <li>
            <a href="{{ route('js.jquery-toggle') }}">
                <img src="/icons/link-icon.png" alt="chain icon for internal link"/> jQuery Toggling Example (Link to Page)
            </a>
        </li>
        <li><a href="{{ route('js.slideshow') }}">
                <img src="/icons/link-icon.png" alt="chain icon for internal link"/> jQuery Slideshow (Link to Page)
            </a>
        </li>
        <li><a href="{{ route('js.tuition-calculator') }}">
                <img src="/icons/link-icon.png" alt="chain icon for internal link"/> JavaScript Tuition Calculator (Link to Page)
            </a>
        </li>
    </ul>
    <ul class="file-list med-size-font">
        <span class="section-header example-type mid-size-font">PHP Examples</span>
        <li>
            <a href="{{ route('php.timeanddates') }}"><img src="/icons/link-icon.png" alt="chain icon for internal link"/> Time and Dates (Link to Page)</a>
        </li>
    </ul>

    <ul class="file-list med-size-font">
        <span class="section-header example-type mid-size-font">Laravel Examples</span>
        <li>
            <a href="/files/php/ControllerClassExample.txt"><img src="/icons/file-icons/txt-file.png"> Laravel Controller Class Example</a>
        </li>
    </ul>

    <ul class="file-list med-size-font">
        <span class="section-header example-type mid-size-font">C# Examples</span>
        <li>
            <a href="/files/csharp/AveragesForm-CSharp.pdf"><img src="/icons/file-icons/pdf-file.png" alt="file icon for csharp files"/> Averages Form: 'Form1.cs'</a>
        </li>
        <li>
            <a href="/files/csharp/AveragesForm.zip">
                <img src="/icons/file-icons/zip-file.png" alt="file icon for compressed zip files"> AveragesForm.zip
            </a>
        </li>
        <li>
            <a href="{{ route('csharp.guess-a-word') }}">
                <img src="/icons/link-icon.png" alt="chain icon for internal link"/> "Guess A Word" (Link to Page)
            </a>
        </li>
        <li>
            <a href="/files/csharp/GuessAWord.pdf">
                <img src="/icons/file-icons/pdf-file.png" alt="file icon for Adobe PDF files"> GuessAWord: 'GuessAWord.cs' (Web Form)
            </a>
        </li>
        <li>
            <a href="/files/csharp/AveragesForm.zip">
                <img src="/icons/file-icons/zip-file.png" alt="file icon for compressed zip files"> GuessAWord.zip
            </a>
        </li>
        <li>
            <a href="{{ route('csharp.prime-numbers') }}">
                <img src="/icons/link-icon.png" alt="chain icon for internal link"/> "Prime Numbers" (Link to Page)
            </a>
        </li>
        <li>
            <a href="/files/csharp/GuessAWord.pdf">
                <img src="/icons/file-icons/pdf-file.png" alt="file icon for Adobe PDF files"> PrimeFactors: 'PrimeForm.cs' (Web Form)
            </a>
        </li>
        <li>
            <a href="/files/csharp/AveragesForm.zip">
                <img src="/icons/file-icons/zip-file.png" alt="file icon for compressed zip files"> Prime Factors.zip
            </a>
        </li>
    </ul>

    <ul class="file-list med-size-font">
        <span class="section-header example-type mid-size-font">Python Examples</span>
        <p style="text-align:left;">Python examples are provided in both .txt form, opening within the browser, and a downloadable .py Python console file.</p>
        <li>
            <a href="/files/python/PositiveNumberSum.py">
                <img src="/icons/file-icons/python-file.png"/ alt="file icon for Python files"> Postive Number Sum (Console Program)
            </a>
        </li>
        <li>
            <a href="/files/python/PositiveNumberSum.txt">
                <img src="/icons/file-icons/txt-file.png" alt="file icon for text files"/> Positive Number Sum (.txt file)
            </a>
        </li>
        <li>
            <a href="/files/python/BudgetSubtractor.py">
                <img src="/icons/file-icons/python-file.png" alt="file icon for Python files"/> Budget Subtractor
            </a>
        </li>
        <li>
            <a href="/files/python/BudgetSubtractor.txt">
                <img src="/icons/file-icons/txt-file.png" alt="file icon for text files"/> Budget Subtractor (txt File)
            </a>
        </li>
        <li>
            <a href="/files/python/SochiOlympicTimeclock.py">
                <img src="/icons/file-icons/python-file.png" alt="file icon for Python files"/> Sochi Olympics Time Converter (Console Program)
            </a>
        </li>
        <li>
            <a href="/files/python/SochiOlympicTimeclock.txt">
                <img src="/icons/file-icons/txt-file.png" alt="file icon for text files"/> Sochi Olympics Time Converter (txt File)
            </a>
       </li>
        <li>
            <a href="/files/python/PaintCostCalculator.py">
                <img src="/icons/file-icons/python-file.png" alt="file icon for Python files"/> Paint Cost Calculator (Console Program)
            </a>
        </li>
        <li>
            <a href="/files/python/PaintCostCalculator.txt">
                <img src="/icons/file-icons/txt-file.png" alt="file icon for text files"/> Paint Cost Calculator (txt File)
            </a>
        </li>
        <li>
            <a href="/files/python/BuildingInsuranceCalculator.py">
                <img src="/icons/file-icons/python-file.png" alt="file icon for Python files"/> Building Insurance Calculator (Console Program)
            </a>
        </li>
        <li>
            <a href="/files/python/BuildingInsuranceCalculator.txt">
                <img src="/icons/file-icons/txt-file.png" alt="file icon for text files"/> Building Insurance Calculator (txt File)
            </a>
        </li>
        <li>
            <a href="/files/python/BMICalculator.py">
                <img src="/icons/file-icons/python-file.png" alt="file icon for Python files"/> BMI (Body Mass Indicator) Calculator (Console Program)
            </a>
        </li>
        <li>
            <a href="/files/python/BMICalculator.txt">
                <img src="/icons/file-icons/txt-file.png" alt="file icon for text files"/> BMI (Body Mass Indicator) Calculator (txt File)
            </a>
        </li>
    </ul>
</div>
@stop