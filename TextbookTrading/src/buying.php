<!DOCTYPE html>
<html>
<body>

<?php
include './header.php';
require './connect.php';


$stmt = $conn->stmt_init();

$stmt -> prepare("SELECT * FROM Inventory WHERE Title IN (?)");
$stmt -> bind_param("s",$_GET["book"]);
$stmt -> execute();
$result = $stmt -> get_result();

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "<br> Name: ". $row["Title"]. " $" . $row["Price"] . "<a href='messaging.php'><button>Message Seller</button></a>" ;
    }
} else {
    echo "0 results";
}

$conn->close();
?> 

</body>
</html>