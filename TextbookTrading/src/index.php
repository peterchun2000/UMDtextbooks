<?php

require './header.php';

require './footer.php';
?>
<!DOCTYPE html>
 
 <html>
  
  
  
 <head>
  
    <title>Live Search using AJAX</title>
  
    <!-- Including jQuery is required. -->
  
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
  
    <!-- Including our scripting file. -->
  
    <script type="text/javascript" src="../res/js/script.js"></script>
  
    <!-- Including CSS file. -->
  
    <link rel="stylesheet" type="text/css" href="../res/style/style.css">
  
 </head>
  
  
  
 <body>
  
 <!-- Search box. -->
  
    <input type="text" id="search" placeholder="Search" />
  
    <br>
  
    <b>Ex: </b><i>Math140, engl101, first edition</i>
  
    <br />
  
    <!-- Suggestions will be displayed in below div. -->
  
    <div id="display"></div>
  
  
  
 </body>
  
  
  
 </html>