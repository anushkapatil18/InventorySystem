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

  
    <?php 
        if(isset($_POST['submit']) && $_POST['ids']!="" && $_POST['qty']!="" && $_POST['price']!=""){
            echo "<a id='success'>Success</a>";
        }else{
            echo "<a id='error'>Not Success</a>";
        }
    ?>
</body>
</html>