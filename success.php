<?php include 'languages/config.php'; ?>
<!DOCTYPE html>
<html lang="<?php echo $_SESSION['lang'] ?>">
  <head>
    <?php
    $IPATH = $_SERVER['DOCUMENT_ROOT'] . '/assets/components/';
    include $IPATH . 'head.php';
    ?>
    <title><?php echo $lang['asset_179'] ?> | Slavic Media</title>
  </head>
  <body id="success" class="noindex">
    <?php
    $IPATH = $_SERVER['DOCUMENT_ROOT'] . '/assets/components/';
    include $IPATH . 'nav-bar.php';
    ?>
    <meta name="robots" content="noindex" />
    <meta name="googlebot" content="noindex" />
    <main>
      <article class="wrapper-narrow flex-center">
        <div class="pathname-container"></div>
        <div class="pathname-container"></div>
        <div class="lottie" role="presentation" aria-hidden="true">
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
        <a class="cta" href="/" role="link">
          <?php echo $lang['asset_180'] ?>
        </a>
      </article>
      <div class="pathname-container" role="separator" aria-hidden="true"></div>
    </main>
    <!-- LOTTIE PLAYER SCRIPTS START -->
    <script
      type="text/javascript"
      src="https://unpkg.com/@dotlottie/player-component@1.0.0/dist/dotlottie-player.js"
      defer
    ></script>
    <!-- LOTTIE PLAYER SCRIPTS START -->
    <?php
    $IPATH = $_SERVER['DOCUMENT_ROOT'] . '/assets/components/';
    include $IPATH . 'footer.php';
    ?>
  </body>
</html>
