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
        <style>

          .modal p {
            text-align: left;
          }
          .page-1-player-text {
            display: grid !important;
            grid-template-columns: minmax(0, 0.7fr) minmax(0, 1fr) minmax(0, 0.7fr);
            gap: 50px;
            align-items: start;
          }
          .page-content {
            counter-reset: modal;
          }
          .modal-col-item h3 {
            padding-left: 54px;
            position: relative;
          }
          .modal-col-video-wrapper {
            place-self: center;
            width: 100%;
          }
          .modal-col-video{
            border-radius: 30px;
            overflow: hidden;
            aspect-ratio: 16 / 9;
          }
          .modal-col-video iframe{
            width: 100%;
            height: 100%;
             border-radius: 30px;
          }
          .modal-hr {
            margin: 25px 16px 20px;
          }
          .modal-col-item h3::before {
            position: absolute;
            left: 0;
            top: 0;
            bottom: 0;
            margin: auto 0;
            display: flex;
            align-items: center;
            justify-content: center;
            counter-increment: modal; /* Increment the value of section counter by 1 */
            content: counter(modal);
            width: 48px;
            height: 48px;
            border-radius: 48px;
            background-color: #9ec63e;
            color: #fff;
            font-size: 35px;
            font-weight: 700;
            text-align: center;
          }
        </style>
      <button class="btn-close">X</button>
      <div class="page-content page-content-1">
        <h2 class="page-content-title">
          Welcome to <span class="text-green">OneLogicSoft!</span>
        </h2>
        <div class="page-1-player-text">
          <div class="modal-col">
            <div class="modal-col-item">
              <h3>Relationship building</h3>
              <p>
                We prioritize transparency in all our company processes,
                ensuring clients are fully informed and involved. Once
                requirements are confirmed, we proceed with signing the
                agreement, NDA, and MSA to initiate the work.
              </p>
            </div>
            <hr class="modal-hr" />
            <div class="modal-col-item">
              <h3>Project discovery</h3>
              <p>
                Understanding project details, team dynamics, and required
                technologies is our first step. We assess the project's nature
                and identify the best candidate based on their personality
                traits and expectations.
              </p>
            </div>
          </div>
          <div class="modal-col modal-col-video-wrapper">
            <div class="modal-col-video">
              <iframe
                loading="lazy"
                class="yt-player"
                src="https://www.youtube.com/embed/K046Ik2lfaM?enablejsapi=1"
                title="YouTube video player"
                frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                allowfullscreen
              ></iframe>
            </div>
          </div>
          <div class="modal-col">
            <div class="modal-col-item">
              <h3>Company insight</h3>
              <p>
                We gather information about the company, its background, vision,
                and values, as well as explore its internal processes and
                infrastructure. This knowledge allows us to align our approach
                with the client's expectations.
              </p>
            </div>
            <hr class="modal-hr" />
            <div class="modal-col-item">
              <h3>Candidate evaluation</h3>
              <p>
                We carefully evaluate candidates based on project requirements,
                considering technical skills, experience, and compatibility with
                the team. Understanding desired traits and expectations ensures
                successful collaboration and efficient project execution.
              </p>
            </div>
          </div>
        </div>
      </div>
      <div class="page-content page-content-2 hidden">
        <h2 class="page-content-title">
          Building dedicated team for the
          <span class="text-green">Client</span>!
        </h2>

        <div class="page-1-player-text">
          <div class="modal-col">
            <div class="modal-col-item">
              <h3>Job Description</h3>
              <p>
                We utilize the gathered information to craft a tailored job
                description, considering skills, experience, and qualifications,
                in order to find the ideal candidate for the project and
                initiate the specialist search process.
              </p>
            </div>
            <hr class="modal-hr" />
            <div class="modal-col-item">
              <h3>Candidate sourcing</h3>
              <p>
                We start by gathering information about the project, team, and
                required technologies, aiming to understand the company's
                culture and processes, and then identify the best candidate who
                matches their expectations and requirements.
              </p>
            </div>
          </div>
          <div class="modal-col modal-col-video-wrapper">
            <div class="modal-col-video">
              <iframe
                loading="lazy"
                class="yt-player"
                src="https://www.youtube.com/embed/HkrZLztVVgc?enablejsapi=1"
                title="YouTube video player"
                frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                allowfullscreen
              ></iframe>
            </div>
          </div>
          <div class="modal-col">
            <div class="modal-col-item">
              <h3>Internal HR screening</h3>
              <p>
                Through our rigorous internal HR screening process, we
                comprehensively evaluate candidates, assessing their English
                language proficiency, soft skills, relevant experience,
                technical competencies, team culture fit, as well as their
                growth ambitions and potential for professional development.
              </p>
            </div>
            <hr class="modal-hr" />
            <div class="modal-col-item">
              <h3>Candidate selection</h3>
              <p>
                We present the client with qualified candidates who fit the
                project requirements and manage the entire selection process,
                including interviews, test tasks, and approvals, ensuring a
                smooth and successful outcome.
              </p>
            </div>
          </div>
        </div>
      </div>
      <div class="page-content page-content-3 hidden">
        <h2 class="page-content-title">
          Effective onboarding for the
          <span class="text-green">Developer</span>!
        </h2>
        <div class="page-1-player-text">
          <div class="modal-col">
            <div class="modal-col-item">
              <h3>Smooth hiring process</h3>
              <p>
                We streamline the final steps of the job offer process,
                facilitating a seamless transition by arranging start dates,
                negotiating salaries, establishing probation periods, and
                managing NDAs and responsibilities, all with the aim of ensuring
                an efficient and hassle-free experience.
              </p>
            </div>
            <hr class="modal-hr" />
            <div class="modal-col-item">
              <h3>Seamless onboarding</h3>
              <p>
                Our comprehensive onboarding process equips developers with
                essential hardware, software, credentials, and documentation,
                ensuring a seamless integration into your team.
              </p>
            </div>
          </div>
          <div class="modal-col modal-col-video-wrapper">
            <div class="modal-col-video">
              <iframe
                loading="lazy"
                class="yt-player"
                src="https://www.youtube.com/embed/8QxannJ1sBc?enablejsapi=1"
                title="YouTube video player"
                frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                allowfullscreen
              ></iframe>
            </div>
          </div>
          <div class="modal-col">
            <div class="modal-col-item">
              <h3>Compliance and policies</h3>
              <p>
                Compliance and clarity are paramount in our onboarding process,
                ensuring new hires understand employment terms, review and
                accept policies, contracts, and necessary documents, leaving no
                room for ambiguity and fostering a secure work environment.
              </p>
            </div>
            <hr class="modal-hr" />
            <div class="modal-col-item">
              <h3>Dedicated team success</h3>
              <p>
                Our exceptional track record showcases remarkably low staff
                turnover rates, with 90% of employees committed to the project
                since its inception, demonstrating our expertise in building
                dedicated and loyal teams that bring strength and stability to
                your organization.
              </p>
            </div>
          </div>
        </div>
      </div>
      <div class="page-content page-content-4 hidden">
        <h2 class="page-content-title">
          Seamless hiring and exceptional
          <span class="text-green">Support</span> !
        </h2>

        <div class="page-1-player-text">
          <div class="modal-col">
            <div class="modal-col-item">
              <h3>Streamlined hiring process</h3>
              <p>
                During negotiations and contract signing, we provide
                comprehensive support including job descriptions, developer
                searches, HR screening, interviews, and coordination of meetings
                with specialists, ensuring a smooth transition into your team.
              </p>
            </div>
            <hr class="modal-hr" />
            <div class="modal-col-item">
              <h3>Comprehensive support</h3>
              <p>
                We handle the essentials so you can focus on your project:
                providing laptops, internet access, office environment, and
                taking care of developers' needs, including coffee and snacks.
                We also manage taxes, vacation, and sick leaves, enabling you to
                concentrate on your goals.
              </p>
            </div>
          </div>
          <div class="modal-col modal-col-video-wrapper">
            <div class="modal-col-video">
              <iframe
                loading="lazy"
                class="yt-player"
                src="https://www.youtube.com/embed/c8PMavAnwbs?enablejsapi=1"
                title="YouTube video player"
                frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                allowfullscreen
              ></iframe>
            </div>
          </div>
          <div class="modal-col">
            <div class="modal-col-item">
              <h3>Engaging Team Building</h3>
              <p>
                We prioritize a positive work culture, offering team-building
                activities and dedicated account managers who provide support,
                insights, and assistance to ensure the success of your project.
              </p>
            </div>
            <hr class="modal-hr" />
            <div class="modal-col-item">
              <h3>Creating strong connections</h3>
              <p>
                We aim to be your reliable partner, building long-term
                relationships based on trust, professionalism, and exceptional
                service. Whether you need skilled developers, have questions, or
                require quick project completion, our responsive team is here to
                help you achieve your objectives.
              </p>
            </div>
          </div>
        </div>
      </div>
      <div class="modal-button-wrapper">
        <button
          class="btn modal-btn-outlined"
          id="modal-btn-skip"
          onclick="skipAndScroll()"
        >
          Skip and talk to us
        </button>
        <div>
          <button class="btn modal-btn-outlined btn-prev-page txt-grey-1" onclick="prevPage()">
            Back
          </button>
          <button class="btn" id="next-page-btn" onclick="nextPage()">
            Next Page
          </button>
        </div>
      </div>
    </section>
      
      <div class="overlay hidden"></div>
        `;
    }
  }
);
