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
<h2>Delete Hod </h2>
Id:
<input type="text" name="user_id"required>
<button type="Delete" name="delete" value="Delete">Delete </button>
</form>
<br>
</div>
</body>
</html>

<?php include 'footer.php'?>