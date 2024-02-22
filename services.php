<?php include 'languages/config.php'; ?>
<!DOCTYPE html>
<html lang="<?php echo $_SESSION['lang'] ?>">
  <head>
    <?php
    $IPATH = $_SERVER['DOCUMENT_ROOT'] . '/assets/components/';
    include $IPATH . 'head.php';
    ?>
    <meta name="description" content="<?php echo $lang['asset_10'] ?>" />
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
    <!-- COOKIES START -->
    <?php
   $IPATH = $_SERVER['DOCUMENT_ROOT'] . '/assets/components/';
   include $IPATH . 'privacy.php';
   ?>
    <!-- COOKIES END -->
    <main>
      <article class="wrapper-wide">
        <div class="pathname-container"></div>
        <h1 class="reveal"><?php echo $lang['asset_105'] ?></h1>
        <div class="pathname-container reveal">
          <p>
            <span class="pathname"><a href="/"></a> &#8250; </span>
            <span class="pathname-current"
              ><?php echo $lang['asset_105'] ?></span
            >
          </p>
        </div>
        <hr class="reveal" role="separator" />
        <!-- FEATURES START -->
        <article
          class="gallery"
          id="gallery-features"
          aria-label="Features Grid"
        >
          <div class="gallery-item reveal">
            <div class="gallery-item-caption">
              <i class="fa-solid fa-crosshairs bubble"></i>
              <h3>
                <?php echo $lang['asset_266'] ?>
              </h3>
            </div>
          </div>
          <div class="gallery-item reveal">
            <div class="gallery-item-caption">
              <i class="fa-solid fa-pen-ruler bubble"></i>
              <h3>
                <?php echo $lang['asset_200'] ?>
              </h3>
            </div>
          </div>
          <div class="gallery-item reveal">
            <div class="gallery-item-caption">
              <i class="fa-solid fa-bolt bubble"></i>
              <h3>
                <?php echo $lang['asset_252'] ?>
              </h3>
            </div>
          </div>
          <div class="gallery-item reveal" aria-label="">
            <div class="gallery-item-caption">
              <i class="fa-solid fa-handshake-simple bubble"></i>
              <h3>
                <?php echo $lang['asset_235'] ?>
              </h3>
            </div>
          </div>
          <div class="gallery-item reveal">
            <div class="gallery-item-caption">
              <i class="fa-brands fa-dropbox bubble"></i>
              <h3>
                <?php echo $lang['asset_260'] ?>
              </h3>
            </div>
          </div>
          <div class="gallery-item reveal">
            <div class="gallery-item-caption">
              <i class="fa-solid fa-masks-theater bubble"></i>
              <h3>
                <?php echo $lang['asset_196'] ?>
              </h3>
            </div>
          </div>
        </article>
        <section class="flex-center">
          <a class="reveal" href="/projects" id="plans">
            <div class="cta">
              <?php echo $lang['asset_233'] ?><i
                class="fa-solid fa-arrow-right"
              ></i>
            </div>
          </a>
        </section>
        <!-- FEATURES END -->
        <hr class="reveal" role="separator" />

        <!-- PACKAGES START -->
        <h2 class="reveal"><?php echo $lang['asset_145'] ?></h2>

        <p class="reveal">
          <?php echo $lang['asset_131'] ?>
        </p>
        <hr class="semi" role="separator" />
        <div class="tabset">
          <!-- Tab 1 -->
          <input
            type="radio"
            name="tabset"
            id="tab2"
            aria-controls="<?php echo $lang['asset_13'] ?>"
            checked
          />
          <label class="first reveal" for="tab2"
            ><span><?php echo $lang['asset_13'] ?></span></label
          >
          <!-- Tab 2 -->
          <input
            type="radio"
            name="tabset"
            id="tab1"
            aria-controls="<?php echo $lang['asset_33'] ?>"
          />
          <label class="reveal" for="tab1"
            ><span><?php echo $lang['asset_33'] ?></span></label
          >
          <!-- Tab 3 -->
          <input
            type="radio"
            name="tabset"
            id="tab3"
            aria-controls="<?php echo $lang['asset_234'] ?>"
          />
          <label class="reveal" for="tab3"
            ><span><?php echo $lang['asset_234'] ?></span></label
          >
          <!-- Tab 4 -->
          <input
            type="radio"
            name="tabset"
            id="tab4"
            aria-controls="<?php echo $lang['asset_308'] ?>"
          />
          <label class="last reveal" for="tab4"
            ><span><?php echo $lang['asset_308'] ?></span></label
          >
          <section class="switcher reveal">
            <label
              class="toggleSwitch"
              for="toggleSwitch"
              role="checkbox"
              aria-checked="false"
              tabindex="0"
            >
              <a
                class="higlited"
                title="<?php echo $lang['asset_309'] ?>"
                target="_blank"
                rel="noopener noreferrer nofollow"
                href="https://taxation-customs.ec.europa.eu/what-vat_en"
              >
                <i class="fa-solid fa-circle-info"></i>
                <p><?php echo $lang['asset_307'] ?></p>
              </a>
            </label>

            <label
              class="switch"
              role="switch"
              aria-checked="false"
              tabindex="0"
            >
              <input type="checkbox" onclick="vatPrice()" />
              <span class="slider"></span>
            </label>
          </section>
          <div class="tab-panels">
            <!-- VIDEO PACKAGES START -->
            <div class="tab-panel reveal">
              <table id="<?php echo $lang['asset_13'] ?>">
                <tr>
                  <th class="left-align"></th>
                  <th><?php echo $lang['asset_133'] ?></th>
                  <th><?php echo $lang['asset_134'] ?></th>
                  <th><?php echo $lang['asset_135'] ?></th>
                </tr>
                <tr>
                  <td class="left-align">
                    <p><?php echo $lang['asset_237'] ?></p>
                  </td>
                  <td>
                    <p>
                      <span class="price"
                        ><?php echo $lang['asset_242'] ?></span
                      >
                      <?php echo $lang['asset_306'] ?>
                    </p>
                  </td>
                  <td>
                    <p>
                      <span class="price"
                        ><?php echo $lang['asset_243'] ?></span
                      >
                      <?php echo $lang['asset_306'] ?>
                    </p>
                  </td>
                  <td>
                    <p>
                      <span class="price"
                        ><?php echo $lang['asset_244'] ?></span
                      >
                      <?php echo $lang['asset_306'] ?>
                    </p>
                  </td>
                </tr>
                <tr>
                  <td class="left-align">
                    <p>
                      <?php echo $lang['asset_267'] ?>
                      &#8804; 3min
                    </p>
                  </td>
                  <td>
                    <p>1&#215;</p>
                  </td>
                  <td>
                    <p>1&#215;</p>
                  </td>
                  <td>
                    <p>2&#215;</p>
                  </td>
                </tr>
                <tr>
                  <td class="left-align">
                    <p>
                      <?php echo $lang['asset_267'] ?>
                      &#8805; 3min
                    </p>
                  </td>
                  <td>
                    <p>
                      <?php echo $lang['asset_245'] ?>
                    </p>
                  </td>
                  <td>
                    <p>
                      <?php echo $lang['asset_245'] ?>
                    </p>
                  </td>
                  <td>
                    <p>
                      <?php echo $lang['asset_245'] ?>
                    </p>
                  </td>
                </tr>
                <tr>
                  <td class="left-align">
                    <p><?php echo $lang[''] ?>Vertical Reel</p>
                  </td>
                  <td>
                    <p>1&#215;</p>
                  </td>
                  <td>
                    <p>3&#215;</p>
                  </td>
                  <td>
                    <p>5&#215;</p>
                  </td>
                </tr>
                <tr>
                  <td class="left-align">
                    <p><?php echo $lang['asset_235'] ?></p>
                  </td>
                  <td>
                    <p><i class="fa-solid fa-check"></i></p>
                  </td>
                  <td>
                    <p><i class="fa-solid fa-check"></i></p>
                  </td>
                  <td>
                    <p><i class="fa-solid fa-check"></i></p>
                  </td>
                </tr>
                <tr>
                  <td class="left-align">
                    <p><?php echo $lang['asset_246'] ?></p>
                  </td>
                  <td>
                    <p>1</p>
                  </td>
                  <td>
                    <p>2</p>
                  </td>
                  <td>
                    <p><?php echo $lang['asset_247'] ?></p>
                  </td>
                </tr>
                <tr>
                  <td class="left-align">
                    <p><?php echo $lang['asset_248'] ?></p>
                  </td>
                  <td>
                    <p>3<?php echo $lang['asset_249'] ?></p>
                  </td>
                  <td>
                    <p>
                      <?php echo $lang['asset_257'] ?>
                      (4-5<?php echo $lang['asset_249'] ?>)
                    </p>
                  </td>
                  <td>
                    <p>
                      <?php echo $lang['asset_258'] ?>
                      (7-9<?php echo $lang['asset_249'] ?>)
                    </p>
                  </td>
                </tr>
                <tr>
                  <td class="left-align">
                    <p><?php echo $lang['asset_196'] ?></p>
                  </td>
                  <td>
                    <p><i class="fa-solid fa-xmark"></i></p>
                  </td>
                  <td>
                    <p><i class="fa-solid fa-check"></i></p>
                  </td>
                  <td>
                    <p><i class="fa-solid fa-check"></i></p>
                  </td>
                </tr>
                <tr>
                  <td class="left-align">
                    <p><?php echo $lang['asset_266'] ?></p>
                  </td>
                  <td>
                    <p><i class="fa-solid fa-xmark"></i></p>
                  </td>
                  <td>
                    <p><i class="fa-solid fa-xmark"></i></p>
                  </td>
                  <td>
                    <p><i class="fa-solid fa-check"></i></p>
                  </td>
                </tr>
                <tr>
                  <td class="left-align">
                    <p><?php echo $lang['asset_252'] ?></p>
                  </td>
                  <td>
                    <p><i class="fa-solid fa-xmark"></i></p>
                  </td>
                  <td>
                    <p><i class="fa-solid fa-check"></i></p>
                  </td>
                  <td>
                    <p><i class="fa-solid fa-check"></i></p>
                  </td>
                </tr>
                <tr>
                  <td class="left-align">
                    <p><?php echo $lang['asset_312'] ?></p>
                  </td>
                  <td>
                    <p><i class="fa-solid fa-check"></i></p>
                  </td>
                  <td>
                    <p><i class="fa-solid fa-check"></i></p>
                  </td>
                  <td>
                    <p><i class="fa-solid fa-check"></i></p>
                  </td>
                </tr>
                <tr>
                  <td class="left-align">
                    <p><?php echo $lang['asset_253'] ?></p>
                  </td>
                  <td>
                    <p>
                      <?php echo $lang['asset_254'] ?>
                    </p>
                  </td>
                  <td>
                    <p>
                      <?php echo $lang['asset_255'] ?>
                    </p>
                  </td>
                  <td>
                    <p>
                      <?php echo $lang['asset_256'] ?>
                    </p>
                  </td>
                </tr>
              </table>
            </div>
            <!-- VIDEO PACKAGES END -->
            <!-- PHOTO PACKAGES START -->
            <div class="tab-panel reveal">
              <table id="<?php echo $lang['asset_33'] ?>">
                <tr>
                  <th class="left-align"></th>
                  <th><?php echo $lang['asset_133'] ?></th>
                  <th><?php echo $lang['asset_134'] ?></th>
                  <th><?php echo $lang['asset_135'] ?></th>
                </tr>
                <tr>
                  <td class="left-align">
                    <p><?php echo $lang['asset_237'] ?></p>
                  </td>
                  <td>
                    <p>
                      <span class="price"
                        ><?php echo $lang['asset_239'] ?></span
                      >
                      <?php echo $lang['asset_306'] ?>
                    </p>
                  </td>
                  <td>
                    <p>
                      <span class="price"
                        ><?php echo $lang['asset_240'] ?></span
                      >
                      <?php echo $lang['asset_306'] ?>
                    </p>
                  </td>
                  <td>
                    <p>
                      <span class="price"
                        ><?php echo $lang['asset_241'] ?></span
                      >
                      <?php echo $lang['asset_306'] ?>
                    </p>
                  </td>
                </tr>
                <tr>
                  <td class="left-align">
                    <p><?php echo $lang['asset_235'] ?></p>
                  </td>
                  <td>
                    <p><i class="fa-solid fa-check"></i></p>
                  </td>
                  <td>
                    <p><i class="fa-solid fa-check"></i></p>
                  </td>
                  <td>
                    <p><i class="fa-solid fa-check"></i></p>
                  </td>
                </tr>
                <tr>
                  <td class="left-align">
                    <p><?php echo $lang['asset_246'] ?></p>
                  </td>
                  <td>
                    <p>1</p>
                  </td>
                  <td>
                    <p>2</p>
                  </td>
                  <td>
                    <p><?php echo $lang['asset_247'] ?></p>
                  </td>
                </tr>
                <tr>
                  <td class="left-align">
                    <p><?php echo $lang['asset_248'] ?></p>
                  </td>
                  <td>
                    <p>1.5<?php echo $lang['asset_249'] ?></p>
                  </td>
                  <td>
                    <p>
                      <?php echo $lang['asset_257'] ?>
                      (4-5<?php echo $lang['asset_249'] ?>)
                    </p>
                  </td>
                  <td>
                    <p>
                      <?php echo $lang['asset_258'] ?>
                      (7-9<?php echo $lang['asset_249'] ?>)
                    </p>
                  </td>
                </tr>
                <tr>
                  <td class="left-align">
                    <p><?php echo $lang['asset_261'] ?></p>
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
                  <td class="left-align">
                    <p><?php echo $lang['asset_260'] ?></p>
                  </td>
                  <td>
                    <p><i class="fa-solid fa-check"></i></p>
                  </td>
                  <td>
                    <p><i class="fa-solid fa-check"></i></p>
                  </td>
                  <td>
                    <p><i class="fa-solid fa-check"></i></p>
                  </td>
                </tr>
                <tr>
                  <td class="left-align">
                    <p><?php echo $lang['asset_196'] ?></p>
                  </td>
                  <td>
                    <p><i class="fa-solid fa-xmark"></i></p>
                  </td>
                  <td>
                    <p><i class="fa-solid fa-check"></i></p>
                  </td>
                  <td>
                    <p><i class="fa-solid fa-check"></i></p>
                  </td>
                </tr>
                <tr>
                  <td class="left-align">
                    <p><?php echo $lang['asset_266'] ?></p>
                  </td>
                  <td>
                    <p><i class="fa-solid fa-xmark"></i></p>
                  </td>
                  <td>
                    <p><i class="fa-solid fa-xmark"></i></p>
                  </td>
                  <td>
                    <p><i class="fa-solid fa-check"></i></p>
                  </td>
                </tr>
                <tr>
                  <td class="left-align">
                    <p>
                      <?php echo $lang['asset_200'] ?>&nbsp;<?php echo $lang['asset_262'] ?>
                    </p>
                  </td>
                  <td>
                    <p><i class="fa-solid fa-xmark"></i></p>
                  </td>
                  <td>
                    <p><i class="fa-solid fa-check"></i></p>
                  </td>
                  <td>
                    <p><i class="fa-solid fa-check"></i></p>
                  </td>
                </tr>
                <tr>
                  <td class="left-align">
                    <p><?php echo $lang['asset_253'] ?></p>
                  </td>
                  <td>
                    <p>
                      <?php echo $lang['asset_263'] ?>
                    </p>
                  </td>
                  <td>
                    <p>
                      <?php echo $lang['asset_264'] ?>
                    </p>
                  </td>
                  <td>
                    <p>
                      <?php echo $lang['asset_265'] ?>
                    </p>
                  </td>
                </tr>
              </table>
            </div>
            <!-- PHOTO PACKAGES END -->

            <!-- ALL IN PACKAGES START -->
            <div class="tab-panel reveal">
              <table id="allin">
                <tr>
                  <th class="left-align"></th>
                  <th><?php echo $lang['asset_133'] ?></th>
                  <th><?php echo $lang['asset_134'] ?></th>
                  <th><?php echo $lang['asset_135'] ?></th>
                </tr>
                <tr>
                  <td class="left-align">
                    <p><?php echo $lang['asset_237'] ?></p>
                  </td>
                  <td>
                    <p>
                      <?php echo $lang['asset_318'] ?>
                      <span class="price"
                        ><?php echo $lang['asset_315'] ?></span
                      >
                      <?php echo $lang['asset_306'] ?>
                    </p>
                  </td>
                  <td>
                    <p>
                      <?php echo $lang['asset_318'] ?>
                      <span class="price">
                        <?php echo $lang['asset_316'] ?></span
                      >
                      <?php echo $lang['asset_306'] ?>
                    </p>
                  </td>
                  <td>
                    <p>
                      <?php echo $lang['asset_318'] ?>
                      <span class="price">
                        <?php echo $lang['asset_317'] ?></span
                      >
                      <?php echo $lang['asset_306'] ?>
                    </p>
                  </td>
                </tr>
                <tr>
                  <td class="left-align">
                    <p>
                      <?php echo $lang['asset_267'] ?>
                      &#8804; 3min
                    </p>
                  </td>
                  <td>
                    <p>
                      <?php echo $lang['asset_245'] ?>
                    </p>
                  </td>
                  <td>
                    <p>
                      <?php echo $lang['asset_245'] ?>
                    </p>
                  </td>
                  <td>
                    <p>
                      <?php echo $lang['asset_245'] ?>
                    </p>
                  </td>
                </tr>

                <tr>
                  <td class="left-align">
                    <p><?php echo $lang[''] ?>Vertical Reel</p>
                  </td>
                  <td>
                    <p>
                      <?php echo $lang['asset_245'] ?>
                    </p>
                  </td>
                  <td>
                    <p>
                      <?php echo $lang['asset_245'] ?>
                    </p>
                  </td>
                  <td>
                    <p>
                      <?php echo $lang['asset_245'] ?>
                    </p>
                  </td>
                </tr>
                <tr>
                  <td class="left-align">
                    <p><?php echo $lang['asset_267'] ?></p>
                  </td>
                  <td>
                    <p><?php echo $lang['asset_245'] ?></p>
                  </td>
                  <td>
                    <p><?php echo $lang['asset_245'] ?></p>
                  </td>
                  <td>
                    <p><?php echo $lang['asset_245'] ?></p>
                  </td>
                </tr>
                <tr>
                  <td class="left-align">
                    <p>
                      <?php echo $lang['asset_313'] ?>
                    </p>
                  </td>
                  <td>
                    <p>1&#215;</p>
                  </td>
                  <td>
                    <p>
                      <?php echo $lang['asset_319'] ?>
                      2&#215;
                    </p>
                  </td>
                  <td>
                    <p>
                      <?php echo $lang['asset_319'] ?>
                      3&#215;
                    </p>
                  </td>
                </tr>
                <tr>
                  <td class="left-align">
                    <p>
                      <?php echo $lang['asset_314'] ?>
                    </p>
                  </td>
                  <td>
                    <p>
                      <?php echo $lang['asset_319'] ?>
                      15
                    </p>
                  </td>
                  <td>
                    <p>
                      <?php echo $lang['asset_319'] ?>
                      30
                    </p>
                  </td>
                  <td>
                    <p>
                      <?php echo $lang['asset_319'] ?>
                      45
                    </p>
                  </td>
                </tr>
                <tr>
                  <td class="left-align">
                    <p><?php echo $lang['asset_260'] ?></p>
                  </td>
                  <td>
                    <p><i class="fa-solid fa-check"></i></p>
                  </td>
                  <td>
                    <p><i class="fa-solid fa-check"></i></p>
                  </td>
                  <td>
                    <p><i class="fa-solid fa-check"></i></p>
                  </td>
                </tr>
                <tr>
                  <td class="left-align">
                    <p><?php echo $lang['asset_246'] ?>*</p>
                  </td>
                  <td>
                    <p><i class="fa-solid fa-infinity"></i></p>
                  </td>
                  <td>
                    <p><i class="fa-solid fa-infinity"></i></p>
                  </td>
                  <td>
                    <p><i class="fa-solid fa-infinity"></i></p>
                  </td>
                </tr>
                <tr>
                  <td class="left-align">
                    <p><?php echo $lang['asset_235'] ?></p>
                  </td>
                  <td>
                    <p><i class="fa-solid fa-check"></i></p>
                  </td>
                  <td>
                    <p><i class="fa-solid fa-check"></i></p>
                  </td>
                  <td>
                    <p><i class="fa-solid fa-check"></i></p>
                  </td>
                </tr>
                <tr>
                  <td class="left-align">
                    <p><?php echo $lang['asset_196'] ?></p>
                  </td>
                  <td>
                    <p><i class="fa-solid fa-xmark"></i></p>
                  </td>
                  <td>
                    <p><i class="fa-solid fa-check"></i></p>
                  </td>
                  <td>
                    <p><i class="fa-solid fa-check"></i></p>
                  </td>
                </tr>
                <tr>
                  <td class="left-align">
                    <p><?php echo $lang['asset_252'] ?></p>
                  </td>
                  <td>
                    <p><i class="fa-solid fa-xmark"></i></p>
                  </td>
                  <td>
                    <p><i class="fa-solid fa-check"></i></p>
                  </td>
                  <td>
                    <p><i class="fa-solid fa-check"></i></p>
                  </td>
                </tr>
                <tr>
                  <td class="left-align">
                    <p><?php echo $lang['asset_312'] ?></p>
                  </td>
                  <td>
                    <p><i class="fa-solid fa-check"></i></p>
                  </td>
                  <td>
                    <p><i class="fa-solid fa-check"></i></p>
                  </td>
                  <td>
                    <p><i class="fa-solid fa-check"></i></p>
                  </td>
                </tr>
              </table>
              <br />
              <p class="undernote">
                *
                <?php echo $lang['asset_320'] ?>.
              </p>
            </div>
            <!-- ALL IN PACKAGES END -->
            <!-- POSTPRODUCTION PACKAGES START -->
            <div class="tab-panel reveal">
              <table id="<?php echo $lang['asset_13'] ?>">
                <tr>
                  <th class="left-align">
                    <?php echo $lang['asset_299'] ?>
                  </th>
                  <th>
                    <?php echo $lang['asset_237'] ?>
                    /
                    <?php echo $lang['asset_249'] ?>
                  </th>
                </tr>
                <tr>
                  <td class="left-align">
                    <p>
                      <?php echo $lang['asset_304'] ?>
                    </p>
                  </td>
                  <td>
                    <p><?php echo $lang['asset_303'] ?></p>
                  </td>
                </tr>

                <tr>
                  <td class="left-align">
                    <p>
                      <?php echo $lang['asset_235'] ?>
                      /
                      <?php echo $lang['asset_246'] ?>
                    </p>
                  </td>
                  <td>
                    <p><?php echo $lang['asset_303'] ?></p>
                  </td>
                </tr>
                <tr>
                  <td class="left-align">
                    <p><?php echo $lang['asset_291'] ?></p>
                  </td>
                  <td>
                    <p>
                      <span class="price"
                        ><?php echo $lang['asset_300'] ?></span
                      >
                      <?php echo $lang['asset_306'] ?>
                    </p>
                  </td>
                </tr>
                <tr>
                  <td class="left-align">
                    <p><?php echo $lang['asset_292'] ?></p>
                  </td>
                  <td>
                    <p>
                      <span class="price"
                        ><?php echo $lang['asset_301'] ?></span
                      >
                      <?php echo $lang['asset_306'] ?>
                    </p>
                  </td>
                </tr>
                <tr>
                  <td class="left-align">
                    <p><?php echo $lang['asset_293'] ?></p>
                  </td>
                  <td>
                    <p>
                      <span class="price"
                        ><?php echo $lang['asset_301'] ?></span
                      >
                      <?php echo $lang['asset_306'] ?>
                    </p>
                  </td>
                </tr>
                <tr>
                  <td class="left-align">
                    <p><?php echo $lang['asset_294'] ?></p>
                  </td>
                  <td>
                    <p>
                      <span class="price"
                        ><?php echo $lang['asset_302'] ?></span
                      >
                      <?php echo $lang['asset_306'] ?>
                    </p>
                  </td>
                </tr>
                <tr>
                  <td class="left-align">
                    <p><?php echo $lang['asset_295'] ?></p>
                  </td>
                  <td>
                    <p>
                      <span class="price"
                        ><?php echo $lang['asset_301'] ?></span
                      >
                      <?php echo $lang['asset_306'] ?>
                    </p>
                  </td>
                </tr>
                <tr>
                  <td class="left-align">
                    <p><?php echo $lang['asset_296'] ?></p>
                  </td>
                  <td>
                    <p>
                      <span class="price"
                        ><?php echo $lang['asset_302'] ?></span
                      >
                      <?php echo $lang['asset_306'] ?>
                    </p>
                  </td>
                </tr>
                <tr>
                  <td class="left-align">
                    <p><?php echo $lang['asset_297'] ?></p>
                  </td>
                  <td>
                    <p>
                      <span class="price"
                        ><?php echo $lang['asset_301'] ?></span
                      >
                      <?php echo $lang['asset_306'] ?>
                    </p>
                  </td>
                </tr>
                <tr>
                  <td class="left-align">
                    <p><?php echo $lang['asset_298'] ?></p>
                  </td>
                  <td>
                    <p>
                      <span class="price"
                        ><?php echo $lang['asset_301'] ?></span
                      >
                      <?php echo $lang['asset_306'] ?>
                    </p>
                  </td>
                </tr>
              </table>
            </div>
            <!-- POSTPRODUCTION PACKAGES END -->
          </div>
        </div>

        <hr id="proposal" class="reveal" />
      </article>
      <!-- CONTACT FORM  START  -->
      <?php
    $IPATH = $_SERVER['DOCUMENT_ROOT'] . '/assets/components/';
    include $IPATH . 'contact-form.php';
    ?>
      <!-- CONTACT FORM  END  -->
    </main>
    <!-- FOOTER START -->
    <?php
    $IPATH = $_SERVER['DOCUMENT_ROOT'] . '/assets/components/';
    include $IPATH . 'footer.php';
    ?>
    <script type="text/javascript" src="/assets/services.js" defer></script>
    <script
      type="text/javascript"
      src="/assets/cookies.js"
      defer
      role="script"
    ></script>
    <!-- FOOTER END -->
  </body>
</html>
