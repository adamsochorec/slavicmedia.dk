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
          <div class="gallery-item reveal" aria-label="">
            <img
              src="/img/preproduction.jpg"
              title="<?php echo $lang[''] ?>."
              alt="<?php echo $lang[''] ?>."
            />
            <div class="gallery-item-caption">
              <h3>
                <?php echo $lang['asset_235'] ?>
              </h3>
              <p>
                <?php echo $lang['asset_236'] ?>
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
              src="/img/2021-04-25-00693.jpg"
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
            <div class="tab-panel reveal">
              <table id="<?php echo $lang['asset_33'] ?>">
                <tr>
                  <th class="left-align"><?php echo $lang['asset_133'] ?></th>
                  <th><?php echo $lang['asset_133'] ?></th>
                  <th><?php echo $lang['asset_134'] ?></th>
                  <th><?php echo $lang['asset_135'] ?></th>
                </tr>
                <tr>
                  <td class="left-align">
                    <p><?php echo $lang['asset_237'] ?></p>
                  </td>
                  <td>
                    <p><?php echo $lang['asset_239'] ?></p>
                  </td>
                  <td>
                    <p><?php echo $lang['asset_240'] ?></p>
                  </td>
                  <td>
                    <p><?php echo $lang['asset_241'] ?></p>
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
                    <p><?php echo $lang['asset_262'] ?></p>
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
                    <p><?php echo $lang['asset_253'] ?>:</p>
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
            <!-- VIDEO PACKAGES START -->
            <div class="tab-panel reveal">
              <table id="<?php echo $lang['asset_13'] ?>">
                <tr>
                  <th class="left-align"><?php echo $lang['asset_238'] ?></th>
                  <th><?php echo $lang['asset_133'] ?></th>
                  <th><?php echo $lang['asset_134'] ?></th>
                  <th><?php echo $lang['asset_135'] ?></th>
                </tr>
                <tr>
                  <td class="left-align">
                    <p><?php echo $lang['asset_237'] ?></p>
                  </td>
                  <td>
                    <p><?php echo $lang['asset_242'] ?></p>
                  </td>
                  <td>
                    <p><?php echo $lang['asset_243'] ?></p>
                  </td>
                  <td>
                    <p><?php echo $lang['asset_244'] ?></p>
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
                    <p><?php echo $lang['asset_250'] ?></p>
                  </td>
                  <td>
                    <p>
                      <?php echo $lang['asset_251'] ?>
                      3 min
                    </p>
                  </td>
                  <td>
                    <p>
                      <?php echo $lang['asset_251'] ?>
                      5 min
                    </p>
                  </td>
                  <td>
                    <p>
                      <?php echo $lang['asset_251'] ?>
                      8 min
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
                    <p><i class="fa-solid fa-xmark"></i></p>
                  </td>
                  <td>
                    <p><i class="fa-solid fa-check"></i></p>
                  </td>
                </tr>
                <tr>
                  <td class="left-align">
                    <p><?php echo $lang['asset_253'] ?>:</p>
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
            <!-- ALL IN PACKAGES START -->
            <div class="tab-panel reveal">
              <table id="allin">
                <tr>
                  <th class="left-align"><?php echo $lang['asset_238'] ?></th>
                  <th><?php echo $lang['asset_133'] ?></th>
                  <th><?php echo $lang['asset_134'] ?></th>
                  <th><?php echo $lang['asset_135'] ?></th>
                </tr>
                <tr>
                  <td class="left-align">
                    <p><?php echo $lang['asset_237'] ?></p>
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
                    <p><?php echo $lang['asset_245'] ?></p>
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
                    <p>Unlimited</p>
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
                  <td class="left-align">
                    <p><?php echo $lang['asset_267'] ?></p>
                  </td>
                  <td>
                    <p>1x</p>
                  </td>
                  <td>
                    <p>2x</p>
                  </td>
                  <td>
                    <p>3x</p>
                  </td>
                </tr>
                <tr>
                  <td class="left-align">
                    <p><?php echo $lang['asset_268'] ?></p>
                  </td>
                  <td>
                    <p><i class="fa-solid fa-xmark"></i></p>
                  </td>
                  <td>
                    <p>2x</p>
                  </td>
                  <td>
                    <p>3x</p>
                  </td>
                </tr>
                <tr>
                  <td class="left-align">
                    <p></p>
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
                    <p><?php echo $lang['asset_266'] ?></p>
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
                    <p><?php echo $lang['asset_253'] ?>:</p>
                  </td>
                  <td>
                    <p><?php echo $lang['asset_259'] ?></p>
                  </td>
                  <td>
                    <p><?php echo $lang['asset_259'] ?></p>
                  </td>
                  <td>
                    <p><?php echo $lang['asset_259'] ?></p>
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
    <script
      type="text/javascript"
      src="/assets/cookies.js"
      defer
      role="script"
    ></script>
    <!-- FOOTER END -->
  </body>
</html>
