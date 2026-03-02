<?php
include "config.php";

if (isset($_GET["id"])) {
    $id = $_GET["id"];

    $stmt = $conn->prepare("SELECT * FROM users WHERE id=?");
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $result = $stmt->get_result();
    $user = $result->fetch_assoc();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST["id"];
    $ime = $_POST["ime"];
    $prezime = $_POST["prezime"];
    $email = $_POST["email"];

    $stmt = $conn->prepare("UPDATE users SET ime=?, prezime=?, email=? WHERE id=?");
    $stmt->bind_param("sssi", $ime, $prezime, $email, $id);
    $stmt->execute();

    header("Location: index.php");
}
?>

<form method="POST">
    <input type="hidden" name="id" value="<?= $user['id']; ?>">
    <input type="text" name="ime" value="<?= $user['ime']; ?>" required>
    <input type="text" name="prezime" value="<?= $user['prezime']; ?>" required>
    <input type="email" name="email" value="<?= $user['email']; ?>" required>
    <button type="submit">Sačuvaj</button>
</form>