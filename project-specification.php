<!DOCTYPE html>
<html lang="en">

<head>
  <script>
    (function(w, d, s, l, i) {
      w[l] = w[l] || [];
      w[l].push({
        'gtm.start': new Date().getTime(),
        event: 'gtm.js'
      });
      var f = d.getElementsByTagName(s)[0],
        j = d.createElement(s),
        dl = l != 'dataLayer' ? '&l=' + l : '';
      j.async = true;
      j.src =
        'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
      f.parentNode.insertBefore(j, f);
    })(window, document, 'script', 'dataLayer', 'GTM-KDK6XN8');
  </script>
  <!-- End Google Tag Manager -->


  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="description" content="One Logic Soft - Project specification">
  <link rel="apple-touch-icon" sizes="57x57" href="img/favicon/apple-icon-57x57.png">
  <link rel="apple-touch-icon" sizes="60x60" href="img/favicon/apple-icon-60x60.png">
  <link rel="apple-touch-icon" sizes="72x72" href="img/favicon/apple-icon-72x72.png">
  <link rel="apple-touch-icon" sizes="76x76" href="img/favicon/apple-icon-76x76.png">
  <link rel="apple-touch-icon" sizes="114x114" href="img/favicon/apple-icon-114x114.png">
  <link rel="apple-touch-icon" sizes="120x120" href="img/favicon/apple-icon-120x120.png">
  <link rel="apple-touch-icon" sizes="144x144" href="img/favicon/apple-icon-144x144.png">
  <link rel="apple-touch-icon" sizes="152x152" href="img/favicon/apple-icon-152x152.png">
  <link rel="apple-touch-icon" sizes="180x180" href="img/favicon/apple-icon-180x180.png">
  <link rel="icon" type="image/png" sizes="192x192" href="img/favicon/android-icon-192x192.png">
  <link rel="icon" type="image/png" sizes="32x32" href="img/favicon/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="96x96" href="img/favicon/favicon-96x96.png">
  <link rel="icon" type="image/png" sizes="16x16" href="img/favicon/favicon-16x16.png">
  <link rel="shortcut icon" href="img/favicon/favicon.ico">
  <link rel="manifest" href="assets/manifest.json">

  <meta name="mobile-web-app-capable" content="yes">
  <meta name="apple-mobile-web-app-status-bar-style" content="#ffffff">
  <meta name="apple-mobile-web-app-capable" content="yes">

  <meta name="msapplication-config" content="img/favicon/browserconfig.xml">
  <meta name="msapplication-navbutton-color" content="#091d25">
  <meta name="msapplication-TileColor" content="#ffffff">
  <meta name="msapplication-TileImage" content="img/favicon/ms-icon-144x144.png">
  <meta name="theme-color" content="#ffffff">
  <meta name="msapplication-starturl" content="/index.html">
  <link href="css/mpdf.css" type="text/css" rel="stylesheet" media="mpdf" />
  <script src="https://code.jquery.com/jquery-1.10.2.js"></script>

  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
  <!-- Facebook Pixel Code-->
  <script>
    ! function(f, b, e, v, n, t, s) {
      if (f.fbq) return;
      n = f.fbq = function() {
        n.callMethod ?
          n.callMethod.apply(n, arguments) : n.queue.push(arguments)
      };
      if (!f._fbq) f._fbq = n;
      n.push = n;
      n.loaded = !0;
      n.version = '2.0';
      n.queue = [];
      t = b.createElement(e);
      t.async = !0;
      t.src = v;
      s = b.getElementsByTagName(e)[0];
      s.parentNode.insertBefore(t, s)
    }(window, document, 'script',
      'https://connect.facebook.net/en_US/fbevents.js');
    fbq('init', '203077913654674');
    fbq('track', 'Project specification');
  </script><noscript>
    <img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=203077913654674&ev=PageView&noscript=1">
  </noscript>
  <!-- End Facebook Pixel Code-->
  <title>One Logic Soft - Project specification</title>
</head>

