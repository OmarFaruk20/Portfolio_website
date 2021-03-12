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
                    <h4 class="header-title mb-4" style="color:#02c0ce;">Banner Overview</h4>
                    <table class="table table-bordered" id="search">
                    <thead>
                      <tr>
                        <th>Sl No</th>
                        <th>image</th>
                        <th class="text-center">Action:</th>
                      </tr>
                    </thead>
                      <?php 
                        $select = "SELECT * FROM add_logo";
                        $select_query = mysqli_query($con, $select);
                      ?>
                    <tbody>
                      <?php
                        $sl = 1; 
                        foreach ($select_query as $key => $value) {
                          ?>
                            <tr>
                              <td><?php echo $sl++ ?></td>
                              <td> <img height="60" width="60" src="../img/logo/<?php echo $value['logo']?>" alt=""> </td>
                              <td class="text-center">
                              
                              <?php if ($_SESSION['user_role']==2){
                                ?>
                                  <a class="btn btn-outline-danger" href="delete-logo.php?id=<?php echo $value['id']?>">Delete</a>
                                <?php
                              } else{
                                echo "your can't access!";
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
                

            



