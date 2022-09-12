<!DOCTYPE html>
<html lang="en">
  <head>
      <meta charset="UTF-8">
      <meta name="description" content="">
      <meta name="keywords" content="Portfolio, Works, Photography, Photos, 3D, 3D scans, Animations, Art">
      <meta name="author" content="Adam Sochorec">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Works</title>
      <?php $IPATH = $_SERVER["DOCUMENT_ROOT"]."/assets/php/"; include($IPATH."head-links.php"); ?>
  </head>
  <body>
      <!-- HEADER START -->
      <header>
        <?php $IPATH = $_SERVER["DOCUMENT_ROOT"]."/assets/php/"; include($IPATH."header-nav.php"); ?>
      </header>    
      <!-- HEADER END -->
      <main class="works">
            <article class="wrapper">
              <section>
                <img src="/img/photos/1.webp">
                <img src="/img/photos/2.webp">
                <img src="/img/photos/3.webp">
                <img src="/img/photos/4.webp">
                <img src="/img/photos/5.webp">
                <img src="/img/photos/6.webp">
                <img src="/img/photos/7.webp">
                <img src="/img/photos/8.webp">
                <img src="/img/photos/9.webp">
                <img src="/img/photos/10.webp">
                <img src="/img/photos/11.webp">
              </section>
              <hr>
            </article>          
      </main>
      <!-- FOOTER START -->
      <footer>
        <?php $IPATH = $_SERVER["DOCUMENT_ROOT"]."/assets/php/"; include($IPATH."footer.php"); ?>
      </footer>
      <!-- FOOTER END -->
      <aside>
        <!-- Scroll status -->
      <?php $IPATH = $_SERVER["DOCUMENT_ROOT"]."/assets/php/"; include($IPATH."scroll-status.php"); ?>
      </aside>
  </body>
</html>