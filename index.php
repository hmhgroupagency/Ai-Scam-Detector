<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="TemplateMo">
  <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet">      
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />
  <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />


  <title>Edu.id | Scam Detector</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

  <!-- Additional CSS Files -->
  <link rel="stylesheet" href="assets/css/fontawesome.css">
  <link rel="stylesheet" href="assets/css/templatemo-edu-meeting.css">
  <link rel="stylesheet" href="assets/css/owl.css">
  <link rel="stylesheet" href="assets/css/lightbox.css">

  <style>
    .divider {
      width: 100%;
      height: 2px;
      background-color: #a12c2f;
      margin: 10px 0;
      position: relative;
      top: -20px;
  }

  .container_input {
    width: 100%;
    max-width: 600px;
    padding: 20px;
    margin: 0 auto;
}

.form-container_input {
    background-color: #e0e0e0;
    padding: 20px;
    border-radius: 8px;
}

h2 {
  font-size: 25px;
  text-align: center;
  color: #111;
}

p.description {
    text-align: center;
    color: #666;
    margin-bottom: 20px;
    padding-top: 10px;
    font-size: 15px;
    font-weight: 600;
}

form {
    display: flex;
    flex-direction: column;
    gap: 15px;
}

label {
    color: #333;
    font-weight: bold;
}

input[type="text"],
select,
textarea {
    width: 100%;
    padding: 10px;
    border: 0px;
    border-radius: 4px;
}

select {
    appearance: none;
    -webkit-appearance: none;
    -moz-appearance: none;
    background: #fff url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24' fill='%23ff0009'%3E%3Cpath d='M7 10l5 5 5-5z'/%3E%3C/svg%3E") no-repeat right 10px center;
    background-size: 16px;
    padding-right: 35px;
}

textarea {
    resize: none;
    height: 80px;
}

.two-column-group {
    display: flex;
    gap: 10px;
}

.two-column-group input,
.two-column-group select {
    flex: 1;
    padding: 10px;
    border-radius: 4px;
}

.upload-container_input {
    display: flex;
    justify-content: center;
    padding-bottom: 10px;
}

.upload-label {
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 5px;
    width: 70%;
    padding: 10px;
    background-color: #ffffff;
    color: #757575;
    font-weight: bold;
    border: 0px;
    border-radius: 4px;
    cursor: pointer;
    text-align: center;
}

.upload-container_input input[type="file"] {
    display: none;
}

button[type="submit"] {
    padding: 10px;
    background-color: #ff0009;
    color: white;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    font-size: 16px;
    font-weight: bold;
    text-align: center;
}

button[type="submit"]:hover {
    background-color: #cc0007;
}

.judul_laporan {
    color: #000000;
    text-align: center;
    font-weight: 600;
    font-size: 25px;
    padding: 20px 1px 0 1px;
        border-top: 2px solid #e0e0e0;
}

/* Responsive adjustments */
@media (max-width: 600px) {
    .two-column-group {
        flex-direction: column;
    }

    .upload-label {
        width: 100%;
    }

    p.description {
        font-size: 12px;
    }
}

.container_laporan {
    max-width: 1200px;
    margin: 0 auto;
    padding: 20px;
    text-align: center;
}

h1 {
    color: #333;
    font-size: 2rem;
    font-weight: bold;
    margin: 20px 0;
}

p {
    color: #000000;
    margin-bottom: 40px;
}

.card-container_laporan {
    display: flex;
    gap: 20px;
    overflow: hidden;
}

.card {
    min-width: 300px;
    background-color: #fff;
    border: 1px solid #ddd;
    border-radius: 8px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    overflow: hidden;
    display: flex;
    flex-direction: column;
    transition: transform 0.5s ease; /* Animasi untuk pergeseran */
    text-align: left;
}

.card img {
    width: 100%;
    height: 180px;
    object-fit: cover;
    border-bottom: 1px solid #ddd;
}

.card-content {
    padding: 15px;
}

.card-content h2 {
    font-size: 1rem;
    color: #000000;
    margin-bottom: 10px;
    font-weight: 600;
    text-align: left;
}

.card-content p {
    font-size: 0.9rem;
    margin: 8px 0;
}

