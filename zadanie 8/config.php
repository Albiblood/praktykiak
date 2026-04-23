
<div class="container">
<?php
session_start();

$conn = new mysqli("localhost", "root", "", "marketplace");

if ($conn->connect_error) {
    die("Błąd połączenia");
}
?>
<link rel="stylesheet" href="style.css">

<nav>
    <a href="index.php">Produkty</a>
    <a href="users.php">Użytkownicy</a>

    <?php if (isset($_SESSION["user_id"])): ?>
        <a href="add_product.php">Dodaj produkt</a>
        <a href="logout.php">Wyloguj</a>
    <?php else: ?>
        <a href="login.php">Logowanie</a>
        <a href="register.php">Rejestracja</a>
    <?php endif; ?>
</nav>
