<?php
if (isset($_POST['kirim'])) {
    $nama = htmlspecialchars($_POST['nama']);
    $email = htmlspecialchars($_POST['email']);
    $pesan = htmlspecialchars($_POST['review']);

    echo $nama . "<br>";
    echo $email . "<br>";
    echo $pesan . "<br>";
    } else {
    echo "Akses ditolak!";
}
?>