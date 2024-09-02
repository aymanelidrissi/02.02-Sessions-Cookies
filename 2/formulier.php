<?php
session_start();

$errors = isset($_SESSION['errors']) ? $_SESSION['errors'] : [];
$old_values = isset($_SESSION['old_values']) ? $_SESSION['old_values'] : [];
?>

<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gebruikersinformatie Formulier</title>
    <style>
        .error {
            color: red;
        }
    </style>
</head>
<body>

    <h1>Voer je gegevens in</h1>

    <form action="verwerk_formulier.php" method="POST">
        
        <div>
            <label for="name">Naam:</label>
            <input type="text" id="name" name="name" value="<?php echo isset($old_values['name']) ? htmlspecialchars($old_values['name']) : ''; ?>" required>
            <?php if (isset($errors['name'])): ?>
                <span class="error"><?php echo $errors['name']; ?></span>
            <?php endif; ?>
        </div>

        <div>
            <label for="email">E-mail:</label>
            <input type="email" id="email" name="email" value="<?php echo isset($old_values['email']) ? htmlspecialchars($old_values['email']) : ''; ?>" required>
            <?php if (isset($errors['email'])): ?>
                <span class="error"><?php echo $errors['email']; ?></span>
            <?php endif; ?>
        </div>

        <div>
            <label for="dob">Geboortedatum (dd/mm/yyyy):</label>
            <input type="text" id="dob" name="dob" value="<?php echo isset($old_values['dob']) ? htmlspecialchars($old_values['dob']) : ''; ?>" required>
            <?php if (isset($errors['dob'])): ?>
                <span class="error"><?php echo $errors['dob']; ?></span>
            <?php endif; ?>
        </div>

        <div>
            <label for="rrn">Rijksregisternummer:</label>
            <input type="text" id="rrn" name="rrn" value="<?php echo isset($old_values['rrn']) ? htmlspecialchars($old_values['rrn']) : ''; ?>" required>
            <?php if (isset($errors['rrn'])): ?>
                <span class="error"><?php echo $errors['rrn']; ?></span>
            <?php endif; ?>
        </div>

        <div>
            <button type="submit">Verzenden</button>
        </div>

    </form>

</body>
</html>

<?php
unset($_SESSION['errors']);
unset($_SESSION['old_values']);
?>
