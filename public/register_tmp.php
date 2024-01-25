<h2>Registration Page</h2>
<a href='index.php' class='linkstyle' onclick="return loadAndReplaceContent('index.php', 'login')">Back</a>
<form id="registerForm" action="register.php" method="POST" onsubmit="return postFormAndReplaceContent('register.php', 'login', 'registerForm', 'regResponse')">
    Enter Username: <input type="text"
    name="username" required="required" /> <br/>
    Enter Password: <input type="password"
    name="password" required="required" /> <br/>
    <input type="submit" value="Register"/> <br/>
    <div id="regResponse"></div>
</form>