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
        <h1>ARAFAT</h1>
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
         <div class="contact-heading">
         <h1>------Hubungi Kami------</h1>
         <p>Kami Siap Membantu</p>
         </div>

        <div class="contact-container">
         <form action="kelompok7.php" method="POST"
            class="contact-form">
            <div class="form-grup">
             <label for="">Nama</label>
             <input type="text" name="username"
             placeholder="Masukkan Nama Anda">
             </div>

             <div class="form-grup">
             <label for="">Email</label>
             <input type="email" name="email"
              placeholder="Masukkan Email Anda">
             </div>

             <div class="form-grup">
             <label for="">No.Telephone</label>
             <input type="tel" name="nomor"
              placeholder="Masukkan Nomor Telephone">
             </div>

             <div class="form-grup">
             <label for="">Message</label>
             <input type="textarea" name="catatan"
             placeholder="Tulis Pesan Anda">
             </div>
             
             
             <button type="submit">Submit</button>
         </form>
        
        <div class="contact-image">
        <img src="gambar/logo1.png" alt="Gambar">
             </div>
             </div>
         <?php
        if($_POST){
            echo '<div class="pesan-sukses">';
            echo '<h3> Pesan Berhasil dikirim </h3>';
            echo '<hr>';
            echo 'Nama:';
            echo $_POST['username'];echo "<br>";
            echo 'Email:';
            echo $_POST['email'];echo "<br>";
            echo 'No.Telp:';
            echo $_POST['nomor'];echo "<br>";
            echo 'Catatan:';
            echo $_POST['catatan'];echo "<br>";
            echo '</div>';
         } 
         ?>
    </div>

    <div class="footer-kelompok7">
    </div>
</body>
</html>