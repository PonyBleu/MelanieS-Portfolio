<!DOCTYPE html>
<html>
  <head>

    <meta charset="utf-8">
    <title>Portfolio Melanie</title>
    <meta name="description" content="Portfolio Melanie S.">

    <link rel="stylesheet" type="text/css" href="view/css/style.css">
    <link rel="stylesheet" type="text/css" href="view/css/bootstrap.min.css">

    <script src="https://unpkg.com/vue@2.0.3/dist/vue.js"></script>   <!-- CDN vue.js -->
    <script src="view/js/vue.js"></script>              <!-- lien vue.js -->

  </head>
  <body>
    <header>
        <div class="container">

          <div class="row">

            <div class="col-md-6 col-xs-6">
                <img src="view/images/Logo.jpg" alt="Logo">
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
                  <li><a href="#">home</a></li>
                </div>

                <div class="col-md-3 col-xs-3">
                  <li><a href="#">portfolio</a></li>
                </div>

                <div class="col-md-3 col-xs-3">
                  <li><a href="#">contact</a></li>
                </div>

                <div class="col-md-3 col-xs-3">
                  <li><a href="#">link</a></li>
                </div>

              </ul>
            </nav>
          </div>

        </div>
    </header>

    <?php
    include ($page);
    ?>

    <footer>

    </footer>
  </body>
</html>
