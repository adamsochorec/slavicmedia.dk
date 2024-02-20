<?php include 'languages/config.php'; ?>
<!DOCTYPE html>
<html lang="<?php echo $_SESSION['lang'] ?>">
  <head>
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"
    />
    <?php
    $IPATH = $_SERVER['DOCUMENT_ROOT'] . '/assets/components/';
    include $IPATH . 'head.php';
    ?>
    <meta name="description" content="<?php echo $lang['asset_10'] ?>" />
    <!-- <meta name="keywords" content="<?php echo $lang['asset_219'] ?>" /> -->
    <title><?php echo $lang['asset_222'] ?> | Slavic Media</title>
  </head>
  <body id="homepage">
    <!-- HEADER START -->
    <?php
    $IPATH = $_SERVER['DOCUMENT_ROOT'] . '/assets/components/';
    include $IPATH . 'nav-bar.php';
    ?>
    <!-- HEADER END -->

    <main>
      <!-- INTRO VIDEO START -->
      <article class="showcase">
        <div class="video-container">
          <video
            src="/img/showreel.mp4"
            loop="true"
            autoplay="autoplay"
            muted
            class="video-offload video-control"
            preload="auto"
            aria-label="Intro Video"
            playsinline
            role="video"
            aria-describedby="Hero video"
            poster="/img/showreel.png"
          ></video>
        </div>
      </article>
      <!-- INTRO VIDEO END -->
      <!-- COMPANY CAPTIONS START -->
      <article class="wrapper-wide" id="company-intro">
        <br />

        <!-- SERVICES START -->
        <div
          class="grid-container fifty-fifty caption-container reveal"
          role="region"
          aria-label="Services"
        >
          <div class="grid-item">
            <h1>
              <?php echo $lang['asset_9'] ?>
            </h1>
          </div>
          <div class="grid-item">
            <p>
              <?php echo $lang['asset_10'] ?>
            </p>
          </div>
        </div>
        <hr class="semi" role="separator" />
        <!-- FEATURES START -->
        <article
          id="visual"
          class="gallery" id="gallery-features"
          aria-label="<?php echo $lang['asset_105'] ?>"
        >
          <a href="/projects" class="gallery-item reveal">
            <img
              src="/img/thumbnail/DSCF9640.jpg"
              title="<?php echo $lang['asset_288'] ?>."
              alt="<?php echo $lang['asset_288'] ?>."
            />
            <div class="gallery-item-caption">
              <i class="fa-solid fa-video bubble"></i>
              <h3>
                <?php echo $lang['asset_13'] ?>
              </h3>
              <p>
                <?php echo $lang['asset_185'] ?>
              </p>
            </div>
          </a>
          <a
            href="/projects#photo"
            class="gallery-item reveal"
            aria-label="Huset Fundament 2023"
          >
            <img
              src="/img/thumbnail/2023-11-30-00006.jpg"
              alt="<?php echo $lang['asset_287'] ?>."
              title="<?php echo $lang['asset_287'] ?>."
            />
            <div class="gallery-item-caption">
              <i class="fa-solid fa-camera bubble"></i>
              <h3>
                <?php echo $lang['asset_11'] ?>
              </h3>
              <p>
                <?php echo $lang['asset_173'] ?>
              </p>
            </div>
          </a>
        </article>
        <section class="flex-center">
          <a class="reveal" href="/services">
            <div class="cta">
              <?php echo $lang['asset_101'] ?><i class="fa-solid fa-arrow-right"></i>
            </div>
          </a>
        </section>
        <!-- FEATURES END -->
        <hr class="reveal" role="separator" />

        <div
          class="grid-container fifty-fifty caption-container"
          id="reviews-caption"
        >
          <div class="grid-item">
            <h2 class="reveal">
              <?php echo $lang['asset_6'] ?>
            </h2>
          </div>
          <div class="grid-item reveal">
            <p>
              <?php echo $lang['asset_7'] ?>
            </p>
          </div>
        </div>
      </article>
      <!-- SERVICES END -->
      <!-- REVIEWS START -->
      <article class="wrapper-wide" id="reviews">
        <hr class="semi" />
        <?php
    $IPATH = $_SERVER['DOCUMENT_ROOT'] . '/assets/components/';
    include $IPATH . 'swiper-reviews.php';
    ?>
        <div class="flex-center reveal">
          <a
            class="cta"
            target="_blank"
            rel="noopener noreferrer nofollow"
            href="https://g.page/r/CRTkzopg3plWEB0/review"
          >
            <?php echo $lang['asset_31'] ?><i class="fa-solid fa-arrow-right"></i>
          </a>
        </div>
      </article>
      <!-- REVIEWS END -->
      <hr class="semi" id="ourteam" />
      <!-- COMPANY CAPTIONS END -->

      <!-- OUR TEAM START -->
      <!-- OUR TEAM INTRO SECTION START -->
      <article
        class="team-container intro-section reveal"
        id="ourteam"
        role="region"
        aria-label="<?php echo $lang['asset_18'] ?>"
      >
        <video
          id="heroVideo"
          src="/img/showreel-ourteam.mp4"
          loop="true"
          autoplay="autoplay"
          muted
          preload="auto"
          playsinline
          class="video-offload filter"
          aria-label="<?php echo $lang['asset_18'] ?> Video"
          role="video"
          aria-describedby="<?php echo $lang['asset_18'] ?> cover video"
          poster="/img/showreel-ourteam.png"
        ></video>
        <article class="wrapper-standard">
          <h2 class="reveal"><?php echo $lang['asset_18'] ?></h2>
          <button id="playPauseButton" class="play">
            <i
              id="playControl"
              title="Play"
              class="fa-regular fa-circle-play fa-xl"
            ></i>
            <i
              id="pauseControl"
              title="Pause"
              class="fa-regular fa-circle-pause fa-xl"
            ></i>
          </button>
          <p class="profile-info reveal"><?php echo $lang['asset_19'] ?>.</p>
          <br />
          <p class="reveal">
            <?php echo $lang['asset_20'] ?>
          </p>
        </article>
      </article>
      <!-- OUR TEAM INTRO SECTION END -->
      <article class="wrapper-wide">
        <hr class="semi" role="separator" />
        <!-- TEAM SECTION START -->

        <?php
    $IPATH = $_SERVER['DOCUMENT_ROOT'] . '/assets/components/';
    include $IPATH . 'swiper-ourteam.php';
    ?>
        <!-- TEAM SECTION END -->
        <!-- COLLABORATORS AND CLIENTS START -->
        <section>
          <hr class="semi" role="separator" />
        </section>
      </article>
      <!-- COLLABORATORS AND CLIENTS END -->
      <article
        class="intro-section flex-center reveal"
        id="forpress"
        role="region"
        aria-label="Press Section"
      >
        <div class="filter"></div>
        <article class="wrapper-wide" id="clients">
          <h3 class="reveal">
            <?php echo $lang['asset_36'] ?>
          </h3>
          <?php
            $IPATH = $_SERVER['DOCUMENT_ROOT'] . '/assets/components/';
            include $IPATH . 'clients.php';
            ?>
        </article>
      
      </article>
      <!-- COLLABORATORS AND CLIENTS END -->
      <!-- OUR TEAM END -->
    </main>
    <!-- FOOTER START -->
    <?php
    $IPATH = $_SERVER['DOCUMENT_ROOT'] . '/assets/components/';
    include $IPATH . 'footer.php';
    ?>
    <script
      src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"
      role="script"
    ></script>
    <script type="text/javascript" src="/assets/index.js" defer></script>
    <script
      type="text/javascript"
      src="/assets/cookies.js"
      defer
      role="script"
    ></script>
    <!-- FOOTER END -->
  </body>
</html>
