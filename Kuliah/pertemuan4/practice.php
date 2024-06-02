<?php
//ARITMATIKA😁
$a = 9 ;
$b = 4 ;
$c = 5 ;
$d = 6 ;
$volume_a = $a * $a * $a;
$volume_b = $b * $b * $b;
echo "Luas Volume A = ".$volume_a."<br>"."Luas Volume B = ".$volume_b;

function hitung_volume ($volume) {
    $volume = $volume*$volume*$volume;
    return $volume;
}
echo "<br>";
$volume = hitung_volume ($a);
$volume1 = hitung_volume ($b);
echo $volume."<br>".$volume1."<br>";
echo "+++++++++++++++++++++++++++++++++++++++"."<br>";
echo hitung_volume($c)."<br>";
echo hitung_volume($d)."<br>";
function hitung_2_volume ($a,$b) {
    $volume2 = hitung_volume($a)+hitung_volume($b);
    return $volume2;
}
echo hitung_2_volume($c,$d)."<br>";
function mana_volume ($a,$b) {
    echo hitung_2_volume($a,$b);
}
mana_volume($b,$c);


//DATE😁
?>