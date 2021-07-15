<?php
$dbcon=mysqli_connect("localhost","root","","attendancedb");

if (mysqli_connect_errno())
{
echo "Failed to connect to mysql:".mysqli_connect_error();
}
//else
//{echo "hiiii";}
?>

<?php    
if ($_POST['submit'])
{	
		$username=$_POST['username'];
		$branch=$_POST['branch'];
		$userid=$_POST['userid'];
		$password=$_POST['password'];
		
		
		
        $sql="insert into student_table (username , branch , userid , password) values ('[$name]','[$branch]','[$userid]','[$password]')";

        if ($dbcon->query($sql) ===true)
		{echo "good";
        
	   }else {echo "Error".$sql ."<br>" .$dbcon->error;}
}	 
  ?>		


<!doctype html>
<html>
<head>
<style>
h1{color:blue;text-align:top;}
.all{text-align:center;box-shadow:0px 0px 10px 0px;margin-left:400px;margin-right:400px;margin-top:100px;background-color:pink;}
body {background-color:#E2FFE2;}

</style>
</head>
<body>
<div class="all">
<h1>Create account..</h1>
<form role="form" method="post" action="new_account.php">
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
<input type="text" name="password" required>
</th>
</tr>
</table>
<br>
</center>
<input type="submit" name="submit" value="submit">
</form>
</div>
</body>
</html>