<?php include "includes/ch_header.php"; ?>
<?php //error_reporting(0); ?>
    <!-- slider_area_start -->
    <style type="text/css">
        
    </style>
    <div class="slider_area">
        <div class="single_slider single_listing  d-flex align-items-center slider_bg_1">
            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <div class="col-xl-10">
                        <div class="slider_text text-center justify-content-center">
                            <h3>Parishioners</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- slider_area_end -->

    <!-- explorer_europe start  -->
    <div class="explorer_europe list_wrap">
        <form method="post" action="parishioner_details.php">
        <div class="container">
            <div class="row">
                <div class="col-xl-1 col-lg-1">
                    
                </div>
                <div class="col-xl-10 col-lg-10">
                        <!-- <h3 class="exp_title">5432 Listings are available</h3> -->
                        <div class="row">
                            <?php
                                $q4 = "SELECT * FROM mon";
                                $ch4 = mysqli_query($connection, $q4);
                                if (!$ch4) {
                                    # code...
                                    die("Month Query Failed");
                                }
                                $month = array();
                                while ($row = mysqli_fetch_assoc($ch4)) {
                                    # code...
                                    array_push($month, $row);
                                }
                                // $q3 = "SELECT * FROM gender";
                                // $ch3 = mysqli_query($connection, $q3);
                                // if (!$ch3) {
                                //     # code...
                                //     die("Gender Query Failed");
                                // }
                                // $gender = array();
                                // while ($row = mysqli_fetch_assoc($ch3)) {
                                //     # code...
                                //     array_push($gender, $row);
                                // }
                                // $q2 = "SELECT * FROM bloodg";
                                // $ch2 = mysqli_query($connection, $q2);
                                // if (!$ch2) {
                                //     # code...
                                //     die("Blood Query Failed");
                                // }
                                // $blood = array();
                                // while ($row = mysqli_fetch_assoc($ch2)) {
                                //     # code...
                                //     array_push($blood, $row);
                                // }
                                $q1 = "SELECT * FROM pari ORDER BY fr_name";
                                $ch1 = mysqli_query($connection, $q1);
                                if (!$ch1) {
                                     # code...
                                    die("Query Failed");
                                 }
                                 $sr1 = 1;
                                 while ($row = mysqli_fetch_assoc($ch1)) {
                                      # code...
                                    foreach ($month as $m) {
                                        # code...
                                        if ($row['sub_mon'] == $m['sr']) {
                                            # code...
                                            $sub_mon = $m['name'];

                                        }
                                    }
                                    // foreach ($gender as $g) {
                                    //     # code...
                                    //     if ($row['gen'] == $g['sr']) {
                                    //         # code...
                                    //         $gen = $g['type'];
                                    //     }
                                    // }
                                    // foreach ($blood as $b) {
                                    //     # code...
                                    //     if ($row['bg'] == $b['sr']) {
                                    //         # code...
                                    //         $bg = $b['type'];
                                    //     }
                                    // }
                                    $sr = $row['sr'];
                                    $fr_name = $row['fr_name'];
                                    $ls_name = $row['ls_name'];
                                    // $dobirth = $row['dobirth'];
                                    // $dobapt = $row['dobapt'];
                                    // $bap_name = $row['bap_name'];
                                    // $dofr_com = $row['dofr_com'];
                                    // $do_confo = $row['do_confo'];
                                    // $do_mr = $row['do_mr'];
                                    //$gen = $row['gen'];
                                    // $occ = $row['occ'];
                                    //$bg = $row['bg'];
                                    $mob = $row['mob'];
                                    $imgg = $row['image'];
                                    $img = ltrim($imgg, "\.\./");
                                    //$native = $row['native'];
                                    //$sub_mon = $row['sub_mon'];
                                    $sub_yr = $row['sub_yr'];
                                    // $do_dem = $row['do_dem'];
                                    // $cod = $row['cod'];
                                    // $address = $row['address'];
                                    // $date=explode("-", $dobirth); 
                                    // $dobirth =  $date[2]."-".$date[1]."-".$date[0];
                            ?>
                                <div class="col-xl-6 col-lg-6 col-md-6">
                                    <div class="single_explorer">
                                        <div class="thumb">
                                            <img src="<?php echo($img); ?>" alt="<?php echo($fr_name); ?>" style="height: 300px;">
                                        </div>
                                        <div class="explorer_bottom d-flex">
                                            <!-- <div class="icon">
                                                <i class="flaticon-beach"></i>
                                            </div> -->
                                            <div class="explorer_info">
                                                <h3><button class="btn btn-link" style="color: black;" value="<?php echo($sr); ?>" name="pid"><a><?php echo $fr_name." ".$ls_name; ?></a></button></h3>
                                                <p>Subscription: <?php echo $sub_mon." ".$sub_yr; ?></p>
                                                <ul>
                                                    <li> <i class="fa fa-phone"></i>
                                                        <?php echo $mob; ?></li>
                                                    <!-- <li><i class="fa fa-envelope"></i> contact@midnight.com</li> -->
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php } ?>
                                <!-- <div class="col-xl-6 col-lg-6 col-md-6">
                                    <div class="single_explorer">
                                        <div class="thumb">
                                            <img src="img/explorer/2.png" alt="">
                                        </div>
                                        <div class="explorer_bottom d-flex">
                                            <div class="icon">
                                                <i class="flaticon-food"></i>
                                            </div>
                                            <div class="explorer_info">
                                                <h3><a href="single_listings.html">Freshly Food</a></h3>
                                                <p>700/D, Kings road, Green lane, London</p>
                                                <ul>
                                                    <li> <i class="fa fa-phone"></i>
                                                        +10 278 367 9823</li>
                                                    <li><i class="fa fa-envelope"></i> contact@midnight.com</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6">
                                    <div class="single_explorer">
                                        <div class="thumb">
                                            <img src="img/explorer/3.png" alt="">
                                        </div>
                                        <div class="explorer_bottom d-flex">
                                            <div class="icon">
                                                <i class="flaticon-food-1"></i>
                                            </div>
                                            <div class="explorer_info">
                                                <h3><a href="single_listings.html">Midnight</a></h3>
                                                <p>700/D, Kings road, Green lane, London</p>
                                                <ul>
                                                    <li> <i class="fa fa-phone"></i>
                                                        +10 278 367 9823</li>
                                                    <li><i class="fa fa-envelope"></i> contact@midnight.com</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6">
                                    <div class="single_explorer">
                                        <div class="thumb">
                                            <img src="img/explorer/4.png" alt="">
                                        </div>
                                        <div class="explorer_bottom d-flex">
                                            <div class="icon">
                                                <i class="flaticon-barbershop"></i>
                                            </div>
                                            <div class="explorer_info">
                                                <h3><a href="single_listings.html">Barber</a></h3>
                                                <p>700/D, Kings road, Green lane, London</p>
                                                <ul>
                                                    <li> <i class="fa fa-phone"></i>
                                                        +10 278 367 9823</li>
                                                    <li><i class="fa fa-envelope"></i> contact@midnight.com</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6">
                                    <div class="single_explorer">
                                        <div class="thumb">
                                            <img src="img/explorer/5.png" alt="">
                                        </div>
                                        <div class="explorer_bottom d-flex">
                                            <div class="icon">
                                                <i class="flaticon-cabin"></i>
                                            </div>
                                            <div class="explorer_info">
                                                <h3><a href="single_listings.html">Montana Resort</a></h3>
                                                <p>700/D, Kings road, Green lane, London</p>
                                                <ul>
                                                    <li> <i class="fa fa-phone"></i>
                                                        +10 278 367 9823</li>
                                                    <li><i class="fa fa-envelope"></i> contact@midnight.com</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6">
                                    <div class="single_explorer">
                                        <div class="thumb">
                                            <img src="img/explorer/6.png" alt="">
                                        </div>
                                        <div class="explorer_bottom d-flex">
                                            <div class="icon">
                                                <i class="flaticon-shop"></i>
                                            </div>
                                            <div class="explorer_info">
                                                <h3><a href="single_listings.html">Yelled Shopping</a></h3>
                                                <p>700/D, Kings road, Green lane, London</p>
                                                <ul>
                                                    <li> <i class="fa fa-phone"></i>
                                                        +10 278 367 9823</li>
                                                    <li><i class="fa fa-envelope"></i> contact@midnight.com</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div> -->
                            </div>
                    <!-- <div class="row">
                        <div class="col-xl-12">
                            <div class="page_nation text-center">
                                <ul>
                                    <li>
                                        <a href="#">01</a>
                                    </li>
                                    <li>
                                        <a href="#">02</a>
                                    </li>
                                    <li>
                                        <a href="#">03</a>
                                    </li>
                                    <li>
                                        <a href="#"> <i class="ti-angle-right"></i> </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div> -->
                </div>
            </div>
        </div>
    </form>
    </div>
    <!--/ explorer_europe start  -->
    <?php include "includes/ch_footer.php"; ?>