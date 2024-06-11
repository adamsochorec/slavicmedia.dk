<!DOCTYPE html>
<html lang="en">
  <head>
    <?php
    $IPATH = $_SERVER['DOCUMENT_ROOT'] . '/assets/components/';
    include $IPATH . 'head.php';
    ?>
    <title>Multimedia Services | Slavic Media</title>
  </head>
  <body id="services">
    <!-- HEADER START -->
    <?php
    $IPATH = $_SERVER['DOCUMENT_ROOT'] . '/assets/components/';
    include $IPATH . 'nav-bar.php';
    ?>
    <!-- HEADER END -->

    <main>
      <article class="wrapper-wide">
        <div class="pathname-container"></div>
        <h1 class="reveal">Services</h1>
        <div class="pathname-container reveal">
          <p>
            <span class="pathname"><a href="/"></a> &#8250; </span>
            <span class="pathname-current">Services</span>
          </p>
        </div>
        <hr class="reveal" role="separator" />
        <!-- FEATURES START -->
        <article
          class="gallery reveal"
          id="gallery-features"
          aria-label="Features Grid"
        >
          <div class="gallery-item reveal">
            <div class="gallery-item-caption">
              <i class="fa-solid fa-film bubble" aria-hidden="true"></i>
              <h3>Cinematic Storytelling</h3>
            </div>
          </div>
          <div class="gallery-item reveal">
            <div class="gallery-item-caption">
              <i
                class="fa-solid fa-image-portrait bubble"
                aria-hidden="true"
              ></i>
              <h3>Ceative Photography Sessions</h3>
            </div>
          </div>
          <div class="gallery-item reveal">
            <div class="gallery-item-caption">
              <i class="fa-solid fa-microchip bubble" aria-hidden="true"></i>
              <h3>Industry Standard Tools</h3>
            </div>
          </div>
          <div class="gallery-item reveal" aria-label="">
            <div class="gallery-item-caption">
              <i
                class="fa-solid fa-handshake-simple bubble"
                aria-hidden="true"
              ></i>
              <h3>Strategic Business Consulting</h3>
            </div>
          </div>
          <div class="gallery-item reveal">
            <div class="gallery-item-caption">
              <i class="fa-brands fa-meta bubble" aria-hidden="true"></i>
              <h3>Targeted Performance Ads</h3>
            </div>
          </div>
          <div class="gallery-item reveal">
            <div class="gallery-item-caption">
              <i
                class="fa-solid fa-diagram-project bubble"
                aria-hidden="true"
              ></i>
              <h3>Holistic Digital Strategy</h3>
            </div>
          </div>
        </article>
        <section class="flex-center">
          <a class="reveal" href="/projects" id="plans">
            <div class="cta">
              Explore Our Projects<i class="fa-solid fa-arrow-right"></i>
            </div>
          </a>
        </section>
        <!-- FEATURES END -->

        <hr id="proposal" class="reveal" />
      </article>
      <!-- CONTACT FORM  START  -->
      <?php
    $IPATH = $_SERVER['DOCUMENT_ROOT'] . '/assets/components/';
    include $IPATH . 'contact-form.php';
    ?>
      <!-- CONTACT FORM  END  -->
    </main>
    <!-- FOOTER START -->
    <!-- FOOTER START -->
    <?php
$IPATH = $_SERVER['DOCUMENT_ROOT'] . '/assets/components/';
include $IPATH . 'footer.php';
?>
    <script type="text/javascript" src="/assets/services.js" defer></script>
    <script
      type="text/javascript"
      src="/assets/cookies.js"
      defer
      role="script"
    ></script>
    <!-- FOOTER END -->
  </body>
</html>
