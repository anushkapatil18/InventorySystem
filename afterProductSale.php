<?php
$con = mysqli_connect("localhost","root","");
mysqli_select_db($con,"osp_project"); 
$id = $_POST['ids'];
$quantity = $_POST['qty'];

$query = "UPDATE product SET p_qty = p_qty-'$quantity' WHERE prod_id='$id'";

mysqli_query($con,$query);//query execution
$count1 = mysqli_affected_rows($con);
if ($count1 ==1 )
echo "purchase has been made"; //display message to user
else
echo "Unsuccessfull",mysqli_error($con);
mysqli_close($con);
?>