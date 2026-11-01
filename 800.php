<?php
    if ($_SERVER["REQUEST_METHOD"]== "POST") {
    $SEARCH = htmlspecialchars($_POST['search800'] ?? '');
    echo "<p>Hasil pencarian: $SEARCH</p>";
    }
?>