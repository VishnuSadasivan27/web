<?php
$cricket=array(array('sachin',200),
            array('Rohit',105),
            array('dhoni',28));
        ?>
<html>  
	<body>
		<center> 
			<table border="1">
				<tr><th>Name</th><th>Age</th></tr>
				<tr><td><?php echo $cricket[0][0] ?></td><td><?php echo $cricket[0][1] ?></td></tr>
				<tr><td><?php echo $cricket[1][0] ?></td><td><?php echo $cricket[1][1] ?></td></tr>
				<tr><td><?php echo $cricket[2][0] ?></td><td><?php echo $cricket[2][1] ?></td></tr>
			</table>
		</center> 
	</body>
</html>
