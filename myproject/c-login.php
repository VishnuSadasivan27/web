<?php

$servername ="localhost";
$username = "root";
$password = "";
$dbname = "waterbottle";

$conn = new mysqli($servername, $username, $password, $dbname);

if($conn->connect_error){
	die("connection failed");
}

$email = $_POST["email"];
$pwd = $_POST["pwd"];

$sql = mysqli_query($conn, "SELECT count(*) as total from regis WHERE email = '".$email."' and
	pwd = '".$pwd."' and status = 1");

$row = mysqli_fetch_array($sql);

if($row["total"] > 0){

	header('location:userhome.html');
}
else{
	?><script>
		if(window.confirm('Wrong details!!!! Try again'))
		{
			window.location.href='customer-login.html';
		};</script>
	<?php
}