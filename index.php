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
      <article id="visuals">
        <!-- INTRO VIDEO START -->
        <section class="showcase">
          <div class="video-container">
            <video src="/img/showreel.mp4" autoplay muted loop></video>
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
      <hr id="<?php echo $lang['asset_101'] ?>" style="opacity: 0" />
      <article class="wrapper-wide" id="company-intro">
        <!-- SERVICES  START -->
        <div class="grid-container fifty-fifty reveal">
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
        <hr style="opacity: 0" />

        <div class="grid-container gallery reveal" id="services">
          <div class="reveal">
            <a class="gallery-item" href="/photo">
              <div class="grid-item" id="first-product">
                <div class="inner-wrapper flex-center">
                  <h3>
                    <?php echo $lang['asset_11'] ?>
                  </h3>
                  <lottie-player
                    id="photoLottie"
                    src="/assets/lottie/photo.json"
                    background="transparent"
                    speed="1"
                  ></lottie-player>
                  <p>
                    <?php echo $lang['asset_12'] ?>
                  </p>
                </div>
              </div>
            </a>
          </div>
          <div class="reveal">
            <a href="/video">
              <div class="grid-item" id="second-product">
                <div class="inner-wrapper flex-center">
                  <h3>
                    <?php echo $lang['asset_13'] ?>
                  </h3>
                  <lottie-player
                    id="videoLottie"
                    src="/assets/lottie/video.json"
                    background="transparent"
                    speed="1"
                  ></lottie-player>
                  <p>
                    <?php echo $lang['asset_14'] ?>
                  </p>
                </div>
              </div>
            </a>
          </div>
          <div class="reveal">
            <a href="/graphic">
              <div class="grid-item" id="third-product">
                <div class="inner-wrapper flex-center">
                  <h3>
                    <?php echo $lang['asset_15'] ?>
                  </h3>
                  <lottie-player
                    id="graphicdesignLottie"
                    src="/assets/lottie/graphicdesign.json"
                    background="transparent"
                    speed="1"
                  ></lottie-player>
                  <p>
                    <?php echo $lang['asset_16'] ?>
                  </p>
                </div>
              </div>
            </a>
          </div>
        </div>
        <hr class="reveal" />

        <div class="grid-container fifty-fifty">
          <div class="grid-item">
            <h2 class="highlited reveal">
              <?php echo $lang['asset_5'] ?>
            </h2>
            <h1 class="reveal">
              <?php echo $lang['asset_6'] ?>
            </h1>
            <br />
            <div class="reveal">
              <a href="/portfolio" class="cta">
                <?php echo $lang['asset_8'] ?>
              </a>
            </div>
          </div>

          <div class="grid-item">
            <p class="reveal">
              <?php echo $lang['asset_7'] ?>
            </p>
          </div>
        </div>

        <!-- SERVICES END -->
        <hr class="reveal" id="ourteam" />
      </article>
      <!-- VISUALS END -->

      <!-- OUR TEAM START -->
      <!-- OUR TEAM INTRO SECTION START -->
      <article class="team-container reveal">
        <div class="intro-section flex-center">
          <div class="filter"></div>
          <article class="wrapper-standard">
            <h3 class="reveal"><?php echo $lang['asset_18'] ?></h3>
            <p class="profile-info reveal"><?php echo $lang['asset_19'] ?>.</p>
            <p class="reveal">
              <?php echo $lang['asset_20'] ?>

              <a
                href="https://www.iba.dk"
                target="_blank"
                rel="noopener noreferrer"
                >IBA</a
              >.
            </p>
            <p class="reveal"><?php echo $lang['asset_21'] ?>.</p>
            <p class="reveal">
              <?php echo $lang['asset_22'] ?>
            </p>
          </article>
        </div>
      </article>
      <!-- OUR TEAM INTRO SECTION END -->
      <article id="ourteam" class="wrapper-standard">
        <hr style="opacity: 0" />
        <!-- TEAM SECTION START -->
        <section class="grid-container skills-section">
          <!-- MARCEL SECTION START -->
          <div class="grid-item" id="marcel">
            <?php
            $IPATH = $_SERVER['DOCUMENT_ROOT'] . '/assets/php/';
            include $IPATH . 'marcel.php';
            ?>
            <div class="reveal">
              <p><?php echo $lang['asset_25'] ?></p>
              <div class="skill-bar faded">
                <div class="skill-bar" data-progress="80"></div>
              </div>
            </div>
            <div class="reveal">
              <p>
                <?php echo $lang['asset_26'] ?>
              </p>
              <div class="skill-bar faded">
                <div class="skill-bar" data-progress="80"></div>
              </div>
            </div>
            <div class="reveal">
              <p><?php echo $lang['asset_27'] ?></p>
              <div class="skill-bar faded">
                <div class="skill-bar" data-progress="85"></div>
              </div>
            </div>
            <div class="reveal">
              <p><?php echo $lang['asset_28'] ?></p>
              <div class="skill-bar faded">
                <div class="skill-bar" data-progress="60"></div>
              </div>
            </div>
            <div class="reveal">
              <p><?php echo $lang['asset_29'] ?></p>
              <div class="skill-bar faded">
                <div class="skill-bar" data-progress="60"></div>
              </div>
            </div>
          </div>
          <!-- MARCEL SECTION END -->
          <!-- ADAM SECTION START -->
          <div class="grid-item" id="adam">
            <?php
    $IPATH = $_SERVER['DOCUMENT_ROOT'] . '/assets/php/';
    include $IPATH . 'adam.php';
    ?><!-- ADAM SKILLS START -->
            <div class="reveal">
              <p><?php echo $lang['asset_25'] ?></p>
              <div class="skill-bar faded">
                <div class="skill-bar" data-progress="80"></div>
              </div>
            </div>
            <div class="reveal">
              <p>
                <?php echo $lang['asset_26'] ?>
              </p>
              <div class="skill-bar faded">
                <div class="skill-bar" data-progress="80"></div>
              </div>
            </div>
            <div class="reveal">
              <p><?php echo $lang['asset_27'] ?></p>
              <div class="skill-bar faded">
                <div class="skill-bar" data-progress="85"></div>
              </div>
            </div>
            <div class="reveal">
              <p><?php echo $lang['asset_28'] ?></p>
              <div class="skill-bar faded">
                <div class="skill-bar" data-progress="60"></div>
              </div>
            </div>
            <div class="reveal">
              <p><?php echo $lang['asset_29'] ?></p>
              <div class="skill-bar faded">
                <div class="skill-bar" data-progress="60"></div>
              </div>
            </div>
          </div>
          <!-- ADAM SECTION END -->
        </section>
        <!-- TEAM SECTION END -->
        <!-- COLLABORATORS AND CLIENTS START -->
        <section>
          <hr style="opacity: 0" />
        </section>
      </article>

      <!-- COLLABORATORS AND CLIENTS END -->
      <!-- CTA SECTION START -->
      <section class="press-container reveal">
        <div class="intro-section flex-center">
          <div class="filter"></div>
          <article class="wrapper-standard">
            <h2 class="reveal">
              <?php echo $lang['asset_36'] ?>
            </h2>
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
    <script
      type="text/javascript"
      src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"
    ></script>
    <script src="https://unpkg.com/@lottiefiles/lottie-interactivity@1.6.2/dist/lottie-interactivity.min.js"></script>
    <?php
    $IPATH = $_SERVER['DOCUMENT_ROOT'] . '/assets/php/';
    include $IPATH . 'global-footer.php';
    ?>
    <!-- FOOTER END -->
  </body>
</html>
