<!DOCTYPE html>
<html lang="en">
<head>
  <?php
  $website_title = 'Реєстрація на сайті';
    require 'blocks/head.php';
    ?>
</head>
<body>
  <?php require 'blocks/header.php' ?>
        <main class="container mt-5">
          <div class="row">
            <div class="col-md-8 mb-3">
              <h4>Форма реєстрації</h4>
              <form action="reg/reg.php" method="post">
                <label for="username">Ваше ім'я</label>
                <input type="text" name="username" id="username" class="form-control">
                <label for="Email">Email</label>
                <input type="email" name="email" id="email" class="form-control">
                <label for="login">Логин</label>
                <input type="text" name="login" id="login" class="form-control">
                <label for="pass">Пароль</label>
                <input type="password" name="pass" id="pass" class="form-control">

                 <button type="submit" class="btn btn-success mt-5">Зареєструватись</button>
              </form>
            </div>
<?php require 'blocks/aside.php' ?>

          </div>
        </main>

  </div>
<?php require 'blocks/footer.php' ?>
</body>
</html>
