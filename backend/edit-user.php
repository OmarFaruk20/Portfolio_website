<?php 
	require_once'../db.php';
	require_once'session.php';

	$id = $_GET['id'];

	$edit = "SELECT * FROM users WHERE id = '$id'";

	$query = mysqli_query($con, $edit);

	$assoc = mysqli_fetch_assoc($query);

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

<div class="card bg-light">
<div class="card text-white bg-dark mb-3" style="width: 1050px; height:600px" >
        <div class="card-header; text-center" style="margin-top:20px"><h3>Upadate User</h3></div>
        <div class="card-body">
            <form action="update-user-post.php" method="POST">
                <input type="hidden" name="id" value="<?php echo $assoc['id']?>">
              <div class="form-group row m-b-20">
                    <div class="col-12">
                        <label for="username" style="color:#fff">Name</label>
                        <input name="name" class="form-control" type="text" id="username" value="<?php echo $assoc['name']?>">
                    </div>
              </div>
                
            <div class="form-group row m-b-20">
                <div class="col-12">
                    <label for="email" style="color:#fff">Email address</label>
                    <input name="email" class="form-control" type="email" id="emailaddress" value="<?php echo $assoc['email']?>">
                </div>
            </div>

            <div class="form-group row m-b-20">
                <div class="col-12">
                    <label for="Phone" style="color:#fff">Phone</label>
                    <input name="phone" class="form-control" type="text" id="Phone" value="<?php echo $assoc['phone']?>">
                </div>
            </div>

            <div class="form-group row m-b-20">
                <div class="col-12">
                    <label for="password" style="color:#fff">Password</label>
                    <input name="password" class="form-control" type="password" id="password" value="<?php echo $assoc['password']?>">
                </div>
            </div>

            <div class="form-group row m-b-20">
                <div class="col-12">
                    <label for="password" style="color:#fff">Confirm Password</label>
                    <input name="confirm_password" class="form-control" type="password" value="<?php echo $assoc['confirm_password']?>">
                </div>
            </div>
              
              <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div> 
</div> 


	<!-- footer start -->
      <?php include'inc/footer.php';?> 
    <!-- footer end -->





