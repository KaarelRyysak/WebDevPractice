<h2>Login Page</h2>
<a class=linkstyle onclick="loadAndReplaceContent('index.php', 'login')">Back</a>
<form action="checklogin.php" method="POST">
    Enter Username: <input type="text"
    name="username" required="required" /> <br/>
    Enter Password: <input type="password"
    name="password" required="required" /> <br/>
    <input type="submit" value="Login"/>
</form>