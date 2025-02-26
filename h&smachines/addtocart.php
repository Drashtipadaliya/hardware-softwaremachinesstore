<?php
session_start();
if (!isset($_SESSION['user'])) {
    echo "<script>alert('Please log in first.'); location.href='login.php';</script>";
    exit();
}

include "config.php";

$email = $_SESSION['user'];
$cnm = $_POST['pname'];
$pr = (float)$_POST['price']; // Ensure price is a float
$img = $_POST['img'];
$qty = (int)$_POST['qty']; // Ensure quantity is an integer

/*Debugging output
echo "User email: $email<br>";
echo "Product name: $cnm<br>";
echo "Quantity: $qty<br>";
echo "Price: $pr<br>";*/

// Check if the product is already in the cart
$qry = "SELECT * FROM cart WHERE pname=? AND email=?";
$stmt = $con->prepare($qry);
$stmt->bind_param("ss", $cnm, $email);
$stmt->execute();
$result = $stmt->get_result();
$row = $result->fetch_assoc();

// Debugging: Check what $row contains
if ($row) {
   // echo "Row found: ";
    //print_r($row);
} else {
    echo "No row found.";
}

if ($row) { // Check if $row is not null
    // If the product exists, update the quantity and possibly the price
    $new_qty = $row['qty'] + $qty; // Add new quantity
    
    // Only update the price if it has changed
    if ($row['price'] != $pr) {
        $update_query = "UPDATE cart SET qty=?, price=? WHERE pname=? AND email=?";
        $update_stmt = $con->prepare($update_query);
        $update_stmt->bind_param("ids", $new_qty, $pr, $cnm, $email);
    } else {
        // If price hasn't changed, just update the quantity
        $update_query = "UPDATE cart SET qty=? WHERE pname=? AND email=?";
        $update_stmt = $con->prepare($update_query);
        $update_stmt->bind_param("iss", $new_qty, $cnm, $email);
    }

    // Execute the update
    if ($update_stmt->execute()) {
        echo "<script>alert('Quantity updated successfully.'); location.href='view-cart.php';</script>";
    } else {
        echo "<script>alert('Failed to update quantity: " . $con->error . "');</script>";
    }
    $update_stmt->close();
} else {
    // If the product does not exist, insert a new entry
    $insert_query = "INSERT INTO cart (pname, image, qty, price, email) VALUES (?, ?, ?, ?, ?)";
    $insert_stmt = $con->prepare($insert_query);
    $insert_stmt->bind_param("ssids", $cnm, $img, $qty, $pr, $email);
    
    if ($insert_stmt->execute()) {
        echo "<script>alert('Product added to cart successfully.'); location.href='view-cart.php';</script>";
    } else {
        echo "<script>alert('Failed to add product to cart: " . $con->error . "');</script>";
    }
    $insert_stmt->close();
}

$stmt->close();
$con->close(); // Close the database connection
?>
