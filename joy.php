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
if (isset($_POST['submit']))
{	
                
		$username=$_POST['username'];
		$branch=$_POST['branch'];
		$userid=$_POST['userid'];
		$password=$_POST['password'];
		
		
		
        $sql="insert into hod (username , branch , userid , password) values ('$username','$branch','$userid','$password')";

        if ($dbcon->query($sql) ===true)
		        { echo "<script>alert('Successfull Create Youe Account ');</script>";
        echo "<span style='color:blue;'>Your Account is Successfull Created</span>";
	   }else {echo "Error".$sql ."<br>" .$dbcon->error;}
}	
//update hod
if (isset($_POST['update']))
{	
       $name=$_POST['name'];
		$user_id=$_POST['user_id'];
		$password=$_POST['password'];
		
		
		
		
        $sql="update hod set userid='$user_id' , password='$password' where username='$name' ";

        if ($dbcon->query($sql) ===true)
			{ echo "<script>alert('Successfully Update hod ');</script>";
        echo "<span style='color:blue;'>Successfully Update hod</span>";
	   }else {echo "Error".$sql ."<br>" .$dbcon->error;}
}
// code to delete hod
if (isset($_POST['delete']))
{	
       $user_id=$_POST['user_id'];
		
		
		
		
		$sql="DELETE FROM hod WHERE userid='$user_id'";

        if ($dbcon->query($sql) ===true)
			{ echo "<script>alert('Successfully Delete Hod ');</script>";
		echo "<span style='color:blue;'>Successfully Delete Hod</span>";
	   }else {echo "Error".$sql ."<br>" .$dbcon->error;}
}
   
  ?>