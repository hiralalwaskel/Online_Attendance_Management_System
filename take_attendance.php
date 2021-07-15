<?php include 'header.php';?>

<?php session_start(); ?>
<!DOCTYPE html>
<html>
<body>

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

$branch1=$_SESSION['abranch']; 
  $sem1=$_SESSION['asem'];
 $sub1=$_SESSION['asub'];
  $tech11=$_SESSION['atec'];
  $lno=$_SESSION['lno'];
  $dt1=date("d-m-Y");
  

  



$sql = "SELECT rollno, name, branch, semester FROM student_table where branch='$branch1' and semester='$sem1' order by rollno ";

$result = $conn->query($sql);


if (!$result) {
	die ('SQL Error: ' . mysqli_error($conn));
}

		

?>
  
<html>
<head>
	<title>Displaying MySQL Data in HTML Table</title>
	<style type="text/css">
	
		body {
			font-size: 15px;
			color: #6b6f4f;
			font-family: "segoe-ui", "open-sans", tahoma, arial;
			padding: 0;
			margin: 0;
		}
		table {
			margin: auto;
			font-family: "Lucida Sans Unicode", "Lucida Grande", "Segoe Ui";
			font-size: 12px;
		}

		h1 {
			margin: 25px auto 0;
			text-align: center;
			text-transform: uppercase;
			font-size: 17px;
		}

		table td {
			transition: all .5s;
		}
		
		/* Table */
		.data-table {
			border-collapse: collapse;
			font-size: 14px;
			min-width: 537px;
			margin-bottom:10px;
			
		}

		.data-table th, 
		.data-table td {
			border: 1px solid #e1edff;
			padding: 7px 17px;
		}
		.data-table caption {
			margin: 7px;
		}

		/* Table Header */
		.data-table thead th {
			background-color: black;
			color: #FFFFFF;
			border-color: #2e303c!important;
			text-transform: uppercase;
			
		}

		/* Table Body */
		.data-table tbody td {
			color: #353535;
		}
		.data-table tbody td:first-child,
		.data-table tbody td:nth-child(4),
		.data-table tbody td:last-child {
			text-align: right;
		}

		.data-table tbody tr:nth-child(odd) td {
			background-color:#d2d4e4;
		}
		.data-table tbody tr:hover td {
			background-color: #9dbd9b;
			border-color: #9dbd9b;
		}

		/* Table Footer */
		.data-table tfoot th {
			background-color: #e5f5ff;
			text-align: right;
		}
		.data-table tfoot th:first-child {
			text-align: left;
		}
		.data-table tbody td:empty
		{
			background-color: #ffcccc;
		}
		h1{margin-top:80px;}
	</style>
</head>
<body>
 
<h1><center><?php echo date("d-m-Y"); echo $lno; ?>



</center>
	Add New Attendance </h1>
	<form action="insert_att.php" method="post">
	<table class="data-table">
		
		<thead>
			<tr>
				<th>Roll NO</th>
				<th>Student</th>
				<th>Branch</th>
				<th>Semester</th>
				<th>Attendance</th>
				
			</tr>
		</thead>
		<tbody>
		<?php
		
		$counter=0;
		
		
		
		while ($row= mysqli_fetch_array($result))
		{
		
		?>
		<tr>
		<td> <?php echo $row['rollno']; ?>
		<input type="hidden" name="rollno[]" value="<?php echo $row["rollno"];?>">
		</td>
		<td> <?php echo $row['name']; ?>
		<input type="hidden" name="name[]" value="<?php echo $row["name"]; ?> ">
		</td>
		<td> <?php echo $row['branch']; ?>
		<input type="hidden" name="branch[]" value="<?php echo $row["branch"]; ?> ">
		</td>
		<td> <?php echo $row['semester']; ?>
		<input type="hidden" name="semester[]" value="<?php echo $row["semester"]; ?> ">
		</td>
		<td>
		<input type="radio" name="att[<?php echo $counter;?>]" value="a" required> A
		<input type="radio" name="att[<?php echo $counter;?>]" value="p"> P
            
        </td>
		
		
				</tr>
		
			
	<?php 
	$counter++;
	}
	?>
		
		</tbody>
	</table>
	<br>
	
	<center>
	
<a href="teacher_form.php"><input type="button" value="Back"></a>
	<input type="submit" value="submit" name="submit"></center>
	</form>
		
	  
	
	

</body>
</html>
<?php include 'footer.php'?>