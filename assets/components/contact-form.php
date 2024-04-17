<article class="wrapper-standard" role="article" aria-label="Contact Form">
  <section
    class="contact-form-section"
    role="region"
    aria-label="Contact Form Section"
  >
    <h3 class="reveal" role="heading" aria-level="3">
      Request a
      <span class="highlited tuscher" role="presentation">Proposal</span>
    </h3>
    <br />
    <form
      id="contactForm"
      onclick="loading()"
      action="https://formsubmit.co/4bdf898098537a1d8b599b2a77bd6b21"
      method="POST"
      role="form"
      aria-labelledby="contactFormHeading"
      aria-describedby="This form is used to request a proposal."
    >
      <!-- Form elements -->
      <div
        class="grid-container contact-form"
        role="group"
        aria-labelledby="contactFormGroupLabel"
        aria-describedby="This group contains the contact form fields."
      >
        <div class="grid-item reveal" role="group" aria-label="Email and Name">
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
            aria-describedby="Your email address."
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
            aria-describedby="Your name."
          />
          <br />
        </div>
        <div
          class="grid-item reveal"
          role="group"
          aria-label="Category and Plan"
        >
          <p>
            <label for="category">Category *</label>
          </p>
          <select
            required
            id="category"
            name="category"
            aria-required="true"
            aria-labelledby="category"
            aria-describedby="The category of your project."
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
            aria-describedby="The plan you are interested in."
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
      <div
        class="reveal"
        role="group"
        aria-label="Project Description and Submit Button"
      >
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
          aria-describedby="Describe your project here."
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
          value="https://slavic.media/success"
          aria-hidden="true"
        />
        <input type="hidden" name="_captcha" value="false" aria-hidden="true" />
        <!-- Captcha disable -->
        <input
          type="text"
          name="_honey"
          style="display: none"
          aria-hidden="true"
        />
        <input type="hidden" name="_template" value="box" aria-hidden="true" />
      </div>
    </form>
  </section>
</article>
