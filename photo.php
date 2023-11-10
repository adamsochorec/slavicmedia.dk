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
    <script
      src="https://www.google.com/recaptcha/enterprise.js?render=6LfQfQkpAAAAAC416S79vWY4zeUSxkGuUUEFhMMr"
      async
      defer
    ></script>
    <!-- Your code -->
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
            <h2 class="hideHeading-min">
              <?php echo $lang['asset_110'] ?>
            </h2>
            <img src="/img/2021-04-25-00693.jpg" alt="Portrait Cover" />
          </div>
          <div class="grid-item text-container reveal">
            <section>
              <h2 class="hideHeading-max">
                <?php echo $lang['asset_110'] ?>
              </h2>
              <p>
                <?php echo $lang['asset_173'] ?>
              </p>
              <br />
              <div>
                <a
                  class="cta reveal"
                  href="/works#<?php echo $lang['asset_110'] ?>"
                  ><?php echo $lang['asset_114'] ?>
                </a>
              </div>
            </section>
          </div>
          <!-- PORTRAIT END -->
          <!-- STILLS START -->
          <div class="grid-item reveal">
            <h2 class="hideHeading-min">
              <?php echo $lang['asset_107'] ?>
            </h2>
            <img src="/img/2023-09-09-10524.jpg" alt="Stills Cover" />
          </div>
          <div class="grid-item text-container reveal">
            <section>
              <h2 class="hideHeading-max">
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
              <h2 class="hideHeading-max reveal">
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
        </div>
        <!-- TRAVEL END -->
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
            <!-- Stills PACKAGES END -->
            <!-- TRAVEL PACKAGES START -->
            <section id="travel" class="tab-panel">
              <div class="grid-container gallery reveal">
                <div class="grid-item flip-card" id="essential">
                  <div class="flip-card-inner">
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
        <!-- GRAPHIC START 

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
      <!-- CTA  START  -->
      <?php
    $IPATH = $_SERVER['DOCUMENT_ROOT'] . '/assets/php/';
    include $IPATH . 'contact-form.php';
    ?>
      <!-- CTA  END  -->
    </main>
    <!-- FOOTER START -->
    <?php
    $IPATH = $_SERVER['DOCUMENT_ROOT'] . '/assets/php/';
    include $IPATH . 'global-footer.php';
    ?>
    <!-- FOOTER END -->
  </body>
</html>
