<?php
session_start();
$errors = [];
if (empty($_POST['name'])) {
    $errors['name'] = "Naam mag niet leeg zijn.";
}
if (!preg_match("/^[a-zA-Z0-9._%+-]+@kdg\.be$/", $_POST['email'])) {
    $errors['email'] = "E-mail moet een geldig KdG adres zijn.";
}
$dob = DateTime::createFromFormat('d/m/Y', $_POST['dob']);
$now = new DateTime();
$age = $now->diff($dob)->y;
if ($age < 18) {
    $errors['dob'] = "Je moet minstens 18 jaar oud zijn.";
}
$expected_rrn_start = $dob->format('y.m.d');
$rrn = $_POST['rrn'];
if (!preg_match("/^" . $expected_rrn_start . "\.\d{3}-\d{2}$/", $rrn)) {
    $errors['rrn'] = "Rijksregisternummer moet beginnen met de omgekeerde geboortedatum en het format xx.xx.xxxxx-xx volgen.";
}
if (!empty($errors)) {
    $_SESSION['errors'] = $errors;
    header("Location: formulier.php");
    exit();
} else {
    echo "OK";
}
?>
