<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css\payment.css" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/style.css" rel="stylesheet" />

    <link rel="stylesheet" href="rating.css" />
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
            <a href="index.php" class="nav-item nav-link active">Home</a>
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
            <a href="contact.php" class="nav-item nav-link">Contact</a>
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

    <!-- rating starts -->

    <div class="container-fluid pt-5">
      <div class="d-flex flex-column text-center mb-5 pt-5">
        <h4 class="text-secondary mb-3">Find Your Pet</h4>
        <h1 class="display-4 m-0">
          Best pet <span class="text-primary">Recommendation</span>
        </h1>
      </div>
      <div class="container py-5">
      <form action="" id="ratingForm">
  <div class="row">
    <div class="col">
      <h3 class="title">Friendliness</h3>
      <div class="stars">
        <input type="radio" id="friendlinessFive" name="friendliness" value="5" />
        <label for="friendlinessFive"></label>
        <input type="radio" id="friendlinessFour" name="friendliness" value="4" />
        <label for="friendlinessFour"></label>
        <input type="radio" id="friendlinessThree" name="friendliness" value="3" />
        <label for="friendlinessThree"></label>
        <input type="radio" id="friendlinessTwo" name="friendliness" value="2" />
        <label for="friendlinessTwo"></label>
        <input type="radio" id="friendlinessOne" name="friendliness" value="1" />
        <label for="friendlinessOne"></label>
        <span class="result"></span>
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col">
      <h3 class="title">Trainability</h3>
    </div>
    <div class="col">
      <div class="stars">
        <input type="radio" id="trainabilityFive" name="trainability" value="5" />
        <label for="trainabilityFive"></label>
        <input type="radio" id="trainabilityFour" name="trainability" value="4" />
        <label for="trainabilityFour"></label>
        <input type="radio" id="trainabilityThree" name="trainability" value="3" />
        <label for="trainabilityThree"></label>
        <input type="radio" id="trainabilityTwo" name="trainability" value="2" />
        <label for="trainabilityTwo"></label>
        <input type="radio" id="trainabilityOne" name="trainability" value="1" />
        <label for="trainabilityOne"></label>
        <span class="result"></span>
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col">
      <h3 class="title">Adaptability</h3>
    </div>
    <div class="col">
      <div class="stars">
        <input type="radio" id="adaptabilityFive" name="adaptability" value="5" />
        <label for="adaptabilityFive"></label>
        <input type="radio" id="adaptabilityFour" name="adaptability" value="4" />
        <label for="adaptabilityFour"></label>
        <input type="radio" id="adaptabilityThree" name="adaptability" value="3" />
        <label for="adaptabilityThree"></label>
        <input type="radio" id="adaptabilityTwo" name="adaptability" value="2" />
        <label for="adaptabilityTwo"></label>
        <input type="radio" id="adaptabilityOne" name="adaptability" value="1" />
        <label for="adaptabilityOne"></label>
        <span class="result"></span>
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col">
      <h3 class="title">Health & Grooming</h3>
    </div>
    <div class="col">
      <div class="stars">
        <input type="radio" id="healthGroomingFive" name="healthAndGrooming" value="5" />
        <label for="healthGroomingFive"></label>
        <input type="radio" id="healthGroomingFour" name="healthAndGrooming" value="4" />
        <label for="healthGroomingFour"></label>
        <input type="radio" id="healthGroomingThree" name="healthAndGrooming" value="3" />
        <label for="healthGroomingThree"></label>
        <input type="radio" id="healthGroomingTwo" name="healthAndGrooming" value="2" />
        <label for="healthGroomingTwo"></label>
        <input type="radio" id="healthGroomingOne" name="healthAndGrooming" value="1" />
        <label for="healthGroomingOne"></label>
        <span class="result"></span>
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col">
      <h3 class="title">Physical Needs</h3>
    </div>
    <div class="col">
      <div class="stars">
        <input type="radio" id="physicalNeedsFive" name="physicalNeeds" value="5" />
        <label for="physicalNeedsFive"></label>
        <input type="radio" id="physicalNeedsFour" name="physicalNeeds" value="4" />
        <label for="physicalNeedsFour"></label>
        <input type="radio" id="physicalNeedsThree" name="physicalNeeds" value="3" />
        <label for="physicalNeedsThree"></label>
        <input type="radio" id="physicalNeedsTwo" name="physicalNeeds" value="2" />
        <label for="physicalNeedsTwo"></label>
        <input type="radio" id="physicalNeedsOne" name="physicalNeeds" value="1" />
        <label for="physicalNeedsOne"></label>
        <span class="result"></span>
      </div>
    </div>
  </div>

  <input type="submit" value="proceed to checkout" class="submit-btn" />
</form>

      </div>
    </div>

    <script>
document.addEventListener("DOMContentLoaded", function () {
    const form = document.getElementById("ratingForm"); // Access the form by ID

    form.addEventListener("submit", function (event) {
        event.preventDefault();

        // Get ratings values for each category
        const ratings = {
            friendliness: getRating("friendliness"),
            trainability: getRating("trainability"),
            adaptability: getRating("adaptability"),
            healthAndGrooming: getRating("healthAndGrooming"),
            physicalNeeds: getRating("physicalNeeds"),
        };

        // Validate that all ratings are selected
        if (Object.values(ratings).some((rating) => rating === null)) {
            alert("Please rate all categories before submitting.");
            return;
        }

        // Make a POST request to your Flask API
        fetch("http://127.0.0.1:3000/predict", {
            method: "POST",
            headers: {
                "Content-Type": "application/json",
            },
            body: JSON.stringify({ input_values: Object.values(ratings) }),
        })
        .then((response) => response.json())
        .then((data) => {
            // Handle the API response as needed
            console.log("API Response:", data);

            // Redirect to result.php with an array of predictions
            const predictions = data.predictions.slice(0, 3); // Adjust the number of predictions to display
            const predictionsParam = encodeURIComponent(JSON.stringify(predictions));
            window.location.href = `result.php?predictions=${predictionsParam}`;
        })
        .catch((error) => {
            console.error("Error making API request:", error);
        });
    });

    function getRating(category) {
        const input = document.querySelector(`input[name=${category}]:checked`);
        return input ? parseInt(input.value) : null;
    }
});
</script>





  </body>
</html>
