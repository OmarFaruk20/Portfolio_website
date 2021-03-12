 <section id="home" class="banner-area banner-bg fix"> 
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-xl-7 col-lg-6">
                            <div class="banner-content">
                            <?php 
                                    $sel = "SELECT * FROM banner_content";
                                    $Q = mysqli_query($con, $sel);

                                    foreach ($Q as $key => $value) {
                                        ?>
                                        <h6 class="wow fadeInUp" data-wow-delay="0.2s"><?php echo $value['sub_title']?></h6>

                                        <h2 class="wow fadeInUp" data-wow-delay="0.4s" style="visibility:visible; animation-delay:0.2s; animation-name:fadeInUp;">
                                            <?php echo $value['title']?> 
                                            </h2>

                                        <p class="wow fadeInUp" data-wow-delay="0.6s"><?php echo $value['paragraph']?></p>

                                        <?php
                                    }
                                ?>
                    <div class="banner-social wow fadeInUp" data-wow-delay="0.8s">
                        <ul>
                            
                        <?php 
                            $select = "SELECT * FROM banner_icon";
                        $Qr = mysqli_query($con, $select);
                        
                        foreach ($Qr as $key => $value) {
                            ?>
                            <li>
                            <a target="_blank" href="<?php echo $value['social_url']?>">
                                <i class="<?php echo $value['social_icon']?>"></i>
                                </a>
                            </li> 
                            <?php
                        }
                    ?>    
                            
                        </ul>
                    </div> 
                                
                    <a href="index.php#portfolio" class="btn wow fadeInUp" data-wow-delay="1s">SEE PORTFOLIOS</a>
                                 
                    </div>
                </div>  
                        
                        <div class="col-xl-5 col-lg-6 d-none d-lg-block">
                            <div class="banner-img text-right">
                                <?php 
                                    $sel = "SELECT * FROM  banner";
                                    $qry = mysqli_query($con, $sel);
                                    $assoc = mysqli_fetch_assoc($qry);
                                    ?>
                                        <img src="images/<?php echo $assoc['image']?>" alt="img">
                                    <?php
                                ?>                                        
                            </div>
                        </div>

                        <div class="banner-shape">
                            <img src="assets/img/shape/dot_circle.png" class="rotateme" alt="img">
                        </div>         
                </div>    
        </section> 
