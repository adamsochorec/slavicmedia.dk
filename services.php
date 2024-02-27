<!DOCTYPE html>
<html lang="en">
  <head>
    <?php
    $IPATH = $_SERVER['DOCUMENT_ROOT'] . '/assets/components/';
    include $IPATH . 'head.php';
    ?>
    <title>Multimedia Services | Slavic Media</title>
  </head>
  <body id="services">
    <!-- HEADER START -->
    <?php
    $IPATH = $_SERVER['DOCUMENT_ROOT'] . '/assets/components/';
    include $IPATH . 'nav-bar.php';
    ?>
    <!-- HEADER END -->
    <!-- COOKIES START -->
    <?php
   $IPATH = $_SERVER['DOCUMENT_ROOT'] . '/assets/components/';
   include $IPATH . 'privacy.php';
   ?>
    <!-- COOKIES END -->
    <main>
      <article class="wrapper-wide">
        <div class="pathname-container"></div>
        <h1 class="reveal">Services</h1>
        <div class="pathname-container reveal">
          <p>
            <span class="pathname"><a href="/"></a> &#8250; </span>
            <span class="pathname-current">Services</span>
          </p>
        </div>
        <hr class="reveal" role="separator" />
        <!-- FEATURES START -->
        <article
          class="gallery"
          id="gallery-features"
          aria-label="Features Grid"
        >
          <div class="gallery-item reveal">
            <div class="gallery-item-caption">
              <i class="fa-solid fa-film bubble"></i>
              <h3>Cinematic Storytelling</h3>
            </div>
          </div>
          <div class="gallery-item reveal">
            <div class="gallery-item-caption">
              <i class="fa-solid fa-image-portrait bubble"></i>
              <h3>Ceative Photography Sessions</h3>
            </div>
          </div>
          <div class="gallery-item reveal">
            <div class="gallery-item-caption">
              <i class="fa-solid fa-microchip bubble"></i>
              <h3>Industry Standard Tools</h3>
            </div>
          </div>
          <div class="gallery-item reveal" aria-label="">
            <div class="gallery-item-caption">
              <i class="fa-solid fa-handshake-simple bubble"></i>
              <h3>Strategic Business Consulting</h3>
            </div>
          </div>
          <div class="gallery-item reveal">
            <div class="gallery-item-caption">
              <i class="fa-brands fa-meta bubble"></i>
              <h3>Targeted Performance Ads</h3>
            </div>
          </div>
          <div class="gallery-item reveal">
            <div class="gallery-item-caption">
              <i class="fa-solid fa-diagram-project bubble"></i>
              <h3>Holistic Digital Strategy</h3>
            </div>
          </div>
        </article>
        <section class="flex-center">
          <a class="reveal" href="/projects" id="plans">
            <div class="cta">
              Explore Our Projects<i class="fa-solid fa-arrow-right"></i>
            </div>
          </a>
        </section>
        <!-- FEATURES END -->
        <hr class="reveal" role="separator" />

        <!-- PACKAGES START -->
        <h2 class="reveal" id="plans">
          Plans & <span class="highlited tuscher">Pricing</span>
        </h2>

        <p class="reveal">
          Designed to adapt to your evolving needs, ensuring you always have the
          right tools at your disposal. We believe in providing value for your
          investment. Our pricing is competitive, offering a range of plans to
          suit various budgets.
        </p>
        <hr class="semi" role="separator" />
        <div class="tabset">
          <!-- Tab 1 -->
          <input
            type="radio"
            name="tabset"
            id="tab2"
            aria-controls="Video"
            checked
          />
          <label class="first reveal" for="tab2"><span>Content</span></label>
          <!-- Tab 2 -->
          <input type="radio" name="tabset" id="tab1" aria-controls="Photo" />
          <label class="reveal" for="tab1"><span>Strategy</span></label>
          <!-- Tab 3 -->
          <input type="radio" name="tabset" id="tab3" aria-controls="All in" />
          <label class="reveal" for="tab3"><span>All in</span></label>
          <!-- Tab 4 -->
          <input type="radio" name="tabset" id="tab4" aria-controls="Service" />
          <label class="last reveal" for="tab4"><span>Service</span></label>
          <section class="switcher reveal">
            <label
              class="toggleSwitch"
              for="toggleSwitch"
              role="checkbox"
              aria-checked="false"
              tabindex="0"
            >
              <a
                class="higlited"
                title="General tax that applies, in principle, to all commercial activities involving the production and distribution of goods and the provision of services."
                target="_blank"
                rel="noopener noreferrer nofollow"
                href="https://taxation-customs.ec.europa.eu/what-vat_en"
              >
                <i class="fa-solid fa-percent"></i>
                <p>VAT</p>
              </a>
            </label>

            <label
              class="switch"
              role="switch"
              aria-checked="false"
              tabindex="0"
              ><div class="assesibility-on">|</div>
              <div class="assesibility-off">o</div>
              <input type="checkbox" onclick="vatPrice()" />
              <span class="slider"></span>
            </label>
          </section>
          <div class="tab-panels">
            <!-- VIDEO PACKAGES START -->
            <div class="tab-panel reveal">
              <table id="Video">
                <tr>
                  <th class="left-align"></th>
                  <th>Essential</th>
                  <th>Core</th>
                  <th>Elite</th>
                </tr>
                <tr>
                  <td class="left-align">
                    <p>Price</p>
                  </td>
                  <td>
                    <p>
                      <span class="price">588</span>
                      €
                    </p>
                  </td>
                  <td>
                    <p>
                      <span class="price">925</span>
                      €
                    </p>
                  </td>
                  <td>
                    <p>
                      <span class="price">1375</span>
                      €
                    </p>
                  </td>
                </tr>
                <tr>
                  <td class="left-align">
                    <p>Horizontal Video &#8804; 3min</p>
                  </td>
                  <td>
                    <p>1&#215;</p>
                  </td>
                  <td>
                    <p>1&#215;</p>
                  </td>
                  <td>
                    <p>2&#215;</p>
                  </td>
                </tr>
                <tr>
                  <td class="left-align">
                    <p>Horizontal Video &#8805; 3min</p>
                  </td>
                  <td>
                    <p>Request a Proposal</p>
                  </td>
                  <td>
                    <p>Request a Proposal</p>
                  </td>
                  <td>
                    <p>Request a Proposal</p>
                  </td>
                </tr>
                <tr>
                  <td class="left-align">
                    <p>Vertical Reel</p>
                  </td>
                  <td>
                    <p>1&#215;</p>
                  </td>
                  <td>
                    <p>3&#215;</p>
                  </td>
                  <td>
                    <p>5&#215;</p>
                  </td>
                </tr>
                <tr>
                  <td class="left-align">
                    <p>Project Pre-Production</p>
                  </td>
                  <td>
                    <p><i class="fa-solid fa-check"></i></p>
                  </td>
                  <td>
                    <p><i class="fa-solid fa-check"></i></p>
                  </td>
                  <td>
                    <p><i class="fa-solid fa-check"></i></p>
                  </td>
                </tr>
                <tr>
                  <td class="left-align">
                    <p>Revisions</p>
                  </td>
                  <td>
                    <p>1</p>
                  </td>
                  <td>
                    <p>2</p>
                  </td>
                  <td>
                    <p>Unlimited</p>
                  </td>
                </tr>
                <tr>
                  <td class="left-align">
                    <p>Shooting duration</p>
                  </td>
                  <td>
                    <p>3h</p>
                  </td>
                  <td>
                    <p>Half day (4-5h)</p>
                  </td>
                  <td>
                    <p>Full day (7-9h)</p>
                  </td>
                </tr>
                <tr>
                  <td class="left-align">
                    <p>Meta-Up Artist</p>
                  </td>
                  <td>
                    <p><i class="fa-solid fa-xmark"></i></p>
                  </td>
                  <td>
                    <p><i class="fa-solid fa-check"></i></p>
                  </td>
                  <td>
                    <p><i class="fa-solid fa-check"></i></p>
                  </td>
                </tr>
                <tr>
                  <td class="left-align">
                    <p>Drone Footage</p>
                  </td>
                  <td>
                    <p><i class="fa-solid fa-xmark"></i></p>
                  </td>
                  <td>
                    <p><i class="fa-solid fa-xmark"></i></p>
                  </td>
                  <td>
                    <p><i class="fa-solid fa-check"></i></p>
                  </td>
                </tr>
                <tr>
                  <td class="left-align">
                    <p>Motion Graphics</p>
                  </td>
                  <td>
                    <p><i class="fa-solid fa-xmark"></i></p>
                  </td>
                  <td>
                    <p><i class="fa-solid fa-check"></i></p>
                  </td>
                  <td>
                    <p><i class="fa-solid fa-check"></i></p>
                  </td>
                </tr>
                <tr>
                  <td class="left-align">
                    <p>Licensed music & SFX</p>
                  </td>
                  <td>
                    <p><i class="fa-solid fa-check"></i></p>
                  </td>
                  <td>
                    <p><i class="fa-solid fa-check"></i></p>
                  </td>
                  <td>
                    <p><i class="fa-solid fa-check"></i></p>
                  </td>
                </tr>
                <tr>
                  <td class="left-align">
                    <p>Recommended for</p>
                  </td>
                  <td>
                    <p>Hero/cover videos, showreels</p>
                  </td>
                  <td>
                    <p>Event after movies, Extensive company video</p>
                  </td>
                  <td>
                    <p>Campaigns, Large events</p>
                  </td>
                </tr>
              </table>
            </div>
            <!-- VIDEO PACKAGES END -->
            <!-- PHOTO PACKAGES START -->
            <div class="tab-panel reveal">
              <table id="Photo">
                <tr>
                  <th class="left-align"></th>
                  <th>Essential</th>
                  <th>Core</th>
                  <th>Elite</th>
                </tr>
                <tr>
                  <td class="left-align">
                    <p>Price</p>
                  </td>
                  <td>
                    <p>
                      <span class="price">250</span>
                      €
                    </p>
                  </td>
                  <td>
                    <p>
                      <span class="price">663</span>
                      €
                    </p>
                  </td>
                  <td>
                    <p>
                      <span class="price">1000</span>
                      €
                    </p>
                  </td>
                </tr>
                <tr>
                  <td class="left-align">
                    <p>Project Pre-Production</p>
                  </td>
                  <td>
                    <p><i class="fa-solid fa-check"></i></p>
                  </td>
                  <td>
                    <p><i class="fa-solid fa-check"></i></p>
                  </td>
                  <td>
                    <p><i class="fa-solid fa-check"></i></p>
                  </td>
                </tr>
                <tr>
                  <td class="left-align">
                    <p>Revisions</p>
                  </td>
                  <td>
                    <p>1</p>
                  </td>
                  <td>
                    <p>2</p>
                  </td>
                  <td>
                    <p>Unlimited</p>
                  </td>
                </tr>
                <tr>
                  <td class="left-align">
                    <p>Shooting duration</p>
                  </td>
                  <td>
                    <p>1.5h</p>
                  </td>
                  <td>
                    <p>Half day (4-5h)</p>
                  </td>
                  <td>
                    <p>Full day (7-9h)</p>
                  </td>
                </tr>
                <tr>
                  <td class="left-align">
                    <p>Photos amount</p>
                  </td>
                  <td>
                    <p>5</p>
                  </td>
                  <td>
                    <p>20</p>
                  </td>
                  <td>
                    <p>50</p>
                  </td>
                </tr>
                <tr>
                  <td class="left-align">
                    <p>Online Gallery & Storage</p>
                  </td>
                  <td>
                    <p><i class="fa-solid fa-check"></i></p>
                  </td>
                  <td>
                    <p><i class="fa-solid fa-check"></i></p>
                  </td>
                  <td>
                    <p><i class="fa-solid fa-check"></i></p>
                  </td>
                </tr>
                <tr>
                  <td class="left-align">
                    <p>Make-Up Artist</p>
                  </td>
                  <td>
                    <p><i class="fa-solid fa-xmark"></i></p>
                  </td>
                  <td>
                    <p><i class="fa-solid fa-check"></i></p>
                  </td>
                  <td>
                    <p><i class="fa-solid fa-check"></i></p>
                  </td>
                </tr>
                <tr>
                  <td class="left-align">
                    <p>Drone Footage</p>
                  </td>
                  <td>
                    <p><i class="fa-solid fa-xmark"></i></p>
                  </td>
                  <td>
                    <p><i class="fa-solid fa-xmark"></i></p>
                  </td>
                  <td>
                    <p><i class="fa-solid fa-check"></i></p>
                  </td>
                </tr>
                <tr>
                  <td class="left-align">
                    <p>Graphic Design&nbsp;(posters, covers)</p>
                  </td>
                  <td>
                    <p><i class="fa-solid fa-xmark"></i></p>
                  </td>
                  <td>
                    <p><i class="fa-solid fa-check"></i></p>
                  </td>
                  <td>
                    <p><i class="fa-solid fa-check"></i></p>
                  </td>
                </tr>
                <tr>
                  <td class="left-align">
                    <p>Recommended for</p>
                  </td>
                  <td>
                    <p>Headshots, Product photos</p>
                  </td>
                  <td>
                    <p>Events, Promo materials (prints, SoMe)</p>
                  </td>
                  <td>
                    <p>Large events, Extensive studio sessions.</p>
                  </td>
                </tr>
              </table>
            </div>
            <!-- PHOTO PACKAGES END -->

            <!-- ALL IN PACKAGES START -->
            <div class="tab-panel reveal">
              <table id="allin">
                <tr>
                  <th class="left-align"></th>
                  <th>Essential</th>
                  <th>Core</th>
                  <th>Elite</th>
                </tr>
                <tr>
                  <td class="left-align">
                    <p>Price</p>
                  </td>
                  <td>
                    <p>From <span class="price">1425</span> €</p>
                  </td>
                  <td>
                    <p>From <span class="price"> 2188</span> €</p>
                  </td>
                  <td>
                    <p>From <span class="price"> 2963</span> €</p>
                  </td>
                </tr>
                <tr>
                  <td class="left-align">
                    <p>Horizontal Video &#8804; 3min</p>
                  </td>
                  <td>
                    <p>Request a Proposal</p>
                  </td>
                  <td>
                    <p>Request a Proposal</p>
                  </td>
                  <td>
                    <p>Request a Proposal</p>
                  </td>
                </tr>

                <tr>
                  <td class="left-align">
                    <p>Vertical Reel</p>
                  </td>
                  <td>
                    <p>Request a Proposal</p>
                  </td>
                  <td>
                    <p>Request a Proposal</p>
                  </td>
                  <td>
                    <p>Request a Proposal</p>
                  </td>
                </tr>
                <tr>
                  <td class="left-align">
                    <p>Horizontal Video</p>
                  </td>
                  <td>
                    <p>Request a Proposal</p>
                  </td>
                  <td>
                    <p>Request a Proposal</p>
                  </td>
                  <td>
                    <p>Request a Proposal</p>
                  </td>
                </tr>
                <tr>
                  <td class="left-align">
                    <p>On site shoots</p>
                  </td>
                  <td>
                    <p>1&#215;</p>
                  </td>
                  <td>
                    <p>Up to 2&#215;</p>
                  </td>
                  <td>
                    <p>Up to 3&#215;</p>
                  </td>
                </tr>
                <tr>
                  <td class="left-align">
                    <p>Stills (on site & studio)</p>
                  </td>
                  <td>
                    <p>Up to 15</p>
                  </td>
                  <td>
                    <p>Up to 30</p>
                  </td>
                  <td>
                    <p>Up to 45</p>
                  </td>
                </tr>
                <tr>
                  <td class="left-align">
                    <p>Online Gallery & Storage</p>
                  </td>
                  <td>
                    <p><i class="fa-solid fa-check"></i></p>
                  </td>
                  <td>
                    <p><i class="fa-solid fa-check"></i></p>
                  </td>
                  <td>
                    <p><i class="fa-solid fa-check"></i></p>
                  </td>
                </tr>
                <tr>
                  <td class="left-align">
                    <p>Revisions*</p>
                  </td>
                  <td>
                    <p><i class="fa-solid fa-infinity"></i></p>
                  </td>
                  <td>
                    <p><i class="fa-solid fa-infinity"></i></p>
                  </td>
                  <td>
                    <p><i class="fa-solid fa-infinity"></i></p>
                  </td>
                </tr>
                <tr>
                  <td class="left-align">
                    <p>Project Pre-Production</p>
                  </td>
                  <td>
                    <p><i class="fa-solid fa-check"></i></p>
                  </td>
                  <td>
                    <p><i class="fa-solid fa-check"></i></p>
                  </td>
                  <td>
                    <p><i class="fa-solid fa-check"></i></p>
                  </td>
                </tr>
                <tr>
                  <td class="left-align">
                    <p>Make-Up Artist</p>
                  </td>
                  <td>
                    <p><i class="fa-solid fa-xmark"></i></p>
                  </td>
                  <td>
                    <p><i class="fa-solid fa-check"></i></p>
                  </td>
                  <td>
                    <p><i class="fa-solid fa-check"></i></p>
                  </td>
                </tr>
                <tr>
                  <td class="left-align">
                    <p>Motion Graphics</p>
                  </td>
                  <td>
                    <p><i class="fa-solid fa-xmark"></i></p>
                  </td>
                  <td>
                    <p><i class="fa-solid fa-check"></i></p>
                  </td>
                  <td>
                    <p><i class="fa-solid fa-check"></i></p>
                  </td>
                </tr>
                <tr>
                  <td class="left-align">
                    <p>Licensed music & SFX</p>
                  </td>
                  <td>
                    <p><i class="fa-solid fa-check"></i></p>
                  </td>
                  <td>
                    <p><i class="fa-solid fa-check"></i></p>
                  </td>
                  <td>
                    <p><i class="fa-solid fa-check"></i></p>
                  </td>
                </tr>
              </table>
              <br />
              <p class="undernote">
                * The minimum of guaranteed revisions under each plan is equal
                to the volume of content for each patch.
              </p>
            </div>
            <!-- ALL IN PACKAGES END -->
            <!-- POSTPRODUCTION PACKAGES START -->
            <div class="tab-panel reveal">
              <table id="Video">
                <tr>
                  <th class="left-align">Service</th>
                  <th>Price / h</th>
                </tr>
                <tr>
                  <td class="left-align">
                    <p>Proposal Meeting</p>
                  </td>
                  <td>
                    <p>Free</p>
                  </td>
                </tr>

                <tr>
                  <td class="left-align">
                    <p>Project Pre-Production / Revisions</p>
                  </td>
                  <td>
                    <p>Free</p>
                  </td>
                </tr>
                <tr>
                  <td class="left-align">
                    <p>Video Cut</p>
                  </td>
                  <td>
                    <p>
                      <span class="price">50</span>
                      €
                    </p>
                  </td>
                </tr>
                <tr>
                  <td class="left-align">
                    <p>Video Color Grading</p>
                  </td>
                  <td>
                    <p>
                      <span class="price">84</span>
                      €
                    </p>
                  </td>
                </tr>
                <tr>
                  <td class="left-align">
                    <p>Video VFX</p>
                  </td>
                  <td>
                    <p>
                      <span class="price">84</span>
                      €
                    </p>
                  </td>
                </tr>
                <tr>
                  <td class="left-align">
                    <p>Photo Denoice / Enhnance</p>
                  </td>
                  <td>
                    <p>
                      <span class="price">33</span>
                      €
                    </p>
                  </td>
                </tr>
                <tr>
                  <td class="left-align">
                    <p>Photo Retouching</p>
                  </td>
                  <td>
                    <p>
                      <span class="price">84</span>
                      €
                    </p>
                  </td>
                </tr>
                <tr>
                  <td class="left-align">
                    <p>Sound Denoise / Enhnance</p>
                  </td>
                  <td>
                    <p>
                      <span class="price">33</span>
                      €
                    </p>
                  </td>
                </tr>
                <tr>
                  <td class="left-align">
                    <p>Animations/motion graphics</p>
                  </td>
                  <td>
                    <p>
                      <span class="price">84</span>
                      €
                    </p>
                  </td>
                </tr>
                <tr>
                  <td class="left-align">
                    <p>Graphic Design</p>
                  </td>
                  <td>
                    <p>
                      <span class="price">84</span>
                      €
                    </p>
                  </td>
                </tr>
              </table>
            </div>
            <!-- POSTPRODUCTION PACKAGES END -->
          </div>
        </div>

        <hr id="proposal" class="reveal" />
      </article>
      <!-- CONTACT FORM  START  -->
      <?php
    $IPATH = $_SERVER['DOCUMENT_ROOT'] . '/assets/components/';
    include $IPATH . 'contact-form.php';
    ?>
      <!-- CONTACT FORM  END  -->
    </main>
    <!-- FOOTER START -->
    <!-- FOOTER START -->
    <?php
$IPATH = $_SERVER['DOCUMENT_ROOT'] . '/assets/components/';
include $IPATH . 'footer.php';
?>
    <script type="text/javascript" src="/assets/services.js" defer></script>
    <script
      type="text/javascript"
      src="/assets/cookies.js"
      defer
      role="script"
    ></script>
    <!-- FOOTER END -->
  </body>
</html>
