<?php
include "../config/con.php";

// Get data from the form
$orderId = $_POST['orderIdToUpdate'];
$newStatus = $_POST['newStatus'];

// Update the order status in the database
$updateQuery = "UPDATE orders SET order_status = '$newStatus' WHERE id = $orderId";
$result = mysqli_query($conn, $updateQuery);

if ($result) {
    echo "Order status updated successfully!";
} else {
    echo "Error updating order status: " . mysqli_error($conn);
}

// Close the database connection
mysqli_close($conn);
?>
