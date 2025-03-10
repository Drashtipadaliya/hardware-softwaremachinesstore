<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>H_SMACHINES</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">
    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/aos.css">
    <link rel="stylesheet" href="css/ionicons.min.css">
    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
    
    <style>
        .navbar-nav .user-info {
            display: flex;
            align-items: center;
            color: white; /* Ensure text is visible */
        }
        .user-info p {
            margin: 0 10px; /* Space between username and buttons */
        }
    </style>
</head>
<body class="goto-here">
    <div class="py-1 bg-black">
        <div class="container">
            <div class="row no-gutters d-flex align-items-start align-items-center px-md-0">
                <div class="col-lg-12 d-block">
                    <div class="row d-flex">
                        <div class="col-md pr-4 d-flex topper align-items-center">
                            <div class="icon mr-2 d-flex justify-content-center align-items-center">
                                <span class="icon-phone2"></span>
                            </div>
                            <span class="text">shree v.n.borad mahila bca college</span>
                        </div>
                        <div class="col-md pr-4 d-flex topper align-items-center">
                            <div class="icon mr-2 d-flex justify-content-center align-items-center">
                                <span class="icon-paper-plane"></span>
                            </div>
                            <span class="text">hnsmachines@gmail.com</span>
                        </div>
                        <div class="col-md-5 pr-4 d-flex topper align-items-center text-lg-right">
                            <span class="text">3-5 Business days delivery &amp; Free Returns</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
        <div class="container">
            <img src="../PHOTO/logo/logo.png" width="200px" align="right">  
            <a class="navbar-brand" href="fpage.php"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="oi oi-menu"></span> Menu
            </button>

            <div class="collapse navbar-collapse" id="ftco-nav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active"><a href="fpage.php" class="nav-link">Home</a></li>
                    <li class="nav-item"><a href="display.php" class="nav-link">Shop</a></li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Catalog</a>
                        <div class="dropdown-menu" aria-labelledby="dropdown04">
                            <?php
                            include("config.php");
                            $query = "SELECT * FROM category";
                            $result = mysqli_query($con, $query);
                            while ($row = mysqli_fetch_assoc($result)) {
                                echo '<a class="dropdown-item" href="shop.php?cat=' . $row['category'] . '">' . $row['category'] . '</a>';
                            }
                            ?>
                        </div>
                    </li>
                    <li class="nav-item"><a href="team.php" class="nav-link">Team</a></li>
                    <li class="nav-item"><a href="contact.php" class="nav-link">Feedback</a></li>
                    <li class="nav-item"><a href="about.php" class="nav-link">About</a></li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Setting</a>
                        <div class="dropdown-menu" aria-labelledby="dropdown04">
                            <a class="dropdown-item" href="reset.php">RESET PASSWORD</a>
                            <a class="dropdown-item" href="adelete.php" onClick="return confirm('Are you sure?')">DELETE ACCOUNT</a>
                        </div>
                    </li>
                    <li class="nav-item user-info">
                        <?php if (isset($_SESSION['user'])) { ?>
                            <p class="text-uppercase bg-primary"><?php echo $_SESSION['uname']; ?></p>
                            <a href="logout.php" class="nav-link">Logout</a>
                        <?php } else { ?>
                            <a href="login.php" class="nav-link">Login</a>
                        <?php } ?>
                    </li>
                    <?php include 'cart_count.php'; ?>
                    <li class="nav-item cta cta-colored">
                        <a href="view-cart.php" class="nav-link">
                            <?php if ($cart_count > 0): ?>
                                <span class="icon-shopping-cart">(<?php echo $cart_count; ?>)</span>
                            <?php else: ?>
                                <span class="icon-shopping-cart"></span>
                            <?php endif; ?>
                        </a>
                    </li>
                    <li class="nav-item cta cta-colored">
                        <a href="profile.php" class="nav-link"><span class="icon-user"></span></a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</body>
</html>
