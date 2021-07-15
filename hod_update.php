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
<form role="form" method="post" action="joy.php">
<center>
<h2>Update Hod</h2>
<table>
<tr>
<th>
 Your Name:
</th>
<th>
<input type="text" name="name" required>
</th>
</tr>
<tr>
<th>
User Id:
</th>
<th>
<input type="text" name="user_id" required>
</th>
</tr>
<tr>
<th>
Password:
</th>
<th>
<input type="password" name="password" required>
</th>
</tr>
</table>
<br>
</center>

<button type="update" name="update" value="update">update </button>
<br><br>
</form>
</div>
</body>
</html>

<?php include 'footer.php'?>