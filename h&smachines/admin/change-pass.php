<?php
session_start();
include('config.php');
error_reporting(0);

  
if(isset($_POST['submit']))
{
$id=$_SESSION['id'];
$pass=md5($_POST['pass']);
$newpassword=md5($_POST['newpassword']);
$query=mysqli_query($con,"select id from register where id='$id' and   password='$pass'");
$row=mysqli_fetch_array($query);
if($row>0){
$ret=mysqli_query($con,"update user set Password='$newpassword' where id='$id'");

echo '<script>alert("Your password successully changed")</script>';
} else {

echo '<script>alert("YYour current password is wrong")</script>';
}




if (strlen($_SESSION['id']==0)) {
    header('location:../logout.php');
    } 
    
  

  
  ?>

<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Change Password - Park Ticketing Management System</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/png" href="assets/images/icon/favicon.ico">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/themify-icons.css">
    <link rel="stylesheet" href="assets/css/metisMenu.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/slicknav.min.css">
    <!-- amchart css -->
    <link rel="stylesheet" href="https://www.amcharts.com/lib/3/plugins/export/export.css" type="text/css" media="all" />
    <!-- others css -->
    <link rel="stylesheet" href="assets/css/typography.css">
    <link rel="stylesheet" href="assets/css/default-css.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/css/responsive.css">
    <!-- modernizr css -->
    <script src="assets/js/vendor/modernizr-2.8.3.min.js"></script>
    <script type="text/javascript">
function checkpass()
{
if(document.changepassword.newpassword.value!=document.changepassword.confirmpassword.value)
{
alert('New Password and Confirm Password field does not match');
document.changepassword.confirmpassword.focus();
return false;
}
return true;
} 

</script>
</head>

<body>
    
    <!-- page container area start -->
    <div class="page-container">
        <!-- sidebar menu area start -->
     <?php include('sidebar.php');?>
        <!-- sidebar menu area end -->
        <!-- main content area start -->
        <div class="main-content">
            <!-- header area start -->
          <?php include('header.php');?>
            <!-- header area end -->
            <!-- page title area start -->
           <?php include('pagetitle.php');?>
            <!-- page title area end -->
            <div class="main-content-inner">
                <div class="row">

                    <div class="col-lg-8 col-ml-12">
                        <div class="row">
                            <!-- basic form start -->
                            <div class="col-12 mt-5">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title">Change Password</h4>


   
                                        <form method="post" action="" name="changepassword" onSubmit="return checkpass();">
                                             <div class="form-group">

                                                <label for="exampleInputEmail1">Current Password</label>
                                                <input type="password" class="form-control" id="currentpassword" name="currentpassword" aria-describedby="emailHelp" placeholder="Current Password" value="" required="true">
                                                
                                            </div>
 <div class="form-group">

                                                <label for="exampleInputEmail1">New Password</label>
                                                <input type="password" class="form-control" id="newpassword" name="newpassword" aria-describedby="emailHelp" placeholder="New Password" value="" required="true">
                                                
                                            </div>
                                             <div class="form-group">

                                                <label for="exampleInputEmail1">Confirm Password</label>
                                                <input type="password" class="form-control" id="confirmpassword" name="confirmpassword" aria-describedby="emailHelp" placeholder="Confirm Password" value="" required="true">
                                                
                                            </div>

                                          
                                            <button type="submit" class="btn btn-primary mt-4 pr-4 pl-4" name="submit">Change</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <!-- basic form end -->
                         
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- main content area end -->
        <!-- footer area start-->
        <?php include('footer.php');?>
        <!-- footer area end-->
    </div>
    <!-- page container area end -->
    <!-- offset area start -->
    
    <!-- jquery latest version -->
    <script src="assets/js/vendor/jquery-2.2.4.min.js"></script>
    <!-- bootstrap 4 js -->
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/metisMenu.min.js"></script>
    <script src="assets/js/jquery.slimscroll.min.js"></script>
    <script src="assets/js/jquery.slicknav.min.js"></script>

    <!-- others plugins -->
    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/scripts.js"></script>
</body>

</html>
<?php }  ?>