<?php
require_once 'main.php';
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
  <link rel="stylesheet" href="assets/css/style.css">
  <title><?= $_SESSION['page-title'] ?></title>

</head>

<body>
  <div class="p-4 mb-5 fixed-top">
    <nav class="navbar navbar-expand-lg bg-light rounded-4 shadow-lg px-5 justify-content-evenly">
      <a class="navbar-brand" href="index.php"><img src="assets/favicon/black/favicon-32x32.png"></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="#">Anasayfa</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Hakkında</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">İletişim</a>
          </li>
        </ul>
      </div>
      <label class="switch">
        <input class="switch__input" type="checkbox" role="switch">
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
                <path d="m9,10c-2.209,0-4-1.791-4-4s1.791-4,4-4c.304,0,.598.041.883.105-.995-.992-2.367-1.605-3.883-1.605C2.962.5.5,2.962.5,6s2.462,5.5,5.5,5.5c1.516,0,2.888-.613,3.883-1.605-.285.064-.578.105-.883.105Z"/>
            </g>	
        </svg>
        <span class="switch__sr">Dark Mode</span>
    </label>
    </nav>
  </div>
  <header>
  </header>
  <main class="mb-5">
    <section class="px-5 py-4 mb-2 ">
      <p class="shadow-lg rounded-4 py-3 px-2 bg-light">Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit ullam ipsa laboriosam debitis aperiam laudantium voluptatum fugit suscipit at eum repellendus aspernatur ex, cum et minima temporibus pariatur exercitationem ducimus modi. Accusamus, sapiente? Incidunt ut tenetur alias perferendis quos fuga ratione illo laboriosam nam vel at laborum, aliquam rem consequuntur eligendi minus voluptatem! Magni ab obcaecati eveniet hic, voluptatem cupiditate assumenda inventore fugiat consectetur rem ad iusto aspernatur! Corrupti est sapiente debitis, itaque laudantium, ut voluptatum facere vero ipsa magnam nobis ipsum doloremque. Error amet asperiores cupiditate explicabo. Animi dignissimos nulla dicta, sapiente quisquam quidem totam molestiae voluptates asperiores doloribus.</p>
    </section>

    <section class="px-5 py-4 mb-2">
      <p class="shadow-lg rounded-4 py-3 px-2 bg-light">Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit ullam ipsa laboriosam debitis aperiam laudantium voluptatum fugit suscipit at eum repellendus aspernatur ex, cum et minima temporibus pariatur exercitationem ducimus modi. Accusamus, sapiente? Incidunt ut tenetur alias perferendis quos fuga ratione illo laboriosam nam vel at laborum, aliquam rem consequuntur eligendi minus voluptatem! Magni ab obcaecati eveniet hic, voluptatem cupiditate assumenda inventore fugiat consectetur rem ad iusto aspernatur! Corrupti est sapiente debitis, itaque laudantium, ut voluptatum facere vero ipsa magnam nobis ipsum doloremque. Error amet asperiores cupiditate explicabo. Animi dignissimos nulla dicta, sapiente quisquam quidem totam molestiae voluptates asperiores doloribus. Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse perferendis enim eligendi, harum fuga quae aliquid voluptatum facilis minima pariatur amet doloribus aliquam laudantium ut cupiditate placeat praesentium sint? Debitis sapiente magnam incidunt, adipisci quibusdam tenetur autem dolore error, voluptas dolores ea! Fugit, repellat iure quidem quae nulla doloribus ipsam?</p>
    </section>
    <section class="px-5 py-4 mb-2">
      <p class="shadow-lg rounded-4 py-3 px-2 bg-light">Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit ullam ipsa laboriosam debitis aperiam laudantium voluptatum fugit suscipit at eum repellendus aspernatur ex, cum et minima temporibus pariatur exercitationem ducimus modi. Accusamus, sapiente? Incidunt ut tenetur alias perferendis quos fuga ratione illo laboriosam nam vel at laborum, aliquam rem consequuntur eligendi minus voluptatem! Magni ab obcaecati eveniet hic, voluptatem cupiditate assumenda inventore fugiat consectetur rem ad iusto aspernatur! Corrupti est sapiente debitis, itaque laudantium, ut voluptatum facere vero ipsa magnam nobis ipsum doloremque. Error amet asperiores cupiditate explicabo. Animi dignissimos nulla dicta, sapiente quisquam quidem totam molestiae voluptates asperiores doloribus. Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse perferendis enim eligendi, harum fuga quae aliquid voluptatum facilis minima pariatur amet doloribus aliquam laudantium ut cupiditate placeat praesentium sint? Debitis sapiente magnam incidunt, adipisci quibusdam tenetur autem dolore error, voluptas dolores ea! Fugit, repellat iure quidem quae nulla doloribus ipsam?</p>
    </section>


    <footer class="bg-light p-5">
      F App &copy; Tüm hakları saklıdır.
    </footer>
    <script src="assets/vendor/jquery-3.7.1/jquery-3.7.1.min.js"></script>
    <script src="assets/js/script.js"></script>
    <div class="preloader">
      <div class="spinner"></div>
    </div>
</body>

</html>