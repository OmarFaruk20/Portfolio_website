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
        <div class="card-header; text-center" style="margin-top:20px"><h3>Add Education</h3></div>
        <div class="card-body">
            <form action="add-education-post.php" method="POST">
                
              <div class="form-group">
                <label style="color:#fff">Year</label>
                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="year" placeholder="Enter Year" name="year">
              </div>
                
            <div class="form-group">
                <label style="color:#fff;">Degree</label>
                <input type="text" class="form-control" id="degree" aria-describedby="degree" placeholder="Enter Degree" name="degree">
            </div>

            <div class="form-group">
                <label style="color:#fff">Parcent</label>
                <input type="text" class="form-control" id="parcent"  placeholder="Enter Success Rate %" name="parcent">
            </div><br>
            
              
              <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
                <!-- content -->

                <!-- footer start -->
                 <?php include'inc/footer.php';?> 
                <!-- footer end -->
                

            