.card-content p strong {
    color: #ff0009; /* Warna merah hanya untuk label "Kategori", "Nama", "Link", "Catatan" */
}

.card-content a {
    color: #007bff; /* Warna link tetap biru */
    text-decoration: none;
    word-break: break-all;
}

.card-content a:hover {
    text-decoration: underline;
}

.laporan-db h1 {
  font-size: 25px;
  font-weight: 600;
  color: #000000;
  align-items: center;
  padding: 15px 0;
  border-top: 2px solid #f00;
  position: relative;
  top: 20px;
}

.laporan-db p {
    color: #545454;
    font-size: 15px;
    padding: 0 20px 0 20px;
    font-weight: 600;
}

/* Mobile slider */
@media (max-width: 768px) {
    .card-container_laporan {
        display: flex;
        flex-wrap: nowrap;
        overflow-x: auto; /* Membolehkan scroll secara manual */
        overflow-y: hidden; /* Menghilangkan scroll vertikal */
        scroll-snap-type: x mandatory;
        scroll-behavior: smooth; /* Animasi geser */
        -webkit-overflow-scrolling: touch; /* Membuat scroll lebih lancar di iOS */
    }

    .card {
        scroll-snap-align: start;
        flex: 0 0 100%;
    }

    .laporan-db p {
        color: #545454;
        font-size: 12px;
    }

    /* Menyembunyikan scrollbar */
    .card-container_laporan::-webkit-scrollbar {
        display: none;
    }
    .card-container_laporan {
        -ms-overflow-style: none; /* Untuk IE dan Edge */
        scrollbar-width: none; /* Untuk Firefox */
    }
}
</style>
</head>

<body>

  <!-- ***** Header Area Start ***** -->
  <header class="header-area header-sticky">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <nav class="main-nav">
            <!-- ***** Logo Start ***** -->
            <a href="index.html" class="logo">
              <img src="assets/images/logo.png" alt="Edu.id Logo" />
          </a>
          <!-- ***** Logo End ***** -->

          <!-- ***** Menu Start ***** -->
          <ul class="nav">
              <li class="scroll-to-section"><a href="#top" class="active">Chat With Bot</a></li>
              <li><a href="#scam">Scam News</a></li>
              <li class="scroll-to-section"><a href="#find">Find</a></li>
              <li class="scroll-to-section"><a href="#report">Report</a></li>
              <li class="scroll-to-section"><a href="#">About us</a></li> 
          </ul>        
          <a class='menu-trigger'>
              <span>Menu</span>
          </a>
          <!-- ***** Menu End ***** -->
      </nav>
  </div>
</div>
</div>
</header>
<!-- ***** Header Area End ***** -->

<!-- ***** Main Banner Area Start ***** -->
<section class="section main-banner" id="top" data-section="section1">
    <video autoplay muted loop id="bg-video">
      <source src="assets/images/course-video.mp" type="video/mp4" />
  </video>

  <div class="video-overlay header-text">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="caption">
              <h3 class="judul">
                <span style="color: #ff0009">AI</span> canggih untuk menilai <span style="color: #ff0009">risiko penipuan</span> dari situs online</h3>
                <p class="subjudul">Cek apakah informasi / tawaran yang anda terima legit menggunakan AI dari kami!</p>
                <img src="assets/images/main.png" class="main-image">

                <a href="https://chatgpt.com/g/g-r1aH7ez9k-scam-detector" class="scam-detector-button">
                  <img src="assets/images/ai.png"> 
              </a>
          </div>
      </div>
  </div>
</div>
</div>
</div>
</section>
<!-- ***** Main Banner Area End ***** -->

