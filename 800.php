<?php
$SEARCH = '';
$KATEGORI = '';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $SEARCH = htmlspecialchars(trim($_POST['search800'] ?? ''));
    $KATEGORI = htmlspecialchars($_POST['kategori800'] ?? '');
}
?>
    <div class="landing-full produk" id="produk">
        <!-- bagian nizhar -->
        <div class="container color-2 font-1">
            <h1 class="text-1">PRODUK KAMI</h1>
            <form action="kelompok7.php?page=produk" method="POST">
                <div class="produk-form">
                    <div class="">
                        <input type="text" name="search800" placeholder="Telusuri produk lainnya" value="<?= $SEARCH ?>">
                        <div class="flex">
                            <select name="kategori800" id="kategori">
                                <option value="" disabled selected>Kategori</option>
                                <option value="Biji Kopi">Biji Kopi</option>
                                <option value="Bubuk Kopi">Bubuk Kopi</option>
                                <option value="Seduhan">Seduhan</option>
                            </select>
                            <button type="submit">Search</button>
                        </div>
                    </div>
                </div>
            </form>
        <?php if ($_SERVER["REQUEST_METHOD"] == "POST") { ?>
            <p>Hasil pencarian : <?= $SEARCH ?></p>
            <p>Kategori : <?= $KATEGORI ?></p>
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