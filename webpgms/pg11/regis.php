<?php
include "connect.php";
if(isset($_POST['submit']))
{
    $name=$_POST['name'];
	$address=$_POST['address'];
    $email=$_POST['email'];
	$pwd=$_POST['pwd'];
    $number=$_POST['number'];
   
	

$sql = "INSERT INTO `regis` ( `name`,`address`,`email`,`pwd`, `number`,`status`) VALUES ( '$name','$address', '$email', '$pwd','$number','1')";
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