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
      action="https://formspree.io/f/mwkgdyez"
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
        <div class="grid-item reveal" aria-label="Email">
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
        </div>
        <div class="grid-item reveal" aria-label="Name">
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
      </div>
    </form>
  </section>
</article>
