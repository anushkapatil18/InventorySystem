<?php
$con = mysqli_connect("localhost","root","");
mysqli_select_db($con,"osp_project"); 
$id = $_POST['ids'];
$quantity = $_POST['qty'];

$query = "UPDATE product SET p_qty = p_qty+'$quantity' WHERE prod_id='$id'";

mysqli_query($con,$query);//query execution
$count1 = mysqli_affected_rows($con);


//echo "<a href =\"DistributorAdd.php\"> Want to Insert one more click here </a>";


$query = "UPDATE distributor SET quantity = quantity-'$quantity' WHERE dist_id='$id'";

mysqli_query($con,$query);//query execution
$count2 = mysqli_affected_rows($con);
if ($count1 ==1 and $count2==1)
echo "<HTML>
<body bgcolor='brown' align='center'>
<h3 style='color:white;'>purchase has been made</h3></body></html>";
else
echo "Unsuccessfull",mysqli_error($con);
mysqli_close($con);// connection closing
//echo "<a href =\"DistributorAdd.php\"> Want to Insert one more click here </a>";

 ?>