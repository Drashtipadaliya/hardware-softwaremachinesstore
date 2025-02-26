<?php
include "header.php";
// session_start(); // Ensure session is started

if (!isset($_SESSION['user'])) {
    echo "<script>alert('You must be logged in to view the cart.'); location.href='login.php';</script>";
    exit();
}

$email = $_SESSION['user'];
?>

<div class="container border-dark p-4">
    <div class="row">
        <div class="col-md-10 m-auto">
            <h1 class="text-warning text-center fs-3 fw-bold my-4">PRODUCTS</h1>
            <center>
                <table class="table table-bordered table-striped table-hover my-5">
                    <thead class="bg-dark text-white fs-5 font-monospace text-center">
                        <tr>
                            <th class="fw-bold">ID</th>
                            <th class="fw-bold">Product Name</th>
                            <th class="fw-bold">Image</th>
                            <th class="fw-bold">Price</th>
                            <th class="fw-bold">Quantity</th>
                            <th class="fw-bold">Total</th>
                            <th class="fw-bold">Email</th>
                            <th class="fw-bold">Update</th>
                            <th class="fw-bold">Delete</th>
                        </tr>
                    </thead>
                    <tbody class="text-center">
                        <?php
                        include "config.php";

                        // Use prepared statements to prevent SQL injection
                        $stmt = $con->prepare("SELECT * FROM cart WHERE email = ?");
                        $stmt->bind_param("s", $email);
                        $stmt->execute();
                        $result = $stmt->get_result();

                        while ($row = $result->fetch_assoc()) {
                            $total = $row['price'] * $row['qty'];
                            ?>
                            <tr>
                                <td><?php echo htmlspecialchars($row['id']); ?></td>
                                <td><?php echo htmlspecialchars($row['pname']); ?></td>
                                <td><img src="../img/<?php echo htmlspecialchars($row['image']); ?>" style="height:80px; width:70px;" alt="<?php echo htmlspecialchars($row['pname']); ?>" /></td>
                                <td><?php echo htmlspecialchars($row['price']); ?></td>
                                <form action="updatecart.php" method="post">
                                    <td>
                                        <input type="number" value="<?php echo htmlspecialchars($row['qty']); ?>" name="qty" min="1" max="99" style="width:80px;" required />
                                    </td>
                                    <input type="hidden" value="<?php echo htmlspecialchars($row['id']); ?>" name="id" />
                                    <td><?php echo htmlspecialchars($total); ?></td>
                                    <td><?php echo htmlspecialchars($email); ?></td>
                                    <td><input type="submit" value="Update" name="submit" class="btn btn-warning" /></td>
                                    <td><a href="dcart.php?id=<?php echo urlencode($row['id']); ?>" class="btn btn-danger">Delete</a></td>
                                </form>
                            </tr>
                            <?php
                        }

                        $stmt->close();
                        $con->close();
                        ?>
                    </tbody>
                </table>
            </center>
            <br>
        </div>
    </div>
</div>

<div class="container text-center my-4">
    <a class="btn btn-success btn-lg" href="display.php" role="button">Continue Shopping</a>
    <a class="btn btn-primary btn-lg ms-3" href="bill.php" role="button">Checkout</a>
</div>

<?php include "footer.php"; ?>
