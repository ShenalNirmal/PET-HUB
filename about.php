<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <title>PET HUB</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta content="Free HTML Templates" name="keywords" />
    <meta content="Free HTML Templates" name="description" />

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon" />

    <!-- Google Web Fonts -->
    <link
      href="https://fonts.googleapis.com/css2?family=Nunito+Sans&family=Nunito:wght@600;700;800&display=swap"
      rel="stylesheet"
    />

    <!-- Font Awesome -->
    <link
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css"
      rel="stylesheet"
    />

    <!-- Flaticon Font -->
    <link href="lib/flaticon/font/flaticon.css" rel="stylesheet" />

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet" />
    <link
      href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css"
      rel="stylesheet"
    />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/style.css" rel="stylesheet" />
  </head>

  <body>
    <!-- Topbar Start -->
    <div class="container-fluid">
      <div class="row py-3 px-lg-5 bg-light">
        <div class="col-lg-4">
          <a href="" class="navbar-brand d-none d-lg-block">
            <h1 class="m-0 display-5 text-capitalize">
              <span class="text-primary">PET</span>HUB
            </h1>
          </a>
        </div>
        <div class="col-lg-8 text-center text-lg-right">
          <div class="d-inline-flex align-items-center">
            <div
              class="d-inline-flex flex-column text-center pr-3 border-right"
            >
              <h6>Opening Hours</h6>
              <p class="m-0">9.00AM - 5.00PM</p>
            </div>
            <div
              class="d-inline-flex flex-column text-center px-3 border-right"
            >
              <h6>Email Us</h6>
              <p class="m-0">info@pethub.lk</p>
            </div>
            <div class="d-inline-flex flex-column text-center pl-3">
              <h6>Call Us</h6>
              <p class="m-0">077 356 9435</p>
            </div>
            <div class="d-inline-flex flex-column text-center pl-3">
            <a href="tel:911" class="btn btn-lg btn-danger px-3 d-none d-lg-block">
    <i class="fas fa-phone"></i> Emergency Call
