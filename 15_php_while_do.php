<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>while do döngüleri</title>
</head>
<body>
<?php
    $sayac = 0;
    $toplam = 0;
    while($sayac<=5){
        $toplam += $sayac;
        $sayac++;
    }
    echo "Toplam = $toplam <br>";

    $sayac = 0;
    $tektoplam = 0;
    do{
        if($sayac % 2 ==1) $tektoplam += $sayac;
        $sayac++;
    }while($sayac<=5);
    echo "Tek sayı toplamaları = $tektoplam";

?>

</body>
</html>