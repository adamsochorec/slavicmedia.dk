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
    <title>Works | Slavic Media</title>
  </head>
  <body id="works">
    <!-- HEADER START -->
    <?php
    $IPATH = $_SERVER['DOCUMENT_ROOT'] . '/assets/php/';
    include $IPATH . 'global-nav-bar.php';
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
            <span class="pathname" aria-label="<?php echo $lang['asset_102'] ?>"
              ><?php echo $lang['asset_102'] ?></span
            >
          </p>
        </div>
      </article>
      <hr class="semi" role="separator" />
      <article id="visual" class="video-gallery" aria-label="Video Gallery">
        <div class="gallery-item reveal" aria-label="Huset Fundament 2023">
          <img
            src="/img/cover-husetfundament.jpg"
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
              <i class="fa-solid fa-circle-info">&nbsp; </i
              ><a href>husetfundament.dk</a>
            </p>

            <a
              aria-label="<?php echo $lang['asset_127'] ?>"
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
              <i class="fa-regular fa-circle-play"></i>
              Repaire Festival
              <br />
              <span>2023 </span>
            </h3>
            <p>
              <i class="fa-solid fa-circle-info">&nbsp; </i
              ><a href>nicolaikultur.dk</a>
            </p>
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
            alt="<?php echo $lang['asset_47'] ?>."
          />
          <div class="gallery-item-caption">
            <h3>
              <i class="fa-regular fa-circle-play"></i>
              <?php echo $lang['asset_46'] ?>

              <br />
              <span>2023</span>
            </h3>
            <p>
              <i class="fa-solid fa-circle-info">&nbsp; </i
              ><a>parkourskola.sk</a>
            </p>
            <a
              class="vimeo-popup"
              href="https://www.youtube-nocookie.com/embed/10MkaUOoqDo?modestbranding=1"
            ></a>
          </div>
        </div>

        <div class="gallery-item reveal">
          <img
            src="/img/cover-halloweenparty.jpg"
            alt="<?php echo $lang['asset_152'] ?>."
          />
          <div class="gallery-item-caption">
            <h3>
              <i class="fa-regular fa-circle-play"></i>
              <?php echo $lang['asset_152'] ?>
              <br />
              <span>2022</span>
            </h3>
            <p>
              <i class="fa-solid fa-circle-info">&nbsp; </i>
              <a>tribemedia.dk </a>
            </p>
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
              <i class="fa-regular fa-circle-play"></i>

              Bygning 5
              <br />
              <span>2022</span>
            </h3>
            <p>
              <i class="fa-solid fa-circle-info">&nbsp; </i><a>bygning5.dk</a>
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
      <!-- PHOTO GALLERY START -->
      <!-- PORTRAIT START -->
      <article class="wrapper-wide" id="portrait">
        <hr class="reveal" role="separator" />
        <div class="grid-container fifty-fifty caption-container">
          <div class="grid-item reveal">
            <h3 class="highlited"><?php echo $lang['asset_108'] ?></h3>
            <h2>
              <?php echo $lang['asset_110'] ?>
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
          </div>
        </div>
        <div class="hide-cta-max reveal">
          <a
            class="cta"
            href="/services"
            aria-label="<?php echo $lang['asset_117'] ?>"
          >
            <?php echo $lang['asset_116'] ?>
          </a>
        </div>
      </article>
      <hr class="semi" role="separator" />
      <article id="visuals">
        <div class="grid-container photo-grid">
          <div class="h-stretch reveal">
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
          <div class="h-stretch reveal">
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
          <div class="v-stretch reveal">
            <img
              src="/img/2021-09-05-01666.jpg"
              alt="<?php echo $lang['asset_148'] ?>."
            />
          </div>
          <div class="h-stretch reveal">
            <img src="/img/hvalp.jpg" alt="<?php echo $lang['asset_150'] ?>." />
          </div>
          <div class="v-stretch reveal">
            <img
              src="/img/2021-10-17-01935.jpg"
              alt="<?php echo $lang['asset_149'] ?>."
            />
          </div>
          <div class="h-stretch reveal">
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
          <div class="h-stretch reveal">
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

          <div class="v-stretch reveal">
            <img
              src="/img/2021-11-13-02059.jpg"
              alt="<?php echo $lang['asset_52'] ?>."
            />
          </div>
          <div class="h-stretch reveal">
            <img
              src="/img/2021-10-01-01825.jpg"
              alt="<?php echo $lang['asset_153'] ?>."
            />
          </div>
          <div class="v-stretch reveal">
            <p class="note">
              <a
                href="https://www.divadlodisk.cz/"
                target="_blank"
                rel="noopener noreferrer"
                ><span>Divadlo Disk</span
                ><span><i class="fa-solid fa-circle-info"></i></span>
              </a>
            </p>
            <img
              src="/img/2021-06-24-01233.jpg"
              alt="<?php echo $lang['asset_54'] ?>."
            />
          </div>
          <div class="h-stretch reveal">
            <img
              src="/img/2021-07-19-01355.jpg"
              alt="<?php echo $lang['asset_146'] ?>."
            />
          </div>
          <div class="h-stretch reveal">
            <img
              src="/img/2021-08-24-01615.jpg"
              alt="<?php echo $lang['asset_147'] ?>."
            />
          </div>
          <div class="v-stretch reveal">
            <img
              src="/img/2021-04-22-00624.jpg"
              alt="<?php echo $lang['asset_2'] ?>."
            />
          </div>
          <div class="h-stretch reveal">
            <img
              src="/img/2021-05-28-01020.jpg"
              alt="<?php echo $lang['asset_51'] ?>."
            />
          </div>
          <div class="v-stretch reveal">
            <p class="note">
              <a
                href="https://www.slovo21.cz/"
                target="_blank"
                rel="noopener noreferrer"
                ><span>Slovo 21</span
                ><span><i class="fa-solid fa-circle-info"></i></span
              ></a>
            </p>
            <img
              src="/img/2021-06-21-01194.jpg"
              alt="<?php echo $lang['asset_4'] ?>."
            />
          </div>

          <div class="h-stretch hide-photo-min reveal">
            <img
              src="/img/2021-10-01-01825.jpg"
              alt="<?php echo $lang['asset_153'] ?>."
            />
          </div>
        </div>
      </article>
      <!-- PORTRAIT END -->
      <!-- STILLS START -->
      <article class="wrapper-wide" id="Stills">
        <hr class="reveal" role="separator" />
        <div class="grid-container fifty-fifty caption-container">
          <div class="grid-item reveal">
            <h3 class="highlited"><?php echo $lang['asset_108'] ?></h3>
            <h2>
              <?php echo $lang['asset_107'] ?>
            </h2>
            <div class="hide-cta-min reveal">
              <a
                class="cta"
                href="/services"
                aria-label="<?php echo $lang['asset_116'] ?>"
              >
                <?php echo $lang['asset_116'] ?>
              </a>
            </div>
          </div>
          <div class="grid-item">
            <p class="reveal">
              <?php echo $lang['asset_174'] ?>
            </p>
          </div>
        </div>
        <div class="hide-cta-max reveal">
          <a
            class="cta"
            href="/services"
            aria-label="<?php echo $lang['asset_116'] ?>"
          >
            <?php echo $lang['asset_116'] ?>
          </a>
        </div>
      </article>
      <hr class="semi" role="separator" />

      <article id="visuals">
        <div class="grid-container photo-grid">
          <div class="h-stretch reveal">
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
          </div>
          <div class="h-stretch reveal">
            <p class="note">
              <a
                href="https://www.divadlodisk.cz/"
                target="_blank"
                rel="noopener noreferrer"
                ><span>Divadlo Disk</span
                ><span><i class="fa-solid fa-circle-info"></i></span>
              </a>
            </p>
            <img
              src="/img/2021-06-24-01208.jpg"
              alt="<?php echo $lang['asset_65'] ?>."
            />
          </div>

          <div class="v-stretch reveal">
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
          <div class="h-stretch hide-photo-min reveal">
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
              alt="<?php echo $lang['asset_70'] ?>."
            />
          </div>
          <div class="v-stretch reveal">
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
              src="/img/2023-05-12-08965.jpg"
              alt="<?php echo $lang['asset_72'] ?>."
            />
          </div>
          <div class="h-stretch reveal">
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
          <div class="hhh-stretch reveal">
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

          <div class="h-stretch reveal">
            <img
              src="/img/2022-06-18-00518.jpg"
              alt="<?php echo $lang['asset_69'] ?>."
            />
          </div>

          <div class="h-stretch reveal">
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
          <div class="h-stretch reveal">
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
          <div class="h-stretch reveal">
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
          <!-- STILLS END -->
          <!-- TRAVEL START -->
        </div>
      </article>
      <article class="wrapper-wide" id="Travel">
        <hr class="reveal" role="separator" />
        <div class="grid-container fifty-fifty caption-container">
          <div class="grid-item reveal">
            <h3 class="highlited"><?php echo $lang['asset_108'] ?></h3>
            <h2>
              <?php echo $lang['asset_85'] ?>
            </h2>
            <div class="hide-cta-min reveal">
              <a
                class="cta"
                href="/services"
                aria-label="<?php echo $lang['asset_118'] ?>"
              >
                <?php echo $lang['asset_116'] ?>
              </a>
            </div>
          </div>
          <div class="grid-item">
            <p class="reveal">
              <?php echo $lang['asset_175'] ?>
            </p>
          </div>
        </div>
        <div class="hide-cta-max reveal">
          <a
            class="cta"
            href="/services"
            aria-label="<?php echo $lang['asset_118'] ?>"
          >
            <?php echo $lang['asset_116'] ?>
          </a>
        </div>
      </article>
      <hr class="semi" role="separator" />
      <article id="visuals">
        <div class="grid-container photo-grid">
          <div class="h-stretch reveal">
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
          <div class="h-stretch reveal">
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
          <div class="v-stretch reveal">
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
          <div class="h-stretch hide-photo-min reveal">
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
          <div class="h-stretch reveal">
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

          <div class="v-stretch reveal">
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
          <div class="h-stretch reveal">
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
          <div class="h-stretch reveal">
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
          <div class="h-stretch reveal">
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

          <div class="h-stretch video-gallery reveal">
            <div class="video-gallery">
              <div class="gallery-item reveal">
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
            </div>
          </div>
          <div class="h-stretch reveal">
            <img
              src="/img/2023-08-06-00304.jpg"
              alt="<?php echo $lang['asset_86'] ?>."
            />
          </div>
          <div class="h-stretch reveal">
            <img
              src="/img/2023-07-26-00100.jpg"
              alt="<?php echo $lang['asset_93'] ?>."
            />
          </div>

          <!-- STILLS END -->
          <!-- PHOTO GALLERY END -->
        </div>
      </article>
      <!-- ART PROJECTS START -->
      <article class="wrapper-wide" id="Art-Projects">
        <hr class="reveal" role="separator" />
        <div class="grid-container fifty-fifty caption-container">
          <div class="grid-item reveal">
            <h2>Art Projects</h2>
          </div>
          <div class="grid-item">
            <p class="reveal">
              <?php echo $lang['asset_109'] ?>
            </p>
          </div>
        </div>
      </article>
      <hr class="semi" role="separator" />
      <article id="visual" class="video-gallery">
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
        <div class="gallery-item reveal">
          <img
            src="/img/cover-autoportrait.jpg"
            alt="<?php echo $lang['asset_122'] ?> <?php echo $lang['asset_123'] ?>."
          />
          <div class="gallery-item-caption">
            <h3>
              <i class="fa-regular fa-circle-play"></i>
              <?php echo $lang['asset_122'] ?>
              <br />
              <span>2021</span>
            </h3>
            <p>
              <i class="fa-solid fa-circle-info">&nbsp; </i
              ><a>adamsochorec.com</a>
            </p>
            <a
              class="vimeo-popup"
              href="https://www.youtube-nocookie.com/embed/mB6d6F_SyAU?modestbranding=1"
            ></a>
          </div>
        </div>
        <div class="gallery-item reveal">
          <img
            src="/img/cover-anna.jpg"
            alt="Анна <?php echo $lang['asset_123'] ?>."
          />
          <div class="gallery-item-caption">
            <h3>
              <i class="fa-regular fa-circle-play"></i>
              Анна
              <br />
              <span>2020</span>
            </h3>

            <a
              class="vimeo-popup"
              href="https://www.youtube-nocookie.com/embed/TYCKiIOtFY0?modestbranding=1"
            ></a>
          </div>
        </div>
        <div class="gallery-item hide-video_gallery reveal">
          <img
            src="/img/gray.jpg"
            alt="<?php echo $lang['asset_125'] ?> <?php echo $lang['asset_123'] ?>."
          />
          <div class="gallery-item-caption">
            <h3>
              <i class="fa-regular fa-circle-play"></i>
              <?php echo $lang['asset_125'] ?>
              <br />
              <span>20XX</span>
            </h3>

            <a
              class="vimeo-popup"
              href="https://www.youtube-nocookie.com/embed/TYCKiIOtFY0?modestbranding=1"
            ></a>
          </div>
        </div>
      </article>
      <!-- ART PROJECTS END -->
    </main>
    <!-- FOOTER START -->
    <?php
    $IPATH = $_SERVER['DOCUMENT_ROOT'] . '/assets/php/';
    include $IPATH . 'global-footer.php';
    ?>
    <!-- FOOTER END -->
  </body>
</html>
