<?php
error_reporting(E_ALL & ~E_NOTICE);
session_start();
?>
<!DOCTYPE html>
<html>
  <head>

    <meta charset="utf-8">
    <title>Portfolio Melanie</title>
    <meta name="description" content="Portfolio Melanie S.">

    <link rel="stylesheet" type="text/css" href="<?= WEBROOT ?>view/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="<?= WEBROOT ?>view/css/style.css">

    <link href="https://fonts.googleapis.com/css?family=Press+Start+2P" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Coustard" rel="stylesheet">

    <script src="https://unpkg.com/vue@2.0.3/dist/vue.js"></script>   <!-- CDN vue.js -->
    <script src="<?= WEBROOT ?>view/js/vue.js"></script>              <!-- lien vue.js -->

  </head>
  <body>
    <?php
      require 'controller/class/Autoloader.php';
      Autoloader::register();
     ?>
    <header>
        <div class="container">

          <div class="row">

            <div class="col-md-6 col-xs-6">
                <img src="<?= WEBROOT ?>view/images/Logo.jpg" alt="Logo">
            </div>

            <div class="col-md-6 col-xs-6">
              <h1>Web developer</h1>
              <h2><span>Serralheiro</span> Melanie (21years)</h2>
              <p>(Pony Bleu)</p>
            </div>

          </div>
          <div class="row">
            <nav>
              <ul>

                <div class="col-md-3 col-xs-3">
                  <li><a href="<?= WEBROOT ?>home">home</a></li>
                </div>

                <div class="col-md-3 col-xs-3">
                  <li><a href="<?= WEBROOT ?>portfolio">portfolio</a></li>
                </div>

                <div class="col-md-3 col-xs-3">
                  <li><a href="<?= WEBROOT ?>contact">contact</a></li>
                </div>

                <div class="col-md-3 col-xs-3">
                  <li><a href="<?= WEBROOT ?>link">link</a></li>
                </div>

              </ul>
            </nav>
          </div>

        </div>
    </header>

    <main>
      <?php
      include ($page);
      ?>
    </main>

    <footer>
        <button type="button" name="button"><a href="#">CV</a></button>
        <button type="button" name="button">UP</button>
    </footer>
    <?php
        session_unset();
        session_destroy();
    ?>
  </body>
</html>
