<?php

session_start();
{ $adnm=$_SESSION["adnm"];
  $adbranch=$_SESSION["adbranch"]; 
}
 ?>	
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
       $rollno=$_POST['rollno'];
		$semester=$_POST['semester'];
		$password=$_POST['password'];
		
		 $sql="select branch from student_table where rollno='$rollno' ";
		$query=mysqli_query($dbcon, $sql);
        if($query){
          $row= mysqli_fetch_row($query);
          $dbbranch=$row[0];
         }
		if($dbbranch==$adbranch)
		{
        $sql="update student_table set semester='$semester' , password='$password' where rollno='$rollno' ";

        if ($dbcon->query($sql) ===true)
	{ echo "<script>alert('Successfully Update Student ');</script>";
echo "<span style='color:blue;'>Successfully Update Student</span>";
	   }else {echo "Error".$sql ."<br>" .$dbcon->error;}
}
else {echo "<span style='color:red;'>Please Update only your brnach students</span>";}

}
  
  
?>