<?php include 'assets/php/config.php'; ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <?php
    $IPATH = $_SERVER['DOCUMENT_ROOT'] . '/assets/php/';
    include $IPATH . 'global-head.php';
    ?>
    <meta name="description" content="<?php echo $lang['meta_desc'] ?>" />
    <meta name="keywords" content="<?php echo $lang['meta_keywords'] ?>" />
    <title>Slavic Media</title>
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
        <h1><?php echo $lang['press'] ?></h1>
        <hr />
        <div class="grid-container gallery reveal">
          <div>
            <h2>
              <?php echo $lang['brandingguide_title'] ?>
            </h2>
            <a
              href="/assets/branding-guide.pdf"
              target="_blank"
              rel="noopener noreferrer"
            >
              <div class="grid-item" id="branding-guide">
                <div class="blur">
                  <span>
                    <?php echo $lang['preview'] ?>
                    &#8250;</span
                  >
                </div>
              </div>
            </a>
            <p><?php echo $lang['brandingguide_desc'] ?></p>
          </div>
          <div>
            <h2><?php echo $lang['creditguide_title'] ?></h2>
            <a
              href="/assets/credit-guide.pdf"
              target="_blank"
              rel="noopener noreferrer"
            >
              <div class="grid-item" id="credit-guide">
                <div class="blur">
                  <span>
                    <?php echo $lang['preview'] ?>
                    &#8250;</span
                  >
                </div>
              </div>
            </a>
            <p>
              <?php echo $lang['creditguide_desc'] ?>
            </p>
          </div>
          <div>
            <h2><?php echo $lang['presskit_title'] ?></h2>
            <a
              href="/assets/press-kit.zip"
              target="_blank"
              rel="noopener noreferrer"
            >
              <div class="grid-item" id="press-kit">
                <div class="blur">
                  <span>
                    <?php echo $lang['download'] ?>
                    &#8250;</span
                  >
                </div>
              </div>
            </a>
            <p>
              <?php echo $lang['presskit_desc'] ?>
            </p>
          </div>
        </div>
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
