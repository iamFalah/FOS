<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Enter Your Data</title>
</head>
<body> 
<?php include 'menuFood.php'; ?>
    <?php
    $link = mysqli_connect("localhost","root","","ubung");
    
    $select = "select Id FROM restaurant JOIN product ON restaurant.Id=product.RestaurantId";
    $run = mysqli_query($link, $select);

    while($row = mysqli_fetch_array($run)){
        $Name = $_POST["Name"];
        $RestaurantID = $_POST["RestaurantID"];
        $Description = $_POST["Description"];
        $Price = $_POST["Price"];
    ?>
    
<!-- <?php

	$Name = $_POST["Name"];
    $RestaurantID = $_POST["Id"];
	$Description = $_POST["Description"];
	$Price = $_POST["Price"];

    $link = mysqli_connect("localhost","root","","ubung");
    
    $select = "select Id FROM restaurant JOIN product ON restaurant.Id=product.RestaurantId";
    $run = mysqli_query($link, $select);

    while($row = mysqli_fetch_array($run)){
        $Name = $_POST["Name"];
        $RestaurantID = $_POST["RestaurantID"];
        $Description = $_POST["Description"];
        $Price = $_POST["Price"];

	$query = "insert into Product (Id, Name, RestaurantID, Description, Price) values 
            ('', '$Name', '$RestaurantID', '$Description', '$Price')" ;

    // to run sql query in database
    $result = mysqli_query($link, $query);

    //Check whether the insert was successful or not
    if(mysqli_query($link, $query)) {
        echo("Data successfully");
    }else {
        die("Your Insert failed" . mysqli_error($link));
    }

?> -->
</body>
</html>
