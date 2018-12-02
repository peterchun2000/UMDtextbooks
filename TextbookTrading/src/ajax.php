<?php //2117
 
//Including Database configuration file.
 
$con = MySQLi_connect(	
 	
   "localhost", //Server host name.	
 	
   "root", //Database username.	
 	
   "", //Database password.	
 	
   "umdlocalhackday2"//Database name or anything you would like to call it.	
 	
);

//Getting value of "search" variable from "script.js".
 
if (isset($_POST['search'])) {
 
//Search box value assigning to $Name variable.
 
   $Name = $_POST['search'];
 
//Search query.
 
   $Query = "SELECT department, coursekey FROM courses WHERE department LIKE '%$Name%' OR coursekey LIKE '%$Name%' LIMIT 5";
 
//Query execution
 
   $ExecQuery = MySQLi_query($con, $Query);
 
//Creating unordered list to display result.
 
   echo '
 
<ul>
 
   ';
 
   //Fetching result from database.
 
   while ($Result = MySQLi_fetch_array($ExecQuery)) {
 
       ?>
 
   <!-- Creating unordered list items.
 
        Calling javascript function named as "fill" found in "script.js" file.
 
        By passing fetched result as parameter. -->
 
   <li style="float:right;clear:both;" onclick="hide()">
   <a href="./textbookList.php?class=<?=$Result['department'].$Result['coursekey']?>">
 
   <!-- Assigning searched result in "Search box" in "search.php" file. -->
 
       <?php echo $Result['department'].$Result['coursekey']; ?>
 
   </li></a>
 
   <!-- Below php code is just for closing parenthesis. Don't be confused. -->
 
   <?php
 
}}
 
 
?>
 
</ul>