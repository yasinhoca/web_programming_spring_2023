<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<?php
$u = $_POST["username"];
$p = $_POST["password"];

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "noveri";

$conn = new mysqli($servername,$username,$password,$dbname);
$conn->set_charset("utf8");

if($conn->connect_error){
    die("Bağlantı hatası : ".$conn->connect_error);
}

$sql = "SELECT * FROM kullanici WHERE username='$u' AND password='$p'"; //select * from ogrenci where ad='ali';
$result = $conn->query($sql);

if($result->num_rows==1){
    echo "Giriş başarılı<br>";
    session_start();
    $_SESSION["kullanici"]=$u;
    echo "Hoşgeldin ".$_SESSION["kullanici"]."<br>";
} else {
    echo "Kullanıcı adı veya şifre hatalı";
}
?>

<form action="26_php_oturum_kapat.php" method="post">
    <input type="submit" name="submit" value="ÇIKIŞ">
</form>

</body>
</html>