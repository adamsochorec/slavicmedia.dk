<?php include 'languages/config.php'; ?>
<!DOCTYPE html>
<html lang="<?php echo $_SESSION['lang'] ?>">
  <head>
    <?php
    $IPATH = $_SERVER['DOCUMENT_ROOT'] . '/assets/components/';
    include $IPATH . 'head.php';
    ?>
    <meta name="description" content="<?php echo $lang['asset_225'] ?>" />
    <!-- <meta name="keywords" content="<?php echo $lang['asset_219'] ?>" /> -->
    <title>Multimedia <?php echo $lang['asset_105'] ?> | Slavic Media</title>
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
        <hr class="reveal" role="separator" />
        <!-- FEATURES START -->
        <article
          id="visual"
          class="video-gallery features-grid"
          aria-label="Video Gallery"
        >
          <div class="gallery-item reveal" aria-label="">
            <img
              src="/img/2023-05-12-08965.jpg"
              title="<?php echo $lang['asset_40'] ?>."
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
            <img
              src="/img/studio.jpg"
              title="<?php echo $lang['asset_38'] ?>."
              alt="<?php echo $lang['asset_38'] ?>."
            />
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
              title="<?php echo $lang['asset_47'] ?>."
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
              title="<?php echo $lang['asset_152'] ?>."
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
            <img
              src="/img/hvalp.jpg"
              alt="<?php echo $lang['asset_50'] ?>."
              title="<?php echo $lang['asset_50'] ?>."
            />
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
              title="<?php echo $lang['asset_39'] ?>."
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
        <section class="flex-center">
          <a class="reveal" href="/projects" id="plans">
            <div class="cta">
              <?php echo $lang['asset_233'] ?>
            </div>
          </a>
        </section>
        <!-- FEATURES END -->
        <hr class="reveal" role="separator" />
        <!-- PACKAGES START -->
        <h2 class="reveal"><?php echo $lang['asset_145'] ?></h2>
        <p class="reveal"><?php echo $lang['asset_131'] ?></p>
        <hr class="semi" role="separator" />
        <div class="tabset reveal">
          <!-- Tab 1 -->
          <input
            type="radio"
            name="tabset"
            id="tab1"
            aria-controls="<?php echo $lang['asset_33'] ?>"
            checked
          />
          <label for="tab1"
            ><span><?php echo $lang['asset_33'] ?></span></label
          >
          <!-- Tab 2 -->
          <input
            type="radio"
            name="tabset"
            id="tab2"
            aria-controls="<?php echo $lang['asset_13'] ?>"
          />
          <label for="tab2"
            ><span><?php echo $lang['asset_13'] ?></span></label
          >
          <!-- Tab 3 -->
          <input type="radio" name="tabset" id="tab3" aria-controls="" />
          <label for="tab3"
            ><span><?php echo $lang['asset_234'] ?></span></label
          >
          <hr class="semi" role="separator" />
          <div class="tab-panels">
            <!-- PHOTO PACKAGES START -->
            <div class="tab-panel">
              <table id="<?php echo $lang['asset_33'] ?>">
                <tr>
                  <th>Included</th>
                  <th>Essential</th>
                  <th>Core</th>
                  <th>Elite</th>
                </tr>
                <tr>
                  <td>
                    <p>Price (excl. VAT)</p>
                  </td>
                  <td>
                    <p>1500 DKK</p>
                  </td>
                  <td>
                    <p>4000 DKK</p>
                  </td>
                  <td>
                    <p>6000 DKK</p>
                  </td>
                </tr>
                <tr>
                  <td>
                    <p>Preproduction meeting</p>
                  </td>
                  <td>
                    <p><i class="fa-regular fa-circle-check"></i></p>
                  </td>
                  <td>
                    <p><i class="fa-regular fa-circle-check"></i></p>
                  </td>
                  <td>
                    <p><i class="fa-regular fa-circle-check"></i></p>
                  </td>
                </tr>
                <tr>
                  <td>
                    <p>Revisions</p>
                  </td>
                  <td>
                    <p>1</p>
                  </td>
                  <td>
                    <p>2</p>
                  </td>
                  <td>
                    <p>Unlimited</p>
                  </td>
                </tr>
                <tr>
                  <td>
                    <p>Shooting duration</p>
                  </td>
                  <td>
                    <p>1.5 h</p>
                  </td>
                  <td>
                    <p>Half day (4-5h)</p>
                  </td>
                  <td>
                    <p>Full day (7-9h)</p>
                  </td>
                </tr>
                <tr>
                  <td>
                    <p>Photos amount</p>
                  </td>
                  <td>
                    <p>5</p>
                  </td>
                  <td>
                    <p>20</p>
                  </td>
                  <td>
                    <p>50</p>
                  </td>
                </tr>
                <tr>
                  <td>
                    <p>Online gallery for photo selection</p>
                  </td>
                  <td>
                    <p><i class="fa-regular fa-circle-check"></i></p>
                  </td>
                  <td>
                    <p><i class="fa-regular fa-circle-check"></i></p>
                  </td>
                  <td>
                    <p><i class="fa-regular fa-circle-check"></i></p>
                  </td>
                </tr>
                <tr>
                  <td>
                    <p>Make-up artist</p>
                  </td>
                  <td>
                    <p><i class="fa-regular fa-circle-xmark"></i></p>
                  </td>
                  <td>
                    <p><i class="fa-regular fa-circle-check"></i></p>
                  </td>
                  <td>
                    <p><i class="fa-regular fa-circle-check"></i></p>
                  </td>
                </tr>
                <tr>
                  <td>
                    <p>Recommended for</p>
                  </td>
                  <td>
                    <p>
                      Headshots,<br />
                      Product photos
                    </p>
                  </td>
                  <td>
                    <p>
                      Events,<br />
                      Promo materials (prints, SoMe)
                    </p>
                  </td>
                  <td>
                    <p>
                      Large events,<br />
                      Extensive studio sessions
                    </p>
                  </td>
                </tr>
              </table>
            </div>
            <!-- PHOTO PACKAGES END -->
            <!-- VIDEO PACKAGES START -->
            <div class="tab-panel">
              <table id="<?php echo $lang['asset_13'] ?>">
                <tr>
                  <th>Included</th>
                  <th>Essential</th>
                  <th>Core</th>
                  <th>Elite</th>
                </tr>
                <tr>
                  <td>
                    <p>Price (excl. VAT)</p>
                  </td>
                  <td>
                    <p>3500 DKK</p>
                  </td>
                  <td>
                    <p>5500 DKK</p>
                  </td>
                  <td>
                    <p>8000 DKK</p>
                  </td>
                </tr>
                <tr>
                  <td>
                    <p>Preproduction meeting</p>
                  </td>
                  <td>
                    <p><i class="fa-regular fa-circle-check"></i></p>
                  </td>
                  <td>
                    <p><i class="fa-regular fa-circle-check"></i></p>
                  </td>
                  <td>
                    <p><i class="fa-regular fa-circle-check"></i></p>
                  </td>
                </tr>
                <tr>
                  <td>
                    <p>Revisions</p>
                  </td>
                  <td>
                    <p>1</p>
                  </td>
                  <td>
                    <p>2</p>
                  </td>
                  <td>
                    <p>Unlimited</p>
                  </td>
                </tr>
                <tr>
                  <td>
                    <p>Shooting duration</p>
                  </td>
                  <td>
                    <p>3 h</p>
                  </td>
                  <td>
                    <p>Half day (4-5h)</p>
                  </td>
                  <td>
                    <p>Full day (7-9h)</p>
                  </td>
                </tr>
                <tr>
                  <td>
                    <p>Final cut duration</p>
                  </td>
                  <td>
                    <p>up to 3 min</p>
                  </td>
                  <td>
                    <p>upt to 5 min</p>
                  </td>
                  <td>
                    <p>up to 8 min</p>
                  </td>
                </tr>
                <tr>
                  <td>
                    <p>Make-up artist</p>
                  </td>
                  <td>
                    <p><i class="fa-regular fa-circle-xmark"></i></p>
                  </td>
                  <td>
                    <p><i class="fa-regular fa-circle-check"></i></p>
                  </td>
                  <td>
                    <p><i class="fa-regular fa-circle-check"></i></p>
                  </td>
                </tr>
                <tr>
                  <td>
                    <p>Drone footage</p>
                  </td>
                  <td>
                    <p><i class="fa-regular fa-circle-xmark"></i></p>
                  </td>
                  <td>
                    <p><i class="fa-regular fa-circle-xmark"></i></p>
                  </td>
                  <td>
                    <p><i class="fa-regular fa-circle-check"></i></p>
                  </td>
                </tr>
                <tr>
                  <td>
                    <p>Advaned Motion graphics</p>
                  </td>
                  <td>
                    <p><i class="fa-regular fa-circle-xmark"></i></p>
                  </td>
                  <td>
                    <p><i class="fa-regular fa-circle-xmark"></i></p>
                  </td>
                  <td>
                    <p><i class="fa-regular fa-circle-check"></i></p>
                  </td>
                </tr>
                <tr>
                  <td>
                    <p>Recommended for</p>
                  </td>
                  <td>
                    <p>
                      Hero/cover videos,<br />
                      showreels…
                    </p>
                  </td>
                  <td>
                    <p>Event aftermovies,<br />Extensuve company video</p>
                  </td>
                  <td>
                    <p>Campaigns,<br />Large events</p>
                  </td>
                </tr>
              </table>
            </div>
            <!-- VIDEO PACKAGES END -->
            <!-- ALL IN PACKAGES START -->
            <div class="tab-panel">
              <table id="allin">
                <tr>
                  <th>Included</th>
                  <th>Essential</th>
                  <th>Core</th>
                  <th>Elite</th>
                </tr>
                <tr>
                  <td>
                    <p>Price (excl. VAT)</p>
                  </td>
                  <td>
                    <p>?? DKK</p>
                  </td>
                  <td>
                    <p>?? DKK</p>
                  </td>
                  <td>
                    <p>?? DKK</p>
                  </td>
                </tr>
                <tr>
                  <td>
                    <p>Preproduction meeting</p>
                  </td>
                  <td>
                    <p><i class="fa-regular fa-circle-check"></i></p>
                  </td>
                  <td>
                    <p><i class="fa-regular fa-circle-check"></i></p>
                  </td>
                  <td>
                    <p><i class="fa-regular fa-circle-check"></i></p>
                  </td>
                </tr>
                <tr>
                  <td>
                    <p>Revisions</p>
                  </td>
                  <td>
                    <p>1</p>
                  </td>
                  <td>
                    <p>2</p>
                  </td>
                  <td>
                    <p>Unlimited</p>
                  </td>
                </tr>
                <tr>
                  <td>
                    <p>Shooting duration</p>
                  </td>
                  <td>
                    <p>1.5 h</p>
                  </td>
                  <td>
                    <p>Half day (4-5h)</p>
                  </td>
                  <td>
                    <p>Full day (7-9h)</p>
                  </td>
                </tr>
                <tr>
                  <td>
                    <p>Photos amount</p>
                  </td>
                  <td>
                    <p>10</p>
                  </td>
                  <td>
                    <p>20</p>
                  </td>
                  <td>
                    <p>30</p>
                  </td>
                </tr>
                <tr>
                  <td>
                    <p>Online gallery for photo selection</p>
                  </td>
                  <td>
                    <p><i class="fa-regular fa-circle-check"></i></p>
                  </td>
                  <td>
                    <p><i class="fa-regular fa-circle-check"></i></p>
                  </td>
                  <td>
                    <p><i class="fa-regular fa-circle-check"></i></p>
                  </td>
                </tr>
                <tr>
                  <td>
                    <p>Make-up artist</p>
                  </td>
                  <td>
                    <p><i class="fa-regular fa-circle-xmark"></i></p>
                  </td>
                  <td>
                    <p><i class="fa-regular fa-circle-check"></i></p>
                  </td>
                  <td>
                    <p><i class="fa-regular fa-circle-check"></i></p>
                  </td>
                </tr>
                <tr>
                  <td>
                    <p>Recommended for</p>
                  </td>
                  <td>
                    <p>Headshots, Product photos</p>
                  </td>
                  <td>
                    <p>Events, Promo materials (prints, SoMe)</p>
                  </td>
                  <td>
                    <p>Large events, Extensive studio sessions</p>
                  </td>
                </tr>
              </table>
            </div>
            <!-- ALL IN PACKAGES END -->
          </div>
        </div>

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
    <script type="text/javascript" src="/assets/services.js" defer></script>
    <!-- FOOTER END -->
  </body>
</html>
