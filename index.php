<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <link rel="stylesheet" href="assets/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/ec9df8cfa1.js" crossorigin="anonymous"></script>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
</head>
<body>
    <nav class="navbar navbar-expand-lg ">
        <div class="container-lg">
          <a class="navbar-brand fw-bold" href="#home">My <span class="text-danger">Portfolio</span></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#about">About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#projects">Projects</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#certificates">Certificates</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#contact">Contact</a>
              </li>
            </ul>
          </div>
        </div>
    </nav>

    <main class="container-fluid pt-5">
      <section id="home" class="pt-1 min-vh-75">
        <div class="row d-flex align-items-center">
          <div class="col-md-6 left-section">
            <h1 class="text-center fw-medium" data-aos="zoom-in" data-aos-delay="300"  data-aos-duration="1000">Hi, I'm Lord Cedrix D. Dacanay <br>
            A front-end web developer
            </h1>
            <div class="col-12 d-flex justify-content-center" style="gap:20px;">
              <a role="button" class="btn btn-outline-danger resume-btn p-3" data-aos="flip-left"  data-aos-delay="800" data-aos-duration="1000" href="./file/Resume_Dacanay.pdf" download ="Dacanay_CV">Download CV</a>
              <a role="button" class="btn btn-danger  p-3" href="#contact"  data-aos="flip-left"  data-aos-delay="1200" data-aos-duration="1000">Contact Me</a>
            </div> 
          </div>
          <div class="col-md-6 right-section pt-0 sm-pt-5">
            <div class="container d-flex justify-content-center">
              <div class="img-container" data-aos="fade-down" data-aos-delay="500"  data-aos-duration="1000">
                <img src="assets/images/my_pic/my_pic.png" alt="Cedrix picture" class="img-fluid">
              </div>
            </div>
          </div>
        </div>
      </section>

      <section id="about" class="py-3 min-vh-75">
        <div class="container-lg">
          <div class="row">
            <div class="col-md-6">
              <div class="img-about-container rounded" data-aos="flip-left" data-aos-delay="300" data-aos-duration="900">
                <img src="./assets/images/my_pic/my_pic01.png" alt="about" class="img-fluid ">
              </div>
            </div>
            
            <div class="col-md-6">
              <h1 class="text-center text-sm-start pt-2 fw-bold" style="font-family: 'Montserrat';"data-aos="fade-down" data-aos-delay="500" data-aos-duration="900">About me</h1>
              <p style="text-align: justify;" data-aos="fade-left" data-aos-delay="800" data-aos-duration="900" >
                Hello! I'm Lord Cedrix D. Dacanay, a web developer diving into the vast world of web development. Currently exploring front-end development with HTML5, CSS, Bootstrap 5, and JavaScript, I craft visually appealing and user-friendly interfaces. Responsive website creation is both challenging and rewarding, showcasing my continuous progress. Venturing into basics of PHP on the back-end adds versatility to my skill set. As a passionate beginner, I find joy in learning and overcoming challenges. The endless potential for growth and innovation in web development excites me. Committed to staying updated, I'm eager to transform passion into hands-on experience. Seeking internship opportunities to contribute fresh perspectives and gain valuable insights. Let's connect!
              </p>
              <div class="row">
                <div class="col-6">
                  <h6 class="fw-bold" data-aos="zoom-in" data-aos-delay="1200" data-aos-duration="900">Connect with me:</h6>
                  <ul class="contact-menu">
                    <li data-aos="flip-left" data-aos-delay="1900" data-aos-duration="900">
                      <a href="https://www.facebook.com/DrixxCee" target="_blank">
                        <i class="bi bi-facebook fs-4"></i>
                      </a>
                    </li>
                    <li data-aos="flip-left" data-aos-delay="2100" data-aos-duration="900">
                      <a href="https://www.instagram.com/sicedto/" target="_blank">
                        <span class="rounded-circle instagram-wrapper fs-5">
                          <i class="bi bi-instagram text-light fs-5"></i>
                        </span>
                      </a>
                    </li>
                    <li data-aos="flip-left" data-aos-delay="2300" data-aos-duration="900">
                      <a href="https://www.linkedin.com/public-profile/settings?lipi=urn%3Ali%3Apage%3Ad_flagship3_profile_self_edit_contact-info%3BRlYDpnQZRhyBTjV7rt%2FmIw%3D%3D" target="_blank">
                        <i class="bi bi-linkedin fs-4"></i>
                      </a>
                    </li>
                  </ul>
                </div>
                <div class="col-6">
                  <h6 class="fw-bold" data-aos="zoom-in" data-aos-delay="1200" data-aos-duration="900">My Skills:</h6>
                  <ul class="contact-menu">
                    <li data-aos="flip-left" data-aos-delay="1900" data-aos-duration="900">
                      <a href="https://html.spec.whatwg.org/multipage/" target="_blank" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="HTML5">
                        <i class="fa-brands fa-html5 fs-2" ></i>
                      </a>
                    </li>
                    <li data-aos="flip-left" data-aos-delay="2100" data-aos-duration="900">
                      <a href="https://web.dev/learn/css" target="_blank" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="CSS">
                        <i class="fa-brands fa-css3-alt fs-2"></i>
                      </a>
                    </li>
                    <li data-aos="flip-left" data-aos-delay="2300" data-aos-duration="900">
                      <a href="https://developer.mozilla.org/en-US/docs/Web/JavaScript" target = "_blank" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="JavaScript">
                        <i class="fa-brands fa-js fs-2"></i>
                      </a>
                    </li>
                    <li data-aos="flip-left" data-aos-delay="2500" data-aos-duration="900">
                      <a href="https://blog.getbootstrap.com/" target = "_blank" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Bootstrap 5">
                        <i class="fa-brands fa-bootstrap fs-2"></i>
                      </a>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="row" data-aos="zoom-in" data-aos-delay="2300" data-aos-duration="900">
                <div class="col-12"><h6 class="fw-bold">Educational Background:</h6></div>
                <div class="col-12">
                  <ul>
                    <li class="fw-medium">Bachelor of Science in Information and Technology</li>
                      <span class="text-muted">Adamson University | 2020-2024</span>

                    <li class="fw-medium">TVL - ICT</li>
                      <span class="text-muted">Philippine Christian University | 2018-2020</span>

                    <li class="fw-medium">Junior High School</li>
                      <span class="text-muted">Manual A. Roxas High School | 2014-2018</span>

                    <li class="fw-medium">Primary Level</li>
                      <span class="text-muted">Jacinto Zamora Elementary School | 2008-2014</span>
                  </ul>
                </div>
                <div class="col-3">

                </div>
                <div class="col-3">

                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section id="projects" class="min-vh-75 py-3">
        <div class="container-lg">
          <div class="row">
            <div class="col-12">
              <h1 class="text-center fw-bold" data-aos="zoom-in" data-aos-delay="500" data-aos-duration="1000">My Project</h1>
            </div>
          </div>
          <div class="row d-flex justify-content-center align-items-center mt-2">
            <div class="col-md-12">
              <div class="card mb-3 project-card" data-aos="zoom-out" data-aos-delay="800" data-aos-duration="1000">
                <img src="./assets/images/project/capstone_image.png" class="card-img-top img-fluid" alt="...">
                <div class="card-body text-center">
                  <h5 class="card-title fw-bold">SafeSpace website<br></h5>
                  <p class="card-text mb-0">Our capstone project. It is an online virtual service dedicated for people living with HIV.</p>
                  <a href="https://safespace-ph.com/" target="_blank" class="btn text-primary fw-medium visit-btn">
                    Visit website <span><i class="bi bi-arrow-right"></i></span>
                  </a>
                </div>
              </div>
            </div>
        </div>
      </section>

      <section id="certificates" class="min-vh-75 py-3">
        <div class="container-lg">
          <div class="row">
            <div class="col-12 text-center">
              <h1 class="fw-bold" data-aos="zoom-in" data-aos-delay="500" data-aos-duration="800">My Certificates</h1>
            </div>
          </div>
          <div class="row g-3 py-3">
            <div class="col-lg-6 col-md-6">
              <div class="cert-container" data-aos="flip-left" data-aos-delay="800" data-aos-duration="800">
                <img src="assets/images/certificates/certificate01.png" alt="certificate 1" class="img-fluid">
              </div>
            </div>
            <div class="col-lg-6 col-md-6">
              <div class="cert-container"  data-aos="flip-left" data-aos-delay="1000" data-aos-duration="800">
                <img src="assets/images/certificates/certificate02.png" alt="certificate 1" class="img-fluid">
              </div>
            </div>
            <div class="col-lg-6 col-md-6">
              <div class="cert-container"  data-aos="flip-left" data-aos-delay="1200" data-aos-duration="800">
                <img src="assets/images/certificates/certficate03.png" alt="certificate 1" class="img-fluid">
              </div>
            </div>
            <div class="col-lg-6 col-md-6">
              <div class="cert-container" data-aos="flip-left" data-aos-delay="1400" data-aos-duration="800">
                <img src="assets/images/certificates/certificate05.png" alt="certificate 1" class="img-fluid">
              </div>
            </div>
          </div>
        </div>
      </section>

      <section id="contact" class="min-vh-25 py-3">
        <div class="container-lg">
          <div class="row">
            <div class="col-12 text-center">
              <h1 class="fw-bold">Contact Me</h1>
            </div>
            <div class="row py-3">
              <div class="col-md-6 d-flex flex-column">
                <div class="contact-item mb-3">
                  <div class="icon fs-4 text-danger">
                    <i class="bi bi-envelope-at"></i>
                  </div>
                  <div class="text ms-3">
                    <h3 class="fs-5">Email</h3>
                    <p class="text-muted m-0">cedrixdacanay27@gmail.com</p>
                  </div>
                </div>
                <div class="contact-item mb-3">
                  <div class="icon fs-4 text-danger">
                    <i class="bi bi-telephone"></i>
                  </div>
                  <div class="text ms-3">
                    <h3 class="fs-5">Phone</h3>
                    <p class="text-muted m-0">0928-219-6134</p>
                  </div>
                </div>
                <div class="contact-item mb-3">
                  <div class="icon fs-4 text-danger">
                    <i class="bi bi-geo-alt"></i>
                  </div>
                  <div class="text ms-3">
                    <h3 class="fs-5">My Address</h3>
                    <p class="text-muted m-0">2124 Kahilom II, Pandacan Manila.</p>
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <form action="email.php" method="POST">
                  <div class="form-floating mb-3">
                      <input type="email" class="form-control" name="email" id="emailInput" placeholder="name@example.com" required>
                      <label for="emailInput">Email address</label>
                  </div>
                  <div class="form-floating mb-3">
                      <input type="text" class="form-control" name="name" id="nameInput" placeholder="Your name" required>
                      <label for="nameInput">Your name</label>
                  </div>
                  <div class="form-floating mb-3">
                      <textarea class="form-control" name="message" placeholder="Leave a comment here" id="messageTextarea" style="min-height: 300px;" required></textarea>
                      <label for="messageTextarea">Comments</label>
                  </div>
                  <div class="col-12">
                      <button type="submit" class="btn btn-danger px-4" name="send">Send Message</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </section>

      <button type="button" class="btn btn-danger btn-floating btn-lg" id="btn-back-to-top"   style="z-index: 2; display: none;">
        <i class="fas fa-arrow-up" aria-hidden="true"></i>
    </button>
    </main>

    <footer>
      <div class="container-fluid py-3">
        <div class="row d-flex align-items-center justify-content-space-between">
            <div class="col-4">
              <ul class="contact-menu">
                <li>
                  <a href="https://www.facebook.com/DrixxCee" target="_blank">
                    <i class="bi bi-facebook fs-4"></i>
                  </a>
                </li>
                <li>
                  <a href="https://www.instagram.com/sicedto/" target="_blank">
                    <span class="rounded-circle instagram-wrapper fs-5">
                      <i class="bi bi-instagram text-light fs-5"></i>
                    </span>
                  </a>
                </li>
                <li>
                  <a href="https://www.linkedin.com/public-profile/settings?lipi=urn%3Ali%3Apage%3Ad_flagship3_profile_self_edit_contact-info%3BRlYDpnQZRhyBTjV7rt%2FmIw%3D%3D" target="_blank">
                    <i class="bi bi-linkedin fs-4"></i>
                  </a>
                </li>
              </ul>
            </div>  
            <div class="col-4 text-center">
              <h6 class="text-muted">&copy; 2023 Cedrix</h6>
            </div>
            <div class="col-4 d-flex justify-content-end">
              <a role="button" class="btn btn-outline-danger resume-btn" href="./file/Resume_Dacanay.pdf" download ="Dacanay_CV" style="font-size: .7rem;">Download CV</a>
            </div>
        </div>
      </div>
     
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
       AOS.init();
      const tooltipTriggerList = document.querySelectorAll('[data-bs-toggle="tooltip"]');
      const tooltipList = [...tooltipTriggerList].map(tooltipTriggerEl => new bootstrap.Tooltip(tooltipTriggerEl));
    </script>
    <script src="assets/index.js"></script>
</body>
</html>