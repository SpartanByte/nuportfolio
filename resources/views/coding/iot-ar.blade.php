@extends('layouts.default')
@section('description', 'General information about programming and languages Java, PHP, Python, CSS, C#, JavaScript')
@section('title', 'IoT and AR')

@section('content')
<div class="static-content general-coding">
    <span class="page-header uppercase-shadow mid-size-font">Internet of Things & Augmented Reality</span><hr />

    <span class="section-header mid-size-font">Internet of Things (IoT)</span>
    <p><em>What is "IoT"?</em></p>

    <p>Internet of Things (IoT) can be loosely defined as a network connecting various devices and sensors for communication and the exchange of data. The best way to begin explaining what IoT is, in my opinion, is using smart devices that the average person is more familiar with. A great example is the Amazon Echo that can be used to utilize voice control to turn off lights, adjust thermostat temperatures, and other functions based on compatible devices through sensors. IoT devices are able to communicate with one another through the Internet with data such as the temperature of an engine in industrial machinery. There are many explanations on the Internet that attempt to explain a rather complex topic simply.</p>
    <p>As a snake owner, a personal project I considered was setting sensors to monitor and store the temperature and humidity on the hot and code sides of the terrarium. This data can use an “edge device” to push the data to Thingworx, for example. If the temperature is too hot, a warning can be flagged to turn off the basking lamp. This has very high productivity and accuracy benefits for industries such as manufacturing. Various machinery can have sensors attached for temperature, power usage, or voltage that can send warnings that repair or maintenance may be needed. </p>

    <p>IoT platform applications can store, manipulate and present this to a manager, factory worker, or other personnel in a clean user interface that is both productive and accurate. Using Thingworx as a platform example, data can be gathered through REST API and put into tables for display or any other functionality. An example would be is prioritizing manufacturing orders based on the availability of materials. Orders can be prioritized above others that may be waiting for parts or materials making the product lifecycle more efficient.</p>

    <p>Examples of IoT Platforms</p>
	<p>PTC's <a href="https://www.ptc.com/en/products/iot" title="Thingworx" target="_blank">Thingworx</a><br />
   		Amazon's <a href="https://aws.amazon.com/iot/" title="AWS IoT" target="_blank">AWS (Amazon Web Services) IoT</a><br />
  		Samsung's <a href="https://developer.artik.io/" title="Samsung Artik" target="_blank">Artik</a></p>
	<hr />

    <span class="section-header mid-size-font">Augmented Reality (AR)</span>
    <p><em>What is Augmented Reality?</em></p>
	<img class="coding-logo" src="/images/iot-ar/coffee-maker-ar.jpg">
    <p>Simply put, augmented reality is the overlay of virtual content into the real world. For example, an application that allows a user to select a coffee maker they may want to purchase. The user then selects a coffee maker which loads <a href="https://whatis.techtarget.com/definition/CAD-computer-aided-design" title="CAD Definition" target="_blank">CAD (computer-aided design)</a> data and other virtual content. After loading the coffee maker, called an AR Experience, the user can then adjust the scale by moving their mobile device so that the CAD model can sit on their counter as a physical coffee maker would. After tapping the CAD model to “lock” it in place, the user can then move around to view the coffee maker in completely 360 degrees. 3D buttons can be used for the user to purchase, view other coffee makers, or any other functionality that may be desired. AR is also becoming very popular in industries such as manufacturing and product service repair. A technician can scan a QR code to load a particular appliance so they may view animations for various repair processes such as removing an air compressor. </p>

	<img class="coding-logo" src="/images/logos/vuforia-logo.jpg" width="300">
	<hr />

    <span class="section-header mid-size-font">Resources and Software for IoT and AR</span>
    <p><a href="https://www.ptc.com/en/products/iot/thingworx-platform" title="PTC Thingworx" target="_blank">ThingWorx IoT Platform</a></p>
    <p><a href="https://www.ptc.com/en/products/augmented-reality/vuforia-studio" title="PTC Vuforia Studio" target="_blank">Vuforia Studio AR IDE Platform</a></p>
    <p><a href="https://play.google.com/store/apps/details?id=com.ptc.vuforiaview&hl=en_US" title="Vuforia View (Android)" target="_blank">Vuforia View (Google Play)</a></p>
    <p><a href="https://itunes.apple.com/us/app/vuforia-view/id1076700285?mt=8" title="Vuforia View (iPhone)" target="_blank">Vuforia View (iTunes App Store)</a></p>
    <p><a href="https://www.apple.com/ios/augmented-reality/" title="iOS Augmented Reality" target="_blank">What is Augmented Reality (AR for iOS article)</a></p>
    <p>Use Cases</p>
    <p><a href="https://www.ptc.com/-/media/Files/PDFs/Case-Studies/Case-Study_Colfax.pdf" title="PTC IoT Case Study" target="_blank">Cofax Case Study (PTC Site Document)</a></p>
    <p><a href="https://www.ptc.com/en/products/augmented-reality#case-studies" title="Augmented Reality Use Cases" target="_blank">Augmented Reality Use Cases</a></p>
   
</div>
<div class="bottom-spacer"></div>
@stop