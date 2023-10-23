<?php include 'assets/php/config.php'; ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <?php
    $IPATH = $_SERVER['DOCUMENT_ROOT'] . '/assets/php/';
    include $IPATH . 'global-head.php';
    ?>
    <meta name="description" content="<?php echo $lang['asset_41'] ?>" />
    <meta name="keywords" content="<?php echo $lang['asset_42'] ?>" />
    <title>Press | Slavic Media</title>
  </head>
  <body id="press">
    <!-- HEADER START -->
    <?php
    $IPATH = $_SERVER['DOCUMENT_ROOT'] . '/assets/php/';
    include $IPATH . 'global-nav-bar.php';
    ?>
    <!-- HEADER END -->
    <main>
      <article class="wrapper-wide">
        <div class="pathname-container"></div>
        <div class="grid-container fifty-fifty">
          <div class="grid-item">
            <h2 class="highlited reveal"><?php echo $lang['asset_74'] ?></h2>
            <h1 class="reveal"><?php echo $lang['asset_75'] ?></h1>
            <div class="pathname-container reveal">
              <p>
                <span class="pathname"><a href="/"></a> &#8250; </span>
                <span class="pathname"><?php echo $lang['asset_75'] ?></span>
              </p>
            </div>
          </div>
          <div class="grid-item reveal">
            <p>
              <?php echo $lang['asset_76'] ?>
            </p>
          </div>
        </div>
        <hr class="reveal" />
        <!-- PRESSS MATERIALS GRID START -->
        <div class="grid-container gallery reveal">
          <!-- BRAND GUIDE START -->
          <div>
            <h3>
              <?php echo $lang['asset_77'] ?>
            </h3>
            <a
              class="gallery-item"
              href="/assets/brand-guide.pdf"
              target="_blank"
              rel="noopener noreferrer"
            >
              <div class="grid-item" id="brand-guide">
                <div class="blur">
                  <span>
                    <?php echo $lang['asset_84'] ?>
                    &#8250;</span
                  >
                </div>
              </div>
            </a>
            <p><?php echo $lang['asset_78'] ?></p>
          </div>
          <!-- BRAND GUIDE END -->
          <!-- CREDIT GUIDE START -->
          <div>
            <h3><?php echo $lang['asset_79'] ?></h3>
            <a
              class="gallery-item"
              href="/assets/credit-guide.pdf"
              target="_blank"
              rel="noopener noreferrer"
            >
              <div class="grid-item" id="credit-guide">
                <div class="blur">
                  <span>
                    <?php echo $lang['asset_84'] ?>
                    &#8250;</span
                  >
                </div>
              </div>
            </a>
            <p>
              <?php echo $lang['asset_80'] ?>
            </p>
          </div>
          <!-- CREDIT GUIDE END -->
          <!-- PRESS KIT START -->
          <div>
            <h3><?php echo $lang['asset_81'] ?></h3>
            <a
              class="gallery-item"
              href="/assets/press-kit.zip"
              target="_blank"
              rel="noopener noreferrer"
            >
              <div class="grid-item" id="press-kit">
                <div class="blur">
                  <span>
                    <?php echo $lang['asset_83'] ?>
                    &#8250;</span
                  >
                </div>
              </div>
            </a>
            <p>
              <?php echo $lang['asset_82'] ?>
            </p>
          </div>
        </div>
        <!-- PRESS KIT END -->
        <!-- PRESSS MATERIALS GRID END -->
      </article>
    </main>
    <!-- FOOTER START -->
    <?php
    $IPATH = $_SERVER['DOCUMENT_ROOT'] . '/assets/php/';
    include $IPATH . 'global-footer.php';
    ?>
    <!-- FOOTER END -->
  </body>
</html>
