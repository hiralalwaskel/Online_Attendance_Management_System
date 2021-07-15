<?php include 'header.php'?>
<?php

session_start();



if (isset ($_POST['submit']))
{
   $dbum=$_SESSION['nm'];
         $dbrollno= $_SESSION['srollno'];
}
?>


<!doctype html>
<html>
<head>
<style>
.all{text-align:center;box-shadow:0px 0px 10px 0px;margin-left:100px;margin-right:100px;margin-top:100px;background-color:pink;}
body {background-color:#FFFFFF;}
th{padding:130px;padding-top:0px;padding-bottom:20px;font-size:20px;}
body{margin:0px;}
</style>
</head>
<body>
<?php 
	
echo 'Welcome    ' .$_SESSION["nm"];
echo 'Your Rollno is    ' .$_SESSION["rm"];
		  
 ?>
<div class="all">
<form method="post"action="student_att.php">
<h1>View Attendance</h1>
<center>
<table>

<tr>
<th> Enter Start Date</th>
<th><input type="date" name="sdate" required></th>
</<tr>
<tr>
<th> Enter End Date</th>
<th><input type="date" name="edate" required></th>
</tr>

</table>
<input type="submit" name="submit" value="Submit">

</center>
</form>
<br>
</div>
</body>
</html>
<?php include 'footer.php'?>