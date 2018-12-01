<?php
session_start();
if (!isset($_COOKIE['loggedIn'])) {
    setcookie('loggedIn', 0, 0, '/');
}
$title = "Textbook Trading Website";
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?=$title?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="../res/style/style.css"/>
    
</head>
<body>
<div id="header">
    <img id="logo" src="../res/img/logo.png" width=49   px alt="Textbook Trading Logo">
    <?php if ($_COOKIE['loggedIn']) {?>
        <a class="logout" href="messaging.php">Messages </a>
        <a class="logout" href="logout.php">Logout</a>
    <?php } else {?>
        <a id="login" href="login.php">Login/Register</a>
    <?php }?>
    <div id="title"><a href="./index.php"><h1><?=$title?></h1></a></div>
    <div>
        <table>
            <tr>
                <th><a href="./index.php">Home</a></th>
                <th><a href="./departments.php">Departments</a></th>
                <th><a href="./about.php">About Us</a></th>
                <th><a href="./contact.php">Contact Us</a></th>
            </tr>
        </table>
        <?php if ($_COOKIE['loggedIn']) {?>
        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>

        <!-- Including our scripting file. -->

        <script type="text/javascript" src="../res/js/script.js"></script>  
  
         <!-- Search box. -->
  
        <input type="text" id="search" placeholder="Search" />
        <br>

        </div>
        <!-- Suggestions will be displayed in below div. -->

        <div id="display"></div>
        <?php }?>
</div>



