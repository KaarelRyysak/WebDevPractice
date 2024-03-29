<?php
    session_start();
    $settings = include './config/config.php';
    //connect to database with info from config.php
    $mysqli = new mysqli($settings['hostname'], $settings['username'], $settings['password']) or die("Cannot connect to database, check settings.php");
    $mysqli->select_db($settings['database']) or die("Invalid database name, check settings.php");
    
    $username = $mysqli->real_escape_string($_POST["username"]);
    $password = $mysqli->real_escape_string($_POST["password"]);
    $bool = true;

    $mysqli->connect("localhost", "root", "") or die (mysqli_error($mysqli));
    $mysqli->select_db("db_one") or die("Cannot connect to database");
    $stmt = $mysqli->prepare("SELECT * FROM ".$settings['user_table']." WHERE username=?");
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();
    $exists = $result->num_rows > 0;
    $table_users = "";
    $table_password = "";
    $login_match = false;
    if ($exists) // If the username is in the database
    {
        while($row = mysqli_fetch_assoc($result))
        {
            $table_users = $row['username'];
            $table_password = $row['password'];

            if(($username == $table_users) && ($password == $table_password))
            {
                $_SESSION['user'] = $username;
                header("location: home.php");
                $login_match = true;
                break;
            }
        }
        if ($login_match == false)
        {
            echo 'Incorrect password!';
            header("HTTP/1.1 403 Forbidden"); // not the best way of doing things
            // Given more time, I might rework this so it would work nicely without javascript too
            exit;
        }
    }
    else
    {
        // Note: the current system is very susceptible to basic dictionary cracking, so
        // informing users whether their username/password is valid is not advised. 
        // This application does so strictly for demonstration and testing purposes.

        // A fully realized application should require some form of captcha
        // to prevent rapid password cracking attempts. The internet is unpredictable,
        // it is important to prepare for any and all types of actors.
        echo 'Incorrect username!';
        header("HTTP/1.1 403 Forbidden");
        exit;
    }