<?php
$NAMA = '';
$EMAIL = '';
$PESAN = '';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $NAMA = htmlspecialchars($_POST['nama803'] ?? '');
    $EMAIL = htmlspecialchars($_POST['email803'] ?? '');
    $PESAN = htmlspecialchars($_POST['review803'] ?? '');
}
?>

<div class="landing-full-kelompok7 review" id="review">
    <!-- bagian arafat -->
    <div class="review-container flex">
        <div class="review-list">
            <h2 class="color-2 font-1"> Feedbacks</h2>
            <div class="review-card">
                <img src="https://i.pravatar.cc/100?img=12" alt="Profile">
                <div class="review-content">
                    <h3>Adam</h3>
                    <p>
                        "Biji kopi dari KAVORA bener-bener juara! Aromanya harum banget
                        pas diseduh, rasanya nikmat, pas di lidah, dan kualitas bijinya
                        keliatan banget premium."
                    </p>
                </div>
            </div>

            <div class="review-card">
                <img src="https://i.pravatar.cc/100?img=47" alt="Profile">
                <div class="review-content">
                    <h3>Luna</h3>
                    <p>
                        "Kualitas biji kopi KAVORA nggak pernah mengecewakan.
                        Rasanya enak, aftertaste-nya bersih, dan konsisten banget."
                    </p>
                </div>
            </div>

            <div class="review-card">
                <img src="https://i.pravatar.cc/100?img=33" alt="Profile">
                <div class="review-content">
                    <h3>Alex</h3>
                    <p>
                        "Awalnya penasaran, pas dicoba ternyata biji kopi KAVORA ini punya cita rasa yang kaya banget.
                        Segar, berkualitas tinggi, dan kopinya bener-bener kerasa premium"
                    </p>
                </div>
            </div>
        </div>

        <div class="review-form">
            <h2 class="color-2 font-1">Add a Review</h2>
            <form action="kelompok7.php?page=review" method="POST">
                <div class="form-group">
                    <label for="name">Nama</label>
                    <input
                        type="text" id="name" name="nama803" placeholder="Nama">
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email803" placeholder="Email">
                </div>

                <div class="form-group">
                    <label for="review">Pesan</label>
                    <textarea id="review" name="review803" placeholder="Tulis pesan"></textarea>
                </div>
                <button type="submit" name="kirim">Submit</button>
                <?php if ($_SERVER["REQUEST_METHOD"] == "POST") { ?>
                    <p>Nama : <?= $NAMA ?></p>
                    <p>Email: <?= $EMAIL ?></p>
                    <p>Pesan: <?= $PESAN ?></p>
                <?php } ?>
            </form>
        </div>
    </div>
</div>