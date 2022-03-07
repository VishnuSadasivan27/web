<?php
include "connect.php";
$sql = " SELECT * FROM `book` ";
$result=$conn->query($sql);
?>

<html>
<head>
<title>booking page</title>
</head>
<body>
<div class="container">
<h2 align="center">BOOK TABLE</h2>
<center>
<table border="1" width="50%" height="30%" bgcolor="white">
<tr align="center">
<th>ID:</th>
<th>DELIVARY MODE:</th>
<th>PAYMENT TYPE</th>
<th>PAYMENT MODE</th>
</tr>
<?php
if($result->num_rows>0)
{
    while($row=$result->fetch_assoc())
    {
?>
<tr align="center">
<td><?php echo $row['b_id'];?></td>
<td><?php echo $row['dmode'];?></td>
<td><?php echo $row['ptype'];?></td>
<td><?php echo $row['pmode'];?></td>

<?php
    }
}
?>
</table>
<center>
</html>