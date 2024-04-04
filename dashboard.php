<?php
    #This command includes the database connection
    include("conn.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <title>Dashboard</title>
</head>
<body>
    <div class="content p-3">
        <div class="header-admin border-bottom border-primary">
        
            <h6><a href="index.php">Back to home screen</a></h6>
    
            <h3 class="mb-3">Welcome to admin page</h3>
    
        </div>

        <div class="user-section pt-3">

            <h4>User counter</h4>
            
            <p>Here down bellow you will see the people that register to your website</p>

            <p class="text-primary">There is </p>

            <p class="text-success-emphasis"><?php include("user-count.php")?></p>
        </div>

        <div class="manage-admins">
            

            <h4 class="header-admin border-bottom border-primary pb-3">Manage Admin</h4>
            <p>Here you can add another admin ( should be register in the website )</p>
            <?php
                if(isset($_GET["admindone"])){
                    echo '<div class=" mt-3  mx-3 alert alert-success alert-dismissible fade show" role="alert"><strong>Done!</strong> User role updated successfully .<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>';
            }
            ?>
            <?php
                if(isset($_GET["adminerror"])){
                    echo '<div class=" mt-3  mx-3 alert alert-danger alert-dismissible fade show" role="alert"><strong>Error!</strong> Error updating user role.<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>';
            }
            ?>
            <?php
                if(isset($_GET["adminnfound"])){
                    echo '<div class=" mt-3 mx-3 alert alert-warning alert-dismissible fade show" role="alert"><strong>Error!</strong> User not found<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>';
            }
            ?>
            <form action="add-admin.php" method="post">
                <label for="addduser">
                <h6 class="pb-0.2">Add admin</h6>     <input type="text" id="username" placeholder="For example : Michel " class="form-control" name='username'>
                </label>
                <button type="submit" class="btn btn-outline-secondary" >Add</button>
            </form>
            <br>
        </div>
    </div>
    
    
    
    

    


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>
</html>