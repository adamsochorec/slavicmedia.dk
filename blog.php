<!DOCTYPE html>
<html lang="en">
  <head>
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <title>Blog | Adam Sochorec</title>
    <?php
    $IPATH = $_SERVER['DOCUMENT_ROOT'] . '/assets/php/';
    include $IPATH . 'global-head.php';
    ?>
    <meta name="robots" content="noindex" />
    <meta name="googlebot" content="noindex" />
  </head>

  <body id="blog">
    <?php
    $IPATH = $_SERVER['DOCUMENT_ROOT'] . '/assets/php/';
    include $IPATH . 'global-nav-bar.php';
    ?>
    <main>
      <article class="wrapper-standard">
        <div class="pathname-container">
          <i
            ><span class="pathname"><a href="/"></a> / </span>
            <span class="pathname-current blog"></span
          ></i>
        </div>
        <br />
        <h1>Blog</h1>
        <br />
        <section class="grid-container gallery">
          <a class="hh-stretch" href="/web-dev/cybersecurity">
            <div class="grid-item" id="cybersecurity">
              <div class="blur">
                <span></span>
              </div>
            </div>
          </a>
          <a href="/blog/house-hunting">
            <div class="grid-item" id="house-hunting">
              <div class="blur">
                <span></span>
              </div>
            </div>
          </a>
          <a href="/blog/pohjamaa">
            <div class="grid-item" id="pohjamaa">
              <div class="blur">
                <span></span>
              </div>
            </div>
          </a>
          <a href="/blog/lakeland">
            <div class="grid-item" id="lakeland">
              <div class="blur">
                <span></span>
              </div>
            </div>
          </a>
          <a href="/blog/västerbotten">
            <div class="grid-item" id="västerbotten">
              <div class="blur">
                <span></span>
              </div>
            </div>
          </a>
          <a href="/blog/flensburg-skagen">
            <div class="grid-item reveal" id="flensburg-skagen">
              <div class="blur">
                <span></span>
              </div>
            </div>
          </a>
          <a href="/blog/blåvand">
            <div class="grid-item reveal" id="blåvand">
              <div class="blur">
                <span></span>
              </div>
            </div>
          </a>
          <a class="hh-stretch" href="/blog/åland">
            <div class="grid-item reveal" id="åland">
              <div class="blur">
                <span></span>
              </div>
            </div>
          </a>
        </section>
      </article>
    </main>
    <?php
    $IPATH = $_SERVER['DOCUMENT_ROOT'] . '/assets/php/';
    include $IPATH . 'global-footer.php';
    ?>
  </body>
</html>
