<?php include "includes/ad_header.php"; ?>
<?php
    if (isset($_POST['more'])) {
         # code...
        $pid = $_POST['more'];
        //echo $pid;
    } elseif (isset($_SESSION['more'])) {
        # code...
        $pid = $_SESSION['more'];
        unset($_SESSION['more']);
     } else {
        header("location: pari.php");
     }
     $q1 = "SELECT * FROM pari WHERE sr = $pid";
     //echo $q1;
     $ch5 = mysqli_query($connection, $q1);
     if (!$ch5) {
         # code...
        die("Parishioner Query Failed");
     }
     $q7 = "SELECT * FROM mon";
     $ch7 = mysqli_query($connection, $q7);
     if (!$ch7) {
         # code...
        die("Month Query Failed");
     }
     $month = array();
     while ($row = mysqli_fetch_assoc($ch7)) {
         # code...
        array_push($month, $row);
     }
     $q2 = "SELECT * FROM pari_fame WHERE hd_no = $pid";
     $ch6 = mysqli_query($connection, $q2);
     if (!$ch6) {
         # code...
        die("Parishioner Family Query Failed");
     }
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
    $q3 = "SELECT * FROM gender";
    $ch3 = mysqli_query($connection, $q3);
    if (!$ch3) {
        # code...
        die("Gender Query Failed");
    }
    $gender = array();
    while ($row = mysqli_fetch_assoc($ch3)) {
        # code...
        array_push($gender, $row);
    }
    $q2 = "SELECT * FROM bloodg";
    $ch2 = mysqli_query($connection, $q2);
    if (!$ch2) {
        # code...
        die("Blood Query Failed");
    }
    $blood = array();
    while ($row = mysqli_fetch_assoc($ch2)) {
        # code...
        array_push($blood, $row);
    }
    while ($row = mysqli_fetch_assoc($ch5)) {
         # code...
        foreach ($month as $m) {
            # code...
            if ($m['sr'] == $row['sub_mon']) {
                # code...
                $subs = $m['name']." ".$row['sub_yr'];
            }
        }
        foreach ($gender as $g) {
            # code...
            if ($row['gen'] == $g['sr']) {
                # code...
                $gen1 = $g['type'];
            }
        }
        foreach ($blood as $b) {
            # code...
            if ($row['bg'] == $b['sr']) {
                # code...
                $bg1 = $b['type'];
            }
        }
        $name = $row['fr_name']." ".$row['ls_name'];
        $address = $row['address'];
        $sr = 1;
        $fr_name = $row['fr_name'];
        $ls_name = $row['ls_name'];
        $dobirth = $row['dobirth'];
        $dobapt = $row['dobapt'];
        $bap_name = $row['bap_name'];
        $dofr_com = $row['dofr_com'];
        $do_confo = $row['do_confo'];
        $do_mr = $row['do_mr'];
        $gen = $gen1;
        $occ = $row['occ'];
        $bg = $bg1;
        $mob = $row['mob'];
        $native = $row['native'];
        if ($row['image'] == "") {
            # code...
            $image = "../images2/bg_1.jpg";
        } else {
            $image = $row['image'];
        }
        //$sub_mon = $row['sub_mon'];
        //$sub_yr = $row['sub_yr'];
        $do_dem = $row['do_dem'];
        $cod = $row['cod'];
        $date = explode("-", $dobirth);
        $dobirth = $date[2]."-".$date[1]."-".$date[0];
     }
