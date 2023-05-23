<?php
require_once "config.php";
if(isset($_POST["manav"])){
    $form_manav=$_POST["manav"];
    $form_miktar=$_POST["miktar"];
    $form_paket=$_POST["paket"];
    $back=mysqli_query($db,"INSERT INTO `urunler` ( `urun_ismi`, `urun_miktari`, `paketleme`) VALUES ('".$form_manav."', '".$form_miktar."', '".$form_paket."')");
    if(mysqli_errno($db)!=0){
        echo "Verileri eklerken bir hata meydana geldi";
        exit ();
    }
    echo "<h1>Ürün sepetinize eklendi.</h1>"."<br>";
    echo "<h1>Alışverişinizi tamamladıysanız <a href=sepet.php>Sipariş</a> tıklayınız</h1>";
}
?>
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Sipariş Ekranı</title>
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
            background-image: url("manav.jpg");
        }
    </style>
    <div class="container p-5">
        <div class="card p-5">
            <form action="urun.php" method="POST">

                <div class="form-group">
                    <label for="exampleInputEmail1">Meyve/Sebze İsmi</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" name="manav">
                    <label for="exampleInputEmail1">Ürün Miktarı</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" name="miktar">
                    <label for="exampleInputEmail1">Paketleme Şekli</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" name="paket">
                    
                   
                    <button type="submit" class="btn btn-primary" name="giris">SİPARİŞ VER</button>
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
