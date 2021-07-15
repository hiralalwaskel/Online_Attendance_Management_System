<?php session_start(); ?>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "attendancedb";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

//data insert in table
 if(isset($_POST['submit']))
{	 
		 $id=0;
		  $tnm=$_SESSION['nm'];
	      $sb=$_SESSION['subb'];
		  $lno1=$_SESSION['lno'];
	foreach($_POST['att'] as $id=>$att)
	{
	     $rollno=$_POST['rollno'][$id];
		$name=$_POST['name'][$id];
		$branch=$_POST['branch'][$id];
		$semester=$_POST['semester'][$id];
		
		$dat=date("Y-m-d");
	
		
		
		
		
        $sql="insert  into attendance_table (rollno , student_name , branch , semester , attendance ,subject ,teacher ,date,prasent,l_no ) values ('$rollno','$name','$branch','$semester','$att','$sb','$tnm','$dat','$att',$lno1)";
		
        

	}if ($conn->query($sql) ===true)
		        { 
		          
				  echo "<script>alert('Successfull  Attendance is Save ');</script>";
        
	   }else {echo "Error".$sql ."<br>" .$conn->error;}

	   }
	  
?>
