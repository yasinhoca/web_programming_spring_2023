<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Koşul ifadeleri</title>
</head>
<body>
<?php
// if - elseif - else
// if($a>=100) { }
echo "<p style='font-size:24px'>";
$s = rand(0,100);
if($s>=50) echo "Sayı 50'den büyüktür!";
else echo "Sayı 50'den küçük";
echo "<br>";
echo "Rastgele gelen sayı = $s";
echo "<br>";
//switch
$renk = "kırmızı";

switch ($renk){
    case "kırmızı":
        echo "Seçiminiz kırmızı";
        break;
    case "mavi":
        echo "Seçiminiz mavi";
        break;
    case "yeşil":
        echo "Seçiminiz yeşil";
        break;
    default :
        echo "Lütfen geçerli bir renk seçiniz";
}


echo "</p>";
?>

</body>
</html>