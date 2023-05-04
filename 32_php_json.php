<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>JSON</title>
</head>
<body>
<?php
//Encode
$arabalar = array("Mercedes","Audi","BMW","Bentley");
echo json_encode($arabalar)."<br>";
echo "___<br><br>";

$yas = array("Ahmet"=>40, "Ayşe"=>30, "Ali"=>51, "Filiz"=>23);
echo json_encode($yas)."<br>";
echo "___<br><br>";

//Decode
$jsonobj = '{"Ahmet":35,"Ayşe":30,"Ali":51,"Filiz":23}';
//object decode
$obj = json_decode($jsonobj);
echo $obj->Ahmet."<br>";
echo $obj->Ayşe."<br>";
echo $obj->Ali."<br>";
echo $obj->Filiz."<br>";
echo "___<br>";
//associative array decode
$dizi = json_decode($jsonobj,true);
echo $dizi["Ahmet"]."<br>";
echo $dizi["Ayşe"]."<br>";
echo $dizi["Ali"]."<br>";
echo $dizi["Filiz"]."<br>";
echo "___<br>";

//döngü ile yazdırma
foreach ($obj as $key => $value){
    echo $key."=>".$value."<br>";
}






?>

</body>
</html>