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
          <a
            class="gallery-item"
            href="/assets/brand-guide.pdf"
            target="_blank"
            aria-label="Link to Brand Guide"
          >
            <h2 id="brandGuideHeading" aria-label="Brand Guide Title">
              Brand Guide
            </h2>

            <div class="grid-item" id="brand-guide" role="gridcell"></div>
            <p
              aria-label="Sets the visual and stylistic standards for the brand, ensuring consistency in logos, colours, fonts, and design."
            >
              Sets the visual and stylistic standards for the brand, ensuring
              consistency in logos, colours, fonts, and design.
            </p>
          </a>
          <!-- BRAND GUIDE END -->
          <!-- CREDIT GUIDE START -->
          <a
            class="gallery-item"
            href="/assets/credit-guide.pdf"
            target="_blank"
            aria-label="Link to Credit Guide"
          >
            <h2 id="creditGuideHeading" aria-label="Credit Guide Title">
              Credit Guide
            </h2>

            <div class="grid-item" id="credit-guide" role="gridcell"></div>
            <p
              aria-label="Outlines how to tag and credit work across digital as well as printed media."
            >
              Outlines how to tag and credit work across digital as well as
              printed media.
            </p>
          </a>
          <!-- CREDIT GUIDE END -->
          <!-- PRESS KIT START -->
          <a
            class="gallery-item"
            href="/assets/press-kit.zip"
            target="_blank"
            aria-label="Link to Press Kit"
          >
            <h2 id="pressKitHeading" aria-label="Press Kit Title">Press Kit</h2>

            <div class="grid-item" id="press-kit" role="gridcell"></div>
            <p
              aria-label="Package of vectorised logos, fonts and other essential branding materials."
            >
              Package of vectorised logos, fonts and other essential branding
              materials.
            </p>
          </a>
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
    <!-- FOOTER END -->
  </body>
</html>
