<!-- FOOTER START -->
<footer>
  <?php
         $IPATH = $_SERVER['DOCUMENT_ROOT'] . '/assets/php/';
         include $IPATH . 'global-social-icons.php';
         ?>
  <br />
  <div class="footer-ps">
    <p>
      <?php echo $is_danish ? 'Ingen cookies, kun ❤ fra Danmark' : 'No cookies, only ❤ from Denmark' ?>.
    </p>
  </div>
  <br />
  <div class="footer-ps">
    <b
      ><span
        >©
        <?= date('Y') ?></span
      ></b
    >
    <span
      >Slavic Media I/S<br />
      <a
        target="_blank"
        rel="noopener noreferrer"
        href="https://datacvr.virk.dk/enhed/virksomhed/44081512?fritekst=slavic%20media&sideIndex=0&size=10"
        ><u> CVR: 44081512</u></a
      >
    </span>
  </div>
  <script
    type="text/javascript"
    src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"
  ></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <script src="https://cdn.rawgit.com/dimsemenov/Magnific-Popup/master/dist/jquery.magnific-popup.min.js"></script>
  <script type="text/javascript" src="/assets/global-script.js" defer></script>
</footer>
<!-- FOOTER END -->
