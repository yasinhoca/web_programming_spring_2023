<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Update İşlem</title>
</head>
<body>
<?php
$numara = $_POST["numara"];
$ad = $_POST["ad"];
$soyad = $_POST["soyad"];
$email = $_POST["email"];

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "noveri";

$conn = new mysqli($servername,$username,$password,$dbname);
$conn->set_charset("utf8");

if($conn->connect_error){
    die("Bağlantı hatası : ".$conn->connect_error);
}

$sql = "UPDATE ogrenci 
SET numara=$numara,ad='".$ad."',soyad='".$soyad."',email='".$email."' WHERE numara=$numara";

if($conn->query($sql)===TRUE){
    echo "Kayıt güncellendi!";
} else {
    echo "Hata:".$sql."<br>".$conn->error;
}

$conn->close();


?>

</body>
</html>