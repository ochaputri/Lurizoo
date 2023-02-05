<?php include('db/server.php') ?>

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
    <link rel="stylesheet" href="css/style-signin.css" />

    <!-- Logo Title Bar -->
    <link rel="icon" href="assets/img/Logo_official.png" type="image/x-icon" />

    <title>Lurizoo</title>
  </head>

  <body>
    <section class="vh-100">
      <div class="container py-5 h-100">
        <div class="row d-flex align-items-center justify-content-center h-100">
          <div class="col-md-8 col-lg-7 col-xl-6">
            <img
              src="assets/img/signin.jpg"
              class="img-fluid"
              alt="Phone image"
            />
          </div>
          <div class="col-md-7 col-lg-5 col-xl-5 offset-xl-1">
            <form method="post" action="login.php">
              <!-- first name last name input -->
              <div class="form-outline mb-4, row" style="margin-bottom: 20px;">
                <div class="col">
                  <label class="form-label" for="form1Example13">First Name</label>
                  <input 
                  type="text" 
                  id="firstName" 
                  class="form-control form-control-lg" 
                  name="firstName" required/>
                </div>
                <div class="col">
                  <label class="form-label" for="form1Example13">Last Name</label>
                  <input 
                  type="text" 
                  id="lastName" 
                  class="form-control form-control-lg" 
                  name="lastName" required/>
                </div>
              </div>

              <!-- Gender Input -->
              <div>
                <label class="form-label" for="form1Example13">Gender</label><br>
                <div class="form-check form-check-inline">
                  <input 
                  class="form-check-input" 
                  type="radio" 
                  name="gender" 
                  id="male" 
                  value="male" required>
                  <label class="form-check-label" for="inlineRadio1">Male</label>
                </div>
                <div class="form-check form-check-inline" style="margin-bottom: 20px;">
                  <input 
                  class="form-check-input" 
                  type="radio" 
                  name="gender" 
                  id="female" 
                  value="female" required>
                  <label class="form-check-label" for="inlineRadio2">Female</label>
                </div>
              </div>

              <!-- Email Input -->
              <div class="form-outline mb-4">
                <label class="form-label" for="form1Example13">Email address</label>
                <input
                  type="text"
                  id="email"
                  class="form-control form-control-lg"
                  name="email" required
                />
              </div>

              <!-- Password input -->
              <div class="form-outline mb-4">
                <label class="form-label" for="form1Example23">Password</label>
                <input
                  type="password"
                  id="password"
                  class="form-control form-control-lg"
                  name="password" required
                />
              </div>
              
              <!-- Handphone input -->
              <div class="form-outline mb-4">
                <label class="form-label" for="form1Example23">No. Handphone</label>
                <input
                  type="number"
                  id="number"
                  class="form-control form-control-lg"
                  name="number" required
                />
              </div>

              <!-- Submit button -->
              <button href="" type="submit" name="reg_user" class="btn btn-primary btn-lg btn-block">
                Sign in
              </button>
            </form>
          </div>
        </div>
      </div>
    </section>
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
