<?php
$kota = [];
var_dump ($kota);
$kota = ["Bandung","Jakarta"];
echo"<br>";
var_dump ($kota);
$kota[2] = "Surabaya";
echo "<br>";
var_dump($kota);
$kota[] = "Sukabumi";
echo "<br>";
var_dump($kota);
echo"<br>";
echo"++++++++++++++++++++++++++++";
echo"<br>";
for ($i=0;$i<count($kota);$i++){
    echo $kota[$i];
    echo "<br>";
}
echo"<br>";
echo"++++++++++++++++++++++++++++";
echo"<br>";
foreach ($kota as $x) {
    echo $x;
    echo "<br>";
}
echo"<br>";
echo"++++++++++++++++++++++++++++";
echo"<br>";
foreach ($kota as $x):
    echo $x;
    echo "<br>";
endforeach;

/*
------------------------------------------Array Associative-------------------------------------------

*/

?>