</a>

            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Topbar End -->

    <!-- Navbar Start -->
    <div class="container-fluid p-0">
      <nav
        class="navbar navbar-expand-lg bg-dark navbar-dark py-3 py-lg-0 px-lg-5"
      >
        <a href="" class="navbar-brand d-block d-lg-none">
          <h1 class="m-0 display-5 text-capitalize text-white">
            <span class="text-primary">PET</span>HUB
          </h1>
        </a>
        <button
          type="button"
          class="navbar-toggler"
          data-toggle="collapse"
          data-target="#navbarCollapse"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div
          class="collapse navbar-collapse justify-content-between px-3"
          id="navbarCollapse"
        >
          <div class="navbar-nav mr-auto py-0">
            <a href="index.php" class="nav-item nav-link">Home</a>
            <a href="about.php" class="nav-item nav-link active">About</a>
            <a href="services.php" class="nav-item nav-link">Services</a>

            <div class="nav-item dropdown">
              <a
                href="#"
                class="nav-link dropdown-toggle"
                data-toggle="dropdown"
                >Products</a
              >
              <div class="dropdown-menu rounded-0 m-0">
                <a href="dogproducts.php" class="dropdown-item"
                  >Dog Products</a
                >
                <a href="catproducts.php" class="dropdown-item"
                  >Cat Products</a
                >
                <a href="otherproducts.php" class="dropdown-item"
                  >Other Products</a
                >
              </div>
            </div>

            <div class="nav-item dropdown">
              <a
                href="#"
                class="nav-link dropdown-toggle"
                data-toggle="dropdown"
                >Pets</a
              >
              <div class="dropdown-menu rounded-0 m-0">
                <a href="dogbreeds.php" class="dropdown-item">Dog Breeds</a>
                <a href="catbreeds.php" class="dropdown-item">Cat Breeds</a>
                <a href="birdbreeds.php" class="dropdown-item">Bird Breeds</a>
                <a href="otherbreeds.php" class="dropdown-item"
                  >Other Breeds</a
                >
              </div>
            </div>
            <a href="contact.php" class="nav-item nav-link">Contact</a>
          </div>
          <?php
        // Check if the user is logged in
        if (isset($_SESSION["user_id"])) {
          // If logged in, display Logout button
          echo '<a href="logout.php" class="btn btn-lg btn-primary px-3 d-none d-lg-block">Logout</a>';

          echo '<a href="logout.php" class="btn btn-lg  ml-3 px-3 d-none d-lg-block">My Account</a>';
        } else {
          // If not logged in, display Sign Up button
          echo '<a href="signin.php" class="btn btn-lg btn-primary px-3 d-none d-lg-block">Sign Up</a>';
        }
        ?>
        </div>
      </nav>
    </div>
    <!-- Navbar End -->

    <!-- About Start -->
    <div class="container py-5">
      <div class="row py-5">
        <div class="col-lg-7 pb-5 pb-lg-0 px-3 px-lg-5">
          <h4 class="text-secondary mb-3">About Us</h4>
          <h1 class="display-4 mb-3">
            <span class="text-primary">Boarding</span> &
            <span class="text-secondary">Daycare</span>
          </h1>
          <p class="mb-3">
            Welcome to Pet Hub, your ultimate destination for personalized pet
            recommendations and streamlined pet shop management. Our innovative
            platform combines advanced algorithms with intuitive user interfaces
            to guide you through the pet selection process, taking into account
            your preferences, lifestyle, and needs.
          </p>

          <ul class="list-inline">
            <li>
              <h5>
                <i class="fa fa-check-double text-secondary mr-3"></i>Best In
                Industry
              </h5>
            </li>
            <li>
              <h5>
                <i class="fa fa-check-double text-secondary mr-3"></i>Emergency
                Services
              </h5>
            </li>
            <li>
              <h5>
                <i class="fa fa-check-double text-secondary mr-3"></i>24/7
                Customer Support
              </h5>
            </li>
          </ul>
          <a href="" class="btn btn-lg btn-primary mt-2 px-4">Find a pet</a>
        </div>
        <div class="col-lg-5">
          <div class="row px-3">
            <div class="col-12 p-0">
              <img class="img-fluid w-100" src="img\about1.jpg" alt="" />
            </div>
            <div class="col-6 p-0">
              <img class="img-fluid w-100" src="img\about2.jpg" alt="" />
            </div>
            <div class="col-6 p-0">
              <img class="img-fluid w-100" src="img\about3.jpg" alt="" />
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- About End -->

    <!-- Features Start -->
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-5">
          <img class="img-fluid w-100" src="img\about4.jpg" alt="" />
        </div>
        <div class="col-lg-7 py-5 py-lg-0 px-3 px-lg-5">
          <h4 class="text-secondary mb-3">Why Choose Us?</h4>
          <h1 class="display-4 mb-4">
            <span class="text-primary">Special Care</span> On Pets
          </h1>
          <p class="mb-4">
            "Pet Hub" stands out as the ultimate choice for pet enthusiasts and
            pet store owners due to our innovative approach, unwavering
            commitment to ethical pet care, and comprehensive services. Our
            unique Pet Recommendation system utilizes cutting-edge algorithms to
            match pets with owners based on lifestyle and preferences, ensuring
            a harmonious and fulfilling companionship.
          </p>
          <div class="row py-2">
            <div class="col-6">
              <div class="d-flex align-items-center mb-4">
                <h1
                  class="flaticon-cat font-weight-normal text-secondary m-0 mr-3"
                ></h1>
                <h5 class="text-truncate m-0">Best In Industry</h5>
              </div>
            </div>
            <div class="col-6">
              <div class="d-flex align-items-center mb-4">
                <h1
                  class="flaticon-doctor font-weight-normal text-secondary m-0 mr-3"
                ></h1>
                <h5 class="text-truncate m-0">Emergency Services</h5>
              </div>
            </div>
            <div class="col-6">
              <div class="d-flex align-items-center">
                <h1
                  class="flaticon-care font-weight-normal text-secondary m-0 mr-3"
                ></h1>
                <h5 class="text-truncate m-0">Special Care</h5>
              </div>
            </div>
            <div class="col-6">
              <div class="d-flex align-items-center">
                <h1
                  class="flaticon-dog font-weight-normal text-secondary m-0 mr-3"
                ></h1>
                <h5 class="text-truncate m-0">Customer Support</h5>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Features End -->

    <!-- Team Start -->
    <div class="container mt-5 pt-5 pb-3">
      <div class="d-flex flex-column text-center mb-5">
        <h4 class="text-secondary mb-3">Team Member</h4>
        <h1 class="display-4 m-0">
          Meet Our <span class="text-primary">Team Member</span>
        </h1>
      </div>
      <div class="row">
        <div class="col-lg-3 col-md-6">
          <div
            class="team card position-relative overflow-hidden border-0 mb-4"
          >
            <img class="card-img-top" src="img\a1.jpg" alt="" />
            <div class="card-body text-center p-0">
              <div
                class="team-text d-flex flex-column justify-content-center bg-light"
              >
                <h5>Mollie Fernando</h5>
                <i>Founder & CEO</i>
              </div>
              <div
                class="team-social d-flex align-items-center justify-content-center bg-dark"
              >
                <a
                  class="btn btn-outline-primary rounded-circle text-center mr-2 px-0"
                  style="width: 36px; height: 36px"
                  href="#"
                  ><i class="fab fa-twitter"></i
                ></a>
                <a
                  class="btn btn-outline-primary rounded-circle text-center mr-2 px-0"
                  style="width: 36px; height: 36px"
                  href="#"
                  ><i class="fab fa-facebook-f"></i
                ></a>
                <a
                  class="btn btn-outline-primary rounded-circle text-center mr-2 px-0"
                  style="width: 36px; height: 36px"
                  href="#"
                  ><i class="fab fa-linkedin-in"></i
                ></a>
                <a
                  class="btn btn-outline-primary rounded-circle text-center px-0"
                  style="width: 36px; height: 36px"
                  href="#"
                  ><i class="fab fa-instagram"></i
                ></a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6">
          <div
            class="team card position-relative overflow-hidden border-0 mb-4"
          >
            <img class="card-img-top" src="img\a2.jpg" alt="" />
            <div class="card-body text-center p-0">
              <div
                class="team-text d-flex flex-column justify-content-center bg-light"
              >
                <h5>Jennifer Perera</h5>
                <i>Chef Executive</i>
              </div>
              <div
                class="team-social d-flex align-items-center justify-content-center bg-dark"
              >
                <a
                  class="btn btn-outline-primary rounded-circle text-center mr-2 px-0"
                  style="width: 36px; height: 36px"
                  href="#"
                  ><i class="fab fa-twitter"></i
                ></a>
                <a
                  class="btn btn-outline-primary rounded-circle text-center mr-2 px-0"
                  style="width: 36px; height: 36px"
                  href="#"
                  ><i class="fab fa-facebook-f"></i
                ></a>
                <a
                  class="btn btn-outline-primary rounded-circle text-center mr-2 px-0"
                  style="width: 36px; height: 36px"
                  href="#"
                  ><i class="fab fa-linkedin-in"></i
                ></a>
                <a
                  class="btn btn-outline-primary rounded-circle text-center px-0"
                  style="width: 36px; height: 36px"
                  href="#"
                  ><i class="fab fa-instagram"></i
                ></a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6">
          <div
            class="team card position-relative overflow-hidden border-0 mb-4"
          >
            <img class="card-img-top" src="img\a3.jpg" alt="" />
            <div class="card-body text-center p-0">
              <div
                class="team-text d-flex flex-column justify-content-center bg-light"
              >
                <h5>John Fernando</h5>
                <i>Doctor</i>
              </div>
              <div
                class="team-social d-flex align-items-center justify-content-center bg-dark"
              >
                <a
                  class="btn btn-outline-primary rounded-circle text-center mr-2 px-0"
                  style="width: 36px; height: 36px"
                  href="#"
                  ><i class="fab fa-twitter"></i
                ></a>
                <a
                  class="btn btn-outline-primary rounded-circle text-center mr-2 px-0"
                  style="width: 36px; height: 36px"
                  href="#"
                  ><i class="fab fa-facebook-f"></i
                ></a>
                <a
                  class="btn btn-outline-primary rounded-circle text-center mr-2 px-0"
                  style="width: 36px; height: 36px"
                  href="#"
                  ><i class="fab fa-linkedin-in"></i
                ></a>
                <a
                  class="btn btn-outline-primary rounded-circle text-center px-0"
                  style="width: 36px; height: 36px"
                  href="#"
                  ><i class="fab fa-instagram"></i
                ></a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6">
          <div
            class="team card position-relative overflow-hidden border-0 mb-4"
          >
            <img class="card-img-top" src="img\a4.jpg" alt="" />
            <div class="card-body text-center p-0">
              <div
                class="team-text d-flex flex-column justify-content-center bg-light"
              >
                <h5>Ruchika De Alwis</h5>
                <i>Trainer</i>
              </div>
              <div
                class="team-social d-flex align-items-center justify-content-center bg-dark"
              >
                <a
                  class="btn btn-outline-primary rounded-circle text-center mr-2 px-0"
                  style="width: 36px; height: 36px"
                  href="#"
                  ><i class="fab fa-twitter"></i
                ></a>
                <a
                  class="btn btn-outline-primary rounded-circle text-center mr-2 px-0"
                  style="width: 36px; height: 36px"
                  href="#"
                  ><i class="fab fa-facebook-f"></i
                ></a>
                <a
                  class="btn btn-outline-primary rounded-circle text-center mr-2 px-0"
                  style="width: 36px; height: 36px"
                  href="#"
                  ><i class="fab fa-linkedin-in"></i
                ></a>
                <a
                  class="btn btn-outline-primary rounded-circle text-center px-0"
                  style="width: 36px; height: 36px"
                  href="#"
                  ><i class="fab fa-instagram"></i
                ></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Team End -->

    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-white mt-5 py-5 px-sm-3 px-md-5">
      <div class="row pt-5">
        <div class="col-lg-4 col-md-12 mb-5">
          <h1 class="mb-3 display-5 text-capitalize text-white">
            <span class="text-primary">PET</span>HUB
          </h1>
          <p class="m-0">
            Welcome to "Pet Hub," your ultimate destination for all things
            pet-related.Pethub.lk Shop online at www.pethub.lk for all your pet
            needs and feeds from premium pet food, treats, vitamins and
            supplements to pet toys, collars, feeding bowls, beds at an
            affordable price.
          </p>
        </div>
        <div class="col-lg-8 col-md-12">
          <div class="row">
            <div class="col-md-4 mb-5">
              <h5 class="text-primary mb-4">Get In Touch</h5>
              <p>
                <i class="fa fa-map-marker-alt mr-2"></i>952, Palawatte,
                Thalangama
              </p>
              <p><i class="fa fa-phone-alt mr-2"></i>077 356 9435</p>
              <p><i class="fa fa-envelope mr-2"></i>info@pethub.lk</p>
              <div class="d-flex justify-content-start mt-4">
                <a
                  class="btn btn-outline-light rounded-circle text-center mr-2 px-0"
                  style="width: 36px; height: 36px"
                  href="#"
                  ><i class="fab fa-twitter"></i
                ></a>
                <a
                  class="btn btn-outline-light rounded-circle text-center mr-2 px-0"
                  style="width: 36px; height: 36px"
                  href="#"
                  ><i class="fab fa-facebook-f"></i
                ></a>
                <a
                  class="btn btn-outline-light rounded-circle text-center mr-2 px-0"
                  style="width: 36px; height: 36px"
                  href="#"
                  ><i class="fab fa-linkedin-in"></i
                ></a>
                <a
                  class="btn btn-outline-light rounded-circle text-center mr-2 px-0"
                  style="width: 36px; height: 36px"
                  href="#"
                  ><i class="fab fa-instagram"></i
                ></a>
              </div>
            </div>
            <div class="col-md-4 mb-5">
              <h5 class="text-primary mb-4">Popular Links</h5>
              <div class="d-flex flex-column justify-content-start">
                <a class="text-white mb-2" href="#"
                  ><i class="fa fa-angle-right mr-2"></i>Home</a
                >
                <a class="text-white mb-2" href="#"
                  ><i class="fa fa-angle-right mr-2"></i>About Us</a
                >
                <a class="text-white mb-2" href="#"
                  ><i class="fa fa-angle-right mr-2"></i>Our Services</a
                >
                <a class="text-white mb-2" href="#"
                  ><i class="fa fa-angle-right mr-2"></i>Our Team</a
                >
                <a class="text-white" href="#"
                  ><i class="fa fa-angle-right mr-2"></i>Contact Us</a
                >
              </div>
            </div>
            <div class="col-md-4 mb-5">
              <h5 class="text-primary mb-4">Newsletter</h5>
              <form action="">
                <div class="form-group">
                  <input
                    type="text"
                    class="form-control border-0"
                    placeholder="Your Name"
                    required="required"
                  />
                </div>
                <div class="form-group">
                  <input
                    type="email"
                    class="form-control border-0"
                    placeholder="Your Email"
                    required="required"
                  />
                </div>
                <div>
                  <button
                    class="btn btn-lg btn-primary btn-block border-0"
                    type="submit"
                  >
                    Submit Now
                  </button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div
      class="container-fluid text-white py-4 px-sm-3 px-md-5"
      style="background: #111111"
    >
      <div class="row">
        <div class="col-md-6 text-center text-md-left mb-3 mb-md-0">
          <p class="m-0 text-white">
            &copy;
            <a
              class="text-white font-weight-bold"
              href="https://freewebsitecode.com"
              >Pethub.lk</a
            >. All Rights Reserved
          </p>
        </div>
        <div class="col-md-6 text-center text-md-right">
          <ul class="nav d-inline-flex">
            <li class="nav-item">
              <a class="nav-link text-white py-0" href="#">Privacy</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-white py-0" href="#">Terms</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-white py-0" href="#">FAQs</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-white py-0" href="#">Help</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <!-- Footer End -->

    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary back-to-top"
      ><i class="fa fa-angle-double-up"></i
    ></a>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Contact Javascript File -->
    <script src="mail/jqBootstrapValidation.min.js"></script>
    <script src="mail/contact.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
  </body>
</html>
