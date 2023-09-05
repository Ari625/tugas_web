<?php
   $hobi = $_POST["hobi"];
?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
   <title>Hobi</title>
</head>
<body class="p-3">
   <h2 class="text-primary">
      Hobi yang Anda Pilih :
   </h2>
      <?php foreach ($hobi as $nilai ) : ?>
         <h4>
            - <?= $nilai; ?>
         </h4>
      <?php endforeach ?>
</body>
</html>