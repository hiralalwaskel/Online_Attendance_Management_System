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
       
		$subject=$_POST['subject'];
		$teacher=$_POST['teacher'];
		$user_id=$_POST['user_id'];
		$day=$_POST['day'];
		$lecture=$_POST['lecture'];
		$branch=$_POST['branch'];
		$semester=$_POST['semester'];
		
		
		
		
		
        $sql="insert into lecture_table (subject , teacher , user_id ,day , lecture , branch , semester) values ('$subject','$teacher','$user_id','$day','$lecture','$branch','$semester')";

        if ($dbcon->query($sql) ===true)
			{ echo "<script>alert('Successfully Add Lecture ');</script>";
         echo "<span style='color:blue;'>Lecture is Successfull Add</span>";
	   }else {echo "Error".$sql ."<br>" .$dbcon->error;}
}
	   //update


if(isset($_POST['update']))
{
    
			$subject=$_POST['subject'];
		$teacher=$_POST['teacher'];
		$day=$_POST['day'];
		$lecture=$_POST['lecture'];
		$branch=$_POST['branch'];
		$semester=$_POST['semester'];
	
	
       $sql="UPDATE lecture_table SET subject , teacher ,day , lecture , branch , semester where values ('$subject','$teacher','$day','$lecture','$branch','$semester')";
       
             if ($dbcon->query($sql) ===true)
{ echo "<script>alert('Successfully Update Lecture ');</script>";
	   }else {echo "Error".$sql ."<br>" .$dbcon->error;}
 }

 
  ?>