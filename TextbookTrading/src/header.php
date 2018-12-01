<?php
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<div id="header">
    <img id="logo" src="../res/img/logo.png" width=50px alt="Textbook Trading Logo">
    <span id="title"><?=$title?></span>
</div>
<form action="/youpage.php"> <input type="text" placeholder="Search.." name="search" class="search"> <button type="submit" class="search"><i class="fa fa-search"></i></button> </form>