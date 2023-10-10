<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Sistem Informasi Akademik SMK Damay</title>
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
   <link href="css/sign-in.css" rel="stylesheet">
</head>
<body>
   <h2 class="text-center text-primary mt-2">Sistem Informasi</h2>
   <h1 class="text-center">SMKN 2 Indramayu</h1>
   <hr>

   <br>
   <!-- cek pesan notifikasi -->
   <?php 
      if(isset($_GET['pesan'])){
         if($_GET['pesan']== 'gagal'){
            echo "Login gagal! useraname dan password salah";
         } else if($_GET['pesan']=="logout"){
            echo "Anda berhasil logout";
         } else if($_GET['pesan']=="belum login"){
            echo "Anda harus login untuk mengakses halaman admin";
         }
      }
   ?>
   <br>
   <br>
<main class="form-signin w-100 m-auto">
   <form method="post" action="login.php">
      <h1 class="h3 mb-3 fw-normal text-center">LOGIN</h1>

      <div class="form-floating">
         <input type="text" class="form-control mb-1" id="username" placeholder="Masukan username" name="username">
         <label for="username">Username</label>
      </div>
      <div class="form-floating">
         <input type="password" class="form-control" id="floatingPassword" placeholder="Password" name="password">
         <label for="floatingPassword">Password</label>
      </div>
      <button class="btn btn-primary w-100 py-2" type="submit">LOGIN</button>
      <h6 class="mt-3 ">No have account? 
         <a href="register.php" class="text fw-normal">Register</a>
      </h6>
      <p class="mt-5 mb-3 text-body-secondary">&copy;2023</p>
   </form>
</main>

</main>
</body>
</html>