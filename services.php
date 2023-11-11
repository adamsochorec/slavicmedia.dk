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
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"
    />
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
        <!-- PORTRAIT START -->
        <div class="grid-container services-grid">
          <div class="grid-item reveal">
            <h2 class="hideHeading-min">
              <?php echo $lang['asset_110'] ?>
            </h2>
            <div class="swiper">
              <!-- Additional required wrapper -->
              <div class="swiper-wrapper">
                <!-- Slides -->
                <div class="swiper-slide">
                  <p class="note">
                    <a
                      href="https://www.divadlonavinohradech.com/"
                      target="_blank"
                      rel="noopener noreferrer"
                      ><span>Divadlo na Vinohradech</span
                      ><span><i class="fa-solid fa-circle-info"></i></span
                    ></a>
                  </p>
                  <img
                    src="/img/2021-04-25-00693.jpg"
                    alt="<?php echo $lang['asset_55'] ?>."
                  />
                </div>
                <div class="swiper-slide">
                  <p class="note">
                    <a
                      href="https://www.divadlonavinohradech.com/"
                      target="_blank"
                      rel="noopener noreferrer"
                      ><span>Divadlo na Vinohradech</span
                      ><span><i class="fa-solid fa-circle-info"></i></span
                    ></a>
                  </p>
                  <img
                    src="/img/2021-04-14-00608.jpg"
                    alt="<?php echo $lang['asset_56'] ?>."
                  />
                </div>
                <div class="swiper-slide">
                  <img
                    src="/img/2021-09-05-01666.jpg"
                    alt="<?php echo $lang['asset_148'] ?>."
                  />
                </div>
                <div class="swiper-slide">
                  <div class="h-stretch reveal">
                    <img
                      src="/img/hvalp.jpg"
                      alt="<?php echo $lang['asset_150'] ?>."
                    />
                  </div>
                </div>
                <div class="swiper-slide">
                  <img
                    src="/img/2021-10-17-01935.jpg"
                    alt="<?php echo $lang['asset_149'] ?>."
                  />
                </div>
                <div class="swiper-slide">
                  <p class="note">
                    <a
                      href="https://www.divadlonavinohradech.com/"
                      target="_blank"
                      rel="noopener noreferrer"
                      ><span>Divadlo na Vinohradech</span
                      ><span><i class="fa-solid fa-circle-info"></i></span
                    ></a>
                  </p>
                  <img
                    src="/img/2021-04-13-00583.jpg"
                    alt="<?php echo $lang['asset_59'] ?>."
                  />
                </div>
                <div class="swiper-slide">
                  <p class="note">
                    <a
                      href="https://www.divadlonavinohradech.com/"
                      target="_blank"
                      rel="noopener noreferrer"
                      ><span>Divadlo na Vinohradech</span
                      ><span><i class="fa-solid fa-circle-info"></i></span
                    ></a>
                  </p>
                  <img
                    src="/img/2021-05-16-00786.jpg"
                    alt="<?php echo $lang['asset_58'] ?>."
                  />
                </div>
                <div class="swiper-slide">
                  <img
                    src="/img/2021-11-13-02059.jpg"
                    alt="<?php echo $lang['asset_52'] ?>."
                  />
                </div>
              </div>

              <!-- If we need navigation buttons -->
              <div class="swiper-button-prev"></div>
              <div class="swiper-button-next"></div>
            </div>
          </div>
          <div class="grid-item text-container reveal active">
            <section>
              <h2 class="hideHeading-max">Stills</h2>
              <p>
                Performing live? Important presentation? Getting married?
                Hosting a vernisage? Grab a chance to see your event from
                unrevealed perspective without noticing you hired us.
              </p>
              <br />
              <div>
                <a class="cta" href="/works#Stills">Stills works </a>
              </div>
            </section>
          </div>
          <!-- PORTRAIT END -->
          <!-- STILLS START -->
          <div class="grid-item reveal">
            <h2 class="hideHeading-min">
              <?php echo $lang['asset_110'] ?>
            </h2>
            <div class="swiper">
              <!-- Additional required wrapper -->
              <div class="swiper-wrapper">
                <!-- Slides -->
                <div class="swiper-slide">
                  <p class="note">
                    <a
                      href="https://husetfundament.dk/"
                      target="_blank"
                      rel="noopener noreferrer"
                      ><span>Huset Fundament</span
                      ><span><i class="fa-solid fa-circle-info"></i></span>
                    </a>
                  </p>
                  <img
                    src="/img/2023-09-09-10524.jpg"
                    alt="<?php echo $lang['asset_66'] ?>."
                  />
                  <img
                    src="/img/2021-04-25-00693.jpg"
                    alt="<?php echo $lang['asset_55'] ?>."
                  />
                </div>
                <div class="swiper-slide">
                  <p class="note">
                    <a
                      href="https://www.roskilde-festival.dk/da/"
                      target="_blank"
                      rel="noopener noreferrer"
                      ><span>Rosklide Festival</span
                      ><span><i class="fa-solid fa-circle-info"></i></span
                    ></a>
                  </p>
                  <img
                    src="/img/2022-06-28-00708.jpg"
                    alt="<?php echo $lang['asset_65'] ?>."
                  />
                </div>
                <div class="swiper-slide">
                  <p class="note">
                    <a
                      href="https://husetfundament.dk/"
                      target="_blank"
                      rel="noopener noreferrer"
                      ><span>Huset Fundament</span
                      ><span><i class="fa-solid fa-circle-info"></i></span>
                    </a>
                  </p>
                  <img
                    src="/img/2023-09-09-10507.jpg"
                    alt="<?php echo $lang['asset_67'] ?>."
                  />
                </div>
                <div class="swiper-slide">
                  <div class="h-stretch reveal">
                    <p class="note">
                      <a
                        href="https://husetfundament.dk/"
                        target="_blank"
                        rel="noopener noreferrer"
                        ><span>Huset Fundament</span
                        ><span><i class="fa-solid fa-circle-info"></i></span
                      ></a>
                    </p>
                    <img
                      src="/img/2023-05-27-00025.jpg"
                      alt="<?php echo $lang['asset_61'] ?>."
                    />
                  </div>
                </div>
                <div class="swiper-slide">
                  <img
                    src="/img/2021-10-17-01935.jpg"
                    alt="<?php echo $lang['asset_149'] ?>."
                  />
                </div>
                <div class="swiper-slide">
                  <p class="note">
                    <a
                      href="https://www.roskilde-festival.dk/da/"
                      target="_blank"
                      rel="noopener noreferrer"
                      ><span>Rosklide Festival</span
                      ><span><i class="fa-solid fa-circle-info"></i></span
                    ></a>
                  </p>
                  <img
                    src="/img/2022-06-30-00748.jpg"
                    alt="<?php echo $lang['asset_70'] ?>."
                  />
                </div>
                <div class="swiper-slide">
                  <p class="note">
                    <a
                      href="https://husetfundament.dk/"
                      target="_blank"
                      rel="noopener noreferrer"
                      ><span>Huset Fundament</span
                      ><span><i class="fa-solid fa-circle-info"></i></span
                    ></a>
                  </p>
                  <img
                    src="/img/2023-09-23-00049.jpg"
                    alt="<?php echo $lang['asset_71'] ?>."
                  />
                </div>
                <div class="swiper-slide">
                  <p class="note">
                    <a
                      href="https://husetfundament.dk/"
                      target="_blank"
                      rel="noopener noreferrer"
                      ><span>Huset Fundament</span
                      ><span><i class="fa-solid fa-circle-info"></i></span
                    ></a>
                  </p>
                  <img
                    src="/img/2023-05-12-08965.jpg"
                    alt="<?php echo $lang['asset_72'] ?>."
                  />
                </div>
                <div class="swiper-slide">
                  <p class="note">
                    <a
                      href="https://husetfundament.dk/"
                      target="_blank"
                      rel="noopener noreferrer"
                      ><span>Huset Fundament</span
                      ><span><i class="fa-solid fa-circle-info"></i></span>
                    </a>
                  </p>
                  <img
                    src="/img/2023-02-10-08469.jpg"
                    alt="<?php echo $lang['asset_60'] ?>."
                  />
                </div>
                <div class="swiper-slide">
                  <p class="note">
                    <a
                      href="https://husetfundament.dk/"
                      target="_blank"
                      rel="noopener noreferrer"
                      ><span>Huset Fundament</span
                      ><span><i class="fa-solid fa-circle-info"></i></span>
                    </a>
                  </p>
                  <img
                    src="/img/2023-05-12-08969.jpg"
                    alt="<?php echo $lang['asset_63'] ?>."
                  />
                </div>
                <div class="swiper-slide">
                  <img
                    src="/img/2022-06-18-00518.jpg"
                    alt="<?php echo $lang['asset_69'] ?>."
                  />
                </div>
                <div class="swiper-slide">
                  <p class="note">
                    <a
                      href="https://www.facebook.com/koldingkulturnat/"
                      target="_blank"
                      rel="noopener noreferrer"
                      ><span>Kolding Kulturnat</span>
                      <span><i class="fa-solid fa-circle-info"></i></span
                    ></a>
                  </p>
                  <img
                    src="/img/2023-09-01-00086.jpg"
                    alt="<?php echo $lang['asset_57'] ?>."
                  />
                </div>
                <div class="swiper-slide">
                  <p class="note">
                    <a
                      href="https://www.kolding.dk/om-kommunen/nyhedsarkiv/hyg-og-byg-baeredygtig-sondag-med-gratis-mobler-til-koldings-studerende/"
                      target="_blank"
                      rel="noopener noreferrer"
                      ><span>Hyg og Byg</span
                      ><span><i class="fa-solid fa-circle-info"></i></span>
                    </a>
                  </p>
                  <img
                    src="/img/2023-09-24-00022.jpg"
                    alt="<?php echo $lang['asset_3'] ?>."
                  />
                </div>
                <div class="swiper-slide">
                  <p class="note">
                    <a
                      href="https://husetfundament.dk/"
                      target="_blank"
                      rel="noopener noreferrer"
                      ><span>Huset Fundament</span
                      ><span><i class="fa-solid fa-circle-info"></i></span>
                    </a>
                  </p>
                  <img
                    src="/img/2023-09-30-00022.jpg"
                    alt="<?php echo $lang['asset_48'] ?>."
                  />
                </div>
              </div>

              <!-- If we need navigation buttons -->
              <div class="swiper-button-prev"></div>
              <div class="swiper-button-next"></div>
            </div>
          </div>
          <div class="grid-item text-container reveal">
            <section>
              <h2 class="hideHeading-max">
                <?php echo $lang['asset_107'] ?>
              </h2>
              <p>
                <?php echo $lang['asset_173'] ?>
              </p>
              <br />
              <div>
                <a class="cta" href="/works#<?php echo $lang['asset_114'] ?>"
                  ><?php echo $lang['asset_114'] ?>
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
            <!-- Slider main container -->
            <div class="swiper">
              <!-- Additional required wrapper -->
              <div class="swiper-wrapper">
                <!-- Slides -->
                <div class="swiper-slide">
                  <p class="note">
                    <a
                      href="https://www.timetravels.com"
                      target="_blank"
                      rel="noopener noreferrer"
                    >
                      <span>Timetravels</span
                      ><span><i class="fa-solid fa-circle-info"></i></span
                    ></a>
                  </p>
                  <img
                    src="/img/2022-12-08-01181.jpg"
                    alt="<?php echo $lang['asset_95'] ?>."
                  />
                </div>
                <div class="swiper-slide">
                  <p class="note">
                    <a
                      href="https://www.timetravels.com"
                      target="_blank"
                      rel="noopener noreferrer"
                      ><span>Timetravels</span
                      ><span><i class="fa-solid fa-circle-info"></i></span
                    ></a>
                  </p>
                  <img
                    src="/img/2022-12-07-01167.jpg"
                    alt="<?php echo $lang[''] ?>."
                  />
                </div>
                <div class="swiper-slide">
                  <p class="note">
                    <a
                      href="https://touristisrael.com"
                      target="_blank"
                      rel="noopener noreferrer"
                      ><span>Tourist Israel</span
                      ><span><i class="fa-solid fa-circle-info"></i></span
                    ></a>
                  </p>
                  <img
                    src="/img/2023-08-29-01113.jpg"
                    alt="<?php echo $lang['asset_176'] ?>."
                  />
                </div>

                <div class="swiper-slide">
                  <p class="note">
                    <a
                      href="https://touristisrael.com"
                      target="_blank"
                      rel="noopener noreferrer"
                      ><span>Tourist Israel</span
                      ><span><i class="fa-solid fa-circle-info"></i></span
                    ></a>
                  </p>
                  <img
                    src="/img/2023-08-29-01096.jpg"
                    alt="<?php echo $lang['asset_177'] ?>."
                  />
                </div>
                <div class="swiper-slide">
                  <p class="note">
                    <a
                      href="https://touristisrael.com"
                      target="_blank"
                      rel="noopener noreferrer"
                      ><span>Tourist Israel</span
                      ><span><i class="fa-solid fa-circle-info"></i></span
                    ></a>
                  </p>
                  <img
                    src="/img/2023-08-29-01059.jpg"
                    alt="<?php echo $lang['asset_178'] ?>."
                  />
                </div>
                <div class="swiper-slide">
                  <p class="note">
                    <a
                      href="https://adamsochorec.com/blog/aland"
                      target="_blank"
                      rel="noopener noreferrer"
                      ><span>Åland</span
                      ><span><i class="fa-solid fa-circle-info"></i></span
                    ></a>
                  </p>
                  <img
                    src="/img/2022-10-15-00970.jpg"
                    alt="<?php echo $lang['asset_49'] ?>."
                  />
                </div>
                <div class="swiper-slide">
                  <p class="note">
                    <a
                      href="https://adamsochorec.com/blog/aland"
                      target="_blank"
                      rel="noopener noreferrer"
                      ><span>Åland</span
                      ><span><i class="fa-solid fa-circle-info"></i></span
                    ></a>
                  </p>
                  <img
                    src="/img/2022-10-16-00979.jpg"
                    alt="<?php echo $lang['asset_87'] ?>."
                  />
                </div>
                <div class="swiper-slide">
                  <p class="note">
                    <a
                      href="https://adamsochorec.com/blog/vestkystruten"
                      target="_blank"
                      rel="noopener noreferrer"
                      ><span><?php echo $lang['asset_151'] ?></span
                      ><span><i class="fa-solid fa-circle-info"></i></span
                    ></a>
                  </p>
                  <img
                    src="/img/2022-07-20-00854.jpg"
                    alt="<?php echo $lang['asset_92'] ?>."
                  />
                </div>
                <div class="swiper-slide">
                  <img
                    src="/img/2022-07-26-00855.jpg"
                    alt="<?php echo $lang['asset_121'] ?>."
                  />
                  <div class="gallery-item-caption">
                    <h3>
                      <i class="fa-regular fa-circle-play"></i>

                      <?php echo $lang['asset_151'] ?><br />
                      <span>2022</span>
                    </h3>
                    <a
                      class="vimeo-popup"
                      href="https://www.youtube-nocookie.com/embed/3go3v59pfEo?modestbranding=1"
                    ></a>
                  </div>
                </div>
                <div class="swiper-slide">
                  <img
                    src="/img/2023-08-06-00304.jpg"
                    alt="<?php echo $lang['asset_86'] ?>."
                  />
                </div>
                <div class="swiper-slide">
                  <img
                    src="/img/2023-07-26-00100.jpg"
                    alt="<?php echo $lang['asset_93'] ?>."
                  />
                </div>
              </div>
              <!-- If we need pagination -->
              <div class="swiper-pagination"></div>

              <!-- If we need navigation buttons -->
              <div class="swiper-button-prev"></div>
              <div class="swiper-button-next"></div>

              <!-- If we need scrollbar -->
              <div class="swiper-scrollbar"></div>
            </div>
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
