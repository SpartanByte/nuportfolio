/**
 * ==== JAVASCRIPT FOR ANY FUNCTIONALITY IN CSS EXAMPLE PAGES
 * ==== This .js file only loads on 'coding/css'
 */



/**
 * [slideDelay description: creates toggle functionality for CSS/JS example @ 'coding/css' ]
 * @return {[type]} [description]
 */
    function slideDelay()
    {
        var allClasses = document.getElementById("delay-img").classList;

        if(allClasses.contains("slideInRight"))
        {
            allClasses.remove("slideInRight");
        } else {
            allClasses.add("animated", "infinite", "slideInRight");
        }
    }