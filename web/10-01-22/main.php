
<html>
<body>
<table>
<tr>
<th>customer_ID<th>
<th>first_Name<th>
<th>last_Name<th>
</tr>
<?php
include('connection.php');
$sql="SELECT *FROM  tbl_customer";
$res=mysqli_query($con,$sql);
if($res)
{
   while($row=mysqli_fetch_row($res))
    { 
     ?>
    <tr>
    <td>
       <?php echo  $row[0];?>
     </td>     
     <td>
      <?php echo  $row[1];?>
     </td>  
     <td>
        <?php echo  $row[2];?>
    </td></tr>
<?php
   }
}
?>
</table>
</body>
</html>