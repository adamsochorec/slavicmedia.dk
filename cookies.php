<?php include 'languages/config.php'; ?>
<!DOCTYPE html>
<html lang="<?php echo $_SESSION['lang'] ?>">
  <head>
    <?php
    $IPATH = $_SERVER['DOCUMENT_ROOT'] . '/assets/components/';
    include $IPATH . 'head.php';
    ?>
    <meta name="description" content="<?php echo $lang['asset_225'] ?>" />
    <!-- <meta name="keywords" content="<?php echo $lang['asset_219'] ?>" /> -->
    <title><?php echo $lang['asset_231'] ?> | Slavic Media</title>
  </head>
  <body id="privacy">
    <!-- HEADER START -->
    <?php
    $IPATH = $_SERVER['DOCUMENT_ROOT'] . '/assets/components/';
    include $IPATH . 'nav-bar.php';
    ?>
    <!-- HEADER END -->
    <main>
      <article class="wrapper-standard">
        <div class="pathname-container"></div>
        <h1 class="reveal">
          <?php echo $lang['asset_231'] ?>
          <i class="fa-solid fa-cookie-bite"></i>
        </h1>
        <div class="pathname-container reveal">
          <p>
            <span class="pathname"><a href="/"></a> &#8250; </span>
            <span class="pathname"
              ><a href="/#<?php echo $lang['asset_232'] ?>"
                ><?php echo $lang['asset_232'] ?></a
              >
            </span>
          </p>
        </div>
        <hr class="reveal" role="separator" />
        <section>
          <h2 class="reveal">Introduction</h2>
          <p class="reveal">
            <?php echo $lang['asset_269'] ?>
          </p>
        </section>
        <hr class="semi" role="separator" />
        <section>
          <h2 class="reveal"><?php echo $lang['asset_271'] ?>?</h2>
          <p class="reveal"><?php echo $lang['asset_270'] ?></p>
        </section>
        <hr class="semi" role="separator" />

        <section>
          <h2 class="reveal"><?php echo $lang['asset_272'] ?>?</h2>
          <p class="reveal">
            <?php echo $lang['asset_273'] ?>
          </p>
          <ul>
            <li class="reveal">
              <?php echo $lang['asset_274'] ?>
              <a
                target="_blank"
                rel="noopener noreferrer nofollow"
                href="https://policies.google.com/privacy"
                ><?php echo $lang['asset_275'] ?></a
              >.
            </li>
          </ul>
        </section>
        <hr class="semi" role="separator" />
        <section>
          <h2 class="reveal"><?php echo $lang['asset_276'] ?></h2>
          <p class="reveal">
            <?php echo $lang['asset_277'] ?>
          </p>
        </section>
        <hr class="semi" role="separator" />
        <section>
          <h2 class="reveal"><?php echo $lang['asset_278'] ?></h2>
          <p class="reveal">
            <?php echo $lang['asset_279'] ?>
            <a href="mailto:contact@slavicmedia.dk">contact@slavicmedia.dk</a>
          </p>
        </section>
        <hr class="reveal" role="separator" />
      </article>
    </main>
    <!-- FOOTER START -->
    <?php
    $IPATH = $_SERVER['DOCUMENT_ROOT'] . '/assets/components/';
    include $IPATH . 'footer.php';
    ?><script
    type="text/javascript"
    src="/assets/cookies.js"
    defer
    role="script"
    ></script>
    <!-- FOOTER END -->
  </body>
</html>
