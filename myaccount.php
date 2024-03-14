<?php

include "./inc/header.php";
include "./config/con.php";

$user_id = $_SESSION['user_id'];

// Fetch order data from the database
$order_sql = "SELECT * FROM orders WHERE user_id = ?";
$order_stmt = $conn->prepare($order_sql);
$order_stmt->bind_param("i", $user_id);
$order_stmt->execute();
$order_result = $order_stmt->get_result();

// Check if there are any orders
if ($order_result->num_rows > 0) {
    $orders = $order_result->fetch_all(MYSQLI_ASSOC);
} else {
    $orders = [];
}

// Fetch booking data from the database
$booking_sql = "SELECT * FROM booking WHERE user_id = ?";
$booking_stmt = $conn->prepare($booking_sql);
$booking_stmt->bind_param("i", $user_id);
$booking_stmt->execute();
$booking_result = $booking_stmt->get_result();

// Check if there are any bookings
if ($booking_result->num_rows > 0) {
    $bookings = $booking_result->fetch_all(MYSQLI_ASSOC);
} else {
    $bookings = [];
}
?>

<!-- SignUp Form main page-->
<ul class="nav nav-pills mb-3 mt-3" id="pills-tab" role="tablist">
    <li class="nav-item mr-3" role="presentation">
        <button class="nav-link active" id="pills-home-tab" data-toggle="pill" data-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">My orders</button>
    </li>
    <li class="nav-item" role="presentation">
        <button class="nav-link" id="pills-profile-tab" data-toggle="pill" data-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">My bookings</button>
    </li>
</ul>
<div class="tab-content" id="pills-tabContent">
    <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
        <?php if (!empty($orders)) : ?>
            <h3>Order Details</h3>
            <table class="table">
                <thead>
                    <tr>
                        <th>Order ID</th>
                        <th>Product</th>
                        <th>Total</th>
                        <th>Order Status</th>
                        <th>Date</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($orders as $order) : ?>
                        <tr>
                            <td><?php echo $order['id']; ?></td>
                            <td><?php echo $order['product']; ?></td>
                            <td><?php echo $order['total']; ?></td>
                            <td><?php echo $order['order_status']; ?></td>
                            <td><?php echo $order['date']; ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        <?php else : ?>
            <p>No orders found.</p>
        <?php endif; ?>
    </div>
    <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
    <?php if (!empty($bookings)) : ?>
        <h3>Booking Details</h3>
        <table class="table">
            <thead>
                <tr>
                    <th>Booking ID</th>
                    <th>Full Name</th>
                    <th>Email</th>
                    <th>Reservation Date</th>
                    <th>Reservation Time</th>
                    <th>Service Name</th>
                    <th>Price</th>
                    <th>Status</th>
                    <th>Action</th> <!-- Added a new column for Action -->
                </tr>
            </thead>
            <tbody>
                <?php foreach ($bookings as $booking) : ?>
                    <tr>
                        <td><?php echo $booking['id']; ?></td>
                        <td><?php echo $booking['full_name']; ?></td>
                        <td><?php echo $booking['email']; ?></td>
                        <td><?php echo $booking['reservation_date']; ?></td>
                        <td><?php echo $booking['reservation_time']; ?></td>
                        <td><?php echo $booking['service_name']; ?></td>
                        <td><?php echo $booking['price']; ?></td>
                        <td><?php echo $booking['status']; ?></td>
                        <td>
                            <?php if ($booking['status'] == 'pending') : ?>
                                <!-- Add a cancel button/link -->
                                <a href="cancel_booking.php?booking_id=<?php echo $booking['id']; ?>" class="btn btn-danger">Cancel</a>
                            <?php else : ?>
                                <!-- Add a message or alternative content for bookings not in Confirmed status -->
                                <span>Not applicable</span>
                            <?php endif; ?>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    <?php else : ?>
        <p>No bookings found.</p>
    <?php endif; ?>
</div>

</div>

<?php include "./inc/footer.php" ?>
