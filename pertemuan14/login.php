<?php 

require 'functions.php';

// cek login
if(isset($_POST["login"])) {
    $username = $_POST["username"];
    $password = $_POST["password"];

    $result = mysqli_query($db, "SELECT * FROM user WHERE username = '$username'");

    // cek username
    if(mysqli_num_rows($result) === 1) {
        // cek password
        $row = mysqli_fetch_assoc($result);
        if(password_verify($password, $row["password"])){
            header("Location: index.php");
            exit;
        };
    }

    $error = true;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Login</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');

        *{
            margin: 0;
            padding: 0;
        }
        body{
            font-family: "Poppins", sans-serif;
            font-size: 14px;
            background: #f7ddcc;
        }
        .login-container{
            display: flex;
            justify-content: center;
            align-items: center;
            margin-top: 120px;
        }
        form{
            padding: 30px;
            background: white;
            color: black;
            border-radius: 15px;
            width: 350px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            box-shadow: 6px 9px 15px rgba(76, 75, 75, 0.3);
        }
        h1{
            color: #e59f6e;
            text-align: center;
            margin-bottom: 30px;
        }
        form label,
        form input,
        form button{
            border: none;
            margin-bottom: 3px;
            display: block;
            width: 100%;
        }
        form label{
            margin-top: 10px;
        }
        form input{
            background: white;
            color: black;
            padding: 10px;
            box-sizing: border-box;
            border: 1px solid #7e7c7c;
            outline: none;
        }
        form button{
            padding: 10px;
            background-color:rgb(225, 127, 62);
            color: white;
            font-size: 16px;
            text-transform: uppercase;
            margin-top: 15px;
            cursor: pointer;
        }
        form button:hover{
            background-color: #e19f73;
        }
    </style>
</head>
<body>
<div class="login-container">
        <form action="" method="post">
            <h1>Halaman Login</h1>

            <?php if(isset($error)) : ?>
                <p style="color: red; font-style: italic;">username / password error</p>
            <?php endif; ?>

            <div class="input">
                <label for="username">Username: </label>
                <input type="text" name="username" id="username" placeholder="Masukkan Username">
            </div>

            <div class="input">
                <label for="password">Password: </label>
                <input type="password" name="password" id="password" placeholder="&#9679;&#9679;&#9679;&#9679;&#9679;&#9679;&#9679;">
            </div>

            <button type="submit" name="login">Login</button>
        </form>
    </div>
</body>
</html>