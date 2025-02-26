<?php
session_start();
include "config.php";

// Check if the user is logged in
if (!isset($_SESSION['user'])) {
    echo "<script>alert('Please log in first.'); location.href='login.php';</script>";
    exit();
}

// Get the product ID from the URL
if (isset($_GET['id'])) {
    $id = mysqli_real_escape_string($con, $_GET['id']);
    $email = mysqli_real_escape_string($con, $_SESSION['user']);

    // Delete the product from the cart for the logged-in user
    $qry = "DELETE FROM cart WHERE id='$id' AND email='$email'";
    $result = mysqli_query($con, $qry);

    if ($result) {
        echo "<script>alert('Product deleted successfully.'); location.href='view-cart.php';</script>";
    } else {
        echo "<script>alert('Failed to delete the product.'); location.href='view-cart.php';</script>";
    }
} else {
    echo "<script>alert('No product selected.'); location.href='view-cart.php';</script>";
}
?>
