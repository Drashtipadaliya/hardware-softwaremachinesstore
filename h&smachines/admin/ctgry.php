<?php
	include "header.php";
	include "config.php";
?>

<br/><br/><br/><br/>

<?php
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $qry = "SELECT * FROM category WHERE id='$id'";
    $qq = mysqli_query($con, $qry);
    $rec = mysqli_fetch_array($qq);
}
?>

<div class="contenter">
    <div class="row">
        <div class="col-md-6 bg-white mt-5 m-auto shadow font-monospace border border-info">
            <div class="mb-3">
                <p class="text-center fw-bold fs-2 text-warning p-2 bg-secondary">CATEGORY</p>
            </div>
            <form method="post" enctype="multipart/form-data">
                <div class="md-3">
                    <label for="">Category Name:</label>
                    <input type="text" class="form-control" id="register-name" placeholder="Enter Category" name="category" value="<?php if (isset($_GET['id'])) { echo htmlspecialchars($rec['category']); } ?>">
                </div>

                <div class="md-3">
                    <label for="">Image:</label>
                    <input type="file" class="form-control" id="register-image" name="image">
                    <?php if (isset($_GET['id']) && !empty($rec['image'])) { ?>
                        <img src="../img/<?php echo htmlspecialchars($rec['image']); ?>" alt="Category Image" style="max-width: 100px; max-height: 100px;">
                    <?php } ?>
                </div>

                <?php if (isset($_GET['id'])) { ?>
                    <input type="submit" class="btn btn-primary btn-lg btn-block bg-danger my-4" name="update" value="EDIT">
                <?php } else { ?>
                    <input type="submit" class="btn btn-primary btn-lg btn-block bg-danger my-4" name="submit" value="ADD">
                <?php } ?>
            </form>
        </div>
    </div>
</div>

<br/><br/><br/><br/>

<?php
include "footer.php";
?>

<?php
if (isset($_POST['submit'])) {
    $cat = $_POST['category'];
    $image = $_FILES['image']['name'];

    if ($image) {
        move_uploaded_file($_FILES['image']['tmp_name'], "../../img/" . $image);
    }

    $qry = "INSERT INTO category (category, image) VALUES ('$cat', '$image')";
    $a = mysqli_query($con, $qry);

    if ($a) {
        echo "<script>alert('Category inserted');</script>";
    } else {
        echo "Error: " . mysqli_error($con);
    }
}

if (isset($_POST['update'])) {
    $cat = $_POST['category'];
    $image = $_FILES['image']['name'];

    if ($image) {
        move_uploaded_file($_FILES['image']['tmp_name'], "../../img/" . $image);
        $qry = "UPDATE category SET category='$cat', image='$image' WHERE id='$id'";
    } else {
        $qry = "UPDATE category SET category='$cat' WHERE id='$id'";
    }

    $a = mysqli_query($con, $qry);

    if ($a) {
        echo "<script>alert('Category updated'); location.href='view-cty.php';</script>";
    } else {
        echo "Error: " . mysqli_error($con);
    }
}
?>
