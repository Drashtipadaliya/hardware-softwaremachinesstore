<?php
//session_start(); // Make sure session is started
include 'header.php';
include 'config.php';

// Check if user session is set
if (!isset($_SESSION['user'])) {
    echo "<script>alert('Please log in to view your bill.'); location.href='login.php';</script>";
    exit();
}

// Get user session
$email = mysqli_real_escape_string($con, $_SESSION['user']);

// Fetch cart details
$qry = "SELECT * FROM bill WHERE email='$email' ORDER BY id DESC LIMIT 1" ;
$result = mysqli_query($con, $qry);

$subtotal = 0;
//$shipping_rate = 90; // Fixed shipping rate

// Calculate the subtotal from cart items
if ($result && mysqli_num_rows($result) > 0) {
    $bill = mysqli_fetch_array($result, MYSQLI_ASSOC);
    $subtotal = $bill['amount'];
} else {
    echo "<script>alert('No bill details found.'); location.href='index.php';</script>";
    exit();
}
// Calculate final amount (subtotal + shipping rate)
$total_amount = $subtotal;
?>
<br />
<br />
<!-- Display Bill Details in Form Format -->
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow-lg border-0">
                <div class="card-header bg-primary text-white text-center">
                    <h2>Bill Details</h2>
                </div>
                <div class="card-body">
                    <form>
                        <div class="form-group row">
                            <label for="firstName" class="col-sm-4 col-form-label">First Name:</label>
                            <div class="col-sm-8">
                                <input type="text" id="firstName" class="form-control" value="<?php echo htmlspecialchars($_SESSION['uname'] ?? ''); ?>" readonly>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="lastName" class="col-sm-4 col-form-label">Last Name:</label>
                            <div class="col-sm-8">
                                <input type="text" id="lastName" class="form-control" value="<?php echo htmlspecialchars($_SESSION['lname'] ?? ''); ?>" readonly>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="mobileNo" class="col-sm-4 col-form-label">Mobile No:</label>
                            <div class="col-sm-8">
                                <input type="text" id="mobileNo" class="form-control" value="<?php echo htmlspecialchars($_SESSION['umn'] ?? ''); ?>" readonly>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="email" class="col-sm-4 col-form-label">Email:</label>
                            <div class="col-sm-8">
                                <input type="email" id="email" class="form-control" value="<?php echo htmlspecialchars($_SESSION['user'] ?? ''); ?>" readonly>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="totalAmount" class="col-sm-4 col-form-label">Total Amount:</label>
                            <div class="col-sm-8">
                                <input type="text" id="totalAmount" class="form-control font-weight-bold" value="Rs. <?php echo htmlspecialchars($total_amount); ?> /-" readonly>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="paymentMethod" class="col-sm-4 col-form-label">Payment Method:</label>
                            <div class="col-sm-8">
                                <input type="text" id="paymentMethod" class="form-control" value="Cash on Delivery" readonly>
                            </div>
                        </div>
                        <div class="text-center mt-4">
                            <a href="pdf.php" class="btn btn-success">
                                <i class="fas fa-download"></i> Download PDF
                            </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<br />
<br />
<!-- Bootstrap and FontAwesome for icons -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

<?php include 'footer.php'; ?>
