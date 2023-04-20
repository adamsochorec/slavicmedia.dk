<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Video Services | Slavic Media</title>
    <?php
    $IPATH = $_SERVER['DOCUMENT_ROOT'] . '/assets/php/';
    include $IPATH . 'global-head.php';
    ?>
  </head>

  <body id="video-services">
    <?php
    $IPATH = $_SERVER['DOCUMENT_ROOT'] . '/assets/php/';
    include $IPATH . 'global-nav-bar.php';
    ?>
    <main>
      <article class="wrapper-wide flex-center">
        <div class="pathname-container"></div>

        <h1>Video services</h1>
        <br />
        <section class="grid-container">
          <section class="grid-item">
            <iframe
              src="https://player.vimeo.com/video/818670329?h=1decec98cc"
              allow="autoplay; fullscreen; picture-in-picture"
              allowfullscreen
              frameborder="0"
            ></iframe>
          </section>
          <section class="grid-item">
            <p>
              Slavic Media is a collaboration between Adam and Marcel, visual
              creators, specializing in creating captivating visual content for
              businesses seeking to enhance their online presence.<br />Our
              shared passion for travelling and self-improvement, combined with
              our Slavic cultural background, brings a unique perspective to our
              work.<br /><br />
              We provide a range of services, including video production,
              photography, and other visual content, all tailored to the
              specific needs of each client.<br /><br />
              We work closely with clients to develop a customized visual
              content strategy, from concept to final delivery.
            </p>
          </section>
        </section>
        <hr />
      </article>
    </main>
    <!-- LOTTIE PLAYER SCRIPTS START -->
    <script
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
