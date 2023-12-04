<!-- FOOTER START -->
<hr class="semi" role="separator" />
<footer>
  <?php
     $IPATH = $_SERVER['DOCUMENT_ROOT'] . '/assets/components/';
     include $IPATH . 'social-icons.php';
  ?>
  <div class="footer-ps">
    <p>
      <a
        href="mailto:contact@slavicmedia.dk"
        aria-label="Email: contact@slavicmedia.dk"
        role="link"
      >
        contact@slavicmedia.dk </a
      ><br />
      ©
      <?= date('Y') ?>
      Slavic Media I/S |
      <a
        target="_blank"
        rel="noopener noreferrer nofollow"
        href="https://datacvr.virk.dk/enhed/virksomhed/44081512?fritekst=slavic%20media&sideIndex=0&size=10"
        aria-label=""
        role="link"
      >
        CVR: 44081512 </a
      ><br /><a href="/cookies">
        <?php echo $lang['asset_231'] ?>
      </a>
    </p>
  </div>

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