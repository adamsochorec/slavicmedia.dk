<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <?php
    $IPATH = $_SERVER['DOCUMENT_ROOT'] . '/assets/php/';
    include $IPATH . 'global-head.php';
    ?>
    <meta name="robots" content="noindex" />
    <meta name="googlebot" content="noindex" />
  </head>
  <body id="items">
    <!-- HEADER START -->
    <?php
     $IPATH = $_SERVER['DOCUMENT_ROOT'] . '/assets/php/';
     include $IPATH . 'global-nav-bar.php';
     ?>
    <!-- HEADER END -->
    <main>
      <article class="wrapper-standard">
        <section class="content">
          <section class="flex-center">
            <dotlottie-player
              src="/img/lottie/track.lottie"
              background="transparent"
              speed="1"
              autoplay
              loop
            ></dotlottie-player>
          </section>
          <h1>Adam's property</h1>
          <br />
          <h5>
            If you found my lost item, please <br /><a
              href="/homepage.php#contact"
              >write me</a
            >
            or give me a call <a href="+45 50 10 47 76">+45 50 10 47 76</a>!
            <br /><br />Thanks!
          </h5>
        </section>
      </article>
    </main>
    <script
      src="https://unpkg.com/@dotlottie/player-component@1.0.0/dist/dotlottie-player.js"
      defer
    ></script>
    <!-- FOOTER START -->
    <?php
    $IPATH = $_SERVER['DOCUMENT_ROOT'] . '/assets/php/';
    include $IPATH . 'global-footer.php';
    ?>
    <!-- FOOTER END -->
  </body>
</html>
