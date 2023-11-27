<?php
require_once 'main.php';

if ($_GET) {
  if (isset($_GET["page"])) $page = $_GET["page"];
  else header("Location:", "index.php");
  
}
?>
<!DOCTYPE html>
<html lang="tr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <link rel="apple-touch-icon" sizes="180x180" href="assets/favicon/black/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="assets/favicon/black/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="assets/favicon/black/favicon-16x16.png">
  <link rel="manifest" href="assets/favicon/black/site.webmanifest">
  <link rel="icon" type="image/png" sizes="32x32" href="assets/favicon/black/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="assets/favicon/black/favicon-16x16.png">
  <link rel="manifest" href="assets/favicon/black/site.webmanifest">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
  <link rel="stylesheet" href="assets/vendor/bootstrap-5.3.2-dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css" />
  <link rel="stylesheet" href="assets/css/search-engine.css">
  <link rel="stylesheet" href="assets/css/theme-switch.css">
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="stylesheet" href="assets/css/login.css">

  <title><?= $_SESSION['page-title'] ?></title>

</head>

<body>
  <div class="p-4 fixed-top">
    <nav class="navbar navbar-expand-lg bg-body-tertiary rounded-4 shadow-lg border border-light-subtle px-5">
      <div class="container-fluid">
        <a class="navbar-brand" href="index.php"><img src="assets/favicon/black/android-chrome-512x512.png" width="40"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav align-items-center me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="index.php">Anasayfa</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              <i class="uil uil-user fs-3"></i>
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="index.php?page=login"><i class="uil uil-chat-bubble-user"></i> Giriş Yap</a></li>
                <li><a class="dropdown-item" href="index.php?page=singup"><i class="uil uil-user-plus"></i> Kayıt Ol</a></li>
                <li>
                  <hr class="dropdown-divider">
                </li>
                <li><a class="dropdown-item" href="#"><i class="uil uil-user-times"></i> Çıkış Yap</a></li>
              </ul>
            </li>
            <li class="nav-item">
            </li>
          </ul>
          <div class="input-box">
            <input type="text" placeholder="Ara..." />
            <span class="search">
              <i class="uil uil-search search-icon"></i>
            </span>
            <i class="uil uil-times close-icon"></i>
          </div>
          <label class="switch">
            <input id = "sw_input" class="switch__input" type="checkbox" role="switch" onchange="changeColor()">
            <svg class="switch__icon switch__icon--light" viewBox="0 0 12 12" width="12px" height="8px" aria-hidden="true">
              <g fill="none" stroke="#fff" stroke-width="1" stroke-linecap="round">
                <circle cx="6" cy="6" r="2" />
                <g stroke-dasharray="1.5 1.5">
                  <polyline points="6 10,6 11.5" transform="rotate(0,6,6)" />
                  <polyline points="6 10,6 11.5" transform="rotate(45,6,6)" />
                  <polyline points="6 10,6 11.5" transform="rotate(90,6,6)" />
                  <polyline points="6 10,6 11.5" transform="rotate(135,6,6)" />
                  <polyline points="6 10,6 11.5" transform="rotate(180,6,6)" />
                  <polyline points="6 10,6 11.5" transform="rotate(225,6,6)" />
                  <polyline points="6 10,6 11.5" transform="rotate(270,6,6)" />
                  <polyline points="6 10,6 11.5" transform="rotate(315,6,6)" />
                </g>
              </g>
            </svg>
            <svg class="switch__icon switch__icon--dark" viewBox="0 0 12 12" width="12px" height="12px" aria-hidden="true">
              <g fill="none" stroke="#fff" stroke-width="1" stroke-linejoin="round" transform="rotate(-45,6,6)">
                <path d="m9,10c-2.209,0-4-1.791-4-4s1.791-4,4-4c.304,0,.598.041.883.105-.995-.992-2.367-1.605-3.883-1.605C2.962.5.5,2.962.5,6s2.462,5.5,5.5,5.5c1.516,0,2.888-.613,3.883-1.605-.285.064-.578.105-.883.105Z" />
              </g>
            </svg>
            <span class="switch__sr">Dark Mode</span>
          </label>
        </div>
      </div>
    </nav>
  </div>
  <header>
  </header>
  <main>
    <?php 
    if (isset($page)){
    if ($page == "login") include "login.html";
    elseif ($page == "singup") include "singup.html";
    else include "home-page.html";
  }
  else include "home-page.html";
        ?>
  </main>

  <div class="preloader">
    <div class="spinner"></div>
  </div>
  <footer class="bg-light p-0 m-0 fixed-bottom align-items-center pt-3">
    <p><?= $_SESSION['page-title'] ?> &copy; Tüm hakları saklıdır.</p>
  </footer>
  <script src="assets/vendor/bootstrap-5.3.2-dist/js/bootstrap.bundle.js"></script>
  <script src="assets/vendor/jquery-3.7.1/jquery-3.7.1.min.js"></script>
  <script src="assets/js/script.js"></script>
</body>

</html>