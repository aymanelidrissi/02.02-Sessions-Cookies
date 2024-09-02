<?php
session_start();
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $accepted_cookies = isset($_POST['cookies']) ? $_POST['cookies'] : [];
    $cookie_categories = ['ga', 'hotjar', 'adwords', 'instagram', 'fb_pixel', 'user_cookie_preferences'];
    foreach ($cookie_categories as $category) {
        if (in_array($category, $accepted_cookies)) {
            setcookie($category, '1', time() + (365 * 24 * 60 * 60));
        } else {
            setcookie($category, '', time() - 3600);
        }
    }
    setcookie('user_cookie_preferences', implode(',', $accepted_cookies), time() + (365 * 24 * 60 * 60));
    header("Location: cookie_voorkeuren.php");
    exit();
}
?>
