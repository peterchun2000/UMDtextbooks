<?php
include './header.php';
?>

<form action="./selling.php?<?=$_GET['book']?>" method="post">

Condition: <select name="Wear" id="Wear" required>
<option value="New">New</option>
<option value="Good">Good</option>
<option value="Okay">Okay</option>
</select><br>
Price: <input type="number" name="Price" step=".01"required/><br>
Picture: <input type="file" name="pic" id="pic"><br>
Comments: <textarea name="com" id="com" cols="30" rows="10"></textarea>
<input type="submit" value="Sell Now!" name="submit"/>

</form>

<?php
require './connect.php';

if (isset($_POST['submit'])) { 
  $stmt = $conn->stmt_init();
  if (!isset($_POST['pic'])&&!isset($_POST['com'])){
    $stmt->prepare('INSERT INTO Inventory (Title,Price,Wear)
      VALUES(?,?,?)');
    $stmt->bind_param('sds', $_GET['book'], $_POST['Price'], $_POST['Wear']);
    $stmt->execute();
  }
  /*else if ((!isset($_POST['pic'])) {
    $stmt->prepare('INSERT INTO Inventory (Title,Price,Wear) VALUES(?,?,?)');
    $stmt->bind_param('sds', $_GET['book'], $_POST['Price'], $_POST['Wear']);
    $stmt->execute();
  } else {
    $stmt->prepare('INSERT INTO Inventory (Title,Price,Wear,(?),(?),(?))
    VALUES((?),$_POST[Wear]','$_POST[Price],(?),(?),(?)');
    $stmt->bind_param('sds', $_GET['book'], $_POST['Price'], $_POST['Wear']);
    $stmt->execute();
  }
}*/
header("Location: ./index.php");
}
include 'footer.php';
?>