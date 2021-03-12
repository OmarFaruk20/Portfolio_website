<?php 
    require'session.php';
    require_once'../db.php';

    $id = $_GET['id'];

    $select = "SELECT * FROM education WHERE id = '$id'";

    $qry = mysqli_query($con, $select);

    $assoc = mysqli_fetch_assoc($qry);
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
        <div class="card-header; text-center" style="margin-top:20px"><h3>Update Education</h3></div>
        <div class="card-body">
            <form action="update-education.php" method="POST">
                <!-- Create Id -->
                <input type="hidden" name="id" value="<?php echo $assoc['id']?>">
                <!-- Endt Id -->
              <div class="form-group">
                <label style="color:#fff">Year</label>
                <input type="text" class="form-control" id="year" name="year" value="<?php echo $assoc['year']?>">
              </div>
                
            <div class="form-group">
                <label style="color:#fff">Degree</label>
                <input type="text" class="form-control" id="degree" name="degree" value="<?php echo $assoc['degree']?>">
            </div>

            <div class="form-group">
                <label style="color:#fff">Parcent</label>
                <input type="text" class="form-control" id="parcent" name="parcent" value="<?php echo $assoc['parcent']?>">
            </div><br>
            
              
              <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
<!-- content -->

<!-- footer start -->
    <?php include'inc/footer.php';?> 
<!-- footer end -->
                

            