<?php include "header.php"; ?>

<!-- Start Team Member Section -->

 

 <div class="hero-wrap hero-bread" style="background-image: url('images/bg_6.jpg');">
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
          	
            <h1 class="mb-0 bread">OUR TEAM</h1>
          </div>
        </div>
      </div>
    </div>

<section id="team" class="team-member-section">
    <div class="container">
        <div class="row mb-5 text-center">
      
            <div class="col-12">
                
            </div>
        </div>

        <div class="row">
        <?php
				include "config.php";
				//$cnm=$_GET['cname'];
	$qry="select * from team";
	$qq=mysqli_query($con,$qry);
	while($rec=mysqli_fetch_array($qq))
	{
?>    <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
                    <div class="team-member-card">
                        <div class="team-member-img-container">
                        <img src="../img/<?php echo $rec[2];?>" class="img-fluid team-member-img" alt="<?php echo $name; ?>">
                            <div class="team-member-icon">
                                <i class="fas fa-user-circle"></i>
                            </div>
                        </div>
                        <div class="team-member-info">
                            <h4 class="team-member-name"><?php echo $rec[1];?></h4>
                            <p class="team-member-qualification"><?php echo $rec[3];?></p>
                            <p class="team-member-experience">Experience:<?php echo $rec[4];?></p>
                         
                        </div>
                    </div>
                </div>
            <?php
    }
            ?>
        </div>
    </div>
</section>
<!-- End Team Member Section -->
<style>
/* Team Member Section */
.team-member-section {
    background-size: cover;
    background-position: center;
     /* Increased padding for a more spacious look */
    color: #FFFFFF; /* Changed text color to white for better contrast */
}

.section-title {
    
    font-size: 48px;
    color: black; /* Changed to white for better contrast */
    font-weight: 700;
    text-transform: uppercase;
    margin-bottom: 50px; /* Increased margin for better spacing */
}

.team-member-card {
    background: rgba(0, 0, 0, 0.7); /* Darker background for better readability */
    border-radius: 12px; /* Rounded corners for a modern look */
    overflow: hidden;
    box-shadow: 0 6px 12px rgba(0, 0, 0, 0.4); /* Enhanced shadow for a lifted effect */
    transition: transform 0.3s ease, box-shadow 0.3s ease;
    position: relative;
}

.team-member-card:hover {
    transform: translateY(-8px); /* Slight lift effect on hover */
    box-shadow: 0 12px 24px rgba(0, 0, 0, 0.6); /* More pronounced shadow */
}

.team-member-img-container {
    position: relative;
    overflow: hidden;
}

.team-member-img {
    width: 100%;
    height: 250px;
    object-fit: cover;
    transition: opacity 0.3s ease;
}

.team-member-icon {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    font-size: 2.5em;
    color: #FFFFFF;
    opacity: 0;
    transition: opacity 0.3s ease;
    pointer-events: none;
}

.team-member-card:hover .team-member-icon {
    opacity: 1;
}

.team-member-info {
    padding: 20px;
    text-align: center;
}

.team-member-name {
    font-size: 24px;
    color: #FFFFFF;
    margin-bottom: 10px;
    font-weight: 600;
}

.team-member-qualification,
.team-member-experience,


</style>

<?php include "footer.php"; ?>
