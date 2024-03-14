<?php
$predictions = isset($_GET['predictions']) ? json_decode(urldecode($_GET['predictions']), true) : null;

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css\payment.css" />

     <!-- Font Awesome -->
     <link
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css"
      rel="stylesheet"
    />

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
    <h1  style="margin-left: 20rem; margin-top:3rem;">Pet Recommendation Result</h1>

    <?php
// Check if predictions are available
if ($predictions !== null) {
    foreach ($predictions as $prediction) {
        $details = $prediction['details'];
        ?>
        <div class="card" style="width: 50rem; margin-left: 20rem; margin-top:3rem;">
            <div class="card-body">
            <p style="font-weight: bold;">Breed Name: <?php echo $details['breed_name']; ?></p>

                <div style="margin-left: 30%;">
                    <img src="<?php echo $details['breed_image']; ?>" alt="Breed Image" style="max-width: 250px; max-height: 250px;">
                </div>
                <!-- Display the details for the predicted breed -->
                <div style="display: flex; flex-direction: row; align-items: center; text-align: center;">
                    <div style="margin-right: 20px;">
                        <i class="fas fa-dog fa-5x"></i>
                        <p>Breed Group: <?php echo $details['breed_group']; ?></p>
                    </div>
                    <div style="margin-right: 20px;">
                        <i class="fas fa-arrows-alt-v fa-5x"></i>
                        <p>Height: <?php echo $details['height']; ?></p>
                    </div>
                    <div style="margin-right: 20px;">
                        <i class="fas fa-weight fa-5x"></i>
                        <p>Weight: <?php echo $details['weight']; ?></p>
                    </div>
                    <div style="margin-right: 20px;">
                        <i class="fas fa-heartbeat fa-5x"></i>
                        <p>Life Span: <?php echo $details['life_span']; ?></p>
                    </div>
                    <div>
                        <i class="fas fa-dollar-sign fa-5x"></i>
                        <p>Monthly Expenses: <?php echo $details['monthly_expences']; ?></p>
                    </div>
                    <div>
                        <i class="fas fa-money-bill-wave fa-5x"></i>
                        <p>Selling Price: <?php echo $details['Selling Price']; ?></p>
                    </div>
                    <!-- Add more details as needed -->
                </div>
            </div>
        </div>
        <?php
    }
} else {
    // Handle the case when predictions are not available
    echo '<p>Error: Unable to retrieve predictions.</p>';
}
?>

<!-- Include your JavaScript files if any -->

</body>
</html>
