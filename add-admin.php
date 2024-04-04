<?php
    #This command includes the database connection
    include("conn.php") ;

#This command change the users roles

#  1 = user role
#  2 = Admin role

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];

    $check_user = "SELECT * FROM users WHERE username = '$username'";
    $result = mysqli_query($conn , $check_user);
    if ($result->num_rows > 0) {

        $update_query = "UPDATE users SET role_id = 2 WHERE username = '$username'";
        if ($conn->query($update_query) === TRUE) {
            header("Location: dashboard.php?admindone");
        } else {
            header("Location: dashboard.php?adminerror"). $conn->error;
        }
    } else {
        
        header("Location: dashboard.php?adminnfound");
    }
}
?>