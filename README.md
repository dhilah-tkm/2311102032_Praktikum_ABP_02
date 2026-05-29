#  Tugas Praktikum Aplikasi Berbasis Platform
##  Praktikum 01
Project ini adalah halaman web bertema **Ramadan** yang dibuat menggunakan **Bootstrap 5**.  
Website ini memiliki fitur interaktif berupa **slot machine sederhana** yang memungkinkan pengguna memutar slot untuk mendapatkan **THR Lebaran**.

**Screenshot Hasil**
<img width="1920" height="1080" alt="MacBook Air" src="https://github.com/user-attachments/assets/492dbf2b-eab0-4d73-a958-747ac8a55740" />

##  Praktikum 02
Project ini adalah aplikasi **StudyTrack** berbasis **Node.js** dan **Bootstrap 5** untuk manajemen tugas kuliah.
Website ini memiliki fitur Full CRUD (Create, Read, Update, Delete) yang terintegrasi dengan JSON dan plugin jQuery DataTable untuk pengelolaan data tugas secara interaktif.

**Screenshot Hasil**
![WhatsApp Image 2026-03-27 at 15 36 54 (1)](https://github.com/user-attachments/assets/4ccbb630-5ac2-4f7a-9d2f-8e17ef280e7d)

##  Praktikum 03
Project ini adalah aplikasi berbasis **PHP Native** sederhana untuk mengelola dan menampilkan data nilai mahasiswa. Program ini menerapkan konsep dasar pemrograman seperti fungsi, struktur kontrol, dan manipulasi array.

**Screenshot Hasil**
![WhatsApp Image 2026-04-02 at 21 12 21](https://github.com/user-attachments/assets/82fef457-634b-441c-9a97-fcab2b8bbc08)

##  Praktikum 04
Project ini adalah aplikasi berbasis **PHP Native** sederhana untuk mengelola dan menampilkan data profil secara asinkron tanpa memuat ulang halaman. Program ini menerapkan konsep dasar pemrograman web seperti manipulasi array, penggunaan fungsi header JSON, dan integrasi JavaScript Fetch API.

**Screenshot Hasil**
<img width="1600" height="899" alt="WhatsApp Image 2026-04-16 at 23 43 05" src="https://github.com/user-attachments/assets/1e19bfb7-0958-487a-8d15-fd35be27b590" />

## Praktikum 05: Sistem Inventori Toko Mas Wowo & Pak Cokomi
Project ini adalah aplikasi manajemen inventori sederhana berbasis web yang dibangun menggunakan **Laravel 11**. Aplikasi ini dirancang untuk membantu Pak Cokomi mengelola stok barang di Toko Mas Wowo dengan sistem keamanan yang terintegrasi.

### Fitur & Dokumentasi Sistem

### 1. Fitur Utama
*   **Autentikasi (Laravel Breeze)**: Mengamankan akses sehingga hanya Pak Cokomi yang bisa mengelola data setelah login.
*   **Manajemen CRUD**:
    *   **Create**: Form tambah barang dengan validasi input.
    *   **Read**: Data Table untuk melihat daftar stok secara real-time.
    *   **Update**: Fitur edit informasi barang.
    *   **Delete**: Penghapusan data menggunakan **Modal Konfirmasi** untuk mencegah kesalahan klik.
*   **Database Seeding**: Mengisi data otomatis menggunakan `ProductFactory`.

### 2. Dokumentasi Teknis (Arsitektur)
*   **Model**: `app/Models/Product.php` (Mengatur struktur data produk).
*   **Controller**: `app/Http/Controllers/ProductController.php` (Mengatur logika bisnis dan alur data).
*   **View**: `resources/views/products/` (Berisi template Blade untuk UI).
*   **Database**: Menggunakan **SQLite** yang efisien untuk skala praktikum.
*   **Frontend**: Dikompilasi menggunakan **Vite** dengan framework **Tailwind CSS**.

## ⚙️ Cara Instalasi & Menjalankan
1. **Clone/Download** project ini.
2. Jalankan perintah berikut di terminal:
   ```bash
   composer install
   npm install
   php artisan migrate --seed
   npm run build
   
**Screenshot Hasil**

Login
<img width="1600" height="850" alt="WhatsApp Image 2026-04-30 at 23 36 01" src="https://github.com/user-attachments/assets/4b3f0825-75e1-4b10-bc70-7ccbca07734a" />

Dashboard
<img width="1600" height="854" alt="WhatsApp Image 2026-04-30 at 23 36 13" src="https://github.com/user-attachments/assets/5868bb9e-6359-4b56-bf34-1893c5f2a823" />

Tambah Produk
<img width="1600" height="850" alt="WhatsApp Image 2026-04-30 at 23 48 38" src="https://github.com/user-attachments/assets/16681a62-4d2b-4f2e-93de-9e7254b154d4" />

Tampilan Dashboard setelah ditambahkan produk
<img width="1600" height="850" alt="WhatsApp Image 2026-04-30 at 23 37 02" src="https://github.com/user-attachments/assets/2833812f-e22a-4310-92e1-2fdd086d1efb" />

Edit Produk
<img width="1600" height="844" alt="WhatsApp Image 2026-04-30 at 23 38 10" src="https://github.com/user-attachments/assets/2ab4dc72-1f08-4f2a-90ee-3719eb82dd93" />

Tampilan Dashboard setelah update produk
<img width="1600" height="844" alt="WhatsApp Image 2026-04-30 at 23 38 37" src="https://github.com/user-attachments/assets/732f0256-d184-46ef-9814-393a0d8e6a76" />

Hapus Produk
<img width="1600" height="847" alt="WhatsApp Image 2026-04-30 at 23 38 39" src="https://github.com/user-attachments/assets/d7ab2c19-5b55-4046-a4d8-2015f5834410" />

## Praktikum 06: Demo Aplikasi di Android Studio
Project ini adalah aplikasi default yang dibangun menggunakan Flutter

**Screenshot Hasil**
<img width="1600" height="899" alt="WhatsApp Image 2026-04-30 at 21 59 02" src="https://github.com/user-attachments/assets/0ae540c5-bd73-4a08-a67d-175c4ea11579" />

## Praktikum 07: Flutter Basic UI Widgets
Project ini adalah aplikasi berbasis Flutter sederhana untuk mendemonstrasikan penggunaan berbagai widget UI dasar dalam satu tampilan.

Penjelasan Singkat Widget:
1. Container: Digunakan sebagai widget pembungkus dasar yang memungkinkan kita mengatur warna latar belakang, margin, padding, serta dekorasi seperti border radius.

2. Stack: Widget ini berfungsi untuk menumpuk elemen secara berlapis (z-axis), sehingga kita bisa meletakkan teks atau gambar di atas widget lainnya.
   
3. GridView: Digunakan untuk menampilkan item dalam bentuk grid atau baris-kolom. Pada project ini, GridView menampilkan 6 item dengan pembagian 3 kolom.
   
4. ListView: Menampilkan daftar item secara linear (atas ke bawah). Digunakan untuk list statis sederhana seperti daftar A, B, dan C.

5. ListView.builder: Versi ListView yang lebih efisien karena merender item hanya saat terlihat di layar. Widget ini otomatis mengambil data dari sebuah array.
   
6. ListView.separated: Mirip dengan builder, namun memiliki parameter tambahan separatorBuilder untuk menyisipkan garis pembatas (divider) di antara setiap item secara otomatis.

**Screenshot Hasil**

<img width="433" height="871" alt="WhatsApp Image 2026-05-15 at 14 24 24" src="https://github.com/user-attachments/assets/aaf4bf11-d1fe-44e0-9079-1b38f593a0a9" />

<img width="448" height="871" alt="WhatsApp Image 2026-05-15 at 14 24 45" src="https://github.com/user-attachments/assets/3882a22c-b133-47df-8601-db9505bc0994" />

## Praktikum 08: Notifikasi & Hardware API
Project ini adalah aplikasi Flutter sederhana yang mengintegrasikan fitur pengambilan foto langsung melalui kamera perangkat (**Camera API**), pemilihan berkas gambar dari galeri penyimpanan (**image_picker**), serta sistem pengingat otomatis menggunakan notifikasi lokal (**flutter_local_notifications**). Aplikasi ini dirancang menggunakan desain antarmuka Material Design 3 yang responsif dan interaktif.

Penjelasan Singkat Widget:
1. HomeScreen (StatefulWidget): Menyimpan status (state) perubahan data berkas gambar secara dinamis dan menangani daur hidup (lifecycle) inisialisasi manajemen notifikasi melalui initState.

2. Scaffold: Menyediakan kerangka struktur visual standar Android/iOS yang mewadahi bar navigasi atas (AppBar) dan area konten utama (body).

3. AppBar: Menampilkan komponen tajuk/identitas di bagian paling atas aplikasi dengan penataan teks terpusat (center title).

4. Column: Mengatur tata letak tumpukan komponen (Display Gambar, Tombol Kamera, dan Tombol Galeri) secara linier dari atas ke bawah (vertikal).

5. Expanded & Center: Kombinasi untuk menginstruksikan komponen penampil gambar agar mengisi sisa ruang layar secara fleksibel dan menjaganya tetap seimbang di titik tengah.

6. Container: Digunakan sebagai placeholder box bersyarat (conditional rendering) yang memberikan petunjuk visual (ikon & teks abu-abu) sebelum pengguna memasukkan gambar.

7. ClipRRect: Berfungsi memotong (clipping) sudut tajam pada widget Image.file sehingga gambar memiliki sudut melengkung halus (rounded corner) senada dengan desain penampung.

8. Image.file: Berperan memuat dan merender secara instan data biner gambar langsung dari alamat path penyimpanan lokal perangkat.

9. ElevatedButton.icon & OutlinedButton.icon: Komponen tombol aksi modern dengan penanda ikon grafis yang memicu penanganan interaksi metode penangkapan media perangkat keras.

**Screenshot Hasil**
Home Screen
<img width="433" height="871" alt="Screenshot_20260530_000722" src="https://github.com/user-attachments/assets/f591a20d-00ee-42de-b151-35d40f9322aa" />
Buka Kamera
<img width="433" height="871" alt="Screenshot_20260529_232622" src="https://github.com/user-attachments/assets/d512f15f-0405-4571-862a-59821a44e810" />
Ambil Foto dari Galeri
<img width="433" height="871" alt="Screenshot_20260529_232707" src="https://github.com/user-attachments/assets/41efe5c4-7e96-49e2-b67e-44ffd6eb972b" />
Notifikasi Berhasil Memuat Gambar
<img width="433" height="871" alt="Screenshot_20260529_232847" src="https://github.com/user-attachments/assets/48a31813-80d2-4239-9fb9-a2f6222b5cc8" />



