<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Değişkenler</title>
</head>
<body>

<?php
//Açıklama satırı
/* Php veri türleri
    integer
    float
    string
    boolean
    array -> liste yapısı
*/

$a = 8; //değişkenler dolar işareti ile başlar, tip belirtmeye gerek yoktur
$b = 13.5; //otomatik olarak float alır
$metin = "PHP string değişken";
// Değişkenleri yazdırmak
echo "<p style='font-size:24px'>";
echo "Değişken yazdırmak için $a <br>";
echo "Stringler nokta işareti toplanır ".$b." burada yazıldı. <br>";
echo "Metin değişkeni ". $metin." toplanır<br>";
echo $a + $b;
echo "<br>";
echo $metin.$b.$a;

echo "</p>";

?>

</body>
</html>