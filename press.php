<?php include 'languages/config.php'; ?>
<!DOCTYPE html>
<html lang="<?php echo $_SESSION['lang'] ?>">
  <head>
    <?php
    $IPATH = $_SERVER['DOCUMENT_ROOT'] . '/assets/components/';
    include $IPATH . 'head.php';
    ?>
    <meta name="description" content="<?php echo $lang['asset_221'] ?>" />
    <!--     <meta name="keywords" content="<?php echo $lang['asset_220'] ?>" /> -->
    <title><?php echo $lang['asset_75'] ?> | Slavic Media</title>
  </head>
  <body id="press">
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
      <article class="wrapper-wide">
        <div
          class="pathname-container"
          role="region"
          aria-labelledby="pagePathHeading"
        ></div>
        <h1 id="pagePathHeading" class="reveal" role="heading" aria-level="1">
          <?php echo $lang['asset_75'] ?>
        </h1>
        <div
          class="pathname-container reveal"
          role="navigation"
          aria-labelledby="breadcrumbsHeading"
        >
          <p>
            <span class="pathname"><a href="/"></a> &#8250; </span>
            <span class="pathname" aria-label="<?php echo $lang['asset_17'] ?>"
              ><?php echo $lang['asset_75'] ?></span
            >
          </p>
        </div>
        <hr class="reveal" role="separator" />
        <!-- PRESS MATERIALS GRID START -->
        <div class="reveal" id="gallery-press">
          <!-- BRAND GUIDE START -->
          <div
            class="gallery-item"
            role="region"
            aria-labelledby="brandGuideHeading"
          >
            <h2 id="brandGuideHeading">Brand Guide</h2>
            <a
              class="gallery-item"
              href="/assets/brand-guide.pdf"
              target="_blank"
            >
              <div class="grid-item" id="brand-guide">
                <div class="blur">
                  <span aria-label="<?php echo $lang['asset_84'] ?>">
                    <p>
                      <?php echo $lang['asset_84'] ?><i
                        class="fa-solid fa-arrow-right"
                      ></i>
                    </p>
                  </span>
                </div>
              </div>
            </a>
            <p aria-label="<?php echo $lang['asset_78'] ?>">
              <?php echo $lang['asset_78'] ?>
            </p>
          </div>
          <!-- BRAND GUIDE END -->
          <!-- CREDIT GUIDE START -->
          <div
            class="gallery-item"
            role="region"
            aria-labelledby="creditGuideHeading"
          >
            <h2 id="creditGuideHeading">Credit Guide</h2>
            <a
              class="gallery-item"
              href="/assets/credit-guide.pdf"
              target="_blank"
            >
              <div class="grid-item" id="credit-guide">
                <div class="blur">
                  <span aria-label="<?php echo $lang['asset_84'] ?>">
                    <p>
                      <?php echo $lang['asset_84'] ?><i
                        class="fa-solid fa-arrow-right"
                      ></i>
                    </p>
                  </span>
                </div>
              </div>
            </a>
            <p aria-label="<?php echo $lang['asset_80'] ?>">
              <?php echo $lang['asset_80'] ?>
            </p>
          </div>
          <!-- CREDIT GUIDE END -->
          <!-- PRESS KIT START -->
          <div
            class="gallery-item"
            role="region"
            aria-labelledby="pressKitHeading"
          >
            <h2 id="pressKitHeading">Press Kit</h2>
            <a
              class="gallery-item"
              href="/assets/press-kit.zip"
              target="_blank"
            >
              <div class="grid-item" id="press-kit">
                <div class="blur">
                  <span aria-label="<?php echo $lang['asset_83'] ?>">
                    <p>
                      <?php echo $lang['asset_83'] ?><i
                        class="fa-solid fa-arrow-right"
                      ></i>
                    </p>
                  </span>
                </div>
              </div>
            </a>
            <p aria-label="<?php echo $lang['asset_82'] ?>">
              <?php echo $lang['asset_82'] ?>
            </p>
          </div>
          <!-- PRESS KIT END -->
        </div>
        <!-- PRESS MATERIALS GRID END -->
      </article>
    </main>
    <!-- FOOTER START -->
    <?php
    $IPATH = $_SERVER['DOCUMENT_ROOT'] . '/assets/components/';
    include $IPATH . 'footer.php';
    ?>
    <script
      type="text/javascript"
      src="/assets/cookies.js"
      defer
      role="script"
    ></script>
    <!-- FOOTER END -->
  </body>
</html>
