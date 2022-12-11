<?php
    session_start();
    require_once '../include/database.php';
    require_once '../functions.php';
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
      <a href="/index.php" class="d-flex align-items-center col-md-3 mb-2 mb-md-0 text-dark text-decoration-none">
        
        <img class="mb-2" src="/img/1.jpg" alt="" width="40" height="32">
      </a>

      <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
        <li><a href="/index.php" class="nav-link px-2 link-secondary">Главная</a></li>
        <li><a href="/app/cont.php" class="nav-link px-2 link-dark">Контакты</a></li>
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
    <h1 class="h3 mb-5 fw-normal">Добавление документа</h1>
    
    <div class="col-md-5 mb-3">
            <label for="country">Тип документа</label>
            <select id="select" class="custom-select d-block w-100" >
              <option value="" selected>Выбрать тип документа...</option>
              <option value="Паспорт">Паспорт</option>
              <option value="Кадастровый номер">Кадастровый номер</option>
              <option value="Номер машины">Номер машины</option>
              <option value="Номер документа">Номер документа</option>
            </select>
        
          </div>

    <div class="form-floating mb-3">
      <input type="text" class="form-control" name="gos_n" placeholder="Гос номер">
      <label for="floatingInput">Гос номер</label>
    </div>
    <button class="doki-btn w-100 btn btn-lg btn-primary mb-3" type="submit">Добавить</button>
    <p class="msg none">Lorem ipsum dolor sit amet.</p>
  
    </form>
  </div>
  </div>
  </div>
  <script src="/js/jquery-3.4.1.min.js"></script>
  <script src="/js/salvattore.min.js"></script>
  <script src="/app/doki/doki.js"></script>
  
    


    <footer class="pt-4 my-md-5 pt-md-5 border-top">
    <div class="row">
      <div class="col-12 col-md">
        <img class="mb-2" src="/img/1.jpg" alt="" width="24" height="19">
        <small class="d-block mb-3 text-muted">©2022</small>
      </div>
    </div>
  </footer>
 
  </body>
</html>