<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 6b</title>
    <style>
        .box {
            width: 50px;
            height: 50px;
            border: 1px solid black;
            color: white;
            display: flex;
            border-radius: 15px;
        }

        .box h2 {
            margin: auto;
        }


        .baris {
            display: flex;
            width:fit-content;
            height:fit-content;
        }

        .baris1 {
            .box {
                background-color: #c20707;
            }
        }

        .baris2 {
            .box {
                background-color: rgb(0, 152, 202);
                color: black;
            }
        }

        form {
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <form action="" method="post">
        <label for="nomor">Masukkan nomor :</label>
        <input type="text" name="jumlah-nomor" id="nomor">
        <input type="submit">
    </form>

    <?php if(!isset($_POST["jumlah-nomor"])) : ?>
        <h3>silahkan masukkan jumlah nomor terlebih dahulu</h3>
    <?php else : ?>
        <?php for ($i = $_POST["jumlah-nomor"]; $i >= 1; $i--) : ?>
            <?php if($i % 2 === 0) : ?>
                <div class="baris baris1">
            <?php else : ?>
                <div class="baris baris2">
            <?php endif; ?>
                <?php for ($j = 1; $j <= $i; $j++) : ?>
                    <div class="box"><h2><?= "$i" ?></h2></div>
                <?php endfor ; ?>
                    <br>            
        </div>
        <?php endfor ; ?>
    <?php endif; ?>
</body>
</html>