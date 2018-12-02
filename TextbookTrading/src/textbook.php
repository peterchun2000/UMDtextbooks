<?php
include './header.php';
require './connect.php';

$stmt = $conn->stmt_init();
$stmt->prepare("SELECT * FROM Textbook WHERE Title IN (?)");
$stmt->bind_param('s', $_GET['book']);
$stmt->execute();
$result = $stmt->get_result();
$stmt->close();
$r = $result->fetch_assoc();
$stmt = $conn->stmt_init();
$stmt->prepare("SELECT * FROM Courses WHERE course={$r['course']}");
$stmt->execute();
$result = $stmt->get_result();
$stmt->close();
$rr = $result->fetch_assoc();
$conn->close();
?>
<div>
<img height=150px src="./getPic.php?book=<?=$r['picture']?>" alt="No picture found">
<h5 style='display:inline;'><?=$r['Title'].' by '.$r['Author']?></h5>
<h6>Class: <?=$rr['Department'].$rr['CourseKey']?></h6>
</div>
<a href="./buying.php?book=<?=$r['Title']?>">Buy here</a>
<a href="./selling.php?book=<?=$r['Title']?>">Sell here</a>
<?php
include './footer.php';
?>