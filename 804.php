<?php
$USERNAME = '';
$EMAIL = '';
$NOMOR = '';
$CATATAN = '';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $USERNAME = htmlspecialchars($_POST['username804'] ?? '');
    $EMAIL = htmlspecialchars($_POST['email804'] ?? '');
    $NOMOR = htmlspecialchars($_POST['nomor804'] ?? '');
    $CATATAN = htmlspecialchars($_POST['catatan804'] ?? '');
}
?>

<div class="landing-full contact" id="contact">
            <!-- bagian habib -->
            <div class="contact-heading color-2 font-1">
                <h1>--- Hubungi Kami ---</h1>
                <p>Kami Siap Membantu</p>
            </div>

            <div class="contact-container">
                <form action="kelompok7.php?page=contact" method="POST" class="produk-form font-1">
                    <div class="form-grup">
                        <label for="">Nama</label>
                        <input type="text" name="username804"
                            placeholder="Masukkan Nama Anda">
                    </div>

                    <div class="form-grup">
                        <label for="">Email</label>
                        <input type="email" name="email804"
                            placeholder="Masukkan Email Anda">
                    </div>

                    <div class="form-grup">
                        <label for="">No.Telephone</label>
                        <input type="tel" name="nomor804"
                            placeholder="Masukkan Nomor Telephone">
                    </div>

                    <div class="form-grup">
                        <label for="">Message</label>
                        <input type="textarea" name="catatan804"
                            placeholder="Tulis Pesan Anda">
                    </div>
                    <button type="submit">Submit</button>
                    <?php if ($_SERVER["REQUEST_METHOD"] == "POST") { ?>
                        <p>Nama : <?= $USERNAME ?></p>
                        <p>Email: <?= $EMAIL ?></p>
                        <p>Pesan: <?= $NOMOR ?></p>
                        <p>Pesan: <?= $CATATAN ?></p>
                    <?php } ?>
                </form>

                <div class="contact-image">
                    <img src="gambar/logo1.png" alt="Gambar">
                </div>
            </div>
        </div>