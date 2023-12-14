<!-- FOOTER START -->
<hr class="semi" role="separator" />
<footer>
 <article class="wrapper-wide"> <div class="footer-container">
  <a href="/" > <img src="/img/logo2.png" /></a>
    <?php
      $IPATH = $_SERVER['DOCUMENT_ROOT'] . '/assets/components/';
      include $IPATH . 'social-icons.php';
    ?>
  </div>
  <hr />
  <div class="footer-container">
    <div class="grid-item footer-ps">
      <a
        href="mailto:contact@slavicmedia.dk"
        aria-label="Email: contact@slavicmedia.dk"
        role="link"
      >
      <?php echo $lang['asset_278'] ?>      </a>
      <span>&#x2022;</span>
      <a
        target="_blank"
        rel="noopener noreferrer nofollow"
        href="https://datacvr.virk.dk/enhed/virksomhed/44081512?fritekst=slavic%20media&sideIndex=0&size=10"
        aria-label=""
        role="link"
      >
        CVR: 44081512
      </a>
      <span>&#x2022;</span>
      <a href="/cookies">
        <?php echo $lang['asset_231'] ?>
      </a>
      <br />
      <p>
        Copyright ©
        <?= date('Y') ?>
        Slavic Media I/S <?php echo $lang['asset_290'] ?>.
      </p>
    </div>
    <div class="language-container">
      <br /><span
        ><i class="fa-solid fa-globe"></i>
          <?php if($_SESSION['lang']=="da"){
            echo '<a href="?lang=en">Dansk</a>';
          }
          else if($_SESSION['lang']=="en"){
            echo '<a href="?lang=da">English</a>';
          } ?>
    </div>
  </div></article>
  <script
    src="https://kit.fontawesome.com/0d09e23a84.js"
    crossorigin="anonymous"
    role="script"
  ></script>

  <!--<script
    type="text/javascript"
    src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"
  ></script>
  <script src="https://unpkg.com/@lottiefiles/lottie-interactivity@1.6.2/dist/lottie-interactivity.min.js"></script>
 -->

  <script
    src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"
    role="script"
  ></script>

  <script
    type="text/javascript"
    src="/assets/script.js"
    defer
    role="script"
  ></script>
</footer>
<!-- FOOTER END -->
