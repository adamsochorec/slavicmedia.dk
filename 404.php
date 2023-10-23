<?php include 'assets/php/config.php'; ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <?php
    $IPATH = $_SERVER['DOCUMENT_ROOT'] . '/assets/php/';
    include $IPATH . 'global-head.php';
    ?>
    <title>Page Not Found | Slavic Media</title>
    <meta name="robots" content="noindex" />
    <meta name="googlebot" content="noindex" />
  </head>

  <body id="error" class="noindex">
    <?php
    $IPATH = $_SERVER['DOCUMENT_ROOT'] . '/assets/php/';
    include $IPATH . 'global-nav-bar.php';
    ?>
    <main>
      <article class="wrapper-narrow flex-center">
        <div class="pathname-container"></div>
        <div class="lottie reveal">
          <dotlottie-player
            src="/assets/lottie/error.lottie"
            background="transparent"
            speed="0.7"
            loop
            autoplay
          ></dotlottie-player>
        </div>
        <h1 class="reveal">The page you’re looking<br />for can’t be found.</h1>
        <h2 class="reveal">
          <a href="http://slavicmedia.dk/<?php if($_SESSION['lang']=="da"){
            echo '?lang=da"';
          }
          else if($_SESSION['lang']=="en"){
            echo '?lang=en"';
          } ?>">Return to the homepage
            &#8250;
          </a>
        </h2>
      </article>
    </main>
    <!-- LOTTIE PLAYER SCRIPTS START -->
    <script
      type="text/javascript"
      src="https://unpkg.com/@dotlottie/player-component@1.0.0/dist/dotlottie-player.js"
      defer
    ></script>
    <!-- LOTTIE PLAYER SCRIPTS START -->
    <?php
    $IPATH = $_SERVER['DOCUMENT_ROOT'] . '/assets/php/';
    include $IPATH . 'global-footer.php';
    ?>
  </body>
</html>
