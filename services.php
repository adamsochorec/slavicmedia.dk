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
            <span class="pathname-current"
              ><?php echo $lang['asset_105'] ?></span
            >
          </p>
        </div>
        <hr class="reveal" role="separator" />
        <!-- FEATURES START -->
        <article
          id="visual"
          class="video-gallery features-grid"
          aria-label="Features Grid"
        >
          <div class="gallery-item reveal drone">
            <div class="gallery-item-caption-max">
              <svg
                id="Layer_1"
                data-name="Layer 1"
                xmlns="http://www.w3.org/2000/svg"
                viewBox="0 0 485 485"
              >
                <defs>
                  <style>
                    .cls-1,
                    .cls-2 {
                      stroke-width: 0px;
                    }
                    .cls-1 {
                      fill: white;
                    }
                  </style>
                </defs>
                <path
                  class="cls-2"
                  d="m485,485c-161.67,0-323.33,0-485,0C0,323.33,0,161.67,0,0c161.67,0,323.33,0,485,0,0,161.67,0,323.33,0,485Zm-407.04-106.95c.01,11.94,6.95,22.39,17.67,26.62,16.36,6.46,34.43-2.13,40.38-18.99.94-2.66,2.44-5.62,4.58-7.27,19.41-14.92,38.99-29.63,58.65-44.23,1.83-1.36,4.5-2.21,6.79-2.22,24.33-.16,48.66-.17,72.98,0,2.43.02,5.26.97,7.21,2.42,19.13,14.19,38.19,28.49,57.06,43.02,2.54,1.96,4.69,5.1,5.79,8.14,5.13,14.26,18.92,23.21,33.1,21,14.56-2.27,24.11-12.51,25.03-26.84.96-15.08-7.53-27.24-21.61-31.58-2.62-.81-5.41-2.61-7.06-4.77-14.6-19.03-29.04-38.19-43.31-57.47-1.63-2.2-2.67-5.4-2.69-8.15-.21-23.83-.21-47.66,0-71.48.02-2.75,1.06-5.95,2.69-8.15,14.06-19.02,28.29-37.92,42.71-56.66,1.96-2.55,5.05-4.8,8.09-5.87,21.54-7.62,28.55-34.77,12.75-50.21-15.69-15.34-42.43-8.08-49.74,13.34-.94,2.77-2.85,5.68-5.15,7.44-19.15,14.71-38.46,29.22-57.85,43.63-1.83,1.36-4.49,2.25-6.77,2.26-24.33.16-48.66.18-72.98-.02-2.57-.02-5.54-1.13-7.62-2.67-18.87-13.98-37.55-28.22-56.38-42.26-3.2-2.38-5.21-5.07-6.51-8.95-6.5-19.33-29.95-27.19-46-15.53-9.53,6.93-13.1,16.62-11.45,28.07,1.85,12.77,9.4,20.87,21.52,25.1,2.48.87,5.1,2.54,6.67,4.59,14.68,19.18,29.21,38.47,43.6,57.87,1.55,2.09,2.66,5.07,2.68,7.64.2,23.99.2,47.99,0,71.98-.02,2.59-1.01,5.61-2.55,7.68-14.48,19.54-29.12,38.96-43.89,58.28-1.48,1.94-3.94,3.55-6.28,4.34-14,4.72-22.14,15.53-22.12,29.88Zm196.18-14.44c-5.34,37.32,9.72,79.9,51.92,104.57,37.65,22.01,90.26,17.09,124.24-15.79,34.82-33.7,41.06-86.37,19.36-125.38-23.13-41.59-65.74-59.24-105.21-53.54,1.01,1.49,1.86,2.87,2.82,4.16,9.54,12.83,19,25.72,28.72,38.4,2.04,2.65,4.8,5.07,7.73,6.67,22.82,12.44,36.01,35.58,33.58,59.41-2.72,26.69-21.04,47.46-47.22,53.52-25.7,5.95-50.01-4.25-63.83-27.91-4.29-7.34-9.74-12.73-16.37-17.54-11.84-8.59-23.49-17.43-35.75-26.57Zm90.19-152.94c43.74,5.78,88.25-16.18,108.54-60.26,18.12-39.37,11.42-90.73-28.79-124.35-34.93-29.21-89.07-31.74-125.54-5.67-37.8,27.02-49.61,67.5-44.21,99.65,1.46-1.02,2.83-1.93,4.14-2.91,12.83-9.54,25.72-18.99,38.41-28.71,2.53-1.93,4.81-4.59,6.32-7.38,13.14-24.3,37.47-37.18,63.28-33.25,24.34,3.7,44.22,22.15,49.59,46.04,5.76,25.59-2.83,49.11-25.12,62.68-10.1,6.15-17.29,14.09-23.91,23.25-6.44,8.9-13.11,17.64-19.66,26.47-.97,1.3-1.84,2.68-3.05,4.45Zm-152.94,152.8c-2.03,1.47-3.47,2.49-4.88,3.54-12.69,9.45-25.46,18.8-38.01,28.43-2.65,2.03-5.01,4.84-6.61,7.78-25.87,47.58-80.74,40.38-103.29,8.18-16.46-23.5-19.32-65.8,23.01-88.77,2.8-1.52,5.45-3.8,7.38-6.33,9.82-12.83,19.38-25.85,29.02-38.82.95-1.28,1.8-2.63,2.83-4.14-40.6-5.36-81.85,12.55-105.2,53.3-21.51,37.53-14.89,88.15,13.85,120.06,32.75,36.37,82.57,43.42,121.4,25.68,42.18-19.27,66.47-63.21,60.5-108.92Zm-.27-243.38c5.72-40.6-12.83-83.6-54.97-105.85C111.7-9.22,59.78,1.89,26.84,40.4c-29.37,34.35-31.88,88.81-5.94,125.55,27.49,38.94,70.71,50.03,99.79,44.13-9.71-13.04-19.44-25.92-28.93-38.97-3.48-4.78-7.49-8.47-12.75-11.44-24.74-13.93-35.79-38.5-30-65.4,5.44-25.27,27.02-44.21,53.72-47.17,24.15-2.68,46.87,10.49,59.41,34.21,1.34,2.53,3.36,4.97,5.63,6.7,12.97,9.9,26.12,19.59,39.22,29.33,1.27.94,2.64,1.76,4.14,2.75Z"
                />
                <path
                  class="cls-1"
                  d="m77.96,378.05c-.02-14.36,8.12-25.17,22.12-29.88,2.33-.79,4.8-2.4,6.28-4.34,14.77-19.32,29.41-38.74,43.89-58.28,1.54-2.08,2.53-5.09,2.55-7.68.19-23.99.19-47.99,0-71.98-.02-2.58-1.13-5.55-2.68-7.64-14.39-19.4-28.92-38.7-43.6-57.87-1.57-2.05-4.19-3.73-6.67-4.59-12.12-4.23-19.67-12.33-21.52-25.1-1.66-11.45,1.92-21.14,11.45-28.07,16.05-11.66,39.5-3.81,46,15.53,1.3,3.88,3.32,6.57,6.51,8.95,18.83,14.03,37.51,28.27,56.38,42.26,2.09,1.55,5.05,2.65,7.62,2.67,24.33.2,48.66.18,72.98.02,2.28-.01,4.94-.9,6.77-2.26,19.38-14.41,38.7-28.92,57.85-43.63,2.29-1.76,4.2-4.67,5.15-7.44,7.31-21.42,34.05-28.68,49.74-13.34,15.79,15.44,8.79,42.59-12.75,50.21-3.03,1.07-6.12,3.32-8.09,5.87-14.43,18.74-28.65,37.65-42.71,56.66-1.63,2.2-2.67,5.4-2.69,8.15-.21,23.83-.21,47.66,0,71.48.02,2.75,1.06,5.95,2.69,8.15,14.27,19.28,28.7,38.44,43.31,57.47,1.65,2.16,4.44,3.96,7.06,4.77,14.08,4.34,22.57,16.5,21.61,31.58-.91,14.32-10.47,24.57-25.03,26.84-14.18,2.21-27.96-6.75-33.1-21-1.09-3.04-3.25-6.18-5.79-8.14-18.87-14.53-37.93-28.83-57.06-43.02-1.95-1.45-4.78-2.4-7.21-2.42-24.33-.18-48.66-.17-72.98,0-2.29.01-4.96.86-6.79,2.22-19.65,14.6-39.23,29.31-58.65,44.23-2.14,1.65-3.65,4.61-4.58,7.27-5.95,16.86-24.01,25.45-40.38,18.99-10.72-4.23-17.66-14.68-17.67-26.62Z"
                />
                <path
                  class="cls-1"
                  d="m274.14,363.61c12.26,9.14,23.91,17.98,35.75,26.57,6.64,4.81,12.09,10.2,16.37,17.54,13.81,23.65,38.13,33.85,63.83,27.91,26.18-6.06,44.5-26.82,47.22-53.52,2.43-23.83-10.76-46.97-33.58-59.41-2.93-1.6-5.69-4.01-7.73-6.67-9.73-12.68-19.19-25.57-28.72-38.4-.96-1.29-1.81-2.67-2.82-4.16,39.47-5.7,82.08,11.95,105.21,53.54,21.7,39.01,15.46,91.68-19.36,125.38-33.98,32.88-86.6,37.8-124.24,15.79-42.21-24.68-57.27-67.25-51.92-104.57Z"
                />
                <path
                  class="cls-1"
                  d="m364.33,210.68c1.21-1.77,2.08-3.14,3.05-4.45,6.55-8.82,13.22-17.56,19.66-26.47,6.62-9.16,13.81-17.1,23.91-23.25,22.29-13.57,30.88-37.09,25.12-62.68-5.38-23.89-25.25-42.34-49.59-46.04-25.81-3.93-50.14,8.96-63.28,33.25-1.51,2.8-3.8,5.45-6.32,7.38-12.69,9.71-25.58,19.17-38.41,28.71-1.31.97-2.67,1.88-4.14,2.91-5.4-32.15,6.41-72.63,44.21-99.65,36.47-26.07,90.62-23.54,125.54,5.67,40.21,33.62,46.91,84.98,28.79,124.35-20.28,44.08-64.8,66.04-108.54,60.26Z"
                />
                <path
                  class="cls-1"
                  d="m211.4,363.48c5.98,45.71-18.31,89.65-60.5,108.92-38.83,17.74-88.65,10.69-121.4-25.68-28.74-31.91-35.36-82.53-13.85-120.06,23.35-40.75,64.6-58.66,105.2-53.3-1.03,1.51-1.88,2.86-2.83,4.14-9.64,12.97-19.2,25.99-29.02,38.82-1.93,2.53-4.59,4.81-7.38,6.33-42.34,22.97-39.47,65.27-23.01,88.77,22.55,32.2,77.42,39.4,103.29-8.18,1.6-2.94,3.96-5.75,6.61-7.78,12.55-9.64,25.32-18.99,38.01-28.43,1.41-1.05,2.85-2.07,4.88-3.54Z"
                />
                <path
                  class="cls-1"
                  d="m211.13,120.1c-1.5-.99-2.87-1.81-4.14-2.75-13.1-9.74-26.24-19.42-39.22-29.33-2.27-1.73-4.29-4.17-5.63-6.7-12.55-23.72-35.26-36.89-59.41-34.21-26.7,2.96-48.28,21.91-53.72,47.17-5.79,26.91,5.26,51.47,30,65.4,5.27,2.97,9.27,6.65,12.75,11.44,9.49,13.05,19.22,25.93,28.93,38.97-29.08,5.9-72.3-5.19-99.79-44.13C-5.03,129.22-2.53,74.75,26.84,40.4,59.78,1.89,111.7-9.22,156.16,14.25c42.14,22.24,60.7,65.25,54.97,105.85Z"
                />
              </svg>
              <h3>
                <?php echo $lang['asset_266'] ?>
              </h3>
            </div>
            <img
              src="/img/thumbnail/cover-samso.jpg"
              title="<?php echo $lang['asset_152'] ?>."
              alt="<?php echo $lang['asset_152'] ?>."
            />
            <div class="gallery-item-caption">
              <h3>
                <?php echo $lang['asset_266'] ?>
              </h3>
              <p>
                <?php echo $lang['asset_199'] ?>
              </p>
            </div>
          </div>
          <div class="gallery-item reveal">
            <div class="gallery-item-caption-max">
              <h3>
                <i class="fa-solid fa-pen-ruler fa-xl"></i><br />
                <?php echo $lang['asset_200'] ?>
              </h3>
            </div>
            <img
              src="/img/thumbnail/hvalp.jpg"
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
            <div class="gallery-item-caption-max">
              <h3>
                <i class="fa-solid fa-bolt fa-xl"></i><br />
                <?php echo $lang['asset_252'] ?>
              </h3>
            </div>
            <img
              src="/img/thumbnail/animation.jpg"
              title="<?php echo $lang['asset_39'] ?>."
              alt="<?php echo $lang['asset_39'] ?>."
            />
            <div class="gallery-item-caption">
              <h3>
                <?php echo $lang['asset_252'] ?>
              </h3>
              <p>
                <?php echo $lang['asset_203'] ?>
              </p>
            </div>
          </div>
          <div class="gallery-item reveal" aria-label="">
            <div class="gallery-item-caption-max">
              <h3>
                <i class="fa-solid fa-handshake-simple fa-xl"></i><br />
                <?php echo $lang['asset_235'] ?>
              </h3>
            </div>
            <img
              src="/img/thumbnail/preproduction.jpg"
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
            <div class="gallery-item-caption-max">
              <h3>
                <i class="fa-brands fa-dropbox fa-xl"></i><br />
                <?php echo $lang['asset_260'] ?>
              </h3>
            </div>
            <img
              src="/img/thumbnail/storage.jpg"
              title="<?php echo $lang['asset_38'] ?>."
              alt="<?php echo $lang['asset_38'] ?>."
            />
            <div class="gallery-item-caption">
              <h3>
                <?php echo $lang['asset_260'] ?>
              </h3>
              <p>
                <?php echo $lang['asset_195'] ?>
              </p>
            </div>
          </div>
          <div class="gallery-item reveal">
            <div class="gallery-item-caption-max">
              <h3>
                <i class="fa-solid fa-masks-theater fa-xl"></i><br />
                <?php echo $lang['asset_196'] ?>
              </h3>
            </div>
            <img
              src="/img/thumbnail/2021-04-25-00693.jpg"
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
            id="tab2"
            aria-controls="<?php echo $lang['asset_13'] ?>"
            checked
          />
          <label class="first" for="tab2"
            ><span><?php echo $lang['asset_13'] ?></span></label
          >
          <!-- Tab 2 -->
          <input
            type="radio"
            name="tabset"
            id="tab1"
            aria-controls="<?php echo $lang['asset_33'] ?>"
          />
          <label for="tab1"
            ><span><?php echo $lang['asset_33'] ?></span></label
          >
          <!-- Tab 3 -->
          <input
            type="radio"
            name="tabset"
            id="tab3"
            aria-controls="<?php echo $lang['asset_234'] ?>"
          />
          <label for="tab3"
            ><span><?php echo $lang['asset_234'] ?></span></label
          >
          <!-- Tab 4 -->
          <input
            type="radio"
            name="tabset"
            id="tab4"
            aria-controls="<?php echo $lang['asset_308'] ?>"
          />
          <label class="last" for="tab4"
            ><span><?php echo $lang['asset_308'] ?></span></label
          >
          <section class="switcher">
            <label
              class="toggleSwitch"
              for="toggleSwitch"
              role="checkbox"
              aria-checked="false"
              tabindex="0"
              onclick="togglePrices()"
            >
              <p>VAT</p>
            </label>

            <label
              class="switch"
              role="switch"
              aria-checked="false"
              tabindex="0"
            >
              <input type="checkbox" onclick="togglePrices()" />
              <span class="slider"></span>
            </label>
          </section>
          <div class="tab-panels">
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
                <tr></tr>
                <tr>
                  <td class="left-align">
                    <p><?php echo $lang['asset_246'] ?></p>
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
                    <p><?php echo $lang['asset_248'] ?></p>
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
                    <p><?php echo $lang['asset_268'] ?></p>
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
                    <p><?php echo $lang['asset_260'] ?></p>
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
                    <p><?php echo $lang['asset_196'] ?></p>
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
                    <p><?php echo $lang['asset_245'] ?></p>
                  </td>
                  <td>
                    <p><?php echo $lang['asset_245'] ?></p>
                  </td>
                  <td>
                    <p><?php echo $lang['asset_245'] ?></p>
                  </td>
                </tr>
              </table>
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
    <script>
      function updatePlanOptions() {
        const categorySelect = document.getElementById("category");
        const planSelect = document.getElementById("plan");
        const disableOnSelectOption =
          document.getElementById("disableOnSelect");

        if (categorySelect.value === "<?php echo $lang['asset_308'] ?>") {
          // If the second option from the bottom is selected in the first select,
          // disable the corresponding option in the second select
          disableOnSelectOption.disabled = true;
        } else {
          // If any other option is selected in the first select, enable the corresponding option
          disableOnSelectOption.disabled = false;
        }
      }
    </script>

    <!-- FOOTER END -->
  </body>
</html>
