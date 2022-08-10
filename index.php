<?php

if ($_GET) {
  $url = explode('/', $_GET['page']);
}

?>
<!doctype html>
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="Grande Conselho Da Ordem DeMolay para o Estado do Ceará">
  <meta name="author" content="Grande Conselho Da Ordem DeMolay para o Estado do Ceará">
  <title>Ordem Demolay Ceará</title>


  <link href="dist/css/bootstrap.min.css" rel="stylesheet">

  <link rel="apple-touch-icon" href="assets/img/favicons/icone.png" sizes="180x180">
  <link rel="icon" href="assets/img/favicons/icone.png" sizes="32x32" type="image/png">
  <link rel="icon" href="assets/img/favicons/icone.png" sizes="16x16" type="image/png">
  <link rel="icon" href="assets/img/favicons/icone.png">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


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
  </style>


  <link href="offcanvas.css" rel="stylesheet">
</head>

<body class="bg-light">

  <!-- navbar -->
  <?php require_once('assets/component/navbar.php') ?>


  <!-- carousel -->
  <?php
  if ($url[0] == 'inicio') {
    require_once('assets/component/carousel.php');
  } else if ($url[0] == '') {
    require_once('assets/component/carousel.php');
  }
   ?>


  <main class="container" style="padding-bottom: 100px;">
    <br>

    <?php

    if (isset($url)) {
      require_once 'pages/' . $url[0] . '.php';
    } else {
      require_once 'pages/inicio.php';
    }

    ?>

  </main>

  <?php require_once('assets/component/footer.php'); ?>

  <script src="dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  <script src="offcanvas.js"></script>
  <script>
    var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
    var tooltipList = tooltipTriggerList.map(function(tooltipTriggerEl) {
      return new bootstrap.Tooltip(tooltipTriggerEl)
    })
  </script>
</body>

</html>