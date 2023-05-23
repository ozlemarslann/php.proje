## PROJE TANITIMI
   Bir manav sipariş uygulamasıdır. İlk olarak kullanıcı kaydı oluşturulması gerekmektedir daha sonra şifreli oturum gerçekleşir. Kullanıcı kaydı oluşturulduktan sonra
   sipariş ekranı çıkmaktadır kullanıcı sipariş etmek istediği ürünün ismini, kilosunu ve paketlenme şeklini girdikten sonra isterse sepete gidip sipariş de bulunduğu 
   ürünleri listeyebilir isterse de iptal etme işlemini gerçekleştirebilir.

## PROJE KURULUMU
  Projeyi kendi bilgisayarınız da çalıştırabilmeniz için aşağıda ki adımları takip etmeniz gerekmektedir.
  
  1. Yukarı kısımda bulunan tüm dosyaları indirin ve Visual Studio Code ile kodları çalıştırın. 
  2. Projenin internete sunulabilmesi için  hosting hizmeti veren bir site üzerinden domain alınarak oluştrulduğu için sizler kodu çalıştırabilmeniz 
         için bilgisayarınıza xampp uygulamasını kurmalısınız böylece bilgisayarınızı sanal sunucu haline getireceksiniz daha sonra apache ve MySQL butonlarını 
         aktif ediniz. Her iki butonun yeşil renkli olması aktifleştiklerinin bir göstergesi olacaktır. MySQL butonun bulundupu satırdaki 'admin' kısmına tıklayarak
         ve localhost:8080/phpmyadmin/ sayfasına yönlendirileceksiniz. Açılan sayfada sol tarafta bulunan 'yeni' kısmına tıklayarak yeni bir database oluşturun ismini 
         'proje' olaral yazınız. İki adet tablo oluşturmamız gereklidir. Bunun için proje.sql dosyası içindeki kodları kopyalayıp phpmyadmin panelinde SQL kısmına 
         kodları yaptırnız böylece projede kullanılacak olan tabloları oluşturmuş olacaksınız.
         
   3. İndirdiğiniz dosyalar içinde 'config.php' sayfası bulunmaktadır. Lüften bu sayfayı açın. Sayfadaki;
         
         $host="sql203.epizy.com";
         
         $user="epiz_34244378";
         
         $pass="yilNaxhOqnx";
         
         $name="epiz_34244378_proje";
         kısımları alınan domaine ait bilgiler olduğu için bunları xampp için uygun hale getirmek için 
         
         $host="localhost";
         
         $user="root";
         
         $pass="";
         
         $name="proje"; 
         haline getiriniz. Mysql bağlantıları sağlanmış olup database hazır hale gelmektedir.
         
   4.Kurulum tamamlanmıştır.
   
   #### Bilgilendirme Videosu 
   https://youtu.be/s2bFxbUBfkQ
         
       
         
