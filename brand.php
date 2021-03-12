 <?php
    require'db.php';
 ?>
 <div class="barnd-area pt-100 pb-100">
                <div class="container">
                    <div class="row brand-active">
                        <?php 
                        $select = "SELECT * FROM brand";
                        $qry = mysqli_query($con, $select);

                        foreach ($qry as $key => $value) {
                            ?>
                        <div class="col-xl-2">
                            <div class="single-brand">
                                <img src="img/brand/<?php echo $value['image']?>">
                            </div>
                        </div>
                            <?php
                        }
                    ?>
                    </div>
                </div>
            </div>