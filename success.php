<!DOCTYPE html>
<html lang="en">
  <head>
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"
    />
    <?php
  $IPATH = $_SERVER['DOCUMENT_ROOT'] . '/assets/components/';
  include $IPATH . 'head.php';
  ?>
    <title>Form submitted successfully! | Slavic Media</title>
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
        <h1>Form submitted successfully!</h1>
        <a class="cta" href="/" role="link">
          Return to the homepage<i class="fa-solid fa-arrow-right"></i>
        </a>
      </article>
      <div class="pathname-container" role="separator" aria-hidden="true"></div>
    </main>
    <!-- FOOTER START -->
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
    <!-- FOOTER END -->
  </body>
</html>
