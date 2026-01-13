# UAS_PEMOGRAMAN
#  Sistem Manajemen Gudang (Simple Warehouse App)

Aplikasi web sederhana untuk manajemen data barang (CRUD) berbasis **PHP Native** dengan arsitektur **MVC (Model-View-Controller)** dan **Routing App**. 

Proyek ini dibuat untuk memenuhi tugas **Praktikum Pemrograman Berorientasi Objek (OOP) dan Modular**.

##  Identitas Pembuat
* **Nama:** Jibran Ramdani
* **NIM:** 312410419
* **Prodi:** Teknik Informatika
* **Kampus:** Universitas Pelita Bangsa

---

##  Fitur Utama
Aplikasi ini memiliki fitur-fitur berikut:

1.  **Arsitektur MVC:** Kode program terstruktur rapi memisahkan Logika (Model), Tampilan (View), dan Pengendali (Controller).
2.  **Routing System:** URL yang bersih (Pretty URL) menggunakan konfigurasi `.htaccess`.
3.  **Authentication (Login):**
    * **Admin:** Akses penuh (Create, Read, Update, Delete).
    * **User:** Akses terbatas (Read Only / Hanya melihat data).
4.  **Manajemen Barang:**
    * Input data barang baru.
    * Edit data barang.
    * Hapus data barang (dengan konfirmasi).
5.  **Fitur Pencarian:** Mencari barang berdasarkan nama secara *real-time* query.
6.  **Pagination:** Pembagian halaman data agar tabel tidak terlalu panjang.
7.  **Responsive Design:** Tampilan mobile-friendly menggunakan **Bootstrap 5**.

## 🛠️ Teknologi yang Digunakan
* **Bahasa Pemrograman:** PHP 8 (OOP Style)
* **Database:** MySQL / MariaDB
* **Framework CSS:** Bootstrap 5.3
* **Web Server:** Apache (via XAMPP)

##  Struktur Folder
Berikut adalah struktur folder dalam penerapan konsep Modular MVC:

```text
gudang_app/
├── config/             # Konfigurasi koneksi Database
├── controllers/        # Menghubungkan Model dan View (Logika Alur)
├── models/             # Berinteraksi langsung dengan Database (Query SQL)
├── views/              # Antarmuka Pengguna (UI)
│   ├── auth/           # Halaman Login
│   ├── barang/         # Halaman Tabel & Form Barang
│   └── layouts/        # Template Header & Footer
├── .htaccess           # Pengaturan Routing URL
├── index.php           # Router Utama (Entry Point)
├── style.css           # Kustomisasi CSS Tambahan
└── db_gudang.sql       # File Database (Untuk diimport)
