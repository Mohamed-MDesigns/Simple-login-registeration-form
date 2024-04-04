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

    <title>Register</title>
</head>

<body>
    <div class="back mt-4 mb-4">
        <h6><a href="index.php" class="p-3">Back to home screen</a></h6>
    </div>
    <div class="d-flex justify-content-center">
        <span class="border border-primary p-3 px-5 py-3 rounded-3">
        <br>
    <form action="register_process.php" method="post">
        <h2 class="mb-3">Register</h2>
        <label for="username">Username:</label><br>
        <input type="text" id="username" name="username" required><br><br>
        <label for="password">Password:</label><br>
        <input type="password" id="password" name="password" required><br><br>
        <div class="con" class="d-flex">
            <input type="submit" class="mb-3 btn btn-primary" value="Register">
            <a href="login.php" class="link-secondary link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover">login</a>
        </div>
        </form>
    </span>
    </div>








    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>