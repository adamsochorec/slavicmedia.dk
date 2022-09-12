<!DOCTYPE html>
<html lang="en">
  <head>
      <meta charset="UTF-8">
      <meta name="description" content="Form Submission Success!">
      <meta name="keywords" content="success, form submission">
      <meta name="author" content="Adam Sochorec">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>About</title>
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
              <h1 class="success-text">Form submitted successfully!</h2>
              <p class="success-text">Thank you for filling out! The form has been submitted successfully. I will reply you soon!</p>
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