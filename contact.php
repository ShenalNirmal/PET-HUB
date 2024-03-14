<?php

include "./config/con.php";

// Process form data
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = $_POST["name"];
  $email = $_POST["email"];
  $subject = $_POST["subject"];
  $message = $_POST["message"];

  // Insert data into the 'contacts' table
  $sql = "INSERT INTO feedbacks (name, email, subject, message) VALUES ('$name', '$email', '$subject', '$message')";

  if ($conn->query($sql) === TRUE) {
      echo "Form submitted successfully!";
  } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
  }
}

// Close the database connection
$conn->close();
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
            <a href="about.php" class="nav-item nav-link">About</a>
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
            <a href="contact.php" class="nav-item nav-link active">Contact</a>
          </div>
          <a
            href="signin.php"
            href=""
            class="btn btn-lg btn-primary px-3 d-none d-lg-block"
            >Sing Up</a
          >
        </div>
      </nav>
    </div>
    <!-- Navbar End -->

    <!-- Contact Start -->
    <div class="container-fluid pt-5">
      <div class="d-flex flex-column text-center mb-5 pt-5">
        <h4 class="text-secondary mb-3">Contact Us</h4>
        <h1 class="display-4 m-0">
          Contact For <span class="text-primary">Any Query</span>
        </h1>
      </div>
      <div class="row justify-content-center">
        <div class="col-12 col-sm-8 mb-5">
          <div class="contact-form">
            <div id="success"></div>
            <form name="sentMessage" id="contactForm" novalidate="novalidate">
              <div class="control-group">
                <input
                  type="text"
                  class="form-control p-4"
                  id="name"
                  name="name"
                  placeholder="Your Name"
                  required="required"
                  data-validation-required-message="Please enter your name"
                />
                <p class="help-block text-danger"></p>
              </div>
              <div class="control-group">
                <input
                  type="email"
                  class="form-control p-4"
                  id="email"
                  name="email"
                  placeholder="Your Email"
                  required="required"
                  data-validation-required-message="Please enter your email"
                />
                <p class="help-block text-danger"></p>
              </div>
              <div class="control-group">
                <input
                  type="text"
                  class="form-control p-4"
                  id="subject"
                  name="subject"
                  placeholder="Subject"
                  required="required"
                  data-validation-required-message="Please enter a subject"
                />
                <p class="help-block text-danger"></p>
              </div>
              <div class="control-group">
                <textarea
                  class="form-control p-4"
                  rows="6"
                  id="message"
                  name="message"
                  placeholder="Message"
                  required="required"
                  data-validation-required-message="Please enter your message"
                ></textarea>
                <p class="help-block text-danger"></p>
              </div>
              <div>
                <button
                  class="btn btn-primary py-3 px-5"
                  type="submit"
                  id="sendMessageButton"
                >
                  Send Message
                </button>
              </div>
            </form>
          </div>
        </div>
        <div class="col-12 mb-n2 p-0">
        <iframe src="https://www.google.com/maps/embed?pb=!1m17!1m12!1m3!1d3961.0154024503395!2d79.92794407499625!3d6.888757993110289!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zNsKwNTMnMTkuNSJOIDc5wrA1NSc0OS45IkU!5e0!3m2!1sen!2slk!4v1708962051581!5m2!1sen!2slk" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

        </div>
      </div>
    </div>
    <!-- Contact End -->

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
