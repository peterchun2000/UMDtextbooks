<!DOCTYPE html>
<html>
<body>

<?php
include './header.php';
require './connect.php';


$stmt = $conn->stmt_init();

$stmt -> prepare("SELECT * FROM Inventory Where Title in (?)");
$stmt -> bind_param("s",$_GET["book"]);
$stmt -> execute();
$result = $stmt -> get_result();

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "<br> Name: ". $row["title"]. " $" . $row["price"] . "<br>";
    }
} else {
    echo "0 results";
}

$conn->close();
?> 

</body>
</html>