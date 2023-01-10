<!DOCTYPE html>
<html lang="en">
  <head>
    <?php
    $IPATH = $_SERVER['DOCUMENT_ROOT'] . '/assets/php/';
    include $IPATH . 'blog-desc.php';
    ?>
    <meta
      name="keywords"
      content="adamsochorec, adam sochorec, @adamsochorec,"
    />
    <title>Lakeland | Adam Sochorec</title>
    <?php
    $IPATH = $_SERVER['DOCUMENT_ROOT'] . '/assets/php/';
    include $IPATH . 'global-head.php';
    ?>
  </head>

  <body id="lakeland" class="blog-item">
    <?php
    $IPATH = $_SERVER['DOCUMENT_ROOT'] . '/assets/php/';
    include $IPATH . 'global-nav-bar.php';
    ?>
    <main>
      <article class="wrapper-standard">
        <div class="pathname-container">
          <i
            ><span class="pathname"><a href="/"></a> / </span>
            <span class="pathname blog"><a href="/#blog"></a> / </span>
            <span class="pathname-current blog"></span
          ></i>
        </div>
        <br />
        <h1></h1>
        <img src="/img/jpg/22081522748781.jpg" alt="#" />
        <p>
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae
          hic odit in amet harum quos voluptatum tempore, molestiae explicabo
          nihil itaque. Repellat aliquid quos quo eligendi? Tempore animi
          assumenda ex. Lorem ipsum dolor sit amet consectetur adipisicing elit.
          Officia vitae voluptas quae modi? Officiis possimus accusantium, dolor
          officia quod, minus inventore quibusdam quos, autem incidunt debitis
          laborum tempora ab architecto.
        </p>
        <iframe
          src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d954436.7111803129!2d25.401746972249487!3d62.14582518057915!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x46908409f3ce7379%3A0xe5e07e57fb6df9aa!2sFinnish%20Lakeland!5e0!3m2!1sen!2scz!4v1672679226349!5m2!1sen!2scz"
          width="800"
          height="600"
          style="border: 0"
          allowfullscreen=""
          loading="lazy"
          referrerpolicy="no-referrer-when-downgrade"
          ><p class="alt-alt">
            Satellite view of a Finnish Lakeland, on the south-east of the
            country.
          </p></iframe
        >
        <hr />
        <h2>Related literature</h2>
        <br />
        <ol>
          <li>
            <a
              target="_blank"
              rel="noopener noreferrer"
              href="https://en.wikipedia.org/wiki/Freedom_to_roam#Finland"
              >Everyman's right</a
            >
          </li>
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
      </article>
    </main>
    <?php
    $IPATH = $_SERVER['DOCUMENT_ROOT'] . '/assets/php/';
    include $IPATH . 'global-footer.php';
    ?>
  </body>
</html>
