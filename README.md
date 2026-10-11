# TugasWeb-P10-BlogCRUD

Tugas Rutin 10 Pemrograman Web tentang membuat Blog CRUD menggunakan Laravel.

Nama: Gracia Meilanie Sinaga  
Program Studi: Ilmu Komputer, Universitas Negeri Medan

## Fitur

Pada project ini saya membuat beberapa fitur, yaitu:

- Menambahkan post baru.
- Menampilkan daftar post.
- Mengedit post yang sudah dibuat.
- Menghapus post.
- Menggunakan `Route::resource` untuk mengatur route CRUD.
- Menggunakan layout utama Blade dengan Bootstrap 5.
- Membuat 2 komponen Blade yaitu alert dan card.
- Membuat validasi pada form dan menampilkan pesan error jika data yang dimasukkan tidak sesuai.
- Data yang sudah diisi sebelumnya tetap muncul jika terjadi error pada form.
- Menampilkan pesan berhasil setelah melakukan proses tertentu.
- Menggunakan route model binding.
- Menggunakan pagination dengan 5 post dalam setiap halaman.

## Langkah Instalasi

Untuk menjalankan project ini, langkah-langkah yang saya lakukan yaitu:

1. Memastikan PHP 8.2 atau versi yang lebih baru dan Composer sudah terpasang.
2. Clone repository, kemudian masuk ke folder project.
3. Menjalankan `composer install` untuk menginstall package yang dibutuhkan.
4. Menyalin `.env.example` menjadi `.env`.
5. Menjalankan `php artisan key:generate`.
6. Membuat database dengan nama `blog_p10` di phpMyAdmin.
7. Mengatur database pada file `.env`, yaitu:
   - DB_CONNECTION=mysql
   - DB_HOST=127.0.0.1
   - DB_PORT=3306
   - DB_DATABASE=blog_p10
   - DB_USERNAME=root
   - DB_PASSWORD=
8. Menjalankan `php artisan migrate` untuk membuat tabel database.
9. Menjalankan `php artisan serve`.
10. Membuka `http://127.0.0.1:8000` di browser untuk melihat hasil project.

## Struktur yang Digunakan

Beberapa file dan folder penting yang digunakan pada project ini yaitu:

- `app/Models/Post.php` digunakan untuk model Post.
- `app/Http/Controllers/PostController.php` digunakan untuk mengatur proses CRUD post.
- `routes/web.php` digunakan untuk mengatur route dengan `Route::resource`.
- `resources/views/layouts/app.blade.php` digunakan sebagai layout utama halaman.
- `resources/views/components` digunakan untuk menyimpan komponen alert dan card.
- `resources/views/posts` digunakan untuk menyimpan tampilan post seperti daftar, tambah, edit, detail, dan form.

## Screenshot

### Daftar Post

![Daftar Post](screenshots/daftar.png)

### Tambah Post

![Tambah Post](screenshots/tambah.png)

### Validasi Form

![Validasi Form](screenshots/validasi.png)

### Edit Post

![Edit Post](screenshots/edit.png)

### Pesan Berhasil

![Pesan Berhasil](screenshots/flash.png)

### Pagination

![Pagination](screenshots/pagination.png)