<!DOCTYPE html>
<html lang="en">
  <head>
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <title>Pohjamaa 🇫🇮| Adam Sochorec</title>
    <?php
    $IPATH = $_SERVER['DOCUMENT_ROOT'] . '/assets/php/';
    include $IPATH . 'global-head.php';
    ?>
    <meta name="robots" content="noindex" />
    <meta name="googlebot" content="noindex" />
  </head>

  <body id="pohjamaa">
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
              <span class="pathname blog"><a href="/blog.php"></a> / </span>
              <span class="pathname-current blog"></span
            ></i>
          </div>
          <br />
          <h1></h1>
          <br />
          <img src="/blog/img/pohjamaa/jpg/1.jpg" alt="#" />
          <p>
            <br />
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nisi,
            nobis facilis fugiat placeat sit, voluptates a, quibusdam atque
            doloribus aperiam ullam laborum! Officia perferendis voluptate
            ratione cumque et? Soluta, aperiam?
          </p>
          <br />
          <img src="/blog/img/pohjamaa/jpg/3.jpg" alt="#" class="reveal" />
          <hr />
          <p class="reveal">
            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Reiciendis
            itaque facilis nihil recusandae quaerat architecto fuga praesentium,
            voluptatum deleniti! Sed architecto fuga eos maiores dolor tempora
            laboriosam voluptas non ex?
          </p>
          <br />
          <img src="/blog/img/pohjamaa/jpg/2.jpg" alt="#" class="reveal" />
          <p class="reveal">
            <br />
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum ipsum
            dolor consequuntur odit, quam asperiores perspiciatis voluptas quos
            saepe corrupti minima delectus perferendis quaerat officiis veniam
            eaque id, ullam totam. Lorem ipsum dolor sit amet consectetur
            adipisicing elit. Nulla et non quam, ab voluptatibus delectus,
            ratione deleniti, temporibus possimus necessitatibus praesentium hic
            adipisci dolor animi obcaecati molestiae quae expedita dolorum?
          </p>
          <br />
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
