<?php

    //destroy the session
    session_start();
    session_destroy();

    function alert ($msg,$type) {
        echo "
        <div class='alert $type' id='alert'>
            <strong>$msg</strong>
            <span class='bi bi-x-circle-fill closebtn' id='closebtn'></span>  
        </div> ";

        //remove the alert after 3 seconds
        echo "
        <script>
            setTimeout(function(){
                document.getElementById('alert').style.display = 'none';
            }, 3000);
        </script>
        ";
    }

    //database connection
    include_once 'db_config.php';

    if(isset($_POST['register'])){
        $email = $_POST['email'];
        $username = $_POST['username'];
        $password = $_POST['password'];
        $confirm_password = $_POST['confirm_password'];

        //email validation
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
            alert("Invalid Email","error");
        }

        //check if the email is already registered
        else if(mysqli_num_rows(mysqli_query($conn, "SELECT email FROM user_system WHERE email = '$email'")) > 0){
            alert("Email already registered","error");
        }

        //username must contain a letter and a number
        else if(!preg_match('/[A-Za-z].*[0-9]|[0-9].*[A-Za-z]/', $username)){
            alert("Username must contain a letter and a number","error");
        }

        //check if the username is already registered
        else if(mysqli_num_rows(mysqli_query($conn, "SELECT username FROM user_system WHERE username = '$username'")) > 0){
            alert("Username already registered","error");
        }

        //password must contain a letter and a number and must be 8 characters long
        else if(!preg_match('/[A-Za-z].*[0-9]|[0-9].*[A-Za-z]/', $password)){
            alert("Password must contain a letter and a number","error");
        }


        else if($password == $confirm_password){
            $password = md5($password);

            $sql = "INSERT INTO user_system (email, username, password) VALUES ('$email', '$username', '$password')";
            $result = mysqli_query($conn, $sql);

            if($result){
                alert("Registration Successful","success");
            }else{
                alert("Registration Failed","error");
            }
        }else{
            alert("Password does not match","error");
        }
    }


    if(isset($_POST['login'])){
        $username = $_POST['username'];
        $password = $_POST['password'];

        $password = md5($password);

        $sql = "SELECT * FROM user_system WHERE username = '$username' AND password = '$password'";
        $result = mysqli_query($conn, $sql);

        if(mysqli_num_rows($result) > 0){
            alert("Login Successful","success");
            session_start();
            $_SESSION['username'] = $username;
            header("location: welcome.php");
        }else{
            alert("Login Failed","error");
        }
    }



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>


    <div class="background-img"></div>


    <div class="container">
        <div class="main-menu">
            <ul>
                <li id="register" class="active">SIGN UP</li>
                <li id="login">SIGN IN</li>
            </ul>
        </div>
        <div class="form" id="loginForm">
            <form action="index.php" method="POST">
                <input type="text" id="userName" name="username" placeholder="Username">
                <input type="password" id="password" name="password" placeholder="Password">
                <button type="submit" id="loginBtn" name="login">Login</button>
            </form>
        </div>  
        <div class="form" id="registerForm">
            <form action="index.php" method="POST">
                <input type="email" id="newEmail" name="email" placeholder="Email">
                <input type="text" id="newUserName" name="username" placeholder="Username">
                <input type="password" id="newPassword" name="password" placeholder="Password">
                <input type="password" id="newConfirmPassword" name="confirm_password" placeholder="Confirm Password">
                <button type="submit" id="registerBtn" name="register">Register</button>
            </form>
        </div>
    </div>
    



    <script src="scripts.js"></script>
</body>
</html>