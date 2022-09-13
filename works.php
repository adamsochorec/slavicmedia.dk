<!DOCTYPE html>
<html lang="en">
  <head>
      <meta charset="UTF-8">
      <meta name="description" content="">
      <meta name="keywords" content="Portfolio, Works, Photography, Photos, 3D, 3D scans, Animations, Art">
      <meta name="author" content="Adam Sochorec">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Works | Adam Sochorec</title>
      <?php $IPATH = $_SERVER["DOCUMENT_ROOT"]."/assets/php/"; include($IPATH."head-links.php"); ?>
  </head>
  <body>
      <!-- HEADER START -->
      <header>
        <?php $IPATH = $_SERVER["DOCUMENT_ROOT"]."/assets/php/"; include($IPATH."header-nav.php"); ?>
      </header>  
      <!-- HEADER END -->
      <!-- SCROLL STATUS START -->
      <aside>
        <?php $IPATH = $_SERVER["DOCUMENT_ROOT"]."/assets/php/"; include($IPATH."scroll-status.php"); ?>
      </aside>
      <!-- SCROLL STATUS END -->
      <main >
            <article class="wrapper">
              <h1 class="v1">Works</h1>
                <img src="/img/photos/1.webp">
                <img src="/img/photos/2.webp">
                <img src="/img/photos/3.webp">
              <hr>        
            </article>  
      </main>
      <!-- FOOTER START -->
      <footer>
        <?php $IPATH = $_SERVER["DOCUMENT_ROOT"]."/assets/php/"; include($IPATH."footer.php"); ?>
      </footer>
      <!-- FOOTER END -->
  </body>
</html>