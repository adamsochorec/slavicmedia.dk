<!DOCTYPE html>
<html lang="en">
  <head>
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <title>Lakeland | Adam Sochorec</title>
    <?php
    $IPATH = $_SERVER['DOCUMENT_ROOT'] . '/assets/php/';
    include $IPATH . 'global-head.php';
    ?>
    <meta name="robots" content="noindex" />
    <meta name="googlebot" content="noindex" />
  </head>

  <body id="lakeland" class="blog-item">
    <?php
    $IPATH = $_SERVER['DOCUMENT_ROOT'] . '/assets/php/';
    include $IPATH . 'global-nav-bar.php';
    ?>
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
          <img src="/img/jpg/22081522748781.jpg" alt="#" />
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae
            hic odit in amet harum quos voluptatum tempore, molestiae explicabo
            nihil itaque. Repellat aliquid quos quo eligendi? Tempore animi
            assumenda ex. Lorem ipsum dolor sit amet consectetur adipisicing
            elit. Officia vitae voluptas quae modi? Officiis possimus
            accusantium, dolor officia quod, minus inventore quibusdam quos,
            autem incidunt debitis laborum tempora ab architecto.
          </p>
        </section>
        <hr />
        <section>
          <h2>Related literature</h2>
          <br />
          <ol>
            <li>
              <a
                target="_blank"
                rel="noopener noreferrer"
                href="https://www.tulikartta.fi/"
                >Map of shelters across Finland</a
              >
            </li>
            <li>
              <a
                target="_blank"
                rel="noopener noreferrer"
                href="https://www.vr.fi/en/to-nature-by-train"
                >National parks reaachable by train</a
              >
            </li>
            <li>
              <a
                target="_blank"
                rel="noopener noreferrer"
                href="https://www.nationalparks.fi"
                >National Parks</a
              >
            </li>
            <li>
              <a
                target="_blank"
                rel="noopener noreferrer"
                href="https://www.eraluvat.fi/en/fishing/fisheries-management-fee.html"
                >Fishing in nature fee</a
              >
            </li>
            <li>
              <a
                target="_blank"
                rel="noopener noreferrer"
                href="https://www.fishinginfinland.fi"
                >Fishing in Finland
              </a>
            </li>
            <li>
              <a
                target="_blank"
                rel="noopener noreferrer"
                href="https://www.valokuvataiteenmuseo.fi/en/exhibitions/forests-north-wind#gallery"
                >Forests of the North Wind
              </a>
            </li>
          </ol>
          <?php
          $IPATH = $_SERVER['DOCUMENT_ROOT'] . '/assets/php/';
          include $IPATH . 'global-totop.php';
          ?>
        </section>
      </article>
    </main>
    <?php
    $IPATH = $_SERVER['DOCUMENT_ROOT'] . '/assets/php/';
    include $IPATH . 'global-footer.php';
    ?>
  </body>
</html>
