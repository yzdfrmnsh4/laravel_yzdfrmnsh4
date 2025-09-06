# Laravel Screening Test - CRUD Users

Project ini merupakan hasil pengerjaan **screening test** untuk posisi Junior Programmer di Terakorp Indonesia.  
Project menggunakan **Laravel 11**, **AJAX**, **DataTables**, dan **Bootstrap 5** untuk sistem CRUD sederhana (Users).

---

## 🛠️ Prasyarat

Sebelum menjalankan project ini, pastikan sudah menginstall:

- PHP >= 8.x  
- Composer  
- MySQL / MariaDB  
- Node.js & npm  
- Browser modern (Chrome / Firefox / Edge)

---

## ⚙️ Setup Project

1. **Clone repository**  
    ~ git clone https://github.com/yzdfrmnsh4/laravel_yzdfrmnsh4.git
    ~ cd laravel_yzdfrmnsh4
   
2. Install dependencies
    ~ composer install
    ~ npm install
    ~ npm run dev
   
3. Konfigurasi environment
   ~ cp .env.example .env
   
4. Edit .env sesuai database:
    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=test_db
    DB_USERNAME=root
    DB_PASSWORD=your_mysql_password
   
5. Generate application key
    ~ php artisan key:generate
   
6. Jalankan Migrate :
    ~ php artisan migrate
   
7. Jalankan Development Server :
    ~ php artisan serve
    ~ npm run dev 
