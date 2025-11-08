# 🎓 EduFun – Laravel Web Programming Project

EduFun adalah website pendidikan berbasis Laravel yang dikembangkan untuk memenuhi tugas **UTS mata kuliah Web Programming**.  
Website ini menyajikan artikel edukatif bertema *Data Science* dan *Network Security*, dengan tampilan modern dan responsif menggunakan **Bootstrap 5**.

---

## 🧠 Deskripsi Singkat

EduFun menyediakan akses pembelajaran berbentuk artikel berbahasa Indonesia yang disajikan secara online.  
Website ini mengimplementasikan arsitektur **MVC (Model–View–Controller)** dengan framework **Laravel 12** dan database **MySQL**.

---

## 🚀 Fitur Utama

| Fitur | Deskripsi |
|-------|------------|
| 🏠 Home | Menampilkan daftar artikel terbaru dengan gambar dan ringkasan |
| 📚 Category | Menampilkan kategori artikel: *Data Science* & *Network Security* |
| ✍️ Writers | Menampilkan daftar penulis dan artikel yang mereka buat |
| 🔥 Popular | Menampilkan artikel dengan jumlah *views* terbanyak |
| ℹ️ About | Menampilkan profil dan deskripsi singkat EduFun |

---

## ⚙️ Teknologi yang Digunakan

| Komponen | Teknologi |
|-----------|------------|
| Framework | Laravel 12.37 |
| Bahasa | PHP 8.2 |
| Database | MySQL |
| Frontend | Bootstrap 5 |
| Template Engine | Blade |
| Local Server | XAMPP |

---

## 🛠️ Instalasi dan Menjalankan Project

### 1️⃣ Clone Repository
git clone https://github.com/pupusatoru/Quiz-Web-Prog-Kelson
cd EduFun

### 2️⃣ Install Dependencies
composer install

### 3️⃣ Setup Environment
Buat file .env dari contoh:
copy .env.example .env

Lalu ubah bagian database:
DB_DATABASE=edufun_db
DB_USERNAME=root
DB_PASSWORD=

### 4️⃣ Generate Key
php artisan key:generate

### 5️⃣ Jalankan Migration dan Seeder
php artisan migrate:fresh --seed

### 6️⃣ Jalankan Server
php artisan serve
