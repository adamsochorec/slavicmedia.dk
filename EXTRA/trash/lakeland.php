<!DOCTYPE html>
<html lang="en">
  <head>
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <title>Lakeland 🇫🇮| Adam Sochorec</title>
    <?php
    $IPATH = $_SERVER['DOCUMENT_ROOT'] . '/assets/php/';
    include $IPATH . 'global-head.php';
    ?>
    <meta name="robots" content="noindex" />
    <meta name="googlebot" content="noindex" />
  </head>

  <body id="lakeland">
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
              <span class="pathname blog"><a href="/#blog"></a> / </span>
              <span class="pathname-current blog"></span
            ></i>
          </div>
          <br />
          <h1></h1>
          <br />
          <img src="/img/jpg/lakeland-1.jpg" alt="#" />
          <p>
            <br />Lorem ipsum dolor sit, amet consectetur adipisicing elit.
            Labore modi ut impedit placeat eum optio, distinctio, obcaecati
            aliquid laudantium facilis pariatur omnis ex, sit vero alias est
            culpa ipsam explicabo. Lorem ipsum, dolor sit amet consectetur
            adipisicing elit. Aliquam dicta necessitatibus tempora ipsum,
            molestias fuga voluptatum nesciunt quos, aperiam quaerat iure
            doloribus saepe debitis magni temporibus dolorem ullam facilis esse!
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
