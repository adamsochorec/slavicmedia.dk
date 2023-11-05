<?php
    $IPATH = $_SERVER['DOCUMENT_ROOT'] . '/assets/php/';
    include $IPATH . 'config.php';
    ?>
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
        <hr class="semi" />
        <h1 class="reveal"><?php echo $lang['asset_105'] ?></h1>

        <div class="pathname-container reveal">
          <p>
            <span class="pathname"><a href="/"></a> &#8250; </span>
            <span class="pathname"
              ><a href="/#<?php echo $lang['asset_101'] ?>"></a>
              &#8250;
            </span>
            <span class="pathname"><?php echo $lang['asset_11'] ?></span>
          </p>
        </div>
        <hr class="reveal" />
        <!-- PORTRAIT START -->
        <div class="grid-container services-grid">
          <div class="grid-item reveal">
            <h3 class="highlited hideHeading-min">
              <?php echo $lang['asset_108'] ?>
            </h3>
            <h2 class="hideHeading-min">
              <?php echo $lang['asset_110'] ?>
            </h2>
            <img src="/img/2021-04-25-00693.jpg" alt="Portrait Cover" />
          </div>
          <div class="grid-item text-container reveal">
            <section>
              <h3 class="highlited hideHeading-max">
                <?php echo $lang['asset_108'] ?>
              </h3>
              <h2 class="hideHeading-max">
                <?php echo $lang['asset_110'] ?>
              </h2>
              <p>
                <?php echo $lang['asset_112'] ?>
              </p>
              <br />
              <div>
                <a
                  class="cta reveal"
                  href="/portfolio#<?php echo $lang['asset_110'] ?>"
                  ><?php echo $lang['asset_114'] ?>
                </a>
              </div>
            </section>
          </div>
          <!-- PORTRAIT END -->
          <!-- EVENT START -->
          <div class="grid-item reveal">
            <h3 class="highlited hideHeading-min">
              <?php echo $lang['asset_108'] ?>
            </h3>
            <h2 class="hideHeading-min">
              <?php echo $lang['asset_107'] ?>
            </h2>
            <img src="/img/2023-02-10-08469.jpg" alt="Event Cover" />
          </div>
          <div class="grid-item text-container reveal">
            <section>
              <h3 class="highlited hideHeading-max">
                <?php echo $lang['asset_108'] ?>
              </h3>
              <h2 class="hideHeading-max">
                <?php echo $lang['asset_107'] ?>
              </h2>
              <p>
                <?php echo $lang['asset_109'] ?>
              </p>
              <br />
              <div>
                <a
                  class="cta"
                  href="/portfolio#<?php echo $lang['asset_107'] ?>"
                  ><?php echo $lang['asset_113'] ?>
                </a>
              </div>
            </section>
          </div>
          <!-- EVENT END -->
          <!-- TRAVEL START -->
          <div class="grid-item">
            <h3 class="highlited hideHeading-min reveal">
              <?php echo $lang['asset_108'] ?>
            </h3>
            <h2 class="hideHeading-min reveal">
              <?php echo $lang['asset_85'] ?>
            </h2>
            <img
              src="/img/2022-12-08-01181.jpg"
              class="reveal"
              alt="Travel Cover"
            />
          </div>
          <div class="grid-item text-container">
            <section>
              <h3 class="highlited hideHeading-max reveal">
                <?php echo $lang['asset_108'] ?>
              </h3>
              <h2 class="hideHeading-max reveal">
                <?php echo $lang['asset_85'] ?>
              </h2>
              <p class="reveal">
                <?php echo $lang['asset_109'] ?>
              </p>
              <br />
              <div class="reveal">
                <a class="cta" href="/portfolio#<?php echo $lang['asset_85'] ?>"
                  ><?php echo $lang['asset_115'] ?>
                </a>
              </div>
            </section>
          </div>
        </div>
        <!-- TRAVEL END -->

        <hr class="reveal" />
        <!-- PACKAGES START -->
        <h3 class="reveal">
          Our packages &
          <span class="highlited tuscher">Prices</span>
        </h3>
        <p class="reveal">
          Capture your special moments with our transparent pricing options. No
          hidden fees and affordable rates tailored to fit your photography
          needs.
        </p>
        <hr class="semi" />

        <div class="tabset reveal">
          <!-- Tab 1 -->
          <input
            type="radio"
            name="tabset"
            id="tab1"
            aria-controls="portrait"
            checked
          />
          <label for="tab1"
            ><h4><?php echo $lang['asset_110'] ?></h4></label
          >
          <!-- Tab 2 -->
          <input type="radio" name="tabset" id="tab2" aria-controls="event" />
          <label for="tab2"
            ><h4><?php echo $lang['asset_107'] ?></h4></label
          >
          <!-- Tab 3 -->
          <input type="radio" name="tabset" id="tab3" aria-controls="travel" />
          <label for="tab3"
            ><h4><?php echo $lang['asset_88'] ?></h4></label
          >
          <div class="tab-panels">
            <!-- PORTRAIT PACKAGES START -->
            <section id="portrait" class="tab-panel">
              <div class="grid-container gallery reveal">
                <div class="grid-item flip-card" id="essential">
                  <div class="flip-card-inner">
                    <div class="flip-card-front">
                      <h4>
                        <i class="fa-solid fa-circle-info"></i>&nbsp;
                        <?php echo $lang['asset_110'] ?>
                        Essential
                      </h4>
                      <h5>2.000 DKK excl. moms</h5>
                      <h6>The Highlights Package</h6>
                      <ul>
                        <li>2 hours of photography</li>
                        <li>10 edited digital images</li>
                        <li>Highlights of the event</li>
                      </ul>
                    </div>
                    <div class="flip-card-back">
                      <h4>
                        <i class="fa-solid fa-circle-info"></i>&nbsp;
                        <?php echo $lang['asset_110'] ?>
                        Essential
                      </h4>
                      <p>
                        This package is ideal for events with a limited budget
                        or that only require a few hours of coverage. It is also
                        a good option for events where the focus is on the
                        speakers or performers rather than the guests.
                      </p>
                    </div>
                  </div>
                </div>
                <div class="grid-item flip-card" id="core">
                  <div class="flip-card-inner">
                    <div class="flip-card-front">
                      <h4>
                        <i class="fa-solid fa-circle-info"></i>&nbsp;
                        <?php echo $lang['asset_110'] ?>
                        Core
                      </h4>
                      <h5>4.000 DKK excl. moms</h5>
                      <h6>The In-Depth Package</h6>
                      <ul>
                        <li>4 hours of photography</li>
                        <li>More in-depth coverage of the event</li>
                        <li>
                          1-hour free pre-production meeting online or offline
                        </li>
                        <li>1 revision</li>
                      </ul>
                    </div>
                    <div class="flip-card-back">
                      <h4>
                        <i class="fa-solid fa-circle-info"></i>&nbsp;
                        <?php echo $lang['asset_110'] ?>
                        Core
                      </h4>
                      <p>
                        This package is a good option for events with a moderate
                        budget or that require more in-depth coverage. It is
                        also a good option for events where the focus is on both
                        the speakers or performers and the guests.
                      </p>
                    </div>
                  </div>
                </div>
                <div class="grid-item flip-card" id="elite">
                  <div class="flip-card-inner">
                    <div class="flip-card-front">
                      <h4>
                        <i class="fa-solid fa-circle-info"></i>&nbsp;
                        <?php echo $lang['asset_110'] ?>
                        Elite
                      </h4>
                      <h5>13.000 DKK excl. moms</h5>
                      <h6>The Full Coverage Package</h6>
                      <ul>
                        <li>8+ hours of photography</li>
                        <li>30+ edited digital images</li>
                        <li>
                          Full coverage of the event, from start to finish
                        </li>
                        <li>2-5min event video showcasing the entire event</li>
                        <li>Free of credit policy</li>
                        <li>Up to 3 revisions</li>
                        <li>Free pre-production meeting online or offline</li>
                      </ul>
                    </div>
                    <div class="flip-card-back">
                      <h4>
                        <i class="fa-solid fa-circle-info"></i>&nbsp;
                        <?php echo $lang['asset_110'] ?>
                        Elite
                      </h4>
                      <p>
                        This package is ideal for events with a large budget or
                        that require full coverage from start to finish. It is
                        also a good option for events where the focus is on
                        capturing the unique spirit of the event.
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </section>
            <!-- PORTRAIT PACKAGES END -->

            <!-- EVENT PACKAGES START -->
            <section id="event" class="tab-panel">
              <div class="grid-container gallery reveal">
                <div class="grid-item flip-card" id="essential">
                  <div class="flip-card-inner">
                    <div class="flip-card-front">
                      <h4>
                        <i class="fa-solid fa-circle-info"></i>&nbsp;
                        <?php echo $lang['asset_107'] ?>
                        Essential
                      </h4>
                      <h5>2.000 DKK excl. moms</h5>
                      <h6>The Highlights Package</h6>
                      <ul>
                        <li>2 hours of photography</li>
                        <li>10 edited digital images</li>
                        <li>Highlights of the event</li>
                      </ul>
                    </div>
                    <div class="flip-card-back">
                      <h4>
                        <i class="fa-solid fa-circle-info"></i>&nbsp;
                        <?php echo $lang['asset_107'] ?>
                        Essential
                      </h4>
                      <p>
                        This package is ideal for events with a limited budget
                        or that only require a few hours of coverage. It is also
                        a good option for events where the focus is on the
                        speakers or performers rather than the guests.
                      </p>
                    </div>
                  </div>
                </div>
                <div class="grid-item flip-card" id="core">
                  <div class="flip-card-inner">
                    <div class="flip-card-front">
                      <h4>
                        <i class="fa-solid fa-circle-info"></i>&nbsp;
                        <?php echo $lang['asset_107'] ?>
                        Core
                      </h4>
                      <h5>4.000 DKK excl. moms</h5>
                      <h6>The In-Depth Package</h6>
                      <ul>
                        <li>4 hours of photography</li>
                        <li>More in-depth coverage of the event</li>
                        <li>
                          1-hour free pre-production meeting online or offline
                        </li>
                        <li>1 revision</li>
                      </ul>
                    </div>
                    <div class="flip-card-back">
                      <h4>
                        <i class="fa-solid fa-circle-info"></i>&nbsp;
                        <?php echo $lang['asset_107'] ?>
                        Core
                      </h4>
                      <p>
                        This package is a good option for events with a moderate
                        budget or that require more in-depth coverage. It is
                        also a good option for events where the focus is on both
                        the speakers or performers and the guests.
                      </p>
                    </div>
                  </div>
                </div>
                <div class="grid-item flip-card" id="elite">
                  <div class="flip-card-inner">
                    <div class="flip-card-front">
                      <h4>
                        <i class="fa-solid fa-circle-info"></i>&nbsp;
                        <?php echo $lang['asset_107'] ?>
                        Elite
                      </h4>
                      <h5>13.000 DKK excl. moms</h5>
                      <h6>The Full Coverage Package</h6>
                      <ul>
                        <li>8+ hours of photography</li>
                        <li>30+ edited digital images</li>
                        <li>
                          Full coverage of the event, from start to finish
                        </li>
                        <li>2-5min event video showcasing the entire event</li>
                        <li>Free of credit policy</li>
                        <li>Up to 3 revisions</li>
                        <li>Free pre-production meeting online or offline</li>
                      </ul>
                    </div>
                    <div class="flip-card-back">
                      <h4>
                        <i class="fa-solid fa-circle-info"></i>&nbsp;
                        <?php echo $lang['asset_107'] ?>
                        Elite
                      </h4>
                      <p>
                        This package is ideal for events with a large budget or
                        that require full coverage from start to finish. It is
                        also a good option for events where the focus is on
                        capturing the unique spirit of the event.
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </section>
            <!-- EVENT PACKAGES END -->
            <!-- TRAVEL PACKAGES START -->
            <section id="travel" class="tab-panel">
              <div class="grid-container gallery reveal">
                <div class="grid-item flip-card" id="essential">
                  <div class="flip-card-inner">
                    <div class="flip-card-front">
                      <h4>
                        <i class="fa-solid fa-circle-info"></i>&nbsp;
                        <?php echo $lang['asset_85'] ?>
                        Essential
                      </h4>
                      <h5>2.000 DKK excl. moms</h5>
                      <h6>The Highlights Package</h6>
                      <ul>
                        <li>2 hours of photography</li>
                        <li>10 edited digital images</li>
                        <li>Highlights of the event</li>
                      </ul>
                    </div>
                    <div class="flip-card-back">
                      <h4>
                        <i class="fa-solid fa-circle-info"></i>&nbsp;
                        <?php echo $lang['asset_85'] ?>
                        Essential
                      </h4>
                      <p>
                        This package is ideal for events with a limited budget
                        or that only require a few hours of coverage. It is also
                        a good option for events where the focus is on the
                        speakers or performers rather than the guests.
                      </p>
                    </div>
                  </div>
                </div>
                <div class="grid-item flip-card" id="core">
                  <div class="flip-card-inner">
                    <div class="flip-card-front">
                      <h4>
                        <i class="fa-solid fa-circle-info"></i>&nbsp;
                        <?php echo $lang['asset_85'] ?>
                        Core
                      </h4>
                      <h5>4.000 DKK excl. moms</h5>
                      <h6>The In-Depth Package</h6>
                      <ul>
                        <li>4 hours of photography</li>
                        <li>More in-depth coverage of the event</li>
                        <li>
                          1-hour free pre-production meeting online or offline
                        </li>
                        <li>1 revision</li>
                      </ul>
                    </div>
                    <div class="flip-card-back">
                      <h4>
                        <i class="fa-solid fa-circle-info"></i>&nbsp;
                        <?php echo $lang['asset_85'] ?>
                        Core
                      </h4>
                      <p>
                        This package is a good option for events with a moderate
                        budget or that require more in-depth coverage. It is
                        also a good option for events where the focus is on both
                        the speakers or performers and the guests.
                      </p>
                    </div>
                  </div>
                </div>
                <div class="grid-item flip-card" id="elite">
                  <div class="flip-card-inner">
                    <div class="flip-card-front">
                      <h4>
                        <i class="fa-solid fa-circle-info"></i>&nbsp;
                        <?php echo $lang['asset_85'] ?>
                        Elite
                      </h4>
                      <h5>13.000 DKK excl. moms</h5>
                      <h6>The Full Coverage Package</h6>
                      <ul>
                        <li>8+ hours of photography</li>
                        <li>30+ edited digital images</li>
                        <li>
                          Full coverage of the event, from start to finish
                        </li>
                        <li>2-5min event video showcasing the entire event</li>
                        <li>Free of credit policy</li>
                        <li>Up to 3 revisions</li>
                        <li>Free pre-production meeting online or offline</li>
                      </ul>
                    </div>
                    <div class="flip-card-back">
                      <h4>
                        <i class="fa-solid fa-circle-info"></i>&nbsp;
                        <?php echo $lang['asset_85'] ?>
                        Elite
                      </h4>
                      <p>
                        This package is ideal for events with a large budget or
                        that require full coverage from start to finish. It is
                        also a good option for events where the focus is on
                        capturing the unique spirit of the event.
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </section>
            <!-- TRAVEL PACKAGES END -->
          </div>
        </div>
        <!-- PACKAGES END -->
        <hr class="reveal" />
        <!-- GRAPHIC START -->

        <div class="grid-container features-grid">
          <div class="grid-item">
            <lottie-player
              id="graphicdesignLottie"
              src="/assets/lottie/graphicdesign.json"
              background="transparent"
              speed="1"
              autoplay
              loop
            ></lottie-player>
            <h4>Lorem ipsum dolor sit amet</h4>
          </div>
          <div class="grid-item">
            <lottie-player
              id="graphicdesignLottie"
              src="/assets/lottie/graphicdesign.json"
              background="transparent"
              speed="1"
              autoplay
              loop
            ></lottie-player>
            <h4>Lorem ipsum sit amet</h4>
          </div>
          <div class="grid-item">
            <lottie-player
              id="graphicdesignLottie"
              src="/assets/lottie/graphicdesign.json"
              background="transparent"
              speed="1"
              autoplay
              loop
            ></lottie-player>
            <h4>Lorem ipsum dolor sit amet</h4>
          </div>
          <div class="grid-item">
            <lottie-player
              id="graphicdesignLottie"
              src="/assets/lottie/graphicdesign.json"
              background="transparent"
              speed="1"
              autoplay
              loop
            ></lottie-player>
            <h4>Lorem ipsum dolor sit amet</h4>
          </div>
          <div class="grid-item">
            <lottie-player
              id="graphicdesignLottie"
              src="/assets/lottie/graphicdesign.json"
              background="transparent"
              speed="1"
              autoplay
              loop
            ></lottie-player>
            <h4>Lorem ipsum dolor sit amet</h4>
          </div>
          <div class="grid-item">
            <lottie-player
              id="graphicdesignLottie"
              src="/assets/lottie/graphicdesign.json"
              background="transparent"
              speed="1"
              autoplay
              loop
            ></lottie-player>
            <h4>Lorem ipsum dolor sit amet</h4>
          </div>
        </div>
        <!-- GRAPHIC END -->
      </article>
      <!-- LETS TALK START  

      <article class="wrapper-standard">
        <div class="grid-container fifty-fifty" id="letstalk">
          
      </article>
      <!-- LETS TALK END  -->
    </main>
    <!-- FOOTER START -->
    <?php
    $IPATH = $_SERVER['DOCUMENT_ROOT'] . '/assets/php/';
    include $IPATH . 'global-footer.php';
    ?>
    <!-- FOOTER END -->
  </body>
</html>
