<?php include 'languages/config.php'; ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <?php
    $IPATH = $_SERVER['DOCUMENT_ROOT'] . '/assets/components/';
    include $IPATH . 'head.php';
    ?>
    <title>Page Not Found | Slavic Media</title>
    <meta name="robots" content="noindex" />
    <meta name="googlebot" content="noindex" />
  </head>

  <body id="error" class="noindex">
    <!-- HEADER START -->
    <?php
    $IPATH = $_SERVER['DOCUMENT_ROOT'] . '/assets/components/';
    include $IPATH . 'nav-bar.php';
    ?>
    <!-- HEADER END -->
    <main>
      <article
        class="wrapper-narrow flex-center reveal"
        role="main"
        aria-labelledby="error-heading"
      >
        <div class="pathname-container" aria-hidden="true"></div>
        <div
          class="lottie"
          role="img"
          aria-label="<?php echo $lang['asset_130'] ?>"
        >
          <dotlottie-player
            src="/assets/lottie/error.lottie"
            background="transparent"
            speed="0.7"
            loop
            autoplay
          ></dotlottie-player>
        </div>
        <h1 id="error-heading">
          <?php echo $lang['asset_21'] ?>
        </h1>
        <a class="cta" href="http://slavicmedia.dk" role="link"
          ><?php echo $lang['asset_180'] ?><i
            class="fa-solid fa-arrow-right"
          ></i
        ></a>
      </article>
      <div class="pathname-container" aria-hidden="true"></div>
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
