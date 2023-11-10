<!-- BOOK US START -->
<article class="wrapper-standard">
  <section class="contact-form-section">
    <h3 class="reveal"><?php echo $lang['asset_168'] ?></h3>
    <hr class="semi" />
    <form
      id="contactForm"
      onclick="loading()"
      action="https://formsubmit.co/contact@slavicmedia.dk"
      method="POST"
      novalidate
      enctype="multipart/form-data"
    >
      <div class="grid-container contact-form">
        <div class="grid-item reveal">
          <p><label for="email">Email *</label></p>
          <input
            type="email"
            id="email"
            name="email"
            placeholder=""
            required
            autocomplete="email"
          />
          <br /><br />
        </div>
        <div class="grid-item reveal">
          <p>
            <label for="name"
              ><?php echo $lang['asset_170'] ?>
              *</label
            >
          </p>
          <input
            type="text"
            id="name"
            required
            name="name"
            placeholder=""
            autocomplete="Name"
          />
          <br /><br />
        </div>
      </div>
      <div class="reveal">
        <p>
          <label for="project"
            ><?php echo $lang['asset_169'] ?>
            *</label
          >
        </p>
        <textarea
          minlength="10"
          name="project"
          rows="7"
          required
          id="project"
          placeholder=""
        ></textarea>
        <br /><br />
        <button type="submit" aria-label="<?php echo $lang['asset_164'] ?>">
          <a class="cta"><?php echo $lang['asset_164'] ?></a>
        </button>

        <input
          type="hidden"
          name="_captcha"
          value="false"
        /><!-- Spam captcha deactivation -->
        <input
          type="hidden"
          name="_next"
          value="https://slavicmedia.dk/success"
        />
        <!-- Redirect to the success page -->
      </div>
    </form>
  </section>
</article>
<!-- BOOK US END -->
