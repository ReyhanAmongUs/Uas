<?php
$kaloripermakan = 2500;
$makananperhari = [3, 2, 2, 3, 3, 2, 1]

$kalorisehari = array_sum($makananperhari) * $kaloripermakan;
$kaloriseminggu = $kaloriperhari * 7;

$waktuistirahatharian = [5, 6, 8, 8, 5, 6, 4]
$waktuistirahatseminggu = array_sum($waktuistirahatperhari);

echo "Jumlah kalori sehari: $kalorisehari kalori<br>";
echo "Jumlah kalori seminggu: $kaloriseminggu kalori<br>";
echo "Waktu istirahat sehari: " . implode(" jam,", $waktuistirahatharian) . " jam<br>";
echo "Jumlah waktu istirahat seminggu: $waktuistirahatseminggu jam<br>";

if ($kaloriseminggu >= 150000 && $waktuistirahatseminggu >= 50) {
    echo "Fu sudah sembuh.<br>";
} else {
    echo "Fu masih sakit.<br>";
}


