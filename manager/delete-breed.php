<?php
include "../config/con.php";

// Check if ID is present in the GET parameters
if (isset($_GET['id']) && !empty($_GET['id'])) {
    // Sanitize the ID to prevent SQL injection
    $id = mysqli_real_escape_string($conn, $_GET['id']);

    // Delete breed from the database
    $deleteSql = "DELETE FROM breeds WHERE breed_id = $id";

    if ($conn->query($deleteSql) === TRUE) {
        // echo "<script>alert('Breed deleted successfully'); window.location='breeds.php';</script>";
    } else {
        // Handle the error, display an alert or redirect to an error page
        echo "Error deleting breed: " . $conn->error;
    }
} else {
    // ID not provided in the GET parameters, handle accordingly (e.g., redirect)
    echo "<script>alert('Invalid breed ID'); window.location='breeds.php';</script>";
    exit;
}
?>
