<?php
session_start();
require "functions_penjualan.php";

if (isset($_POST["login"])) {
    $email = $_POST["email"];
    $password = $_POST["password"];

    $result = mysqli_query($conn, "SELECT * FROM users WHERE email = '$email'");
    if (mysqli_num_rows($result) === 1) {
        $row = mysqli_fetch_array($result);
        if (mysqli_query($conn, "SELECT * FROM users WHERE password = '$password'")) {
            $_SESSION["login"] = true;
            $_SESSION["role"] = $row["role"];
            header("Location: index.php");
            exit;
        }
    }
    $error = true;
    // var_dump($result);
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <link href="css/sign-in.css" rel="stylesheet">
    <title>Login</title>
</head>

<body>

    <main class="form-signin w-100    m-auto row h-100 jusitify-content-center align-items-center">
        <form method="post" action="">
            <h1 class="h3 mb-3 fw-normal text-center">LOGIN</h1>

            <?php if (isset($error)): ?>
                <p class="text-danger">
                    email atau password salah
                </p>
            <?php endif ?>
            <div class="form-floating">
                <input type="email" class="form-control mb-1" id="email" placeholder="Masukan email" name="email">
                <label for="email">Email</label>
            </div>
            <div class="form-floating">
                <input type="password" class="form-control" id="floatingPassword" placeholder="Password"
                    name="password">
                <label for="floatingPassword">Password</label>
            </div>
            <button class="btn btn-primary w-100 py-2" type="submit" name="login">LOGIN</button>
            <p class="mt-5 mb-3 text-body-secondary">&copy;2023</p>
        </form>
    </main>
</body>

</html>