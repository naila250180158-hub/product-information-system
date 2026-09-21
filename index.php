<?php
// Presentation Layer: menyatukan dan menampilkan data

require_once "products.php";
require_once "functions.php";

$totalNilai = hitungTotalNilaiStok($products);
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Information System</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 30px; }
        table { border-collapse: collapse; width: 100%; }
        th, td { border: 1px solid #ccc; padding: 10px; text-align: left; }
        th { background: #2c82c9; color: #fff; }
        .total { margin-top: 20px; font-weight: bold; }
        .catatan { margin-top: 10px; font-size: 14px; color: #666; }
    </style>
</head>
<body>
    <h1>Product Information System</h1>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>Kategori</th>
                <th>Harga</th>
                <th>Stok</th>
                <th>Deskripsi</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($products as $item): ?>
                <tr style="background: <?= warnaBaris($item["stok"]) ?>;">
                    <td><?= $item["id"] ?></td>
                    <td><?= $item["nama"] ?></td>
                    <td><?= $item["kategori"] ?></td>
                    <td><?= formatRupiah($item["harga"]) ?></td>
                    <td><?= $item["stok"] ?></td>
                    <td><?= $item["deskripsi"] ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

    <p class="total">Total Nilai Stok: <?= formatRupiah($totalNilai) ?></p>
    <p class="catatan">* Baris merah muda = stok kritis (kurang dari 3)</p>
</body>
</html>