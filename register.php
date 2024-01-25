<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $settings = include './config/config.php';

    //connect to database with info from config.php
    $mysqli = new mysqli($settings['hostname'], $settings['username'], $settings['password']) or die("Cannot connect to database, check settings.php");
    $mysqli->select_db($settings['database']) or die("Invalid database name, check settings.php");

    $username = $mysqli->real_escape_string($_POST['username']);
    $password = $mysqli->real_escape_string($_POST['password']);

    $userDataValid = true;
    $query = "SELECT * FROM ".$settings['user_table'];
    $result = $mysqli->query($query); // query for the users table
    while ($row = $result->fetch_array()) { // go through each row individually
        $table_user = $row['username'];
        
        if($username == $table_user)
        {
            $userDataValid = false;
            echo 'Username has been taken!'; // Note: this is insecure, bad actors can just try every username until one works
            header("HTTP/1.1 403 Forbidden"); // not the best way of doing things
            // Given more time, I might rework this so it would work nicely without javascript too
            exit;
        }
    }
    
    if($userDataValid)
    {
        $stmt = $mysqli->prepare("INSERT INTO ".$settings['user_table']." (username, password)
        VALUES (?, ?)"); // prepares to insert values into table users
        $stmt->bind_param("ss", $username, $password); // binds values to statement (to avoid injection)
        $stmt->execute();
        header("location: login.php"); // redirect
    }
}
//set page template filename, this will be called within general template
$template = "./public/register_tmp.php";

//call a general template:
include "./public/header_footer_tmp.php";
?>