<!-- ***** news Area Start ***** -->
<div id="scam">
    <div class="container1">
      <main>
        <h1>Berita <span class="highlight">Penipuan</span> Terbaru</h1>
        <p><b>Baca untuk stay update tentang penipuan yang terus ada agar anda terhindar dari penipuan!</b></p>

        <section class="featured-news">
          <h2>All News</h2>
          <div class="slider">
            <!-- Slide 1 -->
            <div class="news-card">
              <a href="https://example.com/berita1" target="_blank">
                <img src="assets/images/tes.jpg" alt="News 1">
            </a>
            <p>Modus Penipuan Deepfake Naik 1.550 Persen di Indonesia</p>
        </div>
        <!-- Slide 2 -->
        <div class="news-card">
          <a href="https://example.com/berita2" target="_blank">
            <img src="assets/images/tes.jpg" alt="News 2">
        </a>
        <p>Modus Penipuan Deepfake Naik 1.550 Persen di Indonesia</p>
    </div>
    <!-- Slide 3 -->
    <div class="news-card">
      <a href="https://example.com/berita3" target="_blank">
        <img src="assets/images/tes.jpg" alt="News 3">
    </a>
    <p>Modus Penipuan Deepfake Naik 1.550 Persen di Indonesia</p>
</div>
<!-- Slide 4 -->
<div class="news-card">
  <a href="https://example.com/berita4" target="_blank">
    <img src="assets/images/tes.jpg" alt="News 4">
</a>
<p>Modus Penipuan Deepfake Naik 1.550 Persen di Indonesia</p>
</div>
<!-- Slide 5 -->
<div class="news-card">
  <a href="https://example.com/berita5" target="_blank">
    <img src="assets/images/tes.jpg" alt="News 5">
</a>
<p>Modus Penipuan Deepfake Naik 1.550 Persen di Indonesia</p>
</div>
</div>
</section>
<!-- ***** news Area end ***** -->

<!-- ***** all news Start ***** -->
<section class="all-news">
  <h2>Featured News</h2>

  <div class="news-item">
    <div class="news-content">
      <span>Liputan6.com</span>
      <a href="https://example.com/berita1" target="_blank" class="news-title">Modus Penipuan Deepfake Naik 1.550 Persen di Indonesia</a>
      <p>VIDA mencatat peningkatan yang sangat signifikan, yakni 1.550 persen, pada kasus penipuan menggunakan teknologi deepfake di Indonesia..</p>
  </div>
  <img src="assets/images/news.jpeg" alt="News Image" class="news-image">
</div>

<div class="news-item">
    <div class="news-content">
      <span>Liputan6.com</span>
      <a href="https://example.com/berita1" target="_blank" class="news-title">Modus Penipuan Deepfake Naik 1.550 Persen di Indonesia</a>
      <p>VIDA mencatat peningkatan yang sangat signifikan, yakni 1.550 persen, pada kasus penipuan menggunakan teknologi deepfake di Indonesia..</p>
  </div>
  <img src="assets/images/news.jpeg" alt="News Image" class="news-image">
</div>

<div class="news-item">
    <div class="news-content">
      <span>Liputan6.com</span>
      <a href="https://example.com/berita1" target="_blank" class="news-title">Modus Penipuan Deepfake Naik 1.550 Persen di Indonesia</a>
      <p>VIDA mencatat peningkatan yang sangat signifikan, yakni 1.550 persen, pada kasus penipuan menggunakan teknologi deepfake di Indonesia..</p>
  </div>
  <img src="assets/images/news.jpeg" alt="News Image" class="news-image">
</div>
<!-- Tambahkan item berita lain sesuai kebutuhan -->
</section>
</main>
</div>
</div>
<!-- ***** all news Start ***** -->

