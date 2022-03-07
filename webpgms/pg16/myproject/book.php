<?php
include "connect.php";
if(isset($_POST['submit']))
{
    $dmode=$_POST['dmode'];
	$ptype=$_POST['ptype'];
	$pmode=$_POST['pmode'];
   
	

$sql = "INSERT INTO `book` ( `dmode`,`ptype`,`pmode`) VALUES ( '$dmode','$ptype', '$pmode')";
$result=$conn->query($sql);
if($result==TRUE)
{
   
		           ?>
					<script>
					if(window.confirm('booking succesully done '))
					{
						window.location.href='userhome.html';
					};</script>
					<?php
}
else
{
    echo "Error".$sql."<br>".$conn->error;
}
$conn->close();
}
?>