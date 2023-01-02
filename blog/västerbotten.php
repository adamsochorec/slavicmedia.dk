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
  </head>
  <body id="västerbotten" class="blog-item">
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
        <img src="/img/jpg/2209048838.jpg" alt="#" />
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
          src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3577739.5483479383!2d16.000180589288714!3d64.03319809164573!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x467c38845b62c2d7%3A0xafd10d3f6e29c78c!2s918%2092%20Bullmark%2C%20Sweden!5e0!3m2!1sen!2scz!4v1672680151674!5m2!1sen!2scz"
          width="800"
          height="600"
          style="border: 0"
          allowfullscreen=""
          loading="lazy"
          referrerpolicy="no-referrer-when-downgrade"
        ></iframe>
        <img src="/img/jpg/2209012611001.jpg" alt="#" />
        <img src="/img/jpg/22090226268821.jpg" alt="#" />
        <img src="/img/jpg/2209032665002.jpg" alt="#" />
        <img src="/img/jpg/2209048834.jpg" alt="#" />
        <img src="/img/jpg/2209018820.jpg" alt="#" />

        <hr />
        <section>
          <h2>Related literature</h2>
          <br />
          <ol>
            <li>
              <a target="_blank" rel="noopener noreferrer" href=""
                >Joakim's handmande knives</a
              >
            </li>
            <li>
              <a
                target="_blank"
                rel="noopener noreferrer"
                href="https://en.wikipedia.org/wiki/Freedom_to_roam#Sweden"
                >Everyman's right</a
              >
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
