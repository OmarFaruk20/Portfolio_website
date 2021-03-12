<?php
    require'db.php';
?>
<section class="testimonial-area primary-bg pt-115 pb-115">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-xl-6 col-lg-8">
                            <div class="section-title text-center mb-70">
                                <span>testimonial</span>
                                <h2>happy customer quotes</h2>
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-xl-9 col-lg-10">
                            <div class="testimonial-active">
                                <div class="single-testimonial text-center">
                                    <?php 
                                        $sel = "SELECT * FROM testimonial";
                                        $qry = mysqli_query($con, $sel);
                                        $assoc = mysqli_fetch_assoc($qry);
                                        ?>
                                        <div class="testi-avatar">
                                        <img src="images/<?php echo $assoc['image']?>">
                                        </div>

                                        <div class="testi-content">
                                        <h4><span>“</span><?php echo $assoc['review']?><span>”</span></h4>
                                        <div class="testi-avatar-info">
                                            <h5><?php echo $assoc['name']?></h5>
                                            <span><?php echo $assoc['company_name']?></span>
                                        </div>
                                        </div>
                                        <?php 
                                    ?>
                                    
                                    
                                </div>
                                <div class="single-testimonial text-center">
                                    <div class="testi-avatar">
                                        <img src="assets/img/images/testi_avatar.png" alt="img">
                                    </div>
                                    <div class="testi-content">
                                        <h4><span>“</span> An event is a message sent by an object to signal the occur rence of an action. The action can causd user interaction such as a button click, or it can result <span>”</span></h4>
                                        <div class="testi-avatar-info">
                                            <h5>tonoy jakson</h5>
                                            <span>head of idea</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>