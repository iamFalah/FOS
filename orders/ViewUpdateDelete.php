<?php include '../header.php'; ?>
<title>Cart</title>

<div align="center">[<a href="foodMenu.php">Previous Page</a>]
<h1 align="center">Cart</h1>

<html>
<body>
<center>
	<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Order ID</th>
      <th scope="col">Food Name</th>
      <th scope="col">Quantity</th>
      <th scope="col">Price</th>
      <th></th>
    </tr>
  </thead>
  <tbody>
    <tr>
    <?php
	$link = mysqli_connect("localhost","root","","ubung");
	//$link = mysqli_connect("localhost","ca17100","ca17100","ca17100");
	//$link = mysqli_connect("localhost", "root", "", "", "3306");
	$select = "select orderdetails.OrderId, product.Name, orderdetails.Quantity, orderdetails.Price FROM orderdetails JOIN product ON orderdetails.ProductId=product.Id";
	$run = mysqli_query($link, $select);

	while($row = mysqli_fetch_array($run)){
		$OrderId	= $row['OrderId'];
		$Name    	= $row['Name'];
		$Quantity	= $row['Quantity'];
		$Price		= $row['Price'];
	?>
      
      <td><?php echo $OrderId;?></td>
      <td><?php echo $Name;?></td>
      <td><?php echo $Quantity;?></td>
      <td><?php echo $Price;?></td>
    
    <form action="update.php" method="post">
	<!--td align="center">
		<input type="hidden" name="OrderId" value=<?php echo $OrderId; ?> >
		<input type="hidden" name="Price" value=<?php echo $Price; ?> >
		<input type="hidden" name="Quantity" value=<?php echo $Quantity; ?> >
		<input type="number" name = "qty" placeholder="0">
		<input type="submit" value="Update"></td-->
	</form>
		<form action="delete.php" method="post">
			<input type="hidden" name="OrderId" value=<?php echo $OrderId; ?> >
			<td align="center"><input type="submit" name = "Delete" value="Delete"></td>
		</form>
	</tr><?php }  ?>
  </tbody>
</table>
 <br>
<form action="selection.php" method="post">
<button class="payment" type="submit">Select Despatcher</button>
</form>
<br>
<form action="foodMenu.php" method="post">
<button class="v_btn" type="submit">Go to Main Page</button>
</form>
</center>
</body>
</html>
<?php include '../footer.php'; ?>