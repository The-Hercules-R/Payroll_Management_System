<?php
    $serverName = "localhost";
    $username = "root";
    $password = "";
    $database = "payroll_database";
    
    // Create connection
    $conn = new mysqli($serverName, $username, $password, $database);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }


?>