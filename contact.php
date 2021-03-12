<?php 
    require'db.php';
?>

<section id="contact" class="contact-area primary-bg pt-120 pb-120">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-6">
                            <div class="section-title mb-20">
                                <span>information</span>
                                <h2>Contact Information</h2>
                            </div>
                            <div class="contact-content">
                                <p>Event definition is - somthing that happens occurre How evesnt sentence. Synonym when an unknown printer took a galley.</p>
                                <h5>OFFICE IN <span>NEW YORK</span></h5>
                                <?php 
                                    $select = "SELECT * FROM contact_info";
                                    $qry = mysqli_query($con, $select);

                                    foreach ($qry as $key => $value) {
                                        ?>
                                    <div class="contact-list">
                                    <ul>
                                        <li><i class="fas fa-map-marker"></i><span>Address :</span><?php echo $value['address']?></li>
                                        <li><i class="fas fa-headphones"></i><span>Phone :</span><?php echo $value['phone']?></li>
                                        <li><i class="fas fa-globe-asia"></i><span>E-mail :</span><?php echo $value['email']?></li>
                                    </ul>
                                </div>
                                        <?php
                                    }
                                ?>
                                
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="contact-form">
                                <form action="contact-post.php" method="POST">
                                    <input name="name" type="text" placeholder="your name *">
                                    <input name="email" type="email" placeholder="your email *">
                                    <textarea name="message" id="message" placeholder="your message *"></textarea>
                                    <button class="btn">SEND</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </section>