?>

            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="col-lg-6">
                            <h2 class="title-3 m-b-30"><?php echo $name; ?>'s Details</h2>
                        </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="card">
                                        <img class="card-img-top" src="<?php echo($image); ?>" alt="Card image cap">
                                    </div>
                                </div>
                                <!-- <div class="row"> -->
                                    <div class="col-md-6">
                                        <div class="card">
                                            <div class="card-header">
                                                <strong class="card-title">Address</strong>
                                            </div>
                                            <div class="card-body">
                                                <address class="mt-3">
                                                    <?php echo $address; ?>
                                                </address>
                                            </div>
                                            <div class="card-header">
                                                <strong class="card-title">Subscription Last Paid</strong>
                                            </div>
                                            <div class="card-body">
                                                <p class="card-text"><?php echo $subs; ?></p>
                                            </div>
                                        </div>
                                    </div>  

                                <!-- </div>  -->                           
                            </div>
                            <div class="table-data__tool-right">
                                <form>
                        <button class="au-btn au-btn-icon au-btn--green au-btn--small" type="submit" name="pid" value="<?php echo($pid); ?>" formmethod="post" formaction="add_fam.php">
                            <i class="zmdi zmdi-plus"></i>add family
                        </button>
                    </form>
                    </div>
                            <div class="row m-t-30">
                            <div class="col-md-12">

                                <!-- DATA TABLE-->
                                <div class="table-responsive m-b-40">
                                    <form action="" method="post" name="parid">
                                    <table class="table table-borderless table-data3">
                                        <thead>
                                            <tr>
                                                <!-- <th>date</th>
                                                <th>type</th>
                                                <th>description</th>
                                                <th>status</th>
                                                <th>price</th>
                                                <th>action</th> -->
                                                <th>sr no.</th>
                                                <th>first name</th>
                                                <th>last name</th>
                                                <th>birthdate&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
                                                <th>relation</th>
                                                <th>date of baptism&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
                                                <th>batismal name</th>
                                                <th>date of holy communioun</th>
                                                <th>date of confirmation</th>
                                                <th>date of marriage&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
                                                <th>gender</th>
                                                <th>occupation</th>
                                                <th>blood group</th>
                                                <th>mobile no</th>
                                                <th>native diocese</th>
                                                <!-- <th>subscription last paid</th> -->
                                                <th>date of demise&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th> 
                                                <th>cause of death</th>
                                                <!-- <th>address</th> -->
                                                <th>action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <!-- <tr>
                                                <td>2018-09-29 05:57</td>
                                                <td>Mobile</td>
                                                <td>iPhone X 64Gb Grey</td>
                                                <td class="process">Processed</td>
                                                <td>$999.00</td>
                                                <td>
                                                    <div class="table-data-feature">
                                                        <button class="item" data-toggle="tooltip" data-placement="top" title="Send">
                                                            <i class="zmdi zmdi-mail-send"></i>
                                                        </button>
                                                        <button class="item" data-toggle="tooltip" data-placement="top" title="Edit">
                                                            <i class="zmdi zmdi-edit"></i>
                                                        </button>
                                                        <button class="item" data-toggle="tooltip" data-placement="top" title="Delete">
                                                            <i class="zmdi zmdi-delete"></i>
                                                        </button>
                                                        <button class="item" data-toggle="tooltip" data-placement="top" title="More">
                                                            <i class="zmdi zmdi-more"></i>
                                                        </button>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>2018-09-28 01:22</td>
                                                <td>Mobile</td>
                                                <td>Samsung S8 Black</td>
                                                <td class="process">Processed</td>
                                                <td>$756.00</td>
                                            </tr>
                                            <tr>
                                                <td>2018-09-27 02:12</td>
                                                <td>Game</td>
                                                <td>Game Console Controller</td>
                                                <td class="denied">Denied</td>
                                                <td>$22.00</td>
                                            </tr>
                                            <tr>
                                                <td>2018-09-26 23:06</td>
                                                <td>Mobile</td>
                                                <td>iPhone X 256Gb Black</td>
                                                <td class="denied">Denied</td>
                                                <td>$1199.00</td>
                                            </tr>
                                            <tr>
                                                <td>2018-09-25 19:03</td>
                                                <td>Accessories</td>
                                                <td>USB 3.0 Cable</td>
                                                <td class="process">Processed</td>
                                                <td>$10.00</td>
                                            </tr>
                                            <tr>
                                                <td>2018-09-29 05:57</td>
                                                <td>Accesories</td>
                                                <td>Smartwatch 4.0 LTE Wifi</td>
                                                <td class="denied">Denied</td>
                                                <td>$199.00</td>
                                            </tr>
                                            <tr>
                                                <td>2018-09-24 19:10</td>
                                                <td>Camera</td>
                                                <td>Camera C430W 4k</td>
                                                <td class="process">Processed</td>
                                                <td>$699.00</td>
                                            </tr>
                                            <tr>
                                                <td>2018-09-22 00:43</td>
                                                <td>Computer</td>
                                                <td>Macbook Pro Retina 2017</td>
                                                <td class="process">Processed</td>
                                                <td>$10.00</td>
                                            </tr> -->
                                            <tr>
                                            <td><?php echo $sr; ?></td>
                                            <td><?php echo $fr_name; ?></td>
                                            <td><?php echo $ls_name; ?></td>
                                            <td><?php echo $dobirth; ?></td>
                                            <td></td>
                                            <td><?php echo $dobapt; ?></td>
                                            <td><?php echo $bap_name; ?></td>
                                            <td><?php echo $dofr_com; ?></td>
                                            <td><?php echo $do_confo; ?></td>
                                            <td><?php echo $do_mr; ?></td>
                                            <td><?php echo $gen; ?></td>
                                            <td><?php echo $occ; ?></td>
                                            <td><?php echo $bg; ?></td>
                                            <td><?php echo $mob; ?></td>
                                            <td><?php echo $native; ?></td>
                                            <td><?php echo $do_dem; ?></td>
                                            <td><?php echo $cod; ?></td>
                                            <!-- <td><?php //echo $sub_mon." ".$sub_yr; ?></td> -->
                                            <!-- <td><?php //echo $address; ?></td> -->
                                            <td>
                                                <div class="table-data-feature">
                                                        
                                                        <button class="item" data-toggle="tooltip" data-placement="top" title="Edit" type="submit" name="edit" value="<?php echo($pid); ?>" formmethod="post" formaction="update_pari.php">
                                                            <i class="zmdi zmdi-edit"></i>
                                                        </button>
                                                        <button class="item" data-toggle="tooltip" data-placement="top" title="Delete">
                                                            <i class="zmdi zmdi-delete"></i>
                                                        </button>
                                                        <!-- <button class="item" data-toggle="tooltip" data-placement="top" title="More" type="submit" name="more" value="<?php //echo($sr); ?>" formmethod="post" formaction="pari_details.php">
                                                            <i class="zmdi zmdi-more"></i>
                                                        </button> -->
                                                    </div>
                                            </td>
                                        </tr>
                                            <?php
                                                
                                                $q1 = "SELECT * FROM relation";
                                                $ch1 = mysqli_query($connection, $q1);
                                                if (!$ch1) {
                                                     # code...
                                                    die("Query Failed");
                                                 }
                                                 $relation = array();
                                                 while ($row = mysqli_fetch_assoc($ch1)) {
                                                     # code...
                                                    array_push($relation, $row);
                                                 }
                                                 while ($row = mysqli_fetch_assoc($ch6)) {
                                                      # code...
                                                    foreach ($relation as $r) {
                                                        # code...
                                                        if ($row['relation'] == $r['sr']) {
                                                            # code...
                                                            $rel = $r['type'];

                                                        }
                                                    }
                                                    foreach ($gender as $g) {
                                                        # code...
                                                        if ($row['gen'] == $g['sr']) {
                                                            # code...
                                                            $gen = $g['type'];
                                                        }
                                                    }
                                                    foreach ($blood as $b) {
                                                        # code...
                                                        if ($row['bg'] == $b['sr']) {
                                                            # code...
                                                            $bg = $b['type'];
                                                        }
                                                    }
                                                    $sr = $sr+1;
                                                    $fr_name = $row['fr_name'];
                                                    $ls_name = $row['ls_name'];
                                                    $dobirth = $row['dob'];
                                                    $dobapt = $row['dobapt'];
                                                    $bap_name = $row['bapt'];
                                                    $dofr_com = $row['dofr_com'];
                                                    $do_confo = $row['do_confo'];
                                                    $do_mr = $row['do_mr'];
                                                    //$gen = $row['gen'];
                                                    $occ = $row['occ'];
                                                    //$bg = $row['bg'];
                                                    $mob = $row['mob'];
                                                    $native = $row['native'];
                                                    //$sub_mon = $row['sub_mon'];
                                                    //$sub_yr = $row['sub_yr'];
                                                    $do_dem = $row['do_dem'];
                                                    $cod = $row['cod'];
                                                    //$address = $row['address'];
                                                    $date=explode("-", $dobirth); 
                                                    $dobirth =  $date[2]."-".$date[1]."-".$date[0];
                                            ?>
                                            <tr>
                                            <td><?php echo $sr; ?></td>
                                            <td><?php echo $fr_name; ?></td>
                                            <td><?php echo $ls_name; ?></td>
                                            <td><?php echo $dobirth; ?></td>
                                            <td><?php echo $rel; ?></td>
                                            <td><?php echo $dobapt; ?></td>
                                            <td><?php echo $bap_name; ?></td>
                                            <td><?php echo $dofr_com; ?></td>
                                            <td><?php echo $do_confo; ?></td>
                                            <td><?php echo $do_mr; ?></td>
                                            <td><?php echo $gen; ?></td>
                                            <td><?php echo $occ; ?></td>
                                            <td><?php echo $bg; ?></td>
                                            <td><?php echo $mob; ?></td>
                                            <td><?php echo $native; ?></td>
                                            <td><?php echo $do_dem; ?></td>
                                            <td><?php echo $cod; ?></td>
                                            <!-- <td><?php //echo $sub_mon." ".$sub_yr; ?></td> -->
                                            <!-- <td><?php //echo $address; ?></td> -->
                                            <td>
                                                <div class="table-data-feature">
                                                        
                                                        <button class="item" data-toggle="tooltip" data-placement="top" title="Edit">
                                                            <i class="zmdi zmdi-edit"></i>
                                                        </button>
                                                        <button class="item" data-toggle="tooltip" data-placement="top" title="Delete">
                                                            <i class="zmdi zmdi-delete"></i>
                                                        </button>
                                                        <!-- <button class="item" data-toggle="tooltip" data-placement="top" title="More" type="submit" name="more" value="<?php //echo($sr); ?>" formmethod="post" formaction="pari_details.php">
                                                            <i class="zmdi zmdi-more"></i>
                                                        </button> -->
                                                    </div>
                                            </td>
                                        </tr>
                                        <?php } ?>
                                        </tbody>
                                    </table>
                                    </form>
                                </div>
                                <!-- END DATA TABLE-->
                            </div>
                        </div>
                            <!-- <div class="col-md-6">
                                <div class="card">
                                    <img class="card-img-top" src="images/bg-title-01.jpg" alt="Card image cap">
                                </div>
                            </div> -->
                        <!-- <div class="row">
                            <div class="col-md-12">
                                <div class="overview-wrap">
                                    <h2 class="title-1">overview</h2>
                                    <button class="au-btn au-btn-icon au-btn--blue">
                                        <i class="zmdi zmdi-plus"></i>add item</button>
                                </div>
                            </div>
                        </div>
                        <div class="row m-t-25">
                            <div class="col-sm-6 col-lg-3">
                                <div class="overview-item overview-item--c1">
                                    <div class="overview__inner">
                                        <div class="overview-box clearfix">
                                            <div class="icon">
                                                <i class="zmdi zmdi-account-o"></i>
                                            </div>
                                            <div class="text">
                                                <h2>10368</h2>
                                                <span>members online</span>
                                            </div>
                                        </div>
                                        <div class="overview-chart">
                                            <canvas id="widgetChart1"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-3">
                                <div class="overview-item overview-item--c2">
                                    <div class="overview__inner">
                                        <div class="overview-box clearfix">
                                            <div class="icon">
                                                <i class="zmdi zmdi-shopping-cart"></i>
                                            </div>
                                            <div class="text">
                                                <h2>388,688</h2>
                                                <span>items solid</span>
                                            </div>
                                        </div>
                                        <div class="overview-chart">
                                            <canvas id="widgetChart2"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-3">
                                <div class="overview-item overview-item--c3">
                                    <div class="overview__inner">
                                        <div class="overview-box clearfix">
                                            <div class="icon">
                                                <i class="zmdi zmdi-calendar-note"></i>
                                            </div>
                                            <div class="text">
                                                <h2>1,086</h2>
                                                <span>this week</span>
                                            </div>
                                        </div>
                                        <div class="overview-chart">
                                            <canvas id="widgetChart3"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-3">
                                <div class="overview-item overview-item--c4">
                                    <div class="overview__inner">
                                        <div class="overview-box clearfix">
                                            <div class="icon">
                                                <i class="zmdi zmdi-money"></i>
                                            </div>
                                            <div class="text">
                                                <h2>$1,060,386</h2>
                                                <span>total earnings</span>
                                            </div>
                                        </div>
                                        <div class="overview-chart">
                                            <canvas id="widgetChart4"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="au-card recent-report">
                                    <div class="au-card-inner">
                                        <h3 class="title-2">recent reports</h3>
                                        <div class="chart-info">
                                            <div class="chart-info__left">
                                                <div class="chart-note">
                                                    <span class="dot dot--blue"></span>
                                                    <span>products</span>
                                                </div>
                                                <div class="chart-note mr-0">
                                                    <span class="dot dot--green"></span>
                                                    <span>services</span>
                                                </div>
                                            </div>
                                            <div class="chart-info__right">
                                                <div class="chart-statis">
                                                    <span class="index incre">
                                                        <i class="zmdi zmdi-long-arrow-up"></i>25%</span>
                                                    <span class="label">products</span>
                                                </div>
                                                <div class="chart-statis mr-0">
                                                    <span class="index decre">
                                                        <i class="zmdi zmdi-long-arrow-down"></i>10%</span>
                                                    <span class="label">services</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="recent-report__chart">
                                            <canvas id="recent-rep-chart"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="au-card chart-percent-card">
                                    <div class="au-card-inner">
                                        <h3 class="title-2 tm-b-5">char by %</h3>
                                        <div class="row no-gutters">
                                            <div class="col-xl-6">
                                                <div class="chart-note-wrap">
                                                    <div class="chart-note mr-0 d-block">
                                                        <span class="dot dot--blue"></span>
                                                        <span>products</span>
                                                    </div>
                                                    <div class="chart-note mr-0 d-block">
                                                        <span class="dot dot--red"></span>
                                                        <span>services</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-6">
                                                <div class="percent-chart">
                                                    <canvas id="percent-chart"></canvas>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> -->
                        <!--  -->
                        <!-- <div class="row">
                            <div class="col-lg-6">
                                <div class="au-card au-card--no-shadow au-card--no-pad m-b-40">
                                    <div class="au-card-title" style="background-image:url('images/bg-title-01.jpg');">
                                        <div class="bg-overlay bg-overlay--blue"></div>
                                        <h3>
                                            <i class="zmdi zmdi-account-calendar"></i>26 April, 2018</h3>
                                        <button class="au-btn-plus">
                                            <i class="zmdi zmdi-plus"></i>
                                        </button>
                                    </div>
                                    <div class="au-task js-list-load">
                                        <div class="au-task__title">
                                            <p>Tasks for John Doe</p>
                                        </div>
                                        <div class="au-task-list js-scrollbar3">
                                            <div class="au-task__item au-task__item--danger">
                                                <div class="au-task__item-inner">
                                                    <h5 class="task">
                                                        <a href="#">Meeting about plan for Admin Template 2018</a>
                                                    </h5>
                                                    <span class="time">10:00 AM</span>
                                                </div>
                                            </div>
                                            <div class="au-task__item au-task__item--warning">
                                                <div class="au-task__item-inner">
                                                    <h5 class="task">
                                                        <a href="#">Create new task for Dashboard</a>
                                                    </h5>
                                                    <span class="time">11:00 AM</span>
                                                </div>
                                            </div>
                                            <div class="au-task__item au-task__item--primary">
                                                <div class="au-task__item-inner">
                                                    <h5 class="task">
                                                        <a href="#">Meeting about plan for Admin Template 2018</a>
                                                    </h5>
                                                    <span class="time">02:00 PM</span>
                                                </div>
                                            </div>
                                            <div class="au-task__item au-task__item--success">
                                                <div class="au-task__item-inner">
                                                    <h5 class="task">
                                                        <a href="#">Create new task for Dashboard</a>
                                                    </h5>
                                                    <span class="time">03:30 PM</span>
                                                </div>
                                            </div>
                                            <div class="au-task__item au-task__item--danger js-load-item">
                                                <div class="au-task__item-inner">
                                                    <h5 class="task">
                                                        <a href="#">Meeting about plan for Admin Template 2018</a>
                                                    </h5>
                                                    <span class="time">10:00 AM</span>
                                                </div>
                                            </div>
                                            <div class="au-task__item au-task__item--warning js-load-item">
                                                <div class="au-task__item-inner">
                                                    <h5 class="task">
                                                        <a href="#">Create new task for Dashboard</a>
                                                    </h5>
                                                    <span class="time">11:00 AM</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="au-task__footer">
                                            <button class="au-btn au-btn-load js-load-btn">load more</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="au-card au-card--no-shadow au-card--no-pad m-b-40">
                                    <div class="au-card-title" style="background-image:url('images/bg-title-02.jpg');">
                                        <div class="bg-overlay bg-overlay--blue"></div>
                                        <h3>
                                            <i class="zmdi zmdi-comment-text"></i>New Messages</h3>
                                        <button class="au-btn-plus">
                                            <i class="zmdi zmdi-plus"></i>
                                        </button>
                                    </div>
                                    <div class="au-inbox-wrap js-inbox-wrap">
                                        <div class="au-message js-list-load">
                                            <div class="au-message__noti">
                                                <p>You Have
                                                    <span>2</span>

                                                    new messages
                                                </p>
                                            </div>
                                            <div class="au-message-list">
                                                <div class="au-message__item unread">
                                                    <div class="au-message__item-inner">
                                                        <div class="au-message__item-text">
                                                            <div class="avatar-wrap">
                                                                <div class="avatar">
                                                                    <img src="images/icon/avatar-02.jpg" alt="John Smith">
                                                                </div>
                                                            </div>
                                                            <div class="text">
                                                                <h5 class="name">John Smith</h5>
                                                                <p>Have sent a photo</p>
                                                            </div>
                                                        </div>
                                                        <div class="au-message__item-time">
                                                            <span>12 Min ago</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="au-message__item unread">
                                                    <div class="au-message__item-inner">
                                                        <div class="au-message__item-text">
                                                            <div class="avatar-wrap online">
                                                                <div class="avatar">
                                                                    <img src="images/icon/avatar-03.jpg" alt="Nicholas Martinez">
                                                                </div>
                                                            </div>
                                                            <div class="text">
                                                                <h5 class="name">Nicholas Martinez</h5>
                                                                <p>You are now connected on message</p>
                                                            </div>
                                                        </div>
                                                        <div class="au-message__item-time">
                                                            <span>11:00 PM</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="au-message__item">
                                                    <div class="au-message__item-inner">
                                                        <div class="au-message__item-text">
                                                            <div class="avatar-wrap online">
                                                                <div class="avatar">
                                                                    <img src="images/icon/avatar-04.jpg" alt="Michelle Sims">
                                                                </div>
                                                            </div>
                                                            <div class="text">
                                                                <h5 class="name">Michelle Sims</h5>
                                                                <p>Lorem ipsum dolor sit amet</p>
                                                            </div>
                                                        </div>
                                                        <div class="au-message__item-time">
                                                            <span>Yesterday</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="au-message__item">
                                                    <div class="au-message__item-inner">
                                                        <div class="au-message__item-text">
                                                            <div class="avatar-wrap">
                                                                <div class="avatar">
                                                                    <img src="images/icon/avatar-05.jpg" alt="Michelle Sims">
                                                                </div>
                                                            </div>
                                                            <div class="text">
                                                                <h5 class="name">Michelle Sims</h5>
                                                                <p>Purus feugiat finibus</p>
                                                            </div>
                                                        </div>
                                                        <div class="au-message__item-time">
                                                            <span>Sunday</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="au-message__item js-load-item">
                                                    <div class="au-message__item-inner">
                                                        <div class="au-message__item-text">
                                                            <div class="avatar-wrap online">
                                                                <div class="avatar">
                                                                    <img src="images/icon/avatar-04.jpg" alt="Michelle Sims">
                                                                </div>
                                                            </div>
                                                            <div class="text">
                                                                <h5 class="name">Michelle Sims</h5>
                                                                <p>Lorem ipsum dolor sit amet</p>
                                                            </div>
                                                        </div>
                                                        <div class="au-message__item-time">
                                                            <span>Yesterday</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="au-message__item js-load-item">
                                                    <div class="au-message__item-inner">
                                                        <div class="au-message__item-text">
                                                            <div class="avatar-wrap">
                                                                <div class="avatar">
                                                                    <img src="images/icon/avatar-05.jpg" alt="Michelle Sims">
                                                                </div>
                                                            </div>
                                                            <div class="text">
                                                                <h5 class="name">Michelle Sims</h5>
                                                                <p>Purus feugiat finibus</p>
                                                            </div>
                                                        </div>
                                                        <div class="au-message__item-time">
                                                            <span>Sunday</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="au-message__footer">
                                                <button class="au-btn au-btn-load js-load-btn">load more</button>
                                            </div>
                                        </div>
                                        <div class="au-chat">
                                            <div class="au-chat__title">
                                                <div class="au-chat-info">
                                                    <div class="avatar-wrap online">
                                                        <div class="avatar avatar--small">
                                                            <img src="images/icon/avatar-02.jpg" alt="John Smith">
                                                        </div>
                                                    </div>
                                                    <span class="nick">
                                                        <a href="#">John Smith</a>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="au-chat__content">
                                                <div class="recei-mess-wrap">
                                                    <span class="mess-time">12 Min ago</span>
                                                    <div class="recei-mess__inner">
                                                        <div class="avatar avatar--tiny">
                                                            <img src="images/icon/avatar-02.jpg" alt="John Smith">
                                                        </div>
                                                        <div class="recei-mess-list">
                                                            <div class="recei-mess">Lorem ipsum dolor sit amet, consectetur adipiscing elit non iaculis</div>
                                                            <div class="recei-mess">Donec tempor, sapien ac viverra</div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="send-mess-wrap">
                                                    <span class="mess-time">30 Sec ago</span>
                                                    <div class="send-mess__inner">
                                                        <div class="send-mess-list">
                                                            <div class="send-mess">Lorem ipsum dolor sit amet, consectetur adipiscing elit non iaculis</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="au-chat-textfield">
                                                <form class="au-form-icon">
                                                    <input class="au-input au-input--full au-input--h65" type="text" placeholder="Type a message">
                                                    <button class="au-input-icon">
                                                        <i class="zmdi zmdi-camera"></i>
                                                    </button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> -->
                        <div class="row">
                            <div class="col-md-12">
                                <div class="copyright">
                                    <p>Copyright © 2018 Colorlib. All rights reserved. Template by <a href="https://colorlib.com">Colorlib</a>.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END MAIN CONTENT-->
            <!-- END PAGE CONTAINER-->
        </div>

    </div>

    <!-- Jquery JS-->
    <script src="vendor/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap JS-->
    <script src="vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- Vendor JS       -->
    <script src="vendor/slick/slick.min.js">
    </script>
    <script src="vendor/wow/wow.min.js"></script>
    <script src="vendor/animsition/animsition.min.js"></script>
    <script src="vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
    </script>
    <script src="vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="vendor/counter-up/jquery.counterup.min.js">
    </script>
    <script src="vendor/circle-progress/circle-progress.min.js"></script>
    <script src="vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="vendor/select2/select2.min.js">
    </script>

    <!-- Main JS-->
    <script src="js/main.js"></script>

</body>

</html>
<!-- end document-->
