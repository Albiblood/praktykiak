
<div class="container">
<?php include "config.php"; ?>
<link rel="stylesheet" href="style.css">

<div class="container">

<h2>Produkty</h2>

<?php
$result = $conn->query("
SELECT p.*, u.login 
FROM produkty p 
JOIN uzytkownicy u ON p.user_id=u.id
");

while ($row = $result->fetch_assoc()) {
    echo "<div class='product'>";
    echo "<h3>{$row['nazwa']}</h3>";
    echo "<p>{$row['opis']}</p>";
    echo "<p><b>Cena:</b> {$row['cena']} zł</p>";
    echo "<p><b>Autor:</b> {$row['login']}</p>";
    echo "<p><b>Status:</b> {$row['status']}</p>";

    if (
        isset($_SESSION["user_id"]) &&
        $_SESSION["user_id"] != $row["user_id"] &&
        $row["status"] == "dostepny"
    ) {
        echo "<a href='buy.php?id={$row['id']}'><button>Kup</button></a>";
    }

    echo "</div>";
}
?>

</div>