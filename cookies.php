<?php include 'languages/config.php'; ?>
<!DOCTYPE html>
<html lang="<?php echo $_SESSION['lang'] ?>">
  <head>
    <?php
    $IPATH = $_SERVER['DOCUMENT_ROOT'] . '/assets/components/';
    include $IPATH . 'head.php';
    ?>
    <meta name="description" content="<?php echo $lang['asset_225'] ?>" />
    <!-- <meta name="keywords" content="<?php echo $lang['asset_219'] ?>" /> -->
    <title><?php echo $lang['asset_231'] ?> | Slavic Media</title>
  </head>
  <body id="privacy">
    <!-- HEADER START -->
    <?php
    $IPATH = $_SERVER['DOCUMENT_ROOT'] . '/assets/components/';
    include $IPATH . 'nav-bar.php';
    ?>
    <!-- HEADER END -->
    <main>
      <article class="wrapper-standard">
        <div class="pathname-container"></div>
        <h1 class="reveal">
          <?php echo $lang['asset_231'] ?>
        </h1>
        <div class="pathname-container reveal">
          <p>
            <span class="pathname"><a href="/"></a> &#8250; </span>
            <span class="pathname"
              ><a href="/#<?php echo $lang['asset_232'] ?>"
                ><?php echo $lang['asset_232'] ?></a
              >
            </span>
          </p>
        </div>
        <hr class="reveal" role="separator" />
        <section>
          <h2 class="reveal">Introduction</h2>
          <p class="reveal">
            Welcome to Slavic Media I/S ("us", "we", or "our") at
            <a href="https://slavicmedia.dk">slavicmedia.dk</a>. This Cookie
            Policy explains how we use cookies and similar technologies on our
            website. By using our website, you agree to the use of cookies as
            described in this policy.
          </p>
        </section>
        <hr class="semi" role="separator" />
        <section>
          <h2 class="reveal">What are Cookies?</h2>
          <p class="reveal">
            Cookies are small pieces of data stored on your device (computer or
            mobile device) when you visit our website. They serve various
            purposes, such as improving your browsing experience and providing
            us with insights into how our website is used.
          </p>
        </section>
        <hr class="semi" role="separator" />

        <section>
          <h2 class="reveal">How We Use Cookies</h2>
          <p class="reveal">We use cookies for the following purposes:</p>
          <ul>
            <li class="reveal">
              <strong>Google Analytics:</strong> We use Google Analytics to
              analyze the use of our website. Google Analytics gathers
              information about website use through cookies to help us improve
              our website and services. You can learn more about how Google
              Analytics collects and processes data by visiting their
              <a href="https://policies.google.com/privacy">Privacy Policy</a>.
            </li>
          </ul>
        </section>
        <hr class="semi" role="separator" />
        <section>
          <h2 class="reveal">Your Choices</h2>
          <p class="reveal">
            You can control and/or delete cookies as you wish. You can delete
            all cookies that are already on your device and prevent them from
            being placed by adjusting your browser settings. However, please be
            aware that disabling cookies may affect the functionality of our
            website.
          </p>
        </section>
        <hr class="semi" role="separator" />
        <section>
          <h2 class="reveal">Contact Us</h2>
          <p class="reveal">
            If you have any questions about our Cookie Policy, please contact us
            at
            <a href="mailto:contact@slavicmedia.dk">contact@slavicmedia.dk</a>
          </p>
        </section>
        <hr class="reveal" role="separator" />
      </article>
    </main>
    <!-- FOOTER START -->
    <?php
    $IPATH = $_SERVER['DOCUMENT_ROOT'] . '/assets/components/';
    include $IPATH . 'footer.php';
    ?>
    <!-- FOOTER END -->
  </body>
</html>
