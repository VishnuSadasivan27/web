<?php
include "connect.php";
$sql="SELECT * FROM mark";
$result=$connect->query($sql);
?>
<html>
<head>
		<title>registration</title>
		
	</head>
	<body>
	    <center> <h1> view marks</h1></center>
		 <table border="6" cellpadding="10px" cellspacing="5px" align="center" bgcolor="red">
		 <tr>
		 <th>Id</th>
		 <th>Register number</th>
		  <th>Name</th>
		  <th>Code</th> 
		  <th>course name</th>
		   <th>Mark</th>
		   </tr>
		   <?php
		   
		   if($result->num_rows >0)
		   {
			   while($row=$result->fetch_assoc())
			   {
				    ?>
				   <tr>
				   <td><?php echo $row['id'];?></td>
				    <td><?php echo $row['regnum'];?></td>
					 <td><?php echo $row['name'];?></td>
					  <td><?php echo $row['code'];?></td>
					   <td><?php echo $row['c_name'];?></td>
					     <td><?php echo $row['mark'];?></td>
		
				   </tr>
				   <?php
				   }
				   }
				   ?>
				   </table>
				   </body>
				   </html>
				   
		  