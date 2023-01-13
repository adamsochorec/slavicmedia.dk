<!DOCTYPE >
<lang ="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Checkout | Memos</title>
    <link rel="stylesheet" href="./css/checkout1.css" />
    <link rel="stylesheet" href="https://use.typekit.net/yrl1amz.css" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
      type="text/css"
    />
    <link rel="icon" href="img/Memos-logo-copy.png" type="image/png" />
    <meta name="robots" content="noindex" />
    <meta name="googlebot" content="noindex" />
  </head>

  <body>
    <header class="header">
      <nav class="navbar">
        <a href="./homepage" class="nav-logo">
          <div class="logos"></div>
        </a>
        <ul class="nav-menu">
          <li class="nav-item">
            <a href="./homepage" class="nav-link">VEJLE WATCH</a>
          </li>
          <li class="nav-item">
            <a href="./about" class="nav-link">ABOUT</a>
          </li>
        </ul>
        <div class="hamburger">
          <span class="bar"></span>
          <span class="bar"></span>
          <span class="bar"></span>
        </div>
      </nav>
    </header>
    <main>
      <div class="grid">
        <div class="form1">
          <fieldset>
            <legend>
              <h2>Shipping address</h2>
            </legend>
            <select id="country" name="country" required>
              <option value="Denmark">Denmark</option>
              <option value="Sweden">Sweden</option>
              <option value="Norway">Norway</option>
              <option value="Finland">Finland</option>
              <option value="Iceland">Iceland</option>
              <option value="Faroe Islands">Faroe Islands</option>
              <option value="Greenland">Greenland</option>
            </select>
            <form>
              <input
                type="text"
                id="firstname"
                name="name"
                placeholder="First name"
                required=""
              />
              <br />
              <input
                type="text"
                id="secondname"
                name="name"
                placeholder="Second name"
                required=""
              />
              <br />
              <input
                type="text"
                id=""
                name=""
                placeholder="Company (optional)"
              />
              <br />
              <input
                type="text"
                id=""
                name=""
                placeholder="Street and house number"
                required=""
              />
              <br />
              <input
                type="text"
                id=""
                name=""
                placeholder="Apartment, suite, etc. (optional)"
              />
              <br />
              <input
                type="number"
                id=""
                name=""
                placeholder="Postal code"
                required=""
              />
              <br />
              <input type="text" id="" name="" placeholder="City" required="" />
              <br />
              <input
                type="number"
                id=""
                name=""
                placeholder="Phone"
                required=""
              />
              <br />
              <input
                type="email"
                id="emailID"
                name="emailInput"
                placeholder="Email"
                required=""
              />
              <br />
              <br />
              <input type="checkbox" name="news" id="newsletter" checked />
              <label for="newsletter">Email me with news and offers.</label>
              <br />
            </form>
          </fieldset>
        </div>
        <div class="form2">
          <fieldset>
            <legend>
              <h2>Billing address (optional)</h2>
            </legend>
            <select id="country" name="country" required>
              <option value="Denmark">Denmark</option>
              <option value="Sweden">Sweden</option>
              <option value="Norway">Norway</option>
              <option value="Finland">Finland</option>
              <option value="Iceland">Iceland</option>
              <option value="Faroe Islands">Faroe Islands</option>
              <option value="Greenland">Greenland</option>
            </select>
            <form>
              <input
                type="text"
                id="firstname"
                name="name"
                placeholder="First name"
              />
              <br />
              <input
                type="text"
                id="secondname"
                name="name"
                placeholder="Second name"
              />
              <br />
              <input type="text" id="" name="" placeholder="Company" />
              <br />
              <input
                type="text"
                id=""
                name=""
                placeholder="Street and house number"
              />
              <br />
              <input
                type="text"
                id=""
                name=""
                placeholder="Apartment, suite, etc."
              />
              <br />
              <input type="number" id="" name="" placeholder="Postal code" />
              <br />
              <input type="text" id="" name="" placeholder="City" />
              <br />
              <input type="number" id="" name="" placeholder="Phone" />
              <br />
              <input
                type="email"
                id="emailID"
                name="emailInput"
                placeholder="Email"
              />
              <br />
              <br />
              <input type="checkbox" name="adress" id="billingadress" checked />
              <label for="billingadress">Same as shipping adress</label>
              <br />
            </form>
          </fieldset>
          <div class="form3">
            <a href="./payment" class="next">NEXT</a>
          </div>
        </div>
      </div>
    </main>
    <footer>
      <div class="socialmedia">
        <br />
        <br />
        <a
          class="nav-link2"
          href="https://www.instagram.com/"
          title="instagram"
          target="_blank"
          rel="noopener noreferrer"
        >
          <i class="fab fa-instagram fa-2x"></i>
        </a>
        <a
          class="nav-link2"
          href="https://www.facebook.com/"
          title="facebook"
          target="_blank"
          rel="noopener noreferrer"
        >
          <i class="fab fa-facebook-f fa-2x"></i>
        </a>
        <a
          class="nav-link2"
          href="https://www.linkedin.com/"
          title="linkedin"
          target="_blank"
          rel="noopener noreferrer"
        >
          <i class="fab fa-linkedin-in fa-2x"></i>
        </a>
      </div>
      <div class="links">
        <br />
        <a class="nav-link2" href="./about">about</a>
        <br />
        <a class="nav-link2" href="./privacy">privacy policy</a>
        <br />
        <a class="nav-link2" href="./terms">terms and conditions</a>
        <br />
      </div>
      <p class="copyright">2022 © MEMOS.dk</p>
    </footer>
  </body>
  <script src="./java/menu.js"></script>
</lang>
