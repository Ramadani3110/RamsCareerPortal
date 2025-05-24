# RamsHire - Internal Job Portal

RamsHire adalah aplikasi portal lowongan pekerjaan internal perusahaan yang memungkinkan pelamar mengunggah CV dan portofolio secara langsung. Aplikasi ini dibangun menggunakan Laravel, Livewire, dan Flowbite.

## 🚀 Fitur Utama

- Manajemen lowongan pekerjaan internal
- Pendaftaran pelamar dengan unggah CV dan portofolio
- Integrasi Livewire untuk pengalaman interaktif
- Desain UI modern dengan Tailwind CSS + Flowbite

---

## ⚙️ Teknologi yang Digunakan

- [Laravel](https://laravel.com/)
- [Livewire](https://livewire.laravel.com/)
- [Tailwind CSS](https://tailwindcss.com/)
- [Flowbite](https://flowbite.com/)

---

## 🛠️ Cara Instalasi

### 1. Clone Repository
```bash
git clone https://github.com/Ramadani3110/RamsCareerPortal.git
cd RamsCareerPortal
```
### 2. Install Depedensi
```bash
composer install
# atau jika perlu update
composer update

npm install
```
### 3. Konfigurasi environment
```bash
cp .env.example .env
php artisan key:generate
```
Edit file .env dan sesuaikan konfigurasi database:
```.env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=laravel
DB_USERNAME=root
DB_PASSWORD=
```
### 4. Jalankan Migrasi dan Seeder
```bash
php artisan migrate
php artisan db:seed
```

### 5. ▶️ Menjalankan Aplikasi
Jalankan Laravel server:
```bash
php artisan serve
```
Jalankan proses frontend:
```bash
npm run dev
```


