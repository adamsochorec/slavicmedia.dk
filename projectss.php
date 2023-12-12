<?php include 'languages/config.php'; ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <?php
    $IPATH = $_SERVER['DOCUMENT_ROOT'] . '/assets/components/';
    include $IPATH . 'head.php';
    ?>
    <meta name="description" content="<?php echo $lang['asset_19'] ?>" />
    <meta name="keywords" content="<?php echo $lang['asset_219'] ?>" />
    <title>Projects | Slavic Media</title>
    <link
      rel="stylesheet"
      href="https://unpkg.com/photoswipe@5.2.2/dist/photoswipe.css"
    />
  </head>
  <body id="projects">
    <!-- HEADER START -->
    <?php
    $IPATH = $_SERVER['DOCUMENT_ROOT'] . '/assets/components/';
    include $IPATH . 'nav-bar.php';
    ?>
    <!-- HEADER END -->
    <main>
      <article class="wrapper-wide">
        <div
          class="pathname-container"
          role="navigation"
          aria-label="Breadcrumb navigation"
        ></div>
        <h1 class="reveal" aria-label="<?php echo $lang['asset_102'] ?>">
          <?php echo $lang['asset_102'] ?>
        </h1>
        <div class="pathname-container reveal">
          <p>
            <span class="pathname"
              ><a href="/" aria-label="Home"></a> &#8250;
            </span>
            <span class="pathname" aria-label="<?php echo $lang['asset_22'] ?>"
              ><?php echo $lang['asset_22'] ?></span
            >
          </p>
        </div>
      </article>
      <!-- PHOTO START -->
      <article class="wrapper-wide" id="photo">
        <hr class="reveal" role="separator" />
        <div class="grid-container fifty-fifty caption-container">
          <div class="grid-item reveal">
            <h2>
              <?php echo $lang['asset_11'] ?>
              <span class="highlited"><?php echo $lang['asset_22'] ?></span>
            </h2>

            <div class="hide-cta-min reveal">
              <a
                class="cta"
                href="/services#plans"
                aria-label="<?php echo $lang['asset_117'] ?>"
              >
                <?php echo $lang['asset_116'] ?>
              </a>
            </div>
          </div>
          <div class="grid-item">
            <p class="reveal">
              <?php echo $lang['asset_173'] ?>
            </p>
            <div class="hide-cta-max reveal">
              <a
                class="cta"
                href="/services#plans"
                aria-label="<?php echo $lang['asset_117'] ?>"
              >
                <?php echo $lang['asset_116'] ?>
              </a>
            </div>
          </div>
        </div>
      </article>
      <hr class="semi" role="separator" />
      <article class="wrapper-wide pswp-gallery" id="photo-gallery">
        <a
          href="img/2021-04-25-00693.jpg"
          data-pswp-width="auto"
          data-pswp-height="2500"
          target="_blank"
        >
          <img src="img/thumbnail/2021-04-25-00693.jpg" alt="" />
        </a>
        <a
          href="https://cdn.photoswipe.com/photoswipe-demo-images/photos/1/img-2500.jpg"
          data-pswp-width="auto"
          data-pswp-height="2500"
          target="_blank"
        >
          <img
            src="https://cdn.photoswipe.com/photoswipe-demo-images/photos/1/img-200.jpg"
            alt=""
          />
        </a>
        <a
          href="https://cdn.photoswipe.com/photoswipe-demo-images/photos/1/img-2500.jpg"
          data-pswp-width="auto"
          data-pswp-height="2500"
          target="_blank"
        >
          <img
            src="https://cdn.photoswipe.com/photoswipe-demo-images/photos/1/img-200.jpg"
            alt=""
          />
        </a>
        <a
          href="https://cdn.photoswipe.com/photoswipe-demo-images/photos/1/img-2500.jpg"
          data-pswp-width="auto"
          data-pswp-height="2500"
          target="_blank"
        >
          <img
            src="https://cdn.photoswipe.com/photoswipe-demo-images/photos/1/img-200.jpg"
            alt=""
          />
        </a>
        <a
          href="https://cdn.photoswipe.com/photoswipe-demo-images/photos/1/img-2500.jpg"
          data-pswp-width="auto"
          data-pswp-height="2500"
          target="_blank"
        >
          <img
            src="https://cdn.photoswipe.com/photoswipe-demo-images/photos/1/img-200.jpg"
            alt=""
          />
        </a>
        <a
          href="https://cdn.photoswipe.com/photoswipe-demo-images/photos/2/img-2500.jpg"
          data-pswp-width="auto"
          data-pswp-height="2500"
          target="_blank"
        >
          <img
            src="https://cdn.photoswipe.com/photoswipe-demo-images/photos/2/img-200.jpg"
            alt=""
          />
        </a>
        <a
          href="https://cdn.photoswipe.com/photoswipe-demo-images/photos/3/img-2500.jpg"
          data-pswp-width="auto"
          data-pswp-height="1666"
          target="_blank"
        >
          <img
            src="https://cdn.photoswipe.com/photoswipe-demo-images/photos/3/img-200.jpg"
            alt=""
          />
        </a>
      </article>
      <!-- PHOTO END -->
      <!-- VIDEO START -->
      <article class="wrapper-wide" id="video">
        <hr class="reveal" role="separator" />
        <div class="grid-container fifty-fifty caption-container">
          <div class="grid-item reveal">
            <h2>
              <?php echo $lang['asset_13'] ?>
              <span class="highlited"> <?php echo $lang['asset_22'] ?></span>
            </h2>
            <div class="hide-cta-min reveal">
              <a
                class="cta"
                href="/services#plans"
                aria-label="<?php echo $lang['asset_117'] ?>"
              >
                <?php echo $lang['asset_116'] ?>
              </a>
            </div>
          </div>
          <div class="grid-item">
            <p class="reveal">
              <?php echo $lang['asset_185'] ?>
            </p>
            <div class="hide-cta-max reveal">
              <a
                class="cta"
                href="/services#plans"
                aria-label="<?php echo $lang['asset_117'] ?>"
              >
                <?php echo $lang['asset_116'] ?>
              </a>
            </div>
          </div>
        </div>
        <hr class="semi" role="separator" />
      </article>
      <article id="visuals"></article>
      <!-- VIDEO END -->
    </main>
    <!-- FOOTER START -->
    <?php
    $IPATH = $_SERVER['DOCUMENT_ROOT'] . '/assets/components/';
    include $IPATH . 'footer.php';
    ?>
    <script src="https://unpkg.com/photoswipe@5.2.2/dist/photoswipe.css"></script>
    <script type="module" src="/assets/projects.js"></script>
    <!-- FOOTER END -->
  </body>
</html>
