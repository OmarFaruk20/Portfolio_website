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
                    <h4 class="header-title mb-4" style="color:#02c0ce;">Portfolio Overview</h4>
                    <table class="table table-bordered" id="search">
                    <thead>
                      <tr>
                        <th>Sl No</th>
                        <th>Title</th>
                        <th>image</th>
                        <th>Description</th>
                        <th class="text-center">Action:</th>
                      </tr>
                    </thead>
                      <?php 
                        $select = "SELECT * FROM portfolio";
                        $select_query = mysqli_query($con, $select);
                      ?>
                    <tbody>
                      <?php
                        $sl = 1; 
                        foreach ($select_query as $key => $value) {
                          ?>
                            <tr>
                              <td><?php echo $sl++ ?></td>
                              <td><?php echo $value['title']?></td>
                              <td> <img height="150" src="../images/<?php echo $value['image']?>" alt=""> </td>
                              <td style="width:400px"><?php echo $value['description']?></td>
                              <td class="text-center">
                              
                              <?php if ($_SESSION['user_role']==2){
                                ?>
                                  <a class="btn btn-outline-primary" href="edit-portfolio.php?id=<?php echo $value['id']?>">Edit</a>
                                  <a class="btn btn-outline-danger" href="portfolio-delete.php?id=<?php echo $value['id']?>">Delete</a>
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
                

            



