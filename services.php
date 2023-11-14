<?php
    $IPATH = $_SERVER['DOCUMENT_ROOT'] . '/assets/php/';
    include $IPATH . 'config.php';
    ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"
    />
    <?php
    $IPATH = $_SERVER['DOCUMENT_ROOT'] . '/assets/php/';
    include $IPATH . 'global-head.php';
    ?>
    <script
      src="https://www.google.com/recaptcha/enterprise.js?render=6LfQfQkpAAAAAC416S79vWY4zeUSxkGuUUEFhMMr"
      async
      defer
    ></script>
    <!-- Your code -->
    <meta name="description" content="<?php echo $lang['asset_41'] ?>" />
    <meta name="keywords" content="<?php echo $lang['asset_42'] ?>" />
    <title>Services | Slavic Media</title>
  </head>
  <body class="services" id="servicees">
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
            </span>
          </p>
        </div>
        <hr class="reveal" />

        <!-- PACKAGES START -->
        <h3 class="reveal"><?php echo $lang['asset_145'] ?></h3>
        <p class="reveal"><?php echo $lang['asset_131'] ?></p>
        <hr class="semi" />

        <div class="tabset reveal">
          <!-- Tab 1 -->
          <input
            type="radio"
            name="tabset"
            id="tab1"
            aria-controls="Portrait"
            checked
          />
          <label for="tab1"
            ><h4><?php echo $lang['asset_110'] ?></h4></label
          >
          <!-- Tab 2 -->
          <input type="radio" name="tabset" id="tab2" aria-controls="Stills" />
          <label for="tab2"
            ><h4><?php echo $lang['asset_107'] ?></h4></label
          >
          <!-- Tab 3 -->
          <input type="radio" name="tabset" id="tab3" aria-controls="Travel" />
          <label for="tab3"
            ><h4><?php echo $lang['asset_85'] ?></h4></label
          >
          <!-- Tab 4 -->
          <input
            type="radio"
            name="tabset"
            id="tab4"
            aria-controls="Showreel"
          />
          <label for="tab4"
            ><h4><?php echo $lang['asset_184'] ?></h4></label
          >
          <!-- Tab 5 -->
          <input
            type="radio"
            name="tabset"
            id="tab5"
            aria-controls="Interview"
          />
          <label for="tab5"
            ><h4><?php echo $lang['asset_187'] ?></h4></label
          >
          <hr class="semi" />

          <div class="tab-panels">
            <!-- PORTRAIT PACKAGES START -->
            <section id="portrait" class="tab-panel">
              <div class="grid-container gallery reveal">
                <div class="grid-item flip-card" id="essential">
                  <div class="flip-card-inner">
                    <i class="fa-solid fa-repeat"></i>
                    <div class="flip-card-front">
                      <h4>
                        <i class="fa-solid fa-circle-info"></i>&nbsp;
                        <?php echo $lang['asset_110'] ?>
                        <?php echo $lang['asset_133'] ?>
                      </h4>
                      <h5>
                        2.000 DKK
                        <?php echo $lang['asset_132'] ?>
                      </h5>
                      <br />
                      <h6>
                        <?php echo $lang['asset_136'] ?>
                      </h6>
                      <ul>
                        <?php echo $lang['asset_137'] ?>
                      </ul>
                    </div>
                    <div class="flip-card-back">
                      <h4>
                        <i class="fa-solid fa-circle-info"></i>&nbsp;
                        <?php echo $lang['asset_110'] ?>
                        <?php echo $lang['asset_133'] ?>
                      </h4>
                      <p>
                        <?php echo $lang['asset_138'] ?>
                      </p>
                    </div>
                  </div>
                </div>
                <div class="grid-item flip-card" id="core">
                  <div class="flip-card-inner">
                    <i class="fa-solid fa-repeat"></i>

                    <div class="flip-card-front">
                      <h4>
                        <i class="fa-solid fa-circle-info"></i>&nbsp;
                        <?php echo $lang['asset_110'] ?>
                        <?php echo $lang['asset_134'] ?>
                      </h4>
                      <h5>
                        4.000 DKK
                        <?php echo $lang['asset_132'] ?>
                      </h5>
                      <br />
                      <h6><?php echo $lang['asset_139'] ?></h6>
                      <ul>
                        <?php echo $lang['asset_140'] ?>
                      </ul>
                    </div>
                    <div class="flip-card-back">
                      <h4>
                        <i class="fa-solid fa-circle-info"></i>&nbsp;
                        <?php echo $lang['asset_110'] ?>
                        <?php echo $lang['asset_134'] ?>
                      </h4>
                      <p><?php echo $lang['asset_141'] ?></p>
                    </div>
                  </div>
                </div>
                <div class="grid-item flip-card" id="elite">
                  <div class="flip-card-inner">
                    <i class="fa-solid fa-repeat"></i>

                    <div class="flip-card-front">
                      <h4>
                        <i class="fa-solid fa-circle-info"></i>&nbsp;
                        <?php echo $lang['asset_110'] ?>
                        <?php echo $lang['asset_135'] ?>
                      </h4>
                      <h5>
                        13.000 DKK
                        <?php echo $lang['asset_132'] ?>
                      </h5>
                      <br />
                      <h6><?php echo $lang['asset_142'] ?></h6>
                      <ul>
                        <?php echo $lang['asset_143'] ?>
                      </ul>
                    </div>
                    <div class="flip-card-back">
                      <h4>
                        <i class="fa-solid fa-circle-info"></i>&nbsp;
                        <?php echo $lang['asset_110'] ?>
                        Elite
                      </h4>
                      <p>
                        <?php echo $lang['asset_144'] ?>
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </section>
            <!-- PORTRAIT PACKAGES END -->

            <!-- STILLS PACKAGES START -->
            <section id="stills" class="tab-panel">
              <div class="grid-container gallery reveal">
                <div class="grid-item flip-card" id="essential">
                  <div class="flip-card-inner">
                    <i class="fa-solid fa-repeat"></i>

                    <div class="flip-card-front">
                      <h4>
                        <i class="fa-solid fa-circle-info"></i>&nbsp;
                        <?php echo $lang['asset_107'] ?>
                        <?php echo $lang['asset_133'] ?>
                      </h4>
                      <h5>
                        2.000 DKK
                        <?php echo $lang['asset_132'] ?>
                      </h5>
                      <br />
                      <h6>
                        <?php echo $lang['asset_136'] ?>
                      </h6>
                      <ul>
                        <?php echo $lang['asset_137'] ?>
                      </ul>
                    </div>
                    <div class="flip-card-back">
                      <h4>
                        <i class="fa-solid fa-circle-info"></i>&nbsp;
                        <?php echo $lang['asset_107'] ?>
                        <?php echo $lang['asset_133'] ?>
                      </h4>
                      <p>
                        <?php echo $lang['asset_138'] ?>
                      </p>
                    </div>
                  </div>
                </div>
                <div class="grid-item flip-card" id="core">
                  <div class="flip-card-inner">
                    <i class="fa-solid fa-repeat"></i>

                    <div class="flip-card-front">
                      <h4>
                        <i class="fa-solid fa-circle-info"></i>&nbsp;
                        <?php echo $lang['asset_107'] ?>
                        <?php echo $lang['asset_134'] ?>
                      </h4>
                      <h5>
                        4.000 DKK
                        <?php echo $lang['asset_132'] ?>
                      </h5>
                      <br />
                      <h6><?php echo $lang['asset_139'] ?></h6>
                      <ul>
                        <?php echo $lang['asset_140'] ?>
                      </ul>
                    </div>
                    <div class="flip-card-back">
                      <h4>
                        <i class="fa-solid fa-circle-info"></i>&nbsp;
                        <?php echo $lang['asset_107'] ?>
                        <?php echo $lang['asset_134'] ?>
                      </h4>
                      <p><?php echo $lang['asset_141'] ?></p>
                    </div>
                  </div>
                </div>
                <div class="grid-item flip-card" id="elite">
                  <div class="flip-card-inner">
                    <i class="fa-solid fa-repeat"></i>

                    <div class="flip-card-front">
                      <h4>
                        <i class="fa-solid fa-circle-info"></i>&nbsp;
                        <?php echo $lang['asset_107'] ?>
                        <?php echo $lang['asset_135'] ?>
                      </h4>
                      <h5>
                        13.000 DKK
                        <?php echo $lang['asset_132'] ?>
                      </h5>
                      <br />
                      <h6><?php echo $lang['asset_142'] ?></h6>
                      <ul>
                        <?php echo $lang['asset_143'] ?>
                      </ul>
                    </div>
                    <div class="flip-card-back">
                      <h4>
                        <i class="fa-solid fa-circle-info"></i>&nbsp;
                        <?php echo $lang['asset_107'] ?>
                        Elite
                      </h4>
                      <p>
                        <?php echo $lang['asset_144'] ?>
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </section>
            <!-- STILLS PACKAGES END -->
            <!-- TRAVEL PACKAGES START -->
            <section id="travel" class="tab-panel">
              <div class="grid-container gallery reveal">
                <div class="grid-item flip-card" id="essential">
                  <div class="flip-card-inner">
                    <i class="fa-solid fa-repeat"></i>
                    <div class="flip-card-front">
                      <h4>
                        <i class="fa-solid fa-circle-info"></i>&nbsp;
                        <?php echo $lang['asset_85'] ?>
                        <?php echo $lang['asset_133'] ?>
                      </h4>
                      <h5>
                        2.000 DKK
                        <?php echo $lang['asset_132'] ?>
                      </h5>
                      <br />
                      <h6>
                        <?php echo $lang['asset_136'] ?>
                      </h6>
                      <ul>
                        <?php echo $lang['asset_137'] ?>
                      </ul>
                    </div>
                    <div class="flip-card-back">
                      <h4>
                        <i class="fa-solid fa-circle-info"></i>&nbsp;
                        <?php echo $lang['asset_85'] ?>
                        <?php echo $lang['asset_133'] ?>
                      </h4>
                      <p>
                        <?php echo $lang['asset_138'] ?>
                      </p>
                    </div>
                  </div>
                </div>
                <div class="grid-item flip-card" id="core">
                  <div class="flip-card-inner">
                    <i class="fa-solid fa-repeat"></i>

                    <div class="flip-card-front">
                      <h4>
                        <i class="fa-solid fa-circle-info"></i>&nbsp;
                        <?php echo $lang['asset_85'] ?>
                        <?php echo $lang['asset_134'] ?>
                      </h4>
                      <h5>
                        4.000 DKK
                        <?php echo $lang['asset_132'] ?>
                      </h5>
                      <br />
                      <h6><?php echo $lang['asset_139'] ?></h6>
                      <ul>
                        <?php echo $lang['asset_140'] ?>
                      </ul>
                    </div>
                    <div class="flip-card-back">
                      <h4>
                        <i class="fa-solid fa-circle-info"></i>&nbsp;
                        <?php echo $lang['asset_85'] ?>
                        <?php echo $lang['asset_134'] ?>
                      </h4>
                      <p><?php echo $lang['asset_141'] ?></p>
                    </div>
                  </div>
                </div>
                <div class="grid-item flip-card" id="elite">
                  <div class="flip-card-inner">
                    <i class="fa-solid fa-repeat"></i>
                    <div class="flip-card-front">
                      <h4>
                        <i class="fa-solid fa-circle-info"></i>&nbsp;
                        <?php echo $lang['asset_85'] ?>
                        <?php echo $lang['asset_135'] ?>
                      </h4>
                      <h5>
                        13.000 DKK
                        <?php echo $lang['asset_132'] ?>
                      </h5>
                      <br />
                      <h6><?php echo $lang['asset_142'] ?></h6>
                      <ul>
                        <?php echo $lang['asset_143'] ?>
                      </ul>
                    </div>
                    <div class="flip-card-back">
                      <h4>
                        <i class="fa-solid fa-circle-info"></i>&nbsp;
                        <?php echo $lang['asset_85'] ?>
                        Elite
                      </h4>
                      <p>
                        <?php echo $lang['asset_144'] ?>
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
        <div class="grid-container services-grid">
          <!-- PORTRAIT START -->
          <div class="grid-item reveal">
            <h2 class="hide-heading-min">
              <?php echo $lang['asset_110'] ?>
            </h2>
            <?php
            $IPATH = $_SERVER['DOCUMENT_ROOT'] . '/assets/php/';
            include $IPATH . 'swiper-portrait.php';
            ?>
          </div>
          <div class="grid-item text-container reveal">
            <section>
              <h2 class="hide-heading-max">
                <?php echo $lang['asset_110'] ?>
              </h2>
              <p>
                <?php echo $lang['asset_173'] ?>
              </p>
              <br />
              <div>
                <a class="cta" href="/works#portrait"
                  ><?php echo $lang['asset_114'] ?>
                </a>
              </div>
            </section>
          </div>
          <!-- PORTRAIT END -->
          <!-- STILLS START -->
          <div class="grid-item reveal">
            <h2 class="hide-heading-min">
              <?php echo $lang['asset_107'] ?>
            </h2>
            <?php
            $IPATH = $_SERVER['DOCUMENT_ROOT'] . '/assets/php/';
            include $IPATH . 'swiper-stills.php';
            ?>
          </div>
          <div class="grid-item text-container reveal">
            <section>
              <h2 class="hide-heading-max">
                <?php echo $lang['asset_107'] ?>
              </h2>
              <p>
                <?php echo $lang['asset_174'] ?>
              </p>
              <br />
              <div>
                <a class="cta" href="/works#<?php echo $lang['asset_107'] ?>"
                  ><?php echo $lang['asset_113'] ?>
                </a>
              </div>
            </section>
          </div>
          <!-- STILLS END -->
          <!-- TRAVEL START -->
          <div class="grid-item">
            <h2 class="hide-heading-min reveal">
              <?php echo $lang['asset_85'] ?>
            </h2>
            <!-- Slider main container -->
            <?php
            $IPATH = $_SERVER['DOCUMENT_ROOT'] . '/assets/php/';
            include $IPATH . 'swiper-travel.php';
            ?>
          </div>
          <div class="grid-item text-container">
            <section>
              <h2 class="hide-heading-max reveal">
                <?php echo $lang['asset_85'] ?>
              </h2>
              <p class="reveal">
                <?php echo $lang['asset_175'] ?>
              </p>
              <br />
              <div class="reveal">
                <a class="cta" href="/works#<?php echo $lang['asset_85'] ?>"
                  ><?php echo $lang['asset_115'] ?>
                </a>
              </div>
            </section>
          </div>
          <!-- TRAVEL END -->
          <!-- SHOWREEL START -->
          <div class="grid-item reveal">
            <h2 class="hide-heading-min">
              <?php echo $lang['asset_184'] ?>
            </h2>
            <?php
            $IPATH = $_SERVER['DOCUMENT_ROOT'] . '/assets/php/';
            include $IPATH . 'swiper-showreel.php';
            ?>
          </div>
          <div class="grid-item text-container reveal">
            <section>
              <h2 class="hide-heading-max">
                <?php echo $lang['asset_184'] ?>
              </h2>
              <p>
                <?php echo $lang['asset_185'] ?>
              </p>
              <br />
              <div>
                <a class="cta" href="/works#<?php echo $lang['asset_107'] ?>"
                  ><?php echo $lang['asset_186'] ?>
                </a>
              </div>
            </section>
          </div>
          <!-- SHOWREEL END -->
          <!-- INTERVIEW START -->
          <div class="grid-item reveal">
            <h2 class="hide-heading-min">
              <?php echo $lang['asset_187'] ?>
            </h2>
            <?php
              $IPATH = $_SERVER['DOCUMENT_ROOT'] . '/assets/php/';
              include $IPATH . 'swiper-interview.php';
              ?>
          </div>
          <div class="grid-item text-container reveal">
            <section>
              <h2 class="hide-heading-max">
                <?php echo $lang['asset_187'] ?>
              </h2>
              <p>
                <?php echo $lang['asset_188'] ?>
              </p>
              <br />
              <div>
                <a class="cta" href="/works#<?php echo $lang['asset_107'] ?>"
                  ><?php echo $lang['asset_189'] ?>
                </a>
              </div>
            </section>
          </div>
          <!-- INTERVIEW END -->
        </div>

        <hr class="reveal" />
      </article>
      <!-- CTA  START  -->
      <?php
    $IPATH = $_SERVER['DOCUMENT_ROOT'] . '/assets/php/';
    include $IPATH . 'contact-form.php';
    ?>
      <!-- CTA  END  -->
    </main>
    <!-- FOOTER START -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <?php
    $IPATH = $_SERVER['DOCUMENT_ROOT'] . '/assets/php/';
    include $IPATH . 'global-footer.php';
    ?>
    <!-- FOOTER END -->
  </body>
</html>
