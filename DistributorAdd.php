<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="index.css">
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
	
    <table id="fm">
		<form method=post action="insert.php">
			<tr>
				<td>
					<label for="ids">
						Product ID
					</label>
				</td>
				<td><select name="ids" id="ids">
                <option value="101">--SELECT--</option>
  <option value="d00001">d00001-Maggie</option>
  <option value="d00002">d00002-Shampoo</option>
  <option value="d00003">d00003-Face Wash</option>
  <option value="d00004">d00004-Five Star</option>
  <option value="d00005">d00005-Kit Kat</option>
    </select>
				</td>
			</tr>
			<tr>
				<td><label for="qty">
						Quantity
					</label>
				</td>
				<td><input type="number" id="qty" name="qty"/>
				</td>
			</tr>
            <tr>
				<td><label for="price">
						Price
					</label>
				</td>
				<td><input type="number" id="price" name="price"/>
				</td>
			</tr>
			<tr><td></td><td><input type="submit" value="Add Item" name="submit"/></td></tr></form>		
	</table>
</body>
</html>