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
// code to delete teacher
if ($_POST['delete'])
{	
       $user_id=$_POST['user_id'];
		
		
		
		
		$sql="DELETE FROM teacher_table WHERE user_id='$user_id'";

        if ($dbcon->query($sql) ===true)
			{ echo "<script>alert('Successfully Delete Teacher ');</script>";
		echo "<span style='color:blue;'>Successfully Delete Teacher</span>";
	   }else {echo "Error".$sql ."<br>" .$dbcon->error;}
}
  
  
?>