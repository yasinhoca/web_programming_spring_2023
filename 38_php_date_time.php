<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Date ve Time</title>
</head>
<body>
<?php
echo "Tarih : ". date("Y/m/d")."<br>";
echo "Tarih : ". date("d/m/Y")."<br>";
echo "Tarih : ". date("Y-m-d")."<br>";
echo "Tarih : ". date("Y.m.d")."<br>";
echo "Tarih : ". date("l")."<br>";

echo "Tarih : ". date("h:i:sa")."<br>";

date_default_timezone_set("Europe/Berlin");
echo "Saat : ". date("h:i:sa")."<br>";
date_default_timezone_set("Europe/Istanbul");
echo "Saat : ". date("h:i:sa")."<br>";

//string tarih formatı dönüştürme
$d = strtotime("10:30pm May 11 2023");
echo "Formatlanmış zaman = ". date("Y-m-d h:i:sa",$d)."<br>";
$d = strtotime("tomorrow");
echo "Bir gün sonrası = ". date("Y-m-d h:i:sa",$d)."<br>";

$d = strtotime("next Saturday");
echo "Bir sonraki cumartesi = ". date("Y-m-d h:i:sa",$d)."<br>";

$d = strtotime("next Sunday");
echo "Bir sonraki pazar = ". date("Y-m-d h:i:sa",$d)."<br>";

$d = strtotime("+3 Saturday");
echo "Üç sonraki cumartesi = ". date("Y-m-d h:i:sa",$d)."<br>";

$d = strtotime("+5 Months");
echo "Beş ay sonra = ". date("Y-m-d h:i:sa",$d)."<br>";

$startdate = strtotime("Saturday");
$enddate = strtotime("+5 Weeks",$startdate);
echo "Başlangıç :".date("Y-m-d h:i:sa",$startdate)."<br>";
echo "Bitiş :".date("Y-m-d h:i:sa",$enddate)."<br>";

while($startdate<$enddate){
    echo date("M d",$startdate)."<br>";
    $startdate = strtotime("+1 week",$startdate);
}

//kalan gün
echo "<br><br>";
$d1=strtotime("August 29");
$d2=ceil(($d1-time())/60/60/24);
echo "30 Ağustos'a ".$d2. " gün kaldı";

?>

</body>
</html>