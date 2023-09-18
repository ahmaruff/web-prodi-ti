<p align="center">
<img src="./readme-img/logo.png" width="400" alt="Laravel Logo">
</p>

## Web Prodi Teknik Informatika
Project ini merupakan project yang dibuat untuk lomba Web Programming Euphoria 2023 by HIMTI UNSIQ.  
Project ini merupakan project Sistem Informasi & Landing Page untuk Prodi Teknik Informatika UNSIQ. Project ini dibuat menggunakan Laravel 10 dengan frontend menggunakan Tailwind CSS & AlpineJS

## Screenshot

![home - landing page](./readme-img/home1.png)

![home - profil lulusan](./readme-img//home2.png)

![berita](./readme-img/berita.png)

![dosen](./readme-img/dosen.png)

![unduhan](./readme-img/unduhan.png)

![admin-login](./readme-img/login-admin.png)

![admin-dashboard](./readme-img/dashboard-admin.png)

![admin-dosen](./readme-img/dosen-admin.png)

![admin-tambah-artikel](./readme-img//tambah-artikel.png)

## Instalation

- Clone
- install dependencies `composer install`
- set .env file (database,appkey,etc)
- run migration `php artisan migrate`
- run seeder
  - `php artisan db:seed UserSeeder`  
  - `php artisan db:seed HimtiProkerSeeder`
  - `php artisan db:seed InfoAkademikSeeder`
  - `php artisan db:seed ProfilDosenSeeder`
  - `php artisan db:seed ProfilLulusanSeeder`
  - `php artisan db:seed ProfilProdiSeeder`
- run server `php artisan serve`
