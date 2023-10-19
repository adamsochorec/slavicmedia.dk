<?php include 'assets/php/config.php'; ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <?php
    $IPATH = $_SERVER['DOCUMENT_ROOT'] . '/assets/php/';
    include $IPATH . 'global-head.php';
    ?>
    <meta name="description" content="<?php echo $lang['meta_desc'] ?>" />
    <meta name="keywords" content="<?php echo $lang['meta_keywords'] ?>" />
    <title>Slavic Media</title>
  </head>
  <body id="travel-portfolio">
    <!-- HEADER START -->
    <?php
    $IPATH = $_SERVER['DOCUMENT_ROOT'] . '/assets/php/';
    include $IPATH . 'global-nav-bar.php';
    ?>
    <!-- HEADER END -->
    <main>
      <!-- VISUALS START -->

      <article class="wrapper-wide">
        <h1>Travel</h1>
      </article>
      <article id="visuals">
        <div id="visual" class="video-gallery grid-container fifty-fifty">
          <div class="gallery-item reveal">
            <img
              src="/img/cover-samso.jpg"
              alt="<?php echo $lang['samso_desc'] ?>."
            />
            <div class="gallery-item-caption">
              <!--<div>-->
              <h2>
                Samsø
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  id="videoplay"
                  viewBox="0 0 512 512"
                >
                  <path
                    d="M464 256A208 208 0 1 0 48 256a208 208 0 1 0 416 0zM0 256a256 256 0 1 1 512 0A256 256 0 1 1 0 256zM188.3 147.1c7.6-4.2 16.8-4.1 24.3 .5l144 88c7.1 4.4 11.5 12.1 11.5 20.5s-4.4 16.1-11.5 20.5l-144 88c-7.4 4.5-16.7 4.7-24.3 .5s-12.3-12.2-12.3-20.9V168c0-8.7 4.7-16.7 12.3-20.9z"
                  />
                </svg>
              </h2>
              <p><?php echo $lang['samso_desc'] ?>&#8250;</p>
              <!--</div>-->
              <a
                class="vimeo-popup"
                href="https://www.youtube-nocookie.com/embed/VARZU0RyWIo?modestbranding=1"
              ></a>
            </div>
          </div>
          <div class="gallery-item">
            <img
              src="/img/2022-07-26-00855.jpg"
              alt="<?php echo $lang['expeditiondenmark_title'] ?>."
            />
            <div class="gallery-item-caption">
              <!--<div>-->
              <h2>
                <?php echo $lang['expeditiondenmark_title'] ?>
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  id="videoplay"
                  viewBox="0 0 512 512"
                >
                  <path
                    d="M464 256A208 208 0 1 0 48 256a208 208 0 1 0 416 0zM0 256a256 256 0 1 1 512 0A256 256 0 1 1 0 256zM188.3 147.1c7.6-4.2 16.8-4.1 24.3 .5l144 88c7.1 4.4 11.5 12.1 11.5 20.5s-4.4 16.1-11.5 20.5l-144 88c-7.4 4.5-16.7 4.7-24.3 .5s-12.3-12.2-12.3-20.9V168c0-8.7 4.7-16.7 12.3-20.9z"
                  />
                </svg>
              </h2>
              <p><?php echo $lang['expeditiondenmark_desc'] ?></p>
              <!--</div>-->
              <a
                class="vimeo-popup"
                href="https://www.youtube-nocookie.com/embed/3go3v59pfEo?modestbranding=1"
              ></a>
            </div>
          </div>
        </div>
      </article>
      <article class="wrapper-wide">
        <br /><br />
        <h2>Sweden 2023</h2>
      </article>
      <article id="visuals">
        <div class="grid-container photo-grid">
          <div class="h-stretch">
            <img src="/img/2023-08-04-00275.jpg" />
          </div>
          <div class="h-stretch">
            <img src="/img/2023-07-26-00100.jpg" />
          </div>
          <div class="hhh-stretch reveal">
            <img src="/img/2023-07-26-00105.jpg" />
          </div>
          <div class="h-stretch reveal">
            <img src="/img/2023-07-27-00147.jpg" />
          </div>
          <div class="h-stretch reveal">
            <img src="/img/2023-08-06-00304.jpg" />
          </div>
        </div>
      </article>
      <article class="wrapper-wide">
        <h2 class="reveal">Lapland 2022</h2>
      </article>
      <article id="visuals">
        <div class="grid-container photo-grid">
          <div class="hhh-stretch reveal">
            <img src="/img/2022-12-06-01131.jpg" />
          </div>
          <div class="h-stretch reveal">
            <img src="/img/2022-12-06-01136.jpg" />
          </div>
          <div class="h-stretch reveal">
            <img src="/img/2022-12-06-01148.jpg" />
          </div>

          <div class="h-stretch reveal">
            <img src="/img/2022-12-07-01162.jpg" />
          </div>
          <div class="h-stretch reveal">
            <img src="/img/2022-12-07-01167.jpg" />
          </div>

          <div class="h-stretch reveal">
            <img src="/img/2022-12-07-01170.jpg" />
          </div>
          <div class="h-stretch reveal">
            <img src="/img/2022-12-08-01181.jpg" />
          </div>
        </div>
      </article>
      <article class="wrapper-wide">
        <h2 class="reveal">Åland 2022</h2>
      </article>
      <article id="visuals">
        <div class="grid-container photo-grid">
          <div class="h-stretch reveal">
            <iframe
              src="https://www.youtube-nocookie.com/embed/RYr5MRm1yB8?modestbranding=1"
            ></iframe>
          </div>
          <div class="h-stretch reveal">
            <img src="/img/2022-10-15-00970.jpg" />
          </div>
          <div class="h-stretch reveal">
            <img src="/img/2022-10-15-00971.jpg" />
          </div>
          <div class="h-stretch reveal">
            <img src="/img/2022-10-16-00979.jpg" />
          </div>
          <div class="h-stretch reveal">
            <img src="/img/2022-10-17-01001.jpg" />
          </div>
          <div class="h-stretch reveal">
            <img src="/img/2022-10-15-00967.jpg" />
          </div>
        </div>
      </article>
      <!-- VISUALS END -->

      <!-- BOOK US START -->
      <!-- BOOK US END -->
    </main>
    <!-- FOOTER START -->
    <?php
    $IPATH = $_SERVER['DOCUMENT_ROOT'] . '/assets/php/';
    include $IPATH . 'global-footer.php';
    ?>
    <!-- FOOTER END -->
  </body>
</html>
