<?php

require './connect.php';

$stmt = $conn->stmt_init();
$stmt->prepare('SELECT picture, pictureType FROM textbook WHERE title in (?)');
$stmt->bind_param('s', $_GET['book']);
$stmt->execute();
$result = $stmt->get_result();
$row = $result->fetch_assoc();
$conn->close();
if ($row['picture']) {
    header("Content-type: {$row['pictureType']}");
    echo $row['picture'];
}
else {
    header("Content-type: image/PNG");
    require '../res/img/book.png';
}