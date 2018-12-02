<?php
    include './header.php';
?>

<!DOCTYPE html>
<html>
<body>

$stmt = $conn->stmt_init();
$stmt->prepare('SELECT DISTINCT Department FROM Courses');
$stmt->execute();

