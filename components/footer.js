customElements.define(
    "ols-footer",
    class Footer extends HTMLElement {
      constructor() {
        super();
        // let template = document.getElementById("my-header");
        // console.log(template)
        // let templateContent = template.content;
  
        // const shadowRoot = this.attachShadow({ mode: "open" });
        // shadowRoot.appendChild(templateContent.cloneNode(true));
      }
      connectedCallback() {
        this.innerHTML =`
        <footer class="footer">
      <div class="bg-black-3">
        <div class="container footer__top">
          <div class="row">
            <section class="footer__top-section col-12 col-sm-6 col-lg-3">
              <h3 class="h3 h3--light">Office address</h3>
              <ul class="footer__list">
                <li class="footer__list-item footer__list-item--address"><span>Ukraine&nbsp;</span><span>04071 Kiev,&nbsp;</span><span>Yaroslavska str 39G</span></li>
                <li class="footer__list-item footer__list-item--email"><a href="mailto:info@onelogicsoft.com">info@onelogicsoft.com</a></li>
                <li class="footer__list-item footer__list-item--phone"><a href="tel:+380662924525">+380662924525</a></li>
		<li class="footer__list-item footer__list-item--address"><span>Poland&nbsp;</span><span>Wroclaw&nbsp;</span></li>
                <li class="footer__list-item footer__list-item--email"><a href="mailto:info@onelogicsoft.com">info@onelogicsoft.com</a></li>
		<li class="footer__list-item footer__list-item--address"><span>Onelogic Solutions OU, Estonia&nbsp;</span><span>Talinn&nbsp;</span></li>
                <li class="footer__list-item footer__list-item--email"><a href="mailto:info@onelogicsoft.com">info@onelogicsoft.com</a></li>
                
              </ul>
            </section>
            <section class="footer__top-section col-12 col-sm-6 col-lg-3">
              <h3 class="h3 h3--light">Office hours</h3>
              <p class="footer__hours">Eastern European Summer Time <br>EEST(GMT+3)</p>
              <p class="footer__hours"><span>Current time:</span> <i class="js-current-time">GMT+3</i></p>
              <p class="footer__hours"><span>Mon-Fri:</span> 9am - 9pm</p>
              <p class="footer__hours"><span>Sat:</span> chats and  support</p>
              <p class="footer__hours"><span>Sun:</span> chats and  support</p>
            </section>
            <section class="footer__top-section col-12 col-sm-6 col-lg-3">
              <h3 class="h3 h3--light">Recent posts</h3>
              <ul class="footer__list">
                <li class="footer__list-item footer__list-item--post"><a href="https://blog.onelogicsoft.com/how-technical-requirements-make-or-break-your-project/" target="_blank" rel="noopener">How technical requirements make or break your project</a></li>
                <li class="footer__list-item footer__list-item--post"><a href="https://blog.onelogicsoft.com/how-to-build-a-mobile-app-business-3/" target="_blank" rel="noopener">How to build a mobile app business</a></li>
                <li class="footer__list-item footer__list-item--post"><a href="https://blog.onelogicsoft.com/7-steps-to-make-a-flawless-technical-requirements-document/" target="_blank" rel="noopener">7 steps to make a flawless technical requirements document</a></li>
                <li class="footer__list-item footer__list-item--post"><a href="https://blog.onelogicsoft.com/technology-behind-remarketing-campaigns-in-google-adwords-and-facebook/" target="_blank" rel="noopener">Technology behind remarketing campaigns in google adwords and facebook</a></li>
                <li class="footer__list-item footer__list-item--post"><a href="https://blog.onelogicsoft.com/migrate-angular-js-to-angular-full-rewrite-or-hybrid/" target="_blank" rel="noopener">Migrate angular js to angular. Full rewrite or hybrid?</a></li>
              </ul>
            </section>
            <section class="footer__top-section col-12 col-sm-6 col-lg-3">
              <h3 class="h3 h3--light">Follow us</h3>
              <ul class="social footer__social">
                <li class="social__item"><a class="icon-facebook" href="https://www.facebook.com/onelogicsoft" target="_blank" rel="noopener" aria-label="facebook"></a></li>
                <li class="social__item"><a class="icon-instagram" href="https://www.instagram.com/onelogic.soft/" target="_blank" rel="noopener" aria-label="instagram"></a></li>
                <li class="social__item"><a class="icon-linkedin" href="https://www.linkedin.com/company/onelogicsoft" target="_blank" rel="noopener" aria-label="linkedin"></a></li>
                <li class="social__item"><a class="icon-youtube" href="https://www.youtube.com/watch?v=HvaKnx0zaPw" target="_blank" rel="noopener" aria-label="youtube"></a></li>
                <li class="social__item"><a class="icon-twitter" href="https://twitter.com/onelogicsoft" target="_blank" rel="noopener" aria-label="twitter"></a></li>
              </ul>
              <div class="footer__privacy"><a href="privacy-policy.html">Privacy Policy</a></div>
            </section>
          </div>
        </div>
      </div>
      <div class="bg-black-2">
        <div class="container footer__bottom">
          <div class="row">
            <div class="footer__copy col-10">All Right Reserved © <span class="js-year">2022</span></div>
            <div class="footer__go-top col-2">
              <button class="js-menu-item" type="button" href="#home" aria-label="Go to top of the page"></button>
            </div>
          </div>
        </div>
      </div>
    </footer>
        `
      }
    }
  );
