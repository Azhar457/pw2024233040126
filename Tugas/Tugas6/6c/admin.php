<?php 
session_start();
if (isset($_SESSION["username"])) {
    $username = $_SESSION["username"];
} else {
    header("Location: login.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        * {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }

        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            width: 100vh;
            color: white;
            background-color: #DDDDDD;
        }

        .content {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            gap: 10px;
            text-align: center;
            background-color: #A9A9A9;
            width: 80%;
            height: 80%;
            font-size: 1.5rem;
            font-family: Arial, Helvetica, sans-serif;
            border-radius: 20px
        }

        button {
            font-size: 1.2rem;
            background-color: #EEEEEE;
            border-radius: 10px;
            padding: 5px;
            border: 2px solid black;
            width: 100px;
            cursor: pointer;
        }

        a {
            text-decoration: none;
            color: #9CAFAA;
        }

        p {
            color: red;
        }

        .profile {
            border-radius: 50%;
            width: 150px;
            height: 150px;
            background-image: url(img/anon.png);
            background-position: center;
            border: 3px solid black;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="content">
            <div class="profile"></div>
            <h2>Selamat Datang Admin <?= $username ?></h2>
            <button><a href="Login.php">Logout</a></button>
        </div>
    </div>
</body>
</html>