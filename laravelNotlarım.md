# Laravel Başlangıç Notları

## Başlangıç

Merhaba bugün laravel ile sıfırdan proje geliştirmeye başladım. Bu projeyi kurs ve araştırmalarım eşliğinde ilerleteceğm. Bu süre boyunca önemli bulduğum, karşılaştığım hatalar ve çözümleri not edeceğim. 


> **⚠ WARNING: Laravel 8 Error: Target class [HomeController] does not exist**  
>  Projeyi dökümantasyona göre oluşturdum. Daha sonra CLI komutu ( php artisan make:controller HomeController) ile controller dosyasını oluşturdum. Route yapısını da belirledikten sonra projemi serve yaptım. Karşılastığım hatanın çözümü de projede RouteServiceProvider dosyasında yorum satırı halinde olan $namespace 'in yorum satırını kaldırmaktı. 
[-->Çözümü incele <--](https://laracasts.com/discuss/channels/laravel/laravel-8-error-target-class-homecontroller-does-not-exist)


