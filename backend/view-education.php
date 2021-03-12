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
                        <th>Year</th>
                        <th>Degree</th>
                        <th>Success Rate</th>
                        <th class="text-center">Action:</th>
                      </tr>
                    </thead>
                      <?php 
                        $select = "SELECT * FROM education";
                        $select_query = mysqli_query($con, $select);
                      ?>
                    <tbody>
                      <?php
                        foreach ($select_query as $key => $value) {
                          ?>
                            <tr>
                              <td><?php echo $value['year']?></td>
                              <td><?php echo $value['degree']?></td>
                              <td><?php echo $value['parcent']?></td>
                              <td class="text-center">
                              
                              <?php if ($_SESSION['user_role']==2){
                                ?>
                                  <a class="btn btn-outline-primary" href="edit_education.php?id=<?php echo $value['id']?>">Edit</a>
                                  <a class="btn btn-outline-danger" href="delete_education.php?id=<?php echo $value['id']?>">Delete</a>
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
                

            



