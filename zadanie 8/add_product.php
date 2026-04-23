
<div class="container">
<?php include "config.php";

if (!isset($_SESSION["user_id"])) {
    die("Zaloguj się");
}
?>

<form method="POST">
    Nazwa: <input name="nazwa"><br>
    Opis: <textarea name="opis"></textarea><br>
    Cena: <input name="cena"><br>
    <button>Dodaj</button>
</form>

<?php
if ($_POST) {
    $stmt = $conn->prepare("INSERT INTO produkty(nazwa,opis,cena,user_id) VALUES(?,?,?,?)");
    $stmt->bind_param("ssdi", $_POST["nazwa"], $_POST["opis"], $_POST["cena"], $_SESSION["user_id"]);
    $stmt->execute();

    echo "Dodano";
}
?>