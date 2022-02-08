<?php
$con=mysqli_connect("localhost","root","","bottlewater");
if($con===false)
{
die("ERROR:could not connect.".mysqli_connect_error());
}
//echo "connection succesfull";
?>