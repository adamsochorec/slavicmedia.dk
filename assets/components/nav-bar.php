<header>
  <div class="container">
    <nav id="navigation" role="navigation" aria-label="Main Navigation">
      <a href="/">
        <img
          class="logo"
          alt="Logo Slavic Media"
          title="Logo Slavic Media"
          src="/img/Primary-1.png"
        />
        <img
          class="logo mobile"
          alt="Logo Slavic Media"
          title="Logo Slavic Media"
          src="/img/Secondary-1.png"
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
          <a class="navigation-link" href="/services"
            ><?php echo $lang['asset_105'] ?></a
          >
        </li>
        <li role="menuitem">
          <a class="navigation-link" href="/projects"
            ><?php echo $lang['asset_102'] ?></a
          >
        </li>
        <li role="menuitem">
          <a class="navigation-link" href="/#team"
            ><?php echo $lang['asset_18'] ?></a
          >
        </li>
        <li role="menuitem">
          <a
            class="navigation-link"
            target="_blank"
            href="https://clients.slavicmedia.dk"
            ><?php echo $lang['asset_191'] ?></a
          >
        </li>
        <li role="menuitem">
          <a class="navigation-link" href="/press"
            ><?php echo $lang['asset_75'] ?></a
          >
        </li>
        <li>
          <div
            class="dropdown"
            role="navigation"
            aria-label="Language Selector"
          >
            <button
              class="dropbtn language-switch"
              aria-haspopup="true"
              aria-expanded="false"
            >
              <a
                class="navigation-link"
                href="#"
                aria-label="<?php echo $lang['asset_321'] ?>"
                ><?php echo $lang['asset_321'] ?></a
              >
            </button>
            <div class="dropdown-content" role="menu">
              <a
                class="language-switch"
                href="<?php echo generateLangSwitchURL('en'); ?>"
                role="menuitem"
              >
                <svg
                  aria-label="English"
                  role="img"
                  xmlns="http://www.w3.org/2000/svg"
                  viewBox="0 0 24 24"
                  focusable="false"
                  aria-hidden="true"
                >
                  <mask
                    x="1"
                    y="1"
                    maskUnits="userSpaceOnUse"
                    style="mask-type: alpha"
                  >
                    <circle cx="12" cy="12" r="11" fill="#D9D9D9"></circle>
                  </mask>
                  <g mask="url(#language_english_svg__a)">
                    <path fill="#01257D" d="M1 1h22v22H1V1Z"></path>
                    <path
                      fill="#fff"
                      d="m1.842 7.33 2.294-3.277L22.158 16.67l-2.295 3.277z"
                    ></path>
                    <path
                      fill="#fff"
                      d="m19.864 4.052 2.294 3.276L4.136 19.947 1.842 16.67z"
                    ></path>
                    <path
                      fill="#CF1429"
                      d="m2.703 6.1.573-.82L21.298 17.9l-.574.818z"
                    ></path>
                    <path
                      fill="#CF1429"
                      d="m20.724 5.281.574.82L3.276 18.718l-.573-.82z"
                    ></path>
                    <path fill="#fff" d="M9 1h6v22H9z"></path>
                    <path fill="#fff" d="M1 15V9h22v6H1Z"></path>
                    <path
                      fill="#CF1429"
                      fill-rule="evenodd"
                      d="M14 1h-4v9H1v4h9v9h4v-9h9v-4h-9V1Z"
                      clip-rule="evenodd"
                    ></path>
                  </g></svg
                >English
              </a>
              <a
                class="language-switch"
                href="<?php echo generateLangSwitchURL('da'); ?>"
                role="menuitem"
              >
                <svg
                  aria-label="Danish"
                  role="img"
                  id="Layer_2"
                  data-name="Layer 2"
                  xmlns="http://www.w3.org/2000/svg"
                  viewBox="0 0 190.32 190.56"
                  focusable="false"
                  aria-hidden="true"
                >
                  <!-- Your SVG content for the Danish flag --></svg
                >Dansk
              </a>
              <a
                class="language-switch"
                href="<?php echo generateLangSwitchURL('cz'); ?>"
                role="menuitem"
              >
                <svg
                  aria-label="Czech"
                  role="img"
                  class=""
                  version="1.1"
                  xmlns="http://www.w3.org/2000/svg"
                  xmlns:xlink="http://www.w3.org/1999/xlink"
                  x="0px"
                  y="0px"
                  viewBox="0 0 1062 1062"
                  style="enable-background: new 0 0 1062 1062"
                  xml:space="preserve"
                  title="<?php echo $lang['asset_310'] ?>"
                >
                  <!-- Your SVG content for the Czech flag --></svg
                >Čeština
              </a>
            </div>
          </div>
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
