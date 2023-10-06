<header>
  <div class="blur">
    <div class="container">
      <nav id="navigation">
        <a href="/">
          <img class="logo" alt="Logo Slavic Media" src="/img/logo.png" />
        </a>
        <a aria-label="mobile menu" class="hamburger">
          <span></span>
          <span></span> <span></span>
        </a>
        <ul class="menu-left">
          <li>
            <a href="#contact"><?php echo $lang['contact'] ?></a>
          </li>
          <li>
            <a href="#about"><?php echo $lang['about'] ?></a>
          </li>
          <li>
            <?php if($_SESSION['lang']=="da"){
              echo '<a href="/?lang=en">EN</a>';
            }
            else if($_SESSION['lang']=="en"){
              echo '<a href="/?lang=da">DA</a>';
            } ?>
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
