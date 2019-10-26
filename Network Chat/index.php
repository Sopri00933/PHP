<html>
<head>
<meta charset = "utf-8"/>
<title>Network Chat</title>
<link rel ="stylesheet" href = "happy.css"/>
</head>
<body>

<form method = "post" action = "network_chat.php">

<div class="header">
<div text align = "Right">
kullanıcı Adı : <input type = "text" name = "users" size = "40" maxlength = "25" placeholder = "Kullanıcı Adınızı Giriniz" required ="required"/>
Şifre : <input type = "password" name = "password" size = "40" maxlength = "8" placeholder = "Şifreyi Giriniz" required ="required"/> 
        <input type = "submit" value = "Giriş Yap"/> </td>
</div>
<h4 class="header">Network Chat</h4><br/> 
</div>

</form>

<article>
<form method = "post" action = "">
    <table>
	    <tr>
		   <td>kullanıcı Adı :</td> <td> <input type = "text" name = "users" size = "40" maxlength = "25" placeholder = "Kullanıcı Adınızı Giriniz" required ="required"/> </td>
		</tr>
		<tr>
		   <td>Şifre :</td> <td> <input type = "password" name = "password" size = "40" maxlength = "8" placeholder = "Şifreyi Giriniz" required ="required"/> </td>
		</tr>
		<tr>
		   <td>E-Mail :</td> <td> <input type = "text" name = "mail" size = "40" maxlength = "30" placeholder = "E-Mail Adresinizi Giriniz" required ="required"/> </td>
		</tr>
		<tr>
		   <td></td> <td> <input type = "submit" value = "Kaydol"/> </td>
		</tr>
	</table>
</form>
</article>

<aside id="solmenu">
</aside>

<nav>
</nav> 

<footer>
<div text align = "center">
<h2><b>Kaydol Ve Arkadaşlarınla Mesajlaş<b><h2>
</div>
</footer>

<?php
error_reporting(null);
ini_set('display_errors', 0);

$user=trim($_POST["users"]);
$pass=trim($_POST["password"]);
$email=trim($_POST["mail"]);

try {
	$db = new PDO('mysql:host=localhost;dbname=chat;charset=utf8', 'root', '');
	$db->exec("set names utf8");
	$db->query("SET CHARACTER SET utf8");
} catch ( PDOException $e ){
    print $e->getMessage();
}	

$sql="insert into login(users,password,mail) values ('$_POST[users]','$_POST[password]','$_POST[mail]')";
$db->prepare($sql)->execute();

echo "Kayıt Eklendi";
?>

</body>
</html>