<?php
    if ($_SERVER["REQUEST_METHOD"]== "POST") {
    $EMAIL = htmlspecialchars($_POST['email800'] ?? '');
    echo $EMAIL;
    }
?>