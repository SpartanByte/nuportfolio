    @extends('layouts.default')
    @section('description', 'image toggling example using jQuery, JavaScript and Laravel')
    @section('title', 'JavaScript Tuition Calculator')

    @section('content')
    <script>
        function alertName() {
        var name = document.forms[0].nametext.value;
        if (name == "Brian") {
        alert("Welcome Brian");
        var onlineCredits = prompt("Please enter the number of online credits here: "); //Acquiring number of online credits.
        var onlineCost = onlineCredits * 180.0; //Calculating cost of online credits.
        alert("Your total for number of online credits is: $" + (onlineCost.toFixed(2))); //Showing online credits cost rounded.
        var campusCredits = prompt("Please enter the number of on campus credits here: "); //Acquiring number of on campus credits.
        var campusCost = campusCredits * 160.8; //Calculating cost of on campus credits
        alert("Your total for number of on campus credits is: $" + (campusCost.toFixed(2))); //Showing on campus credits cost rounded.
        var creditTotal = onlineCost + campusCost; //Calculating total cost of online and on campus credits.
        alert("Your total for number of online and on campus credits is: $" + (creditTotal.toFixed(2))); //Showing total credits cost rounded.
    }
    else {
        alert("Sorry, " + name + ", this program only works for Brian"); //Alert for invalid name entered.
    }
    return true;
    }
</script>


    <div class="static-content program-page">
    <form  id="myform" action="#" onsubmit="return alertName();" style="width:50%;">
    <h3>JavaScript Tuition Calculator</h3>
    <h4>Directions</h4>
    <p style="font-size:2rem;">Enter the username "Brian", then input the number of on campus and online courses (priced differently) and press "Enter" to view the total cost of tuition for the semester.</p>
    <p>Username: <input class="form-control" id="nametext" name="username" type="text" /></p>
    </form>

    <ul style="margin-bottom:27%;">
    <li><a href="/coding/javascript">Return to JavaScript</a></li>
    <li><a href="/">Return to Homepage</a></li>
    </ul>
        
    </div>
@stop