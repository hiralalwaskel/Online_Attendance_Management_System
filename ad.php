
<?php include 'header.php';?>
<?php

session_start();



if (isset ($_POST['submit']))
{ $adnm=$_SESSION["adnm"];
$adbranch=$_SESSION["adbranch"];
  
}
?>

<!doctype html>
<html>
<head>
<style>
.all{text-align:center;}
body {background-color:#E2FFE2;}
th{padding:80px;padding-top:0px;padding-bottom:20px;font-size:20px;}
p{margin-top:30px;}
.ima{background-image:url(as.jpg);
}
.tab{
box-shadow:2px 0px 5px 0px;margin-left:30px;margin-right:40px;color:gray;
}
i{text-align:center; font-size:20px;}
body{margin:0px;}
</style>
</head>
<body class="ima">
<p>
<?php 
	
echo 'Welcome    ' .$_SESSION["adnm"]; 
echo 'Your Branch is    ' .$_SESSION["adbranch"];	
 ?>       
</p>
<div class="all">
<table align="center" class="tab">
<b><i>Workink of Hod</i></b>
<tr>
<th>Student</th>
<th>Teacher</th>
<th>Lecture Table</th>
<th>Student Attendance</th>
</tr>
<tr>
<td>
    
<a href="student_add.php">Add</a>
  <a href="student_update.php">Update</a>
<a href="student_delete.php">Delete</a> 
<a href="stu.php">View</a> 
    
</td>
<td>
<a href="create_teacher.php">Add</a>
<a href="update_teacher.php">Update</a>
<a href="delete_teacher.php">Delete</a>
<a href="teacher_list.php">View List</a>
</td>
<td>
<a href="le_t.php">Add</a>
<a href="le_t.php">Update</a>
<a href="view_table.php">View Table</a>
</td>
<td>
<a href="view_attendance.php">View</a>
<a href="delete_attendance.php">Delete</a>
</td>
</tr>
</table>
</div>
</body>
</html>
<?php include 'footer.php';?>