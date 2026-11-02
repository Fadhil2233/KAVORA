<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kelompok7</title>
    <link rel="preconnect" href="https://googleapis.com">
    <link rel="preconnect" href="https://gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="kelompok7.css">
</head>
<body>
    <div class="nav-kelompok7 color-1">
        <div class="logo">
            <h2>KAVORA</h2>
        </div>
        <div class="kelompok7">
            <a href="#home" class="nav-menu">Home</a>
            <a href="#about" class="nav-menu">About</a>
            <a href="#produk" class="nav-menu">Produk</a>
            <a href="#review" class="nav-menu">Review</a>
            <a href="#location" class="nav-menu">Location</a>
            <a href="#contact" class="nav-menu">Contact</a>
        </div>
    </div>
    <div class="landing-full bg-0" id="home">
        <div class="hero color-2">
            <div class="hero-text">
                <h1>NO.1 COFFEE BRAND IN ASIA</h1>
                <p>KAVORA : Nyalakan Harimu, Teguk Inspirasimu</p>
                <p>Hidup bergerak cepat, dan harimu butuh dorongan yang tepat. KAVORA hadir untuk<br> menemani setiap langkah kreatif dan ambisiusmu dari pagi yang sibuk hingga malam penuh ide.</p>
                <a href="" class="button-1">Produk Kami</a>
                <a href="" class="button-1">Lokasi</a>
            </div>
            <img src="gambar/Kavora1 4per3.png" alt="GAMBAR BRAND" width="700" height="450">
        </div>
    </div>

    <div class="landing-full about" id="about">
        <!-- bagian nizhar -->
        <div class="container color-2 font-1">
            <h1 class="text-1">ABOUT KAVORA</h1>
            <img src="gambar/Kavora2.png" alt="gambar" width="1120" height="400" class="rounded">
            <div class="about-text flex">
                <h2>At Kavora, we believe great coffee is more than just a daily ritual. It's a moment to slow down, take a breath, and enjoy the little things.</h2>
                <p class="justify-text">Inspired by nature and crafted with care, we bring together quality coffee beans, thoughtful brewing, and a passion for creating meaningful moments in every cup.
                    Whether it's the start of a busy morning or a quiet afternoon, Kavora is here to make your everyday coffee feel a little more special.
                    Rooted in nature. Brewed with purpose. Made for you.</p>
            </div>
        </div>
    </div>

    <div class="landing-full produk" id="produk">
        <!-- bagian nizhar -->
        <h1>NIZHAR</h1>
    </div>

    <div class="landing-full review" id="review">
        <!-- bagian arafat -->
    <div class="review-container flex">

        <div class="review-list">
        <h2>Recent Feedbacks</h2>

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


    <!-- FORM -->
    <div class="review-form">
        <h2>Add a Review</h2>

        <form action="kelompok7.php" method="POST">

            <div class="form-group">
                <label for="name">Nama</label>
                <input
                    type="text"
                    id="name"
                    name="nama"
                    placeholder="Nama"
                    
                >
            </div>

            <div class="form-group">
                <label for="email">Email</label>
                <input
                    type="email"
                    id="email"
                    name="email"
                    placeholder="Email"
                    
                >
            </div>

            <div class="form-group">
                <label for="review">Pesan</label>
                <textarea
                    id="review"
                    name="review"
                    placeholder="Tulis pesan"
                    
                ></textarea>
            </div>

            <button type="submit" name="kirim">Submit</button>

        </form>
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
    </div>
    </div>
    </div>
    </div>

        <div class="landing-full location" id="location">
        <!-- bagian nizhar -->
         <div class="container">
             <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3955.2799546461424!2d110.80504429999999!3d-7.5444182!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a141e6090dc49%3A0x5dd0894249c2f99c!2sJl.%20Kutai%20Utara%20No.1%2C%20Sumber%2C%20Kec.%20Banjarsari%2C%20Kota%20Surakarta%2C%20Jawa%20Tengah%2057138!5e0!3m2!1sid!2sid!4v1793201279073!5m2!1sid!2sid"
             width="1480" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="strict-origin-when-cross-origin"></iframe>
             <div class="text-didalam">
                 <h1>Lokasi Coffeeshop Kami</h1>
                 <p>Kami memiliki beberapa cabang yang tersebar di seluruh pulau di Indonesia, dan untuk cabang utama kami berada di kota Solo.</p>
             </div>
         </div>
    </div>

        <div class="landing-full contact" id="contact">
        <!-- bagian habib -->
         <h1>HABIB</h1>
         <form action="" method="post">
             <label for="">Nama</label>
             <input type="text" name="username">
             <label for="">Email</label>
             <input type="email" name="email">
             <label for="">No.Telephone</label>
             <input type="tel" name="nomor">
             <label for="">Message</label>
             <input type="textarea">
             <button type="submit">Submit</button>
         </form>
    </div>

    <div class="footer-kelompok7">
    </div>
</body>
</html>