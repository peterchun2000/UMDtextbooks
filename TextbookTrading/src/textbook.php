<?php
require './connect.php';

$stmt = $conn->stmt_init();
$stmt->prepare("SELECT * FROM Textbook WHERE Title IN (?)");
$stmt->bind_param('s', $_GET['book']);
$stmt->execute();
$result = $stmt->get_result();
$stmt->close();
$conn->close();
$r = $result->fetch_assoc();
?>

<img height=20% src="./getPic.php?pic=<?=$r['picture']?>" alt="No picture found">

<?php
include './footer.php';
?>