<?php
session_start();
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $_SESSION['name'] = $_POST['name'];
    echo "Naam opgeslagen in de sessie!";
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Naam opslaan in sessie</title>
</head>
<body>
    <form method="POST">
        <label for="name">Voer je naam in:</label>
        <input type="text" id="name" name="name" required>
        <button type="submit">Opslaan</button>
    </form>
</body>
</html>
