<?php
#enter you database information(if it still default just keep it)
    $servername = 'localhost';
    $username = 'root';
    $password = '';
    #here you should enter you Database name
    $dbname = 'login-register';

    $conn = mysqli_connect($servername, $username, $password, $dbname);

    if(!$conn){
        echo('ERROR IN CONN');
    }
?>