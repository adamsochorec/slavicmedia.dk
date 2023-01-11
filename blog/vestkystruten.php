<!DOCTYPE html>
<html lang="en">
  <head>
    <?php
    $IPATH = $_SERVER['DOCUMENT_ROOT'] . '/assets/php/';
    include $IPATH . 'blog-desc.php';
    ?>
    <meta
      name="keywords"
      content="adamsochorec, adam sochorec, @adamsochorec, bike trip, Flensburg, Skagen, west coast,
    Jutland, Vestkystruten 1, Danish national cycle route 1, wooden public
    shelters, North Sea, fjords, coastal views, beauty, YouTube, travel vlogs"
    />
    <title>Vestkystruten | Adam Sochorec</title>   <meta name="robots" content="noindex" />
    <meta name="googlebot" content="noindex" />
    <?php
    $IPATH = $_SERVER['DOCUMENT_ROOT'] . '/assets/php/';
    include $IPATH . 'global-head.php';
    ?>
  </head>

  <body id="vestkystruten" class="blog-item">
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
        <img src="/img/jpg/IMG_1849.jpg" alt="#" />
        <p>
          Recently, me and my friend Marcel had the opportunity to take a bike
          trip from German Flensburg to Danish Skagen, along the west coast of
          the Danish peninsula Jutland. It was an epic journey that we'll never
          forget.
        </p>
        <iframe
          src="https://www.youtube-nocookie.com/embed/"
          title="YouTube video player"
          frameborder="0"
          allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
          allowfullscreen
          ><p class="alt-alt">
            Link to a YoutTube blog from our journey made by Marcel.
          </p></iframe
        >
        <p>
          Most of our time was spent biking along the Danish national cycle
          route 1, also called Vestkystruten 1. We biked over 570 km in 10 days,
          taking in the stunning views and experiencing all that Denmark had to
          offer. Along the way, we slept in the forest and in wooden public
          shelters, observing the gradual change of the countryside as we
          continued north. We also took the opportunity to swim in the cold
          North Sea and inland fjords. Our goal was to get to know Denmark as
          much as possible, and we had the time of our lives exploring the
          beautiful landscape and meeting friendly locals.
        </p>
        <br class="hideIframe" />
        <section class="flex-center">
          <iframe
            class="strava-embed-placeholder reveal"
            data-embed-type="activity"
            data-embed-id="7581051625"
          ></iframe>
          <br class="hideIframe" />
        </section>
        <p>
          From breathtaking coastal views to charming small towns, this trip had
          it all. And the destination, Skagen, was a unique place where the
          North Sea and Baltic Sea meet together. We were constantly amazed by
          the beauty of the country and the kindness of the people we met along
          the way. Overall, it was a truly unforgettable experience and one that
          we highly recommend to anyone looking to explore Denmark. If you're
          interested in learning more about our journey, be sure to check out
          our video on YouTube. And don't forget to give it a like and subscribe
          Marcel's channel for more travel vlogs!
        </p>
        <hr />
        <section>
          <h2>Related literature</h2>
          <br />
          <ol>
            <li>
              <a
                target="_blank"
                rel="noopener noreferrer"
                href="https://udinaturen.dk/map-page"
                >Map of public shelters across Denmark
              </a>
            </li>
            <li>
              <a
                target="_blank"
                rel="noopener noreferrer"
                href="https://en.wikipedia.org/wiki/Danish_National_Cycle_Route_1"
              >
                Danish National Cycle Route 1 - Vestkystruten
              </a>
            </li>
            <li>
              <a
                target="_blank"
                rel="noopener noreferrer"
                href="https://en.wikipedia.org/wiki/Skagen"
                >Skagen</a
              >
            </li>
            <li>
              <a
                target="_blank"
                rel="noopener noreferrer"
                href="https://en.wikipedia.org/wiki/Bulbjerg"
                >Bulbjerg</a
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
    <script src="https://strava-embeds.com/embed.js"></script>

    <?php
    $IPATH = $_SERVER['DOCUMENT_ROOT'] . '/assets/php/';
    include $IPATH . 'global-footer.php';
    ?>
  </body>
</html>
