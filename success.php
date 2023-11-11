<?php
    $IPATH = $_SERVER['DOCUMENT_ROOT'] . '/assets/php/';
    include $IPATH . 'config.php';
    ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <?php
    $IPATH = $_SERVER['DOCUMENT_ROOT'] . '/assets/php/';
    include $IPATH . 'global-head.php';
    ?>
    <title><?php echo $lang['success_title'] ?> | Slavic Media</title>
  </head>
  <body id="success" class="noindex">
    <?php
    $IPATH = $_SERVER['DOCUMENT_ROOT'] . '/assets/php/';
    include $IPATH . 'global-nav-bar.php';
    ?>
    <meta name="robots" content="noindex" />
    <meta name="googlebot" content="noindex" />
    <main>
      <article class="wrapper-narrow flex-center">
        <div class="pathname-container"></div>
        <div class="pathname-container"></div>
        <div class="lottie">
          <dotlottie-player
            src="/assets/lottie/success.lottie"
            background="transparent"
            speed="1"
            autoplay
          ></dotlottie-player>
        </div>
        <br />
        <h1>
          <?php echo $lang['asset_179'] ?>
        </h1>
        <a class="cta" href="/">
          <?php echo $lang['asset_180'] ?>
        </a>
      </article>
      <div class="pathname-container"></div>
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
