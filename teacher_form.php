<?php include 'header.php';?>

<?php session_start(); ?>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "attendancedb";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 


if (isset ($_POST['submit']))
{ $uid=$_SESSION["username"];
  
}
?>




<!doctype html>
<html>
<head>
<style>
h1{color:blue;text-align:top;}
.all{text-align:center;margin-top:50px;}
body {background-color:#E2FFE2;}
label{text-align:left;color:blue;}
body{margin:0px;}
</style>
</head>
<body>
 

<div class="all">
<center>
<?php 
	
echo 'Welcome    ' .$_SESSION["nm"];
		
 ?></center>
<form method="post" action="mmm.php">
<center>
<table>
<tr>
<th>
Your Branch
</th>
<th>
<input type="text" name="branch" required>
</th>
</tr>
<br>
<br>
<tr>
<th>
Semester
</th>
<th>
<input type="text" name="semester" required>
</th>
</tr>
<br>
<br>
<tr>
<th>
Subjet Name
</th>
<th>
<input type="text" name="subject" required>
</th>
</tr>
</table>
<br>
</center>
<input type="submit" name="submit" >

</form>
</div>
</body>
</html>

<?php include 'footer.php'?>