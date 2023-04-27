<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Insert Form</title>
</head>
<body>
<form action="28_php_insert_form.php" method="post">
    Numara:<br><input type="text" name="numara"><br>
    Ad:<br><input type="text" name="ad"><br>
    Soyad:<br><input type="text" name="soyad"><br>
    Email:<br><input type="text" name="email"><br>
    <input type="submit" name="submit" value="KAYDET"><br>
</form>

<?php
if(isset($_POST["submit"])){
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

    $sql = "INSERT INTO ogrenci (numara,ad,soyad,email) 
VALUES ($numara,'".$ad."','".$soyad."','".$email."')";

    if($conn->query($sql)===TRUE){
        echo "Veritabına kayıt başarılı!";
    } else {
        echo "Hata:".$sql."<br>".$conn->error;
    }

    $conn->close();

}
?>

</body>
</html>