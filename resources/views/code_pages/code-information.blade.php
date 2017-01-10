    @extends('layouts.default')

    @section('content')
    <div class="static-content">

        {{-- Current CSS isn't showing anything above the following H1, will need to fix this  --}}
        <h1>Coding Index & Information</h1>
        <hr />

        <img src="https://dummyimage.com/450x300/000/fff" />
        <h3>PHP</h3>
            <p>PHP (Hypertext Preprocessor) is a server-side language that was specifically designed for web development in 1994 by Rasmus Lerdorf. While
                PHP  is often considered easier to learn as a first programming language, special consideration and best practices need to be followed
                to ensure security and proper implementation.</p>
            <p>One of the following examples is an application that I originally developed as a course project which involved listing course ID's, course title, the semester in which the course was taken, professor's name, and the grade received. The program demonstrated the ability to create, update, view and remove courses and fields in this list, which was displayed in HTML using a table. This is otherwise known as a <strong>CRUD</strong> application, which is an acronym for "<strong>C</strong>reate, <strong>R</strong>ead, <strong>U</strong>pdate, and <strong>D</strong>elete".</p>

        <hr />

        <img src="https://dummyimage.com/450x300/000/fff" />
        <h3>Subject Header 1</h3>
            <p>Subject Description1</p>

        <hr />

        <img src="https://dummyimage.com/450x300/000/fff" />
        <h3>Subject Header 1</h3>
            <p>Subject Description1</p>       
    </div>
@stop