<?php include '/assets/php/config.php'; ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <?php
    $IPATH = $_SERVER['DOCUMENT_ROOT'] . '/assets/php/';
    include $IPATH . 'global-head.php';
    ?>
    <meta name="description" content="<?php echo $lang['asset_41'] ?>" />
    <meta name="keywords" content="<?php echo $lang['asset_42'] ?>" />
    <title>Photo Services | Slavic Media</title>
  </head>
  <body class="services" id="photography">
    <!-- HEADER START -->
    <?php
    $IPATH = $_SERVER['DOCUMENT_ROOT'] . '/assets/php/';
    include $IPATH . 'global-nav-bar.php';
    ?>
    <!-- HEADER END -->
    <main>
      <article class="wrapper-wide">
        <hr class="reveal" style="opacity: 0" />
        <h1 class="reveal"><?php echo $lang['asset_105'] ?></h1>
        <hr class="reveal" />
        <!-- PORTRAIT START -->
        <div class="grid-container fifty-fifty">
          <div class="grid-item">
            <img src="/img/2021-04-25-00693.jpg" class="reveal" />
          </div>
          <div class="grid-item text-container">
            <section>
              <h3 class="highlited reveal"><?php echo $lang['asset_108'] ?></h3>
              <h2 class="reveal">
                <?php echo $lang['asset_110'] ?>
              </h2>
              <p class="reveal">
                <?php echo $lang['asset_112'] ?><br />
                <a class="reveal" href="/portfolio#travel"
                  ><?php echo $lang['asset_115'] ?></a
                >
              </p>
            </section>
          </div>
        </div>
        <!-- PORTRAIT END -->
        <!-- EVENT START -->
        <div class="grid-container fifty-fifty">
          <div class="grid-item text-container">
            <section>
              <h3 class="highlited reveal"><?php echo $lang['asset_108'] ?></h3>
              <h2 class="reveal">
                <?php echo $lang['asset_107'] ?>
              </h2>
              <p class="reveal">
                <?php echo $lang['asset_109'] ?><br />
                <a class="reveal" href="/portfolio#event"
                  ><?php echo $lang['asset_113'] ?></a
                >
              </p>
            </section>
          </div>
          <div class="grid-item">
            <img src="/img/2023-02-10-08469.jpg" class="reveal" />
          </div>
        </div>
        <!-- EVENT END -->
        <!-- TRAVEL START -->
        <div class="grid-container fifty-fifty">
          <div class="grid-item">
            <img src="/img/2022-12-08-01181.jpg" class="reveal" />
          </div>
          <div class="grid-item text-container">
            <section>
              <h3 class="highlited reveal"><?php echo $lang['asset_108'] ?></h3>
              <h2 class="reveal">
                <?php echo $lang['asset_85'] ?>
              </h2>
              <p class="reveal">
                <?php echo $lang['asset_109'] ?><br />
                <a class="reveal" href="/portfolio#travel"
                  ><?php echo $lang['asset_114'] ?></a
                >
              </p>
            </section>
          </div>
        </div>
        <!-- TRAVEL END -->

        <hr class="reveal" />
        <!-- PACKAGES START -->
        <div class="grid-container fifty-fifty">
          <div class="grid-item">
            <h2 class="highlited reveal">Our packages</h2>
            <h3 class="reveal">Book our affordable packages today</h3>
          </div>
          <div class="grid-item reveal">
            <p class="reveal">
              Capture your special moments with our transparent pricing options.
              No hidden fees and affordable rates tailored to fit your
              photography needs.
            </p>
          </div>
        </div>
        <hr style="opacity: 0" />
        <div class="grid-container gallery reveal">
          <div>
            <div class="grid-item">
              <div class="gallery-item-wrapper">
                <h4>Essential</h4>
                <h5>2.000 DKK excl. moms</h5>
                <h6>The Highlights Package</h6>
                <ul>
                  <li>2 hours of photography</li>
                  <li>10 edited digital images</li>
                  <li>Highlights of the event</li>
                </ul>
              </div>
            </div>
            <p>
              This package is ideal for events with a limited budget or that
              only require a few hours of coverage. It is also a good option for
              events where the focus is on the speakers or performers rather
              than the guests.
            </p>
          </div>
          <div>
            <div class="grid-item">
              <div class="gallery-item-wrapper">
                <h4>Standard</h4>
                <h5>4.000 DKK excl. moms</h5>
                <h6>The In-Depth Package</h6>
                <ul>
                  <li>4 hours of photography</li>
                  <li>More in-depth coverage of the event</li>
                  <li>1-hour free pre-production meeting online or offline</li>
                  <li>1 revision</li>
                </ul>
              </div>
            </div>
            <p>
              This package is a good option for events with a moderate budget or
              that require more in-depth coverage. It is also a good option for
              events where the focus is on both the speakers or performers and
              the guests.
            </p>
          </div>
          <div>
            <div class="grid-item">
              <div class="gallery-item-wrapper">
                <h4>Elite</h4>
                <h5>13.000 DKK excl. moms</h5>
                <h6>The Full Coverage Package</h6>
                <ul>
                  <li>8+ hours of photography</li>
                  <li>30+ edited digital images</li>
                  <li>Full coverage of the event, from start to finish</li>
                  <li>2-5min event video showcasing the entire event</li>
                  <li>Free of credit policy</li>
                  <li>Up to 3 revisions</li>
                  <li>Free pre-production meeting online or offline</li>
                </ul>
              </div>
            </div>
            <p>
              This package is ideal for events with a large budget or that
              require full coverage from start to finish. It is also a good
              option for events where the focus is on capturing the unique
              spirit of the event.
            </p>
            <!-- PACKAGES START -->
          </div>
        </div>
        <hr style="opacity: 0" />
        <div class="btn-area flex-center reveal">
          <a id="btn">CTA</a>
          <div class="btn-shadow"></div>
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
