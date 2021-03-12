<?php 
	require_once'../db.php';
	require_once'session.php';

	$id = $_GET['id'];

	$edit = "SELECT * FROM services WHERE id = '$id'";

	$query = mysqli_query($con, $edit);

	$assoc = mysqli_fetch_assoc($query);

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
        <div class="card-header; text-center" style="margin-top:20px"><h3>Edit Services</h3></div>
        <div class="card-body">
            <form action="update-service.php" method="POST">
				<!-- Keep mind to include new input type for id -->
				<input type="hidden" name="id" value="<?php echo $assoc['id']?>">
				<!-- end include id -->
              <div class="form-group">
                <label for="title">Title</label>
                <input type="text" class="form-control" id="title" aria-describedby="emailHelp" placeholder="Enter Title" name="title" value="<?php echo $assoc['title']?>">
              </div>
                
            <div class="form-group">
                <label for="summary">Summary</label>
                <input type="text" class="form-control" id="summary" aria-describedby="emailHelp" placeholder="Enter Summary" name="summary" value="<?php echo $assoc['summary']?>">
            </div>

            <div class="form-group">
                <label for="icon">Icon</label>
                <input type="text" class="form-control" id="icon"  placeholder="Enter Icon" name="icon" value="<?php echo $assoc['icon']?>">
            </div><br>
            
              
              <button type="submit" class="btn btn-primary">Update</button>
            </form>
        </div>
    </div>
                <!-- content -->

                <!-- footer start -->
                 <?php include'inc/footer.php';?> 
                <!-- footer end -->
