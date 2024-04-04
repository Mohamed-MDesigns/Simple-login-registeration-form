<?php
#This command includes the database connection
include("conn.php");
session_start();
#This comand bellow will check for user informations
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    $stmt = $conn->prepare("SELECT id, username, password, role_id FROM users WHERE username = ?");
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();
    $user = $result->fetch_assoc();
    
    if ($user && password_verify($password, $user['password'])) {
        $_SESSION['user_id'] = $user['id'];
        $_SESSION['username'] = $user['username'];
        $_SESSION['role'] = ($user['role_id'] == 1) ? 'user' : 'admin'; 
        
        if ($_SESSION['role'] === 'admin') {
            header("Location: dashboard.php?admin");
        } else {
            header("Location: form.php");
        }
        exit();
    } else {
        
        header("Location: login.php?error=1");
        exit();
    }
}
?>
