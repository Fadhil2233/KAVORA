<?php
$SEARCH = '';
$KODE = '';
$NAMA = '';
$HARGA = '';
$STOK = '';
$DESKRIPSI = '';
$KATEGORI = '';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $SEARCH = htmlspecialchars(trim($_POST['search800'] ?? ''));
    $KODE = htmlspecialchars($_POST['kode800'] ?? '');
    $NAMA = htmlspecialchars(trim($_POST['nama800'] ?? ''));
    $HARGA = htmlspecialchars($_POST['harga800'] ?? '');
    $STOK = htmlspecialchars($_POST['stok800'] ?? '');
    $DESKRIPSI = $_POST['deskripsi800'] ?? '';
    $KATEGORI = htmlspecialchars($_POST['kategori800'] ?? '');
}
?>
    <div class="landing-full-kelompok7 produk" id="produk">
        <!-- bagian nizhar -->
        <div class="container color-2 font-1">
            <h1 class="text-1">PRODUK KAMI</h1>
            <form action="kelompok7.php?page=produk" method="POST">
                <div class="produk-form-kelompok7">
                    <div class="">
                        <div class="flex">
                            <input type="text" name="search800" placeholder="Telusuri produk lainnya" value="<?= $SEARCH ?>">
                            <input type="text" name="kode800" placeholder="Kode Produk" value="<?= $KODE ?>">
                        </div>
                        <div class="flex">
                            <input type="text" name="nama800" placeholder="Nama Produk" value="<?= $NAMA ?>">
                            <input type="text" name="harga800" placeholder="Harga Produk" value="<?= $HARGA ?>">
                            <input type="text" name="stok800" placeholder="Stok Produk" value="<?= $STOK ?>">
                            <input type="textarea" name="deskripsi800" placeholder="Deskripsi Produk" value="<?= $DESKRIPSI ?>">
                        </div>
                        <div class="flex">
                            <select name="kategori800" id="kategori">
                                <option value="" disabled selected>Kategori</option>
                                <option value="Biji Kopi">Biji Kopi</option>
                                <option value="Bubuk Kopi">Bubuk Kopi</option>
                                <option value="Seduhan">Seduhan</option>
                            </select>
                            <button type="submit">Kirim</button>
                        </div>
                    </div>
                </div>
            </form>
        <?php if ($_SERVER["REQUEST_METHOD"] == "POST") { ?>
            <p>Hasil pencarian : <?= $SEARCH ?> | Kode : <?= $KODE ?></p>
            <p>Nama : <?= $NAMA ?> | Harga : <?= $HARGA ?> | Stok : <?= $STOK ?></p>
            <p>Kategori : <?= $KATEGORI ?> | Deskripsi : <?= $DESKRIPSI ?></p>
        <?php } ?>
            <div class="flex card-container">
                <div class="card-kelompok7">
                    <img src="gambar/bijiarabika.jpg" alt="robusta" height="240px" width="240px">
                    <h2>Arabika</h2>
                    <p>Kopi dengan aroma harum dan cita rasa lembut.</p>
                </div>
                <div class="card-kelompok7">
                    <img src="gambar/bijirobusta.jpg" alt="robusta" height="240px" width="240px">
                    <h2>Robusta</h2>
                    <p>Kopi dengan karakter rasa kuat dan pekat.</p>
                </div>
                <div class="card-kelompok7">
                    <img src="gambar/bijiliberika.jpg" alt="robusta" height="240px" width="240px">
                    <h2>Liberika</h2>
                    <p>Kopi dengan karakter unik dan aroma khas.</p>
                </div>
            </div>
        </div>
    </div>