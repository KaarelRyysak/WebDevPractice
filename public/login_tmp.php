<h2>Login Page</h2>
<a href='index.php' class='linkstyle' onclick="return loadAndReplaceContent('index.php', 'login')">Back</a>
<form id="loginForm" action="checklogin.php" method="POST" onsubmit="return postFormAndReplaceContent('checklogin.php', 'login', 'loginForm', 'loginResponse')">
    Enter Username: <input type="text"
    name="username" required="required" /> <br/>
    Enter Password: <input type="password"
    name="password" required="required" /> <br/>
    <input type="submit" value="Login"/> <br/>
    <div id="loginResponse"></div>
</form>