<?php
session_start();
if (isset($_COOKIE['user_name'])) {
    echo "<p>Welkom terug, " . htmlspecialchars($_COOKIE['user_name']) . "!</p>";
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Naam opslaan met duur</title>
</head>
<body>
    <form action="save_name.php" method="POST">
        <label for="name">Voer je naam in:</label>
        <input type="text" id="name" name="name" required>
        <br>
        <label for="duration">Hoe lang wil je dat je naam wordt opgeslagen?</label>
        <select id="duration" name="duration">
            <option value="session">Zolang ik de website bezoek</option>
            <option value="1_day">1 dag</option>
            <option value="1_week">1 week</option>
            <option value="1_month">1 maand</option>
        </select>
        <br>
        <button type="submit">Opslaan</button>
    </form>
</body>
</html>
