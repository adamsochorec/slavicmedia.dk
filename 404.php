<!DOCTYPE html>
<html lang="en">
  <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>404</title>
      <?php $IPATH = $_SERVER["DOCUMENT_ROOT"]."/assets/php/"; include($IPATH."head-links.php"); ?>
  </head>
  <body>
      <!-- HEADER START -->
      <header>
          <?php $IPATH = $_SERVER["DOCUMENT_ROOT"]."/assets/php/"; include($IPATH."header-nav.php"); ?>
        </header>
        <!-- HEADER END -->
      <main>
        <hr class="hide">
        <article class="wrapper narrow">
              <section class="flex-center">
                  <lottie-player class="error-lottie" src="/json/404.json" background="transparent" speed="2" loop autoplay></lottie-player>           
              </section>
              <br>
              <section class="flex-center">
                  <div class="inputBox">
                      <a href="/works"><div id="btn">go home</div></a>
                  </div>
              </section>
          </article>
          <hr>
      </main>
      <!-- FOOTER START -->
      <footer>
          <?php $IPATH = $_SERVER["DOCUMENT_ROOT"]."/assets/php/"; include($IPATH."footer.php"); ?>
      </footer>   
      <!-- FOOTER END -->
  </body>
</html>