<?php include 'languages/config.php'; ?>
<!DOCTYPE html>
<html lang="<?php echo $_SESSION['lang'] ?>">
  <head>
    <?php
    $IPATH = $_SERVER['DOCUMENT_ROOT'] . '/assets/components/';
    include $IPATH . 'head.php';
    ?>
    <meta name="description" content="<?php echo $lang['asset_41'] ?>" />
    <meta name="keywords" content="<?php echo $lang['asset_42'] ?>" />
    <title>Slavic Media</title>
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
              alt="<?php echo $lang['asset_47'] ?>."
            />
            <div class="gallery-item-caption">
              <h3><?php echo $lang['asset_107'] ?></h3>
            </div>
          </a>
          <a href="/portrait#travel" class="gallery-item reveal">
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
          <a href="/projects#showreel" class="gallery-item reveal">
            <img
              src="/img/cover-husetfundament.jpg"
              alt="<?php echo $lang['asset_50'] ?>."
            />
            <div class="gallery-item-caption">
              <h3><?php echo $lang['asset_184'] ?></h3>
            </div>
          </a>

          <a href="/projects#interview" class="gallery-item reveal">
            <img
              src="/img/cover-crowdfunding.jpg"
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
        <br />
        <?php
    $IPATH = $_SERVER['DOCUMENT_ROOT'] . '/assets/components/';
    include $IPATH . 'swiper-reviews.php';
    ?>
        <a
          class="flex-center reveal"
          target="_blank"
          rel="noopener noreferrer"
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
            <div id="marcel">
              <div class="reveal">
                <svg
                  class="note flag"
                  aria-label="Slovakia"
                  xmlns="http://www.w3.org/2000/svg"
                  viewBox="0 0 10800 7200"
                  fill="#ee1c25"
                  focusable="false"
                >
                  <defs>
                    <clipPath id="c">
                      <path
                        id="s"
                        d="m4678 1746c0 0 56 561 56 1683-8 1146-865 1726-1494 2031-629-305-1486-885-1494-2031 0-1122 56-1683 56-1683z"
                      />
                    </clipPath>
                  </defs>
                  <g transform="scale(1200)">
                    <path fill="#fff" d="m0 0h9v6H0z" />
                    <path fill="#0b4ea2" d="m0 2h9v4H0z" />
                    <path d="m0 4h9v2H0z" />
                  </g>
                  <use xlink:href="#s" />
                  <path
                    fill="#fff"
                    d="m3113 4800V3397c-475 0-610 42-752 85a2323 2323 0 0 0 0-431c142 43 277 85 752 85v-390c-150 0-357 6-595 87a2323 2323 0 0 0 0-432c238 80 445 86 595 86 0-113-35-356-79-557a2323 2323 0 0 0 412 0c-44 201-79 444-79 557 150 0 357-6 595-86a2323 2323 0 0 0 0 432c-238-81-445-87-595-87v390c475 0 610-42 752-85a2323 2323 0 0 0 0 431c-142-43-277-85-752-85v1403z"
                  />
                  <path
                    clip-path="url(#c)"
                    fill="#0b4ea2"
                    d="m2463 5903a507 867 0 1 1 319-1541 584 1084 0 0 1 916 0 507 867 0 1 1 319 1541z"
                  />
                  <use
                    xlink:href="#s"
                    fill="none"
                    stroke="#fff"
                    stroke-width="108"
                  />
                </svg>
                <img
                  src="/img/2022-04-24-07404.jpg"
                  alt="<?php echo $lang['asset_23'] ?>Marcel"
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
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      viewBox="0 0 512 512"
                    >
                      <path
                        d="M164.9 24.6c-7.7-18.6-28-28.5-47.4-23.2l-88 24C12.1 30.2 0 46 0 64C0 311.4 200.6 512 448 512c18 0 33.8-12.1 38.6-29.5l24-88c5.3-19.4-4.6-39.7-23.2-47.4l-96-40c-16.3-6.8-35.2-2.1-46.3 11.6L304.7 368C234.3 334.7 177.3 277.7 144 207.3L193.3 167c13.7-11.2 18.4-30 11.6-46.3l-40-96z"
                      />
                    </svg>
                  </a>
                  <a
                    href="mailto:marcel@slavicmedia.dk"
                    aria-label="Email: marcel@slavicmedia.dk"
                  >
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      viewBox="0 0 512 512"
                    >
                      <path
                        d="M48 64C21.5 64 0 85.5 0 112c0 15.1 7.1 29.3 19.2 38.4L236.8 313.6c11.4 8.5 27 8.5 38.4 0L492.8 150.4c12.1-9.1 19.2-23.3 19.2-38.4c0-26.5-21.5-48-48-48H48zM0 176V384c0 35.3 28.7 64 64 64H448c35.3 0 64-28.7 64-64V176L294.4 339.2c-22.8 17.1-54 17.1-76.8 0L0 176z"
                      />
                    </svg>
                  </a>
                  <a
                    href="https://www.linkedin.com/in/marcelhajik"
                    target="_blank"
                    rel="noopener noreferrer"
                  >
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      xmlns:xlink="http://www.w3.org/1999/xlink"
                      version="1.1"
                      viewBox="0 0 382 382"
                      xml:space="preserve"
                    >
                      <path
                        d="M347.445,0H34.555C15.471,0,0,15.471,0,34.555v312.889C0,366.529,15.471,382,34.555,382h312.889  C366.529,382,382,366.529,382,347.444V34.555C382,15.471,366.529,0,347.445,0z M118.207,329.844c0,5.554-4.502,10.056-10.056,10.056  H65.345c-5.554,0-10.056-4.502-10.056-10.056V150.403c0-5.554,4.502-10.056,10.056-10.056h42.806  c5.554,0,10.056,4.502,10.056,10.056V329.844z M86.748,123.432c-22.459,0-40.666-18.207-40.666-40.666S64.289,42.1,86.748,42.1  s40.666,18.207,40.666,40.666S109.208,123.432,86.748,123.432z M341.91,330.654c0,5.106-4.14,9.246-9.246,9.246H286.73  c-5.106,0-9.246-4.14-9.246-9.246v-84.168c0-12.556,3.683-55.021-32.813-55.021c-28.309,0-34.051,29.066-35.204,42.11v97.079  c0,5.106-4.139,9.246-9.246,9.246h-44.426c-5.106,0-9.246-4.14-9.246-9.246V149.593c0-5.106,4.14-9.246,9.246-9.246h44.426  c5.106,0,9.246,4.14,9.246,9.246v15.655c10.497-15.753,26.097-27.912,59.312-27.912c73.552,0,73.131,68.716,73.131,106.472  L341.91,330.654L341.91,330.654z"
                      ></path>
                    </svg>
                  </a>
                </div>
              </section>
              <!-- MARCEL SKILLS START -->
            </div>
            <!-- MARCEL SKILLS START -->

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
            <div id="adam">
              <div class="reveal">
                <svg
                  class="note flag"
                  aria-label="Czechia"
                  xmlns="http://www.w3.org/2000/svg"
                  viewBox="0 0 24 24"
                  focusable="false"
                >
                  <mask
                    x="1"
                    y="1"
                    maskUnits="userSpaceOnUse"
                    style="mask-type: alpha"
                  >
                    <circle cx="12" cy="12" r="11" fill="#D9D9D9"></circle>
                  </mask>
                  <g mask="url(#language_english_svg__a)">
                    <path fill="#01257D" d="M1 1h22v22H1V1Z"></path>
                    <path
                      fill="#fff"
                      d="m1.842 7.33 2.294-3.277L22.158 16.67l-2.295 3.277z"
                    ></path>
                    <path
                      fill="#fff"
                      d="m19.864 4.052 2.294 3.276L4.136 19.947 1.842 16.67z"
                    ></path>
                    <path
                      fill="#CF1429"
                      d="m2.703 6.1.573-.82L21.298 17.9l-.574.818z"
                    ></path>
                    <path
                      fill="#CF1429"
                      d="m20.724 5.281.574.82L3.276 18.718l-.573-.82z"
                    ></path>
                    <path fill="#fff" d="M9 1h6v22H9z"></path>
                    <path fill="#fff" d="M1 15V9h22v6H1Z"></path>
                    <path
                      fill="#CF1429"
                      fill-rule="evenodd"
                      d="M14 1h-4v9H1v4h9v9h4v-9h9v-4h-9V1Z"
                      clip-rule="evenodd"
                    ></path>
                  </g>
                </svg>
                <img
                  src="/img/2022-04-24-07426.jpg"
                  alt="<?php echo $lang['asset_23'] ?> Adam"
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
                    ><svg
                      xmlns="http://www.w3.org/2000/svg"
                      viewBox="0 0 512 512"
                    >
                      <path
                        d="M164.9 24.6c-7.7-18.6-28-28.5-47.4-23.2l-88 24C12.1 30.2 0 46 0 64C0 311.4 200.6 512 448 512c18 0 33.8-12.1 38.6-29.5l24-88c5.3-19.4-4.6-39.7-23.2-47.4l-96-40c-16.3-6.8-35.2-2.1-46.3 11.6L304.7 368C234.3 334.7 177.3 277.7 144 207.3L193.3 167c13.7-11.2 18.4-30 11.6-46.3l-40-96z"
                      /></svg
                  ></a>
                  <a
                    href="mailto:adam@slavicmedia.dk"
                    aria-label="Email: adam@slavicmedia.dk"
                  >
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      viewBox="0 0 512 512"
                    >
                      <path
                        d="M48 64C21.5 64 0 85.5 0 112c0 15.1 7.1 29.3 19.2 38.4L236.8 313.6c11.4 8.5 27 8.5 38.4 0L492.8 150.4c12.1-9.1 19.2-23.3 19.2-38.4c0-26.5-21.5-48-48-48H48zM0 176V384c0 35.3 28.7 64 64 64H448c35.3 0 64-28.7 64-64V176L294.4 339.2c-22.8 17.1-54 17.1-76.8 0L0 176z"
                      />
                    </svg>
                  </a>
                  <a
                    href="https://www.linkedin.com/in/adamsochorec"
                    target="_blank"
                    rel="noopener noreferrer"
                  >
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      xmlns:xlink="http://www.w3.org/1999/xlink"
                      version="1.1"
                      viewBox="0 0 382 382"
                      xml:space="preserve"
                    >
                      <path
                        d="M347.445,0H34.555C15.471,0,0,15.471,0,34.555v312.889C0,366.529,15.471,382,34.555,382h312.889  C366.529,382,382,366.529,382,347.444V34.555C382,15.471,366.529,0,347.445,0z M118.207,329.844c0,5.554-4.502,10.056-10.056,10.056  H65.345c-5.554,0-10.056-4.502-10.056-10.056V150.403c0-5.554,4.502-10.056,10.056-10.056h42.806  c5.554,0,10.056,4.502,10.056,10.056V329.844z M86.748,123.432c-22.459,0-40.666-18.207-40.666-40.666S64.289,42.1,86.748,42.1  s40.666,18.207,40.666,40.666S109.208,123.432,86.748,123.432z M341.91,330.654c0,5.106-4.14,9.246-9.246,9.246H286.73  c-5.106,0-9.246-4.14-9.246-9.246v-84.168c0-12.556,3.683-55.021-32.813-55.021c-28.309,0-34.051,29.066-35.204,42.11v97.079  c0,5.106-4.139,9.246-9.246,9.246h-44.426c-5.106,0-9.246-4.14-9.246-9.246V149.593c0-5.106,4.14-9.246,9.246-9.246h44.426  c5.106,0,9.246,4.14,9.246,9.246v15.655c10.497-15.753,26.097-27.912,59.312-27.912c73.552,0,73.131,68.716,73.131,106.472  L341.91,330.654L341.91,330.654z"
                      ></path>
                    </svg>
                  </a>
                </div>
              </div>
            </div>
            <!-- ADAM SKILLS END -->

            <hr class="semi" />
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
    <!-- FOOTER END -->
  </body>
</html>
