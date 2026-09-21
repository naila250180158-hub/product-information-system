<?php
// Processing Layer: fungsi pengolah data

// Menghitung total nilai aset gudang (harga x stok, dijumlahkan)
function hitungTotalNilaiStok($products) {
    $total = 0;
    foreach ($products as $item) {
        $total += $item["harga"] * $item["stok"];
    }
    return $total;
}

// Mengecek apakah stok kritis (kurang dari 3)
function isStokKritis($stok) {
    return $stok < 3;
}

// Menentukan warna baris tabel berdasarkan stok
function warnaBaris($stok) {
    if (isStokKritis($stok)) {
        return "#ffe0e0"; // merah muda untuk stok kritis
    }
    return "#ffffff"; // putih untuk stok normal
}

// Format angka ke Rupiah
function formatRupiah($angka) {
    return "Rp " . number_format($angka, 0, ",", ".");
}