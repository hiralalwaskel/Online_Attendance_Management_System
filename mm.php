<?php include 'header.php'?>
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
 if (isset ($_POST['submit']))
{ 
  
$ad=$_SESSION["adbranch"];
  $sem=($_POST['semester']);
 
  
$adnm=$_SESSION["adnm"];
$adbranch=$_SESSION["adbranch"];
  

}
?>
<?php

 //a
		$sql = "SELECT subject FROM `lecture_table` WHERE day='mo' and lecture='1' and branch='$ad' and semester='$sem'";

$result = $conn->query($sql);

if (!$result) {
	die ('SQL Error: ' . mysqli_error($conn));
}


		if(mysqli_num_rows($result)==0)
   { $a=0; }
else
        {while ($row = mysqli_fetch_array($result))
		{
		
			$a=$row[0];
		}}
		//b
		$sql = "SELECT subject FROM `lecture_table` WHERE day='mo' and lecture='2' and branch='$ad' and semester='$sem'";

$result = $conn->query($sql);

if (!$result) {
	die ('SQL Error: ' . mysqli_error($conn));
}

if(mysqli_num_rows($result)==0)
   { $b=0; }
else
        {while ($row = mysqli_fetch_array($result))
		{
		
			$b=$row[0];
		}}
			//c
		$sql = "SELECT subject FROM `lecture_table` WHERE day='mo' and lecture='3' and branch='$ad' and semester='$sem'";

$result = $conn->query($sql);

if (!$result) {
	die ('SQL Error: ' . mysqli_error($conn));
}


	if(mysqli_num_rows($result)==0)
   { $c=0; }
else
        {while ($row = mysqli_fetch_array($result))
		{
		
			$c=$row[0];
		}}
			//d
		$sql = "SELECT subject FROM `lecture_table` WHERE day='mo' and lecture='4' and branch='$ad' and semester='$sem'";

$result = $conn->query($sql);

if (!$result) {
	die ('SQL Error: ' . mysqli_error($conn));
}


	if(mysqli_num_rows($result)==0)
   { $d=0; }
else
        {while ($row = mysqli_fetch_array($result))
		{
		
			$d=$row[0];
		}}
			//e
		$sql = "SELECT subject FROM `lecture_table` WHERE day='mo' and lecture='5' and branch='$ad' and semester='$sem'";

$result = $conn->query($sql);

if (!$result) {
	die ('SQL Error: ' . mysqli_error($conn));
}


		if(mysqli_num_rows($result)==0)
   { $e=0; }
else
        {while ($row = mysqli_fetch_array($result))
		{
		
			$e=$row[0];
		}}
   	//f
		$sql = "SELECT subject FROM `lecture_table` WHERE day='mo' and lecture='6' and branch='$ad' and semester='$sem'";

$result = $conn->query($sql);

if (!$result) {
	die ('SQL Error: ' . mysqli_error($conn));
}


		if(mysqli_num_rows($result)==0)
   { $f=0; }
else
        {while ($row = mysqli_fetch_array($result))
		{
		
			$f=$row[0];
		}}
		 //g
		$sql = "SELECT subject FROM `lecture_table` WHERE day='tu' and lecture='1' and branch='$ad' and semester='$sem'";

$result = $conn->query($sql);

if (!$result) {
	die ('SQL Error: ' . mysqli_error($conn));
}


		if(mysqli_num_rows($result)==0)
   { $g=0; }
else
        {while ($row = mysqli_fetch_array($result))
		{
		
			$g=$row[0];
		}}
		//h
		$sql = "SELECT subject FROM `lecture_table` WHERE day='tu' and lecture='2' and branch='$ad' and semester='$sem'";

$result = $conn->query($sql);

if (!$result) {
	die ('SQL Error: ' . mysqli_error($conn));
}


		if(mysqli_num_rows($result)==0)
   { $h=0; }
else
        {while ($row = mysqli_fetch_array($result))
		{
		
			$h=$row[0];
		}}
			//i
		$sql = "SELECT subject FROM `lecture_table` WHERE day='tu' and lecture='3' and branch='$ad' and semester='$sem'";

$result = $conn->query($sql);

if (!$result) {
	die ('SQL Error: ' . mysqli_error($conn));
}

if(mysqli_num_rows($result)==0)
   { $i=0; }
else
        {while ($row = mysqli_fetch_array($result))
		{
		
			$i=$row[0];
		}}
			//j
		$sql = "SELECT subject FROM `lecture_table` WHERE day='tu' and lecture='4' and branch='$ad' and semester='$sem'";

$result = $conn->query($sql);

if (!$result) {
	die ('SQL Error: ' . mysqli_error($conn));
}


		if(mysqli_num_rows($result)==0)
   { $j=0; }
