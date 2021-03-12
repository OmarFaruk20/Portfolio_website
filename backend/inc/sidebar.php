<div class="left side-menu">

                <div class="slimscroll-menu" id="remove-scroll">

                    <!-- LOGO -->
                    <div class="topbar-left">
                        <a href="index.html" class="logo">
                            <span>
                                <img src="assets/images/logo.png" alt="" height="22">
                            </span>
                            <i>
                                <img src="assets/images/logo_sm.png" alt="" height="28">
                            </i>
                        </a>
                    </div>


                    <!-- User box -->
                    <div class="user-box">
                        <div class="user-img">
                            <img src="assets/images/users/avatar-3.jpg" alt="user-img" title="Mat Helme" class="rounded-circle img-fluid">
                            
                        </div>
                        <h5><a href="#"> <?php echo $_SESSION['name'] ?> </a></h5>
                        <p class="text-muted">
                            <?php
                                if ($_SESSION['user_role']==2) {
                                     echo "Admin";
                                 }else{
                                    echo "Users";
                                 }
                            ?>  
                         </p>
                    </div>

                    <!--- Sidemenu -->
                    <div id="sidebar-menu">

                        <ul class="metismenu" id="side-menu">

                            <!--<li class="menu-title">Navigation</li>-->

                            <li>
                                <a href="dashboard.php">
                                    <i class="fi-air-play"></i><span class="badge badge-danger badge-pill float-right">7</span> <span> Dashboard </span>
                                </a>
                            </li>

                            <li>
                                <a href="javascript: void(0);"><i class="fa fa-users"></i> <span> Users </span> <span class="menu-arrow"></span></a>
                                <ul class="nav-second-level" aria-expanded="false">
                                    <li><a href="add-user.php"><i class="fa fa-plus"></i>Add Users</a></li>
                                    <li><a href="view-user.php"><i class="fa fa-street-view"></i>View Users</a></li>
                                </ul>
                            </li>

                            <li>
                                <a href="javascript: void(0);"><i class="fa fa-briefcase"></i><span> Service </span> <span class="menu-arrow"></span></a>
                                <ul class="nav-second-level" aria-expanded="false">
                                    <li><a href="add-service.php" ><i class="fa fa-plus"></i>Add Service</a></li>
                                    <li><a href="view-service.php"><i class="fa fa-street-view"></i>View Service</a></li>
                                    
                                </ul>
                            </li>

                            <li>
                                
                                <a href="#"><i class="fa fa-envelope-square"></i> <span>Message</span> <span class="menu-arrow"></span></a>
                                <ul class="nav-second-level" aria-expanded="false">
                                    <li><a href="messages.php"><i class="fa fa-eye"></i>Message View</a></li>

                                    <li><a href="contact-info.php"><i class="fa fa-phone-square"></i>Add Contact Info</a></li>
                                    
                                    <li><a href="view-contact-info.php"><i class="fa fa-eye"></i>View Contact Info</a></li>
                                </ul>
                            </li>

                            <li>
                                <a href="javascript: void(0);"><i class="fa fa-graduation-cap"></i><span> Education </span> <span class="menu-arrow"></span></a>
                                <ul class="nav-second-level" aria-expanded="false">
                                    <li><a href="add-education.php"><i class="fa fa-plus"></i>Add Education</a></li>
                                    <li><a href="view-education.php"><i class="fa fa-eye"></i>View Education</a></li>

                                    <li><a href="add-about-banner.php"><i class="fa fa-plus"></i>About Banner</a></li>

                                    <li><a href="view-about-banner.php"><i class="fa fa-eye"></i>View Banner</a></li>
                                </ul>
                            </li>

                            <li>
                                <a href="javascript: void(0);"><i class="fa fa-book"></i><span> Portfolio </span> <span class="menu-arrow"></span></a>
                                <ul class="nav-second-level" aria-expanded="false">
                                    <li><a href="add-Portfolio.php"><i class="fa fa-plus"></i>Add Portfolio</a></li>
                                    <li><a href="view-Portfolio.php"><i class="fa fa-eye"></i>View Portfolio</a></li>
                                </ul>
                            </li>

                            <li>
                                <a href="javascript: void(0);"><i class="fa fa-book"></i><span> Testimonial </span> <span class="menu-arrow"></span></a>
                                <ul class="nav-second-level" aria-expanded="false">
                                    <li><a href="add-testimonial.php"><i class="fa fa-plus"></i>Add Testimonial</a></li>
                                    <li><a href="view-testimonial.php"><i class="fa fa-eye"></i>View Testimonial</a></li>
                                </ul>
                            </li>

                            <li>
                                <a href="#"><i class="fa fa-font-awesome"></i> <span> Banner </span> <span class="menu-arrow"></span></a>
                                <ul class="nav-second-level" aria-expanded="false">
                                    <li><a href="add-banner.php"><i class="fa fa-plus"></i>Add Banner</a></li>

                                    <li><a href="view-banner.php"><i class="fa fa-eye"></i>View Banner</a></li>

                                    <li><a href="banner-left.php"><i class="fa fa-plus"></i>Banner left</a></li>

                                    <li><a href="view-banner-left.php"><i class="fa fa-eye"></i>View Banner left</a></li>

                                    <li><a href="banner-icon.php"><i class="fa fa-eye"></i>Social Icon</a></li>
                                </ul>
                            </li>

                            <li>
                                <a href="javascript: void(0);"><i class="fa fa-amazon"></i><span> Brand </span> <span class="menu-arrow"></span></a>
                                <ul class="nav-second-level" aria-expanded="false">
                                    <li><a href="add-brand.php"><i class="fa fa-plus"></i>Add Brand</a></li>
                                    <li><a href="view-brand.php"><i class="fa fa-eye"></i>View Brand</a></li>
                                </ul>
                            </li>

                            <li>
                                <a href="#"><i class="fi-box"></i><span>Logo</span> <span class="menu-arrow"></span></a>
                                <ul class="nav-second-level" aria-expanded="false">
                                    <li><a href="add-logo.php"><i class="fa fa-plus"></i>Add Logo</a></li>
                                    <li><a href="view-logo.php"><i class="fa fa-eye"></i>View Logo</a></li>
                                    <li><a href="add-footer.php"><i class="fa fa-plus"></i>Add Footer</a></li>
                                    <li><a href="view-footer.php"><i class="fa fa-eye"></i>View Footer</a></li>
                                </ul>
                            </li>


                            <li>
                                <a href="javascript: void(0);"><i class="fi-location-2"></i> <span> Maps </span> <span class="menu-arrow"></span></a>
                                <ul class="nav-second-level" aria-expanded="false">
                                    <li><a href="maps-google.html">Google Maps</a></li>
                                    <li><a href="maps-vector.html">Vector Maps</a></li>
                                    <li><a href="maps-mapael.html">Mapael Maps</a></li>
                                </ul>
                            </li>

                            <li>
                                <a href="javascript: void(0);"><i class="fi-paper-stack"></i><span> Pages </span> <span class="menu-arrow"></span></a>
                                <ul class="nav-second-level" aria-expanded="false">
                                    <li><a href="page-starter.html">Starter Page</a></li>
                                    <li><a href="page-login.html">Login</a></li>
                                    <li><a href="page-register.html">Register</a></li>
                                    <li><a href="page-logout.html">Logout</a></li>
                                    <li><a href="page-recoverpw.html">Recover Password</a></li>
                                    <li><a href="page-lock-screen.html">Lock Screen</a></li>
                                    <li><a href="page-confirm-mail.html">Confirm Mail</a></li>
                                    <li><a href="page-404.html">Error 404</a></li>
                                    <li><a href="page-404-alt.html">Error 404-alt</a></li>
                                    <li><a href="page-500.html">Error 500</a></li>
                                </ul>
                            </li>
                        </ul>

                    </div>
                    <!-- Sidebar -->

                    <div class="clearfix"></div>

                </div>
                <!-- Sidebar -left -->

            </div>