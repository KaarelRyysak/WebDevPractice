<html>
    <head>
        <title>Basic PHP website with login</title>
    </head>
    <body>
        <h2>Login Page</h2>
        <a href="index.php">Return</a><br/><br/>
        <form action="checklogin.php" method="POST">
            Enter Username: <input type="text"
            name="username" required="required" /> <br/>
            Enter Password: <input type="text"
            name="password" required="required" /> <br/>
            <input type="submit" value="Login"/>
        </form>
    </body>
</html>