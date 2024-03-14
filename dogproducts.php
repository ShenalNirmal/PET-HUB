<?php
include "./config/con.php";
include "./inc/header.php";

// Check if a search query is provided
$search_query = isset($_GET['search']) ? $_GET['search'] : '';

// Assuming you have a table named 'products' with columns: id, name, price, image
$sql = "SELECT * FROM products WHERE category='Dog Food'";

// Modify the SQL query if a search query is provided
if (!empty($search_query)) {
    $sql .= " WHERE name LIKE '%$search_query%'";
}

$result = $conn->query($sql);
?>

<!-- Team Start -->
<div class="container mt-5 pt-5 pb-3">
    <div class="d-flex flex-column text-center mb-5">
        <h4 class="text-secondary mb-3">Pet Products</h4>
        <h1 class="display-4 m-0">
            Best <span class="text-primary">Seller</span>
        </h1>
    </div>
 <!-- Search Bar -->
<div class="container mt-3">
    <form class="form-inline" method="get" action="">
        <div class="form-group mr-2">
            <input type="text" class="form-control" name="search" placeholder="Search Products" style="width: 800px;" value="<?php echo htmlspecialchars($search_query); ?>">
            <div class="input-group-append">
                <button type="submit" class="btn btn-primary btn-md" style="height: 40px;">
                    <i class="fas fa-search"></i>
                </button>
            </div>
        </div>
    </form>
</div>

    <div class="row">
        <?php
        // Loop through the products and display them
        while ($row = $result->fetch_assoc()) {
        ?>
            <div class="col-lg-3 col-md-6">
                <div class="team card position-relative overflow-hidden border-0 mb-4">
                    <img class="card-img-top" src="<?php echo "Products/".$row['image_path']; ?>" alt="" />
                    <div class="card-body text-center p-0">
                        <div class="team-text d-flex flex-column justify-content-center bg-light">
                            <h5><?php echo $row['name']; ?></h5>
                            <i>Rs. <?php echo $row['price']; ?></i>
                        </div>
                        <div class="team-social d-flex align-items-center justify-content-center bg-dark">
                            <a href="payment.php?product_name=<?php echo urlencode($row['name']); ?>&product_price=<?php echo urlencode($row['price']); ?>" class="btn btn-lg btn-primary px-3 d-none d-lg-block">Buy Now</a>
                        </div>
                    </div>
                </div>
            </div>
        <?php
        }
        ?>
    </div>
</div>
<!-- Team End -->

<?php
include "./inc/footer.php";
?>
