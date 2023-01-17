<!DOCTYPE html>
<html lang="en">
  <head>
    <meta name="description" content="" />
    <meta
      name="keywords"
      content="adamsochorec, adam sochorec, @adamsochorec, web portfolio,"
    />
    <title>Adam Sochorec</title>
    <meta name="robots" content="noindex" />
    <meta name="googlebot" content="noindex" />
    <?php
    $IPATH = $_SERVER['DOCUMENT_ROOT'] . '/assets/php/';
    include $IPATH . 'global-head.php';
    ?>
    <link rel="stylesheet" href="/projects/trash/css/style.css" />
  </head>
  <body id="trash" class="homepage">
    <!-- HEADER START -->
    <?php
    $IPATH = $_SERVER['DOCUMENT_ROOT'] . '/projects/trash/assets/php/';
    include $IPATH . 'trash-nav-bar.php';
    ?>
    <!-- HEADER END -->
    <main>
      <!-- KOLDING EXPO START -->
      <article id="first-section">
        <div class="blur h-background"></div>
        <section class="intro-section">
          <section class="intro-subsection">
            <h1>Lorem ipsium</h1>
            <br /><br />
            <a href="/">
              <section class="btn-area flex-center">
                <div id="btn">action button</div>
                <div class="btn-shadow"></div>
              </section>
            </a>
            <?php
            $IPATH = $_SERVER['DOCUMENT_ROOT'] . '/assets/php/';
            include $IPATH . 'global-scroll.php';
            ?>
          </section>
        </section>

        <br />
        <section class="wrapper-standard">
          <hr class="reveal" />
          <h1>Tube collector</h1>
          <iframe
            title="Blåvand bunker | vzor 2"
            frameborder="0"
            allowfullscreen
            mozallowfullscreen="true"
            webkitallowfullscreen="true"
            allow="autoplay; fullscreen; xr-spatial-tracking"
            xr-spatial-tracking
            execution-while-out-of-viewport
            execution-while-not-rendered
            web-share
            src="https://sketchfab.com/models/dd16bb89f8844760ab31396d495fd0ce/embed?autospin=1&ui_theme=dark&dnt=1"
            ><p class="alt-alt">
              3D scan of an Atlantic Wall bunker from WWII.
            </p>
          </iframe>
          <p>
            We are excited to introduce our new product, the Tube Collector, to
            your city. The Tube Collector is a revolutionary solution for
            optimizing the recycling and can collection process.
          </p>

          <hr />
          <h2>Product features:</h2>
          <br />
          <ul>
            <li>
              <p>
                One Tube Collector can accommodate four 300 ml cans, which means
                that if two are installed in each trash bin, the capacity for
                cans would increase by 2.6 times compared to the current
                solution, which can only hold three cans. Additionally, this
                will free up space in the trash bins as people will not need to
                crush cans before throwing them away.
              </p>
            </li>
            <li>
              <p>
                The Tube Collector does not require any modifications to the
                current trash bins in the city, as it can be easily screwed into
                existing holes. This means that it can be implemented quickly
                and without any disruption to the current system.
              </p>
            </li>
            <li>
              <p>
                People who rely on collecting cans for income will benefit
                greatly from the Tube Collector, as they will no longer have to
                sift through garbage to find cans. Furthermore, the number of
                cans returned for recycling will increase as cans will no longer
                be crushed and devalued during trash collection.
              </p>
            </li>
            <li>
              <p>
                Emptying the Tube Collector is easy and convenient. Simply place
                a plastic bag underneath and open the valve. Additionally, it
                will simplify and optimize the recycling process at the
                recycling center, as there will be no need for additional steps
                to separate cans from other trash.
              </p>
            </li>
            <li>
              <p>
                The Tube Collector's design is not intrusive and will fit
                seamlessly into the urban architecture. We believe that the Tube
                Collector will be a valuable addition to your city's efforts to
                promote recycling and reduce waste.
              </p>
            </li>
          </ul>
          <section class="img">
            <img src="/img/jpg/IMG_4370.jpg" alt="#" />
            <p>
              <i class="note"
                >Pant collectors would avoid unhygienic rubbish bin search</i
              >
            </p>
          </section>
          <p>
            We look forward to the opportunity to work with you to implement the
            Tube Collector in Kolding. Don't heistate to
            <a href="/#contact">contact us</a> in case in any questions<br /><br />Sincerely,<br />
            <i>Sympaticka Prostituka a.s.</i>
          </p>
          <hr class="reveal" />
        </section>
      </article>
      <!-- ABOUT START -->
      <article id="about">
        <section class="intro-section flex-center">
          <section class="intro-subsection">
            <h2 class="reveal"></h2>
            <?php
            $IPATH = $_SERVER['DOCUMENT_ROOT'] . '/assets/php/';
            include $IPATH . 'global-scroll.php';
            ?>
            <section></section>
          </section>
        </section>
        <section class="wrapper-standard">
          <hr class="reveal" />
          <p class="reveal">
            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Aliquid,
            consequatur. Praesentium sed veniam provident in sequi tempora vero,
            ut tempore at ipsa rem non perferendis eos mollitia? Deserunt,
            aliquam laborum? Lorem ipsum dolor sit, amet consectetur adipisicing
            elit. Harum, ratione fugit autem neque numquam eos alias ipsa.
            Eligendi autem inventore aliquam, quaerat omnis enim error
            laudantium quisquam modi suscipit rem.
          </p>
          <hr class="reveal" />
          <section class="reveal">
            <img class="reveal" src="/img/jpg/IMG_8404.jpg" alt="" />
          </section>
          <section class="reveal">
            <img
              class="reveal partner-logos"
              src="/img/jpg/2209885.jpg"
              alt=""
            />
          </section>
          <div id="contact"></div>
          <hr class="reveal" />
          <section class="contact-form-section">
            <h3 class="reveal">Contact</h3>
            <br /><br />
            <form
              id="contactForm"
              onclick="loading()"
              action="https://formsubmit.co/2007080c2cf8bd2ebb68506e7aa98c5f"
              method="POST"
              novalidate
              enctype="multipart/form-data"
            >
              <!-- Email invisibility -->
              <section class="grid-container contact-form reveal">
                <section class="grid-item">
                  <label for="email">
                    <p>Email *</p>
                  </label>
                  <input
                    type="email"
                    id="email"
                    name="Email"
                    placeholder="example@domain.dk"
                    required
                  />
                  <br /><br />
                  <label for="subject">
                    <p>Subject *</p>
                  </label>
                  <input
                    type="text"
                    id="subject"
                    name="_subject"
                    required
                    placeholder="Hi"
                  />
                  <br /><br />
                </section>
                <section class="grid-item">
                  <label for="firstName">
                    <p>First Name</p>
                  </label>
                  <input
                    type="text"
                    id="firstName"
                    name="First Name"
                    placeholder="Franz"
                  />
                  <br /><br />
                  <label for="surname">
                    <p>Surname</p>
                  </label>
                  <input
                    type="text"
                    id="surname"
                    name="surname"
                    placeholder="Kafka"
                  />
                  <br /><br />
                </section>
              </section>
              <section class="reveal">
                <label for="message">
                  <p>Message *</p>
                  <br />
                </label>
                <textarea
                  name="Message"
                  rows="7"
                  required
                  placeholder="Your questions or comments"
                ></textarea>
                <br /><br />
                <div class="btn-area flex-center">
                  <button id="btn" class="submit-btn" type="submit">
                    Submit contact form
                  </button>
                  <div class="btn-shadow"></div>
                </div>
                <input
                  type="hidden"
                  name="_captcha"
                  value="false"
                /><!-- Spam captcha deactivation -->
                <input
                  type="hidden"
                  name="_next"
                  value="https://adamsochorec.com/success"
                />
                <!-- Redirect to the success page -->
              </section>
            </form>
          </section>
          <?php
          $IPATH = $_SERVER['DOCUMENT_ROOT'] . '/assets/php/';
          include $IPATH . 'global-totop.php';
          ?>
        </section>
      </article>
      <!-- ABOUT END -->
    </main>
    <!-- FOOTER START -->
    <?php
    $IPATH = $_SERVER['DOCUMENT_ROOT'] . '/projects/trash/assets/php/';
    include $IPATH . 'trash-footer.php';
    ?>
    <!-- FOOTER END -->
  </body>
</html>
