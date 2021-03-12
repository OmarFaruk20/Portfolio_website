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
        <div class="card text-white bg-dark mb-3" style="width: 1050px; height:280px" >
        <div class="card-header; text-center" style="margin-top:20px"><h3>Add Footer</h3></div>
        <div class="card-body">
            <form action="add-footer-post.php" method="POST">
                
              <div class="form-group">
                <label for="footer" style="color:#fff">Footer</label>
                <input type="text" class="form-control" id="footer" aria-describedby="footer" placeholder="Enter footer" name="footer">
              </div>
                
              
              <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
                <!-- content -->

                <!-- footer start -->
                 <?php include'inc/footer.php';?> 
                <!-- footer end -->
                

            