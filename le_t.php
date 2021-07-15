<?php include 'header.php';?>
<?php

session_start();



{ $adnm=$_SESSION["adnm"];
  $adbranch=$_SESSION["adbranch"];
  
}
 
?>			   
<!doctype html>
<html>
<head>
<style>
h1{color:blue;text-align:top;}
.all{text-align:center;box-shadow:0px 0px 10px 0px;margin-left:200px;margin-right:200px;margin-top:100px;background-color:#ACEA7A;}
body {background-color:#FFFFFF;}
body{margin:0px;}

</style>
</head>
<body>

<div class="all">
<form role="form" method="POST" action="le_ti.php">
<center>
<h2>Lecture Form</h2>
<table>
<tr>
<th>
Subject Name:
</th>
<th>
<input type="text" name="subject" required>
</th>
</tr>
<tr>
<th>
Teacher Name:
</th>
<th>
<input type="text" name="teacher" required>
</th>
</tr><tr>
<th>
Teacher Id:
</th>
<th>
<input type="text" name="user_id" required>
</th>
</tr>
<tr>
<th style="text-align:right">
Day:
</th>
<th>
<select name="day">
<option value='mo'>Mo</option>
<option value='tu'>Tu</option>
<option value='we'>We</option>
<option value='th'>Th</option>
<option value='fr'>Fr</option>
<option value='sa'>Sa</option>
</select>
</th>
</tr>
<tr>
<th style="text-align:right">
Lecture:
</th>
<th>
<select name="lecture">
<option value='1'>1</option>
<option value='2'>2</option>
<option value='3'>3</option>
<option value='4'>4</option>
<option value='5'>5</option>
<option value='6'>6</option>
</select>
</th>
</tr>
<tr>
<th style="text-align:right">
Branch:
</th>
<th><input type="text" name="branch" value="<?php echo $adbranch?>"  readonly>

</th>
</tr>
<tr>
<th style="text-align:right">
Semester:
</th>
<th>
<select name="semester">
<option value='1'>1</option>
<option value='2'>2</option>
<option value='3'>3</option>
<option value='4'>4</option>
<option value='5'>5</option>
<option value='6'>6</option>
<option value='7'>7</option>
<option value='8'>8</option>
</select>
</th>
</tr>
</table>
<br>
</center>

<a href="ad.php"><input type="button" value="Back"></a>
<input type="submit" name="submit" value="submit">


</form>
<br>
</div>
</body>
</html>


<?php include 'footer.php'?>