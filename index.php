<!DOCTYPE html>
<html lang="en">
  <head>
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"
    />
    <?php
    $IPATH = $_SERVER['DOCUMENT_ROOT'] . '/assets/components/';
    include $IPATH . 'head.php';
    ?>
    <title>Your Online Presence | Slavic Media</title>
  </head>
  <body id="homepage">
    <!-- HEADER START -->
    <?php
    $IPATH = $_SERVER['DOCUMENT_ROOT'] . '/assets/components/';
    include $IPATH . 'nav-bar.php';
    ?>
    <!-- HEADER END -->

    <!-- FLAGS START -->
    <?php
      $IPATH = $_SERVER['DOCUMENT_ROOT'] . '/assets/components/';
      include $IPATH . 'flags.php';
      ?>
    <!-- FLAGS END -->
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
          class="grid-container caption-container reveal"
          role="region"
          aria-label="Services"
        >
          <div class="grid-item">
            <h1>
              Strategy, <span class="highlited tuscher">experience</span>,
              precision and hard work at your
              <span class="highlited tuscher">service</span>
            </h1>
          </div>
          <div class="grid-item">
            <p>
              We are creative storytellers who believe in good set designs, deep
              eye contact, and the right light that can raise your message above
              the noise.
            </p>
          </div>
        </div>
        <hr class="" role="separator" />
        <?php
        $IPATH = $_SERVER['DOCUMENT_ROOT'] . '/assets/components/';
        include $IPATH . 'swiper-clients.php';
        ?>
        <hr class="" role="separator" />

        <!-- FEATURES START -->
        <article
          id="visual"
          class="gallery"
          id="gallery-features"
          aria-label="Services"
        >
          <a href="/projects" class="gallery-item reveal">
            <img
              src="/img/cover-video.jpg"
              title="Video services cover."
              alt="Video services cover."
            />
            <div class="gallery-item-caption">
              <i class="fa-solid fa-video bubble"></i>
              <h3>Video</h3>
              <p>
                Let us distil the essence of your project into a compelling
                showreel. Our team specializes in creating narratives that leave
                a lasting impact on your audience.
              </p>
            </div>
          </a>
          <a
            href="/projects#photo"
            class="gallery-item reveal"
            aria-label="Huset Fundament 2023"
          >
            <img
              src="/img/cover-photo.jpg"
              alt="Photo services cover."
              title="Photo services cover."
            />
            <div class="gallery-item-caption">
              <i class="fa-solid fa-camera bubble"></i>
              <h3>Photo</h3>
              <p>
                Whether you are looking for professional headshots or authentic
                stills, in a fancy studio or rough exterior, we are here to
                bring them alive.
              </p>
            </div>
          </a>
        </article>
        <section class="flex-center">
          <a class="reveal" href="/services">
            <div class="cta">
              Request a Proposal<i class="fa-solid fa-arrow-right"></i>
            </div>
          </a>
        </section>
        <!-- FEATURES END -->
        <hr class="reveal" role="separator" />

        <div class="grid-container caption-container" id="reviews-caption">
          <div class="grid-item">
            <h2 class="reveal">
              <span class="highlited tuscher">Actions</span> speak louder
              <span class="highlited tuscher">than</span> any
              <span class="highlited tuscher"> words</span>
            </h2>
          </div>
          <div class="grid-item reveal">
            <p>
              Do you need to fly a drone over the open sea, capture the northern
              lights in cold weather, bike across the whole country, walk
              through the desert, or get up close in a way that nobody else has?
              We are here for you.
            </p>
          </div>
        </div>
      </article>
      <!-- SERVICES END -->
      <!-- REVIEWS START -->
      <article
        class="wrapper-wide"
        id="reviews"
        role="region"
        aria-label="Reviews"
      >
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
            aria-label="Share your experience"
          >
            Share your experience<i class="fa-solid fa-arrow-right"></i>
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
        aria-label="Our Team"
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
          aria-label="Our Team Video"
          role="video"
          aria-describedby="Our Team cover video"
          poster="/img/showreel-ourteam.png"
        ></video>
        <article class="wrapper-standard">
          <h2 class="reveal">Our Team</h2>
          <button id="playPauseButton" class="play" aria-controls="heroVideo">
            <i
              id="playControl"
              title="Play"
              class="fa-regular fa-circle-play fa-xl"
              aria-hidden="true"
            ></i>
            <i
              id="pauseControl"
              title="Pause"
              class="fa-regular fa-circle-pause fa-xl"
              aria-hidden="true"
            ></i>
          </button>
          <p class="profile-info reveal">
            Creative & Production studio based in Denmark and Czechia.<br /><br />
            We tell stories with deep eye contact, magnificent shots and clean
            designs to help your project stand out from the noise.
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
        <hr class="semi" role="separator" />
      </article>
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
    <script type="text/javascript" src="/assets/index.js"></script>

    <!-- FOOTER END -->
  </body>
</html>
