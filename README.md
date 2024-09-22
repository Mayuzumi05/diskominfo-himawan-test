<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## Laravel 10

Project ini saya buat dengan menggunakan versi laravel 10 dan PHP 8.1.25

Dokumentasi Laravel 10 : https://laravel.com/docs/10.x
Instalasi XAMPP dengan PHP versi 8.1.25 : [Link XAMPP]
Instalasi Composer : https://getcomposer.org/download/

## Instalasi Project
1. Git clone atau download project melalui github
2. Menyalakan Apache Server dan MySQL Database di XAMPP
3. Setting nama database pada file .env (baris DB_DATABASE)
4. composer install pada terminal untuk mendapatkan file vendor
5. php artisan key:generate pada terminal untuk generate key pada env
6. php artisan migrate pada terminal untuk migrasi tabel database
7. php artisan db:seed pada terminal. Penilaian menggunakan metode automation testing yang dimana pada contoh soal di create order memerlukan product dengan id 2 dan 3 yang sebelumnya belum pernah dibuat. oleh karena itu saya berikan sample data seeder agar penilai bisa melakukan automation testing sekali klik tanpa perlu menambah data manual.
8. php artisan serve di terminal untuk menjalankan project

[Link XAMPP]: <https://sourceforge.net/projects/xampp/files/XAMPP%20Windows/8.1.25/xampp-windows-x64-8.1.25-0-VS16-installer.exe>