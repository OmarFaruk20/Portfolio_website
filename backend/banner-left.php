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
        <div class="card-header; text-center" style="margin-top:20px"><h3>Banner Left Section</h3></div>
        <div class="card-body">
            <form action="banner-left-post.php" method="POST">

            <div class="form-group">
                <label for="sub_title" style="color:#fff">Sub Title</label>
                <input type="text" class="form-control" id="sub_title" placeholder="Enter sub_title" name="sub_title">
              </div>
                
              <div class="form-group">
                <label for="title" style="color:#fff">Title</label>
                <input type="text" class="form-control" id="title" placeholder="Enter Title" name="title">
              </div>
                
            <div class="form-group">
                <label for="paragraph" style="color:#fff">Paragraph</label>
                <input type="text" class="form-control" id="paragraph" placeholder="Enter Short Paragraph" name="paragraph">
            </div>
              
              <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
                <!-- content -->

                <!-- footer start -->
                 <?php include'inc/footer.php';?> 
                <!-- footer end -->
                

            