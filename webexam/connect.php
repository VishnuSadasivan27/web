<?php
$connect=new mysqli("localhost","root","","student");
if($connect->error)
{
	echo("error".$connect->error);
}

?>