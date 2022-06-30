<?php
    $dividends = $_POST['dividends'];

    // Database Connection 
    $conn = new mysqli('localhost', 'root', '9Detroit@', 'test');
    if($conn->connect_error) {
        die('Connection Failed : '.$conn->connect_error);
    }
    else {
        $stmt = $conn->prepare("insert into ");
    }
?>