<body>
  <!-- Google Tag Manager (noscript) -->
  <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KDK6XN8" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
  <!-- End Google Tag Manager (noscript) -->


  <script src="./js/components/header.js"></script>
  <!-- Header -->
  <my-header></my-header>
  <main>
    <!-- Modal -->
    <script src="./js/components/modal.js"></script>
    <ols-modal-pages></ols-modal-pages>
    <div class="breadcrumps bg-white-3">

    </div>
    <div class="bg-white-3">
      <div class="bg-green">
        <div class="container">
          <div class="col-lg-6 bg-green-title">
            <h2 class="h2 h2--white">Project specification</h2>
            <h4 class="h4 feature-item__title h2--white">Professional software engineering services</h3>
          </div>
          <div class="col-lg-6 bg-green-image"><img src="img/pr_head.png"></div>
        </div>
      </div>
      <div class="container">
        <div class="centered-block centered-block--welcome">

          <div class="col-12">

            <form class="form row contact__form" action="php/sendpdf_full.php?url=" id="project-specification" method="post" novalidate="novalidate">



              <h3 class="h4 feature-item__title h2--underlined">Project information</h3>
              <div class="form-group col-12">
                <label for="project-title">1. Project Title</label>
                <input class="form-input" type="text" placeholder="Project Title" name="project-title" id="project-title">
              </div>

              <div class="form-group col-12">
                <label for="platforms">2. Platforms:</label>
                <div class="form-div"><input class="form-checkbox" type="checkbox" name="platforms-desktop" id="platforms-desktop" value="web desktop" /><label for="platforms-desktop" class="form-label">web desktop;</label></div>
                <div class="form-div"><input class="form-checkbox" type="checkbox" name="platforms-mobile" id="platforms-mobile" value="web mobile" /><label for="platforms-mobile" class="form-label"> web mobile;</label></div>
                <div class="form-div"><input class="form-checkbox" type="checkbox" name="platforms-ios" id="platforms-ios" value="IOS" /><label for="platforms-ios" class="form-label">IOS;</label></div>
                <div class="form-div"><input class="form-checkbox" type="checkbox" name="platforms-android" id="platforms-android" value="Android" /><label for="platforms-android" class="form-label">Android;</label></div>
                <div class="form-div"><input class="form-checkbox" type="checkbox" name="platforms-hybrid" id="platforms-hybrid" value="hybrid" /><label for="platforms-hybrid" class="form-label">hybrid;</label></div>
              </div>
              <div class="more-block">
                <h5 class="more-title">More</h5>
                <div class="more-items-list">
                  <div class="more-items">
                    <div class="form-group col-12">
                      <label for="project-category">3. Please choose the project category:</label>
                      <div class="form-div"><input class="form-checkbox" type="radio" name="project-category" id="project-category-new" value="new" /><label for="project-category-new" class="form-label">new;</label></div>
                      <div class="form-div"><input class="form-checkbox" type="radio" name="project-category" id="project-category-changes" value="changes in existing;" /><label for="project-category-changes" class="form-label">changes in existing;</label></div>
                      <div class="form-div"><input class="form-checkbox" type="radio" name="project-category" id="project-category-support" value="support" /><label for="project-category-support" class="form-label">support;</label></div>
                    </div>
                    <div class="form-group col-12">
                      <label for=" project-data">4. What project data do you already have?<b class="b-grey"> If you have data that you think we might need on this stage already, you can send it to us on <b class="blue-mail">info@onelogicsoft.com</b></b></label>
                      <textarea class="form-textarea" placeholder="Message" name="project-data" id="project-data"></textarea>
                    </div>
                    <div class="form-group col-12">
                      <label for="describe-project">5. Describe the project. A few words of what it would be</label>
                      <textarea class="form-textarea" placeholder="Message" name="describe-project" id="describe-project"></textarea>
                    </div>
                  </div>
                </div>
              </div>
              <div class="form-group col-12">
                <h4 class="underlined-section"></h4>
              </div>
              <h3 class="h4 feature-item__title h2--underlined">Design and interfaces development</h3>
              <div class="form-group col-12">
                <label for="mvp">1. Please choose what design would you like?(click on the picture)</label>
                <div class="col-lg-4 form-image-svg img-svg"><b>MVP</b><input class="form-checkbox" type="radio" name="mvp" id="mvp-1" value="MVP" /><label for="mvp-1"><img src="img/svg/48icon.svg"></label></div>
                <div class="col-lg-4 form-image-svg img-svg"><b>Typical</b><input class="form-checkbox" type="radio" name="mvp" id="mvp-2" value="Typical" /><label for="mvp-2"><img src="img/svg/47icon-6.svg"></label></div>
                <div class="col-lg-4 form-image-svg img-svg"><b>Custom</b><input class="form-checkbox" type="radio" name="mvp" id="mvp-3" value="Custom" /><label for="mvp-3"><img src="img/svg/46icon.svg"></label></div>
              </div>

              <div class="form-group col-12">
                <p> <label for="design-type">2. Type of the design</label> </p>

                <div class="form-div"> <input class="form-checkbox" type="radio" name="design-type" id="design-type-image" value="Image (main focus is on graphics)" /><label for="design-type-image" class="form-label">Image (main focus is on graphics)</label></div>
                <div class="form-div"><input class="form-checkbox" type="radio" name="design-type" id="design-type-info" value="Informational (minimum graphics, maximum texts and charts)" /><label for="design-type-info" class="form-label">Informational (minimum graphics, maximum texts and charts)</label></div>
                <div class="form-div"><input class="form-checkbox" type="radio" name="design-type" id="design-type-other" value="other" /><label for="design-type-other" class="form-label">other:</label></div>
                <textarea class="form-textarea" placeholder="Message" name="design-type-other-text" id="objectives-other-text-text"></textarea>
              </div>


              <div class="form-group col-12">
                <label for="mood-for">3. Describe the mood of the future application. Mark + the solution closest to you or describe your version in the form below</label>
                <div class="form-div"><input class="form-checkbox" type="radio" name="mood-for" id="mood-for-style" value="Strict corporate/business style" /><label for="mood-for-style" class="form-label">Strict corporate/business style</label></div>
                <div class="form-div"><input class="form-checkbox" type="radio" name="mood-for" id="mood-for-design" value="Design with bright colors" /><label for="mood-for-design" class="form-label">Design with bright colors</label></div>
                <div class="form-div"><input class="form-checkbox" type="radio" name="mood-for" id="mood-for-solid" value="Solid color design with a bright emphasis" /><label for="mood-for-solid" class="form-label">Solid color design with a bright emphasis.</label></div>
                <div class="form-div"><input class="form-checkbox" type="radio" name="mood-for" id="mood-for-positive" value="Positive funny design" /><label for="mood-for-positive" class="form-label">Positive funny design</label></div>
                <div class="form-div"><input class="form-checkbox" type="radio" name="mood-for" id="mood-for-minimalist" value="Minimalist style with an emphasis on functionality" /><label for="mood-for-minimalist" class="form-label">Minimalist style with an emphasis on functionality</label></div>
                <div class="form-div"><input class="form-checkbox" type="radio" name="mood-for" id="mood-for-option" value="Your option" /><label for="mood-for-option" class="form-label">Your option:</label></div>
                <textarea class="form-textarea" placeholder="Message" name="mood-for-option-text" id="your-option-text"></textarea>
              </div>

              <div class="form-group col-12">
                <label for="mood-for">4. How would you define the style and tone of the project?<b class="b-grey"> It is important for us to understand the values and concepts that will underpin the project. It concerns both the visual aspect and the general feeling. Please slide the cursor on each scale representing polar qualities to give us a better understanding of your expectations for the project.</b></label>
                <div class="form-range"><label for="informal-official" class="form-label">Informal</label><input type="range" name="informal-official" id="informal-official" min="0" max="10"><label for="informal-official" class="form-label">Official</label></div>
                <div class="form-range"><label for="classic-modern" class="form-label">Classic</label><input type="range" name="classic-modern" id="classic-modern" min="0" max="10"><label for="classic-modern" class="form-label">Modern</label></div>
                <div class="form-range"><label for="discreet-catchy" class="form-label">Discreet</label><input type="range" name="discreet-catchy" id="discreet-catchy" min="0" max="10"><label for="discreet-catchy" class="form-label">Catchy</label></div>
                <div class="form-range"><label for="conservative-luxurious" class="form-label">Conservative</label><input type="range" name="conservative-luxurious" id="conservative-luxurious" min="0" max="10"><label for="conservative-luxurious" class="form-label">Luxurious</label></div>
                <div class="form-range"><label for="simple-complex" class="form-label">Simple</label><input type="range" name="simple-complex" id="simple-complex" min="0" max="10"><label for="simple-complex" class="form-label">Complex</label></div>
              </div>
              <div class="more-block">
                <h5 class="more-title">More</h5>
                <div class="more-items-list">
                  <div class="more-items">
                    <div class="form-group col-12">
                      <label for="brand-book">5. The company's corporate identity, whether it is necessary to take into account in the design of the site, brand book, if you have any specific company colors that need to be used:</label>
                      <textarea class="form-textarea" placeholder="Message" name="brand-book" id="brand-book"></textarea>
                    </div>
                    <div class="form-group col-12">
                      <label for="general-palette">6. General color palette<b class="b-grey"> of the interface (select the colors closest to you at https://www.materialpalette.com)</b>:</label>
                      <textarea class="form-textarea" placeholder="Message" name="general-palette" id="general-palette"></textarea>
                    </div>
                    <div class="form-group col-12">
                      <label for="unacceptable-elements">7. Unacceptable elements:</label>
                      <textarea class="form-textarea" placeholder="Message" name="unacceptable-elements" id="unacceptable-elements"></textarea>
                    </div>
                    <div class="form-group col-12">
                      <label for="mandatory-elements">8. Mandatory elements:</label>
                      <textarea class="form-textarea" placeholder="Message" name="mandatory-elements" id="mandatory-elements"></textarea>
                    </div>
                    <div class="form-group col-12">
                      <label for="site-like">9. Sites/apps of any subject that you like(for any reason) and comments:</label>
                      <textarea class="form-textarea" placeholder="Message" name="site-like" id="site-like"></textarea>
                    </div>
                    <div class="form-group col-12">
                      <label for="site-not-like">10. Sites/apps of any subject that you <b class="red-not">do not like</b> (for any reason) and comments:</label>
                      <textarea class="form-textarea" placeholder="Message" name="site-not-like" id="site-not-like"></textarea>
                    </div>
                  </div>
                </div>
              </div>
              <div class="form-group col-12">
                <h4 class="underlined-section"></h4>
              </div>
              <h3 class="h4 feature-item__title h2--underlined">Features</h3>

              <div class="form-group col-12">
                <label for="users-registration">1. Users and registration</label>
                <div class="input-div">
                  <div class="col-lg-4 form-image-svg"><input class="form-checkbox" type="checkbox" name="registration-1" id="registration-1" value="login/ Sign Up" /><label for="registration-1"><img src="img/svg/45icon.svg">Login/ Sign Up</label></div>
                  <div class="col-lg-4 form-image-svg"><input class="form-checkbox" type="checkbox" name="registration-2" id="registration-2" value="Facebook Sign Up" /><label for="registration-2"><img src="img/svg/44icon.svg">Facebook Sign Up</label></div>
                  <div class="col-lg-4 form-image-svg"><input class="form-checkbox" type="checkbox" name="registration-3" id="registration-3" value="Google Sign Up" /><label for="registration-3"><img src="img/svg/43icon.svg">Google Sign Up</label></div>
                  <div class="col-lg-4 form-image-svg"><input class="form-checkbox" type="checkbox" name="registration-4" id="registration-4" value="LinkedIn Sign Up" /><label for="registration-4"><img src="img/svg/42icon.svg">LinkedIn Sign Up</label></div>
                  <div class="col-lg-4 form-image-svg"><input class="form-checkbox" type="checkbox" name="registration-5" id="registration-5" value="User Invitation Emails" /><label for="registration-5"><img src="img/svg/41icon.svg">User Invitation Emails</label></div>
                  <div class="col-lg-4 form-image-svg"><input class="form-checkbox" type="checkbox" name="registration-6" id="registration-6" value="Multi-tenant Accounts" /><label for="registration-6"><img src="img/svg/40icon.svg">Multi-tenant Accounts</label></div>
                </div>
              </div>
              <div class="form-group col-12">
                <label for="design-type">2. Content</label>
                <div class="input-div">
                  <div class="col-lg-4 form-image-svg"><input class="form-checkbox" type="checkbox" name="content-1" id="content-1" value="Dashboard" /><label for="content-1"><img src="img/svg/38icon.svg">Dashboard</label></div>
                  <div class="col-lg-4 form-image-svg"><input class="form-checkbox" type="checkbox" name="content-2" id="content-2" value="Integration with hardware(bluetooth, wifi)" /><label for="content-2"><img src="img/svg/37icon.svg">Integration with hardware(bluetooth, wifi)</label></div>
                  <div class="col-lg-4 form-image-svg"><input class="form-checkbox" type="checkbox" name="content-3" id="content-3" value="Activity Feed" /><label for="content-3"><img src="img/svg/36icon.svg">Activity Feed</label></div>
                  <div class="col-lg-4 form-image-svg"><input class="form-checkbox" type="checkbox" name="content-4" id="content-4" value="File Upload" /><label for="content-4"><img src="img/svg/35icon.svg">File Upload</label></div>
                  <div class="col-lg-4 form-image-svg"><input class="form-checkbox" type="checkbox" name="content-5" id="content-5" value="User Profiles" /><label for="content-5"><img src="img/svg/32icon.svg">User Profiles</label></div>
                  <div class="col-lg-4 form-image-svg"><input class="form-checkbox" type="checkbox" name="content-6" id="content-6" value="Newsletters" /><label for="content-6"><img src="img/svg/34icon.svg">Newsletters</label></div>
                  <div class="col-lg-4 form-image-svg"><input class="form-checkbox" type="checkbox" name="content-7" id="content-7" value="Tags" /><label for="content-7"><img src="img/svg/33icon.svg">Tags</label></div>
                  <div class="col-lg-4 form-image-svg"><input class="form-checkbox" type="checkbox" name="content-8" id="content-8" value="Ratings and reviews" /><label for="content-8"><img src="img/svg/31icon.svg">Ratings and reviews</label></div>
                  <div class="col-lg-4 form-image-svg"><input class="form-checkbox" type="checkbox" name="content-9" id="content-9" value="Audio/Video processing" /><label for="content-9"><img src="img/svg/30icon.svg">Audio/Video processing</label></div>
                  <div class="col-lg-4 form-image-svg"><input class="form-checkbox" type="checkbox" name="content-10" id="content-10" value="Searching" /><label for="content-10"><img src="img/svg/29icon.svg">Searching</label></div>
                  <div class="col-lg-4 form-image-svg"><input class="form-checkbox" type="checkbox" name="content-11" id="content-11" value="News" /><label for="content-11"><img src="img/svg/50icon.svg">News</label></div>
                  <div class="col-lg-4 form-image-svg"><input class="form-checkbox" type="checkbox" name="content-12" id="content-12" value="Contact form" /><label for="content-12"><img src="img/svg/49icon.svg">Contact form</label></div>
                </div>
              </div>
              <div class="form-group col-12">
                <label for="calendar-locations">3. Calendar and Locations</label>
                <div class="input-div">
                  <div class="col-lg-4 form-image-svg"><input class="form-checkbox" type="checkbox" name="calendar-1" id="calendar-1" value="Calendar" /><label for="calendar-1"><img src="img/svg/28icon.svg">Calendar</label></div>
                  <div class="col-lg-4 form-image-svg"><input class="form-checkbox" type="checkbox" name="calendar-2" id="calendar-2" value="Display of Geolocation" /><label for="calendar-2"><img src="img/svg/27icon.svg">Display of Geolocation</label></div>
                  <div class="col-lg-4 form-image-svg"><input class="form-checkbox" type="checkbox" name="calendar-3" id="calendar-3" value="Custom map features" /><label for="calendar-3"><img src="img/svg/26icon.svg">Custom map features</label></div>
                  <div class="col-lg-4 form-image-svg"><input class="form-checkbox" type="checkbox" name="calendar-4" id="calendar-4" value="Bookings" /><label for="calendar-4"><img src="img/svg/25icon.svg">Bookings</label></div>
                </div>
              </div>
              <div class="form-group col-12">
                <label for="social-networks">4. Social networks Engagement</label>
                <div class="input-div">
                  <div class="col-lg-4 form-image-svg"><input class="form-checkbox" type="checkbox" name="social-networks-1" id="social-networks-1" value="Messaging/chats" /><label for="social-networks-1"><img src="img/svg/24icon.svg">Messaging/chats</label></div>
                  <div class="col-lg-4 form-image-svg"><input class="form-checkbox" type="checkbox" name="social-networks-2" id="social-networks-2" value="Forums" /><label for="social-networks-2"><img src="img/svg/23icon.svg">Forums</label></div>
                  <div class="col-lg-4 form-image-svg"><input class="form-checkbox" type="checkbox" name="social-networks-3" id="social-networks-3" value="Social Sharing" /><label for="social-networks-3"><img src="img/svg/22icon.svg">Social Sharing</label></div>
                </div>
              </div>
              <div class="form-group col-12">
                <label for="billing-eshopping">5. Billing and eShopping</label>
                <div class="input-div">
                  <div class="col-lg-4 form-image-svg"><input class="form-checkbox" type="checkbox" name="billing-eshopping-1" id="billing-eshopping-1" value="Subscriptions" /><label for="billing-eshopping-1"><img src="img/svg/21icon.svg">Subscriptions</label></div>
                  <div class="col-lg-4 form-image-svg"><input class="form-checkbox" type="checkbox" name="billing-eshopping-2" id="billing-eshopping-2" value="Payments" /><label for="billing-eshopping-2"><img src="img/svg/20icon.svg">Payments</label></div>
                  <div class="col-lg-4 form-image-svg"><input class="form-checkbox" type="checkbox" name="billing-eshopping-3" id="billing-eshopping-3" value="Shopping Cart" /><label for="billing-eshopping-3"><img src="img/svg/19icon.svg">Shopping Cart</label></div>
                  <div class="col-lg-4 form-image-svg"><input class="form-checkbox" type="checkbox" name="billing-eshopping-4" id="billing-eshopping-4" value="Marketplace" /><label for="billing-eshopping-4"><img src="img/svg/18icon.svg">Marketplace</label></div>
                  <div class="col-lg-4 form-image-svg"><input class="form-checkbox" type="checkbox" name="billing-eshopping-5" id="billing-eshopping-5" value="Product Management" /><label for="billing-eshopping-5"><img src="img/svg/10icon.svg">Product Management</label></div>
                </div>
              </div>
              <div class="form-group col-12">
                <label for="admin-reviews">6. Admin, reviews, Analytics</label>
                <div class="input-div">
                  <div class="col-lg-4 form-image-svg"><input class="form-checkbox" type="checkbox" name="admin-reviews-1" id="admin-reviews-1" value="CMS Integration" /><label for="admin-reviews-1"><img src="img/svg/11icon.svg">CMS Integration</label></div>
                  <div class="col-lg-4 form-image-svg"><input class="form-checkbox" type="checkbox" name="admin-reviews-2" id="admin-reviews-2" value="User Admin" /><label for="admin-reviews-2"><img src="img/svg/9icon.svg">User Admin</label></div>
                  <div class="col-lg-4 form-image-svg"><input class="form-checkbox" type="checkbox" name="admin-reviews-3" id="admin-reviews-3" value="Content checking" /><label for="admin-reviews-3"><img src="img/svg/12icon.svg">Content checking</label></div>
                  <div class="col-lg-4 form-image-svg"><input class="form-checkbox" type="checkbox" name="admin-reviews-4" id="admin-reviews-4" value="Voice calls" /><label for="admin-reviews-4"><img src="img/svg/13icon.svg">Voice calls</label></div>
                  <div class="col-lg-4 form-image-svg"><input class="form-checkbox" type="checkbox" name="admin-reviews-5" id="admin-reviews-5" value="Analytics" /><label for="admin-reviews-5"><img src="img/svg/14icon.svg">Analytics</label></div>
                  <div class="col-lg-4 form-image-svg"><input class="form-checkbox" type="checkbox" name="admin-reviews-6" id="admin-reviews-6" value="Reporting" /><label for="admin-reviews-6"><img src="img/svg/15icon.svg">Reporting</label></div>
                  <div class="col-lg-4 form-image-svg"><input class="form-checkbox" type="checkbox" name="admin-reviews-7" id="admin-reviews-7" value="Monitoring" /><label for="admin-reviews-7"><img src="img/svg/16icon.svg">Monitoring</label></div>
                  <div class="col-lg-4 form-image-svg"><input class="form-checkbox" type="checkbox" name="admin-reviews-8" id="admin-reviews-8" value="Multilingual Support" /><label for="admin-reviews-8"><img src="img/svg/17icon.svg">Multilingual Support</label></div>
                </div>
              </div>
              <div class="form-group col-12">
                <label for="external-api">7. External Integrations and APIs</label>
                <div class="input-div">
                  <div class="col-lg-4 form-image-svg"><input class="form-checkbox" type="checkbox" name="external-api-1" id="external-api-1" value="Connect to third party services/CRM/ERP/WMS etc" /><label for="external-api-1"><img src="img/svg/6icon.svg">Connect to third party services/CRM/ERP/WMS etc</label></div>
                  <div class="col-lg-4 form-image-svg"><input class="form-checkbox" type="checkbox" name="external-api-2" id="external-api-2" value="an API to integrate with your" /><label for="external-api-2"><img src="img/svg/8icon.svg">an API to integrate with your</label></div>
                  <div class="col-lg-4 form-image-svg"><input class="form-checkbox" type="checkbox" name="external-api-3" id="external-api-3" value="External Messaging  services" /><label for="external-api-3"><img src="img/svg/7icon.svg">External Messaging services</label></div>
                </div>
              </div>
              <div class="form-group col-12">
                <label for="mobile-apps">8. Mobile apps features</label>
                <div class="input-div">
                  <div class="col-lg-4 form-image-svg"><input class="form-checkbox" type="checkbox" name="mobile-apps-1" id="mobile-apps-1" value="Cloud" /><label for="mobile-apps-1"><img src="img/svg/5icon.svg">Cloud</label></div>
                  <div class="col-lg-4 form-image-svg"><input class="form-checkbox" type="checkbox" name="mobile-apps-2" id="mobile-apps-2" value="Sensor devices " /><label for="mobile-apps-2"><img src="img/svg/4icon.svg">Sensor devices </label></div>
                  <div class="col-lg-4 form-image-svg"><input class="form-checkbox" type="checkbox" name="mobile-apps-3" id="mobile-apps-3" value="Barcode/qr code scanner" /><label for="mobile-apps-3"><img src="img/svg/3icon.svg">Barcode/qr code scanner</label></div>
                  <div class="col-lg-4 form-image-svg"><input class="form-checkbox" type="checkbox" name="mobile-apps-4" id="mobile-apps-4" value="Connect devices" /><label for="mobile-apps-4"><img src="img/svg/2icon.svg">Connect devices</label></div>
                  <div class="col-lg-4 form-image-svg"><input class="form-checkbox" type="checkbox" name="mobile-apps-5" id="mobile-apps-5" value="Custom /push notifications" /><label for="mobile-apps-5"><img src="img/svg/1icon.svg">Custom /push notifications</label></div>
                </div>
              </div>
              <div class="more-block">
                <h5 class="more-title">More</h5>
                <div class="more-items-list">
                  <div class="more-items">
                    <div class="form-group col-12">
                      <label for="info-support">9. Information and technical support</label>
                      <div class="form-div"><input class="form-checkbox" type="checkbox" name="info-support-info" id="info-support-info" value="Information support and content filling site" /><label for="info-support-info" class="form-label">Information support and content filling site:</label></div>
                      <div class="form-div"><input class="form-checkbox" type="checkbox" name="info-support-technical" id="info-support-technical" value="Technical support" /><label for="info-support-technical" class="form-label">Technical support:</label></div>
                      <div class="form-div"><input class="form-checkbox" type="checkbox" name="info-support-golive" id="info-support-golive" value="GoLive phase and publishing" /><label for="info-support-golive" class="form-label">GoLive phase and publishing:</label></div>
                    </div>
                    <div class="form-group col-12">
                      <label for="app-structure">10. Describe the application structure</label>
                      <textarea class="form-textarea" placeholder="Message" name="app-structure" id="app-structure"></textarea>
                    </div>
                  </div>
                </div>
              </div>

              <!--
<div class="form-group col-12">
                <h4 class="underlined-section"></h4>
              <div class="accordion">
    <div class="accordion-item">
      <a>  <h3 class="h4 feature-item__title h2--underlined">Additional questions</h3></a>
      <div class="content">
    <label  for="additional-1">1. Do you have any other materials that the site needs to match with in some way (brochures, press materials, etc.)?</label>
                <textarea class="form-textarea" placeholder="Message" name="additional-1" id="additional-1"></textarea>
 <label  for="additional-2">2. Indicate everything that, from your point of view, can clarify the task of developing interfaces:</label>
                <textarea class="form-textarea" placeholder="Message" name="additional-2" id="additional-2"></textarea>
<label  for="additional-3">3. Do you have any requirements to the terms:</label>
                <textarea class="form-textarea" placeholder="Message" name="additional-3" id="additional-3"></textarea>
 <label  for="additional-4">4. Please specify technologies that you prefer to use if you know:</label>
                <textarea class="form-textarea" placeholder="Message" name="additional-4" id="additional-4"></textarea>
  <label  for="additional-5">5. Project Timeline and budget. Don't forget to mention if this project has to be completed within a fixed timeframe. Also, if it's possible, please state the project budget.</label>
                <textarea class="form-textarea" placeholder="Message" name="additional-5" id="additional-5"></textarea>

      </div>
    </div>
      </div>
  </div>-->
              <div class="form-group col-12">
                <h4 class="underlined-section"></h4>
              </div>

              <h3 class="h4 feature-item__title h2--underlined">Business Information</h3>
              <div class="form-group col-12">
                <label for="brand-name">1. The name of the brand / company (which is the object of the project)*</label>
                <input class="form-input" type="text" placeholder="Brand Name (required)" name="brand-name" id="brand-name" autocomplete="name" required="required">
              </div>
              <div class="form-group col-12 person-block">
                <label for="contact-person">2. Person of contact Information*</label>
                <div class="person-first col-lg-3"><input class="form-input " type="text" placeholder="Name (required)" name="name" id="contact-name" autocomplete="name" required></div>
                <div class="person col-lg-3"><input class="form-input" type="email" placeholder="Email (required)" name="email" id="contact-email" autocomplete="email" pattern="^[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+.[A-Za-z]{2,4}$" required></div>
                <div class="person col-lg-3"><input class="form-input" type="tel" placeholder="Tel" name="tel" id="contact-tel" autocomplete="tel" pattern="^[0-9+-]+$"></div>
                <div class="person col-lg-3"><input class="form-input" type="skype" placeholder="Skype " name="skype" id="contact-skype" autocomplete="skype"></div>
              </div>
              <div class="form-group col-12">
                <label for="project-description">3. What is the project description? </label>
                <textarea class="form-textarea" placeholder="Message" name="project-description" id="project-description"></textarea>
              </div>
              <div class="form-group col-12">
                <label for="categorize-your-application">4. How would you categorize your application? corporate website; online services; promo website; content website; business tool; etc</label>
                <textarea class="form-textarea" placeholder="Message" name="categorize-your-application" id="categorize-your-application"></textarea>
              </div>

              <div class="form-group col-12">
                <label for="objectives">5. What are your objectives? <b class="b-grey">What specific goals should the application meet? Please mark all the tasks that are significant for you.</b></label>
                <div class="form-div"><input class="form-checkbox" type="checkbox" name="objectives-website-traffic" id="objectives-website-traffic" value="growth of website traffic, project evolution" /><label for="objectives-website-traffic" class="form-label">growth of website traffic, project evolution;</label></div>
                <div class="form-div"><input class="form-checkbox" type="checkbox" name="objectives-promotion" id="objectives-promotion" value="promotion of certain products and service" /><label for="objectives-promotion" class="form-label">promotion of certain products and service;</label></div>
                <div class="form-div"><input class="form-checkbox" type="checkbox" name="objectives-image-improvement" id="objectives-image-improvement" value="image improvement" /><label for="objectives-image-improvement" class="form-label">image improvement;</label></div>
                <div class="form-div"><input class="form-checkbox" type="checkbox" name="objectives-clients-partners" id="objectives-clients-partners" value="services for clients and/or partners" /><label for="objectives-clients-partners" class="form-label">services for clients and/or partners;</label></div>
                <div class="form-div"><input class="form-checkbox" type="checkbox" name="objectives-services-for" id="objectives-services-for" value="services for corporate employees" /><label for="objectives-services-for" class="form-label">services for corporate employees;</label></div>
                <div class="form-div"><input class="form-checkbox" type="checkbox" name="objectives-online-sales" id="objectives-online-sales" value="online sales, accepting online payments" /><label for="objectives-online-sales" class="form-label">online sales, accepting online payments;</label></div>
                <div class="form-div"><input class="form-checkbox" type="checkbox" name="objectives-other" id="objectives-other" value="other" /><label for="objectives-other" class="form-label">other:</label></div>
                <textarea class="form-textarea" placeholder="Message" name="objectives-other-text" id="objectives-other-text"></textarea>
              </div>
              <div class="more-block">
                <h5 class="more-title">More</h5>
                <div class="more-items-list">
                  <div class="more-items">
                    <div class="form-group col-12">
                      <label for="audience">6. Describe an audience? <p>Please tell us about the audience your software is intended to attract. Will your website be aimed at private or corporate customers? What are their primary geographical, age-related, social, and behavioral characteristics?</p></label>
                      <textarea class="form-textarea" placeholder="Message" name="audience" id="audience"></textarea>
                    </div>
                    <div class="form-group col-12">
                      <label for="diff-competitors">7. What makes you different from your competitors?</label>
                      <textarea class="form-textarea" placeholder="Message" name="diff-competitors" id="diff-competitors"></textarea>
                    </div>
                    <div class="form-group col-12">
                      <label for="competitors">8. What are your competitors? (best to point out their sites)</b></label>
                      <textarea class="form-textarea" placeholder="Message" name="competitors" id="competitors"></textarea>
                    </div>
                    <div class="form-group col-12">
                      <label for="product-solve">9. What task should the product solve for the consumer?</label>
                      <textarea class="form-textarea" placeholder="Message" name="product-solve" id="product-solve"></textarea>
                    </div>
                  </div>
                </div>
              </div>
              <div class="form-group col-12">
                <h4 class="underlined-section"></h4>
              </div>
              <div class="more-block">
                <h3 class="h4 feature-item__title h2--underlined more-title">Additional questions</h3>
                <div class="more-items-list">
                  <div class="more-items">
                    <div class="form-group col-12">
                      <label for="additional-1">1. Do you have any other materials that the site needs to match with in some way (brochures, press materials, etc.)?</label>
                      <textarea class="form-textarea" placeholder="Message" name="additional-1" id="additional-1"></textarea>
                    </div>
                    <div class="form-group col-12">
                      <label for="additional-2">2. Indicate everything that, from your point of view, can clarify the task of developing interfaces:</label>
                      <textarea class="form-textarea" placeholder="Message" name="additional-2" id="additional-2"></textarea>
                    </div>
                    <div class="form-group col-12">
                      <label for="additional-3">3. Do you have any requirements to the terms:</label>
                      <textarea class="form-textarea" placeholder="Message" name="additional-3" id="additional-3"></textarea>
                    </div>
                    <div class="form-group col-12">
                      <label for="additional-4">4. Please specify technologies that you prefer to use if you know:</label>
                      <textarea class="form-textarea" placeholder="Message" name="additional-4" id="additional-4"></textarea>
                    </div>
                    <div class="form-group col-12">
                      <label for="additional-5">5. Project Timeline and budget. Don't forget to mention if this project has to be completed within a fixed timeframe. Also, if it's possible, please state the project budget.</label>
                      <textarea class="form-textarea" placeholder="Message" name="additional-5" id="additional-5"></textarea>
                    </div>
                  </div>
                </div>
              </div>

              <div class="form-group col-12 send-form">
                <div>
                  <label class="send-label" for="email-specific">Please enter your email and get this specification</label>
                  <input class="form-input email-specific" type="email" placeholder="Email" name="email-specific" id="email-specific" autocomplete="email" pattern="^[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+.[A-Za-z]{2,4}$">
                  <button class="btn send-btn" type="submit">Send</button>
                  <p class="form-text col-12">By submitting this form, you agree that we may use the data you provide to contact you with information related to your request/submission and relevant One Logic Soft products and services. To learn more, see our <a href="privacy-policy.html" rel="noopener">Privacy&nbsp;Policy</a>.</p>
                </div>
              </div>
              <input id="check" name="check" type="hidden" value="">

            </form>
          </div>
        </div>
      </div>
    </div>
  </main>
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
            </ul>
          </section>
          <section class="footer__top-section col-12 col-sm-6 col-lg-3">
            <h3 class="h3 h3--light">Office hours</h3>
            <p class="footer__hours">Eastern European Summer Time <br>EEST(GMT+3)</p>
            <p class="footer__hours"><span>Current time:</span> <i class="js-current-time">GMT+3</i></p>
            <p class="footer__hours"><span>Mon-Fri:</span> 9am - 9pm</p>
            <p class="footer__hours"><span>Sat:</span> chats and support</p>
            <p class="footer__hours"><span>Sun:</span> chats and support</p>
          </section>
          <section class="footer__top-section col-12 col-sm-6 col-lg-3">
            <h3 class="h3 h3--light">Resent posts</h3>
            <ul class="footer__list">
              <li class="footer__list-item footer__list-item--post"><a href="http://blog.onelogicsoft.com/outsourcing-for-the-brain-source/" target="_blank" rel="noopener">Outsource Is The Place For Brain Source</a></li>
              <li class="footer__list-item footer__list-item--post"><a href="http://blog.onelogicsoft.com/startup-ready-steady-go/" target="_blank" rel="noopener">StartUp: Ready! Steady! Go!</a></li>
              <li class="footer__list-item footer__list-item--post"><a href="http://blog.onelogicsoft.com/business-analyst-autobiography/" target="_blank" rel="noopener">Business Analyst. Autobiography</a></li>
              <li class="footer__list-item footer__list-item--post"><a href="http://blog.onelogicsoft.com/freelancer-vs-webagency/" target="_blank" rel="noopener">Professional company vs. Freelancer</a></li>
              <li class="footer__list-item footer__list-item--post"><a href="http://blog.onelogicsoft.com/have-an-idea-next-step-is-tech-specs/" target="_blank" rel="noopener">Have an idea, next step is Tech Specs</a></li>
            </ul>
          </section>
          <section class="footer__top-section col-12 col-sm-6 col-lg-3">
            <h3 class="h3 h3--light">Follow us</h3>
            <ul class="social footer__social">
              <li class="social__item"><a class="icon-facebook" href="https://www.facebook.com/onelogicsoft" target="_blank" rel="noopener" aria-label="facebook"></a></li>
              <li class="social__item"><a class="icon-instagram" href="https://www.instagram.com/onelogic.soft/" target="_blank" rel="noopener" aria-label="instagram"></a></li>
              <li class="social__item"><a class="icon-linkedin" href="https://www.linkedin.com/company/onelogicsoft" target="_blank" rel="noopener" aria-label="linkedin"></a></li>
              <li class="social__item"><a class="icon-youtube" href="https://www.youtube.com/channel/onelogicsoft" target="_blank" rel="noopener" aria-label="youtube"></a></li>
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
          <div class="footer__copy col-10">All Right Reserved В© <span class="js-year">2022</span></div>
          <div class="footer__go-top col-2">
            <button class="js-menu-item" type="button" href="#home" aria-label="Go to top of the page"></button>
          </div>
        </div>
      </div>
    </div>
  </footer>
  <style>
    *,
    ::after,
    ::before {
      -webkit-box-sizing: inherit;
      box-sizing: inherit
    }

    body {
      background: #fff;
      margin: 0 auto;
      min-width: 320px
    }

    html {
      -webkit-box-sizing: border-box;
      box-sizing: border-box
    }

    h2,
    html,
    img,
    li,
    p,
    ul {
      margin: 0;
      padding: 0;
      border: 0
    }

    header,
    img,
    main,
    nav {
      display: block
    }

    a {
      color: inherit
    }

    strong {
      font-weight: 600
    }

    @-ms-viewport {
      width: device-width
    }

    html {
      -webkit-box-sizing: border-box;
      box-sizing: border-box;
      -ms-overflow-style: scrollbar
    }

    *,
    ::after,
    ::before {
      -webkit-box-sizing: inherit;
      box-sizing: inherit
    }

    .container,
    .header__container {
      width: 100%;
      padding-right: 15px;
      padding-left: 15px;
      margin-right: auto;
      margin-left: auto
    }

    .row {
      display: -webkit-box;
      display: -ms-flexbox;
      display: flex;
      -ms-flex-wrap: wrap;
      flex-wrap: wrap;
      margin-right: -15px;
      margin-left: -15px
    }

    .col-12,
    .col-md-6 {
      position: relative;
      width: 100%;
      min-height: 1px;
      padding-right: 15px;
      padding-left: 15px
    }

    .col-12 {
      -webkit-box-flex: 0;
      -ms-flex: 0 0 100%;
      flex: 0 0 100%;
      max-width: 100%
    }

    .align-self-center {
      -ms-flex-item-align: center !important;
      align-self: center !important
    }

    @font-face {
      font-family: ols;
      src: url(fonts/icomoon/ols.eot?emj0k5);
      src: url(fonts/icomoon/ols.eot?emj0k5#iefix) format("embedded-opentype"), url(fonts/icomoon/ols.ttf?emj0k5) format("truetype"), url(fonts/icomoon/ols.woff?emj0k5) format("woff"), url(fonts/icomoon/ols.svg?emj0k5#ols) format("svg");
      font-weight: 400;
      font-style: normal
    }

    [class^=icon-] {
      font-family: ols !important;
      speak: none;
      font-style: normal;
      font-weight: 400;
      font-variant: normal;
      text-transform: none;
      line-height: 1;
      -webkit-font-smoothing: antialiased;
      -moz-osx-font-smoothing: grayscale
    }

    .icon-youtube:before {
      content: "\e900"
    }

    .icon-instagram:before {
      content: "\e901"
    }

    .icon-twitter:before {
      content: "\e902"
    }

    .icon-linkedin:before {
      content: "\e903"
    }

    .icon-facebook:before {
      content: "\e904"
    }

    .bg-white-3 {
      background-color: #f6f6f7
    }

    :root {
      font-family: 'Source Sans Pro', sans-serif;
      font-weight: 400;
      font-size: 14px;
      line-height: 23px;
      color: #3e3e3e
    }

    body {
      overflow-x: hidden
    }

    .h2,
    h2 {
      font-family: 'Source Sans Pro', sans-serif;
      font-weight: 600;
      font-size: 28px;
      line-height: 33px;
      font-size: 36px;
      line-height: 1.1667;
      letter-spacing: normal;
      margin-bottom: 3rem;
      text-transform: capitalize
    }

    .h2--underlined::after {
      content: '';
      display: block;
      width: 100px;
      height: 2px;
      margin-top: 1rem;
      margin-left: 2px;
      background: #93c704
    }

    .h2--centered {
      text-align: center
    }

    .h2--centered::after {
      margin-left: auto;
      margin-right: auto
    }

    @-ms-viewport {
      width: device-width
    }

    html {
      -webkit-box-sizing: border-box;
      box-sizing: border-box;
      -ms-overflow-style: scrollbar
    }

    *,
    ::after,
    ::before {
      -webkit-box-sizing: inherit;
      box-sizing: inherit
    }

    .container,
    .header__container {
      width: 100%;
      padding-right: 15px;
      padding-left: 15px;
      margin-right: auto;
      margin-left: auto
    }

    .row {
      display: -webkit-box;
      display: -ms-flexbox;
      display: flex;
      -ms-flex-wrap: wrap;
      flex-wrap: wrap;
      margin-right: -15px;
      margin-left: -15px
    }

    .col-12,
    .col-md-6 {
      position: relative;
      width: 100%;
      min-height: 1px;
      padding-right: 15px;
      padding-left: 15px
    }

    .col-12 {
      -webkit-box-flex: 0;
      -ms-flex: 0 0 100%;
      flex: 0 0 100%;
      max-width: 100%
    }

    .align-self-center {
      -ms-flex-item-align: center !important;
      align-self: center !important
    }

    .social {
      list-style-type: none;
      margin-top: auto;
      padding: 0
    }

    .social__item {
      display: inline-block
    }

    .social__item a {
      position: relative;
      display: inline-block;
      padding: 10px;
      font-size: 14px;
      text-decoration: none
    }

    .header {
      position: fixed;
      top: 0;
      left: 0;
      right: 0;
      z-index: 99;
      padding: 12px 0;
      background: #3e3e3e;
      color: #fafafa
    }

    .header__container {
      position: relative;
      display: -webkit-box;
      display: -ms-flexbox;
      display: flex;
      -webkit-box-align: center;
      -ms-flex-align: center;
      align-items: center;
      -webkit-box-pack: justify;
      -ms-flex-pack: justify;
      justify-content: space-between
    }

    .header__logo {
      font-size: 1.75rem;
      line-height: 1;
      font-family: 'Source Sans Pro', sans-serif;
      font-weight: 600;
      white-space: nowrap
    }

    .header__logo>span {
      display: inline-block
    }

    .header__logo>span:not(:last-child) {
      margin-right: 4px
    }

    .header__logo--accent {
      background: #93c704;
      color: #fff;
      padding-left: 6px;
      padding-right: 6px
    }

    .header__logo-link {
      display: inline-block;
      text-decoration: none
    }

    .header__hamburger {
      display: -webkit-box;
      display: -ms-flexbox;
      display: flex;
      width: 24px;
      height: 24px;
      padding: 0;
      background: 0 0;
      border: 0;
      outline: 0
    }

    .header__hamburger span {
      position: relative;
      display: inline-block;
      margin: auto;
      width: 100%;
      height: 2px;
      background: #93c704
    }

    .header__hamburger span::after,
    .header__hamburger span::before {
      content: '';
      position: absolute;
      left: 0;
      width: 100%;
      height: 2px;
      background: #93c704
    }

    .header__hamburger span::before {
      top: -6px;
      -webkit-transform: rotate(0);
      transform: rotate(0)
    }

    .header__hamburger span::after {
      bottom: -6px;
      -webkit-transform: rotate(0);
      transform: rotate(0)
    }

    .header__nav {
      -webkit-transform: scaleY(0);
      transform: scaleY(0);
      position: fixed;
      top: 48px;
      bottom: 0;
      left: 0;
      display: -webkit-box;
      display: -ms-flexbox;
      display: flex;
      -webkit-box-orient: vertical;
      -webkit-box-direction: normal;
      -ms-flex-direction: column;
      flex-direction: column;
      width: 100%;
      padding-bottom: 24px;
      border-top: 1px solid rgba(255, 255, 255, .4);
      background: #3e3e3e;
      text-align: center;
      -webkit-transform-origin: top;
      transform-origin: top
    }

    .header__menu {
      list-style-type: none;
      padding: 0
    }

    .header__menu-item a {
      position: relative;
      display: inline-block;
      width: 100%;
      text-decoration: none;
      padding: 20px 0;
      font-size: 16px;
      line-height: 19px;
      font-family: 'Source Sans Pro', sans-serif;
      font-weight: 600;
      border-bottom: 1px solid rgba(255, 255, 255, .05)
    }

    .header__menu-item a.active {
      outline: 0;
      color: #93c704
    }

    .header__social .social__item {
      border-right: 1px solid rgba(101, 101, 101, .1)
    }

    .header__social .social__item:first-child {
      border-left: 1px solid rgba(101, 101, 101, .1)
    }

    .centered-block {
      padding-top: 5rem;
      padding-bottom: 5rem
    }

    .centered-block--welcome {
      padding-top: 2.5rem
    }

    .centered-block__text {
      text-align: center
    }

    .centered-block__text:not(:last-of-type) {
      margin-bottom: 1rem
    }

    .centered-block__text:last-of-type {
      margin-bottom: 1.5rem
    }

    .centered-block__img {
      width: 100%;
      max-width: 714px;
      margin-left: auto;
      margin-right: auto;
      -webkit-filter: drop-shadow(0 10px 5px rgba(0, 0, 0, .17));
      filter: drop-shadow(0 10px 5px rgba(0, 0, 0, .17))
    }

    .centered-block__img img {
      width: 100%;
      height: 100%;
      -o-object-fit: cover;
      object-fit: cover;
      -o-object-position: center;
      object-position: center
    }

    .contact {
      padding-top: 5rem;
      padding-bottom: 5rem
    }

    .contact .managers {
      margin-bottom: 2rem
    }

    .managers__text {
      text-align: center;
      color: #656565
    }

    .managers__contact {
      margin-top: 2rem;
      margin-bottom: 1rem
    }

    .managers__contact .manager-contacts {
      margin-bottom: 1rem
    }

    .manager-contacts {
      display: -webkit-box;
      display: -ms-flexbox;
      display: flex;
      -webkit-box-align: center;
      -ms-flex-align: center;
      align-items: center;
      max-width: 340px;
      margin-left: auto;
      margin-right: auto;
      padding: 10px 20px;
      -webkit-box-shadow: 0 2px 2px 0 rgba(62, 62, 62, .14), 0 3px 1px -2px rgba(62, 62, 62, .12), 0 1px 5px 0 rgba(62, 62, 62, .2);
      box-shadow: 0 2px 2px 0 rgba(62, 62, 62, .14), 0 3px 1px -2px rgba(62, 62, 62, .12), 0 1px 5px 0 rgba(62, 62, 62, .2)
    }

    .manager-contacts__avatar {
      width: 80px;
      height: 80px;
      margin-right: 2rem;
      border-radius: 50%;
      overflow: hidden;
      background: #656565;
      -webkit-box-shadow: 0 2px 2px 0 rgba(0, 0, 0, .14), 0 3px 1px -2px rgba(0, 0, 0, .12), 0 1px 5px 0 rgba(0, 0, 0, .2);
      box-shadow: 0 2px 2px 0 rgba(0, 0, 0, .14), 0 3px 1px -2px rgba(0, 0, 0, .12), 0 1px 5px 0 rgba(0, 0, 0, .2)
    }

    .manager-contacts__avatar img {
      width: 100%;
      height: 100%;
      -o-object-fit: cover;
      object-fit: cover;
      -o-object-position: center;
      object-position: center
    }

    .manager-contacts__connect p {
      margin-bottom: 1rem;
      line-height: 1.2
    }

    .manager-contacts__connect p>strong {
      font-size: 1.05rem
    }

    .manager-contacts__connect p>span {
      display: block;
      font-size: .95rem;
      font-family: 'Source Sans Pro', sans-serif;
      font-weight: 300
    }

    .manager-contacts__chat {
      display: -webkit-inline-box;
      display: -ms-inline-flexbox;
      display: inline-flex;
      font-size: 1rem;
      padding: 4px 12px;
      text-align: center;
      line-height: 26px;
      color: #fff;
      text-decoration: none
    }

    .manager-contacts__chat::before {
      display: inline-block;
      margin-right: 6px;
      font-family: ols;
      font-size: 1rem
    }

    .manager-contacts__chat--skype {
      margin-right: 6px;
      margin-bottom: 6px;
      background: #01aef2
    }

    .manager-contacts__chat--skype::before {
      content: '\e91c'
    }

    .manager-contacts__chat--telegram {
      background: #01aef2
    }

    .manager-contacts__chat--telegram::before {
      content: '\e91d'
    }

    .breadcrumps {
      padding-top: calc(48px + 2rem)
    }

    .breadcrumps ul {
      list-style-type: none
    }

    .breadcrumps li {
      display: -webkit-inline-box;
      display: -ms-inline-flexbox;
      display: inline-flex;
      margin-right: 6px;
      font-size: 1rem
    }

    .breadcrumps li:not(:last-child) {
      color: #93c704
    }

    .breadcrumps li:not(:last-child)::after {
      content: '\e916';
      display: -webkit-inline-box;
      display: -ms-inline-flexbox;
      display: inline-flex;
      font-family: ols;
      padding-left: 6px
    }

    .breadcrumps li a {
      text-decoration: none
    }

    @media (min-width:576px) {

      .container,
      .header__container {
        max-width: 550px
      }

      .container,
      .header__container {
        max-width: 550px
      }

      .header__menu,
      .header__social {
        width: 100%;
        max-width: 540px;
        margin-left: auto;
        margin-right: auto
      }
    }

    @media (min-width:768px) {

      .container,
      .header__container {
        max-width: 744px
      }

      .col-md-6 {
        -webkit-box-flex: 0;
        -ms-flex: 0 0 50%;
        flex: 0 0 50%;
        max-width: 50%
      }

      .container,
      .header__container {
        max-width: 744px
      }

      .col-md-6 {
        -webkit-box-flex: 0;
        -ms-flex: 0 0 50%;
        flex: 0 0 50%;
        max-width: 50%
      }

      .header {
        padding: 16px 0
      }

      .header__hamburger {
        width: 35px
      }

      .header__hamburger span::before {
        top: -8px
      }

      .header__hamburger span::after {
        bottom: -8px
      }

      .header__nav {
        top: 56px
      }

      .header__menu,
      .header__social {
        max-width: 714px
      }

      .contact .managers {
        margin-bottom: 0
      }

      .breadcrumps {
        padding-top: calc(56px + 2rem)
      }
    }

    @media (min-width:992px) {

      .container,
      .header__container {
        max-width: 990px
      }

      :root {
        font-size: 16px;
        line-height: 1.75
      }

      .h2,
      h2 {
        font-size: 36px
      }

      .container,
      .header__container {
        max-width: 990px
      }

      .social {
        margin-top: initial;
        display: -webkit-inline-box;
        display: -ms-inline-flexbox;
        display: inline-flex;
        width: auto;
        margin-left: 0;
        margin-right: 0
      }

      .social__item a {
        padding-left: 9px;
        padding-right: 9px
      }

      .header {
        padding: 0;
        background: 0 0;
        color: #656565;
        border-bottom: 1px solid rgba(101, 101, 101, .2)
      }

      .header__logo>span {
        display: inline-block
      }

      .header__logo>span:not(:last-child) {
        margin-right: 3px
      }

      .header__hamburger {
        display: none
      }

      .header__nav {
        position: initial;
        -webkit-box-orient: horizontal;
        -webkit-box-direction: normal;
        -ms-flex-direction: row;
        flex-direction: row;
        -webkit-box-pack: justify;
        -ms-flex-pack: justify;
        justify-content: space-between;
        -webkit-box-align: center;
        -ms-flex-align: center;
        align-items: center;
        -webkit-transform: scaleY(1);
        transform: scaleY(1);
        padding: 14px 0;
        background: 0 0;
        border-top: none
      }

      .header__menu {
        display: -webkit-inline-box;
        display: -ms-inline-flexbox;
        display: inline-flex;
        -webkit-box-align: center;
        -ms-flex-align: center;
        align-items: center;
        -webkit-box-pack: justify;
        -ms-flex-pack: justify;
        justify-content: space-between;
        width: auto
      }

      .header__menu-item a {
        padding: 10px 20px;
        font-size: 14px;
        line-height: 16px;
        border-bottom: none
      }

      .header__social {
        margin-top: initial;
        display: -webkit-inline-box;
        display: -ms-inline-flexbox;
        display: inline-flex;
        width: auto;
        margin-left: 0;
        margin-right: 0
      }

      .header__menu,
      .header__social {
        max-width: initial;
        padding-left: 20px
      }

      .breadcrumps {
        padding-top: calc(64px + 2rem)
      }
    }

    @media (min-width:1200px) {

      .container,
      .header__container {
        max-width: 1170px
      }

      .container,
      .header__container {
        max-width: 1170px
      }
    }

    @font-face {
      font-family: "Ionicons";
      src: url("https://code.ionicframework.com/ionicons/2.0.1/fonts/ionicons.eot?v=2.0.1");
      src: url("https://code.ionicframework.com/ionicons/2.0.1/fonts/ionicons.eot?v=2.0.1#iefix") format("embedded-opentype"), url("https://code.ionicframework.com/ionicons/2.0.1/fonts/ionicons.ttf?v=2.0.1") format("truetype"), url("https://code.ionicframework.com/ionicons/2.0.1/fonts/ionicons.woff?v=2.0.1") format("woff"), url("https://code.ionicframework.com/ionicons/2.0.1/fonts/ionicons.svg?v=2.0.1#Ionicons") format("svg");
      font-weight: normal;
      font-style: normal;
    }

    .accordion a {
      position: relative;
      display: -webkit-box;
      display: -webkit-flex;
      display: -ms-flexbox;
      display: flex;
      -webkit-box-orient: vertical;
      -webkit-box-direction: normal;
      -webkit-flex-direction: column;
      -ms-flex-direction: column;
      flex-direction: column;
      width: 100%;
      padding: 1rem 3rem 1rem 1rem;
      color: #7288a2;
      font-size: 1.15rem;
      font-weight: 400;
      border-bottom: 1px solid #e5e5e5;
    }

    .accordion a:hover,
    .accordion a:hover::after {
      cursor: pointer;
      color: #03b5d2;
    }

    .accordion a:hover::after {
      border: 1px solid #03b5d2;
    }

    .accordion a.active {
      color: #03b5d2;
      border-bottom: 1px solid #03b5d2;
    }

    .accordion a::after {
      font-family: 'Ionicons';
      content: '\f218';
      position: absolute;
      float: right;
      right: 1rem;
      font-size: 1rem;
      color: #7288a2;
      padding: 2px;
      width: 30px;
      height: 30px;
      -webkit-border-radius: 50%;
      -moz-border-radius: 50%;
      border-radius: 50%;
      border: 1px solid #7288a2;
      text-align: center;
    }

    .accordion a.active::after {
      font-family: 'Ionicons';
      content: '\f209';
      color: #03b5d2;
      border: 1px solid #03b5d2;
    }

    .accordion .content {
      opacity: 0;
      padding: 0 1rem;
      max-height: 0;
      border-bottom: 1px solid #e5e5e5;
      overflow: hidden;
      clear: both;
      -webkit-transition: all 0.2s ease 0.15s;
      -o-transition: all 0.2s ease 0.15s;
      transition: all 0.2s ease 0.15s;
    }

    .accordion .content p {
      font-size: 1rem;
      font-weight: 300;
    }

    .accordion .content.active {
      opacity: 1;
      padding: 1rem;
      max-height: 100%;
      -webkit-transition: all 0.35s ease 0.15s;
      -o-transition: all 0.35s ease 0.15s;
      transition: all 0.35s ease 0.15s;
    }
  </style>


  <link rel="preload" href="css/style.min_new2.css" media="screen" as="style" onload="this.onload=null;this.rel='stylesheet'">
  <link rel="preload" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" media="screen" as="style" onload="this.onload=null;this.rel='stylesheet'">
  <link rel="preload" href="css/min-width-576px.min2.css" media="screen and (min-width:576px)" as="style" onload="this.onload=null;this.rel='stylesheet'">
  <link rel="preload" href="css/min-width-768px.min2.css" media="screen and (min-width:768px)" as="style" onload="this.onload=null;this.rel='stylesheet'">
  <link rel="preload" href="css/min-width-992px.min2.css" media="screen and (min-width:992px)" as="style" onload="this.onload=null;this.rel='stylesheet'">
  <link rel="preload" href="css/min-width-1200px.min2.css" media="screen and (min-width:1200px)" as="style" onload="this.onload=null;this.rel='stylesheet'">
  <link rel="preload" href="css/min-width-1800px.min2.css" media="screen and (min-width:1800px)" as="style" onload="this.onload=null;this.rel='stylesheet'">
  <link rel="stylesheet" href="css/pr-spe.css">
  <noscript>
    <link rel="stylesheet" href="css/style.min_new2.css" media="screen">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" media="screen">
    <link rel="stylesheet" href="css/min-width-576px.min2.css" media="screen and (min-width:576px)">
    <link rel="stylesheet" href="css/min-width-768px.min2.css" media="screen and (min-width:768px)">
    <link rel="stylesheet" href="css/min-width-992px.min2.css" media="screen and (min-width:992px)">
    <link rel="stylesheet" href="css/min-width-1200px.min.css" media="screen and (min-width:1200px)">
    <link rel="stylesheet" href="css/min-width-1800px.min2.css" media="screen and (min-width:1800px)">

  </noscript>
  <script>
    const items = document.querySelectorAll(".accordion a");

    function toggleAccordion() {
      this.classList.toggle('active');
      this.nextElementSibling.classList.toggle('active');
    }

    items.forEach(item => item.addEventListener('click', toggleAccordion));
  </script>
  <script>
    ! function(t) {
      "use strict";
      t.loadCSS || (t.loadCSS = function() {});
      var e = loadCSS.relpreload = {};
      if (e.support = function() {
          var e;
          try {
            e = t.document.createElement("link").relList.supports("preload")
          } catch (t) {
            e = !1
          }
          return function() {
            return e
          }
        }(), e.bindMediaToggle = function(t) {
          var e = t.media || "all";

          function a() {
            t.media = e
          }
          t.addEventListener ? t.addEventListener("load", a) : t.attachEvent && t.attachEvent("onload", a), setTimeout(function() {
            t.rel = "stylesheet", t.media = "only x"
          }), setTimeout(a, 3e3)
        }, e.poly = function() {
          if (!e.support())
            for (var a = t.document.getElementsByTagName("link"), n = 0; n < a.length; n++) {
              var o = a[n];
              "preload" !== o.rel || "style" !== o.getAttribute("as") || o.getAttribute("data-loadcss") || (o.setAttribute("data-loadcss", !0), e.bindMediaToggle(o))
            }
        }, !e.support()) {
        e.poly();
        var a = t.setInterval(e.poly, 500);
        t.addEventListener ? t.addEventListener("load", function() {
          e.poly(), t.clearInterval(a)
        }) : t.attachEvent && t.attachEvent("onload", function() {
          e.poly(), t.clearInterval(a)
        })
      }
      "undefined" != typeof exports ? exports.loadCSS = loadCSS : t.loadCSS = loadCSS
    }("undefined" != typeof global ? global : this);
  </script>
  <script src="js/lazysizes.min.js" async="async"></script>
  <script src="js/script.min.js" async="async"></script>
  <script src="js/components/openModalScript.js"></script>
  <style>
    .form-div {
      float: left;
      margin-right: 2rem;
    }
  </style>
  <script>
    window.addEventListener('click', () => {
      if (event.target.classList.contains('more-title')) {
        if (!event.target.classList.contains('active')) {
          let el = event.target.closest('.more-block');
          let down = el.querySelector('.more-items');
          event.target.nextElementSibling.style.height = down.offsetHeight + 'px';
          event.target.classList.add('active');
        } else {
          let el = event.target.closest('.more-block');
          let down = el.querySelector('.more-items');
          event.target.nextElementSibling.style.height = 0 + 'px';
          event.target.classList.remove('active');
        }
      }
    })
  </script>
</body>

</html>