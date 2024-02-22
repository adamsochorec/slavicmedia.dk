<!-- FOOTER START -->
<hr class="semi bodyxfooter" role="separator" />
<footer>
  <div class="footer-container">
    <a href="/">
      <img
        src="/img/Secondary-1.png"
        alt="Logo Slavic Media"
        title="Logo Slavic Media"
    /></a>
    <?php
      $IPATH = $_SERVER['DOCUMENT_ROOT'] . '/assets/components/';
      include $IPATH . 'social-icons.php';
    ?>
  </div>
  <hr role="separator" />
  <div class="footer-container">
    <div class="grid-item">
      <a class="footer-nav" href="/privacy-policy">
        <?php echo $lang['asset_231'] ?>
      </a>
      <span>&nbsp;|&nbsp;</span>
      <a
        class="footer-nav"
        target="_blank"
        rel="noopener noreferrer nofollow"
        href="https://datacvr.virk.dk/enhed/virksomhed/44081512?fritekst=slavic%20media&sideIndex=0&size=10"
        aria-label=""
        role="link"
      >
        CVR:&nbsp;44081512
      </a>
    </div>
    <p class="grid-item">
      ©&nbsp;<span id="current-year"></span> Slavic Media I/S.<br
        class="footerBreak"
      />
      Registered Company in Denmark
    </p>
  </div>
</footer>

<script
  src="https://kit.fontawesome.com/0d09e23a84.js"
  crossorigin="anonymous"
  role="script"
></script>
<script
  type="text/javascript"
  src="/assets/script.js"
  defer
  role="script"
></script>
<!-- FOOTER END -->
