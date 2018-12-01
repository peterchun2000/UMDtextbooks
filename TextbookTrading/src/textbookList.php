<?php
include './header.php';
require './connect.php';

$stmt = $conn->stmt_init();
$stmt->prepare("SELECT course FROM Courses WHERE Department IN (?) AND CourseKey IN (?)");
$class = $_GET['class'];
$dep = substr($class, 0, 4);
$ck = substr($class, 4);
$stmt->bind_param('ss', $dep, $ck);
$stmt->execute();
$result = $stmt->get_result();
$stmt = $conn->stmt_init();
$stmt->prepare("SELECT Title FROM Textbook WHERE course IN (?)");
$stmt->bind_param('s', $result->fetch_assoc()['course']);
$stmt->execute();
$result = $stmt->get_result();
$stmt->close();
$conn->close();
echo "<ul>";
while($r=$result->fetch_assoc()['Title']) {
    echo "<li><a href='./textbook.php?book=$r'>$r</a></li>";
}

include './footer.php';
