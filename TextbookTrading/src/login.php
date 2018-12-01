<?php
require './header.php';
?>
<div style="width:50%;float:left;">
<h2>Enter Username and Password</h2>
      <div class = "container form-signin">

<?php
$msg = '';

if (isset($_POST['login']) && !empty($_POST['email'])
    && !empty($_POST['current-password'])) {
        $user = $_POST['email'];
        $password = $_POST['current-password'];
        require './connect.php';
        $sql = $conn->stmt_init();
        $sql->prepare("SELECT email FROM person WHERE email IN (?)");
        $sql->bind_param('s', $user);
        $sql->execute();
        $accounts = $sql->get_result();
        if ($accounts!=NULL) {
            if ($accounts->num_rows > 0) {
                if ($user == $accounts->fetch_assoc()['email']) {
                    $sql = $conn->stmt_init();
                    $sql->prepare("SELECT PassW FROM person WHERE email IN (?)");
                    $sql->bind_param('s', $user);
                    $sql->execute();
                    $pass = $sql->get_result();
                    if ($pass != NULL) {
                        if ($pass->num_rows > 0) {
                            if (password_verify($password, $pass->fetch_assoc()['PassW'])) {
                                setcookie("loggedIn", 1, 0,'/');
                                $conn->close();
                                header("Location: ./index.php");
                                exit;
                            }
                        }
                    }
                }
            }
        }
        $msg = "Incorrect email or password";
} else if (isset($_POST['register']) && !empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['pass'])) {
    require './connect.php';
    $stmt = $conn->stmt_init();
    $stmt->prepare('SELECT email FROM person WHERE email=?');
    $stmt->bind_param('s', $_POST['email']);
    $stmt->execute();
    $results = $stmt->get_result();
    if ($results!=NULL)
    {
        if ($results->num_rows==0)
        {
            $stmt = $conn->stmt_init();
            $stmt->prepare('INSERT INTO person (UserName, PassW,
                email) VALUES(? ,?, ?)');
            $pass = password_hash($_POST['pass'], PASSWORD_BCRYPT);
            $stmt->bind_param("sss", $_POST['name'],
                $pass, $_POST['email']);
            $stmt->execute();
            
            setcookie("loggedIn", 1, 0,'/');
            header('Location: ./index.php');
        }
        else {
            $msg ='There is already an account associated with that email.';
        }
    }
}
?>
      </div> <!-- /container -->

      <div class = "container">

         <form class = "form-signin" role = "form"
            action = "<?php echo htmlspecialchars($_SERVER['PHP_SELF']);
?>" method = "post">
            <h4 class = "form-signin-heading"><?=$msg?></h4>
            <input type = "email" class = "form-control"
               name = "email" placeholder = "Email:"
               required autofocus><br>
            <input type = "password" class = "form-control"
               name = "current-password" placeholder = "Password:" required><br>
            <button class = "btn btn-lg btn-primary btn-block" type = "submit"
               name = "login">Login</button>
         </form>
      </div>
</div>
<div style='width:50%; float:right;'>
    <h2>Register New Account</h2>
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post">
        <label for="email">Email: </label><input type="email" name= "email" id="email" required><br>
        <label for="name">Name: </label><input type="text" name="name" id="name" required><br>
        <label for="pass">Password: </label><input type="password" name="pass" id="pass" required><br>
        <input type="submit" value="Register" name="register" id="register">
    </form>
</div>
<?php
require './footer.php';
?>