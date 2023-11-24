<article class="wrapper-standard">
  <section class="contact-form-section">
    <h3 class="reveal"><?php echo $lang['asset_168'] ?></h3>
    <hr class="semi" />
    <form
      id="contactForm"
      onclick="loading()"
      action="https://formsubmit.co/33ba160945b035b2578f7d428a1c2e3f"
      method="POST"
    >
      <!-- Form elements -->
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
          />
          <br />
        </div>
        <div class="grid-item reveal">
          <p>
            <label for="category"><?php echo $lang['asset_181'] ?> </label>
          </p>
          <select required id="category" name="category">
            <option value="" selected disabled hidden>
              <span class="default-option">
                <?php echo $lang['asset_183'] ?></span
              >
            </option>
            <option value="<?php echo $lang['asset_110'] ?>">
              <?php echo $lang['asset_110'] ?>
            </option>
            <option value="<?php echo $lang['asset_107'] ?>">
              <?php echo $lang['asset_107'] ?>
            </option>
            <option value="<?php echo $lang['asset_85'] ?>">
              <?php echo $lang['asset_85'] ?>
            </option>
            <option value="<?php echo $lang['asset_184'] ?>">
              <?php echo $lang['asset_184'] ?>
            </option>
            <option value="<?php echo $lang['asset_187'] ?>">
              <?php echo $lang['asset_187'] ?>
            </option>
            <option value="<?php echo $lang['asset_217'] ?>">
              <?php echo $lang['asset_217'] ?>
            </option>
          </select>
          <br />
          <p>
            <label for="plan"><?php echo $lang['asset_182'] ?></label>
          </p>
          <select required id="plan" name="plan">
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
            <option value="<?php echo $lang['asset_190'] ?>">
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
        ></textarea>
        <button
          class="submit-btn flex-center"
          aria-label="<?php echo $lang['asset_164'] ?>"
        >
          <?php echo $lang['asset_164'] ?>
        </button>
        <input
          type="hidden"
          name="_next"
          value="https://slavicmedia.dk/success"
        />
        <input
          type="hidden"
          name="_blacklist"
          value="spammy pattern, banned term, phrase"
        /><input type="hidden" name="_template" value="table" />
        <!-- Redirect to the success page -->
        <input type="hidden" name="_captcha" value="true" />
        <!-- Captcha disable -->
      </div>
    </form>
  </section>
  <hr class="reveal" />
</article>
