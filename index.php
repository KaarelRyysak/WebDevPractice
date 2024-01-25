<!--
    Web Development Practice
    
    Written by Kaarel Ryysak
    Initially based on the following php tutorial by Kristian Guevera:
    https://www.codeproject.com/Articles/759094/Step-by-Step-PHP-Tutorials-for-Beginners-Creating
    
    Code has been updated based on official PHP documentation and some community contributors. 
    Some security improvements were also implemented to prevent code injection 
    and encourage good cybersecurity practices.

    Note that I hadn't practiced web development in over a year, 
    so throughout this excercise I revised everything from the ground up.
    This gave me a good knowledge basis for returning to web development,
    but it took some extra development time.

    Time estimation:
    Initial research, finding resources: 4hrs
    Creating simple login and registration forms: 3hrs
    Creating homepage and logging out: 1hr
    Refactoring code: 2hrs
    Creating responsive and appealing CSS: 1hr
    Implementing AJAX queries:3hr
    Extra task - Changing wordpress CSS:2hrs
    Total: 14hrs (+ 2hrs extra)

-->
<script type="text/javascript" src="./js/functions.js"></script>
<?php

//set login page template filename, this will be called within general template
$template = "./public/main_tmp.php";

//call a general template:
include "./public/header_footer_tmp.php";
?>