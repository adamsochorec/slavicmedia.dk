<header>
  <div class="blur">
    <div class="container">
      <nav id="navigation">
        <a
          href="/<?php if($_SESSION['lang']=='da'){
          echo '?lang=da';
        }
        else if($_SESSION['lang']=='en'){
          echo '?lang=en';
        } ?>"
        >
          <img class="logo" alt="Logo Slavic Media" src="/img/logo.png" />
        </a>
        <a aria-label="mobile menu" class="hamburger">
          <span></span>
          <span></span> <span></span>
        </a>
        <ul class="menu-left">
          <li>
            <a href="/#plans">PLANS</a>
          </li>
          <li>
            <a href="/portfolio">PORTFOLIO</a>
          </li>
          <li>
            <a href="/#contact">CONTACT</a>
          </li>
          <li>
            <a href="/#about">ABOUT</a>
          </li>

          <li>
            <?php
            $currentLang = $_SESSION['lang'];
            $currentPage = $_SERVER['REQUEST_URI'];
            
            function createLanguageLink($lang) {
                global $currentPage;
                // Replace the existing lang parameter or add it to the query string
                $newURL = preg_replace('/(\?|&)lang=[a-zA-Z]+/', '', $currentPage); // Remove the existing lang parameter
                if (strpos($newURL, '?') === false) {
                    $newURL .= '?lang=' . $lang;
                } else {
                    $newURL .= '&lang=' . $lang;
                }
                return $newURL;
            }
            ?>

            <?php if($currentLang == 'da'): ?>
            <a href="<?php echo createLanguageLink('en'); ?>">EN</a>
            <?php elseif($currentLang == "en"): ?>
            <a href="<?php echo createLanguageLink('da'); ?>">DA</a>
            <?php endif; ?>
          </li>
        </ul>
      </nav>
    </div>
  </div>
</header>
<!-- LOADER START -->
<aside class="loader-container">
  <div class="loader"></div>
</aside>
<!-- LOADER END -->
