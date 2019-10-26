<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

try {
	$db = new PDO('mysql:host=localhost;dbname=otopark;charset=utf8', 'root', '');
	$db->exec("set names utf8");
	$db->query("SET CHARACTER SET utf8");
} catch ( PDOException $e ){
     print $e->getMessage();
}	

$sql = "select * from park_tbl";
foreach($db->query($sql) as $oku)
{
	echo "Plaka No: $oku[plakano]<br>";
	echo "Araç Sahibi: $oku[aracsahibi]<br>";
	echo "Giriş: $oku[giris]<br>";
	echo "Saatlik Ücret: $oku[saatlikucret]<br>";
	echo "Kat: $oku[kat]<br>";
	echo "Numara: $oku[numara]<hr>";
}
?>