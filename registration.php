<?php 
	require_once'db.php';
	
?>

<!doctype html>
<html lang="en">

<head>
        <meta charset="utf-8" />
        <title>User Registration Form</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <!-- App favicon -->
        <link rel="shortcut icon" href="backend/assets/images/favicon.ico">

        <!-- App css -->
        <link href="backend/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="backend/assets/css/icons.css" rel="stylesheet" type="text/css" />
        <link href="backend/assets/css/metismenu.min.css" rel="stylesheet" type="text/css" />
        <link href="backend/assets/css/style.css" rel="stylesheet" type="text/css" />

        <script src="backend/assets/js/modernizr.min.js"></script>

    </head>


    <body class="account-pages">

        <!-- Begin page -->
        <div class="accountbg" style="background: url('backend/assets/images/bg-2.jpg');background-size: cover;background-position: center;"></div>

        <div class="wrapper-page account-page-full">

            <div class="card">
                <div class="card-block">

                    <div class="account-box">

                        <div class="card-box p-5">
                            <h2 class="text-uppercase text-center pb-4">
                                <a href="index.html" class="text-success">
                                    <span><img src="backend/assets/images/logo.png" alt="" height="26"></span>
                                </a>
                            </h2>

                            <form method="POST" action="user_reg.php">

                                <div class="form-group row m-b-20">
                                    <div class="col-12">
                                        <label for="username">Name</label>
                                        <input name="name" class="form-control" type="text" id="username" required="" placeholder="Alex">
                                    </div>
                                </div>

                                <div class="form-group row m-b-20">
                                    <div class="col-12">
                                        <label for="emailaddress">Email address</label>
                                        <input name="email" class="form-control" type="email" id="emailaddress" required="" placeholder="Alex@deo.com">
                                    </div>
                                </div>

                                <div class="form-group row m-b-20">
                                    <div class="col-12">
                                        <label for="Phone">Phone</label>
                                        <input name="phone" class="form-control" type="text" id="Phone" required="" placeholder="018***">
                                    </div>
                                </div>

                                <div class="form-group row m-b-20">
                                    <div class="col-12">
                                        <label for="password">Password</label>
                                        <input name="password" class="form-control" type="password" required="" id="password" placeholder="*********">
                                    </div>
                                </div>

                                <div class="form-group row m-b-20">
                                    <div class="col-12">
                                        <label for="password">Confirm Password</label>
                                        <input name="confirm_password" class="form-control" type="password" required="" id="password" placeholder="*********">
                                    </div>
                                </div>

                               
                                <div class="form-group row text-center m-t-10">
                                    <div class="col-12">
                                        <button class="btn btn-block btn-custom waves-effect waves-light" type="submit">Registration Now</button>
                                    </div>
                                </div>

                            </form>

                            <div class="row m-t-50">
                                <div class="col-sm-12 text-center">
                                    <p class="text-muted">Already have an account?  <a href="login.php" class="text-dark m-l-5"><b>Login</b></a></p>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>
                <!-- footer start  -->
            	<?php include'backend/inc/footer.php'?>
            <!-- footer end -->
            </div>
        </div>



        <!-- jQuery  -->
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/bootstrap.bundle.min.js"></script>
        <script src="assets/js/metisMenu.min.js"></script>
        <script src="assets/js/waves.js"></script>
        <script src="assets/js/jquery.slimscroll.js"></script>

        <!-- App js -->
        <script src="assets/js/jquery.core.js"></script>
        <script src="assets/js/jquery.app.js"></script>

    </body>

</html>


