<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Php Listeleme</title>
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

$sql = "SELECT * FROM ogrenci";
$result = $conn->query($sql);

if($result->num_rows > 0){
    while($row = $result->fetch_assoc()){
        echo "Öğrenci no : ".$row["numara"]." - Ad : ".$row["ad"]." - Soyad : ".$row["soyad"]." - Email : ".$row["email"]."<br>";
    }
} else {
    echo "Kayıt bulunamadı!";
}
$conn->close();

?>
</body>
</html>