<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8" />
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
      <meta name="description" content="" />
      <meta name="author" content="" />
      <title>Dashboard Admin</title>
      <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
      <link href="css/styles.css" rel="stylesheet" />
      <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

   </head>
   <body class="sb-nav-fixed">
      <!--Navigation Bar-->
      <?php include_once('top.inc.php'); ?>
      <!--Navigation Bar-->
      <div id="layoutSidenav">
         <div id="layoutSidenav_content">
            <main>
               <div class="container-fluid px-4">
                  <h1 class="mt-4">Add Products</h1>
                  
                  <div class="card mb-4">
                     <div class="card-header">
                        <i class="fas fa-table me-1"></i>
                        Add Products
                     </div>
                     
                     <div class="card-body product-form">
                        <div class="cat-error"></div>
                        <form method="POST" enctype="multipart/form-data">
                           <div class="form-group w-50">
                              <label for="exampleInputEmail1">Product Name</label>
                              <input type="text" name="name" class="form-control"  placeholder="Enter Product Name">
                           </div>

                           <div class="form-group w-50">
                              <label for="exampleInputEmail1">Price</label>
                              <input type="text" name="price" class="form-control"   placeholder="Enter Price">
                           </div>

                           <div class="form-group w-50">
                              <label for="exampleInputEmail1">Image</label>
                              <input type="file" name="image" class="form-control">
                           </div>

                           <div class="form-group w-50">
                              <label for="exampleInputEmail1">Category</label>
                              <input type="text" name="category" class="form-control"  placeholder="Enter Category">
                           </div>

                           <div class="cat-btn">
                              <button type="submit" name="submit" class="btn btn-success">Add</button>
                           </div>

                        </form>
                     </div>
                  </div>
               </div>
            </main>
            <footer class="py-4 bg-light mt-auto">
               <div class="container-fluid px-4">
                  <div class="d-flex align-items-center justify-content-between small">
                     <div class="text-muted"></div>
                     <div>
                        <a href="#"></a>
                        &middot;
                        <a href="#"></a>
                     </div>
                  </div>
               </div>
            </footer>
         </div>
      </div>
      <!--Side Bar-->
      <?php require('sidebar.inc.php');?>
      <!--Side Bar-->
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
      <script src="js/scripts.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
      <script src="assets/demo/chart-area-demo.js"></script>
      <script src="assets/demo/chart-bar-demo.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
      <script src="js/datatables-simple-demo.js"></script>
   </body>
</html>

<?php
   include "../config/con.php";

   if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["submit"])) {
      $productName = $_POST["name"];
      $price = $_POST["price"];
      $category = $_POST["category"];

      // File upload handling
      $targetDirectory = "../img/Products/"; // Specify the directory where you want to store the uploaded images
      $targetFile = $targetDirectory . basename($_FILES["image"]["name"]);
      $imageFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

      // Valid file extensions
      $allowedExtensions = array("jpg", "jpeg", "png", "gif", "webp");

      // Check if the file is a valid image
      if (in_array($imageFileType, $allowedExtensions)) {
         if (move_uploaded_file($_FILES["image"]["tmp_name"], $targetFile)) {
            // Insert data into the database
            $sql = "INSERT INTO products (name, price, image_path, category) VALUES ('$productName', '$price', '$targetFile', '$category')";
            
            if ($conn->query($sql) === TRUE) {
               echo '<script>
               Swal.fire({
                 title: "Successfull!",
                 text: "Product added successful!",
                 icon: "success"
               });
             </script>';
            } else {
               echo "Error: " . $sql . "<br>" . $conn->error;
            }
         } else {
            echo "Error uploading file. Error code: " . $_FILES["image"]["error"];
         }
      } else {
         echo "Invalid file type. Allowed types: " . implode(", ", $allowedExtensions);
      }
   }
?>