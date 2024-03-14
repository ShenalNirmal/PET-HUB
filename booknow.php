<?php
   error_reporting(E_ALL);
   session_start();
   
   include "./config/con.php";
   
   // Check if the user is not logged in
   if (!isset($_SESSION["user_id"])) {
     // Redirect to the login page
     header("Location: signin.php");
     exit();
   }
   
   
   $serviceName = isset($_GET['service']) ? $_GET['service'] : '';
   $price = isset($_GET['price']) ? $_GET['price'] : '';
   
   ?>
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
                  <a href="services.php" class="nav-item nav-link active"
                     >Services</a
                     >
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
      <!-- payment starts -->
      <div class="container py-5">
         <form action="pdf.php" method="POST">
            <div class="row">
               <div class="col">
                  <h3 class="title">booking details</h3>
                  <div class="inputBox">
                     <span>full name :</span>
                     <input type="text" name="full_name" placeholder="shane perera" />
                  </div>
                  <div class="inputBox">
                     <span>email :</span>
                     <input type="email" name="email" placeholder="example@example.com" />
                  </div>
                  <div class="inputBox">
                     <span>reservation date :</span>
                     <input type="date" name="reservation_date" required placeholder="reservation date" />
                  </div>
                  <div class="inputBox">
                     <span>reservation time :</span>
                     <input type="time" name="reservation_time" placeholder="reservation time" />
                  </div>
                  <div class="flex">
                     <div class="inputBox">
                        <span>select a service :</span>
                        <input type="text" name="service_name" value="<?php echo $serviceName; ?>" readonly />
                     </div>
                  </div>
                  <div class="flex">
                     <div class="inputBox">
                        <span>price :</span>
                        <input type="text" name="price" value="<?php echo $price; ?>" readonly />
                     </div>
                  </div>
               </div>
               <div class="col">
                  <h3 class="title">payment</h3>
                  <div class="inputBox">
                     <span>cards accepted :</span>
                     <img src="img\card_img.png" alt="" />
                  </div>
                  <div class="inputBox">
                     <span>name on card :</span>
                     <input type="text" name="card_name" placeholder="mr. shane perera" />
                  </div>
                  <div class="inputBox">
                     <span>credit card number :</span>
                     <input type="number" name="card_number" placeholder="1111-2222-3333-4444" />
                  </div>
                  <div class="inputBox">
                     <span>exp month :</span>
                     <input type="text"  name="exp_month" placeholder="january" />
                  </div>
                  <div class="flex">
                     <div class="inputBox">
                        <span>exp year :</span>
                        <input type="number" name="exp_year" placeholder="2024" />
                     </div>
                     <div class="inputBox">
                        <span>CVV :</span>
                        <input type="text" name="cvv" placeholder="1234" />
                     </div>
                  </div>
               </div>
            </div>
            <input type="submit" value="proceed to checkout" class="submit-btn" />
         </form>
      </div>
   </body>
</html>