<!-- ***** find db Start ***** -->
<div id="find">
<div class="container_laporan">
    <div class="laporan-db">
        <h1>Temukan Pengalaman <span style="color: #ff0009;"> Penipuan</span> dari User Lain!</h1>
        <p>Temukan segala modus penipuan yang ditemukan oleh user lainnya!</p>
    </div>
    <div class="card-container_laporan" id="slider">
        <?php
        // Koneksi ke database
        $conn = mysqli_connect("localhost", "root", "", "laporan_penipuan");

        // Cek koneksi
        if (!$conn) {
            die("Koneksi gagal: " . mysqli_connect_error());
        }

        // Ambil data dari tabel 'laporan'
        $sql = "SELECT first_name, last_name, category, scam_link, notes, image FROM laporan";
        $result = mysqli_query($conn, $sql);

        // Tampilkan data dalam card
        if (mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_assoc($result)) {
                echo '<div class="card">';
                echo '<img src="uploads/' . htmlspecialchars($row['image']) . '" alt="Gambar Laporan">';
                echo '<div class="card-content">';
                echo '<h2><span style="color: #ff0009;">Kategori:</span> ' . htmlspecialchars($row['category']) . '</h2>';
                echo '<p><strong>Nama:</strong> ' . htmlspecialchars($row['first_name']) . ' ' . htmlspecialchars($row['last_name']) . '</p>';
                echo '<p><strong>Link:</strong> <a href="' . htmlspecialchars($row['scam_link']) . '" target="_blank">' . htmlspecialchars($row['scam_link']) . '</a></p>';
                echo '<p><strong>Catatan:</strong> ' . htmlspecialchars($row['notes']) . '</p>';
                echo '</div>';
                echo '</div>';
            }
        } else {
            echo "<p>Tidak ada laporan yang tersedia.</p>";
        }

        // Tutup koneksi
        mysqli_close($conn);
        ?>
    </div>
</div>
<!-- ***** find db end ***** -->


<!-- Form Input Laporan start -->
<div id="report">
<div class="container_input">
    <div class="judul_laporan">
        <h2>Laporkan <span style="color: #ff0009;"> Penipuan</span> yang Anda Temukan!</h2>
    </div>
    <p class="description">Laporkan segala penipuan / modus yang mengarah terhadap penipuan di website ini agar pembaca lain bisa menghindarinya!</p>
    <div class="form-container_input">
        <form action="simpan_laporan.php" method="POST" enctype="multipart/form-data">
            <div class="two-column-group">
                <input type="text" name="first_name" placeholder="Nama depan..." required>
                <input type="text" name="last_name" placeholder="Nama belakang..." required>
            </div>
            <div class="two-column-group">
                <select name="category" required>
                    <option value="" disabled selected>Kategori Penipuan</option>
                    <option value="Phishing">Phishing</option>
                    <option value="Scam Investment">Scam Investment</option>
                    <option value="Identity Theft">Identity Theft</option>
                </select>
                <input type="text" name="scam_link" placeholder="Link URL Penipuan...">
            </div>
            <textarea name="notes" placeholder="Berikan catatan pengalaman anda disini, khususnya cara pelaku mengelabui calon korban..."></textarea>
            <div class="upload-container_input">
                <label class="upload-label" for="image-upload">
                    <i class="fas fa-upload" style="color: #ff0009;"></i> Upload Gambar
                </label>
                <input type="file" name="image" id="image-upload" accept="image/*" required>
            </div>
            <button type="submit">Kirim<i class="fas fa-paper-plane" style="padding-left: 7px;"></i></button>
        </form>
    </div>
</div>
<!-- Form Input Laporan end -->

<div id="consultation">
    <section class="apply-now" id="apply">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 align-self-center">
            <div class="row">
              <div class="col-lg-12">
                <div class="item">
                  <h3>Ingin melakukan konsultasi lebih lanjut?</h3>
                  <div class="main-button-red">
                    <div class="scroll-to-section"><a href="#"><b>Roy Shakti </b></a></div>
                </div>
            </div>
        </div>
        <div class="col-lg-12">
            <div class="item">
              <h3>Tertarik untuk bergabung di komunitas EDU.id?</h3>
              <div class="main-button-yellow">
                <div class="scroll-to-section"><a href="#"><b>Forum Kami </b></a></div>
            </div>
        </div>
    </div>
</div>
</div>
<div class="col-lg-6">
    <div class="accordions is-first-expanded">
      <article class="accordion">
        <div class="accordion-head">
          <span>Apa itu EDU.id?</span>
          <span class="icon">
            <i class="icon fa fa-chevron-right"></i>
        </span>
    </div>
    <div class="accordion-body">
      <div class="content">
        <p><b>EDU.id </b> adalah sebuah platform yang dapat membantu kamu untuk mempelajari seputar dunia Digital dan Artificial Inteligence(AI). Disini kamu juga dapat melaporkan <span style="color: #a12c2f;"> LINK SCAM</span> pada AI yang ada disini loh, keren bukan!</p>
    </div>
