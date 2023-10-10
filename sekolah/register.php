<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
   <link href="css/sign-in.css" rel="stylesheet">
   <title>Registrasi</title>
</head>
<body>
   <br>
   <br>
   <br>
   <br>
   <main class="form-signin w-100 m-auto ">
      <form action="/registration" method="post">
         <h2 class="text-center text-uppercase fw-normal">registration</h2>

         <div class="form-floating">
         <input type="text" class="form-control mb-1" id="username" placeholder="Masukan username" name="username">
         <label for="username">Username</label>
      </div>
      <div class="form-floating">
         <input type="password" class="form-control" id="floatingPassword" placeholder="Password" name="password">
         <label for="floatingPassword">Password</label>
      </div>
      <div class="form-floating">
         <input type="password" class="form-control" id="floatingPassword2" placeholder="Password Confirmation" name="password2">
         <label for="floatingPassword2">Password Confirmation</label>
      </div>
         
         <div class="col-12">
            <button type="submit" class="btn btn-primary w-100 py-2">Register</button>
         </div>
      </form>
      <h6 class="mt-3 ">Already registered? 
         <a href="index.php" class="text">Login</a>
      </h6>
   </main>
</body>
</html>