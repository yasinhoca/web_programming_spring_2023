<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Delete Form</title>
</head>
<body>
<form action="30_php_delete.php" method="post">
    Aradığınız isim : <input type="text" name="isim">
    <input type="submit" name="submit">
</form>
<?php
if(isset($_POST["submit"])){
    $isim = $_POST["isim"];

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "noveri";

    $conn = new mysqli($servername,$username,$password,$dbname);
    $conn->set_charset("utf8");

    if($conn->connect_error){
        die("Bağlantı hatası : ".$conn->connect_error);
    }

    $sql = "SELECT * FROM ogrenci WHERE ad='$isim'"; //select * from ogrenci where ad='ali';
    $result = $conn->query($sql);

    if($result->num_rows > 0){
        while($row = $result->fetch_assoc()){
            echo "<form action='30_php_delete_islem.php' method='post'>";
            echo "Numara <br> <input type='text' name='numara' value='$row[numara]'><br><br> ";
            echo "Ad <br> <input type='text' name='ad' value='$row[ad]'><br><br> ";
            echo "Soyad <br> <input type='text' name='soyad' value='$row[soyad]'><br><br> ";
            echo "Email <br> <input type='text' name='email' value='$row[email]'><br><br> ";
            echo "<input type='submit' value='SİL'>";
            echo "</form>";
        }
    } else {
        echo "Kayıt bulunamadı!";
    }
    $conn->close();

}

?>

</body>
</html>