<?php include '../header.php';?>
<?php
    $query = "SELECT * FROM Announcement" or die(mysqli_connect_error());
    $result = mysqli_query($link, $query);
?>

<div class="card mb-3">
    <div class="card-header">
        <i class="fas fa-table"></i>
        Announcements</div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th style="width: 11%">Date</th>
                        <th style="width: 30%">Announcements Name</th>
                        
                        <th>Announecement Poster</th>
                        <th>Announcements Details</th>
                        
                    </tr>
                </thead>
                
                <tbody>
                    <?php while ($row = mysqli_fetch_array($result)) { ?>
                    <tr>
                        <td><?php echo $row["ADate"]?></td>
                        <td><?php echo $row["Title"]?></td>
                        
                        <td><center><img src="/<?php echo ROOT ?>/uploads/<?php echo $row["Image"]?>" class="img-thumbnail" alt="Image" width="96" height="65"></center></td>
                        <td><center><button class="btn btn-primary" onclick="window.location.href = 'details.php?id=<?php echo $row["Id"] ?>';">Details</button></center></td>
                    </tr>
                    <?php }?>
                </tbody>
            </table>
        </div>
    </div>
    <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
</div>

<?php 
    //Check whether the insert was successful or not
    if (!$result) {
        ErrorMessage("Query failed" . mysqli_error($link));
    }
    //Close the database connection
    mysqli_close($link);
?>

<?php include '../footer.php';?>