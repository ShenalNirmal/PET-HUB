<?php
// Include the database connection file
include "./config/con.php";

// Check if the booking_id is provided in the URL
if (isset($_GET['booking_id'])) {
    $booking_id = $_GET['booking_id'];

    // Perform the database update to cancel the booking
    $sql = "UPDATE booking SET status = 'Cancel' WHERE id = ?";

    $stmt = $conn->prepare($sql);
    
    // Bind parameters
    $stmt->bind_param('i', $booking_id);

    // Execute the query
    if ($stmt->execute()) {
        // Redirect back to the page where bookings are displayed
        header('Location: myaccount.php'); // Change 'bookings.php' to the actual page URL
        exit();
    } else {
        // Handle the case where the update fails
        echo "Error updating booking status";
    }
} else {
    // Handle the case where booking_id is not provided in the URL
    echo "Booking ID not provided";
}
?>
