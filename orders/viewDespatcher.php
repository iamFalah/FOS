<?php include '../header.php'; ?>
<title>Despatcher List</title>

<!--div align="center">[<a href="orderMain.php">Previous Page</a>]</div-->
<h1 align="center">Despatcher List</h1>

<!--bostrap-->
<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">Address</th>
      <th scope="col">Phone</th>
      <th scope="col">Email</th>
    </tr>
  </thead>
  <tbody>
    <tr>
    <?php
	$link = mysqli_connect("localhost","root","","ubung");
	//$link = mysqli_connect("localhost", "root", "", "", "3306");
	$select = "select * from user WHERE Role='Despatcher' ";
	$run = mysqli_query($link, $select);

	while($row = mysqli_fetch_array($run)){
		$Id 			= $row['Id'];
		$Name			= $row['UserName'];
		$Address    	= $row['Address'];
		$Phone			= $row['Phone'];
		$Email			= $row['Email'];
	?>
      
      <td><?php echo $Id;?></td>
      <td><?php echo $Name;?></td>
      <td><?php echo $Address;?></td>
      <td><?php echo $Phone;?></td>
      <td><?php echo $Email;?></td>
    </tr>
  </tbody><?php }  ?>
</table>

<form action="orderMain.php" method="post">
<!--button class="v_btn" type="submit">Go to Main Page</button-->
</form>
</center>
</body>
</html>
<?php include '../footer.php'; ?>