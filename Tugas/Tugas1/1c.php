<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas 1c</title>
    <style>
        .kolom {
            display: flex;
            flex-direction: row;
        }
        
        .box1, .box2, .box3 {
            display: flex;
            justify-content: center;
            align-items: center;
            position: relative;
            width: 50px;
            height: 50px;
            background-color: salmon;
            border: 1px solid black;
        }
    </style>
</head>
<body>
    <div class="kolom">
    <div class="box1">1</div>
    </div>
    <div class="kolom">
    <div class="box2">2</div>
    <div class="box2">2</div>
    </div>
    <div class="kolom">
    <div class="box3">3</div>
    <div class="box3">3</div>
    <div class="box3">3</div>
    </div>
    
</body>
</html>
