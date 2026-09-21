# Product Information System

Mini Project 1 Pemrograman Web: sistem informasi produk sederhana berbasis PHP.

## Fitur
- Menampilkan data produk dalam tabel HTML
- Menghitung total nilai stok gudang
- Menandai baris dengan stok kritis (kurang dari 3) berwarna merah muda

## Struktur File
- `products.php` : data layer (array multidimensi produk)
- `functions.php` : processing layer (hitung total nilai stok, cek stok kritis, format Rupiah)
- `index.php` : presentation layer (tabel HTML dengan foreach)

## Teknologi
PHP, HTML, CSS

## Cara Menjalankan
1. Pastikan PHP sudah terpasang
2. Buka terminal di folder proyek
3. Jalankan: `php -S localhost:8000`
4. Buka `http://localhost:8000` di browser
