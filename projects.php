<?php include 'languages/config.php'; ?>
<!DOCTYPE html>
<html lang="<?php echo $_SESSION['lang'] ?>">
  <head>
    <?php
    $IPATH = $_SERVER['DOCUMENT_ROOT'] . '/assets/components/';
    include $IPATH . 'head.php';
    ?>

    <link rel="stylesheet" href="photoswipe/dist/photoswipe.css" />
    <meta name="description" content="<?php echo $lang['asset_10'] ?>" />
    <meta name="keywords" content="<?php echo $lang['asset_219'] ?>" />
    <title>Projects | Slavic Media</title>
  </head>
  <body id="projects">
    <!-- HEADER START -->
    <?php
    $IPATH = $_SERVER['DOCUMENT_ROOT'] . '/assets/components/';
    include $IPATH . 'nav-bar.php';
    ?>
    <!-- HEADER END -->
    <main>
      <article class="wrapper-wide">
        <div
          class="pathname-container"
          role="navigation"
          aria-label="Breadcrumb navigation"
        ></div>
        <h1 class="reveal" aria-label="<?php echo $lang['asset_102'] ?>">
          <?php echo $lang['asset_102'] ?>
        </h1>
        <div class="pathname-container reveal">
          <p>
            <span class="pathname"
              ><a href="/" aria-label="Home"></a> &#8250;
            </span>
            <span class="pathname" aria-label="<?php echo $lang['asset_22'] ?>"
              ><?php echo $lang['asset_22'] ?></span
            >
          </p>
        </div>
      </article>
      <!-- VIDEO START -->
      <article class="wrapper-wide" id="video">
        <hr class="reveal" role="separator" />
        <div class="grid-container fifty-fifty caption-container">
          <div class="grid-item reveal">
            <h2>
              <span class="highlited"><?php echo $lang['asset_13'] ?></span>
              <?php echo $lang['asset_22'] ?>
            </h2>
            <div class="hide-cta-min reveal">
              <a
                class="cta"
                href="/services"
                aria-label="<?php echo $lang['asset_117'] ?>"
              >
                <?php echo $lang['asset_116'] ?>
              </a>
            </div>
          </div>
          <div class="grid-item">
            <p class="reveal">
              <?php echo $lang['asset_185'] ?>
            </p>
            <div class="hide-cta-max reveal">
              <a
                class="cta"
                href="/services"
                aria-label="<?php echo $lang['asset_117'] ?>"
              >
                <?php echo $lang['asset_116'] ?>
              </a>
            </div>
          </div>
        </div>
        <hr class="semi" role="separator" />
      </article>
      <article
        id="visuals"
        class="wrapper-wide video-gallery"
        aria-label="Video Gallery"
      >
        <div class="gallery-item reveal">
          <img
            src="/img/cover-swedishlapland.jpg"
            class="north-cascades-img"
            alt="<?php echo $lang['asset_118'] ?>."
          />
          <div class="gallery-item-caption">
            <h3>
              <i class="fa-regular fa-circle-play"></i
              ><br class="video-gallery-break" />
              <?php echo $lang['asset_118'] ?>

              <br />
              <span>2024</span>
            </h3>
            <p><i class="fa-solid fa-link"></i>&nbsp; timetravels.com</p>
            <a
              class="vimeo-popup"
              href="https://www.youtube-nocookie.com/embed/Nro_svpKDWE?modestbranding=1"
            ></a>
          </div>
        </div>
        <!--   <div class="gallery-item reveal">
          <img
            src="/img/cover-sleddog.jpg"
            class="north-cascades-img"
            alt="<?php echo $lang[''] ?>."
          />
          <div class="gallery-item-caption">
            <h3>
              <i class="fa-regular fa-circle-play"></i
              ><br class="video-gallery-break" />
              <?php echo $lang['asset_46'] ?>

              <br />
              <span>2023</span>
            </h3>
            <p><i class="fa-solid fa-link"></i>&nbsp; sleddog.se</p>
            <a
              class="vimeo-popup"
              href="https://www.youtube-nocookie.com/embed/Q_pr-zmPdpY?modestbranding=1"
            ></a>
          </div>
        </div> -->
        <div class="gallery-item reveal" aria-label="Huset Fundament 2023">
          <img
            src="/img/cover-husetfundament.jpg"
            alt="<?php echo $lang['asset_40'] ?>."
          />
          <div class="gallery-item-caption">
            <h3>
              <i class="fa-regular fa-circle-play"></i
              ><br class="video-gallery-break" />
              Huset Fundament
              <br />
              <span>2023</span>
            </h3>
            <p aria-label="<?php echo $lang['asset_129'] ?>husetfundament.dk">
              <i class="fa-solid fa-link"></i>&nbsp; husetfundament.dk
            </p>

            <a
              aria-label="<?php echo $lang['asset_127'] ?>"
              class="vimeo-popup"
              href="https://www.youtube-nocookie.com/embed/XBqSmnszKrI?modestbranding=1"
            ></a>
          </div>
        </div>

        <div class="gallery-item reveal">
          <img
            src="/img/cover-repaire.jpg"
            alt="<?php echo $lang['asset_38'] ?>."
          />
          <div class="gallery-item-caption">
            <h3>
              <i class="fa-regular fa-circle-play"></i
              ><br class="video-gallery-break" />
              Repaire Festival
              <br />
              <span>2023 </span>
            </h3>
            <p><i class="fa-solid fa-link"></i>&nbsp; nicolaikultur.dk</p>
            <a
              class="vimeo-popup"
              href="https://www.youtube-nocookie.com/embed/b22MLz0pgj0?modestbranding=1"
            ></a>
          </div>
        </div>

        <div class="gallery-item reveal">
          <img
            src="/img/cover-aland.jpg"
            alt="<?php echo $lang['asset_218'] ?>."
          />
          <div class="gallery-item-caption">
            <h3>
              <i class="fa-regular fa-circle-play"></i
              ><br class="video-gallery-break" />
              <?php echo $lang['asset_218'] ?>
              <br />
              <span>2023</span>
            </h3>
            <a
              class="vimeo-popup"
              href="https://www.youtube-nocookie.com/embed/RYr5MRm1yB8?modestbranding=1"
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
              <i class="fa-regular fa-circle-play"></i
              ><br class="video-gallery-break" />

              Samsø <br />
              <span>2023</span>
            </h3>
            <a
              class="vimeo-popup"
              href="https://www.youtube-nocookie.com/embed/VARZU0RyWIo?modestbranding=1"
            ></a>
          </div>
        </div>

        <div class="gallery-item reveal">
          <img
            src="/img/cover-parkour.jpg"
            class="north-cascades-img"
            alt="<?php echo $lang[''] ?>."
          />
          <div class="gallery-item-caption">
            <h3>
              <i class="fa-regular fa-circle-play"></i
              ><br class="video-gallery-break" />
              <?php echo $lang[''] ?>Parkour Škola

              <br />
              <span>2022</span>
            </h3>
            <p><i class="fa-solid fa-link"></i>&nbsp; parkouskola.sk</p>
            <a
              class="vimeo-popup"
              href="https://www.youtube-nocookie.com/embed/10MkaUOoqDo?modestbranding=1"
            ></a>
          </div>
        </div>
      </article>

      <!-- VIDEO GALLERY END -->
      <!-- VIDEO END -->
      <!-- PHOTO START -->
      <article class="wrapper-wide" id="photo">
        <hr class="reveal" role="separator" />
        <div class="grid-container fifty-fifty caption-container">
          <div class="grid-item reveal">
            <h2>
              <span class="highlited"><?php echo $lang['asset_11'] ?></span>
              <?php echo $lang['asset_22'] ?>
            </h2>

            <div class="hide-cta-min reveal">
              <a
                class="cta"
                href="/services"
                aria-label="<?php echo $lang['asset_117'] ?>"
              >
                <?php echo $lang['asset_116'] ?>
              </a>
            </div>
          </div>
          <div class="grid-item">
            <p class="reveal">
              <?php echo $lang['asset_173'] ?>
            </p>
            <div class="hide-cta-max reveal">
              <a
                class="cta"
                href="/services"
                aria-label="<?php echo $lang['asset_117'] ?>"
              >
                <?php echo $lang['asset_116'] ?>
              </a>
            </div>
          </div>
        </div>
      </article>
      <hr class="semi" role="separator" />
      <article class="popup-gallery" id="visuals">
        <div class="row">
          <div class="column">
            <div class="reveal">
              <a
                src="/img/hq/2023-12-01-00263.jpg"
                title="<?php echo $lang['asset_280'] ?>."
                year="2023"
                client='<a
              href="https://www.timetravels.com"
              target="_blank"
              rel="noopener noreferrer nofollow"
              >Timetravels Ltd</a
            >'
              >
                <img
                  src="/img/2023-12-01-00263.jpg"
                  alt="<?php echo $lang['asset_280'] ?>."
                  title="<?php echo $lang['asset_280'] ?>."
              /></a>
            </div>
            <div class="reveal">
              <a
                src="/img/hq/2023-11-30-00006.jpg"
                title="<?php echo $lang['asset_281'] ?>."
                year="2023"
                client='<a
              href="https://www.timetravels.com"
              target="_blank"
              rel="noopener noreferrer nofollow"
              >Timetravels Ltd</a
            >'
              >
                <img
                  src="/img/2023-11-30-00006.jpg"
                  alt="<?php echo $lang['asset_281'] ?>."
                  title="<?php echo $lang['asset_281'] ?>."
              /></a>
            </div>
            <div class="reveal">
              <a
                src="/img/hq/2022-12-02-000065.jpg"
                title="<?php echo $lang['asset_282'] ?>."
                year="2023"
                client='<a
              href="https://www.sleddog.se"
              target="_blank"
              rel="noopener noreferrer nofollow"
              >Kiruna Sleddog Tours</a
            >'
              >
                <img
                  src="/img/2022-12-02-000065.jpg"
                  alt="<?php echo $lang['asset_282'] ?>."
                  title="<?php echo $lang['asset_282'] ?>."
              /></a>
            </div>
            <div class="reveal">
              <a
                src="/img/hq/2023-12-01-00250.jpg"
                title="<?php echo $lang['asset_283'] ?>."
                year="2023"
                client='<a
              href="https://www.timetravels.com"
              target="_blank"
              rel="noopener noreferrer nofollow"
              >Timetravels Ltd</a
            >'
              >
                <img
                  src="/img/2023-12-01-00250.jpg"
                  alt="<?php echo $lang['asset_283'] ?>."
                  title="<?php echo $lang['asset_283'] ?>."
              /></a>
            </div>
            <div class="reveal">
              <a
                src="/img/hq/2023-11-30-00036.jpg"
                title="<?php echo $lang['asset_284'] ?>."
                year="2023"
                client='<a
              href="https://www.timetravels.com"
              target="_blank"
              rel="noopener noreferrer nofollow"
              >Timetravels Ltd</a
            >'
              >
                <img
                  src="/img/2023-11-30-00036.jpg"
                  alt="<?php echo $lang['asset_284'] ?>."
                  title="<?php echo $lang['asset_284'] ?>."
              /></a>
            </div>
            <div class="reveal">
              <a
                src="/img/hq/2022-12-03-000465.jpg"
                title="<?php echo $lang['asset_285'] ?>."
                year="2023"
                client='<a
              href="https://www.timetravels.com"
              target="_blank"
              rel="noopener noreferrer nofollow"
              >Timetravels Ltd</a
            >'
              >
                <img
                  src="/img/2022-12-03-000465.jpg"
                  alt="<?php echo $lang['asset_285'] ?>."
                  title="<?php echo $lang['asset_285'] ?>."
              /></a>
            </div>
            <div class="reveal">
              <a
                src="/img/hq/2023-12-02-00459.jpg"
                title="<?php echo $lang['asset_286'] ?>."
                year="2023"
                client='<a
              href="https://www.sleddog.se"
              target="_blank"
              rel="noopener noreferrer nofollow"
              >Kiruna Sleddog Tours</a
            >'
              >
                <img
                  src="/img/2023-12-02-00459.jpg"
                  alt="<?php echo $lang['asset_286'] ?>."
                  title="<?php echo $lang['asset_286'] ?>."
              /></a>
            </div>
            <div class="reveal">
              <a
                src="/img/hq/2023-05-27-00025.jpg"
                alt="<?php echo $lang['asset_61'] ?>."
                title="<?php echo $lang['asset_61'] ?>."
                year="2023"
                client='<a
              href="https://husetfundament.dk/"
              target="_blank"
              rel="noopener noreferrer nofollow"
              >Huset Fundament</a
            >'
              >
                <img
                  src="/img/2023-05-27-00025.jpg"
                  alt="<?php echo $lang['asset_61'] ?>."
                  title="<?php echo $lang['asset_61'] ?>."
                  year="2023"
                  client='<a
                href="https://husetfundament.dk/"
                target="_blank"
                rel="noopener noreferrer nofollow"
                >Huset Fundament</a
              >'
              /></a>
            </div>
          </div>
          <div class="column column-padding-1">
            <div class="reveal">
              <a
                src="/img/2022-10-15-00970.jpg"
                title="<?php echo $lang['asset_49'] ?>."
                year="2022"
                client="<a href='https://adamsochorec.com/blog/aland'><?php echo $lang['asset_218'] ?></a>"
              >
                <img
                  src="/img/2022-10-15-00970.jpg"
                  alt="<?php echo $lang['asset_49'] ?>."
                  title="<?php echo $lang['asset_49'] ?>."
                />
              </a>
            </div>
            <div class="reveal">
              <a
                src="/img/2022-10-16-00979.jpg"
                title="<?php echo $lang['asset_49'] ?>."
                year="2022"
                client="<a href='https://adamsochorec.com/blog/aland'><?php echo $lang['asset_218'] ?></a>"
              >
                <img
                  src="/img/2022-10-16-00979.jpg"
                  alt="<?php echo $lang['asset_49'] ?>."
                  title="<?php echo $lang['asset_49'] ?>."
                />
              </a>
            </div>

            <div class="reveal">
              <a
                src="/img/hq/2023-08-29-01113.jpg"
                year="2023"
                client='<a
            href="https://touristisrael.com"
            target="_blank"
            rel="noopener noreferrer nofollow"
            >Tourist Israel</a
          >'
              >
                <img
                  src="/img/hq/2023-08-29-01113.jpg"
                  alt="<?php echo $lang['asset_176'] ?>."
                  title="<?php echo $lang['asset_176'] ?>."
              /></a>
            </div>
            <div class="reveal">
              <a
                src="/img/hq/2023-09-23-00049.jpg"
                title="<?php echo $lang['asset_71'] ?>."
                year="2023"
                client='<a
              href="https://husetfundament.dk/"
              target="_blank"
              rel="noopener noreferrer nofollow"
              >Huset Fundament</a
            >'
              >
                <img
                  src="/img/2023-09-23-00049.jpg"
                  alt="<?php echo $lang['asset_71'] ?>."
                  title="<?php echo $lang['asset_71'] ?>."
              /></a>
            </div>
            <div class="reveal">
              <a
                src="/img/hq/2023-09-09-10524.jpg"
                title="<?php echo $lang['asset_66'] ?>."
                year="2023"
                client='<a
              href="https://husetfundament.dk/"
              target="_blank"
              rel="noopener noreferrer nofollow"
              >Huset Fundament</a
            >'
              >
                <img
                  src="/img/2023-09-09-10524.jpg"
                  alt="<?php echo $lang['asset_66'] ?>."
                  title="<?php echo $lang['asset_66'] ?>."
              /></a>
            </div>
            <div class="reveal">
              <a
                src="/img/hq/2021-06-24-01208.jpg"
                year="2021"
                client='<a
              href="https://www.divadlodisk.cz/"
              target="_blank"
              rel="noopener noreferrer nofollow"
              >Divadlo Disk</a
            >'
              >
                <img
                  src="/img/2021-06-24-01208.jpg"
                  alt="<?php echo $lang['asset_65'] ?>."
              /></a>
            </div>
            <div class="reveal">
              <a
                src="/img/hq/2021-06-24-01233-2.jpg"
                title="<?php echo $lang['asset_54'] ?>."
                year="2023"
                client='<a
              href="https://www.divadlodisk.cz/"
              target="_blank"
              rel="noopener noreferrer nofollow"
              >Divadlo Disk</a
            >'
              >
                <img
                  src="/img/2021-06-24-01233-2.jpg"
                  alt="<?php echo $lang['asset_54'] ?>."
                  title="<?php echo $lang['asset_54'] ?>."
              /></a>
            </div>
          </div>
          <div class="column column-padding-2">
            <div class="reveal">
              <a
                src="/img/hq/2023-08-29-01096.jpg"
                title="<?php echo $lang['asset_177'] ?>."
                year="2023"
                client='<a
              href="https://touristisrael.com"
              target="_blank"
              rel="noopener noreferrer nofollow"
              >Tourist Israel</a
            >'
              >
                <img
                  src="/img/2023-08-29-01096.jpg"
                  alt="<?php echo $lang['asset_177'] ?>."
                  title="<?php echo $lang['asset_177'] ?>."
              /></a>
            </div>
            <div class="reveal">
              <a
                src="/img/hq/2023-08-29-01059.jpg"
                title="<?php echo $lang['asset_178'] ?>."
                year="2023"
                client='<a
              href="https://touristisrael.com"
              target="_blank"
              rel="noopener noreferrer nofollow"
              >Tourist Israel</a
            >'
              >
                <img
                  src="/img/2023-08-29-01059.jpg"
                  alt="<?php echo $lang['asset_178'] ?>."
                  title="<?php echo $lang['asset_178'] ?>."
              /></a>
            </div>
            <div class="reveal">
              <a
                src="/img/hq/2021-04-25-00693.jpg"
                title="<?php echo $lang['asset_55'] ?>."
                year="2021"
                client='<a
              href="ttps://www.divadlonavinohradech.com/"
              target="_blank"
              rel="noopener noreferrer nofollow"
              >Divadlo na Vinohradech</a
            >'
              >
                <img
                  src="/img/2021-04-25-00693.jpg"
                  title="<?php echo $lang['asset_55'] ?>."
                  alt="<?php echo $lang['asset_55'] ?>."
              /></a>
            </div>
            <div class="reveal">
              <a
                src="/img/hq/2021-04-14-00608.jpg"
                title="<?php echo $lang['asset_56'] ?>."
                year="2021"
                client='<a
              href="https://www.divadlonavinohradech.com/"
              target="_blank"
              rel="noopener noreferrer nofollow"
              >Divadlo na Vinohradech</a
            >'
              >
                <img
                  src="/img/2021-04-14-00608.jpg"
                  title="<?php echo $lang['asset_56'] ?>."
                  alt="<?php echo $lang['asset_56'] ?>."
              /></a>
            </div>
            <div class="reveal">
              <a
                src="/img/hq/2021-09-05-01666.jpg"
                title="<?php echo $lang['asset_148'] ?>."
                year="2021"
                client=""
              >
                <img
                  src="/img/2021-09-05-01666.jpg"
                  title="<?php echo $lang['asset_148'] ?>."
                  alt="<?php echo $lang['asset_148'] ?>."
              /></a>
            </div>
            <div class="reveal">
              <a
                src="/img/hq/hvalp.jpg"
                alt="<?php echo $lang['asset_150'] ?>."
                title="<?php echo $lang['asset_150'] ?>."
                year="2023"
                client="Hvalp"
              >
                <img
                  src="/img/hvalp.jpg"
                  alt="<?php echo $lang['asset_150'] ?>."
                  title="<?php echo $lang['asset_150'] ?>."
                  year="2023"
                  client="Hvalp"
              /></a>
            </div>
            <div class="reveal">
              <a
                src="/img/hq/2023-09-09-10507.jpg"
                title="<?php echo $lang['asset_67'] ?>."
                year="2023"
                client='<a
              href="https://www.husetfundament.dk"
              target="_blank"
              rel="noopener noreferrer nofollow"
              >Huset Fundament</a
            >'
              >
                <img
                  src="/img/2023-09-09-10507.jpg"
                  alt="<?php echo $lang['asset_67'] ?>."
                  title="<?php echo $lang['asset_67'] ?>."
              /></a>
            </div>
          </div>
          <div class="column">
            <div class="reveal">
              <a
                src="/img/hq/2021-06-21-01194.jpg"
                title="<?php echo $lang['asset_4'] ?>."
                year="2021"
                client='<a
              href="https://www.slovo21.cz/"
              target="_blank"
              rel="noopener noreferrer nofollow"
              >Slovo 21</a
            >'
              >
                <img
                  src="/img/2021-06-21-01194.jpg"
                  alt="<?php echo $lang['asset_4'] ?>."
                  title="<?php echo $lang['asset_4'] ?>."
              /></a>
            </div>
            <div class="reveal">
              <a
                src="/img/hq/2021-11-13-02059.jpg"
                title="<?php echo $lang['asset_52'] ?>."
                year="2021"
                client=""
              >
                <img
                  src="/img/2021-11-13-02059.jpg"
                  title="<?php echo $lang['asset_52'] ?>."
                  alt="<?php echo $lang['asset_52'] ?>."
              /></a>
            </div>
            <div class="reveal">
              <a
                src="/img/hq/2021-08-24-01615.jpg"
                title="<?php echo $lang['asset_147'] ?>."
                year="2021"
                client=""
              >
                <img
                  src="/img/2021-08-24-01615.jpg"
                  title="<?php echo $lang['asset_147'] ?>."
                  alt="<?php echo $lang['asset_147'] ?>."
              /></a>
            </div>
            <div class="reveal">
              <a
                src="/img/hq/2023-11-13-00267.jpg"
                title="<?php echo $lang['asset_2'] ?>."
                year="2023"
                client='<a
              href="https://www.sort-hvid.dk/"
              target="_blank"
              rel="noopener noreferrer nofollow"
              >Sort/Hvid</a
            >'
              >
                <img
                  src="/img/2023-11-13-00267.jpg"
                  title="<?php echo $lang['asset_2'] ?>."
                  alt="<?php echo $lang['asset_2'] ?>."
              /></a>
            </div>
            <div class="reveal">
              <a
                src="/img/hq/2021-05-28-01020.jpg"
                title="<?php echo $lang['asset_51'] ?>."
                year="2021"
                client='<a
              href=""
              target="_blank"
              rel="noopener noreferrer nofollow"
              ></a
            >'
              >
                <img
                  src="/img/2021-05-28-01020.jpg"
                  title="<?php echo $lang['asset_51'] ?>."
                  alt="<?php echo $lang['asset_51'] ?>."
              /></a>
            </div>
            <div class="reveal">
              <a
                src="/img/hq/2022-06-28-00708.jpg"
                title="<?php echo $lang['asset_70'] ?>."
                year="2023"
                client='<a
              href="https://www.roskilde-festival.dk/da/"
              target="_blank"
              rel="noopener noreferrer nofollow"
              >Rosklide Festival</a
            >'
              >
                <img src="/img/2022-06-28-00708.jpg" alt="<?php echo $lang['asset_70'] ?>."
                title="<?php echo $lang['asset_70'] ?>."</a
              >
            </div>
          </div>
        </div>
      </article>

      <!-- PHOTO END -->
    </main>
    <!-- FOOTER START -->

    <?php
    $IPATH = $_SERVER['DOCUMENT_ROOT'] . '/assets/components/';
    include $IPATH . 'footer.php';
    ?>

    <script
      type="text/javascript"
      src="/assets/cookies.js"
      defer
      role="script"
    ></script>
    <script
      type="text/javascript"
      src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js"
    ></script>
    <script
      type="text/javascript"
      src="https://cdn.rawgit.com/dimsemenov/Magnific-Popup/master/dist/jquery.magnific-popup.min.js"
    ></script>
    <script type="text/javascript" src="/assets/projects.js"></script>

    <!-- FOOTER END -->
  </body>
</html>
