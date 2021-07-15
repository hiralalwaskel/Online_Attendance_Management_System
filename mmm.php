
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


$dt=date('l');
$dt1=date("Y-m-d");



 if (isset ($_POST['submit']))
{ $uid=$_SESSION["nm"];
   $_SESSION['subb']=($_POST['subject']);
  $branch=($_POST['branch']);
  $sem=($_POST['semester']);
  $sub=($_POST['subject']);
  
   $ll=0;
  $_SESSION['abranch']=$branch;
  $_SESSION['asem']=$sem;
 $_SESSION['asub']=$sub;
  $_SESSION['atec']=$uid;
  $_SESSION['lno']=$ll;
  
 

}
   
  
?>




<?php 
 


		$sql = "SELECT subject FROM lecture_table WHERE day='mo' and lecture='1' and branch='$branch' and semester='$sem' and subject='$sub' and teacher='$uid'";

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
		$sql = "SELECT subject FROM `lecture_table` WHERE day='mo' and lecture='2' and branch='$branch' and semester='$sem' and subject='$sub' and teacher='$uid'";

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
		$sql = "SELECT subject FROM `lecture_table` WHERE day='mo' and lecture='3' and branch='$branch' and semester='$sem' and subject='$sub' and teacher='$uid'";

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
		$sql = "SELECT subject FROM `lecture_table` WHERE day='mo' and lecture='4' and branch='$branch' and semester='$sem' and subject='$sub' and teacher='$uid'";

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
		$sql = "SELECT subject FROM `lecture_table` WHERE day='mo' and lecture='5' and branch='$branch' and semester='$sem' and subject='$sub' and teacher='$uid'";

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
		$sql = "SELECT subject FROM `lecture_table` WHERE day='mo' and lecture='6' and branch='$branch' and semester='$sem' and subject='$sub' and teacher='$uid'";

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
		$sql = "SELECT subject FROM `lecture_table` WHERE day='tu' and lecture='1' and branch='$branch' and semester='$sem' and subject='$sub' and teacher='$uid'";

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
		$sql = "SELECT subject FROM `lecture_table` WHERE day='tu' and lecture='2' and branch='$branch' and semester='$sem' and subject='$sub' and teacher='$uid'";

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
		$sql = "SELECT subject FROM `lecture_table` WHERE day='tu' and lecture='3' and branch='$branch' and semester='$sem' and subject='$sub' and teacher='$uid'";

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
		$sql = "SELECT subject FROM `lecture_table` WHERE day='tu' and lecture='4' and branch='$branch' and semester='$sem' and subject='$sub' and teacher='$uid'";

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
		$sql = "SELECT subject FROM `lecture_table` WHERE day='tu' and lecture='5' and branch='$branch' and semester='$sem' and subject='$sub' and teacher='$uid'";

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
		$sql = "SELECT subject FROM `lecture_table` WHERE day='tu' and lecture='6' and branch='$branch' and semester='$sem' and subject='$sub' and teacher='$uid'";

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
		$sql = "SELECT subject FROM `lecture_table` WHERE day='we' and lecture='1' and branch='$branch' and semester='$sem' and subject='$sub' and teacher='$uid'";

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
		$sql = "SELECT subject FROM `lecture_table` WHERE day='we' and lecture='2' and branch='$branch' and semester='$sem' and subject='$sub' and teacher='$uid'";

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
		}}	//o
		$sql = "SELECT subject FROM `lecture_table` WHERE day='we' and lecture='3' and branch='$branch' and semester='$sem' and subject='$sub' and teacher='$uid'";

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
		$sql = "SELECT subject FROM `lecture_table` WHERE day='we' and lecture='4' and branch='$branch' and semester='$sem' and subject='$sub' and teacher='$uid'";

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
		$sql = "SELECT subject FROM `lecture_table` WHERE day='we' and lecture='5' and branch='$branch' and semester='$sem' and subject='$sub' and teacher='$uid'";

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
		$sql = "SELECT subject FROM `lecture_table` WHERE day='we' and lecture='6' and branch='$branch' and semester='$sem' and subject='$sub' and teacher='$uid'";

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
		$sql = "SELECT subject FROM `lecture_table` WHERE day='th' and lecture='1' and branch='$branch' and semester='$sem' and subject='$sub' and teacher='$uid'";

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
		$sql = "SELECT subject FROM `lecture_table` WHERE day='th' and lecture='2' and branch='$branch' and semester='$sem' and subject='$sub' and teacher='$uid'";

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
		$sql = "SELECT subject FROM `lecture_table` WHERE day='th' and lecture='3' and branch='$branch' and semester='$sem' and subject='$sub' and teacher='$uid'";

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
		$sql = "SELECT subject FROM `lecture_table` WHERE day='th' and lecture='4' and branch='$branch' and semester='$sem' and subject='$sub' and teacher='$uid'";

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
		$sql = "SELECT subject FROM `lecture_table` WHERE day='th' and lecture='5' and branch='$branch' and semester='$sem' and subject='$sub' and teacher='$uid'";

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
		$sql = "SELECT subject FROM `lecture_table` WHERE day='th' and lecture='6'and branch='$branch' and semester='$sem' and subject='$sub' and teacher='$uid'";

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
		$sql = "SELECT subject FROM `lecture_table` WHERE day='fr' and lecture='1' and branch='$branch' and semester='$sem' and subject='$sub' and teacher='$uid'";

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
		$sql = "SELECT subject FROM `lecture_table` WHERE day='fr' and lecture='2' and branch='$branch' and semester='$sem' and subject='$sub' and teacher='$uid'";

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
		$sql = "SELECT subject FROM `lecture_table` WHERE day='fr' and lecture='3' and branch='$branch' and semester='$sem' and subject='$sub' and teacher='$uid'";

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
		$sql = "SELECT subject FROM `lecture_table` WHERE day='fr' and lecture='4' and branch='$branch' and semester='$sem' and subject='$sub' and teacher='$uid'";

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
		$sql = "SELECT subject FROM `lecture_table` WHERE day='fr' and lecture='5' and branch='$branch' and semester='$sem' and subject='$sub' and teacher='$uid'";

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
		$sql = "SELECT subject FROM `lecture_table` WHERE day='fr' and lecture='6' and branch='$branch' and semester='$sem' and subject='$sub' and teacher='$uid'";

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
		$sql = "SELECT subject FROM `lecture_table` WHERE day='sa' and lecture='1'and branch='$branch' and semester='$sem' and subject='$sub' and teacher='$uid'";

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
		$sql = "SELECT subject FROM `lecture_table` WHERE day='sa' and lecture='2' and branch='$branch' and semester='$sem' and subject='$sub' and teacher='$uid'";

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
		$sql = "SELECT subject FROM `lecture_table` WHERE day='sa' and lecture='3' and branch='$branch' and semester='$sem' and subject='$sub' and teacher='$uid'";

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
		$sql = "SELECT subject FROM `lecture_table` WHERE day='sa' and lecture='4' and branch='$branch' and semester='$sem' and subject='$sub' and teacher='$uid'";

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
		$sql = "SELECT subject FROM `lecture_table` WHERE day='sa' and lecture='5' and branch='$branch' and semester='$sem' and subject='$sub' and teacher='$uid'";

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
		$sql = "SELECT subject FROM `lecture_table` WHERE day='sa' and lecture='6' and branch='$branch' and semester='$sem' and subject='$sub' and teacher='$uid'";

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
.all{text-align:center;box-shadow:0px 0px 10px 0px;margin-left:220px;margin-right:220px;margin-top:1px;background-color:#ACEA7A;}
body {background-color:#DCDCDC;}
th{padding-top:0px;padding-bottom:20px;font-size:20px;background-color:#E0E3F3;}
td{padding:20px;background-color:#EDC7FA;}
h1{color:blue;}
body{margin:0px;}
</style>
</head>
<body>

<div class="all">
<h1>Please choose your lecture</h1>

<table align="center">
<tr>
<th>Day/Lecture</th>
<th>1</th>
<th>2</th>
<th>3</th>
<th>4</th>
<th>5</th>
<th>6</th>
</tr>
<tr>
<th>Mon</th>
<td><?php if($a=="0"){echo '0';}
else  
{if ($dt=="Monday")	
 {
	$sqll="select distinct(date) from attendance_table where branch='$branch' and semester='$sem' and subject='$sub' and teacher='$uid' and l_no=1";

$query=mysqli_query($conn, $sqll);
        if($query){
          $row= mysqli_fetch_row($query);
		  { 
          $dbdt=$row[0];
		}}  
if($dbdt==$dt1) {echo 'Taken';}
else
{{$_SESSION['lno']=1;echo '<a href="take_attendance.php">Yes</a>';}}
		  
		 
 } 
		else
	 {echo '0';}
 
}?></td>
<td><?php if($b=="0"){echo '0';}
else  
{if ($dt=="Monday")	
 {
	$sqll="select distinct(date) from attendance_table where branch='$branch' and semester='$sem' and subject='$sub' and teacher='$uid' and l_no=2";

$query=mysqli_query($conn, $sqll);
        if($query){
          $row= mysqli_fetch_row($query);
		  { 
          $dbdt=$row[0];
		}}  
if($dbdt==$dt1) {echo 'Taken';}
else
{ $_SESSION['llno']=2;{echo '<a href="take_attendance.php">Yes</a>';}}
		  
		 
 } 
	
 else
	 {echo '0';}
 
 
}?></td>

<td><?php if($c=="0"){echo '0';}
else  
{if ($dt=="Monday")	
 {
	$sqll="select distinct(date) from attendance_table where branch='$branch' and semester='$sem' and subject='$sub' and teacher='$uid' and l_no=3";

$query=mysqli_query($conn, $sqll);
        if($query){
          $row= mysqli_fetch_row($query);
		  { 
          $dbdt=$row[0];
		}}  
if($dbdt==$dt1) {echo 'Taken';}
else
{$ll=3;{echo '<a href="take_attendance.php">Yes</a>';}}
		  
		 
 } 
	
 else
	 {echo '0';}
 
}?></td>

<td><?php if($d=="0"){echo '0';}
else  
{if ($dt=="Monday")	
 {
	$sqll="select distinct(date) from attendance_table where branch='$branch' and semester='$sem' and subject='$sub' and teacher='$uid' and l_no=4";

$query=mysqli_query($conn, $sqll);
        if($query){
          $row= mysqli_fetch_row($query);
		  { 
          $dbdt=$row[0];
		}}  
if($dbdt==$dt1) {echo 'Taken';}
else
{$ll=4;{echo '<a href="take_attendance.php">Yes</a>';}}
		  
		 
 } 
	
 else
	 {echo '0';}
 
}?></td>

<td><?php if($e=="0"){echo '0';}
else  
{if ($dt=="Monday")	
 {
	$sqll="select distinct(date) from attendance_table where branch='$branch' and semester='$sem' and subject='$sub' and teacher='$uid' and l_no=5";

$query=mysqli_query($conn, $sqll);
        if($query){
          $row= mysqli_fetch_row($query);
		  { 
          $dbdt=$row[0];
		}}  
if($dbdt==$dt1) {echo 'Taken';}
else
{$ll=5;{echo '<a href="take_attendance.php">Yes</a>';}}
		  
		 
 } 
	
 else
	 {echo '0';}
 
}?></td>
<td><?php if($f=="0"){echo '0';}
else  
{if ($dt=="Monday")	
 {
	$sqll="select distinct(date) from attendance_table where branch='$branch' and semester='$sem' and subject='$sub' and teacher='$uid' and l_no=6";

$query=mysqli_query($conn, $sqll);
        if($query){
          $row= mysqli_fetch_row($query);
		  { 
          $dbdt=$row[0];
		}}  
if($dbdt==$dt1) {echo 'Taken';}
else
{$ll=6;{echo '<a href="take_attendance.php">Yes</a>';}}
		  
		 
 } 
	
 else
	 {echo '0';}
 
}?></td>
</tr>
<tr>
<th>Tue</th>
<td><?php if($g=="0"){echo '0';}
else  
{if ($dt=="Tuesday")	
{
	$sqll="select distinct(date) from attendance_table where branch='$branch' and semester='$sem' and subject='$sub' and teacher='$uid' and l_no=1";

$query=mysqli_query($conn, $sqll);
        if($query){
          $row= mysqli_fetch_row($query);
		  { 
          $dbdt=$row[0];
		}}  
if($dbdt==$dt1) {echo 'Taken';}
else
{
  $_SESSION['lno']=1;{echo '<a href="take_attendance.php">Yes</a>';}}
		  
		 
 } 
	
 else
	 {echo '0';}
}?></td>

<td><?php if($h=="0"){echo '0';}
else  
{if ($dt=="Tuesday")	
 { $sqll="select distinct(date) from attendance_table where branch='$branch' and semester='$sem' and subject='$sub' and teacher='$uid' and l_no=2";

$query=mysqli_query($conn, $sqll);
        if($query){
          $row= mysqli_fetch_row($query);
		  { 
          $dbdt=$row[0];
		}} 
if($dbdt==$dt1) {echo 'Taken';}
else
{
  $_SESSION['lno']=2;{echo '<a href="take_attendance.php">Yes</a>';}}
		  
		 
 } 
	
 else
	 {echo '0';}
}?></td>

<td><?php if($i=="0"){echo '0';}
else  
{if ($dt=="Tuesday")	
 {
	$sqll="select distinct(date) from attendance_table where branch='$branch' and semester='$sem' and subject='$sub' and teacher='$uid' and l_no=3";

$query=mysqli_query($conn, $sqll);
        if($query){
          $row= mysqli_fetch_row($query);
		  { 
          $dbdt=$row[0];
		}}  
if($dbdt==$dt1) {echo 'Taken';}
else
{$ll=3;{echo '<a href="take_attendance.php">Yes</a>';}}
		  
		 
 } 
	
 else
	 {echo '0';}
}?></td>

<td><?php if($j=="0"){echo '0';}
else  
{if ($dt=="Tuesday")	
 {
	$sqll="select distinct(date) from attendance_table where branch='$branch' and semester='$sem' and subject='$sub' and teacher='$uid' and l_no=4";

$query=mysqli_query($conn, $sqll);
        if($query){
          $row= mysqli_fetch_row($query);
		  { 
          $dbdt=$row[0];
		}}  
if($dbdt==$dt1) {echo 'Taken';}
else
{$ll=4;{echo '<a href="take_attendance.php">Yes</a>';}}
		  
		 
 } 
	
 else
	 {echo '0';}
}?></td>
<td><?php if($k=="0"){echo '0';}
else  
{if ($dt=="Tuesday")	
 {
	$sqll="select distinct(date) from attendance_table where branch='$branch' and semester='$sem' and subject='$sub' and teacher='$uid' and l_no=5";

$query=mysqli_query($conn, $sqll);
        if($query){
          $row= mysqli_fetch_row($query);
		  { 
          $dbdt=$row[0];
		}}  
if($dbdt==$dt1) {echo 'Taken';}
else
{$ll=5;{echo '<a href="take_attendance.php">Yes</a>';}}
		  
		 
 } 
	
 else
	 {echo '0';}
}?></td>

<td><?php if($l=="0"){echo '0';}
else  
{if ($dt=="Tuesday")	
{
	$sqll="select distinct(date) from attendance_table where branch='$branch' and semester='$sem' and subject='$sub' and teacher='$uid' and l_no=6";

$query=mysqli_query($conn, $sqll);
        if($query){
          $row= mysqli_fetch_row($query);
		  { 
          $dbdt=$row[0];
		}}  
if($dbdt==$dt1) {echo 'Taken';}
else
{$ll=6;{echo '<a href="take_attendance.php">Yes</a>';}}
		  
		 
 }  
	
 else
	 {echo '0';}
}?></td>
</tr><tr>
<th>Wed</th>
<td><?php if($m=="0"){echo '0';}
else  
{if ($dt=="Wednesday")	
 {
	$sqll="select distinct(date) from attendance_table where branch='$branch' and semester='$sem' and subject='$sub' and teacher='$uid' and l_no=1";

$query=mysqli_query($conn, $sqll);
        if($query){
          $row= mysqli_fetch_row($query);
		  { 
          $dbdt=$row[0];
		}}  
if($dbdt==$dt1) {echo 'Taken';}
else
{$_SESSION['lno']=1;{echo '<a href="take_attendance.php">Yes</a>';}}
		  
		 
 } 
	
 else
	 {echo '0';}
}?></td>

<td><?php if($n=="0"){echo '0';}
else  
{if ($dt=="Wednesday")	
{
	$sqll="select distinct(date) from attendance_table where branch='$branch' and semester='$sem' and subject='$sub' and teacher='$uid' and l_no=2";

$query=mysqli_query($conn, $sqll);
        if($query){
          $row= mysqli_fetch_row($query);
		  { 
          $dbdt=$row[0];
		}}  
if($dbdt==$dt1) {echo 'Taken';}
else
{$_SESSION['llno']=2;{echo '<a href="take_attendance.php">Yes</a>';}}
		  
		 
 }  
	
 else
	 {echo '0';}
}?></td>
<td><?php if($o=="0"){echo '0';}
else  
{if ($dt=="Wednesday")	
 {
	$sqll="select distinct(date) from attendance_table where branch='$branch' and semester='$sem' and subject='$sub' and teacher='$uid' and l_no=3";

$query=mysqli_query($conn, $sqll);
        if($query){
          $row= mysqli_fetch_row($query);
		  { 
          $dbdt=$row[0];
		}}  
if($dbdt==$dt1) {echo 'Taken';}
else
{$_SESSION['lno']=3;{echo '<a href="take_attendance.php">Yes</a>';}}
		  
		 
 }  
	
 else
	 {echo '0';}
}?></td>

<td><?php if($p=="0"){echo '0';}
else  
{if ($dt=="Wednesday")	
 {
	$sqll="select distinct(date) from attendance_table where branch='$branch' and semester='$sem' and subject='$sub' and teacher='$uid' and l_no=4";

$query=mysqli_query($conn, $sqll);
        if($query){
          $row= mysqli_fetch_row($query);
		  { 
          $dbdt=$row[0];
		}}  
if($dbdt==$dt1) {echo 'Taken';}
else
{$_SESSION['lno']=4;{echo '<a href="take_attendance.php">Yes</a>';}}
		  
		 
 }  
	
 else
	 {echo '0';}
}?></td>

<td><?php if($q=="0"){echo '0';}
else  
{if ($dt=="Wednesday")	
 {
	$sqll="select distinct(date) from attendance_table where branch='$branch' and semester='$sem' and subject='$sub' and teacher='$uid' and l_no=5";

$query=mysqli_query($conn, $sqll);
        if($query){
          $row= mysqli_fetch_row($query);
		  { 
          $dbdt=$row[0];
		}}  
if($dbdt==$dt1) {echo 'Taken';}
else
{$_SESSION['lno']=5;{echo '<a href="take_attendance.php">Yes</a>';}}
		  
		 
 }  
	
 else
	 {echo '0';}
}?></td>

<td><?php if($r=="0"){echo '0';}
else  
{if ($dt=="Wednesday")	
{
	$sqll="select distinct(date) from attendance_table where branch='$branch' and semester='$sem' and subject='$sub' and teacher='$uid' and l_no=6";

$query=mysqli_query($conn, $sqll);
        if($query){
          $row= mysqli_fetch_row($query);
		  { 
          $dbdt=$row[0];
		}}  
if($dbdt==$dt1) {echo 'Taken';}
else
{$_SESSION['lno']=6;{echo '<a href="take_attendance.php">Yes</a>';}}
		  
		 
 } 
	
 else
	 {echo '0';}
}?></td>
</tr>
<tr>
<th>Thu</th>
<td><?php if($s=="0"){echo '0';}
else  
{if ($dt=="Thursday")	
{
	$sqll="select distinct(date) from attendance_table where branch='$branch' and semester='$sem' and subject='$sub' and teacher='$uid' and l_no=1";

$query=mysqli_query($conn, $sqll);
        if($query){
          $row= mysqli_fetch_row($query);
		  { 
          $dbdt=$row[0];
		}}  
if($dbdt==$dt1) {echo 'Taken';}
else
{$_SESSION['lno']=1;{echo '<a href="take_attendance.php">Yes</a>';}}
		  
		 
 }  
	
 else
	 {echo '0';}
}?></td>

<td><?php if($t=="0"){echo '0';}
else  
{if ($dt=="Thursday")	
 {
	$sqll="select distinct(date) from attendance_table where branch='$branch' and semester='$sem' and subject='$sub' and teacher='$uid' and l_no=2";

$query=mysqli_query($conn, $sqll);
        if($query){
          $row= mysqli_fetch_row($query);
		  { 
          $dbdt=$row[0];
		}}  
if($dbdt==$dt1) {echo 'Taken';}
else
{$_SESSION['llno']=2;{echo '<a href="take_attendance.php">Yes</a>';}}
		  
		 
 } 
 else
	 {echo '0';}
}?></td>

<td><?php if($u=="0"){echo '0';}
else  
{if ($dt=="Thursday")	
{
	$sqll="select distinct(date) from attendance_table where branch='$branch' and semester='$sem' and subject='$sub' and teacher='$uid' and l_no=3";

$query=mysqli_query($conn, $sqll);
        if($query){
          $row= mysqli_fetch_row($query);
		  { 
          $dbdt=$row[0];
		}}  
if($dbdt==$dt1) {echo 'Taken';}
else
{$_SESSION['lno']=3;{echo '<a href="take_attendance.php">Yes</a>';}}
		  
		 
 }  
	
 else
	 {echo '0';}
}?></td>

<td><?php if($v=="0"){echo '0';}
else  
{if ($dt=="Thursday")	
 {
	$sqll="select distinct(date) from attendance_table where branch='$branch' and semester='$sem' and subject='$sub' and teacher='$uid' and l_no=4";

$query=mysqli_query($conn, $sqll);
        if($query){
          $row= mysqli_fetch_row($query);
		  { 
          $dbdt=$row[0];
		}}  
if($dbdt==$dt1) {echo 'Taken';}
else
{$_SESSION['lno']=4;{echo '<a href="take_attendance.php">Yes</a>';}}
		  
		 
 } 
	
 else
	 {echo '0';}
}?></td>
<td><?php if($x=="0"){echo '0';}
else  
{if ($dt=="Thursday")	
{
	$sqll="select distinct(date) from attendance_table where branch='$branch' and semester='$sem' and subject='$sub' and teacher='$uid' and l_no=5";

$query=mysqli_query($conn, $sqll);
        if($query){
          $row= mysqli_fetch_row($query);
		  { 
          $dbdt=$row[0];
		}}  
if($dbdt==$dt1) {echo 'Taken';}
else
{$_SESSION['lno']=5;{echo '<a href="take_attendance.php">Yes</a>';}}
		  
		 
 } 
	
 else
	 {echo '0';}
}?></td>
<td><?php if($y=="0"){echo '0';}
else  
{if ($dt=="Thursday")	
 {
	$sqll="select distinct(date) from attendance_table where branch='$branch' and semester='$sem' and subject='$sub' and teacher='$uid' and l_no=6";

$query=mysqli_query($conn, $sqll);
        if($query){
          $row= mysqli_fetch_row($query);
		  { 
          $dbdt=$row[0];
		}}  
if($dbdt==$dt1) {echo 'Taken';}
else
{$_SESSION['lno']=6;{echo '<a href="take_attendance.php">Yes</a>';}}
		  
		 
 } 
	
 else
	 {echo '0';}
}?></td>
</tr>
<tr>
<th>Fri</th>
<td><?php if($z=="0"){echo '0';}
else  
{if ($dt=="Friday")	
{
	$sqll="select distinct(date) from attendance_table where branch='$branch' and semester='$sem' and subject='$sub' and teacher='$uid' and l_no=1";

$query=mysqli_query($conn, $sqll);
        if($query){
          $row= mysqli_fetch_row($query);
		  { 
          $dbdt=$row[0];
		}}  
if($dbdt==$dt1) {echo 'Taken';}
else
{$_SESSION['lno']=1;{echo '<a href="take_attendance.php">Yes</a>';}}
		  
		 
 } 
	
 else
	 {echo '0';}
}?></td>

<td><?php if($aa=="0"){echo '0';}
else  
{if ($dt=="Friday")	
{
	$sqll="select distinct(date) from attendance_table where branch='$branch' and semester='$sem' and subject='$sub' and teacher='$uid' and l_no=2";

$query=mysqli_query($conn, $sqll);
        if($query){
          $row= mysqli_fetch_row($query);
		  { 
          $dbdt=$row[0];
		}}  
if($dbdt==$dt1) {echo 'Taken';}
else
{$_SESSION['llno']=2;{echo '<a href="take_attendance.php">Yes</a>';}}
		  
		 
 } 
	
 else
	 {echo '0';}
}?></td>

<td><?php if($bb=="0"){echo '0';}
else  
{if ($dt=="Friday")	
{
	$sqll="select distinct(date) from attendance_table where branch='$branch' and semester='$sem' and subject='$sub' and teacher='$uid' and l_no=3";

$query=mysqli_query($conn, $sqll);
        if($query){
          $row= mysqli_fetch_row($query);
		  { 
          $dbdt=$row[0];
		}}  
if($dbdt==$dt1) {echo 'Taken';}
else
{$_SESSION['lno']=3;{echo '<a href="take_attendance.php">Yes</a>';}}
		  
		 
 } 
	
 else
	 {echo '0';}
}?></td>

<td><?php if($cc=="0"){echo '0';}
else  
{if ($dt=="Friday")	
{
	$sqll="select distinct(date) from attendance_table where branch='$branch' and semester='$sem' and subject='$sub' and teacher='$uid' and l_no=4";

$query=mysqli_query($conn, $sqll);
        if($query){
          $row= mysqli_fetch_row($query);
		  { 
          $dbdt=$row[0];
		}}  
if($dbdt==$dt1) {echo 'Taken';}
else
{$_SESSION['lno']=4;{echo '<a href="take_attendance.php">Yes</a>';}}
		  
		 
 }  
	
 else
	 {echo '0';}
 }?></td>

<td><?php if($dd=="0"){echo '0';}
else  
{if ($dt=="Friday")	
{
	$sqll="select distinct(date) from attendance_table where branch='$branch' and semester='$sem' and subject='$sub' and teacher='$uid' and l_no=5";

$query=mysqli_query($conn, $sqll);
        if($query){
          $row= mysqli_fetch_row($query);
		  { 
          $dbdt=$row[0];
		}}  
if($dbdt==$dt1) {echo 'Taken';}
else
{$_SESSION['lno']=5;{echo '<a href="take_attendance.php">Yes</a>';}}
		  
		 
 } 
	
 else
	 {echo '0';}
}?></td>

<td><?php if($ee=="0"){echo '0';}
else  
{if ($dt=="Friday")	
{
	$sqll="select distinct(date) from attendance_table where branch='$branch' and semester='$sem' and subject='$sub' and teacher='$uid' and l_no=6";

$query=mysqli_query($conn, $sqll);
        if($query){
          $row= mysqli_fetch_row($query);
		  { 
          $dbdt=$row[0];
		}}  
if($dbdt==$dt1) {echo 'Taken';}
else
{$_SESSION['lno']=6;{echo '<a href="take_attendance.php">Yes</a>';}}
		  
		 
 } 
	
 else
	 {echo '0';}
}?></td>
</tr>
<tr>
<th>Sat</th>
<td><?php if($ff=="0"){echo '0';}
else  
{if ($dt=="Saturday")	
 {
	$sqll="select distinct(date) from attendance_table where branch='$branch' and semester='$sem' and subject='$sub' and teacher='$uid' and l_no=1";

$query=mysqli_query($conn, $sqll);
        if($query){
          $row= mysqli_fetch_row($query);
		  { 
          $dbdt=$row[0];
		}}  
if($dbdt==$dt1) {echo 'Taken';}
else
{$_SESSION['lno']=1;{echo '<a href="take_attendance.php">Yes</a>';}}
		  
		 
 } 
	
 else
	 {echo '0';}
}?></td>

<td><?php if($gg=="0"){echo '0';}
else  
{if ($dt=="Saturday")	
{
	$sqll="select distinct(date) from attendance_table where branch='$branch' and semester='$sem' and subject='$sub' and teacher='$uid' and l_no=2";

$query=mysqli_query($conn, $sqll);
        if($query){
          $row= mysqli_fetch_row($query);
		  { 
          $dbdt=$row[0];
		}}  
if($dbdt==$dt1) {echo 'Taken';}
else
{$_SESSION['llno']=2;{echo '<a href="take_attendance.php">Yes</a>';}}
		  
		 
 }  
	
 else
	 {echo '0';}
}?></td>

<td><?php if($hh=="0"){echo '0';}
else  
{if ($dt=="Saturday")	
 {
	$sqll="select distinct(date) from attendance_table where branch='$branch' and semester='$sem' and subject='$sub' and teacher='$uid' and l_no=3";

$query=mysqli_query($conn, $sqll);
        if($query){
          $row= mysqli_fetch_row($query);
		  { 
          $dbdt=$row[0];
		}}  
if($dbdt==$dt1) {echo 'Taken';}
else
{$_SESSION['lno']=3;{echo '<a href="take_attendance.php">Yes</a>';}}
		  
		 
 } 
 else
	 {echo '0';}
}?></td>

<td><?php if($ii=="0"){echo '0';}
else  
{if ($dt=="Saturday")	
 {
	$sqll="select distinct(date) from attendance_table where branch='$branch' and semester='$sem' and subject='$sub' and teacher='$uid' and l_no=4";

$query=mysqli_query($conn, $sqll);
        if($query){
          $row= mysqli_fetch_row($query);
		  { 
          $dbdt=$row[0];
		}}  
if($dbdt==$dt1) {echo 'Taken';}
else
{$_SESSION['lno']=4;{echo '<a href="take_attendance.php">Yes</a>';}}
		  
		 
 } 
	
 else
	 {echo '0';}
}?></td>

<td><?php if($jj=="0"){echo '0';}
else  
{if ($dt=="Saturday")	
{
	$sqll="select distinct(date) from attendance_table where branch='$branch' and semester='$sem' and subject='$sub' and teacher='$uid' and l_no=5";

$query=mysqli_query($conn, $sqll);
        if($query){
          $row= mysqli_fetch_row($query);
		  { 
          $dbdt=$row[0];
		}}  
if($dbdt==$dt1) {echo 'Taken';}
else
{$_SESSION['lno']=5;{echo '<a href="take_attendance.php">Yes</a>';}}
		  
		 
 }  
	
 else
	 {echo '0';}
}?></td>

<td><?php if($kk=="0"){echo '0';}
else  
{if ($dt=="Saturday")	
{
	$sqll="select distinct(date) from attendance_table where branch='$branch' and semester='$sem' and subject='$sub' and teacher='$uid' and l_no=6";

$query=mysqli_query($conn, $sqll);
        if($query){
          $row= mysqli_fetch_row($query);
		  { 
          $dbdt=$row[0];
		}}  
if($dbdt==$dt1) {echo 'Taken';}
else
{$_SESSION['lno']=6;{echo '<a href="take_attendance.php">Yes</a>';}}
		  
		 
 } 
	
 else
	 {echo '0';}
}?></td>
</tr>

</table>
<br>
</div>
</body>
</html>

<?php include 'footer.php'?>