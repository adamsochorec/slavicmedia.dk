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
      <article id="gallery" class="wrapper-standard">
        <div class="pathname-container">
          <i
            ><span class="pathname"><a href="/works"></a> / </span>
            <span class="pathname-current blog"></span
          ></i>
        </div>
        <br />
        <h1>Articles</h1>
        <br />
        <section class="grid-container">
          <a class="hh-stretch" href="/articles/cybersecurity">
            <div class="grid-item cybersecurity">
              <div class="blur">
                <span></span>
              </div>
            </div>
          </a>
          <section>
            <a href="/articles/house-HUNTING">
              <div class="grid-item grid-item-1">
                <div class="blur">
                  <span></span>
                </div>
              </div>
            </a>
          </section>
          <section>
            <a href="/articles/västerbotten">
              <div class="grid-item grid-item-2">
                <div class="blur">
                  <span></span>
                </div>
              </div>
            </a>
          </section>
          <section>
            <a href="/articles/flensburg-skagen">
              <div class="grid-item grid-item-3">
                <div class="blur">
                  <span></span>
                </div>
              </div>
            </a>
          </section>
          <section>
            <a href="/articles/blåvand">
              <div class="grid-item grid-item-4">
                <div class="blur">
                  <span></span>
                </div>
              </div>
            </a>
          </section>
          <section>
            <a href="/articles/kvarken-archipelago">
              <div class="grid-item grid-item-5">
                <div class="blur">
                  <span></span>
                </div>
              </div>
            </a>
          </section>
          <section>
            <a href="/articles/lakeland">
              <div class="grid-item grid-item-6">
                <div class="blur">
                  <span></span>
                </div>
              </div>
            </a>
          </section>
        </section>
      </article>
    </main>
    <?php
    $IPATH = $_SERVER['DOCUMENT_ROOT'] . '/assets/php/';
    include $IPATH . 'global-footer.php';
    ?>
  </body>
</html>
