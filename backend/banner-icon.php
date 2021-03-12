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
        <div class="card text-white bg-dark mb-3" style="width: 1050px; height:350px" >
        <div class="card-header; text-center" style="margin-top:20px"><h3>Insert Banner Icon</h3></div>
        <div class="card-body">
            <form action="banner-icon-post.php" method="POST">
                
            <div class="form-group">
                <label for="social_url" style="color:#fff">Social URL</label>
                <input type="text" class="form-control" id="social_url" placeholder="www.facebook.com" name="social_url">
            </div>

            <div class="form-group">
                <label for="social_icon" style="color:#fff">Social Icon</label>
                <input type="text" class="form-control" id="social_icon" placeholder="Enter icon name" name="social_icon">
            </div>
              
              <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
                <!-- content -->

                <!-- footer start -->
                 <?php include'inc/footer.php';?> 
                <!-- footer end -->
                

            