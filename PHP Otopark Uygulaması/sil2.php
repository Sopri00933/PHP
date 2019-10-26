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

$sql1="delete from park_tbl where plakano=$_POST[plakano]";
$db->prepare($sql1)->execute();

echo "Kayıt silindi";
?>