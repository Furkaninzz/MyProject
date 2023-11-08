<?php
require_once 'main.php';
?>
<!DOCTYPE html>
<html lang="tr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?= $_SESSION['page-title'] ?></title>
  <link rel="apple-touch-icon" sizes="180x180" href="assets/favicon/black/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="assets/images/favicon/black/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="assets/images/favicon/black/favicon-16x16.png">
  <link rel="manifest" href="assets/images/favicon/black/site.webmanifest">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
  <link rel="stylesheet" href="assets/vendor/bootstrap-5.3.2-dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
  <main>
    <header class="px-5 py-4 mb-2">
        <nav class="navbar navbar-expand-lg bg-body-tertiary shadow-lg rounded">
          <div class="container-fluid">
            <a class="navbar-brand" href="index.php">F App</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
              <ul class="navbar-nav">
                <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="#">Home Page</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">About</a>
                </li>
              </ul>
            </div>
          </div>
        </nav>
    </header>
  </main>
  <section class="px-5 py-4 mb-2">
    <p class="shadow-lg rounded py-3 px-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit ullam ipsa laboriosam debitis aperiam laudantium voluptatum fugit suscipit at eum repellendus aspernatur ex, cum et minima temporibus pariatur exercitationem ducimus modi. Accusamus, sapiente? Incidunt ut tenetur alias perferendis quos fuga ratione illo laboriosam nam vel at laborum, aliquam rem consequuntur eligendi minus voluptatem! Magni ab obcaecati eveniet hic, voluptatem cupiditate assumenda inventore fugiat consectetur rem ad iusto aspernatur! Corrupti est sapiente debitis, itaque laudantium, ut voluptatum facere vero ipsa magnam nobis ipsum doloremque. Error amet asperiores cupiditate explicabo. Animi dignissimos nulla dicta, sapiente quisquam quidem totam molestiae voluptates asperiores doloribus.</p>
  </section>

  <section class="px-5 py-4 mb-2">
    <p class="shadow-lg rounded py-3 px-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit ullam ipsa laboriosam debitis aperiam laudantium voluptatum fugit suscipit at eum repellendus aspernatur ex, cum et minima temporibus pariatur exercitationem ducimus modi. Accusamus, sapiente? Incidunt ut tenetur alias perferendis quos fuga ratione illo laboriosam nam vel at laborum, aliquam rem consequuntur eligendi minus voluptatem! Magni ab obcaecati eveniet hic, voluptatem cupiditate assumenda inventore fugiat consectetur rem ad iusto aspernatur! Corrupti est sapiente debitis, itaque laudantium, ut voluptatum facere vero ipsa magnam nobis ipsum doloremque. Error amet asperiores cupiditate explicabo. Animi dignissimos nulla dicta, sapiente quisquam quidem totam molestiae voluptates asperiores doloribus. Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse perferendis enim eligendi, harum fuga quae aliquid voluptatum facilis minima pariatur amet doloribus aliquam laudantium ut cupiditate placeat praesentium sint? Debitis sapiente magnam incidunt, adipisci quibusdam tenetur autem dolore error, voluptas dolores ea! Fugit, repellat iure quidem quae nulla doloribus ipsam?</p>
  </section>

  <footer>

  </footer>
</body>

</html>