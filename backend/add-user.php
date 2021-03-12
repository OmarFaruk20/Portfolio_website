<?php 
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
    <div class="card text-white bg-dark mb-3" style="width: 1050px; height:600px" >
        <div class="card-header; text-center" style="margin-top:20px"><h3>Add User</h3></div>
        <div class="card-body">
            <form action="add-user-post.php" method="POST">
                
              <div class="form-group row m-b-20">
                    <div class="col-12">
                        <label for="username" style="color:#fff">Name</label>
                        <input name="name" class="form-control" type="text" id="username" required="" placeholder="Alex">
                    </div>
              </div>
                
            <div class="form-group row m-b-20">
                <div class="col-12">
                    <label for="email" style="color:#fff">Email address</label>
                    <input name="email" class="form-control" type="email" id="emailaddress" required="" placeholder="Alex@deo.com">
                </div>
            </div>

            <div class="form-group row m-b-20">
                <div class="col-12">
                    <label for="Phone" style="color:#fff">Phone</label>
                    <input name="phone" class="form-control" type="text" id="Phone" required="" placeholder="018***">
                </div>
            </div>

            <div class="form-group row m-b-20">
                <div class="col-12">
                    <label for="password" style="color:#fff">Password</label>
                    <input name="password" class="form-control" type="password" required="" id="password" placeholder="*********">
                </div>
            </div>

            <div class="form-group row m-b-20">
                <div class="col-12">
                    <label for="password" style="color:#fff">Confirm Password</label>
                    <input name="confirm_password" class="form-control" type="password" required="" id="password" placeholder="*********">
                </div>
            </div>
              
              <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
                <!-- content -->

                <!-- footer start -->
                 <?php include'inc/footer.php';?> 
                <!-- footer end -->
                

             