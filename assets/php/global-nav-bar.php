<header>
  <div class="blur">
    <div class="container">
      <nav id="navigation" role="navigation" aria-label="Main Navigation">
        <a href="/">
          <img class="logo" alt="Logo Slavic Media" src="/img/logo.png" />
          <img
            class="logo mobile"
            alt="Logo Slavic Media"
            src="/img/logo2.png"
          />
        </a>
        <a
          aria-label="Open mobile menu"
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
              echo '<a href="/?lang=en">🇬🇧</a>';
            }
            else if($_SESSION['lang']=="en"){
              echo '<a href="/?lang=da">🇩🇰</a>';
            } ?>
          </li>
        </ul>
      </nav>
    </div>
  </div>
</header>
<!-- LOADER START -->
<aside class="loader-container" role="complementary">
  <div class="loader" aria-label="Loading"></div>
</aside>
<!-- LOADER END -->
