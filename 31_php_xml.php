<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>XML</title>
</head>
<body>
<?php
$xml = simplexml_load_file("hava.xml") or die("Hata:XML dosyası okuamadı!");

echo $xml->sehir[0]->isim."<br>";
echo $xml->sehir[0]->tarih."<br>";
echo $xml->sehir[0]->enyuksek."<br>";
echo $xml->sehir[0]->endusuk."<br>";
echo $xml->sehir[0]->hava."<br>";
echo "-----<br>";
echo $xml->sehir[1]->isim."<br>";
echo $xml->sehir[1]->tarih."<br>";
echo $xml->sehir[1]->enyuksek."<br>";
echo $xml->sehir[1]->endusuk."<br>";
echo $xml->sehir[1]->hava."<br>";

echo "-----<br><br>";//döngü ile yazdırmak
foreach ($xml->children() as $sehirler){
    echo $sehirler->isim."<br>";
    echo $sehirler->tarih."<br>";
    echo $sehirler->enyuksek."<br>";
    echo $sehirler->endusuk."<br>";
    echo $sehirler->hava."<br>";
}

?>

</body>
</html>