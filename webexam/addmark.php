<?php
include "connect.php";
if(isset($_POST['submit']))
{
	$regnum=($_POST['regnum']);
	$name=($_POST['name']);
	$code=($_POST['code']);
	$c_name=($_POST['c_name']);
	$mark=($_POST['mark']);
	
	$sql="INSERT INTO mark(regnum, name, code, c_name, mark) VALUES ('$regnum','$name','$code','$c_name','$mark')";
	$result=$connect->query($sql);
	if($result==TRUE)
	{
		echo("data inserted");
		header("location:addmark.php");
	}
	else
	{
		echo("Error".$sql."<br>".$connect->error);
	}
	$connect->close();
	}
	
?>
<html>
<head>
		<title>marks</title>
		<link rel="stylesheet" href="regis.css">
		<style>
		body
       {
	text-align:center;
	color:blue;
	border-top:60px;
	background-color:cyan;
	margin-top:60px;
	cellpadding:30px;
	
      }
	input{
	width:200px;
	height:30px;
	margin-top:50px;
	border:none;
	background:transparent;
	
	
}
.div{
	background-color:red;
	border-radius:20px 15px 20px 15px;
}
.class{
	cellpadding:50px;
	background:transparent;
	border:none;
	
}
	</style>	
	</head>
	<body>
	     <h1> ADD MARK</h1>
		<form action="" method="POST">
		<input type="text" name="regnum" placeholder="Register number"><br>
		<input type="text" name="name" placeholder="Name"><br>
		<input type="text" name="code" placeholder="Course code"><br>
		<select name="c_name" class="class" name="c_name"><br><br><br><br>
		<option value="male">Mca</option>
		<option value="male">Bca</option>
		<option value="male">Engineering</option><br>
		<input type="number" name="mark" placeholder="Mark"><br>
		<input type="submit" name="submit" class="div" value="submit"><br>
		
		</form>
	</body>
</html>
