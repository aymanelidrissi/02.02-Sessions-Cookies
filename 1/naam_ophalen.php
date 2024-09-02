<?php
session_start();
if (isset($_SESSION['name'])) {
    echo "De naam in de sessie is: " . $_SESSION['name'];
} else {
    echo "Er is geen naam in de sessie opgeslagen.";
}
?>
