<!DOCTYPE html>
<html lang="en">
  <head>
    <?php
    $IPATH = $_SERVER['DOCUMENT_ROOT'] . '/assets/php/';
    include $IPATH . 'global-head.php';
    ?>
    <title>Video Services | Slavic Media</title>
  </head>

  <body id="video-services" class="services">
    <?php
    $IPATH = $_SERVER['DOCUMENT_ROOT'] . '/assets/php/';
    include $IPATH . 'global-nav-bar.php';
    ?>
    <main>
      <article class="wrapper-standard">
        <div class="pathname-container">
          <i
            ><span class="pathname"><a href="/"></a> / </span>
            <span class="pathname"><a href="/#services"></a> / </span>
            <span class="pathname-current"></span
          ></i>
        </div>
        <br />
        <h1></h1>
        <br />
        <p>
          Case studies of our projects. For estimating the aproximate price of
          your video. Please note that the prices are just aproximate!
        </p>
        <hr />
        <section>
          <h2>Huset Fundament</h2>
          <iframe
            src="https://player.vimeo.com/video/818681828?h=edd3a72586"
            allow="autoplay; fullscreen; picture-in-picture"
            allowfullscreen
            frameborder="0"
          ></iframe>
          <p>
            <a
              target="_blank"
              rel="noopener noreferrer"
              href="http://husetfundament.dk"
              >Huset Fundament</a
            >
            is a culture house located in Kolding that offers a variety of
            services, including Pitstop - a club space for live music and night
            clubbing, and cultural house - a community art space with workshops.
            Our approach and strategy for this project was to thoroughly observe
            and gather information to better understand the Huset Fundament
            brand.
          </p>
          <br /><br />
          <h4>Pricing Details:</h4>
          <br />
          <ul>
            <li class="">Production Phase:</li>
            <ol>
              <li>3 hours at 250 DKK/hour = 750 DKK</li>
              <li class="">Shooting additional video clips</li>
              <li class="">
                Taking pictures from the whole day for the highlight: 1h/day
              </li>
            </ol>
            <li class="">Post-production Phase:</li>
            <ol>
              <li>27 hours at 250 DKK/hour = 6,750 DKK</li>
              <li class="">Sorting and editing footage: 2h</li>

              <li class="">Editing video: 20h</li>

              <li class="">Animations and color grading: 4h</li>
              <li class="">Sound design: 3h</li>
              <li class="">
                Revisions (2 included in price): 5h (charged hourly for 5 extra
                revisions)
              </li>
              <li class="">
                Total for extra revisions: 1,250 DKK (5 x 250 DKK/hour x 1 hour)
              </li>
            </ol>
            <li class=""><u>Total Price: 8,500 DKK</u></li>
          </ul>
        </section>
        <hr />
        <section>
          <h2 class="">Parkour Camp</h2>
          <iframe
            class=""
            src="https://player.vimeo.com/video/818681438"
            allow="autoplay; fullscreen; picture-in-picture"
            allowfullscreen
            frameborder="0"
          ></iframe>
          <p>
            Slavic Media was commissioned to create a 2-3 minute video
            showcasing the Parkour School Summer Camp's values and highlights.
            In addition, we provided 5-10 photos per day for use on social media
            and promotional materials. The camp was 5 days long.
          </p>
          <br /><br />
          <h4>Pricing Details:</h4>
          <br />
          <ul>
            <li class="">Production Phase:</li>
            <ol>
              <li>20 hours at 250 DKK/hour = 5,000 DKK</li>
              <li class="">
                Shooting multiple clips of different activities: 3h/day
              </li>
              <li class="">
                Taking pictures from the whole day for the highlight: 1h/day
              </li>
            </ol>
            <li class="">Post-production Phase:</li>
            <ol>
              <li>24 hours at 250 DKK/hour = 6,000 DKK</li>
              <li class="">
                Sorting and editing highlight of the day photos: 5h
              </li>

              <li class="">Editing video after the camp: 20h 1h/day</li>
              <li class="">
                Revisions (2 included in price): 3h (charged hourly for 2 extra
                revisions)
              </li>
              <li class="">
                Total for extra revisions: 500 DKK (2 x 250 DKK/hour x 1 hour)
              </li>
            </ol>
            <li class=""><u>Total Price: 11,500 DKK</u></li>
          </ul>
        </section>

        <?php
        $IPATH = $_SERVER['DOCUMENT_ROOT'] . '/assets/php/';
        include $IPATH . 'global-totop.php';
        ?>
      </article>
    </main>
    <!-- LOTTIE PLAYER SCRIPTS START -->
    <script
      src="https://unpkg.com/@dotlottie/player-component@1.0.0/dist/dotlottie-player.js"
      defer
    ></script>
    <script src="https://player.vimeo.com/api/player.js"></script>

    <!-- LOTTIE PLAYER SCRIPTS START -->
    <?php
    $IPATH = $_SERVER['DOCUMENT_ROOT'] . '/assets/php/';
    include $IPATH . 'global-footer.php';
    ?>
  </body>
</html>
