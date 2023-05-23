<?php
require_once "config.php";
$sql = "SELECT * FROM urunler";
$cevap = mysqli_query($db,$sql);
if(!$cevap ){
    echo '<br>Hata:' .
    mysqli_error($db);
}
echo "<html>";
// Türkçe karakterleri desteklemesi için 
echo "<meta http-equiv='Content-Type' ";
echo "content='text/html; charset=UTF-8'/>";
// msql ile çekilen bilgileri tablolar şeklinde gösterilecektir.
echo "<table border=1>";
echo "<tr>";
echo "<th>Meyve/Sebze Kategorisi</th>";
echo "<th>Miktarı</th>";
echo "<th>Paketleme Şekli</th>";
echo "<th><a href='https://github.com/ozlemarslann/php.proje/'>Github Linki</a></th>";
echo "</tr>";
while($gelen=mysqli_fetch_array($cevap))
{
    echo "<tr><td>".$gelen['urun_ismi']."</td>";
    echo "<td>".$gelen['urun_miktari']."</td>";
    echo "<td>".$gelen['paketleme']."</td>";
    echo "<td><a href=sil.php?id=";
    echo $gelen['urun_id'];
    echo ">Sil</a></td>"; 
    }
    echo "</table>";
    echo "<br/><a href='urun.php'> Geri Dön</a>";
    echo "</html>";
    ?>
<!doctype html>
<html lang="en">
<head>   
 <meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
</head>
<body></body>
</html>