<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>JSON FILE</title>
</head>
<body>
<?php
$json = file_get_contents('ogrenci.json');
//associative array olarak decode edelim bu sefer
$json_dizi = json_decode($json,true);
print_r($json_dizi);

?>

</body>
</html>