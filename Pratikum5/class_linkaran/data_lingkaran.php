<?php
require_once './class_lingkaaran.php';

echo "Nilai PHI : " . lingkaran :: PHI;

$lingkar1 = new Lingkaran( 10 );
$lingkar2 = new Lingkaran( 7 );

echo "<br/>Luas object Lingkaran 1 ".$lingkar1->getLuas();
echo "<br>Luas object Lingkaran 2 ".$lingkar2->getLuas();


echo "<br/>Keliling Lingkaran I ".$lingkar1->getKeliling();
echo "<br>Keliling Lingkaran II ".$lingkar2->getKeliling();

?>