else
        {while ($row = mysqli_fetch_array($result))
		{
		
			$j=$row[0];
		}}
			//k
		$sql = "SELECT subject FROM `lecture_table` WHERE day='tu' and lecture='5' and branch='$ad' and semester='$sem'";

$result = $conn->query($sql);

if (!$result) {
	die ('SQL Error: ' . mysqli_error($conn));
}


	if(mysqli_num_rows($result)==0)
   { $k=0; }
else
        {while ($row = mysqli_fetch_array($result))
		{
		
			$k=$row[0];
		}}
   	//l
		$sql = "SELECT subject FROM `lecture_table` WHERE day='tu' and lecture='6' and branch='$ad' and semester='$sem'";

$result = $conn->query($sql);

if (!$result) {
	die ('SQL Error: ' . mysqli_error($conn));
}

if(mysqli_num_rows($result)==0)
   { $l=0; }
else
        {while ($row = mysqli_fetch_array($result))
		{
		
			$l=$row[0];
		}}
		 //m
		$sql = "SELECT subject FROM `lecture_table` WHERE day='we' and lecture='1' and branch='$ad' and semester='$sem'";

$result = $conn->query($sql);

if (!$result) {
	die ('SQL Error: ' . mysqli_error($conn));
}
if(mysqli_num_rows($result)==0)
   { $m=0; }
else
        {while ($row = mysqli_fetch_array($result))
		{
		
			$m=$row[0];
		}}
		//n
		$sql = "SELECT subject FROM `lecture_table` WHERE day='we' and lecture='2' and branch='$ad' and semester='$sem'";

$result = $conn->query($sql);

if (!$result) {
	die ('SQL Error: ' . mysqli_error($conn));
}


		if(mysqli_num_rows($result)==0)
   { $n=0; }
else
        {while ($row = mysqli_fetch_array($result))
		{
		
			$n=$row[0];
		}}
			//o
		$sql = "SELECT subject FROM `lecture_table` WHERE day='we' and lecture='3' and branch='$ad' and semester='$sem'";

$result = $conn->query($sql);

if (!$result) {
	die ('SQL Error: ' . mysqli_error($conn));
}
if(mysqli_num_rows($result)==0)
   { $o=0; }
else
        {while ($row = mysqli_fetch_array($result))
		{
		
			$o=$row[0];
		}}
			//p
		$sql = "SELECT subject FROM `lecture_table` WHERE day='we' and lecture='4' and branch='$ad' and semester='$sem'";

$result = $conn->query($sql);

if (!$result) {
	die ('SQL Error: ' . mysqli_error($conn));
}


	if(mysqli_num_rows($result)==0)
   { $p=0; }
else
        {while ($row = mysqli_fetch_array($result))
		{
		
			$p=$row[0];
		}}
			//q
		$sql = "SELECT subject FROM `lecture_table` WHERE day='we' and lecture='5' and branch='$ad' and semester='$sem'";

$result = $conn->query($sql);

if (!$result) {
	die ('SQL Error: ' . mysqli_error($conn));
}
if(mysqli_num_rows($result)==0)
   { $q=0; }
else
        {while ($row = mysqli_fetch_array($result))
		{
		
			$q=$row[0];
		}}
   	//r
		$sql = "SELECT subject FROM `lecture_table` WHERE day='we' and lecture='6' and branch='$ad' and semester='$sem'";

$result = $conn->query($sql);

if (!$result) {
	die ('SQL Error: ' . mysqli_error($conn));
}

if(mysqli_num_rows($result)==0)
   { $r=0; }
else
        {while ($row = mysqli_fetch_array($result))
		{
		
			$r=$row[0];
		}}
		 //s
		$sql = "SELECT subject FROM `lecture_table` WHERE day='th' and lecture='1' and branch='$ad' and semester='$sem'";

$result = $conn->query($sql);

if (!$result) {
	die ('SQL Error: ' . mysqli_error($conn));
}


	if(mysqli_num_rows($result)==0)
   { $s=0; }
else
        {while ($row = mysqli_fetch_array($result))
		{
		
			$s=$row[0];
		}}
		//t
		$sql = "SELECT subject FROM `lecture_table` WHERE day='th' and lecture='2' and branch='$ad' and semester='$sem'";

$result = $conn->query($sql);

if (!$result) {
	die ('SQL Error: ' . mysqli_error($conn));
}
if(mysqli_num_rows($result)==0)
   { $t=0; }
else
        {while ($row = mysqli_fetch_array($result))
		{
		
			$t=$row[0];
		}}
			//u
		$sql = "SELECT subject FROM `lecture_table` WHERE day='th' and lecture='3' and branch='$ad' and semester='$sem'";

$result = $conn->query($sql);

if (!$result) {
	die ('SQL Error: ' . mysqli_error($conn));
}

if(mysqli_num_rows($result)==0)
   { $u=0; }
