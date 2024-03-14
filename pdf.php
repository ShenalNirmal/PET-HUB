<?php
session_start();

include "./config/con.php";


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve the form data
    $user_id = $_SESSION["user_id"];
    $full_name = $_POST['full_name'];
    $email = $_POST['email'];
    $reservation_date = $_POST['reservation_date'];
    $reservation_time = $_POST['reservation_time'];
    $service_name = $_POST['service_name'];
    $price = $_POST['price'];
    $card_name = $_POST['card_name'];
    $card_number = $_POST['card_number'];
    $exp_month = $_POST['exp_month'];
    $exp_year = $_POST['exp_year'];
    $cvv = $_POST['cvv'];
    
    // Insert data into the booking table
    $insertQuery = "INSERT INTO booking (user_id, full_name, email, reservation_date, reservation_time, service_name, price) 
                    VALUES ('$user_id', '$full_name', '$email', '$reservation_date', '$reservation_time', '$service_name', '$price')";
    


if ($conn->query($insertQuery) === TRUE) {

require('fpdf/fpdf.php');

    // Create a PDF
    $pdf = new FPDF();

    // Add a new page
    $pdf->AddPage();

    // Set the font for the text
    $pdf->SetFont('Arial', 'B', 20);

    // Print Invoice header
    $pdf->Cell(71, 10, '', 0, 0);
    $pdf->Cell(59, 5, 'Invoice', 0, 0);
    $pdf->Cell(59, 10, '', 0, 1);

     // Add a link to the index page
     $pdf->SetFont('Arial', 'U', 12);
     $pdf->SetTextColor(0, 0, 255);
     $pdf->Cell(0, 10, 'Back to Index', 0, 1, 'C', false, 'http://localhost/pethub');     
     $pdf->SetTextColor(0, 0, 0); // Reset text color
 

    // Print Address and Details header
    $pdf->SetFont('Arial', 'B', 15);
    $pdf->Cell(71, 5, 'Address', 0, 0);
    $pdf->Cell(59, 5, '', 0, 0);
    $pdf->Cell(59, 5, 'Details', 0, 1);

    // Print Address details
    $pdf->SetFont('Arial', '', 10);

    $pdf->Cell(130, 5, $full_name, 0, 0);

    $pdf->Cell(25, 5, 'Customer ID', 0, 0);
    $pdf->Cell(34, 5, '001', 0, 1);

    $pdf->Cell(130, 5, 'City, 750028', 0, 0);
    $pdf->Cell(25, 5, 'Invoice Date:', 0, 0);
    $pdf->Cell(34, 5, date('jS M Y'), 0, 1);

    $pdf->Cell(130, 5, '', 0, 0);
    $pdf->Cell(25, 5, 'Invoice No:', 0, 0);
    $pdf->Cell(34, 5, 'ORD001', 0, 1);

    // Print Bill To
    $pdf->SetFont('Arial', 'B', 15);
    $pdf->Cell(130, 5, 'Bill To', 0, 0);
    $pdf->Cell(59, 5, "", 0, 0);
    $pdf->SetFont('Arial', 'B', 10);
    $pdf->Cell(189, 10, "", 0, 1);

    // Print table headers
    $pdf->Cell(50, 10, '', 0, 1);
    $pdf->SetFont('Arial', 'B', 10);
    $pdf->Cell(80, 6, 'Description', 1, 0, 'C');
    $pdf->Cell(23, 6, 'Qty', 1, 0, 'C*');
    $pdf->Cell(30, 6, 'Unit Price', 1, 0, 'C');
    $pdf->Cell(20, 6, 'SalesTax', 1, 0, 'C');
    $pdf->Cell(25, 6, 'Total', 1, 1, 'C');/*end of line*/

    // Print customer and payment details
    $pdf->SetFont('Arial', '', 10);
    $pdf->Cell(80, 6, $service_name, 1);
    $pdf->Cell(23, 6, '1', 1, 0, 'C*');
    $pdf->Cell(30, 6, 'Rs' . $price, 1, 0, 'C');
    $pdf->Cell(20, 6, 'Rs0.00', 1, 0, 'C');
    $pdf->Cell(25, 6, 'Rs' . $price, 1, 1, 'C');/*end of line*/

    // Output the PDF
    $pdf->Output();

    exit();


    }else{
        echo "Error: " . $insertQuery . "<br>" . $conn->error;

    }
    
} else {
    // If the form is not submitted via POST, redirect to the booking page
    header("Location: booknow.php");
    exit();
}

?>
