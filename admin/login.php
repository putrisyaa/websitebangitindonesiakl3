<?php
session_start();
include '_config.php';


if(isset($_POST["login"])){
    $username = $_POST["username"];
    $password = $_POST["password"];

    $result = mysqli_query($con, "SELECT * FROM user WHERE username = '$username'");

    if(mysqli_num_rows($result) === 1) {
        $data = mysqli_fetch_assoc($result);

        if($password == $data['password']){
            $_SESSION['login'] = true;
            header("location: index.php");
            exit;
        }
    }
} 
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<style> 
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap'); 
    * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Poppins', sans-serif;
}

body {
    background: rgb(255,255,255);
background: linear-gradient(0deg, rgba(255,255,255,1) 50%, rgba(255,0,0,1) 50%);
}

.wrapper {
    max-width: 300px;
    min-height: 200px;
    margin: 145px auto;
    padding: 40px 30px 30px 30px;
    background-color: #ecf0f3;
    border-radius: 15px;
    /* box-shadow: 13px 13px 20px #cbced1, -13px -13px 20px #fff; */
}

.wrapper .name {
    font-weight: 600;
    font-size: 1.4rem;
    letter-spacing: 1.3px;
    padding: 10px;
    color: #555;
    font-family: Poppins;
}

.wrapper .form-field input {
    width: 100%;
    display: block;
    border: none;
    outline: none;
    background: none;
    font-size: 1.2rem;
    color: #666;
    padding: 10px 15px 10px 10px;
    /* border: 1px solid red; */
}

.wrapper .form-field {
    padding-left: 10px;
    margin-bottom: 20px;
    border-radius: 20px;
    box-shadow: inset 8px 8px 8px #cbced1, inset -8px -8px 8px #fff;
}

.wrapper .form-field .fas {
    color: #555;
}

.wrapper .btn {
    box-shadow: none;
    width: 50%;
    height: 40px;
    background-color: #03A9F4;
    color: #fff;
    border-radius: 25px;
    box-shadow: 3px 3px 3px #b1b1b1,
        -3px -3px 3px #fff;
    letter-spacing: 1.3px;
}

.wrapper .btn:hover {
    background-color: #039BE5;
}

.wrapper a {
    text-decoration: none;
    font-size: 0.8rem;
    color: #03A9F4;
}

.wrapper a:hover {
    color: #039BE5;
}

@media(max-width: 380px) {
    .wrapper {
        margin: 30px 20px;
        padding: 40px 15px 15px 15px;
    }
}
</style>
<body>
<div class="wrapper">
        <div class="text-center p-5 mt-4 name">
        Login
        </div>
        <form action="" class="p-3 accordion-flushmt-3"  method="POST">
            <div class="form-field d-flex align-items-center">
                <span class="far fa-user"></span>
                <input type="text" name="username" id="username" placeholder="username">
            </div>
            <div class="form-field d-flex align-items-center">
                    <span class="fas fa-key"></span>
                <input type="password" name="password" id="password" placeholder="password">
            </div>
            <button type="submit" name="login" class="btn mt-3">Login</button>
        </form>
    </div>
</body>
</html>