
<div class="container">
<?php include "config.php";

$result = $conn->query("SELECT login,email FROM uzytkownicy");

while ($row = $result->fetch_assoc()) {
    echo $row["login"]." - ".$row["email"]."<br>";
}
?>