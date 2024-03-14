<?php
   include "../config/con.php";

// Method to get the count of orders
function getOrderCount($conn) {
    $query = "SELECT COUNT(*) AS orderCount FROM orders";
    $result = $conn->query($query);

    if ($result && $result->num_rows > 0) {
        $row = $result->fetch_assoc();
        return $row['orderCount'];
    } else {
        return 0;
    }
}

// Method to get the total earnings
function getTotalEarnings($conn) {
    $query = "SELECT SUM(total_amount) AS totalEarnings FROM orders";
    $result = $conn->query($query);

    if ($result && $result->num_rows > 0) {
        $row = $result->fetch_assoc();
        return $row['totalEarnings'];
    } else {
        return 0;
    }
}

// Method to get the count of products
function getProductCount($conn) {
    $query = "SELECT COUNT(*) AS productCount FROM products";
    $result = $conn->query($query);

    if ($result && $result->num_rows > 0) {
        $row = $result->fetch_assoc();
        return $row['productCount'];
    } else {
        return 0;
    }
}

// Close the database connection
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
        <title>Dashboard Manager</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
        <!--Navigation Bar-->
        <?php require('top.inc.php');?>
         <!--Navigation Bar-->

         <div id="layoutSidenav">
         <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Dashboard</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ol>
                    
                        <div class="row">
                        <div class="col-xl-3 col-sm-6 col-12">
                        <div class="card shadow border-0">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col">
                                        <span class="h6 font-semibold text-muted text-sm d-block mb-2">Orders</span>
                                        <?php
                    $orderCountQuery = "SELECT COUNT(*) AS orderCount FROM orders";
                    $orderCountResult = $conn->query($orderCountQuery);

                    if ($orderCountResult && $orderCountResult->num_rows > 0) {
                        $orderCountRow = $orderCountResult->fetch_assoc();
                        echo '<span class="h3 font-bold mb-0">' . $orderCountRow['orderCount'] . '</span>';
                    } else {
                        echo '<span class="h3 font-bold mb-0">0</span>';
                    }
                    ?>                                    </div>
                                    <div class="col-auto">
                                        <div class="icon icon-shape bg-primary text-white text-lg rounded-circle">
                                            <i class="bi bi-people"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="mt-2 mb-0 text-sm">
                                    <span class="badge badge-pill bg-soft-success text-success me-2">
                                        <i class="bi bi-arrow-up me-1"></i>30%
                                    </span>
                                    <span class="text-nowrap text-xs text-muted">Since last month</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6 col-12">
                        <div class="card shadow border-0">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col">
                                        <span class="h6 font-semibold text-muted text-sm d-block mb-2">Earnings</span>
                                        <?php
                    $totalEarningsQuery = "SELECT SUM(total) AS totalEarnings FROM orders";
                    $totalEarningsResult = $conn->query($totalEarningsQuery);

                    if ($totalEarningsResult && $totalEarningsResult->num_rows > 0) {
                        $totalEarningsRow = $totalEarningsResult->fetch_assoc();
                        echo '<span class="h3 font-bold mb-0">' . $totalEarningsRow['totalEarnings'] . '</span>';
                    } else {
                        echo '<span class="h3 font-bold mb-0">0</span>';
                    }
                    ?>                                    </div>
                                    <div class="col-auto">
                                        <div class="icon icon-shape bg-primary text-white text-lg rounded-circle">
                                            <i class="bi bi-people"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="mt-2 mb-0 text-sm">
                                    <span class="badge badge-pill bg-soft-success text-success me-2">
                                        <i class="bi bi-arrow-up me-1"></i>30%
                                    </span>
                                    <span class="text-nowrap text-xs text-muted">Since last month</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    

                    <div class="col-xl-3 col-sm-6 col-12">
                        <div class="card shadow border-0">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col">
                                        <span class="h6 font-semibold text-muted text-sm d-block mb-2">No of Products</span>
                                        <?php
                    $productCountQuery = "SELECT COUNT(*) AS productCount FROM products";
                    $productCountResult = $conn->query($productCountQuery);

                    if ($productCountResult && $productCountResult->num_rows > 0) {
                        $productCountRow = $productCountResult->fetch_assoc();
                        echo '<span class="h3 font-bold mb-0">' . $productCountRow['productCount'] . '</span>';
                    } else {
                        echo '<span class="h3 font-bold mb-0">0</span>';
                    }
                    ?>                                    </div>
                                    <div class="col-auto">
                                        <div class="icon icon-shape bg-primary text-white text-lg rounded-circle">
                                            <i class="bi bi-people"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="mt-2 mb-0 text-sm">
                                    <span class="badge badge-pill bg-soft-success text-success me-2">
                                        <i class="bi bi-arrow-up me-1"></i>30%
                                    </span>
                                    <span class="text-nowrap text-xs text-muted">Since last month</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-3 col-sm-6 col-12 mt-3">
                        <div class="card shadow border-0">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col">
                                        <span class="h6 font-semibold text-muted text-sm d-block mb-2">No of Customers</span>
                                        <?php
                    $customerCountQuery = "SELECT COUNT(*) AS customerCount FROM users WHERE role = 'user'";
                    $customerCountResult = $conn->query($customerCountQuery);

                    if ($customerCountResult && $customerCountResult->num_rows > 0) {
                        $customerCountRow = $customerCountResult->fetch_assoc();
                        echo '<span class="h3 font-bold mb-0">' . $customerCountRow['customerCount'] . '</span>';
                    } else {
                        echo '<span class="h3 font-bold mb-0">0</span>';
                    }
                    ?>                                    </div>
                                    <div class="col-auto">
                                        <div class="icon icon-shape bg-primary text-white text-lg rounded-circle">
                                            <i class="bi bi-people"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="mt-2 mb-0 text-sm">
                                    
                                </div>
                            </div>
                        </div>
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






         <!--Navigation Bar-->
        <?php require('sidebar.inc.php');?>
         <!--Navigation Bar-->
        
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/chart-area-demo.js"></script>
        <script src="assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
        <script src="js/datatables-simple-demo.js"></script>
        <script type="text/javascript">
            function preventBack(){
                window.history.forward();
                };
                setTimeout("preventBack()",0);
                window.unload=function(){
                    null;
                    }
        </script>
    </body>
</html>
