<?php include 'header.php';?>
<!doctype html>
<html>
<head>
<style>
h1{color:blue;text-align:top;}
.all{text-align:center;box-shadow:0px 0px 10px 0px;margin-left:200px;margin-right:200px;margin-top:100px;background-color:pink;}
body {background-color:#FFFFFF; }
body{margin:0px;}
</style>
</head>
<body>
<div class="all">
<h1>Hod Create account</h1>
<form role="form" method="post" action="joy.php">
<center>
<table>
<tr>
<th>
Your Name
</th>
<th>
<input type="text" name="username" required>
</th>
</tr>
<tr>
<th>
Branch
</th>
<th>
<input type="text" name="branch" required>
</th>
</tr>
<tr>
<th>
User ID
</th>
<th>
<input type="text" name="userid" required>
</th>
</tr>
<tr>
<th>
Password
</th>
<th>
<input type="password" name="password" required>
</th>
</tr>
</table>
<br>
</center>
<button type="submit" name="submit" value="submit">submit</button>
</form>
<br>
</div>
</body>
</html>
<?php include 'footer.php'?>