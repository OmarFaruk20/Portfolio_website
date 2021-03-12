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
                    <h4 class="header-title mb-4" style="color:#02c0ce;">Message Overview</h4>
                    <table class="table table-bordered" id="search">
                    <thead>
                      <tr>
                        <th>Sl No</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Message</th>
                        <th>Created</th>
                        <th class="text-center">Action:</th>
                      </tr>
                    </thead>
                      <?php 
                        $checkmail = "SELECT * FROM contact";
                        $query = mysqli_query($con, $checkmail);
                      ?>
                    <tbody>
                      <?php
                        $sl = 1; 
                        foreach ($query as $key => $value) {
                          ?>

                            <tr 
                              <?php 
                                if ($value['status'] == 1) {
                                  ?>
                                    style="background: #e3eaef; font-weight: bold"
                                  <?php
                                }
                              ?>
                            >
                              <td><?php echo $sl++ ?></td>
                              <td><?php echo $value['name']?></td>
                              <td><?php echo $value['email']?></td>
                              <td><?php echo substr($value['message'], 0, 40).'...'?></td>
                              <td><?php echo $value['created_at']?></td>
                              <td class="text-center">
                                <?php 
                                  if ($value['status']==1) {
                                    ?>
                                      <a href="view-messages.php?id=<?php echo $value['id']?>" class="btn btn-outline-success">
                                        Seen
                                      </a>
                                    <?php
                                  }
                                  else{
                                    ?>
                                      <a href="view-messages.php?id=<?php echo $value['id']?>" class="btn btn-outline-danger">
                                        Unseen
                                      </a>
                                    <?php
                                  }
                                ?>                            
                            </td>
                         </tr>
                          <?php
                        }
                      ?>
                      
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
                

            



