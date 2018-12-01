<?php
require './header.php';
?>
<div style="width:50%;float:left;">
<h2>Enter Username and Password</h2>
      <div class = "container form-signin">

<?php
$msg = '';

if (isset($_POST['login']) && !empty($_POST['username'])
    && !empty($_POST['password'])) {

    if ($_POST['username'] == 'test' &&
        $_POST['password'] == 'test') {
        $_SESSION['loggedIn'] = true;
        setcookie("loggedIn", 1, 0,'/');
        header('Location: ./index.php');
    } else {
        $msg = 'Wrong username or password';
    }
} else if (isset($_POST['register']) && !empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['password'])) {
    
}
?>
      </div> <!-- /container -->

      <div class = "container">

         <form class = "form-signin" role = "form"
            action = "<?php echo htmlspecialchars($_SERVER['PHP_SELF']);
?>" method = "post">
            <h4 class = "form-signin-heading"><?=$msg?></h4>
            <input type = "text" class = "form-control"
               name = "username" placeholder = "username = tutorialspoint"
               required autofocus><br>
            <input type = "password" class = "form-control"
               name = "password" placeholder = "password = 1234" required><br>
            <button class = "btn btn-lg btn-primary btn-block" type = "submit"
               name = "login">Login</button>
         </form>
      </div>
</div>
<div style='width:50%; float:right;'>
    <h2>Register New Account</h2>
    <form action="./register.php" method="post">
        <input type="email" name= "email" id="email" placeholder="Email:" required><br>
        <input type="text" name="name" id="name" placeholder="Name:" required><br>
        <input type="password" name="pass" id="pass" placeholder="Password:" required><br>
        <input type="submit" value="register" name="register" id="register">
    </form>
</div>
<?php
require './footer.php';
?>