</div>
</article>
<article class="accordion">
    <div class="accordion-head">
      <span>Apakah ada biaya yang harus saya bayar untuk ini?</span>
      <span class="icon">
        <i class="icon fa fa-chevron-right"></i>
    </span>
</div>
<div class="accordion-body">
  <div class="content">
    <p><span style="color: #a12c2f;"> Tidak ada biaya</span> yang harus kamu bayarkan kecuali jika kamu mengikuti acara seminar dan webinar tersebut, di <b>EDU.id </b>semua yang kamu pelajari disini bersifat gratis tanpa dikutip biaya sepeser pun.</p>
</div>
</div>
</article>
<article class="accordion">
    <div class="accordion-head">
      <span>Saya sudah tua, apakah sudah terlambat untuk belajar?</span>
      <span class="icon">
        <i class="icon fa fa-chevron-right"></i>
    </span>
</div>
<div class="accordion-body">
  <div class="content">
    <p>Umur tidak pernah menjadi masalah, karena kita tau <span style="color: #a12c2f"> hal terbaik untuk memulai adalah melakukannya</span>, dengan adanya AI di <b>EDU.id </b>kami siap membantu Anda untuk menambah wawasan di era yang serba digital ini.</p>
</div>
</div>
</article>
<article class="accordion last-accordion">
    <div class="accordion-head">
      <span>Tidak di support oleh teman dan keluarga, apakah saya bisa melakukannya?</span>
      <span class="icon">
        <i class="icon fa fa-chevron-right"></i>
    </span>
</div>
<div class="accordion-body">
  <div class="content">
    <p>Mimin ngerti kok rasanya tidak di support oleh keluarga dan teman, itulah fungsinya forum di <b>EDU.id </b>untuk menjadi teman yang saling support dengan visi, misi dan tujuan yang sama, karena <span style="color:#a12c2f">relasi adalah hal yang penting dalam mencapai kesuksesan,</span> semangat ya!</p>
</div>
</div>
</article>
</div>
</div>
</div>
</div>
</section>
</div>

<section class="our-facts">
    <div class="container">
      <div class="row">
        <div class="col-lg-6">
          <div class="row">
            <div class="col-lg-12">
              <h2>Jumlah <span style="color: #a12c2f"> Link Scam</span> Yang Telah di Laporkan</h2>
          </div>
          <div class="col-lg-6">
              <div class="row">
                <div class="col-12">
                  <div class="count-area-content">
                    <div class="count-digit">37123</div>
                </div>
            </div>
        </div>
    </div>
</div>
</div> 
<div class="col-lg-6 align-self-center">
  <div class="video">
    <a href="#" target="_blank"><img src="assets/images/play-icon.png" alt=""></a>
</div>
</div>
</div>
</div>
</section>

<section class="contact-us" id="contact">
    <div class="container">
      <div class="row">
        <div class="col-lg-9 align-self-center">
          <div class="row">
            <div class="col-lg-12">
              <form id="contact" action="" method="post">
                <div class="row">
                  <div class="col-lg-12">
                    <h2 style="color: #a12c2f">Kirim Masukan Kamu disini</h2>
                </div>
                <div class="col-lg-4">
                    <fieldset>
                      <input name="name" type="text" id="name" placeholder="NAMA...*" required="">
                  </fieldset>
              </div>
              <div class="col-lg-4">
                <fieldset>
                  <input name="email" type="text" id="email" pattern="[^ @]*@[^ @]*" placeholder="EMAIL..." required="">
              </fieldset>
          </div>
          <div class="col-lg-4">
            <fieldset>
              <input name="subject" type="text" id="subject" placeholder="SUBJEK...*" required="">
          </fieldset>
      </div>
      <div class="col-lg-12">
        <fieldset>
          <textarea name="message" type="text" class="form-control" id="message" placeholder="ISI PESAN..." required=""></textarea>
      </fieldset>
  </div>
  <div class="col-lg-12">
    <fieldset>
      <button type="submit" id="form-submit" class="button"><b>KIRIM</b><i class="fas fa-paper-plane" style="margin-left: 10px;"></i></button>

  </fieldset>
