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
// code to update student
if ($_POST['update'])
{	
       $name=$_POST['name'];
		$user_id=$_POST['user_id'];
		$password=$_POST['password'];
		
		
		
		
        $sql="update teacher_table set user_id='$user_id' , password='$password' where name='$name' ";

        if ($dbcon->query($sql) ===true)
			{ echo "<script>alert('Successfully Update Teacher ');</script>";
        echo "<span style='color:blue;'>Successfully Update Teacher</span>";
	   }else {echo "Error".$sql ."<br>" .$dbcon->error;}
}
  
?>