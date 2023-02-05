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

    <!-- My Style -->
    <link rel="stylesheet" href="css/style.css" />

    <!-- Logo Title Bar -->
    <link rel="icon" href="assets/img/Logo.png" type="image/x-icon" />

    <title>Lurizoo</title>
  </head>

  <body>
    <!-- Navbar -->
    <?php display_header(); ?>

    <!-- Tiket -->
    <section class="section-padding" id="section_2">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 col-12">
            <div class="custom-text-box">
              <h2 class="text-center">Harga</h2>
            </div>

            <div class="row">
              <div class="col-4">
                <div class="d-inline-block custom-text-box mb-lg-0">
                  <h5 class="mb-3 text-center" style="color: #85c1e9">
                    Anak-Anak
                  </h5>

                  <p class="text-center">Rp. 5.000,- per orang</p>

                  <ul class="custom-list mt-2">
                    <li class="custom-list-item d-flex">
                      Harga yang tepat untuk memperkenalkan Anak kepada kehidupan alam yang sesungguhnya.
                    </li>
                  </ul>
                </div>
              </div>

              <div class="col-4">
                <div class="d-inline-block custom-text-box mb-lg-0">
                  <h5 class="mb-3 text-center" style="color: #85c1e9">
                    Remaja
                  </h5>

                  <p class="text-center">Rp. 6.000,- per orang</p>

                  <ul class="custom-list mt-2">
                    <li class="custom-list-item d-flex">
                      Harga yang sesuai untuk memperkaya pengetahuan dan experience tentang habitat yang ada di Lurizoo.
                    </li>
                  </ul>
                </div>
              </div>

              <div class="col-4">
                <div class="d-inline-block custom-text-box mb-lg-0">
                  <h5 class="mb-3 text-center" style="color: #85c1e9">
                    Dewasa
                  </h5>

                  <p class="text-center">Rp. 7.000,- per orang</p>

                  <ul class="custom-list mt-2">
                    <li class="custom-list-item d-flex">
                      Harga yang pas untuk orang dewasa yang ingin membantu mengenalkan Anak-Anak tentang kebun binatang.
                    </li>
                  </ul>
                </div>
              </div>
            </div>

          

            <div class="custom-text-box">
              <h2 class="text-center">Wahana</h2>
            </div>

            <div class="row">
              <div class="col-lg-6 col-md-6 col-12">
                <div class="custom-text-box mb-lg-0">
                  <h5 class="mb-3 text-center" style="color: #85c1e9">
                    Aquarium Laut
                  </h5>

                  <p class="text-center">Pengunjung akan diberikan experience berada dibawah ikan-ikan lauy yang ada di aquarium Lurizoo.</p>
                  <p class="text-center">Rp. 20.000,- per orang</p>
                </div>
              </div>

              <div class="col-lg-6 col-md-6 col-12">
                <div class="custom-text-box mb-lg-0">
                  <h5 class="mb-3 text-center" style="color: #85c1e9">
                    Memberi Makan Rusa
                  </h5>

                  <p class="text-center">Pengunjung akan merasakan langsung memberikan makan rusa dan menikmati momen keseruan bersama.</p>
                  <p class="text-center">Rp. 10.000,- per orang</p>

                </div>
              </div>
            </div>

            <div class="row justify-content-center">
              <button type="button" class="button-selengkapnya">
                <a
                  style="text-decoration: none; color: #000"
                  href="pesan-tiket.php"
                  >Pesan Tiket
                </a>
              </button>
            </div>
          </div>
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
