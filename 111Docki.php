<div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom shadow-sm">
            <h5 class="my-0 mr-md-auto font-weight-normal">Страховая</h5>
            <nav class="my-2 my-md-0 mr-md-3">
                <a class="p-2 text-dark" href="#">Главная</a>
                <a class="p-2 text-dark" href="#">Контакты</a>
            </nav>
            <a class="btn btn-outline-primary" href="#" >Войти</a>
        </div>





<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-US-Compatible" content="ie=edge">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
        <title>Strax</title>
    </head>
    <body>
    <div class="container">
    <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom">
      <a href="/" class="d-flex align-items-center col-md-3 mb-2 mb-md-0 text-dark text-decoration-none">
        <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap"><use xlink:href="#bootstrap"></use></svg>
      </a>

      <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
        <li><a href="#" class="nav-link px-2 link-secondary">Главная</a></li>
        <li><a href="#" class="nav-link px-2 link-dark">О нас</a></li>
        <li><a href="#" class="nav-link px-2 link-dark">Контакты</a></li>
      </ul>

      <div class="col-md-3 text-end">
        <button type="button" class="btn btn-outline-primary me-2">Войти</button>
        <button type="button" class="btn btn-primary">Регистрация</button>
      </div>
    </header>
  </div>
  </div>
        <div class="container mt-5">
            <h3 class="mb-5">Наши услуги</h3>
            <?php
            
            ?>
        </div>
    </body>
</html>


echo '<pre>';
    var_dump($result);
    echo '</pre>';




    <form>
    <img class="mb-4" src="/docs/5.2/assets/brand/bootstrap-logo.svg" alt="" width="72" height="57">
    <h1 class="h3 mb-3 fw-normal">Please sign in</h1>

    <div class="form-floating">
      <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
      <label for="floatingInput">Email address</label>
    </div>
    <div class="form-floating">
      <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
      <label for="floatingPassword">Password</label>
    </div>

    <div class="checkbox mb-3">
      <label>
        <input type="checkbox" value="remember-me"> Remember me
      </label>
    </div>
    <button class="w-100 btn btn-lg btn-primary" type="submit">Sign in</button>
    <p class="mt-5 mb-3 text-muted">© 2017–2022</p>
  </form>





  <div class="row">
        <div class="col-md-9">
  <form>
    <h1 class="h3 mb-5 fw-normal">Войдите</h1>

    <div class="form-floating">
      <input type="text" class="form-control" name="login" id="floatingInput" placeholder="Введите свой Email">
      <label for="floatingInput">Email</label>
    </div>
    <div class="form-floating">
      <input type="password" class="form-control" id="floatingPassword" name="password" placeholder="Введите пароль">
      <label for="floatingPassword">Пароль</label>
    </div>
    <button class="login-btn" type="submit">Вход</button>

    <p class="pa">
            У вас нет аккаунта? - <a class="aa" href="../../app/regis/reg.php">зарегистрируйтесь</a>!
        </p>
        <p class="msg none">Lorem ipsum dolor sit amet.</p>
  </form>




  <?php
session_start();

if ($_SESSION['user']) {
    header('Location: profile.php');
}

?>



let formData = new FormData();
    formData.append('ema', ema);
    formData.append('pass', pass);
    formData.append('password_conf', password_conf);
    formData.append('organiz', organiz);
    formData.append('tel', tel);
    formData.append('inn', inn);
    formData.append('ur_ad', ur_ad);





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
      <input type="int" class="form-control" name="inn"  placeholder="ИНН организации">
      <label for="floatingInput">ИНН организации</label>
    </div>
    <div class="form-floating mb-3">
      <input type="int" class="form-control" name="ur_ad"  placeholder="юридический адресс организации">
      <label for="floatingInput">Юридический адресс организации</label>
    </div>
    <div class="form-floating mb-3">
      <input type="text" class="form-control" name="tel"  placeholder="Телефон организации">
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




        <form>
        <label>Название организации</label>
        <input type="text" name="organiz" placeholder="Введите Название организации">
        <label>ИНН организации</label>
        <input type="text" name="inn" placeholder="Введите ИНН организации">
        <label>Почта</label>
        <input type="email" name="ema" placeholder="Введите адрес своей почты">
        <label>Юридический адресс организации</label>
        <input type="text" name="ur_ad" placeholder="Введите адрес">
        <label>Телефон</label>
        <input type="text" name="tel" placeholder="Введите Телефон">


        <label>Пароль</label>
        <input type="password" name="pass" placeholder="Введите пароль">
        <label>Подтверждение пароля</label>
        <input type="password" name="password_conf" placeholder="Подтвердите пароль">
        <button type="submit" class="registerur-btn">Зарегистрироваться</button>
        <p>
            У вас уже есть аккаунт? - <a href="../../app/regis/authur.php">авторизируйтесь</a>!
        </p>
        <p class="msg none">Lorem ipsum.</p>