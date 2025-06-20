customElements.define(
  "new-header",
  class Header extends HTMLElement {
    constructor() {
      super();
      
    }
    connectedCallback() {
      const displayModal = this.getAttribute("displayModal");
      this.innerHTML = `
    <header class="js-header header">
        <div class="header-container"><a class="js-menu-item header__logo-link" href="https://onelogicsoft.com/">
            <div class="header__logo"><span>One</span><span>Logic</span><span class="header__logo--accent">Soft</span></div></a>
            <button class="js-hamburger header__hamburger" type="button" aria-label="Show mobile menu"><span></span></button>
            <nav class="header__nav">
                <ul class="header__menu">
                    <!--<li class="header__menu-item"><a class="js-menu-item" href="index.html">Home</a>
                    </li>-->
                    <!--<li class="header__menu-item"><a class="js-menu-item" href="app-development.html">Development</a>
                    </li>-->
                    <li class="header__menu-item header_submenu"><a class="js-menu-item">Development</a>
                        <ul class="submenu">
                          <li><a class="js-menu-item" href="app-development.html">App Development</a></li>
                          <li><a class="js-menu-item" href="qa.html">QA in Product Development</a></li>
                          <li><a class="js-menu-item" href="project-specification.php">Project specification</a></li>
                          <li><a class="js-menu-item" href="logistics.html">Logistics Software Development</a></li>
                          <li><a class="js-menu-item" href="restaurants.html">Retail Software Development</a></li>
                          <li><a class="js-menu-item" href="iotapp.html">Embedded Software Development</a></li>
                          <li><a class="js-menu-item" href="hybridapps.html">Hybrid apps Development</a></li>
                          <li><a class="js-menu-item" href="warehousing.html">Warehouse layout design</a></li>            
                          <li><a class="js-menu-item" href="app-promotion.html">Promotion</a></li>
                          <li><a class="js-menu-item" href="project-planning.html">Project Planning</a></li>
                          <li><a class="js-menu-item" href="smart-technique-article.html">Project Preparation</a></li>
                          </li>
                        </ul>
                    </li>

                    <li class="header__menu-item active header_submenu">
                    <a class="js-menu-item">Support 24/7</a>
                    <ul class="submenu">
                    <li>
                    <a class="js-menu-item" href="support.html">What is support</a>
                    <a class="js-menu-item" href="interview-with-team-support.html">Interview with team support</a>
                    </li>
                    </ul>
                    </li>

                    <li class="header__menu-item active header_submenu">
                    <a class="js-menu-item">How we work</a>
                    <ul class="submenu">
                    <li>
                    
                    <a class="js-menu-item btn-open">How to start work with us</a>
                    <a class="js-menu-item" href="how-we-work.html">The steps of our work</a>
                    <a class="js-menu-item" href="onelogicsoft-working-process.html">How we manage projects</a>
                    <a class="js-menu-item" href="recruitement-article.html">Recruitement article</a>
                    </li>
                    </ul>
                    </li>
                    <li class="header__menu-item"><a class="js-menu-item" href="career.html">Career</a></li>
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
    </header>
    <style>
    my-header {
      width: 100%;
      position: fixed;
      top: 0;
      z-index: 99;
    }
    </style>
    `;
    }
  }
);
