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
    <form method='post' action='ProductPurchase.php'>
       <li> <input type='submit' id='purchase' value='Purchase' name='purchase'/></li></form>
       <form method='post' action='ProductList.php'>
       <li> <input type='submit' id='list' value='List' name='list'/></li></form>
</ul>
    </div>


    <table id="fm">
		<form method=post action="ProductPrice.php">
			<tr>
				<td>
					<label for="ids">
						Product ID
					</label>
				</td>
				<td><select name="ids" id="ids">
                <option value="d00001">--SELECT--</option>
  <option value="d00001">d00001-Maggi</option>
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
			<tr><td></td><td><input type="submit" value="Product Purchase" name="submit"/></td></tr></form>
			

			
          
		
	</table>
    
</body>
</html>