<?php
    include "./inc/header.php"
?>

    <!-- Carousel Start -->
    <div class="container-fluid p-0">
      <div id="header-carousel" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="w-100" src="img\index1.jpg" alt="Image" />
            <div
              class="carousel-caption d-flex flex-column align-items-center justify-content-center"
            >
              <div class="p-3" style="max-width: 900px">
                <h3 class="text-white mb-3 d-none d-sm-block">BEST PET</h3>
                <h1 class="display-3 text-white mb-3">
                  Pet Breed Recommendation System
                </h1>
                <h5 class="text-white mb-3 d-none d-sm-block">
                  Find your new best friend
                </h5>
                <a href="rate.php" class="btn btn-lg btn-primary mt-3 mt-md-4 px-4"
                  >Find a pet</a
                >
              </div>
            </div>
          </div>
          
        
        
      </div>
    </div>
    <!-- Carousel End -->

    <!-- Booking Start -->
    <div class="container-fluid bg-light">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-5">
            <div class="bg-primary py-5 px-4 px-sm-5">
              <form class="py-5" action="payment.php">
                <div class="form-group">
                  <input
                    type="text"
                    class="form-control border-0 p-4"
                    placeholder="Your Name"
                    required="required"
                  />
                </div>
                <div class="form-group">
                  <input
                    type="email"
                    class="form-control border-0 p-4"
                    placeholder="Your Email"
                    required="required"
                  />
                </div>
                <div class="form-group">
                  <div class="date" id="date" data-target-input="nearest">
                    <input
                      type="text"
                      class="form-control border-0 p-4 datetimepicker-input"
                      placeholder="Reservation Date"
                      data-target="#date"
                      data-toggle="datetimepicker"
                    />
                  </div>
                </div>
                <div class="form-group">
                  <div class="time" id="time" data-target-input="nearest">
                    <input
                      type="text"
                      class="form-control border-0 p-4 datetimepicker-input"
                      placeholder="Reservation Time"
                      data-target="#time"
                      data-toggle="datetimepicker"
                    />
                  </div>
                </div>
                <div class="form-group">
                  <select
                    class="custom-select border-0 px-4"
                    style="height: 47px"
                  >
                    <option selected>Select A Service</option>
                    <option value="1">Pet boarding</option>
                    <option value="2">Pet Feeding</option>
                    <option value="3">Pet grooming</option>
                    <option value="3">Pet feeding</option>
                  </select>
                </div>
                <div>
                  <button
                    class="btn btn-dark btn-block border-0 py-3"
                    type="submit"
                  >
                    Book Now
                  </button>
                </div>
              </form>
            </div>
          </div>
          <div class="col-lg-7 py-5 py-lg-0 px-3 px-lg-5">
            <h4 class="text-secondary mb-3">Going for a vacation?</h4>
            <h1 class="display-4 mb-4">
              Book For <span class="text-primary">Your Pet</span>
            </h1>
            <p>
              Going on a vacation?
              We take care of your pet.
            </p>
            <div class="row py-2">
              <div class="col-sm-6">
                <div class="d-flex flex-column">
                  <div class="d-flex align-items-center mb-2">
                    <h1
                      class="flaticon-house font-weight-normal text-secondary m-0 mr-3"
                    ></h1>
                    <h5 class="text-truncate m-0">Pet Boarding</h5>
                  </div>
                  <p>
                    "Pet Hub" introduces a comprehensive and thoughtful Pet Boarding
                    service that caters to the needs of both pets and their owners.
                  </p>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="d-flex flex-column">
                  <div class="d-flex align-items-center mb-2">
                    <h1
                      class="flaticon-food font-weight-normal text-secondary m-0 mr-3"
                    ></h1>
                    <h5 class="text-truncate m-0">Pet Feeding</h5>
                  </div>
                  <p>
                    Incorporating the well-being and health of pets as a top
                    priority, we offer a comprehensive and efficient Pet Feeding feature.
                  </p>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="d-flex flex-column">
                  <div class="d-flex align-items-center mb-2">
                    <h1
                      class="flaticon-grooming font-weight-normal text-secondary m-0 mr-3"
                    ></h1>
                    <h5 class="text-truncate m-0">Pet Grooming</h5>
                  </div>
                  <p class="m-0">
                    Elevating the pet care experience to a new level, "Pet Hub"
                    proudly offers a comprehensive and convenient Pet Grooming
                    service.
                  </p>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="d-flex flex-column">
                  <div class="d-flex align-items-center mb-2">
                    <h1
                      class="flaticon-toy font-weight-normal text-secondary m-0 mr-3"
                    ></h1>
                    <h5 class="text-truncate m-0">Pet Tranning</h5>
                  </div>
                  <p class="m-0">
                    Pet Training feature that empowers pet owners to foster strong bonds 
                    with their furry companions through effective training techniques.
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Booking Start -->

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
          <a href="about.php" class="btn btn-lg btn-primary mt-2 px-4">View More</a>
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

    <!-- Services Start -->
    <div class="container-fluid bg-light pt-5">
      <div class="container py-5">
        <div class="d-flex flex-column text-center mb-5">
          <h4 class="text-secondary mb-3">Our Services</h4>
          <h1 class="display-4 m-0">
            <span class="text-primary">Premium</span> Pet Services
          </h1>
        </div>
        <div class="row pb-3">
          <div class="col-md-6 col-lg-4 mb-4">
            <div
              class="d-flex flex-column text-center bg-white mb-2 p-3 p-sm-5"
            >
              <h3
                class="flaticon-house display-3 font-weight-normal text-secondary mb-3"
              ></h3>
              <h3 class="mb-3">Pet Boarding</h3>
              <p>
                "Pet Hub" introduces a comprehensive and thoughtful Pet Boarding
                service that caters to the needs of both pets and their owners.
              </p>
              <a href="booknow.php?service=Pet-Boarding&price=2000.00" class="btn btn-lg btn-primary px-3 d-none d-lg-block">Book now</a>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 mb-4">
            <div
              class="d-flex flex-column text-center bg-white mb-2 p-3 p-sm-5"
            >
              <h3
                class="flaticon-food display-3 font-weight-normal text-secondary mb-3"
              ></h3>
              <h3 class="mb-3">Pet Grooming</h3>
              <p>
              
                Elevating the pet care experience to a new level, "Pet Hub"
                proudly offers a comprehensive and convenient Pet Grooming
                service.
              </p>
              <a href="booknow.php?service=Pet-Grooming&price=3500.00" class="btn btn-lg btn-primary px-3 d-none d-lg-block">Book now</a>

            </div>
          </div>
          <div class="col-md-6 col-lg-4 mb-4">
            <div
              class="d-flex flex-column text-center bg-white mb-2 p-3 p-sm-5"
            >
              <h3
                class="flaticon-grooming display-3 font-weight-normal text-secondary mb-3"
              ></h3>
              <h3 class="mb-3">Pet Feeding</h3>
              <p>
                Incorporating the well-being and health of pets as a top
                priority, the "Pet Hub" system offers a comprehensive and
                efficient Pet Feeding feature.
              </p>
              <a href="booknow.php?service=Pet-Feeding&price=2500.00" class="btn btn-lg btn-primary px-3 d-none d-lg-block">Book now</a>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 mb-4">
            <div
              class="d-flex flex-column text-center bg-white mb-2 p-3 p-sm-5"
            >
              <h3
                class="flaticon-cat display-3 font-weight-normal text-secondary mb-3"
              ></h3>
              <h3 class="mb-3">Pet Training</h3>
              <p>
                "Pet Hub" presents a dedicated Pet Training feature that
                empowers pet owners to foster strong bonds with their furry
                companions through effective training techniques.
              </p>
              <a href="booknow.php?service=Pet-Training&price=1500.00" class="btn btn-lg btn-primary px-3 d-none d-lg-block">Book now</a>

            </div>
          </div>
          <div class="col-md-6 col-lg-4 mb-4">
            <div
              class="d-flex flex-column text-center bg-white mb-2 p-3 p-sm-5"
            >
              <h3
                class="flaticon-dog display-3 font-weight-normal text-secondary mb-3"
              ></h3>
              <h3 class="mb-3">Pet Exercise</h3>
              <p>
                Our dedicated Pet Exercise service offers a dynamic and engaging
                way for pet owners to ensure their furry friends stay active and
                energized. 
              </p>
              <a href="booknow.php?service=Pet-Exercise&price=3000.00" class="btn btn-lg btn-primary px-3 d-none d-lg-block">Book now</a>

            </div>
          </div>
          <div class="col-md-6 col-lg-4 mb-4">
            <div
              class="d-flex flex-column text-center bg-white mb-2 p-3 p-sm-5"
            >
              <h3
                class="flaticon-vaccine display-3 font-weight-normal text-secondary mb-3"
              ></h3>
              <h3 class="mb-3">Pet Treatment</h3>
              <p>
                We understand that pets may require specialized care and
                attention to maintain their optimal health, and our platform is
                here to support you every step of the way.
              </p>
              <a href="booknow.php?service=Pet-Treatment&price=5500.00" class="btn btn-lg btn-primary px-3 d-none d-lg-block">Book now</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Services End -->

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
            "Pet Hub" stands out as the ultimate choice for pet enthusiasts
              and pet store owners due to our innovative approach, unwavering
              commitment to ethical pet care, and comprehensive services. Our
              unique Pet Recommendation system utilizes cutting-edge algorithms
              to match pets with owners based on lifestyle and preferences,
              ensuring a harmonious and fulfilling companionship.
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

    <!-- Pricing Plan Start -->
    <div class="container-fluid bg-light pt-5 pb-4">
      <div class="container py-5">
        <div class="d-flex flex-column text-center mb-5">
          <h4 class="text-secondary mb-3">Pricing Plan</h4>
          <h1 class="display-4 m-0">
            Choose the <span class="text-primary">Best Price</span>
          </h1>
        </div>
        <div class="row">
          <div class="col-lg-4 mb-4">
            <div class="card border-0">
              <div class="card-header position-relative border-0 p-0 mb-4">
                <img class="card-img-top" src="img\price1.jpg" alt="" />
                <div
                  class="position-absolute d-flex flex-column align-items-center justify-content-center w-100 h-100"
                  style="
                    top: 0;
                    left: 0;
                    z-index: 1;
                    background: rgba(0, 0, 0, 0.5);
                  "
                >
                  <h3 class="text-primary mb-3">Basic</h3>
                  <h1 class="display-4 text-white mb-0">
                    <small
                      class="align-top"
                      style="font-size: 22px; line-height: 45px"
                      >Rs.</small
                    >2500<small
                      class="align-bottom"
                      style="font-size: 16px; line-height: 40px"
                      ></small
                    >
                  </h1>
                </div>
              </div>
              <div class="card-body text-center p-0">
                <ul class="list-group list-group-flush mb-4">
                  <li class="list-group-item p-2">
                    <i class="fa fa-check text-secondary mr-2"></i>Feeding
                  </li>
                  <li class="list-group-item p-2">
                    <i class="fa fa-check text-secondary mr-2"></i>Boarding
                  </li>
                  <li class="list-group-item p-2">
                    <i class="fa fa-times text-danger mr-2"></i>Spa & Grooming
                  </li>
                  <li class="list-group-item p-2">
                    <i class="fa fa-times text-danger mr-2"></i>Veterinary
                    Medicine
                  </li>
                </ul>
              </div>
              <div class="card-footer border-0 p-0">
              <a href="booknow.php?service=Pricing-plan-1&price=2500.00" class="btn btn-lg btn-primary px-3 d-none d-lg-block">Book now</a>
              </div>
            </div>
          </div>
          <div class="col-lg-4 mb-4">
            <div class="card border-0">
              <div class="card-header position-relative border-0 p-0 mb-4">
                <img class="card-img-top" src="img\price2.jpg" alt="" />
                <div
                  class="position-absolute d-flex flex-column align-items-center justify-content-center w-100 h-100"
                  style="
                    top: 0;
                    left: 0;
                    z-index: 1;
                    background: rgba(0, 0, 0, 0.5);
                  "
                >
                  <h3 class="text-secondary mb-3">Standard</h3>
                  <h1 class="display-4 text-white mb-0">
                    <small
                      class="align-top"
                      style="font-size: 22px; line-height: 45px"
                      >Rs.</small
                    >5000<small
                      class="align-bottom"
                      style="font-size: 16px; line-height: 40px"
                      ></small
                    >
                  </h1>
                </div>
              </div>
              <div class="card-body text-center p-0">
                <ul class="list-group list-group-flush mb-4">
                  <li class="list-group-item p-2">
                    <i class="fa fa-check text-secondary mr-2"></i>Feeding
                  </li>
                  <li class="list-group-item p-2">
                    <i class="fa fa-check text-secondary mr-2"></i>Boarding
                  </li>
                  <li class="list-group-item p-2">
                    <i class="fa fa-check text-secondary mr-2"></i>Spa &
                    Grooming
                  </li>
                  <li class="list-group-item p-2">
                    <i class="fa fa-times text-danger mr-2"></i>Veterinary
                    Medicine
                  </li>
                </ul>
              </div>
              <div class="card-footer border-0 p-0">
              <a href="booknow.php?service=Pricing-plan-2&price=5000.00" class="btn btn-lg btn-primary px-3 d-none d-lg-block">Book now</a>
              </div>
            </div>
          </div>
          <div class="col-lg-4 mb-4">
            <div class="card border-0">
              <div class="card-header position-relative border-0 p-0 mb-4">
                <img class="card-img-top" src="img\price1.jpg" alt="" />
                <div
                  class="position-absolute d-flex flex-column align-items-center justify-content-center w-100 h-100"
                  style="
                    top: 0;
                    left: 0;
                    z-index: 1;
                    background: rgba(0, 0, 0, 0.5);
                  "
                >
                  <h3 class="text-primary mb-3">Premium</h3>
                  <h1 class="display-4 text-white mb-0">
                    <small
                      class="align-top"
                      style="font-size: 22px; line-height: 45px"
                      >Rs.</small
                    >7500<small
                      class="align-bottom"
                      style="font-size: 16px; line-height: 40px"
                      ></small
                    >
                  </h1>
                </div>
              </div>
              <div class="card-body text-center p-0">
                <ul class="list-group list-group-flush mb-4">
                  <li class="list-group-item p-2">
                    <i class="fa fa-check text-secondary mr-2"></i>Feeding
                  </li>
                  <li class="list-group-item p-2">
                    <i class="fa fa-check text-secondary mr-2"></i>Boarding
                  </li>
                  <li class="list-group-item p-2">
                    <i class="fa fa-check text-secondary mr-2"></i>Spa &
                    Grooming
                  </li>
                  <li class="list-group-item p-2">
                    <i class="fa fa-check text-secondary mr-2"></i>Veterinary
                    Medicine
                  </li>
                </ul>
              </div>
              <div class="card-footer border-0 p-0">
              <a href="booknow.php?service=Pricing-plan-3&price=7500.00" class="btn btn-lg btn-primary px-3 d-none d-lg-block">Book now</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Pricing Plan End -->

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

    <!-- Testimonial Start -->
    <div class="container-fluid bg-light my-5 p-0 py-5">
      <div class="container p-0 py-5">
        <div class="d-flex flex-column text-center mb-5">
          <h4 class="text-secondary mb-3">Testimonial</h4>
          <h1 class="display-4 m-0">
            Our Client <span class="text-primary">Says</span>
          </h1>
        </div>
        <div class="owl-carousel testimonial-carousel">
          <div class="bg-white mx-3 p-4">
            <div class="d-flex align-items-end mb-3 mt-n4 ml-n4">
              <img
                class="img-fluid"
                src="img\c1 (1).jpg"
                style="width: 80px; height: 80px"
                alt=""
              />
              <div class="ml-3">
                <h5>Sachini ranasinghe</h5>
                <i>Teacher</i>
              </div>
            </div>
            <p class="m-0">
              Thank for the prompt delivery !!!and for the high quality
              products, they are undoubtedly value for the money. All pet
              accessories are in one place really love it
            </p>
          </div>
          <div class="bg-white mx-3 p-4">
            <div class="d-flex align-items-end mb-3 mt-n4 ml-n4">
              <img
                class="img-fluid"
                src="img\c1 (2).jpg"
                style="width: 80px; height: 80px"
                alt=""
              />
              <div class="ml-3">
                <h5>Lakmal De Silva</h5>
                <i>Doctor</i>
              </div>
            </div>
            <p class="m-0">
              Excellent service done even during the curfew period. With in less
              than 6 hrs delivery done to door step. Really recommend.
            </p>
          </div>
          <div class="bg-white mx-3 p-4">
            <div class="d-flex align-items-end mb-3 mt-n4 ml-n4">
              <img
                class="img-fluid"
                src="img\c1 (4).jpg"
                style="width: 80px; height: 80px"
                alt=""
              />
              <div class="ml-3">
                <h5>Sahan Amarasekara</h5>
                <i>Software Engineer</i>
              </div>
            </div>
            <p class="m-0">
              I brought a very cute bowl for my cat. It is very beautiful and
              price also very low.. I was looking for such beautiful bowl and
              didn’t find at anywhere else. Thank you!
            </p>
          </div>
          <div class="bg-white mx-3 p-4">
            <div class="d-flex align-items-end mb-3 mt-n4 ml-n4">
              <img
                class="img-fluid"
                src="img\c1 (3).jpg"
                style="width: 80px; height: 80px"
                alt=""
              />
              <div class="ml-3">
                <h5>Dinakshi Perera</h5>
                <i>Lawyer</i>
              </div>
            </div>
            <p class="m-0">
              It is a highly recommended place to shop, not only because they
              have also special pet foods and equipment you won’t find anywhere
              else in the country.
            </p>
          </div>
        </div>
      </div>
    </div>
    <!-- Testimonial End -->

<?php
    include "./inc/footer.php"
?>