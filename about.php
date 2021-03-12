<section id="about" class="about-area primary-bg pt-120 pb-120">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-6">

                        <?php 
                            $sel = "SELECT * FROM  about_banner";
                            $qry = mysqli_query($con, $sel);
                            $assoc = mysqli_fetch_assoc($qry);
                            ?>
                            <div class="about-img">
                                <img src="img/<?php echo $assoc['image']?>" title="me-01" alt="me-01">
                            </div>
                            <?php
                        ?>
                        

                            
                        </div>
                        <div class="col-lg-6 pr-90">
                            <div class="section-title mb-25">
                                <span>Introduction</span>
                                <h2>About Me</h2>
                            </div>
                            <div class="about-content">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rerum, sed repudiandae odit deserunt, quas
                                    quibusdam necessitatibus nesciunt eligendi esse sit non reprehenderit quisquam asperiores maxime
                                    blanditiis culpa vitae velit. Numquam!</p>
                                <h3>Education:</h3>
                            </div>
                        
                            <!-- Education Item -->
                            <?php 
                                    $data = "SELECT * FROM education";

                                    $query = mysqli_query($con, $data);

                                    foreach ($query as $key => $value) {
                                    ?>
                            <div class="education">
                                
                                <div class="year"><?php echo $value['year']?></div>
                                <div class="line"></div>
                                <div class="location">
                                    <span><?php echo $value['degree']?></span>
                                    <div class="progressWrapper">
                                        <div class="progress">
                                            <div class="progress-bar wow slideInLefts" data-wow-delay="0.2s" data-wow-duration="2s" role="progressbar" style="width: <?php echo $value['parcent']?>;" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                </div>
                                <?php
                                } 
                            ?>                        
                            <!-- End Education Item -->
                        
                        </div>
                    </div>
                </div>
            </section>