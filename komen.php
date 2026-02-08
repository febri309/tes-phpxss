<?php
$conn = mysqli_connect('localhost', 'root', '', 'toko_db');


if (isset($_POST['submit'])) {
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $msg = mysqli_real_escape_string($conn, $_POST['msg']);
    
    mysqli_query($conn, "INSERT INTO comments (name, message) VALUES ('$name', '$msg')");
}
?>

<!DOCTYPE html>
<html>
<body>

    <p>
        Menu: <a href="index.php"><< Kembali ke Pencarian Produk</a> | <b>Halaman Komentar</b>
    </p>
    <hr>

    <h1>testi</h1>

    <form action="" method="POST">
        Nama: <br><input type="text" name="name" required><br>
        Pesan: <br><textarea name="msg" required></textarea><br><br>
        <button type="submit" name="submit">Kirim Komentar</button>
    </form>

    <hr>

    <h3>List Komentar:</h3>

    <?php
    $result = mysqli_query($conn, "SELECT * FROM comments ORDER BY id DESC");

    while ($row = mysqli_fetch_assoc($result)) {
        echo "<div style='border:1px solid #ccc; margin:10px; padding:5px;'>";
        echo "<b>" . $row['name'] . ":</b><br>";
        echo $row['message']; 
        
        echo "</div>";
    }
    ?>

</body>
</html>