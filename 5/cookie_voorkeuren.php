<!DOCTYPE html>
<html>
<head>
    <title>Cookie voorkeuren</title>
</head>
<body>
    <form action="manage_cookies.php" method="POST">
        <h3>Statische cookies</h3>
        <input type="checkbox" name="cookies[]" value="ga"> GA<br>
        <input type="checkbox" name="cookies[]" value="hotjar"> Hotjar<br>
        <input type="checkbox" name="cookies[]" value="adwords"> Adwords<br>
        <h3>Third party cookies</h3>
        <input type="checkbox" name="cookies[]" value="instagram"> Instagram<br>
        <input type="checkbox" name="cookies[]" value="fb_pixel"> Facebook Pixel<br>
        <h3>Functionele cookies</h3>
        <input type="checkbox" name="cookies[]" value="user_cookie_preferences"> Gebruikerscookie voorkeuren<br>
        <button type="submit">Opslaan</button>
    </form>
</body>
</html>
