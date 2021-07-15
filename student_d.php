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
if ($_POST['delete'])
{	
       $rollno=$_POST['rollno'];
		
		 $sql="select branch from student_table where rollno='$rollno' ";
		$query=mysqli_query($dbcon, $sql);
        if($query){
          $row= mysqli_fetch_row($query);
          $dbbranch=$row[0];
         }
		if($dbbranch==$adbranch)
		{
        $sql="DELETE FROM student_table WHERE rollno='$rollno' ";

        if ($dbcon->query($sql) ===true)
		{ echo "<script>alert('Successfully Delete Student ');</script>";
        echo "<span style='color:blue;'>Successfully Delete Student</span>";
	   }else {echo "Error".$sql ."<br>" .$dbcon->error;}
}
else {echo "<span style='color:red;'>Please Delete only your brnach students</span>";}
  
}
  ?>