<?php
include 'header.php';
include 'config.php';
?>

<br/><br/><br/><br/>
<body>

<?php
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $qry = "SELECT * FROM product WHERE id='$id'";
    $qq = mysqli_query($con, $qry);
    $rec = mysqli_fetch_array($qq);
}
?>

<div class="container">
    <div class="row">
        <div class="col-md-6 m-auto border border-primary">
            <form method="post" enctype="multipart/form-data">
                <div class="mb-3">
                    <p class="text-center fw-bold fs-2 text-warning p-2 bg-secondary">ADD-PRODUCT</p>
                </div>
                <div class="mb-3">
                    <label for="pname" class="form-label">Product Name:</label>
                    <input type="text" name="pname" id="pname" value="<?php echo isset($_GET['id']) ? htmlspecialchars($rec['pname']) : ''; ?>" class="form-control" placeholder="Enter Product Name" required>
                </div>
                <div class="mb-3">
                    <label for="price" class="form-label">Product Price:</label>
                    <input type="text" name="price" id="price" value="<?php echo isset($_GET['id']) ? htmlspecialchars($rec['price']) : ''; ?>" class="form-control" placeholder="Enter Product Price:" required>
                </div>
                <div class="mb-3">
                    <label for="pimage" class="form-label">Add Product Image:</label>
                    <input type="file" name="pimage" id="pimage" class="form-control" />
                    <?php if (isset($_GET['id']) && $rec['image']) { ?>
                        <img src="../../img/<?php echo htmlspecialchars($rec['image']); ?>" width="100" alt="Product Image">
                    <?php } ?>
                </div>
                <div class="mb-3">
                    <label for="qnty" class="form-label">Add Product Quantity:</label>
                    <input type="number" name="qnty" id="qnty" value="<?php echo isset($_GET['id']) ? htmlspecialchars($rec['qnty']) : ''; ?>" class="form-control" required />
                </div>
                <div class="mb-3">
                    <label for="pages" class="form-label">Category:</label>
                    <select class="form-select" name="pages" id="pages" required>
                        <option value="">Select</option>
                        <?php
                        $query = "SELECT * FROM category";
                        $result = mysqli_query($con, $query);
                        while ($row = mysqli_fetch_assoc($result)) {
                            $selected = (isset($rec['catgry']) && $rec['catgry'] == $row['category']) ? 'selected' : '';
                            echo "<option value='" . htmlspecialchars($row['category']) . "' $selected>" . htmlspecialchars($row['category']) . "</option>";
                        }
                        ?>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="dec" class="form-label">Product Description:</label>
                    <input type="text" name="dec" id="dec" class="form-control" value="<?php echo isset($_GET['id']) ? htmlspecialchars($rec['dcn']) : ''; ?>" placeholder="Enter Product Description:" required />
                </div>
                <div class="mb-3">
                    <?php if (isset($_GET['id'])) { ?>
                        <input type="submit" value="Update" name="update" class="btn btn-primary btn-lg btn-block bg-danger my-4">
                    <?php } else { ?>
                        <input type="submit" name="submit" class="btn btn-primary btn-lg btn-block bg-danger my-4">
                    <?php } ?>
                </div>
            </form>
        </div>
    </div>
</div>
<br/><br/>

<?php
include 'footer.php';

if (isset($_POST['submit'])) {
    $pname = mysqli_real_escape_string($con, $_POST['pname']);
    $price = mysqli_real_escape_string($con, $_POST['price']);
    $image = $_FILES['pimage']['name'];
    $cat = mysqli_real_escape_string($con, $_POST['pages']);
    $qny = mysqli_real_escape_string($con, $_POST['qnty']);
    $dn = mysqli_real_escape_string($con, $_POST['dec']);

    if ($image) {
        move_uploaded_file($_FILES['pimage']['tmp_name'], "../../img/" . $image);
    } else {
        $image = 'default_image.jpg'; // Use a default image if none is uploaded
    }

    $qry = "INSERT INTO `product`(`pname`, `price`, `image`, `catgry`, `qnty`, `dcn`) VALUES ('$pname','$price','$image','$cat','$qny','$dn')";
    if (mysqli_query($con, $qry)) {
        echo "<script>alert('Successfully inserted.');</script>";
    } else {
        echo "<script>alert('Insertion failed.');</script>";
    }
}

if (isset($_POST['update'])) {
    $pname = mysqli_real_escape_string($con, $_POST['pname']);
    $price = mysqli_real_escape_string($con, $_POST['price']);
    $image = $_FILES['pimage']['name'];
    $cat = mysqli_real_escape_string($con, $_POST['pages']);
    $qny = mysqli_real_escape_string($con, $_POST['qnty']);
    $dn = mysqli_real_escape_string($con, $_POST['dec']);

    if ($image) {
        move_uploaded_file($_FILES['pimage']['tmp_name'], "../../img/" . $image);
        $qry = "UPDATE product SET `pname`='$pname', `price`='$price', `image`='$image', `catgry`='$cat', `qnty`='$qny', `dcn`='$dn' WHERE `id`='$id'";
    } else {
        $qry = "UPDATE product SET `pname`='$pname', `price`='$price', `catgry`='$cat', `qnty`='$qny', `dcn`='$dn' WHERE `id`='$id'";
    }

    if (mysqli_query($con, $qry)) {
        echo "<script>alert('Product updated successfully.'); location.href='view-pdt.php';</script>";
    } else {
        echo "<script>alert('Update failed.');</script>";
    }
}
?>
