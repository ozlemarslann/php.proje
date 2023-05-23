<?php
require_once "config.php"; 
// kayıt olma işlemleri yapılacaktır
if(isset($_POST["kullanici"])){ // kullanıcı isminin yazılıp yazılmadığı kontrol edilir 
    $form_kullanici=$_POST["kullanici"]; // form elemanlarının değerleri değişkenlere atanır 
    $form_mail=$_POST["mail"];
    $form_pass=$_POST["pass"];
    $passlen=strlen($form_pass); // şifrenin uzunluğu alınır 
    if($passlen<7 || $passlen>13){ // şifrenin uygun uzunlukta olması gereklidir.
        echo "Lüften şifenizi uygun uzunlukta giriniz."."<br>"."En az 7 en çok 13 karakter uzunluğunda olmalıdır.";
        exit();
    }
    $pass_hash=hash("sha256",$form_pass); // şifrenin erişilebilmesini önlemek için şifreleme algoritması kullanılır.
    // database ile erişim sağlanır ve insert ile kullanıcılar tabloya eklenir 
    $back=mysqli_query($db,"INSERT INTO `kullanici` ( `isim`, `mail`, `sifre`) VALUES ('".$form_kullanici."', '".$form_mail."', '".$pass_hash."')");
    if(mysqli_errno($db)!=0){ 
        echo "Verileri eklerken bir hata meydana geldi";
        exit (); // programın daha fazla devam etmesine gerek yok sonlandırılır.
    }
    echo "<br>"."<h1>Kullanıcı kayıt işleminiz başarılı bir şekilde gerçekleştirildi.</h1>";
    echo "<h1> Giriş yapmak için <a href= 'oturum.php'> tıklayınız </a></h1>"; //
}
?>
<!doctype html>
<html>
<head>
    <!-- Türkçe karakterleri desteklemesi için  -->
    <meta charset="utf-8"> 
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"> <!--açılan sayfanın ekranda optimize bir şekilde görünebilmesi için-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Kayıt İşlemleri</title>
</head>
<body div=""body>
    <style>
        /* arka plana stil atamaları gerçekleştirilir. */
        h1{
            padding-left: 3%;
            color:black;
            margin-top: 1.0;
            background-color: white;
        
        }
        body{
            background-image: url("manav.jpg");
        }
    </style> 
    <!-- bootstrap ile kullanıcı arayüzü yapılır. -->
              <div class="form-group form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
              <div class="container p-5">
        <div class="card p-5">
            <form action="index.php" method="POST">
                <div class="form-group">
                    <!--inputlara 'name' özelliği ile erişim yapılacaktır.-->
                    <label for="exampleInputEmail1">Kullanıcı Adı</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" name="kullanici">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" name="mail">
                    <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <input type="password" class="form-control" id="exampleInputPassword1" name="pass">
                    </div>
                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
                    </div>
                    <button type="submit" class="btn btn-primary" name="sumbit">GÖNDER</button>
            </form>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
</body>
</html>
