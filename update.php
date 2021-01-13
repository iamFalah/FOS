
<?php include 'selectDB.php'; ?>
   
    <?php
    $submit = '';
    if (isset($_POST['submit'])) {
        $submit = $_POST["submit"];
    }
    $uid = 0;
    if (isset($_GET['id'])) {
        $uid = $_GET["id"];
    }    
    if ($submit == 'Update'){
        $uid = $_POST["id"];
        //Collect and save updateed information
       
        $name = $_POST["name"];
        $email = $_POST["email"];
        $gender = $_POST["gender"];
        $role = $_POST["role"];        
        
        $strSQL = "UPDATE users SET username='$name', email='$email', gender='$gender',role='$role' WHERE id=$uid";
       
        $result = mysqli_query($link, $strSQL);
        if($result) 
        {
            echo("Data updated successfully");
        }
        else 
        {
            die("Update failed" . mysqli_error($link));
        }
    }


    if ($uid > 0) {
        $query = "SELECT * FROM users WHERE id = $uid " or die(mysqli_connect_error());

        $result = mysqli_query($link, $query);
        if (mysqli_num_rows($result) == 1){
            $row = mysqli_fetch_assoc($result);
    ?>
    <h3>Update <?php echo $row["username"] ?> Data</h3>
    <form action="update.php" method="POST">
        <table>
            <tr>
                <td>Name:</td>
                <td><input type="text" name="name" value ='<?php echo $row["username"] ?>'></td>
            </tr>
            <tr>
                <td>Email:</td>
                <td><input type="text" name="email" value='<?php  echo $row["email"] ?>'></td>
            </tr>
            <tr>
                <td>Gender:</td>
                <td>
                    <input type="radio" name="gender" value="Male" <?php echo isChecked($row["gender"], "M")?>>Male
                    <input type="radio" name="gender" value="Female" <?php echo isChecked($row["gender"], "F")?>>Female
                </td>
            </tr>
			<tr>
                <td>Role:</td>
                <td><input type="text" name="role"   value='<?php  echo $row["role"] ?>'></td>
                    
                </td>
            </tr>
			 <tr>
                <td><input type="submit" name="submit" value="Update"></td>
                <td></td>
            </tr>
           
        </table>
        <input type="hidden" id="" name="id" value='<?php echo $row["id"]?>'>
    </form>
    <?php 
        }else{
            echo '<p style="background-color: #F0CCC4">User not found</p>';
        }
    }else{
        echo '<p style="background-color: #F0CCC4">Please provide user id</p>';
    }

    function isChecked($value, $compare){
        if ($value == $compare){
            return "checked";
        }else{
            return "";
        }
    }    

    function isSelected($value, $compare, $word = ''){
        if ($word == ''){
            $word = 'selected';
        }
        if (strpos($value, $compare) !== false){
            return $word;
        }else{
            return "";
        }
    } 
    mysqli_close($link);
    ?>
