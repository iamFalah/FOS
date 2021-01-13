<?php include '../../header.php'; ?>
<title>Menu Table</title>

<!--div align="center">[<a href="orderMain.php">Previous Page</a>]</div-->
<h1 align="center">Menu Table</h1>
<?php 

$con = mysqli_connect('localhost','root','');
 
 if (!$con)
 {
	 echo 'No connection';
 }

if (!mysqli_select_db($con,'UBung'))
{
	echo 'database not selected';
	
}
	//if(!empty($_POST["del_id"])){
		//$id = $_POST["id"];
		//$query = mysqli_query($con,"DELETE FROM Product WHERE Id = '$id' ") or die(mysqli_error($con));
		//print '<script type="text/javascript">'; 
		//print 'alert("Your Order has been disaproved!")'; 
		//print '</script>'; 			
		
	//}
	
function display(){
		global $query,$con;
		$query = "select * FROM product JOIN restaurant ON product.RestaurantId=restaurant.Id";
		if ($result = $con->query($query)) {
			while ($row = $result->fetch_assoc()) {
				$id = $row["Id"];
				$Name = $row["Name"];
				$Description = $row["Description"];
				$Price = $row["Price"];
				$RName = $row["RName"];
							
				echo '<tr> 
						<td>'.$id.'</td> 
						<td>'.$Name.'</td> 
						<td>'.$Description.'</td> 
						<td>'.$Price.'</td> 
						<td>'.$RName.'</td>
						
					</tr>';
			}
			$result->free(); 
		}
		else{
					print '<script type="text/javascript">'; 
					print 'alert("Data not exist on following table.")'; 
					print '</script>'; 			
		}

	}
    
?>
<body>


<h5>
<!--bostrap-->
<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">Description</th>
      <th scope="col">Price</th>
      <th scope="col">Restaurant Name</th>
    </tr>
  </thead>
    <tr>
	    <th>Id </th>
		<th>Name</th>
		<th>Description</th>
	    <th>Price</th>
		<th>Restaurant Name</th>
  	</tr>
  <tr>
		<?php display();?>
  </tr>
</table>
</body>

<?php include '../../footer.php'; ?>





