<!DOCTYPE html>
<html lang="en">
  <head>
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <title>Västerbotten | Adam Sochorec</title>
    <?php
    $IPATH = $_SERVER['DOCUMENT_ROOT'] . '/assets/php/';
    include $IPATH . 'global-head.php';
    ?>
    <meta name="robots" content="noindex" />
    <meta name="googlebot" content="noindex" />
  </head>

  <body id="västerbotten">
    <?php
    $IPATH = $_SERVER['DOCUMENT_ROOT'] . '/assets/php/';
    include $IPATH . 'global-nav-bar.php';
    ?>
    <main>
      <article class="wrapper-standard">
        <section>
          <div class="pathname-container">
            <i
              ><span class="pathname"><a href="/works"></a> / </span>
              <span class="pathname blog"><a href="/blog"></a> / </span>
              <span class="pathname-current blog"></span
            ></i>
          </div>
          <br />
          <h1></h1>
          <br />
          <img src="/articles/img/västerbotten/jpg/1.jpg" />
        </section>
        <hr />
      </article>
    </main>
    <?php
    $IPATH = $_SERVER['DOCUMENT_ROOT'] . '/assets/php/';
    include $IPATH . 'global-footer.php';
    ?>
  </body>
</html>
