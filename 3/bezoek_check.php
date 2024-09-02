<?php
session_start();
if (!isset($_COOKIE['has_visited'])) {
    setcookie('has_visited', 'true', time() + (365 * 24 * 60 * 60));
    echo "Van hartelijk welkom bij uw eerste bezoek op onze website!";
} else {
    echo "Welkom terug jij fantastische gebruiker!";
}
?>
