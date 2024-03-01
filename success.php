<!DOCTYPE html>
<html lang="en" aria-label="Main HTML" role="document">
  <head role="presentation" aria-hidden="true">
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"
      aria-label="Stylesheet Link"
      role="link"
    />
    <?php
  $IPATH = $_SERVER['DOCUMENT_ROOT'] . '/assets/components/';
  include $IPATH . 'head.php';
  ?>
    <title aria-label="Page Title">
      Form submitted successfully! | Slavic Media
    </title>
    <meta name="robots" content="noindex" />
    <meta name="googlebot" content="noindex" />
  </head>
  <body id="success" class="noindex" aria-label="Main Body" role="document">
    <!-- HEADER START -->
    <?php
    $IPATH = $_SERVER['DOCUMENT_ROOT'] . '/assets/components/';
    include $IPATH . 'nav-bar.php';
    ?>
    <!-- HEADER END -->
    <main aria-label="Main Content" role="main">
      <article
        class="wrapper-narrow flex-center"
        aria-label="Article"
        role="article"
      >
        <div
          class="pathname-container"
          aria-label="Pathname Container"
          role="presentation"
          aria-hidden="true"
        ></div>
        <div
          class="pathname-container"
          aria-label="Pathname Container"
          role="presentation"
          aria-hidden="true"
        ></div>
        <div class="lottie" role="presentation" aria-hidden="true">
          <lottie-player
            src="/assets/lottie/success.json"
            background="transparent"
            speed="1"
            autoplay
            aria-label="Lottie Player"
            role="img"
          ></lottie-player>
        </div>
        <br />
        <h1 aria-label="Heading">Form submitted successfully!</h1>
        <a
          class="cta"
          href="/"
          role="link"
          aria-label="Return to Homepage Link"
        >
          Return to the homepage<i class="fa-solid fa-arrow-right"></i>
        </a>
      </article>
      <div
        class="pathname-container"
        role="separator"
        aria-hidden="true"
        aria-label="Separator"
      ></div>
    </main>
    <!-- FOOTER START -->
    <!-- LOTTIE PLAYER SCRIPTS START -->
    <script
      type="text/javascript"
      src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"
      aria-label="Lottie Player Script"
      role="presentation"
      aria-hidden="true"
    ></script>
    <!-- LOTTIE PLAYER SCRIPTS START -->
    <?php
   $IPATH = $_SERVER['DOCUMENT_ROOT'] . '/assets/components/';
   include $IPATH . 'footer.php';
   ?>
    <!-- FOOTER END -->
  </body>
</html>