</div>
</div>
</form>
</div>
</div>
</div>
<div class="col-lg-3">
  <div class="right-info">
    <ul>
      <li>
        <h6>Whatsapp</h6>
        <span>0812-3456-789</span>
    </li>
    <li>
        <h6>Alamat Email</h6>
        <span>edu.id@gmail.com</span>
    </li>
    <li>
        <h6>Alamat</h6>
        <span>Indonesia, Jakarta - 20738</span>
    </li>
    <li>
        <h6>Website URL</h6>
        <span>https://eduai-zeta.vercel.app/</span>
    </li>
</ul>
</div>
</div>
</div>
</div>
<div class="footer">
  <p>Copyright © 2024 Edu.id Co, Ltd. All Rights Reserved.</p>
</div>
</section>

<!-- Scripts -->
<!-- Bootstrap core JavaScript -->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>


<script src="assets/js/isotope.min.js"></script>
<script src="assets/js/owl-carousel.js"></script>
<script src="assets/js/lightbox.js"></script>
<script src="assets/js/tabs.js"></script>
<script src="assets/js/video.js"></script>
<script src="assets/js/slick-slider.js"></script>
<script src="assets/js/custom.js"></script>
<script>
        //according to loftblog tut
    $('.nav li:first').addClass('active');

    var showSection = function showSection(section, isAnimate) {
      var
      direction = section.replace(/#/, ''),
      reqSection = $('.section').filter('[data-section="' + direction + '"]'),
      reqSectionPos = reqSection.offset().top - 0;

      if (isAnimate) {
        $('body, html').animate({
          scrollTop: reqSectionPos },
          800);
    } else {
        $('body, html').scrollTop(reqSectionPos);
    }

};

var checkSection = function checkSection() {
  $('.section').each(function () {
    var
    $this = $(this),
    topEdge = $this.offset().top - 80,
    bottomEdge = topEdge + $this.height(),
    wScroll = $(window).scrollTop();
    if (topEdge < wScroll && bottomEdge > wScroll) {
      var
      currentId = $this.data('section'),
      reqLink = $('a').filter('[href*=\\#' + currentId + ']');
      reqLink.closest('li').addClass('active').
      siblings().removeClass('active');
  }
});
};

$('.main-menu, .responsive-menu, .scroll-to-section').on('click', 'a', function (e) {
  e.preventDefault();
  showSection($(this).attr('href'), true);
});

$(window).scroll(function () {
  checkSection();
});

//slider script start
$(document).ready(function(){
  $('.slider').slick({
    slidesToShow: 3,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 2000,
    arrows: false, // Menghilangkan tombol panah
    responsive: [
    {
      breakpoint: 768,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
    }
}
]
});
});
//slider script end

        // Slider otomatis untuk mobile view
let currentIndex = 0;
const slider = document.getElementById('slider');
const cards = slider.querySelectorAll('.card');

function slideNext() {
    currentIndex = (currentIndex + 1) % cards.length;
    slider.scrollTo({
        left: cards[currentIndex].offsetLeft,
        behavior: 'smooth'
    });
}

setInterval(slideNext, 3000);

    // Untuk scroll manual dengan smooth
slider.addEventListener('scroll', () => {
    const index = Math.round(slider.scrollLeft / cards[0].offsetWidth);
    currentIndex = index;
});

//laporan penipuan start
let currentSlide = 0;

function loadReports() {
  const reports = JSON.parse(localStorage.getItem('reports')) || [];
  reports.forEach(addReportToSlider);
  startAutoSlide();
}

function saveReport(report) {
  const reports = JSON.parse(localStorage.getItem('reports')) || [];
  reports.push(report);
  localStorage.setItem('reports', JSON.stringify(reports));
}

