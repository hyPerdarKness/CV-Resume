# CV/Resume Scripti
CV yayınlamak için php ile yazılmış olan script.

## Ekran Görüntüleri

Şifreli Giriş -> https://kisaurl.net/5UQd

Anasayfa -> https://kisaurl.net/ciIl

Yönetim Paneli -> https://kisaurl.net/9kzG

## Veritabanı Ayarları

assets/config.php dosyasını düzenleyin;
```php
$dbhost = "localhost";
$dbuser = "root"; //Veritabanı Kullanıcı Adı
$dbpass = ""; //Veritabanı Şifresi
$dbdata = "veritabani"; //Veritabanı Adı
```
## Yönetim Paneli Bilgileri
```
Kullanıcı Adı: admin
Şifre: admin
```
## Kurulum

Veritabanı oluşturup, config.php dosyasına bilgileri girdikten sonra ana dizinde yer alan " cvresume.sql " dosyasını phpMyAdmin ile içeri aktarın.

## Uyarı
Kurulum yaptıktan mutlaka yönetici şifrenizi değiştirin. Ayrıca güvenlik için " yonetim " klasörünün ismini değiştirmeyi unutmayın!