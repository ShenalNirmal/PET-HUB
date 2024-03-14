<?php
include "../config/con.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["add_user"])) {
        // Add user
        $firstName = $_POST["first_name"];
        $lastName = $_POST["last_name"];
        $email = $_POST["email"];
        $password = password_hash($_POST["password"], PASSWORD_BCRYPT); // Hash the password
        $role = $_POST["role"];

        $sql = "INSERT INTO users (first_name, last_name, email, password, role) VALUES ('$firstName', '$lastName', '$email', '$password', '$role')";

        if ($conn->query($sql) === TRUE) {
            echo "User added successfully!";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }
}

$conn->close();
?>

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
      
   </head>
   <body class="sb-nav-fixed">
      <!--Navigation Bar-->
      <?php include_once('top.inc.php'); ?>
      <!--Navigation Bar-->
      <div id="layoutSidenav">
         <div id="layoutSidenav_content">
         <main>
            <div class="container-fluid px-4">
               <h1 class="mt-4">Add Users</h1>
               <div class="card mb-4">
                  <div class="card-header">
                     <i class="fas fa-table me-1"></i>
                     Add Users
                  </div>
                  <div class="card-body user-form">
                     <!-- ... (unchanged) ... -->
                     <form method="POST" enctype="multipart/form-data">
                        <div class="form-group w-50">
                           <label for="first_name">First Name</label>
                           <input type="text" name="first_name" class="form-control" placeholder="Enter First Name">
                        </div>
                        <div class="form-group w-50">
                           <label for="last_name">Last Name</label>
                           <input type="text" name="last_name" class="form-control" placeholder="Enter Last Name">
                        </div>
                        <div class="form-group w-50">
                           <label for="email">Email</label>
                           <input type="email" name="email" class="form-control" placeholder="Enter Email">
                        </div>
                        <div class="form-group w-50">
                           <label for="password">Password</label>
                           <input type="password" name="password" class="form-control" placeholder="Enter Password">
                        </div>
                        <div class="form-group w-50">
                           <label for="role">Role</label>
                           <select name="role" class="form-control">
                              <option value="admin">Admin</option>
                              <option value="manager">Manager</option>
                              <!-- Add more roles if needed -->
                           </select>
                        </div>
                        <div class="user-btn">
                           <button type="submit" name="add_user" class="btn btn-success">Add User</button>
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