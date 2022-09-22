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
       <form method='post' action='ProductSales.php'>
       <li> <input type='submit' id='sales' value='Sales' name='sales'/></li></form>
       <form method='post' action='ProductList.php'>
       <li> <input type='submit' id='list' value='List' name='list'/></li></form>
</ul>
    </div>

    <table id="fm">
		<form method=post action="msg.php">
			<tr>
				<td>
					<label for="ids">
						Product ID
					</label>
				</td>
				<td><select name="ids" id="ids">
                <option value="10">--SELECT--</option>
  <option value="maggie">101-Maggie</option>
  <option value="soap">102-Soap</option>
  <option value="chocolate">103-Chocolate</option>
  <option value="honey">104-Honey</option>
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
            <tr><td></td><td><input type="submit" value="Product Sale" name="submit"/></td></tr>
		</form>
	</table>
</body>
</html>