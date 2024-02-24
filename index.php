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
    <!-- COOKIES START -->
    <?php
   $IPATH = $_SERVER['DOCUMENT_ROOT'] . '/assets/components/';
   include $IPATH . 'privacy.php';
   ?>
    <!-- COOKIES END -->
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
              Strategy, <span class="highlited tuscher">experience</span>,
              precision and hard work at your
              <span class="highlited tuscher">service</span>
            </h1>
          </div>
          <div class="grid-item">
            <p>
              We are not any traditional production company. Slavic Media are
              creative storytellers who believe in good set designs, deep eye
              contact, and the right light that can raise your message above the
              noise.
            </p>
          </div>
        </div>
        <hr class="semi" role="separator" />
        <!-- FEATURES START -->
        <article class="gallery" aria-label="Services">
          <a href="/projects" class="gallery-item reveal">
            <img
              src="/img/thumbnail/hvalp.jpg"
              title="Content Creation cover."
              alt="Content Creation cover."
            />
            <div class="gallery-item-caption">
              <i class="fa-solid fa-video bubble"></i>
              <h3>Content Creation</h3>
              <p>
                Capture the essence of your brand with unique and professional
                photography, utilizing cutting-edge equipment, state-of-the-art
                cameras, drones, and tools for visually striking content.
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
              alt="Strategy services cover."
              title="Strategy services cover."
            />
            <div class="gallery-item-caption">
              <i class="fa-solid fa-chart-column bubble"></i>
              <h3>Strategy</h3>
              <p>
                Gain a competitive edge, for optimal results from your ads with
                complex digital strategy aligning creative content with
                strategic goals.
              </p>
            </div>
          </a>
        </article>
        <section class="flex-center">
          <a class="reveal" href="/services">
            <div class="cta">
              Explore Our Services<i class="fa-solid fa-arrow-right"></i>
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
          <p class="profile-info reveal">
            Slavic Media I/S, a production company, specializing in captivating
            brand films, SoMe content, stills, and headshots.
          </p>
          <br />
          <p class="reveal">
            From translating your vision into reality to offering strategic
            insights, we're your partners in elevating your brand through a
            seamless blend of captivating content and strategic excellence.
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
          <h3 class="reveal">Trusted by Customers</h3>
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
