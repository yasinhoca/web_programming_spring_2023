<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Insert</title>
</head>
<body>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "noveri";

$conn = new mysqli($servername,$username,$password,$dbname);
$conn->set_charset("utf8");

if($conn->connect_error){
    die("Bağlantı hatası : ".$conn->connect_error);
}

$sql = "INSERT INTO ogrenci (numara,ad,soyad,email) 
VALUES (6,'Elif','Erzurum','e@e.com')";

if($conn->query($sql)===TRUE){
    echo "Veritabına kayıt başarılı!";
} else {
    echo "Hata:".$sql."<br>".$conn->error;
}

$conn->close();

?>

</body>
</html>