function submitReport() {
  const firstName = document.getElementById('firstName').value;
  const lastName = document.getElementById('lastName').value;
  const category = document.getElementById('category').value;
  const scamLink = document.getElementById('scamLink').value;
  const notes = document.getElementById('notes').value;
    const scamImage = document.getElementById('scamImage').files[0]; // Akses file gambar

    if (!firstName || !lastName || !category || !scamLink || !notes || !scamImage) {
      alert("Mohon isi semua kolom dan upload gambar!");
      return;
  }

  const reader = new FileReader();
  reader.onload = function(e) {
      const report = {
        firstName,
        lastName,
        category,
        scamLink,
        notes,
            imageUrl: e.target.result // URL dari gambar yang di-upload
        };
        saveReport(report);
        addReportToSlider(report);
    };
    reader.readAsDataURL(scamImage);

    // Bersihkan form setelah submit
    document.getElementById('firstName').value = '';
    document.getElementById('lastName').value = '';
    document.getElementById('category').value = '';
    document.getElementById('scamLink').value = '';
    document.getElementById('notes').value = '';
    document.getElementById('scamImage').value = ''; // Bersihkan file gambar
}

function addReportToSlider(report) {
    const reportItem = document.createElement('div');
    reportItem.classList.add('report-item');
    reportItem.innerHTML = `
    <h3>${report.category}</h3>
    <p><strong>Nama:</strong> ${report.firstName} ${report.lastName}</p>
    <p><strong>Link:</strong> <a href="${report.scamLink}" target="_blank">${report.scamLink}</a></p>
    <p><strong>Catatan:</strong> ${report.notes}</p>
    <img src="${report.imageUrl}" alt="Foto Penipuan">
    `;
    document.getElementById('reportSlider').appendChild(reportItem);
}

function startAutoSlide() {
    setInterval(() => {
      nextSlide();
  }, 2000);

    let startX, endX;
    let isDragging = false;

    // Gesture untuk mobile
    document.getElementById('reportSliderWrapper').addEventListener('touchstart', (e) => {
      startX = e.touches[0].clientX;
  });

    document.getElementById('reportSliderWrapper').addEventListener('touchend', (e) => {
      endX = e.changedTouches[0].clientX;
      if (endX < startX) nextSlide();
      if (endX > startX) prevSlide();
  });

    // Gesture untuk desktop (drag)
    document.getElementById('reportSliderWrapper').addEventListener('mousedown', (e) => {
      isDragging = true;
      startX = e.clientX;
  });

    document.getElementById('reportSliderWrapper').addEventListener('mousemove', (e) => {
      if (isDragging) {
        endX = e.clientX;
        if (endX < startX) {
          nextSlide();
          isDragging = false;
      } else if (endX > startX) {
          prevSlide();
          isDragging = false;
      }
  }
});

    document.getElementById('reportSliderWrapper').addEventListener('mouseup', () => {
      isDragging = false;
  });

    document.getElementById('reportSliderWrapper').addEventListener('mouseleave', () => {
      isDragging = false;
  });
}

function nextSlide() {
    const reports = document.querySelectorAll('.report-item');
    if (reports.length > 1) {
      currentSlide = (currentSlide + 1) % reports.length;
      document.getElementById('reportSlider').style.transform = `translateX(-${currentSlide * 100}%)`;
  }
}

function prevSlide() {
    const reports = document.querySelectorAll('.report-item');
    if (reports.length > 1) {
      currentSlide = (currentSlide - 1 + reports.length) % reports.length;
      document.getElementById('reportSlider').style.transform = `translateX(-${currentSlide * 100}%)`;
  }
}

window.onload = loadReports;
//laporan penipuan start

  //gulir smooth start
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function(e) {
      e.preventDefault();

      const target = document.querySelector(this.getAttribute('href'));
      if (target) {
        target.scrollIntoView({
          behavior: 'smooth' // Menambahkan efek gulir halus
      });
    }
});
});
  //gulir smooth end

//script chatbot start
  (function(d, t) {
    var v = d.createElement(t), s = d.getElementsByTagName(t)[0];
    v.onload = function() {
      if (!document.getElementById('root')) {
        var root = d.createElement('div');
        root.id = 'root';
        d.body.appendChild(root);
      }
      if (window.myChatWidget && typeof window.myChatWidget.load === 'function') {
        window.myChatWidget.load({
          id: '0b367b6e-95be-4a7f-8f9d-e2b13ad09e2c',
        });
      }
    };
    v.src = "https://agentivehub.com/production.bundle.min.js";
    v.type = "text/javascript";
    s.parentNode.insertBefore(v, s);
  })(document, 'script');
  //script chatbot end

</script>
</body>
</body>
</html>