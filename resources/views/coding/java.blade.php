@extends('layouts.default')
@section('description', 'General information about server-side programming lanuage Java and libraries such as Swing')
@section('title', 'Java Information')

@section('content')
<div class="static-content general-coding" >
    <span class="page-header uppercase-shadow mid-size-font">Java</span><hr />
    
    <img class="coding-logo" src="/images/logos/java-blue-block.png">
    <span class="section-header mid-size-font">Java</span>

    <p>Java is a server-side programming language that is "platform independent". This means that it can be used in Windows, Macintosh OS, and Linux. It offers portability and where Java doesn't completely
    compile the source code, it compiles it into bytecode which can be moved into different operating systems as needed. Once doing so, the "Java virtual machine" (commonly referred to as JVM) then interprates and translates the code for that environment. Java is strictly an object oriented language, which has become extremely common as the need for resuable code, flexibility, and tougher security continues to grow.</p>

    <h4>Java's Platforms</h4>
    <p>Java has serveral platforms that developers and programmers use, depending on the situation</p>
	<ul>
		<li><strong>Java SE : (Java Standard Edition)</strong> for simpler, standalone applications; most commonly small desktop applications implementing the Java API</li>
		<li><strong>Java EE: (Java Enterprise Edition)</strong> for server-side components and capabilities for interaction with web-based technologies such as web browsers and desktop web applications</li>
		<li><strong>Java ME: (Java MicroEdition)</strong> for mobile applications to be used on smartphones, tablets, ipads, and so forth. This includes Android and any mobile apps.</li>
	</ul>
	<p>Java likely has more programming critics than most languages. It's a strongly typed language,  requiring specificity, so many see it as quite bloated with too many nuances than other languages such as PHP for web applications and C# which is used mostly in desktop applications. While Java had taken quite a dip in popularity for being used in web applications, it has seen an increase in use for this purpose since 2016. A common perceived reason is that Java application development takes longer to complete than other platforms such as PHP or even Ruby on Rails. Some web applications had been built on another language and then migrated to Java to increase scalability, such as Twitter which was originally built on Ruby/Rails.</p>

    <p>Although Object Oriented PHP is becoming much more popular than the use of it for procedural programming, following are examples of drastic differences between PHP and Java:</p>
    <p>Simple PHP (Procedural) "Hello World" Display (excluding opening/closing PHP tags)</p>
    <div class="code-wrapper"><code>echo "Hello World"; </code></div><br />

    <p>Java fully, and as a requirement, implements Object Orientation Programming. In addition to the code below, any needed Java modules such as <code>System</code> need to be included at the beginning of each file.</p>
    <div class="code-wrapper">
        <code>
            public class HelloWorld{</code><br />
            <code style="margin-left:1%;">public static main(String[] args){</code><br />
            <code style="margin-left:2%;"> System.out.println("Hello World");</code><br />
            <code style="margin-left:1%;">}</code><br />
            <code>}</code>
    </div><br />
    <p><strong>Java Applet examples coming soon</strong></p>
{{--     <p><a href="#">Choose An Applet You Made And Liked</a></p>
    <p><a href="#">Java Example 2</a></p>
    <p><a href="#">Java Example 3</a></p><hr /> --}}
</div>
@stop