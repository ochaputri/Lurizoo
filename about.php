<?php
include('headerFooter/php-awal.php')
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
      crossorigin="anonymous"
    />

    <!-- CSS FILES -->
    <link href="css/bootstrap.min.css" rel="stylesheet" />

    <link href="css/bootstrap-icons.css" rel="stylesheet" />

    <link href="css/templatemo-kind-heart-charity.css" rel="stylesheet" />

    <!-- Fonts Google -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700&display=swap"
      rel="stylesheet"
    />

    <!-- Font Awesome -->
    <link
      rel="stylesheet"
      href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css"
    />

    <!-- CSS FILES -->
    <link href="css/bootstrap.min.css" rel="stylesheet" />

    <link href="css/bootstrap-icons.css" rel="stylesheet" />

    <link href="css/templatemo-kind-heart-charity.css" rel="stylesheet" />

    <!-- My Style -->
    <link rel="stylesheet" href="css/style.css" />

    <!-- Logo Title Bar -->
    <link rel="icon" href="assets/img/Logo.png" type="image/x-icon" />

    <!-- library google maps -->
    <script src="http://maps.googleapis.com/maps/api/js"></script>

    <!-- kode google maps -->
    <script>
        // fungsi initialize untuk mempersiapkan peta
        function initialize() {
        var propertiPeta = {
            center:new google.maps.LatLng(-7.356645, 109.331126),
            zoom:20,
            mapTypeId:google.maps.MapTypeId.ROADMAP
        };
        
        var peta = new google.maps.Map(document.getElementById("googleMap"), propertiPeta);
        }

        // event jendela di-load  
        google.maps.event.addDomListener(window, 'load', initialize);
    </script>

    <title>Lurizoo</title>
  </head>

  <body>
    <!-- Navbar -->
    <?php display_header(); ?>

    <!-- Hiro Section -->
    <section id="hero">
      <div class="container-fluid">
        <img class="img-fluid" src="assets/img/Jumbo.jpg">
      </div>

    <!-- Tentang -->
    <section id="tentang">
      <div class="container">
        <div class="row">
          <div class="col-12 text-center mt-5">
            <h2 class="judul-tentang">TENTANG</h2>
          </div>
        </div>
        <div class="row h-100" style="overflow: auto">
          <div class="col-md-4 mt-4">
            <img
              width="300"
              height="300"
              src="assets/img/LOGO.png"
              alt=""
              class="img-fluid"
            />
          </div>
          <div class="col-md-7 tentang-tagline end-2 mt-4">
            <p class="text-tentang">
              Selamat datang di Sanggaluri tempat rekreasi terbaik andalan keluarga. Sanggaluri adalah sebuah Kebun Binatang di Purbalingga, Jawa Tengah dengan luas kawasan 10 hektar. Sanggaluri berada di tengah jantung kota Purbalingga dengan koleksi satwa yang menarik,lingkungan yang asri, adem dan nyaman. 
              Koleksi satwa Sanggaluri cukup banyak, diantaranya terdiri dari kelas mamalia, reptil, aves, dan ikan. Selain sebagai tempat kunjungan wisata, Sanggaluri juga sebagai tempat edukasi bagi pengunjung. Jangan takut jika tersesat, karena kami telah menyediakan denah yang dapat memudahkan pengunjung untuk berkeliling kebun binatang. 
            </p>
          </div>

          <div class="container">
            <div class="col-md-11 tentang-tagline position-absolute end-2 mt-4">
              <p class="text-tentang">
                Cara mendapatkan tiket masuk Sanggaluri juga mudah, dengan pesan tiket secara online, pilih paket tiket dengan harga terjangkau lalu bayar. Tak usah ragu dan bimbang, kami siap melayani Anda. Pengunjung dapat berfoto dengan satwa, menunggangi gajah, melihat pertunjukan burung pasti seru bukan. Ayo berkunjung ke Sanggaluri. 
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!--Gambar section-->
    <section id="gambar">
      <div class="container">
        <div class="row justify-content-center mt-5">
          <div class="col-md-4">
            <div class="card card-gambar" style="width: 20rem">
              <img
                src="assets/img/pengunjung.jpg"
                class="card-img-top"
                alt="..."
              />
              <div class="card-body">
                <p class="card-text">
                  Pengunjung sedang memberi makan Jerapah
                </p>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card card-gambar" style="width: 20rem">
              <img
                src="assets/img/pengunjung1.jpg"
                class="card-img-top"
                alt="..."
              />
              <div class="card-body">
                <p class="card-text">
                  Pengunjung sedang berfoto dengan burung pelikan
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Maps Google -->
    <section>
      <div class="container">
        <div class="row">
          <div class="col-12 text-center mt-5">
            <h2 class="judul-tentang">LOKASI</h2>
          </div>
        </div>
        <div class="container">
          <!-- Elemen yang akan menjadi kontainer peta -->
          <div id="googleMap" style="width:100%;height:380px;"></div>
        </div>
      </div>
    </section>

    <!-- Footer -->
    <?php display_footer(); ?>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
      crossorigin="anonymous"
    ></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>
