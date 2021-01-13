<?php include '../../header.php'; ?>
<title>View Food Data</title>

<!--div align="center">[<a href="orderMain.php">Previous Page</a>]</div-->
<h1 align="center">View Food Data</h1>

<body>
    <?php include 'menuFood.php';?>
    <form action="readFoodForm.php" method="POST">  
        <table>
            <tr>
                <td>Food Name:</td>
                <td><input type="text" name="fName"></td>
            </tr>
            <tr>
                <td>Description:</td>
                <td><input type="text" name="Description"></td>
            </tr>
            <tr>
                <td>Price:</td>
                <td><input type="floatval" name="Price"></td>
            </tr>
            <tr>
                <td>Restaurant Name:</td>
                <td><select name="RName" class="RName">
                        <option value="0">Select Restaurant</option>
 <!--                        <input type="text" name="RName"> -->
                            <?php 
                            $link = mysqli_connect("localhost","root","","ubung");
                            $select = "select Id, RName FROM restaurant";

                            $sql = mysqli_query($link, $select);
                            while($row=mysqli_fetch_array($sql))
                            {
                            echo '<option value="1"> <column value="'.$row['Id'].'"> </column> 
                            <column value="'.$row['RName'].'"></column>
                            '.$row['Id'].''.$row['RName'].'</option>';
                            } ?> 
                    </select>

            </tr>
            <tr>
                <td><input type="submit" name="submit" value="Submit"></td>
                <td><form action="orderMain.php" method="post">
                <button class="v_btn" type="submit">Go to Main Page</button>
                </form></td>
            </tr>
        </table>
    </form>
</body>
<?php include '../../footer.php'; ?>

