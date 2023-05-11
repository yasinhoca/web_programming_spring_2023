<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>File write append</title>
</head>
<body>
<?php
/*
 * r = read
 * w = write  eğer dosya yoksa oluşturur, dosya varsa içini siler yeniden yazar
 * a = append var olan dosyanın üzerine ekler
 */

$dosya = fopen("soyadlar.txt","w") or die("Dosya bulunamadı!");
$soyadlar= "alkan\n";
fwrite($dosya,$soyadlar);
$soyadlar= "bilir\n";
fwrite($dosya,$soyadlar);
fclose($dosya);

/*
$dosya = fopen("soyadlar.txt","w") or die("Dosya bulunamadı!");
$soyadlar= "cihan";
fwrite($dosya,$soyadlar);
fclose($dosya); */

$dosya = fopen("soyadlar.txt","a") or die("Dosya bulunamadı!");
$soyadlar= "denge\n";
fwrite($dosya,$soyadlar);
$soyadlar= "erken\n";
fwrite($dosya,$soyadlar);
fclose($dosya);


?>

</body>
</html>