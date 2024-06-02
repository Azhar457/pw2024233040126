<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas 2c</title>
</head>

<style>
.box{
    width:50px;
    height: 50px;
    text-align: center;
    line-height: 50px;
    background-color: salmon;
    border: 2px solid black;


}
.warp{
    display: flex;
}
</style>
<body>
<?php 
for ($no = 10; $no >= 1; $no-- ){
    echo "<div class=\"warp\">";
    for($ni= 1; $ni <= $no; $ni++ ) {
        echo "<div class=\"box\"> $ni </div>";
    }
    echo "</div>";
}
    

?>
</body>
</html>