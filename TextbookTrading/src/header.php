<?php
session_start();
if (!isset($_COOKIE['loggedIn'])) {
    setcookie('loggedIn', 0, 0, '/');
}

$title = "Textbook Trading Website";
?>
<!DOCTYPE html>
<html>
<h1 class="elegantshadow">Textbook Trading Website</h1>
<h1 class="deepshadow">Deep Shadow</h1>
<h1 class="insetshadow">Inset Shadow</h1>
<h1 class="retroshadow">Retro Shadow</h1>
<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>CSS3 text-shadow effects</title>
  
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">

  
      <style>
      /* NOTE: The styles were added inline because Prefixfree needs access to your styles and they must be inlined if they are on local disk! */
      h1 {
  font-family: "Avant Garde", Avantgarde, "Century Gothic", CenturyGothic, "AppleGothic", sans-serif;
  font-size: 92px;
  padding: 80px 50px;
  text-align: center;
  text-transform: uppercase;
  text-rendering: optimizeLegibility;
}
h1.elegantshadow {
  color: #131313;
  background-color: #e7e5e4;
  letter-spacing: 0.15em;
  text-shadow: 1px -1px 0 #767676, -1px 2px 1px #737272, -2px 4px 1px #767474, -3px 6px 1px #787777, -4px 8px 1px #7b7a7a, -5px 10px 1px #7f7d7d, -6px 12px 1px #828181, -7px 14px 1px #868585, -8px 16px 1px #8b8a89, -9px 18px 1px #8f8e8d, -10px 20px 1px #949392, -11px 22px 1px #999897, -12px 24px 1px #9e9c9c, -13px 26px 1px #a3a1a1, -14px 28px 1px #a8a6a6, -15px 30px 1px #adabab, -16px 32px 1px #b2b1b0, -17px 34px 1px #b7b6b5, -18px 36px 1px #bcbbba, -19px 38px 1px #c1bfbf, -20px 40px 1px #c6c4c4, -21px 42px 1px #cbc9c8, -22px 44px 1px #cfcdcd, -23px 46px 1px #d4d2d1, -24px 48px 1px #d8d6d5, -25px 50px 1px #dbdad9, -26px 52px 1px #dfdddc, -27px 54px 1px #e2e0df, -28px 56px 1px #e4e3e2;
}
h1.deepshadow {
  color: #e0dfdc;
  background-color: #333;
  letter-spacing: 0.1em;
  text-shadow: 0 -1px 0 #fff, 0 1px 0 #2e2e2e, 0 2px 0 #2c2c2c, 0 3px 0 #2a2a2a, 0 4px 0 #282828, 0 5px 0 #262626, 0 6px 0 #242424, 0 7px 0 #222, 0 8px 0 #202020, 0 9px 0 #1e1e1e, 0 10px 0 #1c1c1c, 0 11px 0 #1a1a1a, 0 12px 0 #181818, 0 13px 0 #161616, 0 14px 0 #141414, 0 15px 0 #121212, 0 22px 30px rgba(0, 0, 0, 0.9);
}
h1.insetshadow {
  color: #202020;
  background-color: #2d2d2d;
  letter-spacing: 0.1em;
  text-shadow: -1px -1px 1px #111, 2px 2px 1px #363636;
}
h1.retroshadow {
  color: #2c2c2c;
  background-color: #d5d5d5;
  letter-spacing: 0.05em;
  text-shadow: 4px 4px 0px #d5d5d5, 7px 7px 0px rgba(0, 0, 0, 0.2);
}

    </style>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script>

</head>

<body>

  <h1 class='elegantshadow'>Elegant Shadow</h1>
<h1 class='deepshadow'>Deep Shadow</h1>
<h1 class='insetshadow'>Inset Shadow</h1>
<h1 class='retroshadow'>Retro Shadow</h1>
  
  

</body>

</html>

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



