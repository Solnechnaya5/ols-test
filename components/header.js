customElements.define(
    "my-header",
    class Header extends HTMLElement {
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
    <header class="js-header header">
        <div class="header-container">
        <a class="js-menu-item header__logo-link" href="https://onelogicsoft.com/">
            <span class="header__logo"><span>One</span><span>Logic</span><span class="header__logo--accent">Soft</span></span>
            </a>
            <button class="js-hamburger header__hamburger" type="button" aria-label="Show mobile menu"><span></span></button>
            <nav class="header__nav">
                <ul class="header__menu">
                    <li class="header__menu-item"><a class="js-menu-item" href="index.html">Home</a>
                    </li>
                    <!--<li class="header__menu-item"><a class="js-menu-item" href="app-development.html">Development</a>
                    </li>-->
                    <li class="header__menu-item header_submenu"><a class="js-menu-item">Development</a>
                        <ul class="submenu">
                          <li><a class="js-menu-item" href="app-development.html">App Development</a></li>
                          <li><a class="js-menu-item" href="project-specification.php">Project specification</a></li>
                          <li><a class="js-menu-item" href="logistics.html">Logistics Software Development</a></li>
                          <li><a class="js-menu-item" href="restaurants.html">Retail Software Development</a></li>
                          <li><a class="js-menu-item" href="iotapp.html">Embedded Software Development</a></li>
                          <li><a class="js-menu-item" href="hybridapps.html">Hybrid apps Development</a></li>
                          <li><a class="js-menu-item" href="warehousing.html">Retail Software</a></li>            
                          <li><a class="js-menu-item" href="app-promotion.html">Promotion</a></li>
                          </li>
                        </ul>
                          </li>
                    <li class="header__menu-item"><a class="js-menu-item" href="support.html">Support</a>
                    </li>
                    <li class="header__menu-item active"><a class="js-menu-item" href="onelogicsoft-working-process.html">How we work</a>
                    </li>
                    <li class="header__menu-item"><a class="js-menu-item" href="#contact">Contact</a></li>
                    <li class="header__menu-item"><a href="https://blog.onelogicsoft.com/" target="_blank" rel="noopener">Blog</a></li>
                </ul>
                <ul class="social header__social">
                    <li class="social__item"><a class="icon-facebook" href="https://www.facebook.com/onelogicsoft" target="_blank" rel="noopener" aria-label="facebook"></a></li>
                    <li class="social__item"><a class="icon-instagram" href="https://www.instagram.com/onelogic.soft/" target="_blank" rel="noopener" aria-label="instagram"></a></li>
                    <li class="social__item"><a class="icon-linkedin" href="https://www.linkedin.com/company/onelogicsoft" target="_blank" rel="noopener" aria-label="linkedin"></a></li>
                    <li class="social__item"><a class="icon-youtube" href="https://www.youtube.com/watch?v=HvaKnx0zaPw" target="_blank" rel="noopener" aria-label="youtube"></a></li>
                    <li class="social__item"><a class="icon-twitter" href="https://twitter.com/onelogicsoft" target="_blank" rel="noopener" aria-label="twitter"></a></li>
                </ul>
            </nav>
        </div>
    </header>`
      }
    }
  );
