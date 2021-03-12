<?php 
  require'../db.php';
  require'session.php';
  $id = $_GET['id'];
  $update = "UPDATE contact SET status = '2' where id = '$id'";
  $qry = mysqli_query($con, $update);
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

                  <?php
                      $select = "SELECT * FROM contact where id = '$id'";
                      $run = mysqli_query($con, $select);
                      $assoc = mysqli_fetch_assoc($run);
                  ?>
                      
                      
                      <table>
                        <thead>
                          <tr>
                          <th>name</th>
                          <th>email</th>
                          <th>message</th>
                          <th>created_at</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td><?php echo $assoc['name']?></td>
                            <td><?php echo $assoc['email']?></td>
                            <td><?php echo $assoc['message']?></td>
                            <td><?php echo $assoc['created_at']?></td>
                          </tr>
                        </tbody>
                      </table>
                      <?php

                    ?>
                </div>
            </div>
        </div>
    </div> 
    <!-- content -->
    <!-- footer start -->
      <?php include'inc/footer.php';?>
    <!-- footer end -->
                

            



