<?php 
session_start();
if (isset($_POST["submit"])) {
    if ($_POST["username"] == "Azhar" && $_POST["password"] == "126") {
        $_SESSION["username"] = $_POST["username"];
        header("Location: admin.php");
        exit;
    } else {
        $error = true;
    }
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
            width: 100%;
            color: white;
            background-color: #add;
        }

        .content {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            margin: auto;
            background-color: #58A399;
            width: 80%;
            height: 80%;
            font-size: 1.5rem;
            font-family: Arial, Helvetica, Sans-serif;
            border-radius: 20px;
        }

        h1 {
            color: darkorange;
        }

        input {
            margin-top: 10px;
            border: 2px solid black;
            width: 220px;
            height: 25px;
        }

        buttton {
            margin-top: 15px;
            cursor: pointer;
            font-size: 1.2rem;
            background-color: lightgreen;
            border-radius: 10px;
            padding: 5px;
            border: 2px solid black;
        }

        p {
            color: red;
        }

    </style>
</head>
<body>
    <div class="container">
        <div class="content">
            <h1><i>Login admin</i></h1>
        <?php if (isset($error)) : ?>
            <p>username / password anda salah <?= $_POST["username"]; ?></p>
        <?php endif; ?>
        <form action="" method="post">
            <label for="username">Username :</label>
            <input type="text" name="username" id="username">
            <br>
            <label for="password">Password :</label>
            <input type="password" name="password" id="password">
            <br>
            <button type="submit" name="submit">Login</button>
        </form>
        </div>
    </div>
    

</body>
</html>