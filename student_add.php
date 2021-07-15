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
h1{color:blue;text-align:top;}
.all{text-align:center;box-shadow:0px 0px 10px 0px;margin-left:200px;margin-right:200px;margin-top:100px;background-color:pink;}
body {background-color:#FFFFFF; }
label{text-align:left;color:blue;}
body{margin:0px;}
</style>
</head>
<body>

<div class="all">
<form role="form" method="POST" action="student_a.php">
<center>
<h2>Student create account</h2>
<table>
<tr>
<th>
 Rollno:
</th>
<th>
<input type="text" name="rollno"required>
</th>
</tr>
<tr>
<th>
Name:
</th>
<th>
<input type="text" name="name"required>
</th>
</tr>
<tr>
<th>
Branch:
</th>
<th>
<input type="text" name="branch" value="<?php echo $adbranch?>"  readonly>
</th>
</tr>
<tr>
<th>
Semester:
</th>
<th>
<input type="text" name="semester"required>
</th>
</tr>
<tr>
<th>
Password:
</th>
<th>
<input type="password" name="password"required>
</th>
</tr>
</table>
<br>
</center>
<a href="ad.php"><input type="button" value="Back"></a>     
<button  name="submit" value="sumit">Submit </button>
<br><br>
</form>
</div>
</body>
</html>

<?php include 'footer.php';?>