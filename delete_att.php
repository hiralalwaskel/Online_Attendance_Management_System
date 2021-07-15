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
if(isset($_POST['delete']))
{	
		$semester=$_POST['semester'];
		$sd=$_POST['sdate'];
		$ed=$_POST['edate'];
	$sql="delete from attendance_table where date>='$sd' and date<='$ed' and semester='$semester' ";

        if ($dbcon->query($sql) ===true)
		
        { echo "<script>alert('Successfull  Attendance is deleted ');</script>";
	   }else {echo "Error".$sql ."<br>" .$dbcon->error;}
}
?>