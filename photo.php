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
        <hr class="reveal" style="opacity: 0" />
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
          <div class="grid-item">
            <h3 class="highlited hideHeading-min reveal">
              <?php echo $lang['asset_108'] ?>
            </h3>
            <h2 class="hideHeading-min reveal">
              <?php echo $lang['asset_110'] ?>
            </h2>
            <img src="/img/2021-04-25-00693.jpg" class="reveal" />
          </div>
          <div class="grid-item text-container">
            <section>
              <h3 class="highlited hideHeading-max reveal">
                <?php echo $lang['asset_108'] ?>
              </h3>
              <h2 class="hideHeading-max reveal">
                <?php echo $lang['asset_110'] ?>
              </h2>
              <p class="reveal">
                <?php echo $lang['asset_112'] ?>
              </p>
              <br />
              <div class="reveal">
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
          <div class="grid-item">
            <h3 class="highlited hideHeading-min reveal">
              <?php echo $lang['asset_108'] ?>
            </h3>
            <h2 class="hideHeading-min reveal">
              <?php echo $lang['asset_107'] ?>
            </h2>
            <img src="/img/2023-02-10-08469.jpg" class="reveal" />
          </div>
          <div class="grid-item text-container">
            <section>
              <h3 class="highlited hideHeading-max reveal">
                <?php echo $lang['asset_108'] ?>
              </h3>
              <h2 class="hideHeading-max reveal">
                <?php echo $lang['asset_107'] ?>
              </h2>
              <p class="reveal">
                <?php echo $lang['asset_109'] ?>
              </p>
              <br />
              <div class="reveal">
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
            <img src="/img/2022-12-08-01181.jpg" class="reveal" />
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
        <hr style="opacity: 0" />

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
      </article>
      <!-- LETS TALK START  

      <article class="wrapper-standard">
        <div class="grid-container fifty-fifty" id="letstalk">
          <div class="grid-item">
            <h3 class="reveal">
              <span class="highlited tuscher">Interested?</span
              ><span>&nbsp;Lets talk!</span>
            </h3>
            <div class="profile">
              <h4 class="reveal">Adam Sochorec 🇨🇿</h4>
              <h5 class="reveal">
                <?php echo $lang['asset_30'] ?>
              </h5>
              <p class="reveal">
                <a href="tel:+4550104776">+45 50 10 47 76</a>
              </p>
              <p class="reveal">
                <a href="mailto:adam@slavicmedia.dk">adam@slavicmedia.dk</a>
              </p>
              <div class="social-icons reveal">
                <a
                  href="https://www.linkedin.com/in/adamsochorec"
                  target="_blank"
                  rel="noopener noreferrer"
                >
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    xmlns:xlink="http://www.w3.org/1999/xlink"
                    version="1.1"
                    viewBox="0 0 382 382"
                    xml:space="preserve"
                  >
                    <path
                      d="M347.445,0H34.555C15.471,0,0,15.471,0,34.555v312.889C0,366.529,15.471,382,34.555,382h312.889  C366.529,382,382,366.529,382,347.444V34.555C382,15.471,366.529,0,347.445,0z M118.207,329.844c0,5.554-4.502,10.056-10.056,10.056  H65.345c-5.554,0-10.056-4.502-10.056-10.056V150.403c0-5.554,4.502-10.056,10.056-10.056h42.806  c5.554,0,10.056,4.502,10.056,10.056V329.844z M86.748,123.432c-22.459,0-40.666-18.207-40.666-40.666S64.289,42.1,86.748,42.1  s40.666,18.207,40.666,40.666S109.208,123.432,86.748,123.432z M341.91,330.654c0,5.106-4.14,9.246-9.246,9.246H286.73  c-5.106,0-9.246-4.14-9.246-9.246v-84.168c0-12.556,3.683-55.021-32.813-55.021c-28.309,0-34.051,29.066-35.204,42.11v97.079  c0,5.106-4.139,9.246-9.246,9.246h-44.426c-5.106,0-9.246-4.14-9.246-9.246V149.593c0-5.106,4.14-9.246,9.246-9.246h44.426  c5.106,0,9.246,4.14,9.246,9.246v15.655c10.497-15.753,26.097-27.912,59.312-27.912c73.552,0,73.131,68.716,73.131,106.472  L341.91,330.654L341.91,330.654z"
                    />
                  </svg>
                </a>
                <a
                  href="https://www.instagram.com/adamsochorec/"
                  target="_blank"
                  rel="noopener noreferrer"
                >
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                    <path
                      d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z"
                    />
                  </svg>
                </a>
                <a
                  target="_blank"
                  rel="noopener noreferrer"
                  href="https://www.adamsochorec.com"
                >
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    xmlns:xlink="http://www.w3.org/1999/xlink"
                    version="1.1"
                    viewBox="0 0 1000 1000"
                    enable-background="new 0 0 1000 1000"
                    xml:space="preserve"
                  >
                    <g>
                      <g>
                        <path
                          d="M429.7,621.3c-13,0-26.1-5-36-14.9c-93.3-93.3-93.3-245,0-338.2L581.8,79.9C627,34.8,687.1,9.9,750.9,9.9c63.9,0,123.9,24.9,169.1,70.1c93.3,93.3,93.3,245,0,338.2l-86,86c-19.9,19.9-52.2,19.9-72.1,0c-19.9-19.9-19.9-52.2,0-72.1l86-86c53.5-53.5,53.5-140.6,0-194.1c-25.9-25.9-60.4-40.2-97-40.2c-36.7,0-71.1,14.3-97,40.2L465.7,340.2c-53.5,53.5-53.5,140.6,0,194.1c19.9,19.9,19.9,52.2,0,72.1C455.7,616.3,442.7,621.3,429.7,621.3L429.7,621.3z"
                        />
                        <path
                          d="M249.1,990.1c-63.9,0-123.9-24.9-169.1-70.1c-93.3-93.3-93.3-245,0-338.2l86-86c19.9-19.9,52.2-19.9,72.1,0c19.9,19.9,19.9,52.2,0,72.1l-86,86c-53.5,53.5-53.5,140.6,0,194.1c25.9,25.9,60.4,40.2,97,40.2s71.1-14.3,97-40.2l188.2-188.2c53.5-53.5,53.5-140.6,0-194.1c-19.9-19.9-19.9-52.2,0-72.1c19.9-19.9,52.2-19.9,72.1,0c93.3,93.3,93.3,245,0,338.2L418.2,920.1C373,965.2,312.9,990.1,249.1,990.1L249.1,990.1z"
                        />
                      </g>
                    </g>
                  </svg>
                </a>
              </div>
            </div>
            <br />
            <p>
              Eligendi odit deleniti velit rerum accusamus aliquid illum nihil
              necessitatibus quo laboriosam, minus minima perferendis explicabo
              soluta fugit vitae, mollitia, impedit magnam?
            </p>
          </div>
          <div class="grid-item">
            <img
              src="/img/2022-04-24-07426.jpg"
              alt="<?php echo $lang['asset_23'] ?>Adam Sochorec"
              class="reveal"
            />
            <!-- LET'S TALK END -->
          </div>
        </div>
      </article>
      <!-- LETS TALK START  -->
    </main>
    <!-- FOOTER START -->
    <?php
    $IPATH = $_SERVER['DOCUMENT_ROOT'] . '/assets/php/';
    include $IPATH . 'global-footer.php';
    ?>
    <!-- FOOTER END -->
  </body>
</html>
