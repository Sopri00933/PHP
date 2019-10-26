<?php
try {
	$db = new PDO('mysql:host=localhost;dbname=uyeler;charset=utf8', 'root', '');
	$db->exec("set names utf8");
	$db->query("SET CHARACTER SET uf8");
} catch ( PDOException $e ){
     print $e->getMessage();
}	

$kayitVar=0;
$sql = "select * from uye_tbl where kuladi='$_POST[kuladi]' and sifre='$_POST[sifre]'";
foreach($db->query($sql) as $oku)
{
	$kayitVar=1;
}

if($kayitVar==0)
{
	echo "Kullanıcı adı ya da şifre hatalı";
}
else
{
	$sql1="update uye_tbl set son_giris_tar='".date("Y-m-d H:i:s")."' where kuladi='$_POST[kuladi]'";
	$db->prepare($sql1)->execute();
	
	echo "TEBRİKLER! Giriş yaptınız";
}
?>