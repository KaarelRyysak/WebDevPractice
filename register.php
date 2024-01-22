<html>
    <head>
        <title>Basic PHP website with login</title>
    </head>
    <body>
        <h2>Registration Page</h2>
        <a href="index.php">Return</a><br/><br/>
        <form action="register.php" method="POST">
            Enter Username: <input type="text"
            name="username" required="required" /> <br/>
            Enter Password: <input type="password"
            name="password" required="required" /> <br/>
            <input type="submit" value="Register"/>
        </form>
    </body>
</html>

<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
    echo "Username entered is: ". $username . "<br />";
    echo "Password entered is: ". $password;

    $mysqli = new mysqli("localhost", "root", "") or die(mysqli_error($mysqli));
    $mysqli->select_db("db_one") or die("Cannot connect to database");
    $username = $mysqli->real_escape_string($_POST['username']);
    $password = $mysqli->real_escape_string($_POST['password']);

    $userDataValid = true;
    $query = "SELECT * FROM users";
    $result = $mysqli->query($query); // query for the users table
    while ($row = $result->fetch_array()) { // go through each row individually
        $table_user = $row['username'];
        
        if($username == $table_user)
        {
            $userDataValid = false;
            print '<script>alert("Username has been taken!");</script>'; // prompts user
            print '<script>window.location.assign("register.php");</script>'; // redirects
        }
    }
    
    if($userDataValid)
    {
        $stmt = $mysqli->prepare("INSERT INTO users (username, password)
        VALUES (?, ?)"); // prepares to insert values into table users
        $stmt->bind_param("ss", $username, $password); // binds values to statement (to avoid injection)
        $stmt->execute();
        print '<script>alert("Successfully Registered!");</script>'; // prompts user
        print '<script>window.location.assign("index.php");</script>'; // redirects
    }
}
?>