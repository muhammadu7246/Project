<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <title>ProChat || Real time Chat Application</title>
    <link rel="shortcut icon" href="../images/favicon.ico" />

    <!-- Google Font -->
    <link
      href="https://fonts.googleapis.com/css?family=Sarabun:400,500,600,700|Rubik:300,400,500"
      rel="stylesheet"
    />
    <!-- cndk.beforeafter css -->
    <link rel="stylesheet" type="text/css" href="../css/cndk.beforeafter.css" />
    <!--Material Icon -->
    <link
      rel="stylesheet"
      type="text/css"
      href="https://cdn.materialdesignicons.com/4.7.95/css/materialdesignicons.min.css"
    />
    <!-- Bootstrap Css-->
    <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css" />
    <!-- Custom Css -->
    <link rel="stylesheet" type="text/css" href="../css/style.css" />
    <link rel="stylesheet" href="../css/colors/red.css" />
  </head>

  <body
    data-spy="scroll"
    data-target="#data-scroll"
    data-hijacking="on"
    data-animation="scaleDown"
  >
    <!-- STRAT NAVBAR -->
    <nav
      class="navbar navbar-expand-lg fixed-top navbar-custom sticky sticky-dark"
    >
      <div class="container-fluid">
        <!-- LOGO -->
        <a class="navbar-brand logo text-uppercase" href="index.html">
          <img
            src="../../index\assets\img\logo/logo.png"
            width="80px"
            height="80px"
            alt="logo"
            height="20"
          />
        </a>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarCollapse"
          aria-controls="navbarCollapse"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <i class="mdi mdi-menu"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
          <ul class="navbar-nav navbar-center ms-auto" id="mySidenav">
            <li class="nav-item">
              <a href="#home" class="nav-link">Home</a>
            </li>
            
            <li class="nav-item">
              <a href="#features" class="nav-link">Features</a>
            </li>
            <li class="nav-item">
              <a href="registration.php" target="_blank" class="nav-link"
                >Registration</a
              >
            </li>
            <li class="nav-item">
              <a href="#contact" class="nav-link">Contact Us</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- END NAVBAR -->

    <!--START HOME-->
    <section
      class="section bg-home home-half bg-pattern text-white-50"
      id="home"
    >
      <div class="bg-overlay"></div>
      <div class="container-fluid">
        <div class="row align-items-center">
          <div class="col-lg-5">
            <h4 class="home-small-title">Real Time chatting and Calling</h4>
            <h1 class="home-title fw-normal text-white">
              <b class="text-primary">ProChat</b> - Chat App Platform
            </h1>
            <p class="padding-t-15 home-desc mx-auto">
              <b class="text-white">ProChat</b> ProChat offers fast, secure, and
              easy-to-use real-time messaging for private or group chats,
              perfect for everyday communication.
            </p>

            <p class="margin-t-30 mb-5">
              <a
                href="https://1.envato.market/doot-react"
                target="_blank"
                class="btn btn-custom waves-effect waves-light check-demo"
                ><i class="mdi mdi-arrow-down me-1"></i>Login
              </a>

              <a
                href="docs/index.html"
                target="_blank"
                class="btn btn-success border-0 waves-effect waves-light check-demo"
                >Registrer it Here</a
              >
            </p>
          </div>

          <div class="col-lg-6 ms-lg-auto">
            <div class="row justify-content-between mb-2">
              <div class="col-auto">
                <a
                  href="http://doot-light.react.themesbrand.com/"
                  target="_blank"
                >
                  <span class="badge bg-secondary rounded-pill px-3 py-2 h5"
                    >Light</span
                  >
                </a>
              </div>

              <div class="col-auto">
                <a
                  href="http://doot-rtl.react.themesbrand.com/"
                  target="_blank"
                >
                  <span
                    class="badge bg-custom rounded-pill px-3 py-2 h5 text-white"
                    >RTL</span
                  >
                </a>
              </div>

              <div class="col-auto">
                <a
                  href="http://doot-dark.react.themesbrand.com/"
                  target="_blank"
                >
                  <span class="badge bg-dark rounded-pill px-3 py-2 h5"
                    >Dark</span
                  >
                </a>
              </div>
            </div>
            <div class="beforeafterdefault">
              <div data-type="data-type-image">
                <div data-type="before"><img src="../images/image1.png" /></div>
                <div data-type="after"><img src="../images/image2.png" /></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--END HOME-->

    <!--START SERVICES-->
    <section class="section bg-light" id="features">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-7">
            <h1 class="section-title text-center">Key Features</h1>
            <div class="section-title-border margin-t-20"></div>
            <p
              class="section-subtitle text-muted text-center padding-t-30 font-secondary"
            >
              ProChat - Stay connected effortlessly with ProChat – simple,
              reliable, and built for quick conversations, anytime and anywhere.
            </p>
          </div>
        </div>
        
        <div class="row margin-t-30">
          <div class="col-lg-4 margin-t-20">
            <div class="services-box">
              <div class="d-flex">
                <i class="mdi mdi-devices text-custom"></i>
                <div class="flex-grow-1 ms-4">
                  <h4>Fully Responsive</h4>
                  <p class="pt-2 text-muted">
                    Fully responsive with all devices layout using bootstrap's
                    latest version.
                  </p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 margin-t-20">
            <div class="services-box">
              <div class="d-flex">
                <i class="mdi mdi-web text-custom"></i>
                <div class="flex-grow-1 ms-4">
                  <h4>Cross Browser</h4>
                  <p class="pt-2 text-muted">
                    Doot is fully compatible with Cross-browser.
                  </p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 margin-t-20">
            <div class="services-box">
                <div class="d-flex">
                    <i class="mdi mdi-tune text-custom"></i>
                    <div class="flex-grow-1 ms-4">
                        <h4>Easy Customization</h4>
                        <p class="pt-2 text-muted">All the components are reusable and easy to customize as needed.</p>
                    </div>
                </div>
            </div>
        </div>
        </div>
        <div class="row">
          <div class="col-lg-4 margin-t-20">
            <div class="services-box">
              <div class="d-flex">
                <i class="mdi mdi-update text-custom"></i>
                <div class="flex-grow-1 ms-4">
                  <h4>Lifetime Free Updates</h4>
                  <p class="pt-2 text-muted">
                    No need to pay any more to get updated versions in the
                    future.
                  </p>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 margin-t-20">
            <div class="services-box">
              <div class="d-flex">
                <i class="mdi mdi-lifebuoy text-custom"></i>
                <div class="flex-grow-1 ms-4">
                  <h4>1 Day Support</h4>
                  <p class="pt-2 text-muted">
                    We are providing quick support to all the clients.
                  </p>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 margin-t-20">
            <div class="services-box">
              <div class="d-flex">
                <i class="mdi mdi-theme-light-dark text-custom"></i>
                <div class="flex-grow-1 ms-4">
                  <h4>Dark, Light & RTL Layouts</h4>
                  <p class="pt-2 text-muted">
                    Choose a perfect layout for your next app.
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--START SERVICES-->

    <!--START WEBSITE-DESCRIPTION-->
    <section class="section bg-web-desc">
      <div class="bg-overlay"></div>
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="text-white">Start your Chatting with your friends</h2>
            <p class="padding-t-15 home-desc text-white-50 mx-auto">
                ProChat makes chatting easy, with a user-friendly interface, instant messaging, and secure conversations. Connect with anyone, anytime, hassle-free.
            </p>
            <a
              href="https://1.envato.market/doot-react"
              target="_blank"
              class="btn btn-custom waves-effect waves-light check-demo"
              ><i class="mdi mdi-arrow-up me-2"></i>Chat Us Now</a
            >
          </div>
        </div>
      </div>
    </section>
    <!--END WEBSITE-DESCRIPTION-->

   

    <!-- CONTACT FORM START-->
    <section class="section" id="contact">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 offset-lg-2">
            <h1 class="section-title text-center">Get In Touch</h1>
            <div class="section-title-border margin-t-20"></div>
            <p
              class="section-subtitle text-muted text-center font-secondary padding-t-30"
            >
            ProChat Support is available Monday to Friday, 10:00 AM to 6:00 PM IST, with an estimated response time of 1 business day. Please review the theme’s documentation before submitting a ticket. Support excludes theme customization, installation, or third-party plugins and software assistance.
            </p>
          </div>
        </div>
        <div class="row justify-content-center">
          <div class="col-lg-8">
            <div class="custom-form mt-4 pt-4">
              <div id="message"></div>
              <form
                method="post"
                action="php/contact.php"
                name="contact-form"
                id="contact-form"
              >
                <div class="row">
                  <div class="col-lg-6">
                    <div class="form-group mt-2">
                      <input
                        name="name"
                        id="name"
                        type="text"
                        class="form-control"
                        placeholder="Your name*"
                      />
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="form-group mt-2">
                      <input
                        name="email"
                        id="email"
                        type="email"
                        class="form-control"
                        placeholder="Your email*"
                      />
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-lg-12">
                    <div class="form-group mt-2">
                      <input
                        type="text"
                        class="form-control"
                        id="subject"
                        placeholder="Your Subject.."
                      />
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-lg-12">
                    <div class="form-group mt-2">
                      <textarea
                        name="comments"
                        id="comments"
                        rows="4"
                        class="form-control"
                        placeholder="Your message..."
                      ></textarea>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-lg-12 text-right">
                    <input
                      type="submit"
                      id="submit"
                      name="send"
                      class="submitBnt btn btn-custom"
                      value="Send Message"
                    />
                    <div id="simple-msg"></div>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- CONTACT FORM END-->

    <!--START FOOTER ALTER-->
    <div class="footer-alt">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="float-start pull-none">
              <p class="copy-rights text-muted mb-3 mb-sm-0">
                <script>
                  document.write(new Date().getFullYear());
                </script>
                © ProChat -
                <a
                  href="https://themesbrand.com/"
                  class="text-reset"
                  target="_blank"
                  >Real Time Chat Application</a
                >
              </p>
            </div>
            <div class="float-end pull-none">
              <ul class="list-inline social m-0">
                <li class="list-inline-item">
                  <a
                    href=""
                    target="_blank"
                    class="social-icon"
                    ><i class="mdi mdi-facebook"></i
                  ></a>
                </li>
                <li class="list-inline-item">
                  <a
                    href=""
                    target="_blank"
                    class="social-icon"
                    ><i class="mdi mdi-twitter"></i
                  ></a>
                </li>
                <li class="list-inline-item">
                  <a
                    href=""
                    target="_blank"
                    class="social-icon"
                    ><i class="mdi mdi-linkedin"></i
                  ></a>
                </li>
                <li class="list-inline-item">
                  <a
                    href=""
                    target="_blank"
                    class="social-icon"
                    ><i class="mdi mdi-behance"></i
                  ></a>
                </li>
                <li class="list-inline-item">
                  <a
                    href=""
                    target="_blank"
                    class="social-icon"
                    ><i class="mdi mdi-dribbble"></i
                  ></a>
                </li>
              </ul>
            </div>
            <div class="clearfix"></div>
          </div>
        </div>
      </div>
    </div>
    <!--START FOOTER ALTER-->
    <!-- JAVASCRIPTS -->
    <script src="../js/jquery.min.js"></script>
    <script src="../js/bootstrap.bundle.min.js"></script>
    <script src="../js/jquery.easing.min.js"></script>
    <script src="../js/scrollspy.min.js"></script>
    <!-- Sticky Header -->
    <script src="../js/jquery.sticky.js"></script>
    <!-- cndk.beforeafter js -->
    <script src="../js/cndk.beforeafter.js"></script>

    <script src="../js/app.js"></script>

   
  </body>
</html>
