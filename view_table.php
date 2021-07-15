<?php include 'header.php';?>


	   
<!doctype html>
<html>
<head>
<style>
h1{color:blue;text-align:top;}
.all{text-align:center;box-shadow:0px 0px 10px 0px;margin-left:200px;margin-right:200px;margin-top:100px;background-color:pink;}
body {background-color:#FFFFFF;}
label{text-align:left;color:blue;}
body{margin:0px;}
</style>
</head>
<body>
<div class="all">
<form role="form" method="post" action="mm.php">
<center>
<h2>View Table</h2>
<table>
<tr>
<th>
 Semester:
</th>
<th>
<input type="text" name="semester"required>
</th>
</tr>
</table>
<br>
</center>

<a href="ad.php"><input type="button" value="Back"></a>

<button name="submit" value="submit" >Submit</button>
<br><br>
</form>
</div>
</body>
</html>

<?php include 'footer.php'?>
