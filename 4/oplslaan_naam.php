<?php
session_start();
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $duration = $_POST['duration'];
    $cookie_duration = 0;
    switch ($duration) {
        case '1_day':
            $cookie_duration = time() + (24 * 60 * 60);
            break;
        case '1_week':
            $cookie_duration = time() + (7 * 24 * 60 * 60);
            break;
        case '1_month':
            $cookie_duration = time() + (30 * 24 * 60 * 60);
            break;
        case 'session':
        default:
            $cookie_duration = 0;
            break;
    }
    setcookie('user_name', $name, $cookie_duration);
    header("Location: naam_formulier.php");
    exit();
}
?>
