<article class="wrapper-standard">
  <section class="contact-form-section">
    <h3 class="reveal" role="heading" aria-level="3">
      Request a <span class="highlited tuscher">Proposal</span>
    </h3>
    <br />
    <form
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
            <label for="name">Name *</label>
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
            <label for="category">Category *</label>
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
              <span class="default-option"> - Select -</span>
            </option>
            <option value="Photo">Photo</option>
            <option value="Video">Video</option>
            <option value="All in">All in</option>
            <option id="disableIfSelected" value="Service">Service</option>
          </select>
          <br />
          <p>
            <label for="plan">Plan *</label>
          </p>
          <select
            required
            id="disableOnSelect"
            name="plan"
            aria-required="true"
            aria-labelledby="plan"
          >
            <option value="" selected disabled hidden>
              <span class="default-option">- Select -</span>
            </option>
            <option value=" Essential">Essential</option>
            <option value=" Core">Core</option>
            <option value=" Elite">Elite</option>
            <option value="Not sure yet">Not sure yet</option>
          </select>
          <br />
        </div>
      </div>
      <div class="reveal">
        <p>
          <label for="project">Project description *</label>
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
          class="submit-btn"
          aria-label="Submit"
          role="button"
          aria-labelledby="submitBtn"
        >
          Submit<i class="fa-solid fa-arrow-right"></i>
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
</article>
