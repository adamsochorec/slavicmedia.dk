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
          <input
            type="email"
            id="email"
            name="Email"
            placeholder="Email *"
            required
            autocomplete="email"
          />
          <br /><br />
        </div>
        <div class="grid-item reveal">
          <input
            type="text"
            id="name"
            required
            name="Name"
            placeholder="<?php echo $lang['asset_170'] ?> *"
            autocomplete="Name"
          />
          <br /><br />
        </div>
      </div>
      <div class="reveal">
        <textarea
          minlength="10"
          name="project"
          rows="7"
          required
          id="project"
          placeholder="<?php echo $lang['asset_169'] ?> *"
        ></textarea>
        <br /><br />
        <div class="reveal">
          <button type="submit" aria-label="<?php echo $lang['asset_164'] ?>">
            <a class="cta"> <?php echo $lang['asset_164'] ?></a>
          </button>
        </div>
        <input
          type="hidden"
          name="_captcha"
          value="true"
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
