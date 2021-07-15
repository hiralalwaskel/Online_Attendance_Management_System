<?php include 'header.php';?>

<?php

session_start();



{ $adnm=$_SESSION["adnm"];
  $adbranch=$_SESSION["adbranch"];
  
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
	
echo 'Welcome    ' .$_SESSION["adnm"]; 
echo 'Your Branch is    ' .$_SESSION["adbranch"];
		
 ?>
<div class="all">


<form method="post"action="view_att.php">
<h1>View Attendance</h1>
<center>
<table>
<tr>
<th> Semester       :
</th>
<th>
<input type="text" name="semester" required>
</th>
</tr>
<tr>
<th> Start date:</th>
<th><input type="date" name="sdate" required></th>
</<tr>
<tr>
<th> End date          :</th>
<th><input type="date" name="edate" required></th>
</tr>

</table>

<a href="ad.php"><input type="button" value="Back"></a>
<input type="submit" name="submit" value="Submit">

</center>
</form>
<br>
</div>
</body>
</html>

<?php include 'footer.php'?>