<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Dashboard Admin</title>
        <script src="https://code.jquery.com/jquery-3.6.4.min.js" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>

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
                        <h1 class="mt-4">Feedbacks</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Feedbacks</li>
                        </ol>
                    
                
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                Feedbacks List
                            </div>
                            <div class="card-body product-tbl">
                                <table id="datatablesSimple">
                                <thead>
                <tr>
                    <th>Name </th>
                    <th>Email</th>
                    <th>Subject</th>
                    <th>Message</th>
                    <th>Date</th>
                </tr>
            </thead>
                                    <tbody>
                <?php
                // Fetch bookings from the database and display in the table
                $booking_query = "SELECT * FROM feedbacks";
                $booking_result = mysqli_query($conn, $booking_query);

                while ($booking_row = mysqli_fetch_assoc($booking_result)) {
                    echo "<tr>";
                    echo "<td>" . $booking_row['name'] . "</td>";
                    echo "<td>" . $booking_row['email'] . "</td>";
                    echo "<td>" . $booking_row['subject'] . "</td>";
                    echo "<td>" . $booking_row['message'] . "</td>";
                    echo "<td>" . $booking_row['created_at'] . "</td>";
                    echo "</tr>";
                }
                ?>
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

         <!-- Modal for updating order status -->
<div class="modal fade" id="editOrderModal" tabindex="-1" aria-labelledby="editOrderModal" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editOrderModal">Update Order Status</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!-- Form for updating order status -->
                <form id="updateOrderStatusForm">
                    <div class="mb-3">
                        <label for="newStatus" class="form-label">New Order Status:</label>
                        <select class="form-select" id="newStatus" name="newStatus" required>
                            <option value="Processing">Processing</option>
                            <option value="Shipped">Shipped</option>
                            <option value="Delivered">Delivered</option>
                            <!-- Add more options based on your order status values -->
                        </select>
                    </div>
                    <input type="hidden" id="orderIdToUpdate" name="orderIdToUpdate" value="">
                    <button type="submit" class="btn btn-primary">Update Status</button>
                </form>
            </div>
        </div>
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
        
        <script>
    // Function to handle order status update
    function updateOrderStatus(orderId) {
        // Set the order ID in the hidden input field in the modal
        document.getElementById('orderIdToUpdate').value = orderId;

        // Show the modal for updating order status
        $('#editOrderModal').modal('show');
    }

    // Submit form for updating order status
    $('#updateOrderStatusForm').submit(function (e) {
        e.preventDefault();

        // Get form data
        var formData = $(this).serialize();

        // AJAX request to update order status
        $.ajax({
            type: 'POST',
            url: 'update_order_status.php', // Replace with the actual file handling the update
            data: formData,
            success: function (response) {
                // Handle the response (e.g., show a success message)
                console.log(response);

                // Close the modal
                $('#editOrderModal').modal('hide');

                // Reload or update the order list table as needed
                location.reload();

            },
            error: function (error) {
                // Handle the error (e.g., show an error message)
                console.error(error);
            }
        });
    });
</script>

    </body>
</html>
