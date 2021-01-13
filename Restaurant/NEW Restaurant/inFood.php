<?php include '../../header.php'; ?>

<title>View Food Data</title>
<h1 align="center">View Food Data</h1>
<body>
    <?php include 'menuFood.php';?><br>
    <form action="inFood.php" method="POST">  
        <table>
            <tr>
                <td>Food Name:</td>
                <td><input type="text" name="Name"></td>
            </tr>
            <tr>
                <td><input type="submit" name="submit" value="Submit"></td>
<!--                 <td><form action="menuFood.php" method="post">
                <button class="v_btn" type="submit">Go to Main Page</button>
                </form></td> -->
            </tr>
        </table>
    </form> 
<br>
<table class="table">
  <thead class="thead-dark">
      <tr>
          <th scope="col">Food Name</th>
          <th scope="col">Description</th>
          <th scope="col">Price</th>
          <th scope="col">Restaurant Name</th>
      </tr>
  </thead>
  <tbody>
    <tr>
    <?php
    if (isset($_POST["submit"]) ) {

    $Name = $_POST['Name'];
    $link = mysqli_connect("localhost","root","","ubung");
    $select = "select * FROM product JOIN restaurant ON product.RestaurantId=restaurant.Id WHERE Name='$Name'";
    $run = mysqli_query($link, $select);

    while($row = mysqli_fetch_array($run)){
        $Name           = $row['Name'];
        $Description    = $row['Description'];
        $RName          = $row['RName'];
        $Price          = $row['Price'];
    ?>
      
        <td><?php echo $Name;?></td>
        <td><?php echo $Description;?></td>
        <td><?php echo $Price;?></td>
        <td><?php echo $RName;?></td>
    </tr>
  </tbody><?php }  ?>  
</table><?php }  ?>
</body>
<?php include '../../footer.php'; ?>

