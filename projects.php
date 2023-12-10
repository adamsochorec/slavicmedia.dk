<?php include 'languages/config.php'; ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <?php
    $IPATH = $_SERVER['DOCUMENT_ROOT'] . '/assets/components/';
    include $IPATH . 'head.php';
    ?>
    <link
      rel="stylesheet"
      href="https://cdn.rawgit.com/dimsemenov/Magnific-Popup/master/dist/magnific-popup.min.css"
    />
    <meta name="description" content="<?php echo $lang['asset_19'] ?>" />
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
              <?php echo $lang['asset_13'] ?>
              <span class="highlited"> <?php echo $lang['asset_22'] ?></span>
            </h2>
            <div class="hide-cta-min reveal">
              <a
                class="cta"
                href="/services#plans"
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
                href="/services#plans"
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
        <div class="gallery-item reveal" aria-label="Huset Fundament 2023">
          <img
            src="img/cover-husetfundament.jpg"
            alt="<?php echo $lang['asset_40'] ?>."
          />
          <div class="gallery-item-caption">
            <h3>
              <i class="fa-regular fa-circle-play"></i>
              Huset Fundament
              <br />
              <span>2023</span>
            </h3>
            <p aria-label="<?php echo $lang['asset_129'] ?>husetfundament.dk">
              <i class="fa-solid fa-arrow-up-right-from-square"></i> &nbsp;
              <a href>husetfundament.dk</a>
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
              <i class="fa-regular fa-circle-play"></i>
              Repaire Festival
              <br />
              <span>2023 </span>
            </h3>
            <p>
              <i class="fa-solid fa-arrow-up-right-from-square"></i> &nbsp;
              <a href>nicolaikultur.dk</a>
            </p>
            <a
              class="vimeo-popup"
              href="https://www.youtube-nocookie.com/embed/b22MLz0pgj0?modestbranding=1"
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
              <i class="fa-regular fa-circle-play"></i>
              <?php echo $lang['asset_46'] ?>

              <br />
              <span>2023</span>
            </h3>
            <p>
              <i class="fa-solid fa-arrow-up-right-from-square"></i> &nbsp;
              <a>parkourskola.sk</a>
            </p>
            <a
              class="vimeo-popup"
              href="https://www.youtube-nocookie.com/embed/10MkaUOoqDo?modestbranding=1"
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
              <i class="fa-regular fa-circle-play"></i>
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
            src="/img/cover-bygning5.jpg"
            alt="<?php echo $lang['asset_50'] ?>."
          />
          <div class="gallery-item-caption">
            <h3>
              <i class="fa-regular fa-circle-play"></i>

              Bygning 5
              <br />
              <span>2022</span>
            </h3>
            <p>
              <i class="fa-solid fa-arrow-up-right-from-square"></i> &nbsp;
              <a>bygning5.dk</a>
            </p>
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
              <i class="fa-regular fa-circle-play"></i>

              Samsø <br />
              <span>2023</span>
            </h3>
            <a
              class="vimeo-popup"
              href="https://www.youtube-nocookie.com/embed/VARZU0RyWIo?modestbranding=1"
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
              <?php echo $lang['asset_11'] ?>
              <span class="highlited"><?php echo $lang['asset_22'] ?></span>
            </h2>

            <div class="hide-cta-min reveal">
              <a
                class="cta"
                href="/services#plans"
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
                href="/services#plans"
                aria-label="<?php echo $lang['asset_117'] ?>"
              >
                <?php echo $lang['asset_116'] ?>
              </a>
            </div>
          </div>
        </div>
      </article>
      <hr class="semi" role="separator" />
      <article id="visuals">
        <div class="grid-container photo-grid">
          <div class="v-stretch reveal">
            <p class="note date">2023</p>
            <p class="note">
              <a
                href="https://www.timetravels.com"
                target="_blank"
                rel="noopener noreferrer nofollow"
              >
                <span>Timetravels&nbsp;&nbsp;</span
                ><span
                  ><i
                    class="fa-solid fa-arrow-up-right-from-square"
                  ></i></span
              ></a>
            </p>
            <img
              src="/img/2023-12-01-00263.jpg"
              alt="<?php echo $lang['asset_280'] ?>."
              title="<?php echo $lang['asset_280'] ?>."
            />
          </div>
          <div class="h-stretch reveal">
            <p class="note date">2023</p>
            <p class="note">
              <a
                href="https://www.timetravels.com"
                target="_blank"
                rel="noopener noreferrer nofollow"
              >
                <span>Timetravels&nbsp;&nbsp;</span
                ><span
                  ><i
                    class="fa-solid fa-arrow-up-right-from-square"
                  ></i></span
              ></a>
            </p>
            <img
              src="/img/2023-11-30-00006.jpg"
              alt="<?php echo $lang['asset_281'] ?>."
              title="<?php echo $lang['asset_281'] ?>."
            />
          </div>
          <div class="v-stretch reveal">
            <p class="note date">2023</p>
            <p class="note">
              <a
                href="https://www.sleddog.se"
                target="_blank"
                rel="noopener noreferrer nofollow"
              >
                <span>Sleddog.se&nbsp;&nbsp;</span
                ><span
                  ><i
                    class="fa-solid fa-arrow-up-right-from-square"
                  ></i></span
              ></a>
            </p>
            <img
              src="/img/2022-12-02-000065.jpg"
              alt="<?php echo $lang['asset_282'] ?>."
              title="<?php echo $lang['asset_282'] ?>."
            />
          </div>
          <div class="h-stretch reveal">
            <p class="note date">2023</p>
            <p class="note">
              <a
                href="https://www.timetravels.com"
                target="_blank"
                rel="noopener noreferrer nofollow"
              >
                <span>Timetravels&nbsp;&nbsp;</span
                ><span
                  ><i
                    class="fa-solid fa-arrow-up-right-from-square"
                  ></i></span
              ></a>
            </p>
            <img
              src="/img/2023-12-01-00250.jpg"
              alt="<?php echo $lang['asset_283'] ?>."
              title="<?php echo $lang['asset_283'] ?>."
            />
          </div>
          <div class="h-stretch reveal">
            <p class="note date">2023</p>
            <p class="note">
              <a
                href="https://www.timetravels.com"
                target="_blank"
                rel="noopener noreferrer nofollow"
              >
                <span>Timetravels&nbsp;&nbsp;</span
                ><span
                  ><i
                    class="fa-solid fa-arrow-up-right-from-square"
                  ></i></span
              ></a>
            </p>
            <img
              src="/img/2023-11-30-00036.jpg"
              alt="<?php echo $lang['asset_284'] ?>."
              title="<?php echo $lang['asset_284'] ?>."
            />
          </div>
          <div class="h-stretch reveal">
            <p class="note date">2023</p>
            <p class="note">
              <a
                href="https://www.timetravels.com"
                target="_blank"
                rel="noopener noreferrer nofollow"
              >
                <span>Timetravels&nbsp;&nbsp;</span
                ><span
                  ><i
                    class="fa-solid fa-arrow-up-right-from-square"
                  ></i></span
              ></a>
            </p>
            <img
              src="/img/2022-12-03-000465.jpg"
              alt="<?php echo $lang['asset_285'] ?>."
              title="<?php echo $lang['asset_285'] ?>."
            />
          </div>
          <div class="h-stretch reveal">
            <p class="note date">2023</p>
            <p class="note">
              <a
                href="https://www.sleddog.se"
                target="_blank"
                rel="noopener noreferrer nofollow"
              >
                <span>Sleddog.se&nbsp;&nbsp;</span
                ><span
                  ><i
                    class="fa-solid fa-arrow-up-right-from-square"
                  ></i></span
              ></a>
            </p>
            <img
              src="/img/2023-12-02-00459.jpg"
              alt="<?php echo $lang['asset_286'] ?>."
              title="<?php echo $lang['asset_286'] ?>."
            />
          </div>
          <div class="h-stretch reveal">
            <p class="note date">2022</p>
            <p class="note">
              <a
                href="https://adamsochorec.com/blog/aland"
                target="_blank"
                rel="noopener noreferrer nofollow"
                ><span><?php echo $lang['asset_218'] ?>&nbsp;&nbsp;</span
                ><span
                  ><i
                    class="fa-solid fa-arrow-up-right-from-square"
                  ></i></span
              ></a>
            </p>
            <img
              src="/img/2022-10-15-00970.jpg"
              alt="<?php echo $lang['asset_49'] ?>."
              title="<?php echo $lang['asset_49'] ?>."
            />
          </div>
          <div class="h-stretch reveal">
            <p class="note date">2022</p>
            <p class="note">
              <a
                href="https://adamsochorec.com/blog/aland"
                target="_blank"
                rel="noopener noreferrer nofollow"
                ><span><?php echo $lang['asset_218'] ?>&nbsp;&nbsp;</span
                ><span
                  ><i
                    class="fa-solid fa-arrow-up-right-from-square"
                  ></i></span
              ></a>
            </p>
            <img
              src="/img/2022-10-16-00979.jpg"
              alt="<?php echo $lang['asset_87'] ?>."
              title="<?php echo $lang['asset_87'] ?>."
            />
          </div>
          <div class="v-stretch reveal">
            <p class="note date">2023</p>
            <p class="note">
              <a
                href="https://touristisrael.com"
                target="_blank"
                rel="noopener noreferrer nofollow"
                ><span>Tourist Israel&nbsp;&nbsp;</span
                ><span
                  ><i
                    class="fa-solid fa-arrow-up-right-from-square"
                  ></i></span
              ></a>
            </p>
            <img
              src="/img/2023-08-29-01113.jpg"
              alt="<?php echo $lang['asset_176'] ?>."
              title="<?php echo $lang['asset_176'] ?>."
            />
          </div>
          <div class="h-stretch hide-photo-min reveal">
            <p class="note date">2023</p>
            <p class="note">
              <a
                href="https://touristisrael.com"
                target="_blank"
                rel="noopener noreferrer nofollow"
                ><span>Tourist Israel&nbsp;&nbsp;</span
                ><span
                  ><i
                    class="fa-solid fa-arrow-up-right-from-square"
                  ></i></span
              ></a>
            </p>
            <img
              src="/img/2023-08-29-01113.jpg"
              alt="<?php echo $lang['asset_176'] ?>."
              title="<?php echo $lang['asset_176'] ?>."
            />
          </div>
          <div class="h-stretch reveal">
            <p class="note date">2023</p>
            <p class="note">
              <a
                href="https://touristisrael.com"
                target="_blank"
                rel="noopener noreferrer nofollow"
                ><span>Tourist Israel&nbsp;&nbsp;</span
                ><span
                  ><i
                    class="fa-solid fa-arrow-up-right-from-square"
                  ></i></span
              ></a>
            </p>
            <img
              src="/img/2023-08-29-01096.jpg"
              alt="<?php echo $lang['asset_177'] ?>."
              title="<?php echo $lang['asset_177'] ?>."
            />
          </div>
          <div class="v-stretch reveal">
            <p class="note date">2023</p>
            <p class="note">
              <a
                href="https://touristisrael.com"
                target="_blank"
                rel="noopener noreferrer nofollow"
                ><span>Tourist Israel&nbsp;&nbsp;</span
                ><span
                  ><i
                    class="fa-solid fa-arrow-up-right-from-square"
                  ></i></span
              ></a>
            </p>
            <img
              src="/img/2023-08-29-01059.jpg"
              alt="<?php echo $lang['asset_178'] ?>."
              title="<?php echo $lang['asset_178'] ?>."
            />
          </div>
          <div class="h-stretch reveal">
            <p class="note date">2021</p>
            <p class="note">
              <a
                href="https://www.divadlonavinohradech.com/"
                target="_blank"
                rel="noopener noreferrer nofollow"
                ><span>Divadlo na Vinohradech&nbsp;&nbsp;</span
                ><span
                  ><i
                    class="fa-solid fa-arrow-up-right-from-square"
                  ></i></span
              ></a>
            </p>
            <img
              src="/img/2021-04-25-00693.jpg"
              title="<?php echo $lang['asset_55'] ?>."
              alt="<?php echo $lang['asset_55'] ?>."
            />
          </div>
          <div class="h-stretch reveal">
            <p class="note date">2021</p>
            <p class="note">
              <a
                href="https://www.divadlonavinohradech.com/"
                target="_blank"
                rel="noopener noreferrer nofollow"
                ><span>Divadlo na Vinohradech&nbsp;&nbsp;</span>
                <span
                  ><i
                    class="fa-solid fa-arrow-up-right-from-square"
                  ></i></span
              ></a>
            </p>
            <img
              src="/img/2021-04-14-00608.jpg"
              title="<?php echo $lang['asset_56'] ?>."
              alt="<?php echo $lang['asset_56'] ?>."
            />
          </div>
          <div class="v-stretch reveal">
            <p class="note date">2022</p>
            <img
              src="/img/2021-09-05-01666.jpg"
              title="<?php echo $lang['asset_148'] ?>."
              alt="<?php echo $lang['asset_148'] ?>."
            />
          </div>
          <div class="h-stretch reveal">
            <p class="note date">2023</p>
            <img
              src="/img/hvalp.jpg"
              alt="<?php echo $lang['asset_150'] ?>."
              title="<?php echo $lang['asset_150'] ?>."
            />
          </div>
          <div class="v-stretch reveal">
            <p class="note date">2021</p>
            <p class="note">
              <a
                href="https://www.slovo21.cz/"
                target="_blank"
                rel="noopener noreferrer nofollow"
                ><span>Slovo 21&nbsp;&nbsp;</span
                ><span
                  ><i
                    class="fa-solid fa-arrow-up-right-from-square"
                  ></i></span
              ></a>
            </p>
            <img
              src="/img/2021-06-21-01194.jpg"
              alt="<?php echo $lang['asset_4'] ?>."
              title="<?php echo $lang['asset_4'] ?>."
            />
          </div>
          <div class="v-stretch reveal">
            <p class="note date">2021</p>
            <img
              src="/img/2021-11-13-02059.jpg"
              title="<?php echo $lang['asset_52'] ?>."
              alt="<?php echo $lang['asset_52'] ?>."
            />
          </div>
          <div class="h-stretch reveal">
            <p class="note date">2021</p>
            <img
              src="/img/2021-08-24-01615.jpg"
              title="<?php echo $lang['asset_147'] ?>."
              alt="<?php echo $lang['asset_147'] ?>."
            />
          </div>
          <div class="v-stretch reveal">
            <p class="note date">2021</p>
            <p class="note">
              <a
                href="https://www.divadlodisk.cz/"
                target="_blank"
                rel="noopener noreferrer nofollow"
                ><span>Divadlo Disk&nbsp;&nbsp;</span><span
                  ><i class="fa-solid fa-arrow-up-right-from-square"></i
                ></span>
              </a>
            </p>
            <img
              src="/img/2021-06-24-01233.jpg"
              alt="<?php echo $lang['asset_54'] ?>."
              title="<?php echo $lang['asset_54'] ?>."
            />
          </div>
          <div class="h-stretch reveal">
            <p class="note date">2021</p>
            <p class="note">
              <a
                href="https://www.sort-hvid.dk/"
                target="_blank"
                rel="noopener noreferrer nofollow"
                ><span>Sort/Hvid&nbsp;&nbsp;</span
                ><span
                  ><i
                    class="fa-solid fa-arrow-up-right-from-square"
                  ></i></span
              ></a>
            </p>
            <img
              src="/img/2023-11-13-00267.jpg"
              title="<?php echo $lang['asset_2'] ?>."
              alt="<?php echo $lang['asset_2'] ?>."
            />
          </div>
          <div class="h-stretch reveal">
            <p class="note date">2021</p>
            <img
              src="/img/2021-05-28-01020.jpg"
              title="<?php echo $lang['asset_51'] ?>."
              alt="<?php echo $lang['asset_51'] ?>."
            />
          </div>

          <div class="h-stretch hide-photo-min reveal">
            <p class="note date">2023</p>
            <p class="note">
              <a
                href="https://www.husetfundament.dk/"
                target="_blank"
                rel="noopener noreferrer nofollow"
                ><span>Huset Fundament&nbsp;&nbsp;</span
                ><span
                  ><i
                    class="fa-solid fa-arrow-up-right-from-square"
                  ></i></span
              ></a>
            </p>
            <img
              src="/img/2023-09-23-00049.jpg"
              alt="<?php echo $lang['asset_71'] ?>."
              title="<?php echo $lang['asset_71'] ?>."
            />
          </div>
          <div class="h-stretch reveal">
            <p class="note date">2023</p>
            <p class="note">
              <a
                href="https://husetfundament.dk/"
                target="_blank"
                rel="noopener noreferrer nofollow"
                ><span>Huset Fundament&nbsp;&nbsp;</span><span
                  ><i class="fa-solid fa-arrow-up-right-from-square"></i
                ></span>
              </a>
            </p>
            <img
              src="/img/2023-09-09-10524.jpg"
              alt="<?php echo $lang['asset_66'] ?>."
              title="<?php echo $lang['asset_66'] ?>."
            />
          </div>
          <div class="h-stretch reveal">
            <p class="note date">2021</p>
            <p class="note">
              <a
                href="https://www.divadlodisk.cz/"
                target="_blank"
                rel="noopener noreferrer nofollow"
                ><span>Divadlo Disk&nbsp;&nbsp;</span><span
                  ><i class="fa-solid fa-arrow-up-right-from-square"></i
                ></span>
              </a>
            </p>
            <img
              src="/img/2021-06-24-01208.jpg"
              alt="<?php echo $lang['asset_65'] ?>."
            />
          </div>
          <div class="v-stretch reveal">
            <p class="note date">2023</p>
            <p class="note">
              <a
                href="https://husetfundament.dk/"
                target="_blank"
                rel="noopener noreferrer nofollow"
                ><span>Huset Fundament&nbsp;&nbsp;</span><span
                  ><i class="fa-solid fa-arrow-up-right-from-square"></i
                ></span>
              </a>
            </p>
            <img
              src="/img/2023-09-09-10507.jpg"
              alt="<?php echo $lang['asset_67'] ?>."
              title="<?php echo $lang['asset_67'] ?>."
            />
          </div>
          <div class="h-stretch reveal">
            <p class="note date">2023</p>
            <p class="note">
              <a
                href="https://husetfundament.dk/"
                target="_blank"
                rel="noopener noreferrer nofollow"
                ><span>Huset Fundament&nbsp;&nbsp;</span
                ><span
                  ><i
                    class="fa-solid fa-arrow-up-right-from-square"
                  ></i></span
              ></a>
            </p>
            <img
              src="/img/2023-05-27-00025.jpg"
              alt="<?php echo $lang['asset_61'] ?>."
              title="<?php echo $lang['asset_61'] ?>."
            />
          </div>
          <div class="h-stretch hide-photo-min reveal">
            <p class="note date">2022</p>
            <p class="note">
              <a
                href="https://www.roskilde-festival.dk/da/"
                target="_blank"
                rel="noopener noreferrer nofollow"
                ><span>Rosklide Festival&nbsp;&nbsp;</span
                ><span
                  ><i
                    class="fa-solid fa-arrow-up-right-from-square"
                  ></i></span
              ></a>
            </p>
            <img
              src="/img/2022-06-28-00708.jpg"
              alt="<?php echo $lang['asset_70'] ?>."
              title="<?php echo $lang['asset_70'] ?>."
            />
          </div>
          <div class="v-stretch reveal">
            <p class="note date">2023</p>
            <p class="note">
              <a
                href="https://husetfundament.dk/"
                target="_blank"
                rel="noopener noreferrer nofollow"
                ><span>Huset Fundament&nbsp;&nbsp;</span
                ><span
                  ><i
                    class="fa-solid fa-arrow-up-right-from-square"
                  ></i></span
              ></a>
            </p>
            <img
              src="/img/2023-09-23-00049.jpg"
              alt="<?php echo $lang['asset_71'] ?>."
              title="<?php echo $lang['asset_71'] ?>."
            />
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
