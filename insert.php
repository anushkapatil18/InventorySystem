<?php
$con = mysqli_connect("localhost","root","");
mysqli_select_db($con,"osp_project"); 
$id = $_POST['ids'];
$quantity = $_POST['qty'];
$price = $_POST['price'];

$query = "UPDATE distributor SET quantity = quantity+'$quantity', price= '$price' WHERE dist_id='$id'";

mysqli_query($con,$query);//query execution
$count = mysqli_affected_rows($con);
if ($count ==1)
echo "<HTML>
<body bgcolor='brown' align='center'>
<h3 style='color:white;'>product has been added</h3></body></html>";
else
echo "Record not inserted- ",mysqli_error($con);
mysqli_close($con);// connection closing
//echo "<a href =\"DistributorAdd.php\"> Want to Insert one more click here </a>";
 ?>