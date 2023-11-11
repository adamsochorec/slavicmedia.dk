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
      <article class="wrapper-narrow flex-center reveal" role="main">
        <div class="pathname-container"></div>
        <div class="lottie">
          <dotlottie-player
            src="/assets/lottie/error.lottie"
            background="transparent"
            speed="0.7"
            loop
            autoplay
            role="img"
            aria-label="<?php echo $lang['asset_130'] ?>"
          >
            ></dotlottie-player
          >
        </div>
        <h1>The page you’re looking<br />for can't be found.</h1>
        <a class="cta" href="http://slavicmedia.dk"
          ><?php echo $lang['asset_180'] ?></a
        >
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
