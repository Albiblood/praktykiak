
<div class="container">
<?php include "config.php"; ?>

<?php
$result = $conn->query("
SELECT p.*, u.login 
FROM produkty p 
JOIN uzytkownicy u ON p.user_id=u.id
");

while ($row = $result->fetch_assoc()) {
    echo $row["nazwa"]."<br>";
    echo $row["opis"]."<br>";
    echo $row["cena"]."<br>";
    echo $row["login"]."<br>";
    echo $row["status"]."<br>";

    if (
        isset($_SESSION["user_id"]) &&
        $_SESSION["user_id"] != $row["user_id"] &&
        $row["status"] == "dostepny"
    ) {
        echo "<a href='buy.php?id=".$row["id"]."'>Kup</a>";
    }

    echo "<hr>";
}
?>