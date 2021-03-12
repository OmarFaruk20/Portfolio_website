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
                    <h4 class="header-title mb-4" style="color:#02c0ce;">Services Overview</h4>
                    <table class="table table-bordered" id="search">
                    <thead>
                      <tr>
                        <th>Address</th>
                        <th>Phone</th>
                        <th>Email</th>
                        <th class="text-center">Action:</th>
                      </tr>
                    </thead>
                      <?php 
                        $select = "SELECT * FROM contact_info";
                        $query = mysqli_query($con, $select);
                      ?>
                    <tbody>
                      <?php
                        foreach ($query as $key => $value) {
                          ?>

                            <tr> 
                              
                            
                              <td><?php echo $value['address']?></td>
                              <td style="width:400px"><?php echo $value['phone']?></td>
                              <td><?php echo $value['email']?></td>
                              
                              <td class="text-center">
                              
                              <?php if ($_SESSION['user_role']==2){
                                ?>
                                  <a class="btn btn-outline-primary" href="edit-contact-info.php?id=<?php echo $value['id']?>">Edit</a>
                                  <a class="btn btn-outline-danger" href="delete-contact-info.php?id=<?php echo $value['id']?>">Delete</a>
                                <?php
                              } 
                              else{
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
                

            



