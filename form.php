<?php
require_once 'connect.php'
?>
<!doctype html>
<html lang="ru">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
  <meta name="generator" content="Hugo 0.98.0">
  <title>Каталог</title>

  <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/album/">
  <link href="assets/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="css/catalog.css">
  <link rel="stylesheet" href="css/signin.css">

  <style>
    .bd-placeholder-img {
      font-size: 1.125rem;
      text-anchor: middle;
      -webkit-user-select: none;
      -moz-user-select: none;
      user-select: none;
    }

    @media (min-width: 768px) {
      .bd-placeholder-img-lg {
        font-size: 3.5rem;
      }
    }

    .b-example-divider {
      height: 3rem;
      background-color: rgba(0, 0, 0, .1);
      border: solid rgba(0, 0, 0, .15);
      border-width: 1px 0;
      box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
    }

    .b-example-vr {
      flex-shrink: 0;
      width: 1.5rem;
      height: 100vh;
    }

    .bi {
      vertical-align: -.125em;
      fill: currentColor;
    }

    .nav-scroller {
      position: relative;
      z-index: 2;
      height: 2.75rem;
      overflow-y: hidden;
    }

    .nav-scroller .nav {
      display: flex;
      flex-wrap: nowrap;
      padding-bottom: 1rem;
      margin-top: -1px;
      overflow-x: auto;
      text-align: center;
      white-space: nowrap;
      -webkit-overflow-scrolling: touch;
    }
  </style>


</head>

<body>
  <header>
    <nav class="navbar navbar-expand-md navbar-dark bg-dark">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">
          <img src="img/Logo.svg" alt="">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse"
          aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
          <ul class="navbar-nav me-auto mb-2 mb-md-0">
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="index.html">Главная</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="catalog.html">Каталог</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="form.php">Задать вопрос</a>
            </li>
          </ul>
          <form class="d-flex" role="search">
            <input class="form-control me-2" type="search" placeholder="Искать на сайте" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Поиск</button>
          </form>
        </div>
      </div>
    </nav>
  </header>
  <!-- вот до этого момента все то же самое, что и в индексе -->
  <!-- контейнер для формы (типо центрирование хд) -->
  <div class="container">
  <form class="js-form" method="post" action="bd.php" >
    <div class="col-md-6">
      <!-- инпут для имени -->
      <label for="inputText" class="form-label">Имя</label>
      <input type="text" class="js-input form-input" name="name" id="inputEmail4" required>
    </div>
    <!-- фамилии -->
    <div class="col-md-6">
      <label for="inputPassword4" class="form-label">Фамилия</label>
      <input type="text" class="js-input form-input" name="surname" id="inputPassword4" >
    </div>
    <div class="col-12">
      <!-- номер телефона -->
      <label for="inputTel" class="form-label">Номер телефона</label>
      <input type="tel" class="js-input js-input-phone form-input" name="number" id="inputTel" required>
    </div>
    <!-- и т.д.  -->
    <div class="col-12">
      <label for="inputEmail" class="form-label">Электронная почта</label>
      <input type="email" class="js-input js-input-email form-input" name="email" id="inputAddress2" required>
    </div>
    <div class="col-md-6">
      <label for="inputCity" class="form-label">Область</label>
      <input type="text" class="js-input form-input" id="inputCity" name="city" required>
    </div>
    

    <div class="col-md-2">
      <label for="inputZip" class="form-label">Другой</label>
      <input type="text" class="js-input" id="inputZip">
    </div>
    <div class="col-12">
      <div class="form-check">
        <!-- чекбокс -->
        <!-- бтв я не знаю как его заносить в бд, если че форму поменяем -->
        <input class="js-input-checkbox form-input" type="checkbox" id="gridCheck" required>
        <label class="form-check-label " for="gridCheck">
         Я ознакомлен и согласен с Политикой конфиденциальности оператора, подтверждаю свое согласие на обработку введенных мною персональных данных
        </label>
      </div>
    </div>
    <div class="col-12">
      <!-- кнопка отправить в бд (которой нет) -->
      <button type="submit" class="btn btn-lg btn-secondary">Отправить</button>
    </div>
  </form>
  </div>
  <!-- футер из прошлых страниц  -->
  <footer>
    <ul class="nav justify-content-center border-bottom pb-3 mb-3">
      <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Вверх</a></li>
      <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Контакты</a></li>
      <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Заказать звонок</a></li>
      <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Сертификат</a></li>

    </ul>
    <p class="text-center text-muted">&copy; 2022 Furniture Shop, г. Ульяновск <br> ул. Самарская 10</p>
  </footer>

  <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
  <script src="index.js"></script>

</body>

</html>