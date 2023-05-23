<?php
require_once "config.php"; // bağlantı sayfası dahil edilir
// silme işleminin gerçekleşmesi için sql sorgusu yapılır.
$cevap = mysqli_query($db,"DELETE FROM urunler WHERE urun_id=".$_GET['id']);
// Türkçe karakterleri desteklemsi için 
echo "<html>";
echo "<meta http-equiv='Content-Type' ";
echo "content='text/html; charset=UTF-8' />";
if(!$cevap ){
echo '<br>Hata:' . mysqli_error($db);
}
else
{
echo "<h1>Kayıt Silindi!</h1></br>";
echo "<h1> <a href='sepet.php'> Listele</a></h1>\n";
}
echo "</html>";
mysqli_close($db);
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
</head>
<body div="body">
    <style>
        h1{
            padding-left: 3%;
            color:black;
            margin-top: 1.0;
            background-color: white;
        
        }
        body{
            background-color: cornflowerblue;
            background-image: url("manav.jpg");
        }
    </style>