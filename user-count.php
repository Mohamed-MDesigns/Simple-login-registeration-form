<?php
    #This command includes the database connection
    include("conn.php") ;

    #This command counts the number of people registered on the site

    $nubusers = "SELECT * FROM `users` ORDER BY id DESC LIMIT 1;";

    $resualt = mysqli_query($conn,$nubusers) ;

    if($resualt){
        while($row = mysqli_fetch_array($resualt)){
            ?>
            <p><?php echo $row['id'];?> Users</p>
            <?php
        };
    }
?>
