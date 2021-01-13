<?php include '../header.php'; ?>
<title>Despatcher</title>

<div align="center">[<a href="ViewUpdateDelete.php">Previous Page</a>]
<h1 align="center">Despatcher</h1>

<html>
<body>
<center>
	<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">Address</th>
      <th scope="col">Phone</th>
      <th scope="col">Email</th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>
    <tr>
    <?php
	$link = mysqli_connect("localhost","root","","ubung");
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
      <form action="selection2.php" method="post">
		<td align="center">
		<input type="hidden" name="Id" value=<?php echo $Id; ?> >
		<input type="submit" value="select"></td>
	  </form>
    </tr>
  </tbody><?php }  ?>
	</table>
<br>
<form action="foodMenu.php" method="post">
<button class="v_btn" type="submit">Go to Main Page</button>
</form>
</center>
</body>
</html>
<?php include '../footer.php'; ?>