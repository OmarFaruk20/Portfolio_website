<?php 
	require'session.php';
?>
            <?php include'inc/header.php';?>

            <!-- ========== Left Sidebar Start ========== -->
            
            <?php include'inc/sidebar.php';?>
            
            <!-- Left Sidebar End -->
            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="content-page">

                <!-- Top Bar Start -->
                <?php include'inc/topbar.php';?>
                <!-- Top Bar End -->

                <!-- Start Page content --> 
        <div class="card text-white bg-dark mb-3" style="width: 1050px; height:480px" >
        <div class="card-header; text-center" style="margin-top:20px"><h3>Add Contact Information</h3></div>
        <div class="card-body">
            <form action="contact-info-post.php" method="POST">
                
              <div class="form-group">
                <label for="address" style="color:#fff">Address</label>
                <input type="text" class="form-control" id="address" aria-describedby="address" placeholder="Enter address" name="address">
              </div>
                
            <div class="form-group">
                <label for="phone" style="color:#fff">Phone</label>
                <input type="text" class="form-control" id="phone" aria-describedby="phone" placeholder="Enter phone" name="phone">
            </div>

            <div class="form-group">
                <label for="email" style="color:#fff">Email</label>
                <input type="email" class="form-control" id="email"  placeholder="Enter Email" name="email">
            </div><br>
            
              
              <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
                <!-- content -->

                <!-- footer start -->
                 <?php include'inc/footer.php';?> 
                <!-- footer end -->
                

            