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
    <title>Slavic Media</title>
  </head>
  <body id="portfolio">
    <!-- HEADER START -->
    <?php
    $IPATH = $_SERVER['DOCUMENT_ROOT'] . '/assets/php/';
    include $IPATH . 'global-nav-bar.php';
    ?>
    <!-- HEADER END -->
    <main>
      <article class="wrapper-wide">
        <div class="pathname-container"></div>
        <div class="grid-item">
          <h2 class="highlited reveal"><?php echo $lang['asset_43'] ?></h2>
          <h1 class="reveal"><?php echo $lang['asset_102'] ?></h1>
          <div class="pathname-container reveal">
            <p>
              <span class="pathname"><a href="/"></a> &#8250; </span>
              <span class="pathname"><?php echo $lang['asset_102'] ?></span>
            </p>
          </div>
        </div>
      </article>
      <!-- VIDEO GALLERY START -->
      <article class="wrapper-wide" id="<?php echo $lang['asset_107'] ?>">
        <hr class="reveal" />
        <div class="grid-container fifty-fifty">
          <div class="grid-item reveal">
            <h3 class="highlited">Video Services</h3>
            <h2>Hocičo</h2>
            <br />
            <a class="cta" href="/photo#<?php echo $lang['asset_107'] ?>"
              >Hocičo plans
            </a>
          </div>
          <div class="grid-item">
            <p class="reveal">
              <?php echo $lang['asset_109'] ?>
            </p>
          </div>
        </div>
      </article>
      <hr style="opacity: 0;"" />
      <article id="visual" class="video-gallery">
        <div class="gallery-item reveal">
          <img
            src="/img/cover-husetfundament.jpg"
            alt="<?php echo $lang['asset_40'] ?>."
          />
          <div class="gallery-item-caption">
            <h3>
              Huset Fundament
              <svg
                xmlns="http://www.w3.org/2000/svg"
                id="videoplay"
                viewBox="0 0 512 512"
              >
                <path
                  d="M464 256A208 208 0 1 0 48 256a208 208 0 1 0 416 0zM0 256a256 256 0 1 1 512 0A256 256 0 1 1 0 256zM188.3 147.1c7.6-4.2 16.8-4.1 24.3 .5l144 88c7.1 4.4 11.5 12.1 11.5 20.5s-4.4 16.1-11.5 20.5l-144 88c-7.4 4.5-16.7 4.7-24.3 .5s-12.3-12.2-12.3-20.9V168c0-8.7 4.7-16.7 12.3-20.9z"
                /></svg
              ><br />
              <span><a>husetfundament.dk</a></span>
            </h3>
            <p><?php echo $lang['asset_40'] ?></p>

            <a
              class="vimeo-popup"
              href="https://www.youtube-nocookie.com/embed/hNFAma898Ak?modestbranding=1"
            ></a>
          </div>
        </div>

        <div class="gallery-item reveal">
          <img
            src="/img/cover-repaireandremake.jpg"
            alt="<?php echo $lang['asset_38'] ?>."
          />
          <div class="gallery-item-caption">
            <h3>
              Repaire Festival
              <svg
                xmlns="http://www.w3.org/2000/svg"
                id="videoplay"
                viewBox="0 0 512 512"
              >
                <path
                  d="M464 256A208 208 0 1 0 48 256a208 208 0 1 0 416 0zM0 256a256 256 0 1 1 512 0A256 256 0 1 1 0 256zM188.3 147.1c7.6-4.2 16.8-4.1 24.3 .5l144 88c7.1 4.4 11.5 12.1 11.5 20.5s-4.4 16.1-11.5 20.5l-144 88c-7.4 4.5-16.7 4.7-24.3 .5s-12.3-12.2-12.3-20.9V168c0-8.7 4.7-16.7 12.3-20.9z"
                />
              </svg>
              <br />
              <span><a>nicolaikultur.dk</a></span>
            </h3>

            <p><?php echo $lang['asset_38'] ?></p>
            <a
              class="vimeo-popup"
              href="https://www.youtube-nocookie.com/embed/b22MLz0pgj0?modestbranding=1"
            ></a>
          </div>
        </div>

        <div class="gallery-item reveal">
          <img
            src="/img/cover-parkourtabor.jpg"
            class="north-cascades-img"
            alt="<?php echo $lang['parkourschool_title'] ?>."
          />
          <div class="gallery-item-caption">
            <h3>
              <?php echo $lang['asset_46'] ?>
              <svg
                xmlns="http://www.w3.org/2000/svg"
                id="videoplay"
                viewBox="0 0 512 512"
              >
                <path
                  d="M464 256A208 208 0 1 0 48 256a208 208 0 1 0 416 0zM0 256a256 256 0 1 1 512 0A256 256 0 1 1 0 256zM188.3 147.1c7.6-4.2 16.8-4.1 24.3 .5l144 88c7.1 4.4 11.5 12.1 11.5 20.5s-4.4 16.1-11.5 20.5l-144 88c-7.4 4.5-16.7 4.7-24.3 .5s-12.3-12.2-12.3-20.9V168c0-8.7 4.7-16.7 12.3-20.9z"
                />
              </svg>
              <br />
              <span><a>parkourskola.sk</a></span>
            </h3>
            <p><?php echo $lang['asset_47'] ?></p>
            <a
              class="vimeo-popup"
              href="https://www.youtube-nocookie.com/embed/10MkaUOoqDo?modestbranding=1"
            ></a>
          </div>
        </div>

        <div class="gallery-item reveal">
          <img
            src="/img/cover-halloweenparty.jpg"
            alt="<?php echo $lang['asset_49'] ?>."
          />
          <div class="gallery-item-caption">
            <h3>
              <?php echo $lang['asset_48'] ?>
              <svg
                xmlns="http://www.w3.org/2000/svg"
                id="videoplay"
                viewBox="0 0 512 512"
              >
                <path
                  d="M464 256A208 208 0 1 0 48 256a208 208 0 1 0 416 0zM0 256a256 256 0 1 1 512 0A256 256 0 1 1 0 256zM188.3 147.1c7.6-4.2 16.8-4.1 24.3 .5l144 88c7.1 4.4 11.5 12.1 11.5 20.5s-4.4 16.1-11.5 20.5l-144 88c-7.4 4.5-16.7 4.7-24.3 .5s-12.3-12.2-12.3-20.9V168c0-8.7 4.7-16.7 12.3-20.9z"
                />
              </svg>
              <br />
              <span><a>tribemedia.dk</a></span>
            </h3>
            <p><?php echo $lang['asset_49'] ?></p>
            <a
              class="vimeo-popup"
              href="https://www.youtube-nocookie.com/embed/aVACZcA69r4?modestbranding=1"
            ></a>
          </div>
        </div>
        <div class="gallery-item reveal">
          <img
            src="/img/cover-bygning5.jpg"
            alt="<?php echo $lang['asset_50'] ?>."
          />
          <div class="gallery-item-caption">
            <h3>
              Bygning 5
              <svg
                xmlns="http://www.w3.org/2000/svg"
                id="videoplay"
                viewBox="0 0 512 512"
              >
                <path
                  d="M464 256A208 208 0 1 0 48 256a208 208 0 1 0 416 0zM0 256a256 256 0 1 1 512 0A256 256 0 1 1 0 256zM188.3 147.1c7.6-4.2 16.8-4.1 24.3 .5l144 88c7.1 4.4 11.5 12.1 11.5 20.5s-4.4 16.1-11.5 20.5l-144 88c-7.4 4.5-16.7 4.7-24.3 .5s-12.3-12.2-12.3-20.9V168c0-8.7 4.7-16.7 12.3-20.9z"
                />
              </svg>
              <br />
              <span><a>bygning5.dk</a></span>
            </h3>
            <p><?php echo $lang['asset_50'] ?></p>
            <a
              class="vimeo-popup"
              href="https://www.youtube-nocookie.com/embed/7zRs5jSRxGs?modestbranding=1"
            ></a>
          </div>
        </div>
        <div class="gallery-item reveal">
          <img
            src="/img/cover-samso.jpg"
            alt="<?php echo $lang['asset_39'] ?>."
          />
          <div class="gallery-item-caption">
            <h3>
              Samsø
              <svg
                xmlns="http://www.w3.org/2000/svg"
                id="videoplay"
                viewBox="0 0 512 512"
              >
                <path
                  d="M464 256A208 208 0 1 0 48 256a208 208 0 1 0 416 0zM0 256a256 256 0 1 1 512 0A256 256 0 1 1 0 256zM188.3 147.1c7.6-4.2 16.8-4.1 24.3 .5l144 88c7.1 4.4 11.5 12.1 11.5 20.5s-4.4 16.1-11.5 20.5l-144 88c-7.4 4.5-16.7 4.7-24.3 .5s-12.3-12.2-12.3-20.9V168c0-8.7 4.7-16.7 12.3-20.9z"
                />
              </svg>
            </h3>
            <p><?php echo $lang['asset_39'] ?></p>
            <a
              class="vimeo-popup"
              href="https://www.youtube-nocookie.com/embed/VARZU0RyWIo?modestbranding=1"
            ></a>
          </div>
        </div>
      </article>
      <!-- VIDEO GALLERY END -->
      <!-- PHOTO GALLERY START -->
      <!-- PORTRAIT START -->
      <article class="wrapper-wide" id="<?php echo $lang['asset_110'] ?>">
        <hr class="reveal" />
        <div class="grid-container fifty-fifty">
          <div class="grid-item reveal">
            <h3 class="highlited"><?php echo $lang['asset_108'] ?></h3>
            <h2>
              <?php echo $lang['asset_110'] ?>
            </h2>
            <br />
            <a class="cta" href="/photo#<?php echo $lang['asset_110'] ?>"
              ><?php echo $lang['asset_117'] ?>
            </a>
          </div>

          <div class="grid-item">
            <p class="reveal">
              <?php echo $lang['asset_112'] ?>
            </p>
          </div>
        </div>
      </article>
      <hr style="opacity: 0" />

      <article id="visuals">
        <div class="grid-container photo-grid">
          <div class="h-stretch reveal">
            <p class="note"><a href="">divadlonavinohradech.cz</a></p>

            <img
              src="/img/2021-04-13-00583.jpg"
              alt="<?php echo $lang['asset_51'] ?>."
            />
          </div>
          <div class="h-stretch reveal">
            <p class="note"><a href="">divadlonavinohradech.cz</a></p>

            <img
              src="/img/2021-05-16-00786.jpg"
              alt="<?php echo $lang['asset_51'] ?>."
            />
          </div>

          <div class="v-stretch reveal">
            <p class="note"><a href="">divadlonavinohradech.cz</a></p>

            <img
              src="/img/2021-11-13-02059.jpg"
              alt="<?php echo $lang['asset_52'] ?>."
            />
          </div>
          <div class="h-stretch reveal">
            <p class="note"><a href="">divadlonavinohradech.cz</a></p>

            <img
              src="/img/2021-06-24-01208.jpg"
              alt="<?php echo $lang['asset_53'] ?>."
            />
          </div>
          <div class="v-stretch reveal">
            <p class="note"><a href="">divadlonavinohradech.cz</a></p>

            <img
              src="/img/2021-06-24-01233.jpg"
              alt="<?php echo $lang['asset_54'] ?>."
            />
          </div>

          <div class="h-stretch reveal">
            <p class="note"><a href="">divadlonavinohradech.cz</a></p>

            <img
              src="/img/2021-04-25-00693.jpg"
              alt="<?php echo $lang['asset_55'] ?>."
            />
          </div>
          <div class="h-stretch reveal">
            <p class="note"><a href="">divadlonavinohradech.cz</a></p>

            <img
              src="/img/2021-04-14-00608.jpg"
              alt="<?php echo $lang['asset_56'] ?>."
            />
          </div>

          <div class="v-stretch reveal">
            <p class="note"><a href="">divadlonavinohradech.cz</a></p>

            <img
              src="/img/2021-10-17-01935.jpg"
              alt="<?php echo $lang['asset_57'] ?>."
            />
          </div>
          <div class="h-stretch reveal">
            <p class="note"><a href="">divadlonavinohradech.cz</a></p>

            <img
              src="/img/2021-05-28-01020.jpg"
              alt="<?php echo $lang['asset_58'] ?>."
            />
          </div>
          <div class="v-stretch reveal">
            <p class="note"><a href="">divadlonavinohradech.cz</a></p>

            <img
              src="/img/2021-09-05-01666.jpg"
              alt="<?php echo $lang['asset_59'] ?>."
            />
          </div>
        </div>
        <!-- PORTRAIT END -->
        <!-- EVENT START -->
      </article>
      <article class="wrapper-wide" id="<?php echo $lang['asset_107'] ?>">
        <hr class="reveal" />
        <div class="grid-container fifty-fifty">
          <div class="grid-item reveal">
            <h3 class="highlited"><?php echo $lang['asset_108'] ?></h3>
            <h2>
              <?php echo $lang['asset_107'] ?>
            </h2>
            <br />
            <a class="cta" href="/photo#<?php echo $lang['asset_107'] ?>"
              ><?php echo $lang['asset_116'] ?>
            </a>
          </div>
          <div class="grid-item">
            <p class="reveal">
              <?php echo $lang['asset_109'] ?>
            </p>
          </div>
        </div>
      </article>
      <hr style="opacity: 0" />

      <article id="visuals">
        <div class="grid-container photo-grid">
          <div class="h-stretch reveal">
            <img
              src="/img/2023-09-09-10524.jpg"
              alt="<?php echo $lang['asset_65'] ?>."
            />
          </div>
          <div class="h-stretch reveal">
            <img
              src="/img/2022-06-28-00708.jpg"
              alt="<?php echo $lang['asset_66'] ?>."
            />
          </div>

          <div class="v-stretch reveal">
            <img
              src="/img/2023-09-09-10507.jpg"
              alt="<?php echo $lang['asset_62'] ?>."
            />
          </div>
          <div class="h-stretch reveal">
            <img
              src="/img/2023-05-12-08991.jpg"
              alt="<?php echo $lang['asset_63'] ?>."
            />
          </div>
          <div class="v-stretch reveal">
            <img
              src="/img/2023-09-22-00026.jpg"
              alt="<?php echo $lang['asset_64'] ?>."
            />
          </div>
          <div class="h-stretch reveal">
            <img
              src="/img/2023-05-12-08965.jpg"
              alt="<?php echo $lang['asset_60'] ?>."
            />
          </div>
          <div class="h-stretch reveal">
            <img
              src="/img/2023-05-12-08969.jpg"
              alt="<?php echo $lang['asset_61'] ?>."
            />
          </div>

          <div class="v-stretch reveal">
            <img
              src="/img/2023-05-12-08987.jpg"
              alt="<?php echo $lang['asset_67'] ?>."
            />
          </div>
          <div class="h-stretch reveal">
            <img
              src="/img/2022-06-18-00518.jpg"
              alt="<?php echo $lang['asset_68'] ?>."
            />
          </div>
          <div class="v-stretch reveal">
            <img
              src="/img/2022-02-10-00116.jpg"
              alt="<?php echo $lang['asset_69'] ?>."
            />
          </div>
          <!-- EVENT END -->
        </div>
      </article>
      <article class="wrapper-wide" id="<?php echo $lang['asset_88'] ?>">
        <hr class="reveal" />
        <div class="grid-container fifty-fifty">
          <div class="grid-item reveal">
            <h3 class="highlited"><?php echo $lang['asset_108'] ?></h3>
            <h2>
              <?php echo $lang['asset_85'] ?>
            </h2>
            <br />
            <a class="cta" href="/photo#<?php echo $lang['asset_88'] ?>"
              ><?php echo $lang['asset_118'] ?>
            </a>
          </div>
          <div class="grid-item">
            <p class="reveal">
              <?php echo $lang['asset_109'] ?>
            </p>
          </div>
        </div>
      </article>
      <hr style="opacity: 0" />

      <article id="visuals">
        <div class="grid-container photo-grid">
          <div class="h-stretch reveal">
            <img
              src="/img/2022-10-15-00970.jpg"
              alt="<?php echo $lang[''] ?>."
            />
          </div>
          <div class="h-stretch reveal">
            <img
              src="/img/2022-10-16-00979.jpg"
              alt="<?php echo $lang[''] ?>."
            />
          </div>

          <div class="v-stretch reveal">
            <img
              src="/img/2023-08-06-00304.jpg"
              alt="<?php echo $lang[''] ?>."
            />
          </div>
          <div class="h-stretch reveal">
            <img
              src="/img/2023-07-26-00100.jpg"
              alt="<?php echo $lang[''] ?>."
            />
          </div>
          <div class="v-stretch reveal">
            <img
              src="/img/2022-10-17-01001.jpg"
              alt="<?php echo $lang[''] ?>."
            />
          </div>

          <div class="h-stretch reveal">
            <img
              src="/img/2022-12-08-01181.jpg"
              alt="<?php echo $lang[''] ?>."
            />
          </div>
          <div class="h-stretch reveal">
            <img
              src="/img/2022-12-07-01167.jpg"
              alt="<?php echo $lang[''] ?>."
            />
          </div>

          <div class="v-stretch reveal">
            <img src="/img/2023-08-04-159.jpg" alt="<?php echo $lang[''] ?>." />
          </div>
          <div class="h-stretch reveal">
            <img
              src="/img/2023-07-27-00147.jpg"
              alt="<?php echo $lang[''] ?>."
            />
          </div>
          <div class="v-stretch reveal">
            <img
              src="/img/2022-07-26-00855.jpg"
              alt="<?php echo $lang[''] ?>."
            />
          </div>
          <!-- EVENT END -->

          <!-- PHOTO GALLERY END -->
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
