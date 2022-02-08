<?php
include "connect.php";
$sql = " SELECT * FROM `regis` WHERE status = 1" ;
$result=$conn->query($sql);
?>

<html>
<head>
<title>view page</title>
</head>
<body>
<div class="container">
<h2 align="center">CUSTOMER DETAILS</h2>
<center>
<table border="1" width="50%" height="30%" bgcolor="white">
<tr align="center">
<th>ID</th>
<th>Name</th>
<th>Address</th>
<th>Email</th>
<th>Phone</th>
<th>Delivary mode</th>
<th>Payment type</th>
<th>Payment mode</th>
<th>DELETE</th>
<th>UPDATE</th>
</tr>
<?php
if($result->num_rows>0)
{
    while($row=$result->fetch_assoc())
    {
?>
<tr align="center">
<td><?php echo $row['Id'];?></td>
<td><?php echo $row['name'];?></td>
<td><?php echo $row['address'];?></td>
<td><?php echo $row['email'];?></td>
<td><?php echo $row['number'];?></td>
<td><?php echo $row['dmode'];?></td>
<td><?php echo $row['ptype'];?></td>
<td><?php echo $row['pmode'];?></td>
<td><a href="delete.php?Id=<?php echo $row['Id'];?>">Delete</a></td>
<td><a href="update.php?Id=<?php echo $row['Id'];?>">Edit</a></td>

<?php
    }
}
?>
</table>
<center>
</html>