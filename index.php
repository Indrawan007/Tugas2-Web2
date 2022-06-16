<?php

$sumber = 'https://indonesia-public-static-api.vercel.app/api/heroes';
$konten = file_get_contents($sumber);
$data = json_decode($konten, true);

?>


<!doctype html>
<html lang="ar" dir="rtl">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.rtl.min.css" integrity="sha384-dc2NSrAXbAkjrdm9IYrX10fQq9SDG6Vjz7nQVKdKcJl3pC+k37e7qJR5MVSCS+wR" crossorigin="anonymous">

    <title>API Pahlawan Nasional</title>
  </head>
  <body>
    <h1 class="text-center mt-3">Pahlawan Nasional</h1>
    <br>
    <div class="container">
        <div class="row">
            <?php
                foreach($data as $row){

            ?>
            <div class="col-md-4">
                <div class="card border-success mb-3" style="max-width: 18rem;">
                    <div class="card-header bg-transparent border-success"><?php echo $row['name']; ?></div>
                        <div class="card-body text-success">
                            <h5 class="card-title">Deskripsi</h5>
                            <p class="card-text">
                                <?php echo $row['birth_year']; ?>-
                                <?php echo $row['death_year']; ?><br>
                                <?php echo $row['description']; ?>
                            </p>
                        </div>
                    <div class="card-footer bg-transparent border-success"><?php echo $row['ascension_year']; ?></div>
                </div>
            </div>
            <?php } ?>
        </div>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
    -->
  </body>
</html>