<header>
  <div class="blur">
    <div class="container">
      <nav id="navigation">
        <a href="<?php echo $is_danish ? '/dk' : '/' ?>">
          <img class="logo" alt="Slavic Media logo" src="/img/logo.png" />
        </a>
        <a aria-label="mobile menu" class="hamburger">
          <span></span>
          <span></span> <span></span>
        </a>
        <ul class="menu-left">
          <!--   <li><a href="<?php echo $is_danish ? '/dk#services' : '/#services' ?>">Services</a></li>-->
          <li>
            <a href="<?php echo $is_danish ? '/dk#bookus' : '/#bookus' ?>"
              ><?php echo $is_danish ? 'BOOK OS' : 'BOOK US' ?></a
            >
          </li>
          <li>
            <a href="<?php echo $is_danish ? '/dk#about' : '/#about' ?>"
              ><?php echo $is_danish ? 'OM OS' : 'ABOUT' ?></a
            >
          </li>
          <li>
            <a href="<?php echo $is_danish ? '/' : '/dk' ?>"
              ><?php echo $is_danish ? 'EN' : 'DK' ?></a
            >
          </li>
        </ul>
      </nav>
    </div>
  </div>
</header>
