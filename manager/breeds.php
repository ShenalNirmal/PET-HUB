<?php
include "../config/con.php";

// Fetch product data from the database
$sql = "SELECT * FROM breeds";
$result = $conn->query($sql);

// Check if there are any products
if ($result->num_rows > 0) {
    $breeds = $result->fetch_all(MYSQLI_ASSOC);
} else {
    $breeds = [];
}
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
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</head>
<body class="sb-nav-fixed">
    <!-- Navigation Bar -->
    <?php include_once('top.inc.php'); ?>
    <!-- Navigation Bar -->

    <div id="layoutSidenav">
        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid px-4">
                    <h1 class="mt-4">Breeds</h1>
                    
                    <div class="card mb-4">
                        <div class="card-header">
                            <i class="fas fa-table me-1"></i>
                            Breeds List
                        </div>
                        <div class="card-body product-tbl">
                            <table id="datatablesSimple">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Image</th>
                                        <th>Price</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($breeds as $breed): ?>
                                        <tr>
                                            <td><?php echo $breed['breed_name']; ?></td>
                                            <td><img src="<?= $breed['image_path']; ?>" alt="<?= $breed['breed_name']; ?>" style="max-width: 100px; max-height: 100px;"></td>
                                            <td><?php echo $breed['price']; ?></td>
                                            <td>
                                                <a href="edit-breed.php?id=<?= $breed['breed_id']; ?>" class="btn btn-primary btn-sm">Edit</a>
                                                <button class="btn btn-danger btn-sm" onclick="confirmDelete(<?= $breed['breed_id']; ?>)">Delete</button>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
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

    <!-- Navigation Bar -->
    <?php require('sidebar.inc.php'); ?>
    <!-- Navigation Bar -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="js/scripts.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
    <script src="assets/demo/chart-area-demo.js"></script>
    <script src="assets/demo/chart-bar-demo.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
    <script src="js/datatables-simple-demo.js"></script>
    <script>
    function confirmDelete(productId) {
        Swal.fire({
            title: 'Are you sure?',
            text: 'You will not be able to recover this product!',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonText: 'Yes, delete it!',
            cancelButtonText: 'Cancel',
        }).then((result) => {
            if (result.isConfirmed) {
                // If user clicks 'Yes', send AJAX request to delete_product.php
                fetch(`delete-breed.php?id=${productId}`)
                    .then(response => response.text())
                    .then(data => {
                        Swal.fire({
                            title: 'Deleted!',
                            text: data,
                            icon: 'success',
                        }).then(() => {
                            // Reload the page after deletion
                            location.reload();
                        });
                    })
                    .catch(error => {
                        Swal.fire({
                            title: 'Error!',
                            text: 'Error deleting product',
                            icon: 'error',
                        });
                    });
            }
        });
    }
</script>
</body>
</html>
