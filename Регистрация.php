<?php
    session_start();

    if ($_SESSION['user']) {
      header('Location: index.php');
    }
?>
<!DOCTYPE html>
<html style="font-size: 16px;" lang="ru">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="page_type" content="np-template-header-footer-from-plugin">
    <title>Войти</title>
    <link rel="stylesheet" href="nicepage.css" media="screen">
<link rel="stylesheet" href="Регистрация.css" media="screen">
    <script class="u-script" type="text/javascript" src="jquery.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="nicepage.js" defer=""></script>
    <meta name="generator" content="Nicepage 4.2.6, nicepage.com">
    <link rel="icon" href="images/favicon.png">
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i">
    <link id="u-page-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lobster:400">

    <meta name="theme-color" content="#478ac9">
    <meta name="twitter:site" content="@">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Регистрация">
    <meta name="twitter:description" content="Site1">
    <meta property="og:title" content="Регистрация">
    <meta property="og:description" content="">
    <meta property="og:type" content="website">
  </head>
  <body class="u-body">
    <section class="u-clearfix u-section-1" id="sec-f909">
      <div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
        <div class="u-form u-login-control u-form-1">
          <form action="vhod.php" method="POST" class="u-clearfix u-form-custom-backend u-form-spacing-10 u-form-vertical u-inner-form" source="custom" name="form" style="padding: 10px;">
            <div class="u-form-group u-form-name u-label-top">
              <label for="reg" class="u-label">Имя пользователя</label>
              <input type="text" placeholder="Введите ваше имя пользователя" id="login" name="login" class="u-border-grey-30 u-input u-input-rectangle" required="login">
              <?php    
                if (isset($_SESSION['messagelog'])) {
                  echo '<div class="sms"> ' . $_SESSION['messagelog'] . '</div>';
                }
                unset($_SESSION['messagelog']);
              ?>
            </div>
            <div class="u-form-group u-form-password u-label-top">
              <label for="reg" class="u-label">Пароль</label>
              <input type="password" placeholder="Введите вашь пароль" id="password" name="password" class="u-border-grey-30 u-input u-input-rectangle" required="password">
              <?php    
                if (isset($_SESSION['messagepass'])) {
                  echo '<div class="sms"> ' . $_SESSION['messagepass'] . '</div>';
                }
                unset($_SESSION['messagepass']);
              ?>
            </div>
            <div class="u-align-left u-form-group u-form-submit">
              <a href="index.php" class="u-border-none u-btn u-btn-submit u-button-style u-gradient u-none u-text-black u-btn-1">Войти</a>
              <input type="submit" value="submit" class="u-form-control-hidden">
            </div>
            <input type="hidden" value="" name="recaptchaResponse">
            <div class="u-align-left u-form-group">
              <a href="Регист.php" class="u-border-none u-btn u-btn-submit u-button-style u-gradient u-none u-text-black u-btn-2">Регистрация</a>
            </div>
          </form>
        </div>
      </div>
    </section>
  </body>
</html>