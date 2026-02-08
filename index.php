<!DOCTYPE html>
<html>
<body>

    <p>
        Menu: <b>Pencarian Produk</b> | <a href="komen.php">Ke Halaman Komentar >></a>
    </p>
    <hr>

    <h1>cari apa?</h1>

    <form action="" method="GET">
        Cari Barang: <input type="text" name="q" placeholder="Contoh: Sepatu...">
        <button type="submit">Cari</button>
    </form>

    <br>

    <?php
    $products = ['Sepatu Adidas', 'Kaos Polos', 'Topi THM', 'Jaket Denim', 'Kemeja Flannel'];

    if (isset($_GET['q'])) {
        $search = $_GET['q'];
        echo "Hasil pencarian untuk: <b>" . htmlspecialchars($search) . "</b><br><br>";
        echo "<ul>";
        $found = false;
        foreach ($products as $p) {
            if (stripos($p, $search) !== false) {
                echo "<li>" . $p . "</li>";
                $found = true;
            }
        }
        if (!$found) {
            echo "<li>Produk tidak ditemukan.</li>";
        }
        echo "</ul>";
    }
    ?>

</body>
</html>