else
        {while ($row = mysqli_fetch_array($result))
		{
		
			$u=$row[0];
		}}
			//v
		$sql = "SELECT subject FROM `lecture_table` WHERE day='th' and lecture='4' and branch='$ad' and semester='$sem'";

$result = $conn->query($sql);

if (!$result) {
	die ('SQL Error: ' . mysqli_error($conn));
}

if(mysqli_num_rows($result)==0)
   { $v=0; }
else
        {while ($row = mysqli_fetch_array($result))
		{
		
			$v=$row[0];
		}}
			//x
		$sql = "SELECT subject FROM `lecture_table` WHERE day='th' and lecture='5' and branch='$ad' and semester='$sem'";

$result = $conn->query($sql);

if (!$result) {
	die ('SQL Error: ' . mysqli_error($conn));
}
if(mysqli_num_rows($result)==0)
   { $x=0; }
else
        {while ($row = mysqli_fetch_array($result))
		{
		
			$x=$row[0];
		}}
   	//y
		$sql = "SELECT subject FROM `lecture_table` WHERE day='th' and lecture='6' and branch='$ad' and semester='$sem'";

$result = $conn->query($sql);

if (!$result) {
	die ('SQL Error: ' . mysqli_error($conn));
}


		if(mysqli_num_rows($result)==0)
   { $y=0; }
else
        {while ($row = mysqli_fetch_array($result))
		{
		
			$y=$row[0];
		}}
		 //z
		$sql = "SELECT subject FROM `lecture_table` WHERE day='fr' and lecture='1' and branch='$ad' and semester='$sem'";

$result = $conn->query($sql);

if (!$result) {
	die ('SQL Error: ' . mysqli_error($conn));
}

if(mysqli_num_rows($result)==0)
   { $z=0; }
else
        {while ($row = mysqli_fetch_array($result))
		{
		
			$z=$row[0];
		}}
		//aa
		$sql = "SELECT subject FROM `lecture_table` WHERE day='fr' and lecture='2' and branch='$ad' and semester='$sem'";

$result = $conn->query($sql);

if (!$result) {
	die ('SQL Error: ' . mysqli_error($conn));
}


		
		if(mysqli_num_rows($result)==0)
   { $aa=0; }
else
        {while ($row = mysqli_fetch_array($result))
		{
		
			$aa=$row[0];
		}}
			//bb
		$sql = "SELECT subject FROM `lecture_table` WHERE day='fr' and lecture='3' and branch='$ad' and semester='$sem'";

$result = $conn->query($sql);

if (!$result) {
	die ('SQL Error: ' . mysqli_error($conn));
}

if(mysqli_num_rows($result)==0)
   { $bb=0; }
else
        {while ($row = mysqli_fetch_array($result))
		{
		
			$bb=$row[0];
		}}
			//cc
		$sql = "SELECT subject FROM `lecture_table` WHERE day='fr' and lecture='4' and branch='$ad' and semester='$sem'";

$result = $conn->query($sql);

if (!$result) {
	die ('SQL Error: ' . mysqli_error($conn));
}


		if(mysqli_num_rows($result)==0)
   { $cc=0; }
else
        {while ($row = mysqli_fetch_array($result))
		{
		
			$cc=$row[0];
		}}
			//dd
		$sql = "SELECT subject FROM `lecture_table` WHERE day='fr' and lecture='5' and branch='$ad' and semester='$sem'";

$result = $conn->query($sql);

if (!$result) {
	die ('SQL Error: ' . mysqli_error($conn));
}
if(mysqli_num_rows($result)==0)
   { $dd=0; }
else
        {while ($row = mysqli_fetch_array($result))
		{
		
			$dd=$row[0];
		}}
   	//ee
		$sql = "SELECT subject FROM `lecture_table` WHERE day='fr' and lecture='6' and branch='$ad' and semester='$sem'";

$result = $conn->query($sql);

if (!$result) {
	die ('SQL Error: ' . mysqli_error($conn));
}


	if(mysqli_num_rows($result)==0)
   { $ee=0; }
else
        {while ($row = mysqli_fetch_array($result))
		{
		
			$ee=$row[0];
		}}
		 //ff
		$sql = "SELECT subject FROM `lecture_table` WHERE day='sa' and lecture='1' and branch='$ad' and semester='$sem'";

$result = $conn->query($sql);

if (!$result) {
	die ('SQL Error: ' . mysqli_error($conn));
}
if(mysqli_num_rows($result)==0)
   { $ff=0; }
else
        {while ($row = mysqli_fetch_array($result))
		{
		
			$ff=$row[0];
		}}
		//gg
		$sql = "SELECT subject FROM `lecture_table` WHERE day='sa' and lecture='2' and branch='$ad' and semester='$sem'";

