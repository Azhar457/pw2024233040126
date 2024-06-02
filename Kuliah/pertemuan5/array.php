<?php
$hari1 = "senin";
$hari2 = "selasa";
$hari3 = "rabu";
$hari4 = "kamis";
$hari5 = "jum'at";
$hari6 = "sabtu";
$hari7 = "ahad";
/*
_________________________------------------------------_____________
*/
$pembangkit = true;
$nama_hari = ['senin','selasa','rabu','kamis','jumat','sabtu','ahad']; 
$kereta = ['lokomotif',300.0, 'gerbong_barang ',['penumpang_1','penumpang_2','penumpang_3'],$pembangkit,1]; 

var_dump($hari7);
print('<br>');
print('<br>');
print('<br>');
var_dump($nama_hari);
print('<br>');
print('<br>');
print('<br>');

echo($nama_hari[5]);
print('<br>');
print('<br>');
print('<br>');

echo($kereta[2]);
echo($kereta[3][0]);
print('<br>');
print('<br>');
print('<br>');



?>