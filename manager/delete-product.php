<?php
include "../config/con.php";

// Check if ID is present in the GET parameters
if (isset($_GET['id']) && !empty($_GET['id'])) {
    // Sanitize the ID to prevent SQL injection
    $id = mysqli_real_escape_string($conn, $_GET['id']);

    // Delete product from the database
    $deleteSql = "DELETE FROM products WHERE id = $id";

    if ($conn->query($deleteSql) === TRUE) {
        // echo "<script>alert('Product deleted successfully'); window.location='products.php';</script>";
    } else {
        // Handle the error, display an alert or redirect to an error page
        echo "Error deleting product: " . $conn->error;
    }
} else {
    // ID not provided in the GET parameters, handle accordingly (e.g., redirect)
    // echo "<script>alert('Invalid product ID'); window.location='products.php';</script>";
    exit;
}
?>
