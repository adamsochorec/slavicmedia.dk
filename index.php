<?php include 'assets/php/config.php'; ?>
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
              poster="/img/showreel.png"
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
        <br id="<?php echo $lang['asset_101'] ?>" >

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
          class="video-gallery features-grid"
          aria-label="Services Features Overview"
        >
          <a
            href="/services"
            class="gallery-item reveal"
            aria-label="Huset Fundament 2023"
          >
            <img
              src="/img/2023-09-09-10524.jpg"
              alt="<?php echo $lang['asset_40'] ?>."
            />
            <div class="gallery-item-caption">
              <h3><?php echo $lang['asset_110'] ?></h3>
            </div>
          </a>
          <a href="/services" class="gallery-item reveal">
            <img
              src="/img/2021-04-25-00693.jpg"
              class="north-cascades-img"
              alt="<?php echo $lang['asset_47'] ?>."
            />
            <div class="gallery-item-caption">
              <h3><?php echo $lang['asset_107'] ?></h3>
            </div>
          </a>
          <a href="/services" class="gallery-item reveal">
            <img
              src="/img/2022-12-08-01181.jpg"
              alt="<?php echo $lang['asset_152'] ?>."
            />
            <div class="gallery-item-caption">
              <h3>
                <h3><?php echo $lang['asset_85'] ?></h3>
              </h3>
            </div>
          </a>
          <a href="/services" class="gallery-item reveal">
            <img
              src="/img/cover-husetfundament.jpg"
              alt="<?php echo $lang['asset_50'] ?>."
            />
            <div class="gallery-item-caption">
              <h3><?php echo $lang['asset_184'] ?></h3>
            </div>
          </a>

          <a href="/services" class="gallery-item reveal">
            <img
              src="/img/cover-crowdfunding.jpg"
              alt="<?php echo $lang['asset_38'] ?>."
            />
            <div class="gallery-item-caption">
              <h3><?php echo $lang['asset_187'] ?></h3>
            </div>
          </a>
        </article>
        <hr class="semi" role="separator" />

        <section class="flex-center">
          <div class="reveal">
            <a href="/services" class="cta">
              <?php echo $lang['asset_101'] ?>
            </a>
          </div>
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
        <br>
        <?php
    $IPATH = $_SERVER['DOCUMENT_ROOT'] . '/assets/php/';
    include $IPATH . 'swiper-reviews.php';
    ?>
        <div class="flex-center reveal">
          <a
            target="_blank"
            rel="noopener noreferrer"
            href="https://g.page/r/CRTkzopg3plWEB0/review"
            class="cta"
          >
            <?php echo $lang['asset_31'] ?>
          </a>
        </div>
      </article>
      <!-- REVIEWS END -->
      <hr class="semi" id="team" />
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
            poster="/img/showreel-ourteam.png"
          ></video>
          <article class="wrapper-standard">
            <h3 class="reveal"><?php echo $lang['asset_18'] ?></h3>
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
      <article id="team" class="wrapper-standard">
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
          <article class="wrapper-standard" id="clients">
            <h3 class="reveal">
              <?php echo $lang['asset_36'] ?>
            </h3>
            <?php
            $IPATH = $_SERVER['DOCUMENT_ROOT'] . '/assets/php/';
            include $IPATH . 'clients.php';
            ?>
          </article>
          <!-- CTA START -->
          <hr class="semi" />
          <div class="grid-container fifty-fifty">
            <div class="grid-item reveal">
              <a
                target="_blank"
                href="https://clients.slavicmedia.dk"
                class="cta"
              >
                <?php echo $lang['asset_191'] ?>
              </a>
            </div>
            <div class="grid-item reveal">
              <a href="/press" class="cta cta2">
                <?php echo $lang['asset_75'] ?>
              </a>
            </div>
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
