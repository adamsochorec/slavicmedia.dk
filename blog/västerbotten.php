<!DOCTYPE html>
<html lang="en">
  <head>
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <title>Västerbotten 🇸🇪| Adam Sochorec</title>
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
    <aside>
      <?php
      $IPATH = $_SERVER['DOCUMENT_ROOT'] . '/assets/php/';
      include $IPATH . 'scroll-status.php';
      ?>
    </aside>
    <main>
      <article class="wrapper-standard">
        <section>
          <div class="pathname-container">
            <i
              ><span class="pathname"><a href="/"></a> / </span>
              <span class="pathname blog"><a href="/blog.php"></a> / </span>
              <span class="pathname-current blog"></span
            ></i>
          </div>
          <br />
          <h1></h1>
          <br />
          <img src="/blog/img/västerbotten/jpg/1.jpg" alt="#" />
          <p>
            <br />Lorem ipsum dolor sit amet consectetur adipisicing elit.
            Recusandae hic odit in amet harum quos voluptatum tempore, molestiae
            explicabo nihil itaque. Repellat aliquid quos quo eligendi? Tempore
            animi assumenda ex. Lorem ipsum dolor sit amet consectetur
            adipisicing elit. Officia vitae voluptas quae modi? Officiis
            possimus accusantium, dolor officia quod, minus inventore quibusdam
            quos, autem incidunt debitis laborum tempora ab architecto.
          </p>
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
