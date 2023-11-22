<?php include 'languages/config.php'; ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <?php
    $IPATH = $_SERVER['DOCUMENT_ROOT'] . '/assets/components/';
    include $IPATH . 'head.php';
    ?>
    <meta name="description" content="<?php echo $lang['asset_41'] ?>" />
    <meta name="keywords" content="<?php echo $lang['asset_42'] ?>" />
    <title>Services | Slavic Media</title>
    <script
      src="https://challenges.cloudflare.com/turnstile/v0/api.js?onload=onloadTurnstileCallback"
      defer
    ></script>
  </head>
  <body id="services">
    <!-- HEADER START -->
    <?php
    $IPATH = $_SERVER['DOCUMENT_ROOT'] . '/assets/components/';
    include $IPATH . 'nav-bar.php';
    ?>

    <!-- HEADER END -->
    <main>
      <article class="wrapper-wide">
        <div class="pathname-container"></div>
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
        <!-- FEATURES START -->
        <article
          id="visual"
          class="video-gallery features-grid"
          aria-label="Video Gallery"
        >
          <div class="gallery-item reveal" aria-label="Huset Fundament 2023">
            <img
              src="/img/2021-05-28-01020.jpg"
              alt="<?php echo $lang['asset_40'] ?>."
            />
            <div class="gallery-item-caption">
              <h3>
                <?php echo $lang['asset_192'] ?>
              </h3>
              <p>
                <?php echo $lang['asset_193'] ?>
              </p>
            </div>
          </div>

          <div class="gallery-item reveal">
            <img src="/img/studio.jpg" alt="<?php echo $lang['asset_38'] ?>." />
            <div class="gallery-item-caption">
              <h3>
                <?php echo $lang['asset_194'] ?>
              </h3>
              <p>
                <?php echo $lang['asset_195'] ?>
              </p>
            </div>
          </div>

          <div class="gallery-item reveal">
            <img
              src="/img/2021-08-24-01615.jpg"
              class="north-cascades-img"
              alt="<?php echo $lang['asset_47'] ?>."
            />
            <div class="gallery-item-caption">
              <h3>
                <?php echo $lang['asset_196'] ?>
              </h3>
              <p>
                <?php echo $lang['asset_197'] ?>
              </p>
            </div>
          </div>

          <div class="gallery-item reveal">
            <img
              src="/img/cover-samso.jpg"
              alt="<?php echo $lang['asset_152'] ?>."
            />
            <div class="gallery-item-caption">
              <h3>
                <?php echo $lang['asset_198'] ?>
              </h3>
              <p>
                <?php echo $lang['asset_199'] ?>
              </p>
            </div>
          </div>
          <div class="gallery-item reveal">
            <img src="/img/hvalp.jpg" alt="<?php echo $lang['asset_50'] ?>." />
            <div class="gallery-item-caption">
              <h3>
                <?php echo $lang['asset_200'] ?>
              </h3>
              <p>
                <?php echo $lang['asset_201'] ?>
              </p>
            </div>
          </div>
          <div class="gallery-item reveal">
            <img
              src="/img/animation.jpg"
              alt="<?php echo $lang['asset_39'] ?>."
            />
            <div class="gallery-item-caption">
              <h3>
                <?php echo $lang['asset_202'] ?>
              </h3>
              <p>
                <?php echo $lang['asset_203'] ?>
              </p>
            </div>
          </div>
        </article>
        <!-- FEATURES END -->
        <hr class="reveal" id="portrait" />

        <div class="grid-container services-grid">
          <!-- PORTRAIT START -->
          <div class="grid-item reveal">
            <h2 class="hide-heading-min">
              <?php echo $lang['asset_110'] ?>
              <span class="highlited"> <?php echo $lang['asset_105'] ?></span>
            </h2>
            <?php
            $IPATH = $_SERVER['DOCUMENT_ROOT'] . '/assets/components/';
            include $IPATH . 'swiper-portrait.php';
            ?>
          </div>
          <div class="grid-item text-container reveal">
            <section>
              <h2 class="hide-heading-max">
                <?php echo $lang['asset_110'] ?>
                <span class="highlited"> <?php echo $lang['asset_105'] ?></span>
              </h2>
              <p>
                <?php echo $lang['asset_173'] ?>
              </p>
              <a href="/projects#portrait">
                <div class="cta" id="stills">
                  <?php echo $lang['asset_114'] ?>
                </div>
              </a>
            </section>
          </div>
          <!-- PORTRAIT END -->
          <!-- STILLS START -->
          <div class="grid-item">
            <h2 class="hide-heading-min">
              <?php echo $lang['asset_107'] ?>
              <span class="highlited"> <?php echo $lang['asset_105'] ?></span>
            </h2>
            <?php
            $IPATH = $_SERVER['DOCUMENT_ROOT'] . '/assets/components/';
            include $IPATH . 'swiper-stills.php';
            ?>
          </div>
          <div class="grid-item text-container">
            <section>
              <h2 class="hide-heading-max reveal">
                <?php echo $lang['asset_107'] ?>
                <span class="highlited"> <?php echo $lang['asset_105'] ?></span>
              </h2>
              <p class="reveal">
                <?php echo $lang['asset_174'] ?>
              </p>
              <a href="/projects#stills">
                <div class="cta" id="travel">
                  <?php echo $lang['asset_113'] ?>
                </div></a
              >
            </section>
          </div>
          <!-- STILLS END -->
          <!-- TRAVEL START -->
          <div class="grid-item">
            <h2 class="hide-heading-min reveal">
              <?php echo $lang['asset_85'] ?>
              <span class="highlited"> <?php echo $lang['asset_105'] ?></span>
            </h2>
            <!-- Slider main container -->
            <?php
            $IPATH = $_SERVER['DOCUMENT_ROOT'] . '/assets/components/';
            include $IPATH . 'swiper-travel.php';
            ?>
          </div>
          <div class="grid-item text-container">
            <section>
              <h2 class="hide-heading-max reveal">
                <?php echo $lang['asset_85'] ?>
                <span class="highlited"> <?php echo $lang['asset_105'] ?></span>
              </h2>
              <p class="reveal">
                <?php echo $lang['asset_175'] ?>
              </p>
              <a href="/projects#travel">
                <div class="cta" id="showreel">
                  <?php echo $lang['asset_115'] ?>
                </div>
              </a>
            </section>
          </div>
          <!-- TRAVEL END -->
          <!-- SHOWREEL START -->
          <div class="grid-item reveal">
            <h2 class="hide-heading-min">
              <?php echo $lang['asset_184'] ?>
              <span class="highlited"> <?php echo $lang['asset_105'] ?></span>
            </h2>
            <?php
            $IPATH = $_SERVER['DOCUMENT_ROOT'] . '/assets/components/';
            include $IPATH . 'swiper-showreel.php';
            ?>
          </div>
          <div class="grid-item text-container reveal">
            <section>
              <h2 class="hide-heading-max">
                <?php echo $lang['asset_184'] ?>
                <span class="highlited"> <?php echo $lang['asset_105'] ?></span>
              </h2>
              <p>
                <?php echo $lang['asset_185'] ?>
              </p>
              <a href="/projects#showreel">
                <div class="cta" id="interview">
                  <?php echo $lang['asset_186'] ?>
                </div></a
              >
            </section>
          </div>
          <!-- SHOWREEL END -->
          <!-- INTERVIEW START -->
          <div class="grid-item reveal">
            <h2 class="hide-heading-min">
              <?php echo $lang['asset_187'] ?>
              <span class="highlited"> <?php echo $lang['asset_105'] ?></span>
            </h2>
            <?php
              $IPATH = $_SERVER['DOCUMENT_ROOT'] . '/assets/components/';
              include $IPATH . 'swiper-interview.php';
              ?>
          </div>
          <div class="grid-item text-container reveal">
            <section>
              <h2 class="hide-heading-max">
                <?php echo $lang['asset_187'] ?>
                <span class="highlited"> <?php echo $lang['asset_105'] ?></span>
              </h2>
              <p>
                <?php echo $lang['asset_188'] ?>
              </p>
              <a href="/projects#interview"
                ><div class="cta" id="plans">
                  <?php echo $lang['asset_189'] ?>
                </div></a
              >
            </section>
          </div>
          <!-- INTERVIEW END -->
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
                        <?php echo $lang[''] ?>
                        <?php echo $lang['asset_132'] ?>
                      </h5>
                      <br />
                      <h6>
                        <?php echo $lang[''] ?>
                      </h6>
                      <ul>
                        <?php echo $lang[''] ?>
                      </ul>
                    </div>
                    <div class="flip-card-back">
                      <h4>
                        <i class="fa-solid fa-circle-info"></i>&nbsp;
                        <?php echo $lang['asset_110'] ?>
                        <?php echo $lang['asset_133'] ?>
                      </h4>
                      <p>
                        <?php echo $lang[''] ?>
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
                        <?php echo $lang[''] ?>
                        <?php echo $lang['asset_132'] ?>
                      </h5>
                      <br />
                      <h6><?php echo $lang[''] ?></h6>
                      <ul>
                        <?php echo $lang[''] ?>
                      </ul>
                    </div>
                    <div class="flip-card-back">
                      <h4>
                        <i class="fa-solid fa-circle-info"></i>&nbsp;
                        <?php echo $lang['asset_110'] ?>
                        <?php echo $lang['asset_134'] ?>
                      </h4>
                      <p><?php echo $lang[''] ?></p>
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
                        <?php echo $lang[''] ?>
                        <?php echo $lang['asset_132'] ?>
                      </h5>
                      <br />
                      <h6><?php echo $lang[''] ?></h6>
                      <ul>
                        <?php echo $lang[''] ?>
                      </ul>
                    </div>
                    <div class="flip-card-back">
                      <h4>
                        <i class="fa-solid fa-circle-info"></i>&nbsp;
                        <?php echo $lang['asset_110'] ?>
                        <?php echo $lang['asset_135'] ?>
                      </h4>
                      <p>
                        <?php echo $lang[''] ?>
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
                        <?php echo $lang[''] ?>
                        <?php echo $lang['asset_132'] ?>
                      </h5>
                      <br />
                      <h6>
                        <?php echo $lang[''] ?>
                      </h6>
                      <ul>
                        <?php echo $lang[''] ?>
                      </ul>
                    </div>
                    <div class="flip-card-back">
                      <h4>
                        <i class="fa-solid fa-circle-info"></i>&nbsp;
                        <?php echo $lang['asset_107'] ?>
                        <?php echo $lang['asset_133'] ?>
                      </h4>
                      <p>
                        <?php echo $lang[''] ?>
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
                        <?php echo $lang[''] ?>
                        <?php echo $lang['asset_132'] ?>
                      </h5>
                      <br />
                      <h6><?php echo $lang[''] ?></h6>
                      <ul>
                        <?php echo $lang[''] ?>
                      </ul>
                    </div>
                    <div class="flip-card-back">
                      <h4>
                        <i class="fa-solid fa-circle-info"></i>&nbsp;
                        <?php echo $lang['asset_107'] ?>
                        <?php echo $lang['asset_134'] ?>
                      </h4>
                      <p><?php echo $lang[''] ?></p>
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
                        <?php echo $lang[''] ?>
                        <?php echo $lang['asset_132'] ?>
                      </h5>
                      <br />
                      <h6><?php echo $lang[''] ?></h6>
                      <ul>
                        <?php echo $lang[''] ?>
                      </ul>
                    </div>
                    <div class="flip-card-back">
                      <h4>
                        <i class="fa-solid fa-circle-info"></i>&nbsp;
                        <?php echo $lang['asset_107'] ?>
                        <?php echo $lang['asset_135'] ?>
                      </h4>
                      <p>
                        <?php echo $lang[''] ?>
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
                        <?php echo $lang['asset_214'] ?>
                        +
                        <?php echo $lang['asset_204'] ?>,
                        <?php echo $lang['asset_132'] ?>
                      </h5>
                      <br />
                      <h6>
                        <?php echo $lang['asset_136'] ?>
                      </h6>
                      <ul>
                        <?php echo $lang['asset_205'] ?>
                      </ul>
                    </div>
                    <div class="flip-card-back">
                      <h4>
                        <i class="fa-solid fa-circle-info"></i>&nbsp;
                        <?php echo $lang['asset_85'] ?>
                        <?php echo $lang['asset_133'] ?>
                      </h4>
                      <p>
                        <?php echo $lang['asset_206'] ?>
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
                        <?php echo $lang['asset_213'] ?>
                        +
                        <?php echo $lang['asset_204'] ?>,
                        <?php echo $lang['asset_132'] ?>
                      </h5>
                      <br />
                      <h6><?php echo $lang['asset_139'] ?></h6>
                      <ul>
                        <?php echo $lang['asset_207'] ?>
                      </ul>
                    </div>
                    <div class="flip-card-back">
                      <h4>
                        <i class="fa-solid fa-circle-info"></i>&nbsp;
                        <?php echo $lang['asset_85'] ?>
                        <?php echo $lang['asset_134'] ?>
                      </h4>
                      <p>
                        <?php echo $lang['asset_208'] ?>
                      </p>
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
                        <?php echo $lang['asset_212'] ?>
                        +
                        <?php echo $lang['asset_204'] ?>,
                        <?php echo $lang['asset_132'] ?>
                      </h5>
                      <br />
                      <h6><?php echo $lang['asset_142'] ?></h6>
                      <ul>
                        <?php echo $lang['asset_209'] ?>
                      </ul>
                    </div>
                    <div class="flip-card-back">
                      <h4>
                        <i class="fa-solid fa-circle-info"></i>&nbsp;
                        <?php echo $lang['asset_85'] ?>
                        <?php echo $lang['asset_135'] ?>
                      </h4>
                      <p>
                        <?php echo $lang['asset_211'] ?>
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </section>
            <!-- TRAVEL PACKAGES END -->
            <!-- SHOWREEL PACKAGES START -->
            <section id="travel" class="tab-panel">
              <div class="grid-container gallery reveal">
                <div class="grid-item flip-card" id="essential">
                  <div class="flip-card-inner">
                    <i class="fa-solid fa-repeat"></i>
                    <div class="flip-card-front">
                      <h4>
                        <i class="fa-solid fa-circle-info"></i>&nbsp;
                        <?php echo $lang['asset_184'] ?>
                        <?php echo $lang['asset_133'] ?>
                      </h4>
                      <h5>
                        <?php echo $lang[''] ?>
                        +
                        <?php echo $lang[''] ?>,
                        <?php echo $lang['asset_132'] ?>
                      </h5>
                      <br />
                      <h6>
                        <?php echo $lang[''] ?>
                      </h6>
                      <ul>
                        <?php echo $lang[''] ?>
                      </ul>
                    </div>
                    <div class="flip-card-back">
                      <h4>
                        <i class="fa-solid fa-circle-info"></i>&nbsp;
                        <?php echo $lang['asset_184'] ?>
                        <?php echo $lang['asset_133'] ?>
                      </h4>
                      <p>
                        <?php echo $lang[''] ?>
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
                        <?php echo $lang['asset_184'] ?>
                        <?php echo $lang['asset_134'] ?>
                      </h4>
                      <h5>
                        <?php echo $lang[''] ?>
                        +
                        <?php echo $lang[''] ?>,
                        <?php echo $lang['asset_132'] ?>
                      </h5>
                      <br />
                      <h6>
                        <?php echo $lang[''] ?>
                      </h6>
                      <ul>
                        <?php echo $lang[''] ?>
                      </ul>
                    </div>
                    <div class="flip-card-back">
                      <h4>
                        <i class="fa-solid fa-circle-info"></i>&nbsp;
                        <?php echo $lang['asset_184'] ?>
                        <?php echo $lang['asset_134'] ?>
                      </h4>
                      <p>
                        <?php echo $lang[''] ?>
                      </p>
                    </div>
                  </div>
                </div>
                <div class="grid-item flip-card" id="elite">
                  <div class="flip-card-inner">
                    <i class="fa-solid fa-repeat"></i>
                    <div class="flip-card-front">
                      <h4>
                        <i class="fa-solid fa-circle-info"></i>&nbsp;
                        <?php echo $lang['asset_184'] ?>
                        <?php echo $lang['asset_135'] ?>
                      </h4>
                      <h5>
                        <?php echo $lang[''] ?>
                        +
                        <?php echo $lang[''] ?>,
                        <?php echo $lang['asset_132'] ?>
                      </h5>
                      <br />
                      <h6>
                        <?php echo $lang[''] ?>
                      </h6>
                      <ul>
                        <?php echo $lang[''] ?>
                      </ul>
                    </div>
                    <div class="flip-card-back">
                      <h4>
                        <i class="fa-solid fa-circle-info"></i>&nbsp;
                        <?php echo $lang['asset_184'] ?>
                        <?php echo $lang['asset_135'] ?>
                      </h4>
                      <p>
                        <?php echo $lang[''] ?>
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </section>
            <!-- SHOWREEL PACKAGES END -->
            <!-- INTERVIEW PACKAGES START -->
            <section id="travel" class="tab-panel">
              <div class="grid-container gallery reveal">
                <div class="grid-item flip-card" id="essential">
                  <div class="flip-card-inner">
                    <i class="fa-solid fa-repeat"></i>
                    <div class="flip-card-front">
                      <h4>
                        <i class="fa-solid fa-circle-info"></i>&nbsp;
                        <?php echo $lang['asset_187'] ?>
                        <?php echo $lang['asset_135'] ?>
                      </h4>
                      <h5>
                        <?php echo $lang[''] ?>
                        +
                        <?php echo $lang[''] ?>,
                        <?php echo $lang['asset_132'] ?>
                      </h5>
                      <br />
                      <h6>
                        <?php echo $lang[''] ?>
                      </h6>
                      <ul>
                        <?php echo $lang[''] ?>
                      </ul>
                    </div>
                    <div class="flip-card-back">
                      <h4>
                        <i class="fa-solid fa-circle-info"></i>&nbsp;
                        <?php echo $lang['asset_187'] ?>
                        <?php echo $lang['asset_135'] ?>
                      </h4>
                      <p>
                        <?php echo $lang[''] ?>
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
                        <?php echo $lang['asset_187'] ?>
                        <?php echo $lang['asset_135'] ?>
                      </h4>
                      <h5>
                        <?php echo $lang[''] ?>
                        +
                        <?php echo $lang[''] ?>,
                        <?php echo $lang['asset_132'] ?>
                      </h5>
                      <br />
                      <h6>
                        <?php echo $lang[''] ?>
                      </h6>
                      <ul>
                        <?php echo $lang[''] ?>
                      </ul>
                    </div>
                    <div class="flip-card-back">
                      <h4>
                        <i class="fa-solid fa-circle-info"></i>&nbsp;
                        <?php echo $lang['asset_187'] ?>
                        <?php echo $lang['asset_135'] ?>
                      </h4>
                      <p>
                        <?php echo $lang[''] ?>
                      </p>
                    </div>
                  </div>
                </div>
                <div class="grid-item flip-card" id="elite">
                  <div class="flip-card-inner">
                    <i class="fa-solid fa-repeat"></i>
                    <div class="flip-card-front">
                      <h4>
                        <i class="fa-solid fa-circle-info"></i>&nbsp;
                        <?php echo $lang['asset_187'] ?>
                        <?php echo $lang['asset_135'] ?>
                      </h4>
                      <h5>
                        <?php echo $lang[''] ?>
                        +
                        <?php echo $lang[''] ?>,
                        <?php echo $lang['asset_132'] ?>
                      </h5>
                      <br />
                      <h6>
                        <?php echo $lang[''] ?>
                      </h6>
                      <ul>
                        <?php echo $lang[''] ?>
                      </ul>
                    </div>
                    <div class="flip-card-back">
                      <h4>
                        <i class="fa-solid fa-circle-info"></i>&nbsp;
                        <?php echo $lang['asset_187'] ?>
                        <?php echo $lang['asset_135'] ?>
                      </h4>
                      <p>
                        <?php echo $lang[''] ?>
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </section>
            <!-- INTERVIEW PACKAGES END -->
          </div>
        </div>
        <!-- PACKAGES END -->
        <hr id="proposal" class="reveal" />
      </article>
      <!-- CTA  START  -->
      <?php
    $IPATH = $_SERVER['DOCUMENT_ROOT'] . '/assets/components/';
    include $IPATH . 'contact-form.php';
    ?>
      <!-- CTA  END  -->
    </main>
    <!-- FOOTER START -->
    <?php
    $IPATH = $_SERVER['DOCUMENT_ROOT'] . '/assets/components/';
    include $IPATH . 'footer.php';
    ?>
    <script>
      // This function is called when the Turnstile script is loaded and ready to be used.
      // The function name matches the "onload=..." parameter.
      function _turnstileCb() {
        console.debug("_turnstileCb called");

        turnstile.render("#myWidget", {
          sitekey: "0x4AAAAAAANhXDf8oQtrWBls",
          theme: "light",
        });
      }
    </script>
    <!-- FOOTER END -->
  </body>
</html>
