<?php
session_start(); // Memulai sesi
?>

<!DOCTYPE html>
<html>
<head>
    <title>Listing Produk</title>
  <link rel="stylesheet" type="text/css" href="asset/listing.css">


</head>
<body>
    
    <h2>Selamat datang| selamat belajar, <?php echo $_SESSION['username']; ?>!</h2>
    <h3>Daftar mentor:</h3>
    <!-- Tambahkan ini di dalam konten file listing_produk.php -->
<a href="dashboard.php" class="btn btn-primary">Menuju Dashboard LTE</a>

    <div class="product-container">

    
        <?php
        // Data produk (nama, deskripsi, harga, dan nama gambar)
        $products = array(
            array("kak tono", "full stack development", 100, "avatar.png"),
            array("kak rani", "react js ", 150, "avatar2.png"),
            array("kak jeni", "front end", 200, "avatar3.png"),
            array("kak firman", "full back end", 250, "avatar4.png"),
            array("kak kelvin", "vanila javascript", 300, "avatar5.png"),
            array("kak rehan", "laravel", 300, "avatar.png"),
        );

        // Loop untuk menampilkan produk
        foreach ($products as $product) {
            echo '<div class="product">';
            echo '<img src="asset/images/' . $product[3] . '" alt="' . $product[0] . '">';
            echo '<h4>' . $product[0] . '</h4>';
            echo '<p>' . $product[1] . '</p>';
            echo '<p>Harga: $' . $product[2] . '</p>';
            echo '</div>';
        }
        ?>
    </div>
    <a href="index.html">Logout</a>
</body>
</html>
