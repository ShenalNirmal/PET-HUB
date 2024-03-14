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

$product_name = isset($_GET['product_name']) ? urldecode($_GET['product_name']) : '';
$product_price = isset($_GET['product_price']) ? urldecode($_GET['product_price']) : '';

// Retrieve user_id from the session
$user_id = $_SESSION["user_id"];

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Collect form data
    $full_name = $_POST['full_name'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $city = $_POST['city'];
    $state = $_POST['state'];
    $zip_code = $_POST['zip_code'];
    $card_name = $_POST['card_name'];
    $card_number = $_POST['card_number'];
    $exp_month = $_POST['exp_month'];
    $exp_year = $_POST['exp_year'];
    $cvv = $_POST['cvv'];

    // Insert customer details into the payments table
    $query = "INSERT INTO payments (user_id, full_name, email, address, city, state, zip_code, card_name, card_number, exp_month, exp_year, cvv) 
              VALUES ('$user_id', '$full_name', '$email', '$address', '$city', '$state', '$zip_code', '$card_name', '$card_number', '$exp_month', '$exp_year', '$cvv')";

    $result = mysqli_query($conn, $query);

    if ($result) {
        // Retrieve the last inserted payment_id
        $payment_id = mysqli_insert_id($conn);

        // Insert order details into the orders table
        $total = $product_price; // Assuming product_price is the total amount for now
        $order_status = 'Pending'; // You can set the initial status as per your requirements

        $order_query = "INSERT INTO orders (user_id, payment_id, product, customer_name, address, city, total, order_status, date) 
                        VALUES ('$user_id', '$payment_id', '$product_name', '$full_name', '$address', '$city', '$total', '$order_status', NOW())";

        $order_result = mysqli_query($conn, $order_query);

        if ($order_result) {
            // Generate PDF for the product payment
            require('fpdf/fpdf.php');

            // Create a PDF
            $pdf = new FPDF();

            // Add a new page
            $pdf->AddPage();

            // Set the font for the text
            $pdf->SetFont('Arial', 'B', 20);

            // Print Payment Invoice header
            $pdf->Cell(71, 10, '', 0, 0);
            $pdf->Cell(59, 5, 'Payment Invoice', 0, 0);
            $pdf->Cell(59, 10, '', 0, 1);

            // Print Address and Details header
            $pdf->SetFont('Arial', 'B', 15);
            $pdf->Cell(71, 5, 'Address', 0, 0);
            $pdf->Cell(59, 5, '', 0, 0);
            $pdf->Cell(59, 5, 'Details', 0, 1);

            // Print Address details
            $pdf->SetFont('Arial', '', 10);
            $pdf->Cell(130, 5, $full_name, 0, 0);

            $pdf->Cell(25, 5, 'Customer ID', 0, 0);
            $pdf->Cell(34, 5, '001', 0, 1);

            $pdf->Cell(130, 5, 'City, 750028', 0, 0);
            $pdf->Cell(25, 5, 'Invoice Date:', 0, 0);
            $pdf->Cell(34, 5, date('jS M Y'), 0, 1);

            $pdf->Cell(130, 5, '', 0, 0);
            $pdf->Cell(25, 5, 'Invoice No:', 0, 0);
            $pdf->Cell(34, 5, 'ORD001', 0, 1);

            // Print Product details
            $pdf->SetFont('Arial', 'B', 15);
            $pdf->Cell(130, 5, 'Product Details', 0, 0);
            $pdf->Cell(59, 5, "", 0, 0);
            $pdf->SetFont('Arial', 'B', 10);
            $pdf->Cell(189, 10, "", 0, 1);

            // Print table headers
            $pdf->Cell(50, 10, '', 0, 1);
            $pdf->SetFont('Arial', 'B', 10);
            $pdf->Cell(80, 6, 'Description', 1, 0, 'C');
            $pdf->Cell(23, 6, 'Qty', 1, 0, 'C*');
            $pdf->Cell(30, 6, 'Unit Price', 1, 0, 'C');
            $pdf->Cell(20, 6, 'SalesTax', 1, 0, 'C');
            $pdf->Cell(25, 6, 'Total', 1, 1, 'C');/*end of line*/

            // Print product information
            $pdf->SetFont('Arial', '', 10);
            $pdf->Cell(80, 6, $product_name, 1);
            $pdf->Cell(23, 6, '1', 1, 0, 'C*');
            $pdf->Cell(30, 6, 'Rs' . $product_price, 1, 0, 'C');
            $pdf->Cell(20, 6, 'Rs0.00', 1, 0, 'C');
            $pdf->Cell(25, 6, 'Rs' . $product_price, 1, 1, 'C');/*end of line*/

            // Output the PDF
            $pdf->Output();

            exit();
        } else {
            echo "Error inserting order details: " . mysqli_error($conn);
        }
    } else {
        die("Error: " . mysqli_error($conn));
    }

    // Close the database connection
    mysqli_close($conn);
}
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

    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.10.1/html2pdf.bundle.min.js" integrity="sha512-GsLlZN/3F2ErC5ifS5QtgpiJtWd43JWSuIgh7mbzZ8zBps+dvLusV+eNQATqgA/HdeKFVgA5v3S/cIrLF7QnIg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

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
                class="nav-link dropdown-toggle active"
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
          // Start the session to check if the user is logged in

          // Check if the user is logged in
          if (isset($_SESSION["user_id"])) {
            // If logged in, display Logout button
            echo '<a href="logout.php" class="btn btn-lg btn-primary px-3 d-none d-lg-block">Logout</a>';
          } else {
            // If not logged in, display Sign Up button
            echo '<a href="signin.php" class="btn btn-lg btn-primary px-3 d-none d-lg-block">Sign Up</a>';
          }
          ?>
        </div>
      </nav>
    </div>
    <!-- Navbar End -->

    <!-- payment starts -->
    <div class="container py-5">
      <form method="POST" id="checkoutForm">
        <div class="row">
          <div class="col">
            <h3 class="title">billing address</h3>

            <div class="inputBox">
              <span>full name :</span>
              <input type="text" name="full_name" placeholder="shane perera"  style="width: 100%; padding: 5px;"/>
            </div>
            <div class="inputBox">
              <span>email :</span>
              <input type="email" name="email" placeholder="example@example.com" />
            </div>
            <div class="inputBox">
              <span>address :</span>
              <input type="text" name="address" placeholder="no - street - locality" />
            </div>
            <div class="inputBox">
              <span>city :</span>
              <input type="text" name="city" placeholder="colombo" />
            </div>

            <div class="flex">
              <div class="inputBox">
                <span>state :</span>
                <input type="text" name="state" placeholder="sri lanka" />
              </div>
              <div class="inputBox">
                <span>zip code :</span>
                <input type="text" name="zip_code" placeholder="123 456" />
              </div>
            </div>
          </div>

          <div class="col">
            <h3 class="title">payment</h3>

            <div class="inputBox">
              <span>cards accepted :</span>
              <img src="img\card_img.png"  alt="" style="max-width: 100%; height: auto;" />
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
              <input type="text" name="exp_month" placeholder="january" />
            </div>

            <div class="flex">
              <div class="inputBox">
                <span>exp year :</span>
                <input type="number" name="exp_year" placeholder="2024" />
              </div>
              <div class="inputBox">
                <span>CVV :</span>
                <input type="text"  name="cvv" placeholder="1234" />
              </div>
            </div>
          </div>
          <div class="col">
        <h3 class="title">Selected Products</h3>
        <!-- Add your PHP code here to dynamically generate product details -->
        <div>
    <p>Name: <?php echo $product_name; ?></p>
    <p>Price: Rs. <?php echo $product_price; ?></p>
    <!-- ... (other payment page content) ... -->
</div>
      </div>
        </div>
        <button type="submit" name="submit" class="submit-btn">proceed to checkout</button>

      </form>


    </div>
    

  </body>
</html>
