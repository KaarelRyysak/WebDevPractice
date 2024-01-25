<?php
session_start();
if (!$_SESSION['user']) { // if not logged in
    //header("location: index.php");
    loadAndReplaceContent("index.php", "login"); // redirect
}
$user = $_SESSION['user']; // assigns user value

//set page template filename, this will be called within general template
$template = "./public/home_tmp.php";

//call a general template:
include "./public/header_footer_tmp.php";
?>