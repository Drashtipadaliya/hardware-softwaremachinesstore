<?php
// Include FPDF library
require('fpdf/fpdf.php');
include 'config.php';
session_start();

// Set the timezone (optional, adjust according to your location)
date_default_timezone_set('Asia/Kolkata'); // Change to your timezone

// Check if user session is set
if (!isset($_SESSION['user'])) {
    echo "<script>alert('Please log in to download your bill.'); location.href='login.php';</script>";
    exit();
}

// Get user session and escape string
$email = mysqli_real_escape_string($con, $_SESSION['user']);

// Fetch the latest bill details
$qry = "SELECT * FROM bill WHERE email='$email' ORDER BY id DESC LIMIT 1";
$result = mysqli_query($con, $qry);

if ($result && mysqli_num_rows($result) > 0) {
    $bill = mysqli_fetch_array($result, MYSQLI_ASSOC);
    $subtotal = $bill['amount'];
} else {
    echo "<script>alert('No bill details found.'); location.href='index.php';</script>";
    exit();
}

// Get user details from session
$firstName = isset($_SESSION['uname']) ? $_SESSION['uname'] : 'N/A';
$lastName = isset($_SESSION['lname']) ? $_SESSION['lname'] : 'N/A';
$mobileNo = isset($_SESSION['umn']) ? $_SESSION['umn'] : 'N/A';

// Get the current date and time in desired formats
$currentDate = date('d/m/Y'); // Format date as DD/MM/YYYY
$currentTime = date('H:i:s'); // Format time as HH:MM:SS (24-hour format)
$dayOfWeek = date('l'); // Get the day of the week (e.g., Monday)

// Create PDF using FPDF
$pdf = new FPDF();
$pdf->AddPage();

// Set background color (for example, light gray)
$pdf->SetFillColor(240, 240, 240); // RGB values for background color
$pdf->Rect(0, 0, 210, 297, 'F'); // Draw rectangle to fill the page

// Display the current time at the time of PDF generation
$pdf->SetFont('Arial', '', 12);
$pdf->Cell(0, 10, 'Time: ' . $currentTime, 0, 1, 'L');

// Set the title "H_SMACHINES STORE" at the top center
$pdf->SetFont('Arial', 'B', 20);
$pdf->Cell(0, 10, 'H_SMACHINES STORE', 0, 1, 'C');

// Display the current date and day on the top right corner
$pdf->SetFont('Arial', '', 12);
$pdf->Cell(0, 10, 'Date: ' . $currentDate, 0, 1, 'R');
$pdf->Cell(0, 10, 'Day: ' . $dayOfWeek, 0, 1, 'R');

// Line break
$pdf->Ln(10);

// Add Bill Details
$pdf->SetFont('Arial', '', 12);
$pdf->Cell(50, 10, 'First Name: ', 0, 0);
$pdf->Cell(50, 10, $firstName, 0, 1);

$pdf->Cell(50, 10, 'Last Name: ', 0, 0);
$pdf->Cell(50, 10, $lastName, 0, 1);

$pdf->Cell(50, 10, 'Mobile No: ', 0, 0);
$pdf->Cell(50, 10, $mobileNo, 0, 1);

$pdf->Cell(50, 10, 'Email: ', 0, 0);
$pdf->Cell(50, 10, $email, 0, 1);

$pdf->Cell(50, 10, 'Subtotal: ', 0, 0);
$pdf->Cell(50, 10, 'Rs. ' . number_format($subtotal, 2) . ' /-', 0, 1);

$pdf->Cell(50, 10, 'Payment Method: ', 0, 0);
$pdf->Cell(50, 10, 'Cash on Delivery', 0, 1);

// Line break
$pdf->Ln(10);

// Add Footer "Thank you for visiting our site" at the bottom center
$pdf->SetY(250); // Positioning the footer 30 units from the bottom of the page
$pdf->SetFont('Arial', 'I', 12);
$pdf->Cell(0, 10, 'THANK YOU FOR VISITING OUR SITE', 0, 0, 'C');

// Output PDF
$pdf->Output('D', 'bill_details.pdf'); // D: Download PDF

exit();
?>
