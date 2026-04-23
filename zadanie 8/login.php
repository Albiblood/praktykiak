
<div class="container">
<?php include "config.php"; ?>

<form method="POST">
    Login: <input name="login"><br>
    Hasło: <input type="password" name="haslo"><br>
    <button>Zaloguj</button>
</form>

<?php
if ($_POST) {
    $stmt = $conn->prepare("SELECT * FROM uzytkownicy WHERE login=?");
    $stmt->bind_param("s", $_POST["login"]);
    $stmt->execute();

    $user = $stmt->get_result()->fetch_assoc();

    if ($user && password_verify($_POST["haslo"], $user["haslo"])) {
        $_SESSION["user_id"] = $user["id"];
        echo "Zalogowano";
    } else {
        echo "Błąd";
    }
}
?>