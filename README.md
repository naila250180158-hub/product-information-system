# Product Information System

Mini Project 1 — Pemrograman Web (Pertemuan 2): sistem informasi produk sederhana berbasis PHP, dirancang dengan arsitektur berlapis (layered architecture).

## Arsitektur

Sistem ini terdiri dari tiga layer yang saling terhubung:

### 1. Data Layer — `products.php`
Menyimpan data produk dalam struktur array multidimensi. Setiap produk memiliki 6 atribut: ID, Nama, Kategori, Harga, Stok, dan Deskripsi.

### 2. Processing Layer — `functions.php`
Berisi fungsi `hitungTotalNilaiStok()` yang menghitung total nilai aset gudang (harga × stok, dijumlahkan seluruh produk), serta logika kondisional untuk menandai produk dengan stok kritis (stok < 3).

### 3. Presentation Layer — `index.php`
Menyatukan Data Layer dan Processing Layer menggunakan `require_once`, lalu merender data ke tabel HTML menggunakan perulangan `foreach`. Baris dengan stok kritis ditandai warna berbeda.

## Fitur
- Menampilkan data produk dalam tabel HTML
- Menghitung total nilai stok gudang secara otomatis
- Menandai baris dengan stok kritis (kurang dari 3) berwarna merah muda

## Struktur File
├── products.php → Data Layer
├── functions.php → Processing Layer
├── index.php → Presentation Layer
└── README.md
## Teknologi
PHP, HTML, CSS

## Cara Menjalankan
1. Pastikan PHP sudah terpasang
2. Buka terminal di folder proyek
3. Jalankan: `php -S localhost:8000`
4. Buka `http://localhost:8000` di browser