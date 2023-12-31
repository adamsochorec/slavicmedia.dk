<article class="wrapper-standard">
  <section class="contact-form-section">
    <h3 class="reveal" role="heading" aria-level="3">
      <?php echo $lang['asset_168'] ?>
    </h3>
<br>    <form
      id="contactForm"
      onclick="loading()"
      action="https://formsubmit.co/7380641e237fbaeaac7f9d91fae42afb"
      method="POST"
      role="form"
      aria-labelledby="contactFormHeading"
    >
      <!-- Form elements -->
      <div
        class="grid-container contact-form"
        role="group"
        aria-labelledby="contactFormGroupLabel"
      >
        <div class="grid-item reveal">
          <p><label for="email">Email *</label></p>
          <input
            type="email"
            id="email"
            name="email"
            placeholder=""
            required
            autocomplete="email"
            aria-required="true"
            aria-labelledby="email"
          />
          <br />
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
            aria-required="true"
            aria-labelledby="name"
          />
          <br />
        </div>
        <div class="grid-item reveal">
  <p>
    <label for="category"><?php echo $lang['asset_181'] ?> *</label>
  </p>
  <select
    required
    id="category"
    name="category"
    aria-required="true"
    aria-labelledby="category"
    onchange="updatePlanOptions()"
  >
    <option value="" selected disabled hidden>
      <span class="default-option">
        <?php echo $lang['asset_183'] ?></span
      >
    </option>
    <option value="<?php echo $lang['asset_11'] ?>">
      <?php echo $lang['asset_11'] ?>
    </option>
    <option value="<?php echo $lang['asset_13'] ?>">
      <?php echo $lang['asset_13'] ?>
    </option>
    <option value="<?php echo $lang['asset_234'] ?>">
      <?php echo $lang['asset_234'] ?>
    </option>
    <option id="disableIfSelected" value="Service">
      <?php echo $lang['asset_308'] ?>
    </option>
  </select>
  <br />
  <p>
    <label for="plan"><?php echo $lang['asset_182'] ?> *</label>
  </p>
  <select
    required
    id="disableOnSelect"
    name="plan"
    aria-required="true"
    aria-labelledby="plan"
  >
    <option value="" selected disabled hidden>
      <span class="default-option"
        ><?php echo $lang['asset_183'] ?></span
      >
    </option>
    <option value="<?php echo $lang['asset_133'] ?>">
      <?php echo $lang['asset_133'] ?>
    </option>
    <option value="<?php echo $lang['asset_134'] ?>">
      <?php echo $lang['asset_134'] ?>
    </option>
    <option value="<?php echo $lang['asset_135'] ?>">
      <?php echo $lang['asset_135'] ?>
    </option>
    <option value="<?php echo $lang['asset_190'] ?>" >
      <?php echo $lang['asset_190'] ?>
    </option>
  </select>
  <br />
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
          aria-required="true"
          aria-labelledby="project"
        ></textarea>
        <button
          class="submit-btn flex-center"
          aria-label="<?php echo $lang['asset_164'] ?>"
          role="button"
          aria-labelledby="submitBtn"
        >
          <?php echo $lang['asset_164'] ?>
        </button>
        <input
          type="hidden"
          name="_next"
          value="https://slavicmedia.dk/success"
        />
        <input type="hidden" name="_captcha" value="false" />
        <!-- Captcha disable -->
        <input type="text" name="_honey" style="display: none" />
        <input type="hidden" name="_template" value="box" />
      </div>
    </form>
  </section>
  <hr class="reveal" role="separator" aria-hidden="true" />
</article>
