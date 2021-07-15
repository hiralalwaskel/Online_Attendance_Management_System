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
if($_POST['submit'])
{	
        $name=$_POST['name'];
		$user_id=$_POST['user_id'];
		$password=$_POST['password'];
		
		
		
		
        $sql="insert into teacher_table (name ,user_id , password ) values ('$name','$user_id','$password')";

        if ($dbcon->query($sql) ===true)
			{ echo "<script>alert('Successfully Add Teacher ');</script>";
        echo "<span style='color:blue;'>Successfully Add Teacher</span>";
	   }else {echo "Error".$sql ."<br>" .$dbcon->error;}
	   
	   
}
  
?>