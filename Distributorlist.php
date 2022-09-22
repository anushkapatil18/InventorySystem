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
    <form method='post' action='DistributorPurchase.php'>
       <li> <input type='submit' id='purchase' value='Purchase' name='purchase'/></li></form>
       <form method='post' action='DistributorSales.php'>
       <li> <input type='submit' id='sales' value='Sales' name='sales'/></li></form>
       <form method='post' action='DistributorList.php'>
       <li> <input type='submit' id='list' value='List' name='list'/></li></form>
</ul>
    </div>
    <table id="fm">
  <tr>
    <th>ID</th>
    <th>Name</th>
    <th>Quantity</th>
	<th>Price</tr>
  </tr>
  <tr>
    <td>101</td>
    <td>Maggie</td>
    <td>40</td>
	<td>20</td>
  </tr>
  <tr>
  	<td>102</td>
    <td>Soap</td>
    <td>100</td>
	<td>25</td>
  </tr>
  <tr>
  <td>103</td>
    <td>Honey</td>
    <td>90</td>
	<td>4</td>
  </tr>
  <tr>
  <td>105</td>
    <td>Chocolate</td>
    <td>500</td>
	<td>20</td>
  </tr>
</table>
</body>
</html>