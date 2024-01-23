<html>
    <head>
        <title>Basic PHP website with login</title>
    </head>
    <?php
    session_start();
    if (!$_SESSION['user']) { // if not logged in
        header("location: index.php"); // redirect
    }
    $user = $_SESSION['user']; // assigns user value
    ?>
    <body>
        <h2>Home Page</h2>
        <p>Hello <?php print "$user"?>!</p> <!--"Hello, <user>!"-->
        <a href="logout.php">Log out</a><br/><br/>
    </body>
</html>