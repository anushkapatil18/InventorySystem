<?php
$con = mysqli_connect("localhost","root","");
mysqli_select_db($con,"osp_project"); 
$id = $_POST['ids'];
$quantity = $_POST['qty'];
$date = $_POST['date'];

$query = "UPDATE product SET p_qty = p_qty-'$quantity', p_date='$date' WHERE prod_id='$id'";

mysqli_query($con,$query);//query execution
$count1 = mysqli_affected_rows($con);
if ($count1 ==1 )
echo "<HTML>
<body bgcolor='brown' align='center'>
<h3 style='color:white;'> Product is sold</h3></body></html>";
else
echo "Unsuccessfull",mysqli_error($con);
mysqli_close($con);
?>