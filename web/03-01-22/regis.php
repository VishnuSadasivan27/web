<?php
include "connect.php";
if(isset($_POST['submit']))
{
    $name=$_POST['name'];
	$address=$_POST['address'];
    $email=$_POST['email'];
	$pwd=$_POST['pwd'];
    $number=$_POST['number'];
    $dmode=$_POST['dmode'];
	$quantity=$_POST['quantity'];
	$ptype=$_POST['ptype'];
	$pmode=$_POST['pmode'];
	

$sql = "INSERT INTO `regis` ( `name`,`address`,`email`,`pwd`, `number`,`dmode`,`quantity`,`ptype`,`pmode`,`status`) VALUES ( '$name','$address', '$email', '$pwd','$number', '$dmode','$quantity','$ptype','$pmode','1')";
$result=$conn->query($sql);
if($result==TRUE)
{
    echo "new record created successfully";
	header('location:customer-login.html');
}
else
{
    echo "Error".$sql."<br>".$conn->error;
}
$conn->close();
}
?>