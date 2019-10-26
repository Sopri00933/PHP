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

$sql1="update park_tbl set plakano='$_POST[plakano]',aracsahibi='$_POST[aracsahibi]',giris='$_POST[giris]','$_POST[saatlikucret]','$_POST[kat]','$_POST[numara]' where Plaka No=$_POST[plakano]";
$db->prepare($sql1)->execute();

echo "Kayıt düzeltildi.";
?>