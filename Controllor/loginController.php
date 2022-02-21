<?php

include '../Model/connecttion.php';


if(isset($_POST['login'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
    $sql = "SELECT * FROM login_acount WHERE `username` = '$username' AND `password` = MD5('$password')";
    $result = $conn->query($sql); 
    
    if($result->num_rows > 0){
        header("Location: ../pages/home.html");
    }else{
        ?>
        <!DOCTYPE html>
        <html lang="en">
        <head>
        <title>Wrong Username or Password</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
        </head>
        <body>

        <div class="container">

        <div class="alert alert-danger alert-dismissible" style="margin-top: 20%;">
            
            <strong>Worng Username or Password !</strong> Please login again <a href="../pages/login.html">Login</a>.
        </div>
        
        </div>

        </body>
        </html>


        <?php
    }
}