$result = $conn->query($sql);

if (!$result) {
	die ('SQL Error: ' . mysqli_error($conn));
}


		
		if(mysqli_num_rows($result)==0)
   { $gg=0; }
else
        {while ($row = mysqli_fetch_array($result))
		{
		
			$gg=$row[0];
		}}
			//hh
		$sql = "SELECT subject FROM `lecture_table` WHERE day='sa' and lecture='3' and branch='$ad' and semester='$sem'";

$result = $conn->query($sql);

if (!$result) {
	die ('SQL Error: ' . mysqli_error($conn));
}


	if(mysqli_num_rows($result)==0)
   { $hh=0; }
else
        {while ($row = mysqli_fetch_array($result))
		{
		
			$hh=$row[0];
		}}
		//ii
		$sql = "SELECT subject FROM `lecture_table` WHERE day='sa' and lecture='4' and branch='$ad' and semester='$sem'";

$result = $conn->query($sql);

if (!$result) {
	die ('SQL Error: ' . mysqli_error($conn));
}


		if(mysqli_num_rows($result)==0)
   { $ii=0; }
else
        {while ($row = mysqli_fetch_array($result))
		{
		
			$ii=$row[0];
		}}
			//jj
		$sql = "SELECT subject FROM `lecture_table` WHERE day='sa' and lecture='5' and branch='$ad' and semester='$sem'";

$result = $conn->query($sql);

if (!$result) {
	die ('SQL Error: ' . mysqli_error($conn));
}

if(mysqli_num_rows($result)==0)
   { $jj=0; }
else
        {while ($row = mysqli_fetch_array($result))
		{
		
			$jj=$row[0];
		}}
   	//kk
		$sql = "SELECT subject FROM `lecture_table` WHERE day='sa' and lecture='6' and branch='$ad' and semester='$sem'";

$result = $conn->query($sql);

if (!$result) {
	die ('SQL Error: ' . mysqli_error($conn));
}


	if(mysqli_num_rows($result)==0)
   { $kk=0; }
else
        {while ($row = mysqli_fetch_array($result))
		{
		
			$kk=$row[0];
		}}
?>

<!doctype html>
<html>
<head>
<style>
.all{text-align:center;box-shadow:0px 0px 10px 0px;margin-left:200px;margin-right:200px;margin-top:1px;background-color:#ACEA7A;}
body {background-color:#FFFFFF;}
th{padding-top:0px;padding-bottom:20px;font-size:20px;background-color:#E0E3F3;}
td{padding:20px;background-color:#EDC7FA;}
h1{color:blue;}
body{margin:0px;}
</style>
</head>
<body>
<div class="all">
<h1>Lecture Table</h1>

<table align="center">
<tr>
<th>Day/lecture</th>
<th>1</th>
<th>2</th>
<th>3</th>
<th>4</th>
<th>5</th>
<th>6</th>
</tr>
<tr>
<th>mo</th>

<td><?php echo "$a" ?></td>
<td><?php echo "$b" ?></td>
<td><?php echo "$c" ?></td>
<td><?php echo "$d" ?></td>
<td><?php echo "$e" ?></td>
<td><?php echo "$f" ?></td>
</tr>
<tr>
<th>tu</th>
<td><?php echo "$g" ?></td>
<td><?php echo "$h" ?></td>
<td><?php echo "$i" ?></td>
<td><?php echo "$j" ?></td>
<td><?php echo "$k" ?></td>
<td><?php echo "$l" ?></td>
</tr><tr>
<th>we</th>
<td><?php echo "$m" ?></td>
<td><?php echo "$n" ?></td>
<td><?php echo "$o" ?></td>
<td><?php echo "$p" ?></td>
<td><?php echo "$q" ?></td>
<td><?php echo "$r" ?></td>
</tr>
<tr>
<th>th</th>
<td><?php echo "$s" ?></td>
<td><?php echo "$t" ?></td>
<td><?php echo "$u" ?></td>
<td><?php echo "$v" ?></td>
<td><?php echo "$x" ?></td>
<td><?php echo "$y" ?></td>
</tr>
<tr>
<th>fr</th>
<td><?php echo "$z" ?></td>
<td><?php echo "$aa" ?></td>
<td><?php echo "$bb" ?></td>
<td><?php echo "$cc" ?></td>
<td><?php echo "$dd" ?></td>
<td><?php echo "$ee" ?></td>
</tr>
<tr>
<th>sa</th>
<td><?php echo "$ff" ?></td>
<td><?php echo "$gg" ?></td>
<td><?php echo "$hh" ?></td>
<td><?php echo "$ii" ?></td>
<td><?php echo "$jj" ?></td>
<td><?php echo "$kk" ?></td>
</tr>

</table>
<br>
</div>
</body>
</html>
<?php include 'footer.php'?>
