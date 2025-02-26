<?php
include "config.php";

if (isset($_SESSION['user'])) {
    $email = $_SESSION['user'];
    
    // Query to count total items in cart for the logged-in user
    $cart_count_query = "SELECT COUNT(*) as  total_items FROM cart WHERE email='$email'";
    $cart_count_result = mysqli_query($con, $cart_count_query);
    
    // Fetch total count
    $cart_count = 0;
    if ($cart_count_result && mysqli_num_rows($cart_count_result) > 0) {
        $cart_data = mysqli_fetch_assoc($cart_count_result);
        $cart_count = $cart_data['total_items'];
    }
} else {
    $cart_count = 0; // If the user is not logged in
}
?>
