customElements.define(
  "ols-modal-pages",
  class OLSModalPages extends HTMLElement {
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
      const pageNumber = this.getAttribute("page");
      this.innerHTML = `
        <section class="modal hidden">
        <button class="btn-close">X</button>
        <div class="page-content page-content-1">
            <h2 class="page-content-title">Welcome to <span class="text-green">OneLogicSoft!</span></h2>
            <div class="page-1-player-text">
            <iframe loading="lazy" class="yt-player" width="560" height="315" src="https://www.youtube.com/embed/K046Ik2lfaM?enablejsapi=1" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            <p> I would like to show you who we are and how we work. 
            <br/>
            <br/>
            All processes in the company are as transparent 
            as possible for the client. 
            When we confirm all requirements, we sign the agreement, 
            NDA and MSA to start our working process. 
            The client is acknowledged about each step. 
            For us it is very important to build a trustful relationship 
            with the client and to become a reliable partner. 
            <br/>
            <br/>
            So let’s start from the very beginning:
            The first step is getting to know about the project, 
            the team, the technologies used and required, 
            about the Company, its culture, processes, people, 
            what is the project, innovations, R&D or finance, 
            logistics, or enterprise, and who is the best candidate 
            for the position, what kind of personality, expectations
             from the specialist or from the team.
            </p>
            </div>
        </div>
        <div class="page-content page-content-2 hidden">
            <h2 class="page-content-title">Welcome to <span class="text-green">OneLogicSoft!</span></h2>
            <div class="page-1-player-text">
                <iframe loading="lazy" class="yt-player" width="560" height="315" src="https://www.youtube.com/embed/HkrZLztVVgc?enablejsapi=1" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                <p>
                All these answers help us to prepare the best job description
                and start looking for candidates.
                Soft and hard skills, years of experience, qualification,
                background, his or her duties and responsibilities. 
                Our goal is to find the best one who fits the project 
                so that all are completely satisfied with the new teamplayer 
                as we are always focused on long-term cooperation.
                After confirming all questions we start the
                 process of looking for the specialist. 
                 <br/>
                 <br/>
                Having an internal  database of the candidates, 
                it’s around 2000 profiles, we can quickly engage
                 the specialist to the project.
                  Also we have experience searching for candidates
                 in European countries.
                 <br/>
                 <br/>
                During internal HR screening we check English level,
                 soft skills, relevant experience, technical competences,
                 the team culture fit, growth ambitions. 
                 <br/>
                 <br/>
                After that, we send to the client only profiles of candidates 
                 who passed the interview and fit the project. 
                We arrange all required meeting and follow
                 the process at all steps of technical interviews,
                 test task, approval etc.
                </p>
            </div>
        </div>
        <div class="page-content page-content-3 hidden">
            <h2 class="page-content-title">Welcome to <span class="text-green">OneLogicSoft!</span></h2>
            <div class="page-1-player-text">
                <iframe loading="lazy" class="yt-player" width="560" height="315" src="https://www.youtube.com/embed/8QxannJ1sBc?enablejsapi=1" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                <p>Next step is Job offer. 
                We arrange start date, 
                negotiate salary expectations,
                 probation, NDA, responsibilities, etc.
                 <br/>
                 <br/>
                Within onboarding,
                 the developer receives hardware,
                 install all necessary software, 
                gets credentials and accounts, 
                fill forms for accounting and other purposes,
                 read and accept terms and conditions,
                 sign contract and required policies. 
                </br>
                </br>
                 One of our cases: for the last two years while building 
                a dedicated team there is almost no staff turnover.
                90% of employees work on the project from the very beginning. 
                Not bad, right?

                </p>
            </div>
        </div>
        <div class="page-content page-content-4 hidden">
            <h2 class="page-content-title">Welcome to <span class="text-green">OneLogicSoft!</span></h2>
            <div class="page-1-player-text">
                <iframe loading="lazy" class="yt-player" width="560" height="315" src="https://www.youtube.com/embed/c8PMavAnwbs?enablejsapi=1" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                <p>
                <strong>What bonuses do clients get?</strong>
                <br/>
                <br/>
                While we are in the process of negotiations and signing the contract, 
               we prepare for free a job description for every position, 
               search for developers, take communication, 
               do HR screening, provide interviews and organize meetings
                with specialist who fit the requirements, 
               confirm the start date and probation period. 
               </br>
               </br>
               <strong>What happened when we signed the deal? </strong>
               </br>
               </br>
              The client doesn’t care about laptops, internet, office environment, 
              coffee and cockies, everything that the developer needs, 
              we will take care of it. 
              Taxes, vacation, sick leaves are on our side. 
              Holidays and team building parties, entertainment, etc. 
              High quality account management services. 
              Our managers support the team with all flows, reports, issues. 
              The account manager is always online for answering questions and help.
              </br>
              </br>
              We do our best to become a reliable partner for our client 
              and build long term relationships
              We work for you!
              </br>
              </br>
              If you have any questions, or need a developer, 
              project needs to be done or move faster,
              just click on a form and Lets’ talk! 

               </p>
            </div>
        </div>
        <div class="modal-button-wrapper">
            <button class="btn modal-btn-outlined" id="modal-btn-skip" onclick="skipAndScroll()">Skip and talk to us</button>
            <div>
              <button class="btn-prev-page txt-grey-1" onclick="prevPage()">Back</button>
              <button class="btn" id="next-page-btn" onclick="nextPage()">Next Page</button>
            </div>
        </div>
      </section>
      
      <div class="overlay hidden"></div>
        `;
    }
  }
);
