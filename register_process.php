<?php
    #This command includes the database connection
    include("conn.php");
?>
<?php
# This command bellow will register new user to the Database
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT); 
    

    $stmt = $conn->prepare("INSERT INTO users (username, password, role_id) VALUES (?, ?, 1)");
    $stmt->bind_param("ss", $username, $password);
    
    if ($stmt->execute()) {
        header("Location: login.php");
        exit();
    } else {
        echo "Registration failed. Please try again.";
    }
}
?>
