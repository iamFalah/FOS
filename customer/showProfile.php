
<?php include '../header.php';
$a = $_SESSION['username'];?>
<?php CheckRole('Customer') ?>
  <!-- Breadcrumbs-->
  <ol class="breadcrumb">
    <li class="breadcrumb-item">
      <a href="../index.php">Dashboard</a>
    </li>
  
    <li class="breadcrumb-item active">Profile</li>
  </ol>

<h1 align="center">Customer Profile</h1>
  
  <?php
   //SQL query
    $query = "SELECT * FROM user where username = '$a'; " or die(mysqli_connect_error());

    $result = mysqli_query($link, $query);

    //Loop the recordset $rs
    echo "<table border='1'>";

    while ($row = mysqli_fetch_array($result)) {

       $a = $row["Id"];
       $b = $row["UserName"];
       $c = $row["Address"];
       $d = $row["Phone"];
       $e = $row["Email"];

        echo '
  
    <!--bostrap-->
   <table class="table">
   <thead class="thead-dark">
   <tr>
      <th scope="col">Id</th>
      <th scope="col">Username</th>
      <th scope="col">Address</th>
      <th scope="col">Phone</th>
      <th scope="col">Email</th>
          <tr>   
            <td>'  
           . $a.   
            '</td>
            <td>'   
           . $b.    
            '</td>
            <td>'  
           . $c.   
            '</td>
            <td>'  
           . $d.   
            '</td> 
            <td>'  
           . $e.   
            '</td> 
           



        </tr>
     <tr>
            <td style="background-color:white">
                <button onclick="window.location.href = \'updateCustomer.php?id=' . $row["Id"] . '\';">Edit</button>
            </td>
           
        </tr>                 
        <tr>
            <td colspan = "2" style="background-color:white">&nbsp;</td>
        </tr>           
        ';   
     }
    echo "</table>";
  ?>
  <?php include '../footer.php';?>
  




  
  

