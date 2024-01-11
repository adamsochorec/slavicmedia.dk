<header>
    <div class="container">
      <nav id="navigation" role="navigation" aria-label="Main Navigation">
        <a href="/">
          <img class="logo" alt="Logo Slavic Media" title="Logo Slavic Media"
          src="/img/logo.png" />
          <img
            class="logo mobile"
            alt="Logo Slavic Media"   
            title="Logo Slavic Media"
            src="/img/logo2.png"
          />
        </a>
        <a
          aria-label="<?php echo $lang['asset_226'] ?>"
          class="hamburger"
          role="button"
          aria-expanded="false"
        >
          <span></span>
          <span></span>
          <span></span>
        </a>
        <ul class="menu-left" role="menu">
          <li role="menuitem">
            <a href="/services"><?php echo $lang['asset_105'] ?></a>
          </li>
          <li role="menuitem">
            <a href="/projects"><?php echo $lang['asset_102'] ?></a>
          </li>
          <li role="menuitem">
            <a href="/#team"
              ><?php echo $lang['asset_18'] ?></a
            >
          </li>
          <li role="menuitem">
            <a target="_blank" href="https://clients.slavicmedia.dk"
              ><?php echo $lang['asset_191'] ?></a
            >
          </li>
          <li role="menuitem">
            <a href="/press"><?php echo $lang['asset_75'] ?></a>
          </li>
          <li role="menuitem">
            <?php if($_SESSION['lang']=="da"){
              echo '<a title="English" class="language-switch" href="?lang=en"><svg aria-label="English" xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 24 24" focusable="false" aria-hidden="true" ><mask  x="1" y="1" maskUnits="userSpaceOnUse" style="mask-type: alpha;"><circle cx="12" cy="12" r="11" fill="#D9D9D9"></circle></mask><g mask="url(#language_english_svg__a)"><path fill="#01257D" d="M1 1h22v22H1V1Z"></path><path fill="#fff" d="m1.842 7.33 2.294-3.277L22.158 16.67l-2.295 3.277z"></path><path fill="#fff" d="m19.864 4.052 2.294 3.276L4.136 19.947 1.842 16.67z"></path><path fill="#CF1429" d="m2.703 6.1.573-.82L21.298 17.9l-.574.818z"></path><path fill="#CF1429" d="m20.724 5.281.574.82L3.276 18.718l-.573-.82z"></path><path fill="#fff" d="M9 1h6v22H9z"></path><path fill="#fff" d="M1 15V9h22v6H1Z"></path><path fill="#CF1429" fill-rule="evenodd" d="M14 1h-4v9H1v4h9v9h4v-9h9v-4h-9V1Z" clip-rule="evenodd"></path></g></svg><span class="MuiTouchRipple-root css-y82qc3"></span></a>';
            }
            else if($_SESSION['lang']=="en"){
              echo '<a title="Dansk" class="language-switch" href="?lang=da"><svg aria-label="Danish" id="Layer_2" data-name="Layer 2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 190.32 190.56">
                <g id="Layer_1-2" data-name="Layer 1">
                  <g>
                    <path class="cls-2" d="m190.32,78.72v33.12c-.36-.02-.72-.07-1.07-.07-24.63,0-49.27,0-73.9,0-.42,0-.84.05-1.28.08-.03.45-.06.77-.06,1.08,0,25.87,0,51.75,0,77.62h-35.28v-78.79c-.67,0-1.18,0-1.69,0-25.12,0-50.24,0-75.35,0-.56,0-1.12.05-1.67.07,0-11.04,0-22.08,0-33.12.16,0,.32.03.48.03,25.71,0,51.42,0,77.13,0,.34,0,.69-.06,1.11-.09V0h35.28v78.74c.6,0,1.04,0,1.47,0,19.39,0,38.79,0,58.18,0,5.56,0,11.12-.01,16.67-.02Z"/>
                    <path class="cls-1" d="m78.72,0v78.65c-.42.04-.77.09-1.11.09-25.71,0-51.42,0-77.13,0-.16,0-.32-.02-.48-.03V0h78.72Z"/>
                    <path class="cls-1" d="m0,111.84c.56-.02,1.12-.07,1.67-.07,25.12,0,50.24,0,75.35,0,.51,0,1.02,0,1.69,0v78.79H0C0,164.32,0,138.08,0,111.84Z"/>
                    <path class="cls-1" d="m190.32,78.72c-5.56,0-11.12.02-16.67.02-19.39,0-38.79,0-58.18,0-.43,0-.87,0-1.47,0V0h76.32v78.72Z"/>
                    <path class="cls-1" d="m114,190.56c0-25.87,0-51.75,0-77.62,0-.31.04-.63.06-1.08.44-.03.86-.08,1.28-.08,24.63,0,49.27,0,73.9,0,.36,0,.72.04,1.07.07v78.72h-76.32Z"/>
                  </g>
                </g>
              </svg></a>';
            } ?>
          </li>
        </ul>
      </nav>
    </div>
</header>
   <!-- COOKIES START -->
   <?php
   $IPATH = $_SERVER['DOCUMENT_ROOT'] . '/assets/components/';
   include $IPATH . 'privacy.php';
   ?>
  <!-- COOKIES END -->
<!-- LOADER START -->
<aside class="loader-container" role="complementary">
  <div class="loader" aria-label="Loading"></div>
</aside>
<!-- LOADER END -->
