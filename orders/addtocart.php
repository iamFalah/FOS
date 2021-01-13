<?php include '../header.php'; ?>

<?php
if (isset($_POST["cart"]) ) {
	$ProductId = $_POST['ProductId'];
	$Quantity = $_POST['qty'];
	$Price = $_POST['Price'];
	$total = $Quantity*$Price;
	$link = mysqli_connect("localhost","root","","ubung");
  	$query = "INSERT INTO orderdetails (ProductId, Quantity, Price) VALUES ('$ProductId', '$Quantity', '$total')";
	if (mysqli_query($link,$query)){
		echo "<script>alert('added to cart')</script>";
	  	echo "<script>window.location.href='ViewUpdateDelete.php'</script>";
	}else{
		echo"failed";
	}

	//$result = mysqli_query($conn,$query);
	//if($result>0)
	 // {
	 // echo "<script>alert('added to cart')</script>";
	//  echo "<script>window.location.href='foodMenu.php'</script>";
	//  }
	//else
	//  {
	//	echo"failed";
	//  }

}
	  
?>
<?php include '../footer.php'; ?>