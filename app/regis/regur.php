<?php
    session_start();
    ?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-US-Compatible" content="ie=edge">
        <link rel="stylesheet" href="/css/style.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
        <title>Strax</title>
    </head>
    <body>
    <div class="container">
    <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom">
      <a href="../index.php" class="d-flex align-items-center col-md-3 mb-2 mb-md-0 text-dark text-decoration-none">
      
        <img class="mb-2" src="/img/1.jpg" alt="" width="40" height="32">
      </a>

      <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
        <li><a href="../index.php" class="nav-link px-2 link-secondary">Главная</a></li>
        <li><a href="../app/cont.php" class="nav-link px-2 link-dark">Контакты</a></li>
      </ul>
      <div class="col-md-3 text-end">
      <?php if ($_SESSION['user_fiz']['fam']): ?>
        <button type="button" class="btn btn-primary" onclick="document.location='/profilefiz.php'">Профиль <?php echo $_SESSION['user_fiz']['fam']?> <?php echo $_SESSION['user_fiz']['nam'] ?> <?php echo $_SESSION['user_fiz']['och'] ?> 
      </button>
      <?php elseif($_SESSION['user_ur']['ema']!=''): ?>
        <button type="button" class="btn btn-primary" onclick="document.location='/profileur.php'">Профиль <?php echo $_SESSION['user_ur']['organiz']?> <?php echo $_SESSION['user_ur']['ema'] ?> 
      </button>
      <?php else: ?>
        <button type="button" class="btn btn-outline-primary me-2" onclick="document.location='/app/regis/auth.php'">Войти</button>
        <button type="button" class="btn btn-primary" onclick="document.location='/app/regis/reg.php'">Регистрация</button>
      <?php endif ?>
      </div>
    </header>
  </div>

  <div class="container">
  <div class="row">
        <div class="col-md-9">
  <form>
    <h1 class="h3 mb-5 fw-normal">Редистрация юридического лица</h1>

    <div class="form-floating mb-3">
      <input type="text" class="form-control" name="organiz" placeholder="Название организации">
      <label for="floatingInput">Название организации</label>
    </div>
    <div class="form-floating mb-3">
      <input type="number" class="form-control" name="inn"  placeholder="ИНН организации" minlength="9" maxlength="11">
      <label for="floatingInput">ИНН организации</label>
    </div>
    <div class="form-floating mb-3">
      <input type="text" class="form-control" name="ur_ad"  placeholder="юридический адресс организации">
      <label for="floatingInput">Юридический адресс организации</label>
    </div>
    <div class="form-floating mb-3">
      <input type="number" class="form-control" name="tel"  placeholder="Телефон организации" minlength="9" maxlength="11">
      <label for="floatingInput">Телефон организации</label>
    </div>

    <div class="form-floating mb-3">
      <input type="email" class="form-control" name="ema" placeholder="Введите свой Email">
      <label for="floatingInput">Email</label>
    </div>
    <div class="form-floating mb-3">
      <input type="password" class="form-control" name="pass" placeholder="Введите пароль">
      <label for="floatingPassword">Пароль</label>
    </div>
    <div class="form-floating mb-3">
      <input type="password" class="form-control" name="password_conf" placeholder="Подтвердить пароль">
      <label for="floatingPassword">Подтвердить пароль</label>
    </div>
    <button class="registerur-btn w-100 btn btn-lg btn-primary mb-3" type="submit">Регистрация</button>

    <p class="pa mb-3">
            У вас уже есть аккаунт - <a class="aa" href="../../app/regis/authur.php">авторизуйтесь</a>!
        </p>
        <p class="msg none">Lorem ipsum dolor sit amet.</p>


  
    </form>
  </div>
  </div>
  </div>
  <script src="../../js/jquery-3.4.1.min.js"></script>
  <script src="../../js/salvattore.min.js"></script>
  <script src="../../js/mainur.js"></script>
  
    


    <footer class="pt-4 my-md-5 pt-md-5 border-top">
    <div class="row">
      <div class="col-12 col-md">
        <img class="mb-2" src="../../img/1.jpg" alt="" width="24" height="19">
        <small class="d-block mb-3 text-muted">©2022</small>
      </div>
    </div>
  </footer>
 
  </body>
</html>