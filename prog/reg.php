<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-US-Compatible" content="ie=edge">
        <link rel="stylesheet" href="../../css/style.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
        <title>Strax</title>
    </head>
    <body>
    <div class="container">
    <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom">
      <a href="../../index.php" class="d-flex align-items-center col-md-3 mb-2 mb-md-0 text-dark text-decoration-none">
        
        <img class="mb-2" src="../../img/1.jpg" alt="" width="40" height="32">
      </a>

      <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
        <li><a href="../../index.php" class="nav-link px-2 link-secondary">Главная</a></li>
        <li><a href="../../app/cont.php" class="nav-link px-2 link-dark">Контакты</a></li>
      </ul>

      <div class="col-md-3 text-end">
      <?php if ($_SESSION['user_fiz']['fam']): ?>
        <button type="button" class="btn btn-primary" onclick="document.location='../profilefiz.php'">Профиль <?php echo $_SESSION['user_fiz']['fam']?> <?php echo $_SESSION['user_fiz']['nam'] ?> <?php echo $_SESSION['user_fiz']['och'] ?> 
      </button>
      <?php elseif($_SESSION['user_ur']['ema']!=''): ?>
        <button type="button" class="btn btn-primary" onclick="document.location='../profileur.php'">Профиль <?php echo $_SESSION['user_ur']['organiz']?> <?php echo $_SESSION['user_ur']['ema'] ?> 
      </button>
      <?php else: ?>
        <button type="button" class="btn btn-outline-primary me-2" onclick="document.location='../app/regis/auth.php'">Войти</button>
        <button type="button" class="btn btn-primary" onclick="document.location='../app/regis/reg.php'">Регистрация</button>
      <?php endif ?>
      </div>
    </header>
  </div>




  <div class="container">
  <div class="row">
        <div class="col-md-9">
        <button type="button" class="btn btn-outline" onclick="document.location='regur.php'">Регистрация юр лица</button>
        <button type="button" class="btn btn-primary" onclick="document.location='regfiz.php'">Регистрация физ лица</button>
  </div>
  </div>
  </div>

    


    <footer class="pt-4 my-md-5 pt-md-5 border-top">
    <div class="row">
      <div class="col-12 col-md">
        <img class="mb-2" src="../../img/1.jpg" alt="" width="24" height="19">
        <small class="d-block mb-3 text-muted">©2022</small>
      </div>
    </div>
  </footer>
  <script src="../../js/salvattore.min.js"></script>
  </body>
</html>