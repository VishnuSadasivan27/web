<?php
include "bookconnect.php";
if(isset($_POST['submit']))
{	
    $ano=$_POST['ano'];
	$title=$_POST['title'];
	$author=$_POST['author'];
	$edition=$_POST['edition'];
	$publisher=$_POST['publisher'];
	
	
	
$sql = "INSERT INTO `books` ( `ano`,`title`, `author`, `edition`, `publisher`) VALUES ( '$ano','$title', '$author', '$edition', '$publisher')";
$result=$conn->query($sql);
if($result==TRUE)
{
	echo "new record created successfully";

}
else
{
	echo "Error".$sql."<br>".$conn->error;
}
$conn->close();
}
?>
<html>
	<head>
		<title>newcustomer</title>
		    <style>

	              
					  .txt{
					  width:90%;
					  height:5%;
					  border:1px solid brown;
					  border-radius:05px;
					  padding:20px 15px 20px 15px;
					  margin:10px 0px 15px 0px;
					  }
					  .text{
					  width:50%;
					  height:5%;
					  border:1px solid brown;
					  border-radius:05px;
					  padding:20px 15px 20px 15px;
					  margin:10px 0px 15px 0px;
					  }
					  
					  
                 
            </style>
	</head>
		
		<body style="background-color:aqua;border: 10px solid black;">
					   <h1 style="text-align:center;font-size:40px">ADD BOOK </h1>
					   <form action="regis.php" method="POST">
							<table border="0" align="center"cellspacing="20" border-spacing:30px>
													  <tr>
														 <td><p>BNO:</td><td></td><td><input type="text" size="10" class="txt" name="bno"  required></p></td><tr></br>
													  
													  <tr>
														<td>TITLE:</td><td></td><td><textarea type="text" rows="5" cols="10" class="txt"  required></textarea></p><tr></br>
													 
													 <tr>
														<td>AUTHOR:</td><td></td><td><input type="text" size="10" class="txt" required></p></td></tr></br>
													 
													  <tr>
													   <td>EDITION:</td><td></td><td><input type="text" size="10" class="txt"  required></p></td></tr></br>
													 
													  <tr>
														<td>PUBLISHER:</td><td></td><td><input type="text" size="20" class="txt"  required></p></td></tr></br>
													 <tr>
													 </tr>
													 <tr>
													 </tr>
													<tr>
													   <td ></td></td><td><td><input type="submit"  class="text" name="submit" value="submit"/>
													</tr>
                                                
                             </table>
			        </form>
	</body>
            </html>
