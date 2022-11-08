<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="index.css">
    <style>
		
td, th {
    border: 1px solid #000000;
    text-align: center;
    padding: 8px;
  }
  
  tr:nth-child(even) {
    background-color: #dddddd;
  }
	</style>
</head>
<body>
    

<div id="leftCol">
    
<ul id="verBar">
    <form method=post action="product.php" >
  <li><input type="submit" id="product" value="Product"  name="product" /></li></form>
  <form method=post action="distributor.php" >
  <li><input type="submit" id="distributor"  name="distributor" value="Distributor"/></li></form>
</ul>
</div>
</div>

<div id='rightCol'>
    <ul id="bar">
    <form method='post' action='DistributorAdd.php'>
       <li> <input type='submit' id='add' value='Insert' name='add'/></li></form>
       <form method='post' action='DistributorSales.php'>
       <li> <input type='submit' id='sales' value='Sales' name='sales'/></li></form>
       <form method='post' action='DistributorList.php'>
       <li> <input type='submit' id='list' value='List' name='list'/></li></form>
</ul>
    </div>
<?php   
$con = mysqli_connect("localhost","root","") or die(mysql_error());//establish connection
mysqli_select_db($con,"osp_project") or die(mysql_error()); //selecting database
$query = "select dist_id,Name,quantity,price from distributor";
$result_set = mysqli_query($con,$query);
echo "<table 
border=1><tr><th>ID</th><th>Name</th><th>Quantity</th><th>Price</th></tr>";
while($rec = mysqli_fetch_assoc($result_set)){
echo "<tr><td>".$rec['dist_id']."</td>";
echo "<td>".$rec['Name']."</td>";
echo "<td>".$rec['quantity']."</td>";
echo "<td>".$rec['price']."</td>";
echo"</tr>";
}
echo"</table>";
mysqli_close($con);
?>
</body>
</html>