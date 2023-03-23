<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>For dongusu</title>
</head>
<body>
<?php
// for($i=0;$i<100;$i++) { }
$i=1;
$faktoriyel = 1;
$s=5;

for($i=1; $i<=$s; $i++ ){
    $faktoriyel *= $i;
}

echo $s."! = ".$faktoriyel;


?>
</body>
</html>