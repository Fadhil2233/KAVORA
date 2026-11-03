<?php
$SEARCH = '';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $SEARCH = htmlspecialchars($_POST['search800'] ?? '');
}
?>
    <div class="landing-full produk" id="produk">
        <!-- bagian nizhar -->
        <div class="container color-2 font-1">
            <h1 class="text-1">PRODUK KAMI</h1>
            <form action="kelompok7.php?page=produk" method="post">
                <div class=" produk-form">
                    <div class="flex">
                        <input type="text" name="search800" placeholder="Telusuri produk lainnya" value="<?= $SEARCH ?>">
                        <button type="submit">Search</button>
                    </div>
                </div>
            </form>
        <?php if ($_SERVER["REQUEST_METHOD"] == "POST") { ?>
            <p>Hasil pencarian: <?= $SEARCH ?></p>
        <?php } ?>
            <div class="flex card-container">
                <div class="card">
                    <img src="gambar/bijiarabika.jpg" alt="robusta" height="240px" width="240px">
                    <h2>Arabika</h2>
                    <p>Kopi dengan aroma harum dan cita rasa lembut.</p>
                </div>
                <div class="card">
                    <img src="gambar/bijirobusta.jpg" alt="robusta" height="240px" width="240px">
                    <h2>Robusta</h2>
                    <p>Kopi dengan karakter rasa kuat dan pekat.</p>
                </div>
                <div class="card">
                    <img src="gambar/bijiliberika.jpg" alt="robusta" height="240px" width="240px">
                    <h2>Liberika</h2>
                    <p>Kopi dengan karakter unik dan aroma khas.</p>
                </div>
            </div>
        </div>
    </div>