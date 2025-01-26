# Blog Application

![Laravel Logo](https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg)
![Filament Logo](https://private-user-images.githubusercontent.com/41773797/257018536-8d5a0b12-4643-4b5c-964a-56f0db91b90a.png?jwt=eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpc3MiOiJnaXRodWIuY29tIiwiYXVkIjoicmF3LmdpdGh1YnVzZXJjb250ZW50LmNvbSIsImtleSI6ImtleTUiLCJleHAiOjE3Mzc4MjU4NTksIm5iZiI6MTczNzgyNTU1OSwicGF0aCI6Ii80MTc3Mzc5Ny8yNTcwMTg1MzYtOGQ1YTBiMTItNDY0My00YjVjLTk2NGEtNTZmMGRiOTFiOTBhLnBuZz9YLUFtei1BbGdvcml0aG09QVdTNC1ITUFDLVNIQTI1NiZYLUFtei1DcmVkZW50aWFsPUFLSUFWQ09EWUxTQTUzUFFLNFpBJTJGMjAyNTAxMjUlMkZ1cy1lYXN0LTElMkZzMyUyRmF3czRfcmVxdWVzdCZYLUFtei1EYXRlPTIwMjUwMTI1VDE3MTkxOVomWC1BbXotRXhwaXJlcz0zMDAmWC1BbXotU2lnbmF0dXJlPWY2Mjc5MDljNzY3ZmRkNmY0MDBkZGVkNTY4ZDNkOWE3MGNlMzJjYmQwNzRhM2ViNzFhNjZjMmYxZTQzNjYxNzgmWC1BbXotU2lnbmVkSGVhZGVycz1ob3N0In0.WybQQNuD7HoeL9XxtWGfANukw3x6jKS-NQ-Ys3Lb9fo)

<br>

![TailwindCSS Logo](https://raw.githubusercontent.com/tailwindlabs/tailwindcss/HEAD/.github/logo-light.svg)


![Flowbite Logo](https://flowbite.s3.amazonaws.com/brand/logo-light/type/flowbite-logo.png)

# Description

This is a Laravel web application with Tailwind CSS, Vite, and Font Awesome integration. The application includes basic layout structure with a responsive navbar, main content area, and footer. It also includes meta tags for SEO optimization and Open Graph support for better sharing experiences on social media.

## Features
- **Responsive Layout**: The application uses Tailwind CSS for responsive design.
- **SEO Optimized**: Meta tags for SEO, Open Graph, and Twitter Cards.
- **Social Media Links**: Integration with popular social media platforms like Facebook, Twitter, GitHub, and Dribbble.
- **Vite Integration**: Optimized asset bundling with Vite for faster development and production builds.

## Prerequisites

Before running the application, make sure you have the following installed:

- [PHP 8.0+](https://www.php.net/)
- [Composer](https://getcomposer.org/)
- [Node.js](https://nodejs.org/)
- [NPM](https://www.npmjs.com/) or [Yarn](https://yarnpkg.com/)
- [Laravel 11](https://laravel.com/)

## Installation

### 1. Clone the Repository

Clone the repository to your local machine:

```bash
git clone https://github.com/hagiik/simple-blog-with-laravel-11.git
cd simple-blog-with-laravel-11
```

### 2. Install PHP Dependencies

Run the following command to install the PHP dependencies:

```bash
composer install
```

### 3. Install JavaScript Dependencies

Run the following command to install the JavaScript dependencies:

```bash
npm install
```

or if you're using Yarn:

```bash
yarn install
```

### 4. Environment Setup

Make sure to set up your `.env` file. You can copy the example environment file:

```bash
cp .env.example .env
```

Then, generate the application key:

```bash
php artisan key:generate
```

### 5. Database Setup

Make sure your database is set up and configured in your `.env` file. Then, run the migrations:

```bash
php artisan migrate
```

### 6. Build the Assets

To compile your assets with Vite, run the following command:

```bash
npm run dev
```

For production, use:

```bash
npm run build
```

### 7. Serve the Application

Start the development server with:

```bash
php artisan serve
```

The application will be available at `http://localhost:8000`.

## Folder Structure

```
/app                    # Application logic
   /Filament            # Filament Dashboard Admin
/resources              # Views, CSS, and assets
    /views              # Blade templates
    /css                # CSS files
    /js                 # JavaScript files
/routes                 # Application routes
/public                 # Public assets (served to the browser)
```

## Configuration

The main configuration files can be found in:

- `.env`: Environment-specific settings.
- `config/app.php`: Application-wide settings.

## Built With

- [Laravel 11](https://laravel.com/) - PHP Framework
- [Tailwind CSS](https://tailwindcss.com/) - Utility-first CSS framework
- [Vite](https://vitejs.dev/) - Next Generation Frontend Tooling
- [Font Awesome](https://fontawesome.com/) - Icon library

## Contributing

If you'd like to contribute to the project, feel free to fork the repository and submit a pull request with your improvements or bug fixes.

### Steps to contribute:
1. Fork the repository.
2. Create a new branch (`git checkout -b feature/your-feature-name`).
3. Commit your changes (`git commit -am 'Add new feature'`).
4. Push to your branch (`git push origin feature/your-feature-name`).
5. Create a pull request.

## License

This project is licensed under the MIT License - see the [LICENSE](LICENSE) file for details.

## Acknowledgements

- [Laravel](https://laravel.com/) for providing a powerful and elegant framework.
- [Tailwind CSS](https://tailwindcss.com/) for making it easy to build responsive UIs.
- [Vite](https://vitejs.dev/) for blazing-fast front-end tooling.
```

### Penjelasan:
- **Installation**: Langkah-langkah detail untuk mengkloning, menginstal dependensi, dan menyiapkan lingkungan.
- **Environment Setup**: Mengatur file `.env` dan menjalankan perintah untuk menghasilkan kunci aplikasi.
- **Database Setup**: Instruksi untuk menyiapkan database dan menjalankan migrasi.
- **Build the Assets**: Kompilasi aset dengan Vite untuk pengembangan dan produksi.
- **Serve the Application**: Menjalankan server pengembangan Laravel.
- **Folder Structure**: Penjelasan tentang struktur folder dalam proyek.
- **Configuration**: Informasi tentang file konfigurasi yang digunakan.
- **Contributing**: Instruksi bagi siapa saja yang ingin berkontribusi ke proyek.
- **License**: Menyebutkan lisensi proyek.
- **Acknowledgements**: Pemberian penghargaan kepada teknologi yang digunakan.

Cukup salin kode di atas dan tempelkan ke file `README.md` Anda. Dengan ini, pengembang lain yang bergabung dengan proyek ini atau pengguna yang mengunduhnya akan tahu bagaimana cara menjalankan dan berkontribusi pada aplikasi Anda.