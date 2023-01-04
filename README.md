Untuk menjalankan program ini membutuhkan Versi PHP ^7.4 atau lebih tinggi
Dan memiliki driver sqlsrv pada PHP
software pendukung

1. install composer
   https://getcomposer.org

2. install driver sqlsrv
   https://learn.microsoft.com/id-id/sql/connect/php/download-drivers-php-sql-server?view=sql-server-ver16

Cara instalasi

1. Buka File .env.example.
2. Buat file baru bernama .env copy seluruh isi file .env.example lalu paste pada file .env
3. Buka Terminal VSCode lalu ketik "composer update" pada terminal dan enter
4. Langkah Berikutnya ketik "php artisan key:generate" pada terminal lalu enter
5. Selanjutnya ketik "php artisan serve" untuk menjalankan server Laravel
6. Default url pada laravel http://127.0.0.1:8000 silahkan buka url tertera pada browser
