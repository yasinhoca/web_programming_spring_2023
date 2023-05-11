<?php
$cookie_name = "user";
$cookie_value = "muratarslan";
setcookie($cookie_name,$cookie_value,time()+(86400*30),"/"); //86400 saniye = 1 gün
//setcookie($cookie_name,$cookie_value,time()+(3600),"/"); //1 saat
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Cookie</title>
</head>
<body>

<?php
if(!isset($_COOKIE[$cookie_name])){
    echo "Aktif cookie bulunamadı!";
}else{
    echo "Aktif cookie ismi :".$cookie_name."<br";
}
/*
if(count($_COOKIE)>0){
    echo "cookieler etkin";
} else {
    echo "cookieler etkin değil";
} */

?>

</body>
</html>