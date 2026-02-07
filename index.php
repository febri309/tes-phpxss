<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Cari Barang</title>
    <style>
        body { font-family: sans-serif; padding: 20px; }
        .search-box { margin-bottom: 20px; }
        .result { padding: 10px; border: 1px solid #ddd; background: #f9f9f9; }
    </style>
</head>
<body>

    <h1>Pencarian</h1>
    
    <div class="search-box">
        <form action="" method="GET">
            <label for="query">Cari Produk:</label>
            <input type="text" id="query" name="q" placeholder="Contoh: Sepatu...">
            <button type="submit">Cari</button>
        </form>
    </div>

    <?php
    $products = ['Sepatu Adidas', 'Kaos Polos', 'Topi Trucker', 'Jaket Denim'];

    if (isset($_GET['q'])) {
        $search_query = $_GET['q'];

        echo "<div class='result'>";
        
        echo "<h3>Hasil pencarian untuk: " . $search_query . "</h3>"; 
        
        echo "<ul>";
        foreach ($products as $product) {
            if (stripos($product, $search_query) !== false) {
                echo "<li>" . $product . "</li>";
            }
        }
        echo "</ul>";
        
        echo "</div>";
    }
    ?>

</body>
</html>