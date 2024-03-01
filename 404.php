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
  <body id="error" class="noindex" role="document" aria-label="Error page">
    <!-- HEADER START -->
    <?php
      $IPATH = $_SERVER['DOCUMENT_ROOT'] . '/assets/components/';
      include $IPATH . 'nav-bar.php';
      ?>
    <!-- HEADER END -->
    <main role="main" aria-label="Main content">
      <article
        class="wrapper-narrow flex-center reveal"
        role="article"
        aria-labelledby="error-heading"
      >
        <div class="pathname-container" aria-hidden="true"></div>
        <div class="lottie" role="img" aria-label="Animation: Page Not Found">
          <dotlottie-player
            src="/assets/lottie/error.lottie"
            background="transparent"
            speed="0.7"
            loop
            autoplay
            aria-label="Animation player"
            aria-controls="error-heading"
          ></dotlottie-player>
        </div>
        <h1 id="error-heading" aria-describedby="error-description">
          The page you’re looking<br />for can't be found.
        </h1>
        <p id="error-description" aria-hidden="false">
          The page you were trying to reach does not exist. Please return to the
          homepage.
        </p>
        <a
          class="cta"
          href="http://slavicmedia.dk"
          role="link"
          aria-label="Return to the homepage"
          >Return to the homepage<i class="fa-solid fa-arrow-right"></i
        ></a>
      </article>
      <div class="pathname-container" aria-hidden="true"></div>
    </main>
    <!-- FOOTER START -->
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
    <!-- FOOTER END -->
  </body>
</html>
