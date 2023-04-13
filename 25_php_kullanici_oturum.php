<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <style>
        body{
            text-align: center;
            font-size: 20px;
        }
        input{
            font-size: 20px;
        }
    </style>
</head>
<body>
<form action="25_php_kullanici_oturum.php" method="post">
    Kullanıcı adı:<br><input type="text" name="username"><br><br>
    Şifre :<br> <input tpye="password" name="password"><br><br>
    <input type="submit" name="submit" value="GİRİŞ">
</form>

<?php
if(isset($_POST["submit"])){
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
        echo "Giriş başarılı";
    } else {
        echo "Kullanıcı adı veya şifre hatalı";
    }

}
?>

</body>
</html>