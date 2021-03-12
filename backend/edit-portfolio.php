<?php 
    require_once'../db.php';
    require'session.php';

    $id = $_GET['id'];

    $sel = "SELECT * FROM Portfolio WHERE id = '$id'";

    $qry = mysqli_query($con, $sel);

    $asc = mysqli_fetch_assoc($qry);
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
        <div class="card text-white bg-dark mb-3" style="width: 1050px; height:600px" >
        <div class="card-header; text-center" style="margin-top:20px; color:#02c0ce;"><h3>Update Portfolio</h3></div>
        <div class="card-body">
            <form action="update-portfolio.php" method="POST" enctype="multipart/form-data">
                
                <input type="hidden" name="id" value="<?php echo $asc['id']?>">

              <div class="form-group">
                <label style="color:#fff">Title</label>
                <input type="text" class="form-control" id="title" aria-describedby="year" name="title" value="<?php echo $asc['title']?>">
              </div>
                
            <div class="form-group">
                <label style="color:#fff">Description</label>
                <textarea name="description" id="description" class="form-control">
                    <?php echo $asc['description']?>; 
                </textarea>
            </div>

            <div class="form-group">
                <label style="color:#fff">Image Preview</label><br>
                <img height="150px" src="../images/<?php echo $asc['image']?>" alt=""><br><br>
                <input type="file" id="image" name="image">
            </div>
            
              <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
                <!-- content -->

                <!-- footer start -->
                 <?php include'inc/footer.php';?> 
                <!-- footer end -->
                

            