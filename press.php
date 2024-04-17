<!DOCTYPE html>
<html lang="en">
  <head>
    <?php
  $IPATH = $_SERVER['DOCUMENT_ROOT'] . '/assets/components/';
  include $IPATH . 'head.php';
  ?>
    <title>For Press | Slavic Media</title>
  </head>
  <body id="press">
    <!-- HEADER START -->
    <?php
    $IPATH = $_SERVER['DOCUMENT_ROOT'] . '/assets/components/';
    include $IPATH . 'nav-bar.php';
    ?>
    <!-- HEADER END -->
    <!-- COOKIES START -->
    <?php
   $IPATH = $_SERVER['DOCUMENT_ROOT'] . '/assets/components/';
   include $IPATH . 'privacy.php';
   ?>
    <!-- COOKIES END -->
    <main>
      <article class="wrapper-wide">
        <div
          class="pathname-container"
          role="region"
          aria-labelledby="pagePathHeading"
          aria-hidden="false"
        ></div>
        <h1
          id="pagePathHeading"
          class="reveal"
          role="heading"
          aria-level="1"
          aria-label="Page Title: For Press"
        >
          For Press
        </h1>
        <div
          class="pathname-container reveal"
          role="navigation"
          aria-labelledby="breadcrumbsHeading"
          aria-hidden="false"
        >
          <p>
            <span class="pathname"
              ><a href="/" aria-label="Home"></a> &#8250;
            </span>
            <span class="pathname" aria-label="press">For Press</span>
          </p>
        </div>
        <hr class="reveal" role="separator" aria-label="Separator" />
        <!-- PRESS MATERIALS GRID START -->
        <div
          class="reveal"
          id="gallery-press"
          role="grid"
          aria-label="Press Materials Grid"
        >
          <!-- BRAND GUIDE START -->
          <div
            class="gallery-item"
            role="region"
            aria-labelledby="brandGuideHeading"
            aria-hidden="false"
          >
            <h2 id="brandGuideHeading" aria-label="Brand Guide Title">
              Brand Guide
            </h2>
            <a
              class="gallery-item"
              href="/assets/brand-guide.pdf"
              target="_blank"
              aria-label="Link to Brand Guide"
            >
              <div class="grid-item" id="brand-guide" role="gridcell">
                <div class="blur">
                  <span aria-label="Preview">
                    <p>Preview<i class="fa-solid fa-arrow-right"></i></p>
                  </span>
                </div>
              </div>
            </a>
            <p
              aria-label="Sets the visual and stylistic standards for the brand, ensuring consistency in logos, colours, fonts, and design."
            >
              Sets the visual and stylistic standards for the brand, ensuring
              consistency in logos, colours, fonts, and design.
            </p>
          </div>
          <!-- BRAND GUIDE END -->
          <!-- CREDIT GUIDE START -->
          <div
            class="gallery-item"
            role="region"
            aria-labelledby="creditGuideHeading"
            aria-hidden="false"
          >
            <h2 id="creditGuideHeading" aria-label="Credit Guide Title">
              Credit Guide
            </h2>
            <a
              class="gallery-item"
              href="/assets/credit-guide.pdf"
              target="_blank"
              aria-label="Link to Credit Guide"
            >
              <div class="grid-item" id="credit-guide" role="gridcell">
                <div class="blur">
                  <span aria-label="Preview">
                    <p>Preview<i class="fa-solid fa-arrow-right"></i></p>
                  </span>
                </div>
              </div>
            </a>
            <p
              aria-label="Outlines how to tag and credit work across digital as well as printed media."
            >
              Outlines how to tag and credit work across digital as well as
              printed media.
            </p>
          </div>
          <!-- CREDIT GUIDE END -->
          <!-- PRESS KIT START -->
          <div
            class="gallery-item"
            role="region"
            aria-labelledby="pressKitHeading"
            aria-hidden="false"
          >
            <h2 id="pressKitHeading" aria-label="Press Kit Title">Press Kit</h2>
            <a
              class="gallery-item"
              href="/assets/press-kit.zip"
              target="_blank"
              aria-label="Link to Press Kit"
            >
              <div class="grid-item" id="press-kit" role="gridcell">
                <div class="blur">
                  <span aria-label="Download">
                    <p>Download<i class="fa-solid fa-arrow-right"></i></p>
                  </span>
                </div>
              </div>
            </a>
            <p
              aria-label="Package of vectorised logos, fonts and other essential branding materials."
            >
              Package of vectorised logos, fonts and other essential branding
              materials.
            </p>
          </div>
          <!-- PRESS KIT END -->
        </div>
        <!-- PRESS MATERIALS GRID END -->
      </article>
    </main>
    <!-- FOOTER START -->
    <?php
          $IPATH = $_SERVER['DOCUMENT_ROOT'] . '/assets/components/';
          include $IPATH . 'footer.php';
          ?>
    <script
      type="text/javascript"
      src="/assets/cookies.js"
      defer
      role="script"
      aria-label="Cookies Script"
    ></script>
    <!-- FOOTER END -->
  </body>
</html>
