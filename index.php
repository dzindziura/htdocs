<!DOCTYPE html>
<html lang="en">
<head>
  <?php
  $website_title = 'PHP blog';
   require 'blocks/head.php';
    ?>
</head>
<body>
  <?php require 'blocks/header.php' ?>
        <main class="container mt-5">
          <div class="row">
            <div class="col-md-8 mb-3">
              Основна частина сайта
            </div>
<?php require 'blocks/aside.php' ?>

          </div>
        </main>

  </div>
<?php require 'blocks/footer.php' ?>
</body>
</html>
