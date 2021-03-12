<?php 
  require'../db.php';
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
                
                <div class="content">
     <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card-box">
                  
                    <h4 class="header-title mb-4" style="color:#02c0ce;">Education Overview</h4>
                    <table class="table table-bordered" id="search">
                    <thead>
                      <tr>
                        <th>Sub Title</th>
                        <th>Title</th>
                        <th>Paragraph</th>
                        <th class="text-center">Action:</th>
                      </tr>
                    </thead>
                      <?php 
                        $select = "SELECT * FROM banner_content";
                        $select_query = mysqli_query($con, $select);
                        $assoc = mysqli_fetch_assoc($select_query);
                      ?>
                    <tbody>
                      <tr>
                        <td><?php echo $assoc['sub_title']?></td>
                        <td><?php echo $assoc['title']?></td>
                        <td style="width: 500px"><?php echo $assoc['paragraph']?></td>
                        <td> 
                          <a href="edit-banner-left.php?id=<?php echo $assoc['id']?>" class="btn btn-outline-success">edit</a> 
                          <a href="delete-banner-left.php?id=<?php echo $assoc['id']?>" class="btn btn-outline-danger">delete</a>
                        </td>
                      </tr>   
                    </tbody>
                  </table>
                </div>
            </div>
        </div>
    </div> 
    <!-- content -->
    <!-- footer start -->
      <?php include'inc/footer.php';?>
    <!-- footer end -->
                

            



