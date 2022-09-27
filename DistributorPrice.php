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
    <form method='post' action='DistributorSales.php'>
       <li> <input type='submit' id='sales' value='Sales' name='sales'/></li></form>
       <form method='post' action='ProductList.php'>
       <li> <input type='submit' id='list' value='List' name='list'/></li></form>
</ul>
    </div>


    <table id="fm">
		<form method=post action="DistributorPrice.php">
			<tr>
				<td>
					<label for="ids">
						Product ID
					</label>
				</td>
				<td><select name="ids" id="ids">
                <option value="maggie">--SELECT--</option>
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
			<tr><td></td><td><input type="submit" value="Distributor Sale" name="submit"/></td></tr></form>
			<?php 
			$p = $_POST['ids'];
			$q = $_POST['qty'];
            
			$amt=0;
            $o=0;
            $item="";
            if($p=="maggie"){
                $amt = $q * 20;
                $o=20;
                $item="Maggie";
            }
            else if($p=="soap"){
                $amt = $q * 25;
                $o=25;
                $item="Soap";
            }
            else if($p=="chocolate"){
                $amt = $q * 4;
                $o=4;
                $item="Chocolate";
            }
            else if($p=="honey"){
                $amt = $q * 20;
                $o=20;
                $item="Honey";
            }
			if(isset($_POST['submit'])){
			echo "<tr>
				<td><label for='price'>
						Total Price
					</label>
				</td>
				<td>$q * $o = $amt for $item
				</td>
			</tr> <form method=post action='msg.php'>
			<tr><td></td><td><input type='submit' value='Receive Payment' name='submit'/></td></tr></form>
			</form>"; }
			 ?>

			
          
		
	</table>
    
</body>
</html>