<?php
$host="sql203.epizy.com";
$user="epiz_34244378";
$pass="yilNaxhOqnx";
$name="epiz_34244378_proje";
// tüm saflara bu kodlar dahil edilmelidir.
// bağlantı gerçekleştirilebilmesi için gerekli parametreler alınır.
$db=mysqli_connect($host, $user, $pass, $name); // database bağlantı sağlanır
mysqli_set_charset($db,"UTF8"); // Türkçe karakterleri desteklemesi için 
if(mysqli_connect_errno()){  
    echo "Bağlantı kurulamadı";
    exit();// sayfanın devamının çalışmasına gerek yoktur exit() ile program sonlandırılır.
}
?>
