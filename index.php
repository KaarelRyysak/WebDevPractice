<!--
    Web Development Practice
    
    Written by Kaarel Ryysak
    Based on the following php tutorial by Kristian Guevera:
    https://www.codeproject.com/Articles/759094/Step-by-Step-PHP-Tutorials-for-Beginners-Creating
    
    Code has been updated based on official PHP documentation and some community contributors. 
    Some security improvements were also implemented to prevent code injection 
    and encourage good cybersecurity practices.
-->
<html> 
    <head>
        <title>Basic PHP website with login</title>
    </head>
    <body>
        <h2>Main Page</h2>
        <?php
            echo "<p>Welcome to the website!</p>";
        ?>
        <a href="login.php"> Log In <br/>
        <a href="register.php"> Register
    </body>
</html>