<html>
<head><title></title></head>
<body>

<form method="POST" action="duzenle3.php">
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

$sql = "select * from park_tbl where plakano=$_POST[plakano]";
foreach($db->query($sql) as $oku)
{
	echo "Plaka No: <input type='hidden' name='plakano' value='$oku[plakano]'>";
	echo "Araç Sahibi: <input type='text' name='aracsahibi' value='$oku[aracsahibi]'><br>";
	echo "Giriş: <input type='text' name='giris' value='$oku[giris]'><br>";
	echo "Saatlik Ücret: <input type='text' name='saatlikucret' value='$oku[saatlikucret]'><br>";
	echo "Kat: <input type='text' name='kat' value='$oku[kat]'><br>";
	echo "Numara: <input type='text' name='numara' value='$oku[numara]'><hr>";
}
?>
<input type="submit" value="KAYDET">
</form>

</body>
</html>