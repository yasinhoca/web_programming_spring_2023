<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Array ve Foreach Dongusu</title>
</head>
<body>

<?php
$sayilar = array(5,7,4,3,9,2,0,1);
echo "$sayilar[4]";
echo "<br>";

$dizi = array("elma","armut","kayısı","kiraz","muz");
foreach ($dizi as $x){
    echo $x."<br>";
}

$yas = array("ali"=>"35","mustafa"=>"40","elif"=>"30");
foreach($yas as $x => $value){
    echo "$x yaşı = $value <br>";
}

?>

</body>
</html>