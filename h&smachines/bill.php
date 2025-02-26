<?php
include "header.php";
include "config.php";
?>

<br>

<div class="container mt-5">
    <div class="row">
        <!-- Billing Form Section -->
        <div class="col-md-6">
            <div class="form-container">
                <h1 class="section-title">Bill Details</h1>
                <form name="register" method="post">
                    <div class="form-group">
                        <label for="fname">First Name:</label>
                        <input type="text" id="fname" name="fname" class="form-control" value="<?php echo htmlspecialchars($_SESSION['uname']); ?>" placeholder="First Name" required pattern="[A-Za-z ]+" title="Enter alphabetic characters only">
                    </div>
                    <div class="form-group">
                        <label for="lname">Last Name:</label>
                        <input type="text" id="lname" name="lname" class="form-control" value="<?php echo htmlspecialchars($_SESSION['lname']); ?>" placeholder="Last Name" required pattern="[A-Za-z ]+" title="Enter alphabetic characters only">
                    </div>
                    <div class="form-group">
                        <label for="mobno">Mobile No:</label>
                        <input type="text" id="mobno" name="mobno" class="form-control" value="<?php echo htmlspecialchars($_SESSION['umn']); ?>" placeholder="Mobile No" maxlength="10" required pattern="[0-9]{10}" title="Enter a 10-digit numeric value">
                    </div>
                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input type="email" id="email" name="email" class="form-control" value="<?php echo htmlspecialchars($_SESSION['user']); ?>" placeholder="Your email address" required pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" title="Enter a valid email address">
                    </div>

                    <?php
                    $email = mysqli_real_escape_string($con, $_SESSION['user']);
                    $qry = "SELECT * FROM cart WHERE email='$email'";
                    $result = mysqli_query($con, $qry);
                    $subtotal = 0;
                    while ($rec = mysqli_fetch_array($result)) {
                        $total = $rec[3] * $rec[4]; // Quantity * Price
                        $subtotal += $total;
                    }
                    $amount = $subtotal + 90; // Shipping rate
                    ?>
                    <input type="hidden" name="amount" value="<?php echo $amount; ?>">
                    <div class="form-group">
                        <label for="address">Address:</label>
                        <input type="text" id="address" name="address" class="form-control" value="<?php echo htmlspecialchars($_SESSION['ars']); ?>" placeholder="Your address">
                    </div>

                    <button type="submit" class="btn btn-primary" name="submit">Submit</button>
                </form>
            </div>
        </div>

        <!-- Order Details Section -->
        <div class="col-md-6">
            <div class="order-details">
                <?php
                if (isset($_POST['submit'])) {
                    $fnm = mysqli_real_escape_string($con, $_POST['fname']);
                    $lnm = mysqli_real_escape_string($con, $_POST['lname']);
                    $mob = mysqli_real_escape_string($con, $_POST['mobno']);
                    $email = mysqli_real_escape_string($con, $_POST['email']);
                    $amount = mysqli_real_escape_string($con, $_POST['amount']);
                    $ads = mysqli_real_escape_string($con, $_POST['address']);
                    $qur = "INSERT INTO bill (fnm, lnm, mobileno, email, amount, ads) VALUES ('$fnm', '$lnm', '$mob', '$email', '$amount', '$ads')";
                    if (mysqli_query($con, $qur)) {
                        $del = "delete FROM cart WHERE email='$email'";
                        mysqli_query($con, $del);
                        echo "<script>alert('Successfully generated bill'); location.href='order.php';</script>";
                    } else {
                        echo "<script>alert('Error generating bill');</script>";
                    }
                }
                ?>
                <h1 class="section-title">Order Details</h1>
                <table class="order-summary">
                    <thead>
                        <tr>
                            <th>Product</th>
                            <th>Total</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $qry = "SELECT * FROM cart WHERE email='$email'";
                        $result = mysqli_query($con, $qry);
                        $subtotal = 0;
                        while ($res = mysqli_fetch_array($result)) {
                            $total = $res[3] * $res[4];
                            $subtotal += $total;
                        ?>
                            <tr>
                                <td><?php echo htmlspecialchars($res[1]); ?> x <b><?php echo htmlspecialchars($res[3]); ?></b></td>
                                <td>Rs. <?php echo htmlspecialchars($total); ?> /-</td>
                            </tr>
                        <?php
                        }
                        ?>
                        <tr>
                            <td><b>Subtotal</b></td>
                            <td>Rs. <?php echo htmlspecialchars($subtotal); ?> /-</td>
                        </tr>
                        <tr>
                            <td><b>Shipping Rate</b></td>
                            <td>Rs. 90 /-</td>
                        </tr>
                        <tr>
                            <td><b>Payment Method</b></td>
                            <td>Cash on Delivery</td>
                        </tr>
                        <tr>
                            <td><b>Total Amount</b></td>
                            <td><b>Rs. <?php echo htmlspecialchars($amount); ?> /-</b></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<style>
/* General Styles */
body {
    font-family: Arial, sans-serif;
}

.form-container, .order-details {
    background: #fff;
    border-radius: 8px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    padding: 20px;
    margin-bottom: 30px;
}

.section-title {
    color: #333;
    font-size: 1.8em;
    margin-bottom: 20px;
    text-align: center;
}

.form-group {
    margin-bottom: 15px;
}

.form-control {
    width: 100%;
    padding: 12px;
    border-radius: 5px;
    border: 1px solid #ddd;
}

.btn-primary {
    background-color: #007bff;
    border: none;
    color: #fff;
    padding: 10px 20px;
    border-radius: 5px;
    font-size: 1em;
    cursor: pointer;
}

.btn-primary:hover {
    background-color: #0056b3;
}

.order-summary {
    width: 100%;
    border-collapse: collapse;
    font-size: 1em;
}

.order-summary th, .order-summary td {
    padding: 10px;
    border: 1px solid #ddd;
    text-align: center;
}

.order-summary th {
    background-color: #f4f4f4;
}

.order-summary tr:nth-child(even) {
    background-color: #f9f9f9;
}

/* Responsive Styles */
@media (max-width: 768px) {
    .col-md-6 {
        width: 100%;
        padding: 0;
    }

    .form-container, .order-details {
        padding: 15px;
    }

    .section-title {
        font-size: 1.5em;
    }
}
</style>

<?php 
include "footer.php";
?>
