# Penjelasan

Proyek ini adalah sebuah CRUD yang terdiri dari 2 `table` yaitu `t_kelas` dan `t_siswa`, `t_siswa` berisi data data informasi milik siswa tersebut dan `t_kelas` berisi data kelas tersebut.


# Komponen

Setiap `CRUD` diatur di dalam `controller` nya masing masing, `CRUD` untuk `t_siswa` di atur di dalam file `SiswaController` dan `CRUD` untuk `t_kelas` di antur di dalam file `KelasController`.

## Cara Penginstallan

Pertama ketik di cmd `composer create-project laravel/lumen nama-project --prefer-dist` Selain itu, download postman untuk melihat/mengecek database Pada postman ada beberapa method :

-   `POST` Untuk menampilkan database atau read pada crud.
-   `GET` Untuk menambah dan mengubah pada database.
-   `DELETE` Untuk menghapus data pada database.

## Cara Kerja
-   Pertama, install terlebih dahulu lumen.
-   Kedua, membuat database dengan ketik `php artisan make:migration NameDatabase` pada cmd.
-   Ketiga, memebuat controller dengan ketik `php artisan wm:controller NameController` pada cmd.
-   Keempat, buatlah beberapa function supaya bekerja pada postman.

