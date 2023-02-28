<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>File Transfer</title>
    <?php
    $IPATH = $_SERVER['DOCUMENT_ROOT'] . '/assets/php/';
    include $IPATH . 'global-head.php';
    ?>
    <meta name="robots" content="noindex" />
    <meta name="googlebot" content="noindex" />
  </head>
  <body id="transfer">
    <!-- HEADER START -->
    <?php
     $IPATH = $_SERVER['DOCUMENT_ROOT'] . '/assets/php/';
     include $IPATH . 'global-nav-bar.php';
     ?>
    <!-- HEADER END -->
    <main>
      <article class="wrapper-narrow flex-center">
        <?php
        $allowed_ids = array("test.zip");
        $id = $_GET["id"];
        ?>

        <dotlottie-player
          src="/img/lottie/track.lottie"
          background="transparent"
          speed="1"
          autoplay
          loop
        ></dotlottie-player>
        <h1>Adam's Transfer</h1>
        <br />
        <h2>It looks like that you have accessed my files.</h2>
        <br />
        <a href="./files.zip"
          ><section class="btn-area flex-center">
            <div id="btn"></div>
            <div class="btn-shadow"></div>
          </section>
        </a>

        <!-- downloads - url: https://adamsochorec.com/find-my?id=xxx -->
        <?php
          $logFile = 'downloads.txt';
          $id = $_GET['id'];
          $time = date('Y-m-d H:i:s');
      
          // Get the user's geolocation
          $location = "";
          if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
              $location = $_SERVER['HTTP_CLIENT_IP'];
          } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
              $location = $_SERVER['HTTP_X_FORWARDED_FOR'];
          } else {
              $location = $_SERVER['REMOTE_ADDR'];
          }

        // Append the log to the downloads.php file
        $log = "QR code '$id' was scanned at $time from I.P. $location.\n";
        file_put_contents($logFile, $log . file_get_contents($logFile));
        ?>
        <hr />
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
