<?php
    $IPATH = $_SERVER['DOCUMENT_ROOT'] . '/assets/php/';
    include $IPATH . 'config.php';
?>
<!DOCTYPE html>
<html lang="<?php echo $_SESSION['lang'] ?>">
  <head>
    <?php
    $IPATH = $_SERVER['DOCUMENT_ROOT'] . '/assets/php/';
    include $IPATH . 'global-head.php';
    ?>
    <meta name="description" content="<?php echo $lang['asset_41'] ?>" />
    <meta name="keywords" content="<?php echo $lang['asset_42'] ?>" />
    <title>Slavic Media</title>
  </head>
  <body id="homepage">
    <!-- HEADER START -->
    <?php
    $IPATH = $_SERVER['DOCUMENT_ROOT'] . '/assets/php/';
    include $IPATH . 'global-nav-bar.php';
    ?>

    <!-- HEADER END -->
    <main>
      <!-- VISUALS START -->
      <article id="visuals" role="region" aria-label="Visuals">
        <!-- INTRO VIDEO START -->
        <section class="showcase">
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
            ></video>
          </div>

          <a href="/#<?php echo $lang['asset_101'] ?>" class="explore reveal">
            <?php
              $IPATH = $_SERVER['DOCUMENT_ROOT'] . '/assets/php/';
              include $IPATH . 'global-scroll.php';
            ?>
          </a>
        </section>
        <!-- INTRO VIDEO END -->
      </article>
      <!-- VISUALS END -->
      <!-- COMPANY CAPTIONS START -->
      <article class="wrapper-wide" id="company-intro">
        <hr class="semi" id="<?php echo $lang['asset_101'] ?>" />

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

        <div class="grid-container features-grid">
          <div class="grid-item reveal">
            <img class="feature" src="/img/camera.png" />
            <h4>Quality standards</h4>
          </div>
          <div class="grid-item reveal">
            <img class="feature" src="/img/studio.png" />
            <h4>Studio</h4>
          </div>
          <div class="grid-item reveal">
            <img class="feature" src="/img/edit.png" />
            <h4>Extensive post-production</h4>
          </div>
          <div class="grid-item reveal">
            <img class="feature" src="/img/drone.png" />
            <h4>Aerial shooting</h4>
          </div>
          <div class="grid-item reveal">
            <img class="feature" src="/img/design.png" />
            <h4>Graphic</h4>
          </div>

          <div class="grid-item reveal">
            <img class="feature" src="/img/flexibility.png" />
            <h4>Animation</h4>
          </div>
        </div>
        <hr class="semi" role="separator" />

        <section class="flex-center">
          <div class="reveal">
            <a href="/services" class="cta">
              <?php echo $lang['asset_108'] ?>
            </a>
          </div>
        </section>
        <!-- FEATURES END 
        <div
          class="grid-container gallery reveal"
          id="services"
          role="region"
          aria-label="Services Gallery"
        >
          <div class="reveal">
            <a class="gallery-item" href="/photo">
              <div
                class="grid-item"
                id="first-product"
                role="region"
                aria-label="<?php echo $lang['asset_11'] ?>"
              >
                <div class="inner-wrapper flex-center">
                  <h3>
                    <?php echo $lang['asset_11'] ?>
                  </h3>
                  <lottie-player
                    id="photoLottie"
                    src="/assets/lottie/photo.json"
                    background="transparent"
                    speed="1"
                    aria-label="Photo Lottie Animation"
                    role="img"
                    aria-describedby="photoLottieDescription"
                  ></lottie-player>
                  <p>
                    <b><?php echo $lang['asset_12'] ?>.</b>
                  </p>
                </div>
              </div>
            </a>
          </div>
          <div class="reveal">
            <a href="/video">
              <div
                class="grid-item"
                id="second-product"
                role="region"
                aria-label="<?php echo $lang['asset_13'] ?>"
              >
                <div class="inner-wrapper flex-center">
                  <h3>
                    <?php echo $lang['asset_13'] ?>
                  </h3>
                  <lottie-player
                    id="videoLottie"
                    src="/assets/lottie/video.json"
                    background="transparent"
                    speed="1"
                    aria-label="Video Lottie Animation"
                    role="img"
                    aria-describedby="videoLottieDescription"
                  ></lottie-player>

                  <p><?php echo $lang['asset_14'] ?>.</p>
                </div>
              </div>
            </a>
          </div>
        </div>-->
        <hr class="reveal" role="separator" />

        <div class="grid-container fifty-fifty caption-container">
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

        <!-- SERVICES END -->
        <hr class="semi" id="ourteam" />
      </article>
      <!-- COMPANY CAPTIONS END -->

      <!-- OUR TEAM START -->
      <!-- OUR TEAM INTRO SECTION START -->
      <article
        class="team-container reveal"
        role="region"
        aria-label="Our Team"
      >
        <div class="intro-section flex-center">
          <div class="filter"></div>
          <video
            id="heroVideo"
            src="/img/showreel-ourteam.mp4"
            loop="true"
            autoplay="autoplay"
            muted
            preload="auto"
            playsinline
            class="video-offload filter"
            aria-label="Our Team Video"
            role="video"
            aria-describedby="Our Team cover video"
          ></video>
          <article class="wrapper-standard">
            <h2 class="reveal"><?php echo $lang['asset_18'] ?></h2>
            <button id="playPauseButton" class="play">
              <i id="playControl" class="fa-regular fa-circle-play fa-xl"></i>
              <i id="pauseControl" class="fa-regular fa-circle-pause fa-xl"></i>
            </button>
            <p class="profile-info reveal"><?php echo $lang['asset_19'] ?>.</p>
            <p class="reveal">
              <?php echo $lang['asset_20'] ?>
            </p>
            <p class="reveal"><?php echo $lang['asset_21'] ?></p>
          </article>
        </div>
      </article>
      <!-- OUR TEAM INTRO SECTION END -->
      <article id="ourteam" class="wrapper-standard">
        <hr class="semi" role="separator" />
        <!-- TEAM SECTION START -->
        <section class="grid-container skills-section">
          <!-- MARCEL SECTION START -->
          <div
            class="grid-item"
            id="marcel"
            role="region"
            aria-label="Marcel's Skills"
          >
            <?php
            $IPATH = $_SERVER['DOCUMENT_ROOT'] . '/assets/php/';
            include $IPATH . 'marcel.php';
            ?>
            <hr class="semi" />

            <!-- MARCEL LANGUAGES START -->
            <div class="reveal">
              <h6><?php echo $lang['asset_25'] ?>:</h6>
              <div class="grid-container fifty-fifty">
                <ul class="languages-legend">
                  <li class="english"><?php echo $lang['asset_155'] ?></li>
                  <li class="danish"><?php echo $lang['asset_35'] ?></li>
                </ul>
                <ul class="languages-legend">
                  <li class="slavic"><?php echo $lang['asset_157'] ?></li>
                </ul>
              </div>
              <div class="skill-bar faded">
                <span data-view-component="true" class="Progress">
                  <span
                    class="english"
                    style="width: 45%"
                    itemprop="keywords"
                    aria-label="English 45"
                    data-view-component="true"
                  ></span>
                  <span
                    class="slavic"
                    style="width: 45%"
                    itemprop="keywords"
                    aria-label="Slovak 45"
                    data-view-component="true"
                  ></span>
                  <span
                    class="danish"
                    style="width: 10%"
                    itemprop="keywords"
                    aria-label="Danish 10"
                    data-view-component="true"
                  ></span>
                </span>
              </div>
            </div>
            <!-- MARCEL LANGUAGES END -->
            <hr class="semi" />
            <!-- MARCEL  RESPONSIBILITES START-->
            <div class="reveal">
              <h6><?php echo $lang['asset_159'] ?>:</h6>
              <div class="grid-container fifty-fifty">
                <ul class="languages-legend">
                  <li class="responsibility-1">
                    <?php echo $lang['asset_160'] ?>
                  </li>
                  <li class="responsibility-3">
                    <?php echo $lang['asset_162'] ?>
                  </li>
                </ul>
                <ul class="languages-legend">
                  <li class="responsibility-2">
                    <?php echo $lang['asset_161'] ?>
                  </li>
                  <li class="responsibility-4">
                    <?php echo $lang['asset_163'] ?>
                  </li>
                </ul>
              </div>
              <div class="skill-bar faded">
                <span data-view-component="true" class="Progress">
                  <span
                    class="responsibility-1"
                    style="width: 50%"
                    itemprop="keywords"
                    aria-label="<?php echo $lang['asset_160'] ?> 50"
                    data-view-component="true"
                  ></span>
                  <span
                    class="responsibility-2"
                    style="width: 30%"
                    itemprop="keywords"
                    aria-label="<?php echo $lang['asset_161'] ?> 30"
                    data-view-component="true"
                  ></span>
                  <span
                    class="responsibility-3"
                    style="width: 10%"
                    itemprop="keywords"
                    aria-label="<?php echo $lang['asset_162'] ?> 10"
                    data-view-component="true"
                  ></span>
                  <span
                    class="responsibility-4"
                    style="width: 10%"
                    itemprop="keywords"
                    aria-label="<?php echo $lang['asset_163'] ?> 10"
                    data-view-component="true"
                  ></span>
                </span>
              </div>
            </div>
          </div>
          <!-- MARCEL LANGUAGES RESPONSIBILITES -->

          <!-- MARCEL SECTION END -->
          <!-- ADAM SECTION START -->
          <div
            class="grid-item"
            id="adam"
            role="region"
            aria-label="Adam's Skills"
          >
            <?php
            $IPATH = $_SERVER['DOCUMENT_ROOT'] . '/assets/php/';
            include $IPATH . 'adam.php';
            ?>
            <hr class="semi" />
            <!-- ADAM LANGUAGES START -->
            <div class="reveal">
              <h6><?php echo $lang['asset_25'] ?>:</h6>
              <div class="grid-container fifty-fifty">
                <ul class="languages-legend">
                  <li class="english"><?php echo $lang['asset_155'] ?></li>
                  <li class="danish"><?php echo $lang['asset_35'] ?></li>
                </ul>
                <ul class="languages-legend">
                  <li class="slavic"><?php echo $lang['asset_156'] ?></li>

                  <li class="swedish"><?php echo $lang['asset_158'] ?></li>
                </ul>
              </div>
              <div class="skill-bar faded">
                <span data-view-component="true" class="Progress">
                  <span
                    class="english"
                    style="width: 45%"
                    itemprop="keywords"
                    aria-label="<?php echo $lang['asset_155'] ?> 45"
                    data-view-component="true"
                  ></span>
                  <span
                    class="slavic"
                    style="width: 25%"
                    itemprop="keywords"
                    aria-label="?php echo $lang['asset_156'] ?> 30"
                    data-view-component="true"
                  ></span>
                  <span
                    class="danish"
                    style="width: 25%"
                    itemprop="keywords"
                    aria-label="<?php echo $lang['asset_35'] ?> 25"
                    data-view-component="true"
                  ></span>
                  <span
                    class="swedish"
                    style="width: 10%"
                    itemprop="keywords"
                    aria-label="<?php echo $lang['asset_158'] ?> 10"
                    data-view-component="true"
                  ></span>
                </span>
              </div>
            </div>
            <hr class="semi" />
            <div class="reveal">
              <h6><?php echo $lang['asset_159'] ?>:</h6>
              <div class="grid-container fifty-fifty">
                <ul class="languages-legend">
                  <li class="responsibility-1">
                    <?php echo $lang['asset_160'] ?>
                  </li>
                  <li class="responsibility-3">
                    <?php echo $lang['asset_166'] ?>
                  </li>
                </ul>
                <ul class="languages-legend">
                  <li class="responsibility-2">
                    <?php echo $lang['asset_161'] ?>
                  </li>
                  <li class="responsibility-4">
                    <?php echo $lang['asset_167'] ?>
                  </li>
                </ul>
              </div>
              <!-- ADAM LANGUAGES END -->
              <!-- ADAM RESPONSIBILITIES START -->
              <div class="skill-bar faded">
                <span data-view-component="true" class="Progress">
                  <span
                    class="responsibility-1"
                    style="width: 10%"
                    itemprop="keywords"
                    aria-label="<?php echo $lang['asset_160'] ?>"
                    data-view-component="true"
                  ></span>
                  <span
                    class="responsibility-2"
                    style="width: 40%"
                    itemprop="keywords"
                    aria-label="<?php echo $lang['asset_161'] ?>"
                    data-view-component="true"
                  ></span>
                  <span
                    class="responsibility-3"
                    style="width: 30%"
                    itemprop="keywords"
                    aria-label="<?php echo $lang['asset_166'] ?>"
                    data-view-component="true"
                  ></span>
                  <span
                    class="responsibility-4"
                    style="width: 30%"
                    itemprop="keywords"
                    aria-label="<?php echo $lang['asset_167'] ?>"
                    data-view-component="true"
                  ></span>
                </span>
              </div>
            </div>
            <!-- ADAM RESPONSIBILITIES START -->
          </div>
          <!-- ADAM SECTION END -->
        </section>
        <!-- TEAM SECTION END -->
        <!-- COLLABORATORS AND CLIENTS START -->
        <section>
          <hr class="semi" role="separator" />
        </section>
      </article>
      <!-- COLLABORATORS AND CLIENTS END -->
      <!-- CTA SECTION START -->
      <section
        class="press-container reveal"
        role="region"
        aria-label="Press Section"
      >
        <div class="intro-section flex-center">
          <div class="filter"></div>
          <article class="wrapper-standard">
            <h3 class="reveal">
              <?php echo $lang['asset_36'] ?>
            </h3>
            <?php
            $IPATH = $_SERVER['DOCUMENT_ROOT'] . '/assets/php/';
            include $IPATH . 'clients.php';
            ?>
          </article>
          <!-- CTA START -->
          <div class="flex-center reveal">
            <a href="/press" class="cta">
              <?php echo $lang['asset_37'] ?>
            </a>
          </div>
          <!-- CTA END -->
        </div>
      </section>
      <!-- CTA SECTION END -->
      <!-- COLLABORATORS AND CLIENTS END -->
      <!-- OUR TEAM END -->
    </main>
    <!-- FOOTER START -->
    <?php
    $IPATH = $_SERVER['DOCUMENT_ROOT'] . '/assets/php/';
    include $IPATH . 'global-footer.php';
    ?>
    <!-- FOOTER END -->
  </body>
</html>
