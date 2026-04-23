

<div class="container">
<?php include "config.php"; ?>

<form method="POST">
    Login: <input name="login"><br>
    Email: <input name="email"><br>
    Hasło: <input type="password" name="haslo"><br>
    <button>Zarejestruj</button>
</form>

<?php
if ($_POST) {
    $haslo = password_hash($_POST["haslo"], PASSWORD_DEFAULT);

    $stmt = $conn->prepare("INSERT INTO uzytkownicy(login,haslo,email) VALUES(?,?,?)");
    $stmt->bind_param("sss", $_POST["login"], $haslo, $_POST["email"]);
    $stmt->execute();

    echo "OK";
}
?>