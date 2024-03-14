
<?php
include "../config/con.php";

// Initialize $id variable
$id = null;

// Check if ID is present in the GET parameters
if (isset($_GET['id']) && !empty($_GET['id'])) {
    // Sanitize the ID to prevent SQL injection
    $id = mysqli_real_escape_string($conn, $_GET['id']);

    // Fetch breed details based on the ID
    $sql = "SELECT * FROM breeds WHERE breed_id = $id";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $value = $result->fetch_assoc();
    } else {
        // Breed with the given ID not found, handle accordingly (e.g., redirect)
        echo "<script>alert('Breed not found'); window.location='edit-breed.php';</script>";
        exit;
    }
} else {
    // ID not provided in the GET parameters, handle accordingly (e.g., redirect)
    echo "<script>alert('Invalid breed ID'); window.location='edit-breed.php';</script>";
    exit;
}

// Handle form submission
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit'])) {
    // Validate and sanitize user input (you should implement your own validation)
    $breedName = mysqli_real_escape_string($conn, $_POST['name']);
    $price = mysqli_real_escape_string($conn, $_POST['price']);
    $category = mysqli_real_escape_string($conn, $_POST['category']);

    // File upload handling
    $targetDirectory = "../img/Breeds/"; // Specify the directory where you want to store the uploaded images
    $imageFileType = strtolower(pathinfo($_FILES["image"]["name"], PATHINFO_EXTENSION));

    // Use the existing image path if a new image is not provided
    $imagePath = (!empty($_FILES["image"]["name"])) ? $targetDirectory . basename($_FILES["image"]["name"]) : $value['image_path'];

    // Valid file extensions
    $allowedExtensions = array("jpg", "jpeg", "png", "gif", "webp");

    // Check if the file is a valid image
    if (!empty($_FILES["image"]["name"]) && in_array($imageFileType, $allowedExtensions)) {
        if (move_uploaded_file($_FILES["image"]["tmp_name"], $imagePath)) {
            // Update data in the database
            $updateSql = "UPDATE breeds SET breed_name='$breedName', price='$price', image_path='$imagePath', category='$category' WHERE breed_id=$id";

            if ($conn->query($updateSql) === TRUE) {
                echo "<script>alert('Breed updated successfully'); window.location='breeds.php';</script>";
            } else {
                // Handle the error, display an alert or redirect to an error page
                echo "Error updating breed: " . $conn->error;
            }
        } else {
            echo "Error uploading file. Error code: " . $_FILES["image"]["error"];
        }
    } elseif (empty($_FILES["image"]["name"])) {
        // Update data in the database without changing the existing image path
        $updateSql = "UPDATE breeds SET breed_name='$breedName', price='$price' WHERE breed_id=$id";

        if ($conn->query($updateSql) === TRUE) {
            echo "<script>alert('Breed updated successfully'); window.location='breeds.php';</script>";
        } else {
            // Handle the error, display an alert or redirect to an error page
            echo "Error updating breed: " . $conn->error;
        }
    } else {
        echo "Invalid file type. Allowed types: " . implode(", ", $allowedExtensions);
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Head content (similar to your existing file) -->
</head>
<body class="sb-nav-fixed">
    <!-- Your HTML content (similar to your existing file) -->
</body>
</html>
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
      <script>
         function selectImage() {
           const fileInput = document.getElementById('imageInput');
           fileInput.click();
         }
      </script>
   </head>
   <body class="sb-nav-fixed">
      <!--Navigation Bar-->
      <?php include_once('top.inc.php'); ?>
      <!--Navigation Bar-->
      <div id="layoutSidenav">
         <div id="layoutSidenav_content">
            <main>
               <div class="container-fluid px-4">
                  <h1 class="mt-4">Edit Breed</h1>
                  <ol class="breadcrumb mb-4">
                     <li class="breadcrumb-item active">Edit Breed</li>
                  </ol>
                  <div class="card mb-4">
                     <div class="card-header">
                        <i class="fas fa-table me-1"></i>
                        Edit Breed
                     </div>
                     
                     <div class="card-body breed-form">
                        <div class="cat-error"></div>
                          
                        <form method="POST" enctype="multipart/form-data">
                           <div class="form-group w-50">
                              <label for="breedName">Breed Name</label>
                              <input type="text" name="name" class="form-control" value="<?php echo $value['breed_name'] ?>" placeholder="Enter Breed Name" required>
                           </div>
                           <div class="form-group w-50">
                              <label for="breedPrice">Price</label>
                              <input type="text" name="price" class="form-control" value="<?php echo $value['price'] ?>" placeholder="Enter Price" required>
                           </div>
                           <div class="form-group w-50">
                              <label for="breedImage">Image</label>
                              <img id="previewImage" src="<?php echo $value['image_path'] ?>" style="width: 80px">
                              <a href="javascript:void(0);" onclick="selectImage()">Change Image</a>
                              <input type="file" name="image" id="imageInput" class="form-control" style="display: none;">
                           </div>
                           <div class="form-group w-50">
                              <label for="exampleInputEmail1">Category</label>
                              <input type="text" name="category" value="<?php echo $value['category'] ?>" class="form-control" placeholder="Enter Breed Category">
                           </div>
                           <div class="breed-btn">
                              <button type="submit" name="submit" class="btn btn-success">Update</button>
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
      <script>
         // Update the image preview when a new image is selected
         document.getElementById('imageInput').addEventListener('change', function() {
           const previewImage = document.getElementById('previewImage');
           const file = this.files[0];
           if (file) {
             const reader = new FileReader();
             reader.onload = function() {
               previewImage.src = reader.result;
             };
             reader.readAsDataURL(file);
           }
         });
         
         // Optional: Show the previously selected image thumbnail on page load
         window.addEventListener('DOMContentLoaded', function() {
           const currentImageUrl = "<?php echo $value['image_path']; ?>";
           const previewImage = document.getElementById('previewImage');
           previewImage.src = currentImageUrl;
         });
      </script>
   </body>
</html>
