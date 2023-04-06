<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP Çoklu Tablo</title>
    <style>
        body{
            text-align: center;
            padding: 20px;
            font-size: 20px;
        }
        select{
            font-size: 20px;
            border : 2px solid black;
            border-radius: 3px;
            background: #a0caaf;
        }
        input{
            alignment: center;
            font-size: 20px;
            border: 2px solid black;
            border-radius: 3px;
            background-color: #a0caaf;
        }
    </style>
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

$sql = "SELECT plaka FROM arac";
$result = $conn->query($sql);
?>

<form action="24_php_coklu_tablo.php" method="post">
    <select name="plaka" id="araclar">
        <?php
        if($result->num_rows > 0){
            while($row = $result->fetch_assoc()){
                echo "<option value='$row[plaka]' name='plaka'>$row[plaka]</option>";
            }
        } else {
            echo "Kayıt bulunamadı!";
        }
        ?>
    </select>
    <input type="submit" name="submit">
</form>

<?php
if(isset($_POST["submit"])){
    $plaka = $_POST["plaka"];

    $sql="SELECT arac.id,arac.plaka, aracmarka.marka,arac.model,aractur.tur FROM arac,aracmarka,aractur WHERE arac.plaka='$plaka' AND arac.marka=aracmarka.id AND arac.tur = aractur.id";
    $result = $conn->query($sql);

    if($result->num_rows > 0){
        while($row = $result->fetch_assoc()){
            echo "Araç id <br> <input type='text' value='$row[id]'><br><br>";
            echo "Plaka <br> <input type='text' value='$row[plaka]'><br><br>";
            echo "Marka <br> <input type='text' value='$row[marka]'><br><br>";
            echo "Model <br> <input type='text' value='$row[model]'><br><br>";
            echo "Tür <br> <input type='text' value='$row[tur]'><br><br>";        }
    } else {
        echo "Kayıt bulunamadı!";
    }
    $conn->close();

}
?>




</body>
</html>