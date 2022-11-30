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
          <a class="hh-stretch" href="/projects/cybersecurity">
            <div class="grid-item large cybersecurity">
              <div class="blur">
                <span></span>
              </div>
            </div>
          </a>
          <section>
            <a href="/articles/house-hunting">
              <div class="grid-item" id="house-hunting">
                <div class="blur">
                  <span></span>
                </div>
              </div>
            </a>
          </section>
          <section>
            <a href="/articles/pohjamaa">
              <div class="grid-item" id="pohjamaa">
                <div class="blur">
                  <span></span>
                </div>
              </div>
            </a>
          </section>
          <section>
            <a href="/articles/lakeland">
              <div class="grid-item" id="lakeland">
                <div class="blur">
                  <span></span>
                </div>
              </div>
            </a>
          </section>
          <section>
            <a href="/articles/västerbotten">
              <div class="grid-item" id="västerbotten">
                <div class="blur">
                  <span></span>
                </div>
              </div>
            </a>
          </section>
          <section>
            <a href="/articles/flensburg-skagen">
              <div class="grid-item" id="flensburg-skagen">
                <div class="blur">
                  <span></span>
                </div>
              </div>
            </a>
          </section>
          <section>
            <a href="/articles/blåvand">
              <div class="grid-item" id="blåvand">
                <div class="blur">
                  <span></span>
                </div>
              </div>
            </a>
          </section>
          <a class="hh-stretch" href="/articles/åland">
            <div class="grid-item large" id="åland">
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
