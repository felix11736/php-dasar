<?php
session_start();


$validUsername = "user";
$validPassword = "password";

if (isset($_POST['username']) && isset($_POST['password'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if ($username === $validUsername && $password === $validPassword) {
        $_SESSION['username'] = $username;
        header("Location: listing_produk.php");
        exit;
    } else {
        echo "Login gagal. <a href='index.html'>Coba lagi</a>";
    }
}
?>
