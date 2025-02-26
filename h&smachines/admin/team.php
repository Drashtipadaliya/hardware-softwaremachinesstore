<?php
include "header.php";
?>
<br/><br/><br/><br/>

<?php
include "config.php";

$id = isset($_GET['id']) ? intval($_GET['id']) : 0;
$rec = null;

if ($id > 0) {
    $qry = "SELECT * FROM team WHERE id='$id'";
    $qq = mysqli_query($con, $qry);
    $rec = mysqli_fetch_array($qq);
}
?>

<div class="container">
    <div class="row">
        <div class="col-md-6 bg-white mt-5 m-auto shadow font-monospace border border-info">
            <div class="mb-3">
                <p class="text-center fw-bold fs-2 text-warning p-2 bg-secondary">TEAM DETAIL</p>
            </div>
            <form method="post" enctype="multipart/form-data">
                <div class="md-3">
                    <label for="">Team Member Name:</label>
                    <input type="text" class="form-control" placeholder="Enter your name" name="tnm" value="<?php echo isset($rec['name']) ? htmlspecialchars($rec['name']) : ''; ?>" required>
                </div>
                <div class="md-3">
                    <label for="">Image:</label>
                    <input type="file" class="form-control" name="img">
                    <?php if (isset($rec['image']) && $rec['image']) { ?>
                        <img src="../img/<?php echo htmlspecialchars($rec['image']); ?>" width="100" alt="Current Image">
                    <?php } ?>
                </div>
                <div class="md-3">
                    <label for="">Qualification:</label>
                    <input type="text" class="form-control" placeholder="Enter your qualification" name="work" value="<?php echo isset($rec['work']) ? htmlspecialchars($rec['work']) : ''; ?>" required>
                </div>
                <div class="md-3">
                    <label for="">Experience:</label>
                    <input type="number" class="form-control" placeholder="Enter experience" name="dtil" value="<?php echo isset($rec['exp']) ? htmlspecialchars($rec['exp']) : ''; ?>" required>
                </div>
                <?php if ($id > 0) { ?>
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
    $tnm = mysqli_real_escape_string($con, $_POST['tnm']);
    $work = mysqli_real_escape_string($con, $_POST['work']);
    $dtil = mysqli_real_escape_string($con, $_POST['dtil']);
    $image = $_FILES['img']['name'];
    $imagePath = "../../img/" . $image;

    if ($image) {
        move_uploaded_file($_FILES['img']['tmp_name'], $imagePath);
    } else {
        $image = 'default_image.jpg'; // Use a default image if none is uploaded
    }

    $qry = "INSERT INTO team (name, image, work, exp) VALUES ('$tnm', '$image', '$work', '$dtil')";
    if (mysqli_query($con, $qry)) {
        echo "<script>alert('Successfully inserted.');</script>";
    } else {
        echo "<script>alert('Insertion failed: " . mysqli_error($con) . "');</script>";
    }
}

if (isset($_POST['update'])) {
    $tnm = mysqli_real_escape_string($con, $_POST['tnm']);
    $work = mysqli_real_escape_string($con, $_POST['work']);
    $dtil = mysqli_real_escape_string($con, $_POST['dtil']);
    $image = $_FILES['img']['name'];
    $imagePath = "../../img/" . $image;

    if ($image) {
        // Update with new image
        move_uploaded_file($_FILES['img']['tmp_name'], $imagePath);
        $qry = "UPDATE team SET name='$tnm', image='$image', work='$work', exp='$dtil' WHERE id='$id'";
    } else {
        // Keep the existing image
        $qry = "UPDATE team SET name='$tnm', work='$work', exp='$dtil' WHERE id='$id'";
    }

    if (mysqli_query($con, $qry)) {
        echo "<script>alert('Successfully updated.'); location.href='view-tm.php';</script>";
    } else {
        echo "<script>alert('Update failed: " . mysqli_error($con) . "');</script>";
    }
}
?>
