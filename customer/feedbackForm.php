<?php include '../header.php';?>
  <!-- Breadcrumbs-->
  <ol class="breadcrumb">
    <li class="breadcrumb-item">
      <a href="../index.php">Dashboard</a>
    </li>
	
    <li class="breadcrumb-item active">Feedback</li>
  </ol>
<?php 
	
    $query = "SELECT user.UserName, user.Id, user.Address, user.Phone, user.Email FROM user WHERE Role = 'Despatcher'; " or die(mysqli_connect_error());
	 $result = mysqli_query($link, $query);
	 while ($row = mysqli_fetch_array($result)){
		 
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
      <th scope="col">Despatcher Name</th>
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
            '</td><td>'   
           . $d.    
            '</td>
            <td>'   
           . $e.    
            '</td>

        </tr>
        </tr>           
        ';   
     }
    echo "</table>";
	 ?>
<form action="readFeedback.php" method="post">
<br>
	   <tr>
      <td style="vertical-align: top">
        <h5>Rank:</h5>
      </td>
      <td>
        <input type="radio" name="rank" value="1" required>1
        <input type="radio" name="rank" value="2">2
        <input type="radio" name="rank" value="3">3
        <input type="radio" name="rank" value="4">4
        <input type="radio" name="rank" value="5">5
      </td>
    </tr><br><br>
	Date:<br>
	<input type="date" name="date"><br><br>	
	Despatcher Id:<br>
	<input type="number" name="despatcher"><br><br>
  
	<br><input type="submit">
  
</form>
<?php include '../footer.php';?>