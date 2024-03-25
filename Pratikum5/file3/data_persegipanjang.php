<?php
require_once "persegipanjang.php"; 

$persegiPanjang1 = new PersegiPanjang(10, 21);
$persegiPanjang2 = new PersegiPanjang(7, 25);

echo "Persegi Panjang 1:<br>";
echo "Luas: " . $persegiPanjang1->hitungLuas() . "<br>";
echo "Keliling: " . $persegiPanjang1->hitungKeliling() . "<br>";

echo "<br>Persegi Panjang 2:<br>";
echo "Luas: " . $persegiPanjang2->hitungLuas() . "<br>";
echo "Keliling: " . $persegiPanjang2->hitungKeliling() . "<br>";
?>