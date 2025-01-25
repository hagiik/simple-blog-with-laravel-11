# Blog Application

![Laravel Logo](https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg)
![Filament Logo](https://private-user-images.githubusercontent.com/41773797/257018536-8d5a0b12-4643-4b5c-964a-56f0db91b90a.png?jwt=eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpc3MiOiJnaXRodWIuY29tIiwiYXVkIjoicmF3LmdpdGh1YnVzZXJjb250ZW50LmNvbSIsImtleSI6ImtleTUiLCJleHAiOjE3Mzc4MjU4NTksIm5iZiI6MTczNzgyNTU1OSwicGF0aCI6Ii80MTc3Mzc5Ny8yNTcwMTg1MzYtOGQ1YTBiMTItNDY0My00YjVjLTk2NGEtNTZmMGRiOTFiOTBhLnBuZz9YLUFtei1BbGdvcml0aG09QVdTNC1ITUFDLVNIQTI1NiZYLUFtei1DcmVkZW50aWFsPUFLSUFWQ09EWUxTQTUzUFFLNFpBJTJGMjAyNTAxMjUlMkZ1cy1lYXN0LTElMkZzMyUyRmF3czRfcmVxdWVzdCZYLUFtei1EYXRlPTIwMjUwMTI1VDE3MTkxOVomWC1BbXotRXhwaXJlcz0zMDAmWC1BbXotU2lnbmF0dXJlPWY2Mjc5MDljNzY3ZmRkNmY0MDBkZGVkNTY4ZDNkOWE3MGNlMzJjYmQwNzRhM2ViNzFhNjZjMmYxZTQzNjYxNzgmWC1BbXotU2lnbmVkSGVhZGVycz1ob3N0In0.WybQQNuD7HoeL9XxtWGfANukw3x6jKS-NQ-Ys3Lb9fo)

<br>

![TailwindCSS Logo](https://raw.githubusercontent.com/tailwindlabs/tailwindcss/HEAD/.github/logo-light.svg)


![Flowbite Logo](https://flowbite.s3.amazonaws.com/brand/logo-light/type/flowbite-logo.png)



## Deskripsi
Blog Application adalah platform blogging modern yang memungkinkan pengguna untuk membuat dan mengelola artikel dengan mudah. Aplikasi ini dibangun menggunakan **Laravel 11** sebagai framework utama, **Filament** untuk dashboard pengelolaan, **TailwindCSS** untuk styling responsif, dan **Flowbite** untuk komponen UI. Aplikasi ini juga dilengkapi dengan fitur **Auto Meta** untuk mendukung kebutuhan SEO secara otomatis.

## Fitur Utama

### 1. Manajemen Blog
- Membuat, mengedit, dan menghapus artikel.
- Mendukung pengelompokan artikel berdasarkan kategori.
- Penambahan gambar pada artikel.

### 2. Optimisasi SEO Otomatis
- Auto Meta Title, Description, dan Keywords untuk setiap artikel.
- Struktur data yang ramah mesin pencari.

### 3. Dashboard Admin
- Menggunakan **Filament** untuk antarmuka dashboard yang modern dan mudah digunakan.
- Statistik artikel dan pengguna.

### 4. Desain Responsif
- Memanfaatkan **TailwindCSS** dan **Flowbite** untuk tampilan yang responsif dan interaktif di berbagai perangkat.

## Instalasi

Ikuti langkah-langkah berikut untuk menginstal aplikasi ini di lingkungan lokal Anda:

### Prasyarat
- PHP >= 8.2
- Composer
- Node.js & npm
- Database (MySQL/PostgreSQL/SQLite)

### Langkah Instalasi
1. Clone repositori ini:
   ```bash
   https://github.com/hagiik/simple-blog-with-laravel-11.git
   cd simple-blog-with-laravel-11
   ```

2. Install dependensi:
   ```bash
   composer install
   npm install && npm run build
   ```

3. Salin file `.env` dan sesuaikan konfigurasi:
   ```bash
   cp .env.example .env
   ```

4. Generate application key:
   ```bash
   php artisan key:generate
   ```

5. Migrasikan database:
   ```bash
   php artisan migrate
   ```

6. Jalankan server lokal:
   ```bash
   php artisan serve
   ```

## Penggunaan
Akses aplikasi di browser Anda melalui URL berikut:
```
http://127.0.0.1:8000
```

## Teknologi yang Digunakan
- **Laravel 11** - Framework PHP untuk pengembangan aplikasi backend.
- **Filament** - CMS modern untuk pengelolaan data.
- **TailwindCSS** - Framework CSS untuk styling yang fleksibel.
- **Flowbite** - Komponen UI siap pakai yang terintegrasi dengan TailwindCSS.

## Kontribusi
Kontribusi sangat diterima! Silakan buat pull request untuk perbaikan atau penambahan fitur baru.

## Lisensi
Aplikasi ini dilisensikan di bawah [MIT License](LICENSE).

---

Dibuat dengan ❤️ menggunakan **Laravel**, **Filament**, **TailwindCSS**, dan **Flowbite**.
