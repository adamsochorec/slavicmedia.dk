<!DOCTYPE html>
<html lang="en">
  <head>
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <title>Web-projects | Adam Sochorec</title>
    <?php
    $IPATH = $_SERVER['DOCUMENT_ROOT'] . '/assets/php/';
    include $IPATH . 'global-head.php';
    ?>
  </head>

  <body id="web-projects">
    <?php
    $IPATH = $_SERVER['DOCUMENT_ROOT'] . '/assets/php/';
    include $IPATH . 'global-nav-bar.php';
    ?>
    <main>
      <article class="wrapper-standard">
        <div class="pathname-container">
          <i
            ><span class="pathname"><a href="/works"></a> / </span>
            <span class="pathname-current web"></span
          ></i>
        </div>
        <br />
        <h1></h1>
        <br />
        <section class="grid-container gallery">
            <a class="hh-stretch" href="/projects/cybersecurity">
                <div class="grid-item" id="cybersecurity">
                  <div class="blur">
                    <span></span>
                  </div>
                </div>
              </a>
          <a class="hh-stretch" target="_blank" rel="noopener noreferrer" href="/projects/zebra-design/zebra-design">
            <div class="grid-item" id="zebra-design">
              <div class="blur">
                <span>Zebra-design</span>
              </div>
            </div>
          </a>
                <a class="hh-stretch" target="_blank" rel="noopener noreferrer" href="/projects/memos/memos">
                  <div class="grid-item" id="memos">
                    <div class="blur">
                      <span>Memos</span>
                    </div>
                  </div>
                </a>
                <section>
        </section>
      </article>
    </main>
    <?php
    $IPATH = $_SERVER['DOCUMENT_ROOT'] . '/assets/php/';
    include $IPATH . 'global-footer.php';
    ?>
  </body>
</html>
