<?php include 'languages/config.php'; ?>
<!DOCTYPE html>
<html lang="<?php echo $_SESSION['lang'] ?>">
  <head>
    <?php
    $IPATH = $_SERVER['DOCUMENT_ROOT'] . '/assets/components/';
    include $IPATH . 'head.php';
    ?>
    <meta name="description" content="<?php echo $lang['asset_223'] ?>" />
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
              $IPATH = $_SERVER['DOCUMENT_ROOT'] . '/assets/components/';
              include $IPATH . 'scroll.php';
            ?>
          </a>
        </section>
        <!-- INTRO VIDEO END -->
      </article>
      <!-- VISUALS END -->
      <!-- COMPANY CAPTIONS START -->
      <article class="wrapper-wide" id="company-intro">
        <br id="<?php echo $lang['asset_101'] ?>" />

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
            href="/projects#portrait"
            class="gallery-item reveal"
            aria-label="Huset Fundament 2023"
          >
            <img
              src="/img/2023-09-09-10524.jpg"
              title="<?php echo $lang['asset_40'] ?>."
              alt="<?php echo $lang['asset_40'] ?>."
            />
            <div class="gallery-item-caption">
              <h3><?php echo $lang['asset_110'] ?></h3>
            </div>
          </a>
          <a href="/projects#stills" class="gallery-item reveal">
            <img
              src="/img/2021-04-25-00693.jpg"
              class="north-cascades-img"
              title="<?php echo $lang['asset_47'] ?>."
              alt="<?php echo $lang['asset_47'] ?>."
            />
            <div class="gallery-item-caption">
              <h3><?php echo $lang['asset_107'] ?></h3>
            </div>
          </a>
          <a href="/portrait#travel" class="gallery-item reveal">
            <img
              src="/img/2022-12-08-01181.jpg"
              title="<?php echo $lang['asset_152'] ?>."
              alt="<?php echo $lang['asset_152'] ?>."
            />
            <div class="gallery-item-caption">
              <h3>
                <h3><?php echo $lang['asset_85'] ?></h3>
              </h3>
            </div>
          </a>
          <a href="/projects#showreel" class="gallery-item reveal">
            <img
              src="/img/cover-husetfundament.jpg"
              title="<?php echo $lang['asset_50'] ?>."
              alt="<?php echo $lang['asset_50'] ?>."
            />
            <div class="gallery-item-caption">
              <h3><?php echo $lang['asset_184'] ?></h3>
            </div>
          </a>

          <a href="/projects#interview" class="gallery-item reveal">
            <img
              src="/img/cover-crowdfunding.jpg"
              title="<?php echo $lang['asset_38'] ?>."
              alt="<?php echo $lang['asset_38'] ?>."
            />
            <div class="gallery-item-caption">
              <h3><?php echo $lang['asset_187'] ?></h3>
            </div>
          </a>
        </article>
        <section class="flex-center">
          <a class="reveal" href="/services">
            <div class="cta">
              <?php echo $lang['asset_101'] ?>
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
        <a
          class="flex-center reveal"
          target="_blank"
          rel="noopener noreferrer nofollow"
          href="https://g.page/r/CRTkzopg3plWEB0/review"
        >
          <div class="cta">
            <?php echo $lang['asset_31'] ?>
          </div>
        </a>
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
            <div id="marcel">
              <div class="reveal">
                <svg
                  class="note flag"
                  version="1.1"
                  id="Layer_1"
                  xmlns="http://www.w3.org/2000/svg"
                  xmlns:xlink="http://www.w3.org/1999/xlink"
                  x="0px"
                  y="0px"
                  viewBox="0 0 1093 1092"
                  style="enable-background: new 0 0 1093 1092"
                  xml:space="preserve"
                >
                  <style type="text/css">
                    .st0 {
                      fill: #fefefe;
                    }
                    .st1 {
                      fill: #ed1c24;
                    }
                    .st2 {
                      fill: #0a4ea1;
                    }
                  </style>
                  <g>
                    <path
                      class="st0"
                      d="M0.1,347c0-114.3,0-228.6-0.1-342.8C0,1,0.4,0,4,0c361.7,0.1,723.3,0.1,1085,0c3.6,0,4,1,4,4.2
                 c-0.1,114.3-0.1,228.6-0.1,342.8c-97.6,0-195.2,0-292.8-0.1c-4.1,0-5.3,0.8-5.1,5.1c1,31.8,2.2,63.6,2.4,95.4
                 c0.3,38.1,2.4,76.2-2.3,114.3c-5.8,47.1-20.9,90.9-45.4,131.5c-11.6,19.1-25.4,36.6-39.8,53.6c-0.4,0.3-0.8,0.6-1.2,0.9
                 c-46,50.3-102.1,86.5-162.8,116.3c-4.1,2-7.8,2-11.9,0c-40.1-19.7-78.4-42.4-113.5-70.4c-18-14.3-34.6-30.2-50.4-46.9
                 c-9.6-11.5-19.2-22.9-27.8-35.2c-41.3-59.1-60.4-125-60.3-196.7c0.1-54,0.7-107.9,3-161.8c0.2-5.2-1.2-6.1-6.1-6.1
                 C186,347.1,93,347,0.1,347z M731.3,688.1c0.8-1.1,1.6-2.1,2.3-3.2c31.9-51.9,46.3-108.6,46.4-169.2c0.1-47.8-0.7-95.6-2.1-143.4
                 c-1.2-40-3.1-79.9-5.9-119.8c-0.3-3.5-0.6-5.6-5.2-5.5c-151.1,0.1-302.2,0.1-453.4,0c-4.1,0-4.9,1.4-5.2,5
                 c-2.2,31.1-3.9,62.2-5,93.3c-2.1,56.4-3,112.9-3.1,169.4c0,36.9,5.1,73,17.1,108c7.9,23.1,18,45.1,31.6,65.4c0.5,1,1,2.1,1.6,3.1
                 c15.4,23.5,33.4,44.8,53.7,64.2c39.3,37.4,84.7,65.9,133,90.1c2.5,1.2,4.2,0.8,6.4-0.3c15.6-7.8,31-16.1,46-25.1
                 c42.6-25.4,81.4-55.4,113.7-93.3C713.4,714.6,723.3,702,731.3,688.1z"
                    />
                    <path
                      class="st1"
                      d="M370.2,746.8c15.8,16.7,32.4,32.6,50.4,46.9c35.1,27.9,73.4,50.6,113.5,70.4c4.1,2,7.8,2,11.9,0
                 c60.6-29.9,116.8-66,162.8-116.3c0.3-0.4,0.8-0.6,1.2-0.9c2.2,0,4.3,0.1,6.5,0.1c125.5,0,251.1,0,376.6,0
                 c0,113.6,0,227.3,0.1,340.9c0,3.4-0.7,4.1-4.1,4.1c-361.6-0.1-723.2-0.1-1084.8,0c-3.4,0-4.1-0.7-4.1-4.1
                 C0.1,974.3,0.1,860.6,0.1,747c121.2,0,242.4,0,363.6,0C365.8,747,368,746.9,370.2,746.8z"
                    />
                    <path
                      class="st2"
                      d="M1092.9,747c-125.5,0-251.1,0-376.6,0c-2.2,0-4.3-0.1-6.5-0.1c14.5-17,28.3-34.5,39.8-53.6
                 c24.5-40.6,39.6-84.4,45.4-131.5c4.7-38,2.6-76.2,2.3-114.3c-0.3-31.8-1.4-63.6-2.4-95.4c-0.1-4.3,1.1-5.1,5.1-5.1
                 c97.6,0.1,195.2,0.1,292.8,0.1C1092.9,480.4,1092.9,613.7,1092.9,747z"
                    />
                    <path
                      class="st2"
                      d="M370.2,746.8c-2.2,0-4.3,0.1-6.5,0.1c-121.2,0-242.4,0-363.6,0c0-133.3,0-266.6,0-399.9
                 c92.9,0,185.9,0,278.8-0.1c4.9,0,6.3,0.9,6.1,6.1c-2.3,53.9-2.9,107.9-3,161.8c-0.1,71.7,19,137.6,60.3,196.7
                 C350.9,723.9,360.6,735.3,370.2,746.8z"
                    />
                    <path
                      class="st1"
                      d="M348.7,688.1c-13.6-20.3-23.7-42.3-31.6-65.4c-12-35-17.1-71.1-17.1-108c0-56.5,1-113,3.1-169.4
                 c1.1-31.1,2.8-62.2,5-93.3c0.3-3.6,1.1-5,5.2-5c151.1,0.1,302.2,0.1,453.4,0c4.6,0,4.9,2,5.2,5.5c2.9,39.9,4.7,79.8,5.9,119.8
                 c1.5,47.8,2.2,95.6,2.1,143.4c-0.1,60.6-14.4,117.3-46.4,169.2c-0.7,1.1-1.5,2.2-2.3,3.2c-5.2-9.8-11.5-18.7-19.2-26.6
                 c-21.8-22.2-49.8-25.9-73.6-9.6c-8.5,5.9-15.8,13.1-22.1,21.9c-12.5-27-27.3-51.4-55.3-64.3c0.1-2,0.2-4,0.2-6c0-28.7,0-57.3,0-86
                 c0-2.2-0.7-4.5,3.2-4.4c39.8,0.6,79.7,0.9,118.2,13.1c2.7,0.9,3.9,0.8,3.6-2.6c-1.7-21.5-1.7-42.9,0-64.4c0.3-3.4-1-3.5-3.7-2.7
                 c-8.9,2.6-17.9,5.3-27,7c-30.3,5.4-61,5.5-91.6,6.3c-2.9,0.1-2.7-1.5-2.7-3.4c0-19.3,0.1-38.7,0-58c0-2.9,1-3.6,3.7-3.6
                 c20.9-0.1,41.6,1.5,62.1,5.6c11.1,2.2,21.9,5.3,33.3,8.9c-2-24.2-2-47.8-0.1-71.7c-1.9,0.4-3.3,0.6-4.5,1
                 c-29,9-58.8,12.9-89.1,12.9c-4.4,0-5.6-0.8-5.3-5.4c1.8-28,6.7-55.5,12.1-82.9c0.7-3.3,0.5-4.4-3.3-4.2c-20.1,1.5-40.3,1.5-60.4,0
                 c-3.7-0.3-3.9,0.8-3.3,4.2c5.4,27.4,10.3,54.9,12.1,82.9c0.3,4.6-0.9,5.4-5.3,5.4c-30.4,0-60.1-3.9-89.1-13
                 c-3.7-1.2-4.6-0.4-4.3,3.3c0.9,11,1.1,21.9,1.3,32.9c0.1,11.3-1.2,22.6-1.3,34.2c1.4-0.3,2.6-0.5,3.6-0.9
                 c29.4-9.5,59.7-13.5,90.5-13.2c2.4,0,4.8-0.7,4.8,3.5c-0.2,19.3-0.2,38.6,0,58c0,3-1.1,3.5-3.8,3.4c-6.7-0.3-13.3-0.5-20-0.6
                 c-33-0.6-65.9-2.4-97.7-12.7c-3.5-1.1-3.9,0.1-3.6,3.2c1.7,21.1,1.7,42.3,0,63.4c-0.3,3.9,1,4,4.1,3c11.6-3.7,23.4-6.3,35.5-8.2
                 c26.6-4,53.4-4.2,80.2-4.8c4.6-0.1,5.4,1.3,5.3,5.5c-0.1,30.3,0,60.6,0.1,91c-27.9,13-42.9,37.2-55.1,64c-4.1-4.5-7.8-9-11.9-13
                 c-24.9-24.2-54.7-24.9-80.7-2C361.8,666.9,354.7,677.1,348.7,688.1z"
                    />
                    <path
                      class="st2"
                      d="M348.7,688.1c6-11,13.1-21.2,22.6-29.6c26-22.9,55.8-22.2,80.7,2c4.1,4,7.8,8.5,11.9,13
                 c12.2-26.7,27.1-51,55.1-64c14-5.3,28-5.3,42.1,0c28,13,42.8,37.3,55.3,64.3c6.4-8.8,13.6-16,22.1-21.9
                 c23.8-16.4,51.8-12.7,73.6,9.6c7.7,7.9,14.1,16.8,19.2,26.6c-8,13.9-17.8,26.5-28.2,38.6c-32.3,37.9-71.1,67.9-113.7,93.3
                 c-15,9-30.3,17.3-46,25.1c-2.2,1.1-3.9,1.5-6.4,0.3c-48.3-24.2-93.6-52.7-133-90.1c-20.4-19.3-38.3-40.7-53.7-64.2
                 C349.7,690.2,349.3,689.2,348.7,688.1z"
                    />
                    <path
                      class="st0"
                      d="M561,609.5c-14-5.3-28-5.3-42.1,0c-0.1-30.3-0.2-60.6-0.1-91c0-4.2-0.7-5.6-5.3-5.5
                 c-26.8,0.6-53.6,0.8-80.2,4.8c-12,1.8-23.9,4.4-35.5,8.2c-3.1,1-4.4,0.9-4.1-3c1.7-21.1,1.7-42.3,0-63.4c-0.2-3.1,0.1-4.3,3.6-3.2
                 c31.8,10.3,64.6,12.1,97.7,12.7c6.7,0.1,13.3,0.2,20,0.6c2.7,0.1,3.8-0.4,3.8-3.4c-0.1-19.3-0.2-38.7,0-58c0.1-4.2-2.3-3.5-4.8-3.5
                 c-30.9-0.3-61.1,3.7-90.5,13.2c-1.1,0.3-2.2,0.5-3.6,0.9c0.1-11.6,1.4-22.9,1.3-34.2c-0.1-11-0.3-22-1.3-32.9
                 c-0.3-3.7,0.6-4.5,4.3-3.3c29,9.1,58.7,13,89.1,13c4.4,0,5.6-0.8,5.3-5.4c-1.8-28-6.7-55.5-12.1-82.9c-0.7-3.3-0.5-4.4,3.3-4.2
                 c20.1,1.5,40.3,1.5,60.4,0c3.7-0.3,3.9,0.8,3.3,4.2c-5.4,27.4-10.3,54.9-12.1,82.9c-0.3,4.6,0.9,5.4,5.3,5.4
                 c30.4,0,60.1-3.9,89.1-12.9c1.2-0.4,2.6-0.6,4.5-1c-2,24-1.9,47.5,0.1,71.7c-11.4-3.6-22.3-6.7-33.3-8.9
                 c-20.5-4.1-41.2-5.7-62.1-5.6c-2.7,0-3.8,0.6-3.7,3.6c0.1,19.3,0.1,38.6,0,58c0,1.9-0.2,3.5,2.7,3.4c30.6-0.8,61.3-0.9,91.6-6.3
                 c9.2-1.6,18.1-4.3,27-7c2.7-0.8,3.9-0.8,3.7,2.7c-1.7,21.5-1.7,42.9,0,64.4c0.3,3.4-0.9,3.5-3.6,2.6
                 c-38.5-12.2-78.4-12.5-118.2-13.1c-4-0.1-3.2,2.2-3.2,4.4c0,28.7,0,57.3,0,86C561.2,605.6,561.1,607.6,561,609.5z"
                    />
                  </g>
                </svg>
                <img
                  src="/img/2022-04-24-07404.jpg"
                  alt="<?php echo $lang['asset_23'] ?>Marcel"
                  title="<?php echo $lang['asset_23'] ?>Marcel"
                  class="reveal"
                  aria-label="Marcel's Portrait"
                />
              </div>
              <section class="profile">
                <h4 class="reveal">Marcel H.</h4>
                <h5 class="reveal">
                  <?php echo $lang['asset_24'] ?>
                </h5>

                <div class="social-icons reveal">
                  <a href="tel:+4552812304" aria-label="Phone: +45 52 81 23 04">
                    <i class="fa-solid fa-phone"></i>
                  </a>
                  <a
                    href="mailto:marcel@slavicmedia.dk"
                    aria-label="Email: marcel@slavicmedia.dk"
                  >
                    <i class="fa-solid fa-envelope"></i>
                  </a>
                  <a
                    href="https://www.linkedin.com/in/marcelhajik"
                    target="_blank"
                    rel="noopener noreferrer nofollow"
                  >
                    <i class="fa-brands fa-linkedin"></i>
                  </a>
                </div>
              </section>
              <!-- MARCEL SKILLS START -->
            </div>
            <!-- MARCEL SKILLS START -->

            <hr class="semi" role="separator" />
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
            <div id="adam">
              <div class="reveal">
                <svg
                  class="note flag"
                  version="1.1"
                  id="Layer_1"
                  xmlns="http://www.w3.org/2000/svg"
                  xmlns:xlink="http://www.w3.org/1999/xlink"
                  x="0px"
                  y="0px"
                  viewBox="0 0 1062 1062"
                  style="enable-background: new 0 0 1062 1062"
                  xml:space="preserve"
                >
                  <style type="text/css">
                    .st0 {
                      fill: #fefefe;
                    }
                    .st1 {
                      fill: #d70c12;
                    }
                    .st2 {
                      fill: #09437f;
                    }
                  </style>
                  <g>
                    <path
                      class="st0"
                      d="M0.2,5.1C-0.7,0.9,1,0,5.2,0c350.7,0.1,701.4,0.1,1052.1,0c3.7,0,4.6,0.8,4.6,4.6
                 c-0.1,176.1-0.1,352.1-0.1,528.2c-2-0.1-4-0.4-5.9-0.4c-91.4,0-182.8,0-274.2,0c-77.6,0-155.2,0-232.8,0c-1.4-1.4-2.8-2.9-4.2-4.3
                 C364.7,354.8,184.6,181.6,4.4,8.5C3.1,7.2,2.2,5.6,0.2,5.1z"
                    />
                    <path
                      class="st1"
                      d="M549,532.3c77.6,0,155.2,0,232.8,0c91.4,0,182.8,0,274.2,0c2,0,4,0.3,5.9,0.4c0,174.7,0,349.3,0.1,524
                 c0,4.2-1.1,4.8-5,4.8c-350.8-0.1-701.5-0.1-1052.3-0.2c-1.3,0-4.6,2.5-4.5-1.9c1.6-0.4,2.4-1.7,3.5-2.7
                 c107.5-103.3,215-206.6,322.4-309.9c34.1-32.8,68.2-65.6,102.3-98.4C468.6,609.7,508.8,571,549,532.3z"
                    />
                    <path
                      class="st2"
                      d="M549,532.3c-40.2,38.7-80.4,77.4-120.6,116.1c-34.1,32.8-68.2,65.6-102.3,98.4
                 C218.7,850.1,111.2,953.4,3.7,1056.7c-1.1,1-1.9,2.4-3.5,2.7c0-351.4,0-702.9,0-1054.3c1.9,0.5,2.9,2.1,4.2,3.4
                 C184.6,181.6,364.7,354.8,544.8,528C546.2,529.4,547.6,530.9,549,532.3z"
                    />
                  </g>
                </svg>
                <img
                  src="/img/2022-04-24-07426.jpg"
                  alt="<?php echo $lang['asset_23'] ?> Adam"
                  title="<?php echo $lang['asset_23'] ?> Adam"
                  class="reveal"
                  role="img"
                  aria-label="<?php echo $lang['asset_23'] ?> Adam"
                />
              </div>

              <div class="profile">
                <h4 class="reveal" role="heading" aria-level="4">Adam S.</h4>
                <h5 class="reveal">
                  <?php echo $lang['asset_30'] ?>
                </h5>

                <div class="social-icons reveal">
                  <a href="tel:+4550104776" aria-label="Phone: +45 50 10 47 76"
                    ><i class="fa-solid fa-phone"></i
                  ></a>
                  <a
                    href="mailto:adam@slavicmedia.dk"
                    aria-label="Email: adam@slavicmedia.dk"
                  >
                    <i class="fa-solid fa-envelope"></i>
                  </a>
                  <a
                    href="https://www.linkedin.com/in/adamsochorec"
                    target="_blank"
                    rel="noopener noreferrer nofollow"
                  >
                    <i class="fa-brands fa-linkedin"></i>
                  </a>
                </div>
              </div>
            </div>
            <!-- ADAM SKILLS END -->

            <hr class="semi" role="separator" />
            <!-- ADAM RESPONSIBILITIES START -->
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
            $IPATH = $_SERVER['DOCUMENT_ROOT'] . '/assets/components/';
            include $IPATH . 'clients.php';
            ?>
          </article>
          <!-- CTA START -->
          <div class="grid-container fifty-fifty">
            <a
              class="grid-item reveal"
              target="_blank"
              href="https://clients.slavicmedia.dk"
              ><div class="cta">
                <?php echo $lang['asset_191'] ?>
              </div>
            </a>

            <a class="grid-item reveal" href="/press">
              <div class="cta cta2">
                <?php echo $lang['asset_75'] ?>
              </div>
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
    $IPATH = $_SERVER['DOCUMENT_ROOT'] . '/assets/components/';
    include $IPATH . 'footer.php';
    ?>
    <script type="text/javascript" src="/assets/index.js" defer></script>

    <!-- FOOTER END -->
  </body>
</html>
