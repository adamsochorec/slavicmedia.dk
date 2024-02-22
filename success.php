<?php include 'languages/config.php'; ?>
<!DOCTYPE html>
<html lang="<?php echo $_SESSION['lang'] ?>">
  <head>
    <?php
    $IPATH = $_SERVER['DOCUMENT_ROOT'] . '/assets/components/';
    include $IPATH . 'head.php';
    ?>
    <title><?php echo $lang['asset_179'] ?> | Slavic Media</title>
    <meta name="robots" content="noindex" />
    <meta name="googlebot" content="noindex" />
  </head>
  <body id="success" class="noindex">
    <!-- HEADER START -->
    <?php
      $IPATH = $_SERVER['DOCUMENT_ROOT'] . '/assets/components/';
      include $IPATH . 'nav-bar.php';
      ?>
    <!-- HEADER END -->
    <main>
      <article class="wrapper-narrow flex-center">
        <div class="pathname-container"></div>
        <div class="pathname-container"></div>
        <div class="lottie" role="presentation" aria-hidden="true">
          <lottie-player
            src="/assets/lottie/success.json"
            background="transparent"
            speed="1"
            autoplay
          ></lottie-player>
        </div>
        <br />
        <h1>
          <?php echo $lang['asset_179'] ?>
        </h1>
        <a class="cta" href="/" role="link">
          <?php echo $lang['asset_180'] ?><i
            class="fa-solid fa-arrow-right"
          ></i>
        </a>
      </article>
      <div class="pathname-container" role="separator" aria-hidden="true"></div>
    </main>
    <!-- LOTTIE PLAYER SCRIPTS START -->
    <script
      type="text/javascript"
      src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"
    ></script>
    <!-- LOTTIE PLAYER SCRIPTS START -->
    <?php
    $IPATH = $_SERVER['DOCUMENT_ROOT'] . '/assets/components/';
    include $IPATH . 'footer.php';
    ?>
  </body>
</html>
