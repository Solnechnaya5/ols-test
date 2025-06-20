customElements.define(
  "lets-talk-block",
  class Header extends HTMLElement {
    constructor() {
      super();
      console.log(this);
      // let template = document.getElementById("my-header");
      // console.log(template)
      // let templateContent = template.content;

      // const shadowRoot = this.attachShadow({ mode: "open" });
      // shadowRoot.appendChild(templateContent.cloneNode(true));
    }
    connectedCallback() {
      const color = this.getAttribute("colour");
      this.innerHTML = `
        <div class="your-project bg-${color === "green" ? "green" : "white"}-1">
        <div class="container">
          <div class="row">
            <div class="col-12">
              <p class="txt-${
                color === "green" ? "white" : "green"
              }-3">Your Project?</p>
              <p class="txt-${
                color === "white" ? "green" : "white"
              }-1">Let’s talk.</p>
              <a class="btn-green ${
                color === "white" ? "bg-green-1" : "bg-white-1 text-green"
              } js-menu-item contact-btn" href="#contact">Get</a>
            </div>
          </div>
        </div>
      </div>
      <div class="bg-white-1 portfolio-contact">
        <div class="contact container" id="contact">
          <div class="row">
            <h2 class="h2 h2--underlined h2--centered col-12">Contact us</h2>
            <div class="col-12 col-md-6">
              <div class="managers">
                <p class="managers__text">Need an application estimate?</p>
                <p class="managers__text">Let me help you! Contact me on Skype or telergam!</p>
                <div class="managers__contact">
                  <div class="manager-contacts">
                    <div class="manager-contacts__avatar"><img class="lazyload" src="img/avatar/cristina-small.png" data-src="img/avatar/cristina-small.png" alt="Avatar of Christina"></div>
                    <div class="manager-contacts__connect">
                      <p><strong>Kristina</strong><span> HR Manager</span></p><a class="manager-contacts__chat manager-contacts__chat--skype" href="skype:live:.cid.64c46f9311f20929" rel="noopener">Chat</a><a class="manager-contacts__chat manager-contacts__chat--telegram" href="https://t.me/krissss_cherry" target="_blank" rel="noopener">Chat</a>
                    </div>
                  </div>
                  <div class="manager-contacts">
                    <div class="manager-contacts__avatar"><img class="lazyload" src="img/avatar/slava-small.png" data-src="img/avatar/slava-small.png" alt="Avatar ofSlava"></div>
                    <div class="manager-contacts__connect">
                      <p><strong>Slava</strong><span> CEO</span></p><a class="manager-contacts__chat manager-contacts__chat--skype" href="skype:slaventij_" rel="noopener">Chat</a><a class="manager-contacts__chat manager-contacts__chat--telegram" href="https://t.me/slavachernysh" target="_blank" rel="noopener">Chat</a>
                    </div>
                  </div>
                </div>
                <div class="managers__zadarma">
                  <p class="managers__text">or</p>
                  <div id="zadarma"><a class="btn-green contact-btn" href="https://call.whatsapp.com/video/53RJQDtC9ZzcbFokYpcBjZ">Call Us</a></div>
                </div>
              </div>
            </div>
            <div class="col-12 col-md-6">
              <form class="form row contact__form" action="#" id="contact-form" >
                <div class="form-group col-12">
                  <label class="visually-hidden" for="contact-name">Name</label>
                  <input class="form-input" type="text" placeholder="Name (required)" name="name" id="contact-name" autocomplete="name" required>
                </div>
                <div class="form-group col-12">
                  <label class="visually-hidden" for="contact-email">Email</label>
                  <input class="form-input" type="email" placeholder="Email (required)" name="email" id="contact-email" autocomplete="email" pattern="^[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+.[A-Za-z]{2,4}$" required>
                </div>
                <div class="form-group col-12">
                  <label class="visually-hidden" for="contact-tel">Phone</label>
                  <input class="form-input" type="tel" placeholder="Tel" name="tel" id="contact-tel" autocomplete="tel" pattern="^[0-9+-]+$">
                </div>
                <div class="form-group col-12">
                  <label class="visually-hidden" for="contact-subject">Subject</label>
                  <input class="form-input" type="text" placeholder="Subject" name="subject" id="contact-subject">
                </div>
                <div class="form-group col-12">
                  <label class="visually-hidden" for="contact-message">Message</label>
                  <textarea class="form-textarea" placeholder="Message" name="message" id="contact-message"></textarea>
                </div>
                <p class="form-text col-12">By submitting this form, you agree that we may use the data you provide to contact you with information related your request/submission and relevant One Logic Soft products and services. To learn more, see our <a href="privacy-policy.html" rel="noopener">Privacy&nbsp;Policy</a>.</p>
                <input id="check" name="check" type="hidden" value="">
                <input type="hidden" name="form" value="Contact">
                <div class="form-group form__btn col-12">
                  <div style="margin: 20px 0; color: #93c704; font-size: 20px" class="Success">Thank you for contacting us. We will be in touch with you very soon.</div>
                  <button class="btn-green contact-btn" type="submit">Send Message</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
      <style>
              .Success{
                display: none;
              }
              .Success.show{
                display: block;
              }
      </style>
      `;

      const form = document.getElementById("contact-form");
      const successMsg = document.querySelector(".Success");
      const sentform = function (formData) {
        var xhr = new XMLHttpRequest();
        xhr.open("POST", "./php/tg.php", true);
        xhr.onreadystatechange = function () {
          if (xhr.readyState == 4) {
            if (xhr.status == 200) {
              successMsg.classList.add("show");
              setTimeout(() => successMsg.classList.remove("show"), 6000);
              // succes
              // console.log("form was sended succfuly");
              // console.log(xhr.responseText);
            } else {
              //error
              // console.log(xhr.responseText);
            }
          }
        };
        xhr.send(formData);
        for (const pair of formData.entries()) {
          // console.log(`${pair[0]}, ${pair[1]}`);
        }
      };

      form.addEventListener("submit", function (e) {
        e.preventDefault();
        let formData = new FormData(this);
        sentform(formData);
        this.reset();
      });
    }
  }
);
