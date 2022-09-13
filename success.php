<!DOCTYPE html>
<html lang="en">
  <head>
      <meta charset="UTF-8">
      <meta name="description" content="Form Submission Success!">
      <meta name="keywords" content="success, form submission">
      <meta name="author" content="Adam Sochorec">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Success | Adam Sochorec</title>
      <?php $IPATH = $_SERVER["DOCUMENT_ROOT"]."/assets/php/"; include($IPATH."head-links.php"); ?>
  </head>
  <body>
      <main>
          <hr class="hide">
          <article class="wrapper narrow">
              <section class="flex-center">
                  <lottie-player class="success-lottie" src="/json/success4.json" background="transparent" speed="1" autoplay></lottie-player>           
              </section>
              <br>
              <h1 class="v2">Form submitted successfully!</h2>
              <br>
              <section class="flex-center">
                  <div class="inputBox">
                      <a href="./about"><div id="btn">go back</div></a>
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