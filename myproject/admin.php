<?php

$servername ="localhost";
$username = "root";
$password = "";
$dbname = "waterbottle";

$conn = new mysqli($servername, $username, $password, $dbname);

if($conn->connect_error){
	die("connection failed");
}

$admin_id = $_POST["admin_id"];
$pwd = $_POST["pwd"];

$sql = mysqli_query($conn, "SELECT count(*) as total from admin_login WHERE admin_id = '".$admin_id."' and
	pwd = '".$pwd."'");

$row = mysqli_fetch_array($sql);

if($row["total"] > 0){

	header('location:adminhome.html');
}
else{
	?><script>
		if(window.confirm('Wrong details!!!! Try again'))
		{
			window.location.href='admin-login.html';
		};</script>
	<?php
}