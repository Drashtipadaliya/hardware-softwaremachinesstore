<?php
//session_start();
include "header.php"; 
include "config.php";

// Check if the user is logged in
if (!isset($_SESSION['user'])) {
    header("Location: login.php");
    exit();
}

// Fetch user data from the database
$email = $_SESSION['user'];
$qry = "SELECT * FROM register WHERE email='$email'";
$res = mysqli_query($con, $qry);
$user = mysqli_fetch_assoc($res);

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Update user data
    $fname = $_POST["fnm"];
    $lname = $_POST["lnm"];
    $mo = $_POST["mno"];
    $address = $_POST["adrs"];
    
    $updateQry = "UPDATE register SET fname='$fname', lname='$lname', mobile='$mo', address='$address' WHERE email='$email'";
    $updateRes = mysqli_query($con, $updateQry);
    
    if ($updateRes) {
        echo "<script>alert('Profile updated successfully'); window.location.href='index.php';</script>";
        exit();
    } else {
        echo "<script>alert('Failed to update profile');</script>";
    }
}

// Header

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Profile</title>
   
</head>
<body>
<div class="container mt-5">
    <h2 class="text-center">User Profile</h2>
    <form method="post" class="bg-light p-4 shadow rounded">
        <div class="mb-3">
            <label for="fnm" class="form-label">First Name:</label>
            <input type="text" name="fnm" value="<?php echo htmlspecialchars($user['fname']); ?>" class="form-control" required />
        </div>
        <div class="mb-3">
            <label for="lnm" class="form-label">Last Name:</label>
            <input type="text" name="lnm" value="<?php echo htmlspecialchars($user['lname']); ?>" class="form-control" required />
        </div>
        <div class="mb-3">
            <label for="mno" class="form-label">Mobile No:</label>
            <input type="text" name="mno" value="<?php echo htmlspecialchars($user['mobile']); ?>" class="form-control" required pattern="^[0-9]{10}$" />
        </div>
        <div class="mb-3">
            <label for="adrs" class="form-label">Address:</label>
            <textarea name="adrs" class="form-control" required><?php echo htmlspecialchars($user['address']); ?></textarea>
        </div>
		<div class="d-grid gap-2 d-md-flex justify-content-md-end ">
  <button  type="button" ><a href="reset.php" class="text-danger" >forget password?</a></button>

</div>
        <button type="submit" class="btn btn-primary">Update Profile</button>
        <a href="logout.php" class="btn btn-danger">Logout</a>
    </form>
</div>

<!-- Footer -->
<?php include "footer.php"; ?>
</body>
</html>
