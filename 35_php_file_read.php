<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dosya okuma</title>
</head>
<body>
<?php
$dosya = fopen("isimler.txt","r") or die ("Dosya bulunamadı!");
echo fread($dosya,filesize("isimler.txt"));
fclose($dosya);
?>

</body>
</html>