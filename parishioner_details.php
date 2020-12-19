<?php include "includes/ch_header.php"; ?>      <!-- bradcam_area  -->
<?php
   if (isset($_POST['pid'])) {
      # code...
      $pid = $_POST['pid'];
   } else {
      header("location: Listings.php");
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
        $dobapt1 = $row['dobapt'];
         if ($dobapt1 == "") {
            # code...
            $dobapt = $dobapt1;
         } else {
            $dobapt = date('d-m-Y',strtotime($dobapt1));
         }
        $bap_name = $row['bap_name'];
        $dofr_com1 = $row['dofr_com'];
        if ($dofr_com1 == "") {
           # code...
         $dofr_com = $dofr_com1;
        } else {
         $dofr_com = date('d-m-Y', strtotime($dofr_com1));
        }
        $do_confo1 = $row['do_confo'];
        if ($do_confo1 == "") {
           # code...
            $do_confo = $do_confo1;
        } else {
            $do_confo = date('d-m-Y', strtotime($do_confo1));
        }
        $do_mr1 = $row['do_mr'];
        if ($do_mr1 == "") {
           # code...
            $do_mr = $do_mr1;
        } else {
            $do_mr = date('d-m-Y', strtotime($do_mr1));
        }
        $gen = $gen1;
        $occ = $row['occ'];
        $bg = $bg1;
        $mob = $row['mob'];
        $native = $row['native'];
        if ($row['image'] == "") {
            # code...
            $image = "../images2/bg_1.jpg";
        } else {
            $imageds = $row['image'];
            $image = ltrim($imageds, "\.\./");
        }
        //$sub_mon = $row['sub_mon'];
        //$sub_yr = $row['sub_yr'];
        $do_dem1 = $row['do_dem'];
        if ($do_dem1 == "") {
           # code...
            $do_dem = $do_dem1;
        } else {
            $do_dem = date('d-m-Y', strtotime($do_dem1));
        }
        $cod = $row['cod'];
        $date = explode("-", $dobirth);
        $dobirth = $date[2]."-".$date[1]."-".$date[0];
     }
   //print_r($_POST); 
?>
      <div class="bradcam_area bradcam_bg_2">
             <div class="container">
                 <div class="row">
                     <div class="col-xl-12">
                         <div class="bradcam_text text-center">
                             <h3><?php echo $fr_name." ".$ls_name."'s Details"; ?></h3>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
         <!--/ bradcam_area  -->

   <!--================Blog Area =================-->
   <section class="blog_area single-post-area section-padding">
      <div class="container">
         <div class="row">
            <!-- <div class="col-lg-2">
               
            </div> -->
            <div class="col-lg-8 posts-list">
               <div class="single-post">
                  <div class="feature-img">
                     <img class="img-fluid" src="<?php echo($image); ?>" alt="">
                  </div>
               </div>
            </div>
            <div class="col-lg-4">
               <div class="blog_details">
                     <h2>Address</h2>
                  <p><?php echo $address; ?></p>
                  <!-- <ul class="blog-info-link">
                     <li><a href="#"><i class="fa fa-user"></i> Travel, Lifestyle</a></li>
                     <li><a href="#"><i class="fa fa-comments"></i> 03 Comments</a></li>
                  </ul> -->
               </div>
               <div class="blog_details">
                     <h2>Subscription Details</h2>
                  <p><?php echo $subs; ?></p>
                  <!-- <ul class="blog-info-link">
                     <li><a href="#"><i class="fa fa-user"></i> Travel, Lifestyle</a></li>
                     <li><a href="#"><i class="fa fa-comments"></i> 03 Comments</a></li>
                  </ul> -->
               </div>
            </div>
         </div>
         <div class="row">
            <div class="col-lg-12"> 
               <div class="section-top-border">
                     <h3 class="mb-30">Family Details</h3>
                     <table class="table table-responsive">
                        <thead class="thead-dark">
                           <th>Sr No</th>
                           <th>First Name</th>
                           <th>Last Name</th>
                           <th>Birthdate&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
                           <th>Relation</th>
                           <th>Date of Baptism&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
                           <th>Baptismal Name</th>
                           <th>Date of Holy Communioun</th>
                           <th>Date of Confirmation</th>
                           <th>Date of Marriage&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
                           <th>Gender</th>
                           <th>Occupation&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
                           <th>Blood Group</th>
                           <th>Mobile No</th>
                           <th>Native Diocese</th>
                           <th>Date of Demise&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
                           <th>Cause of Death</th>
                        </thead>
                        <tbody>
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
                                     $dobapt1 = $row['dobapt'];
                                     if ($dobapt1 == "") {
                                        # code...
                                       $dobapt = $dobapt1;
                                     } else {
                                       $dobapt = date('d-m-Y',strtotime($dobapt1));
                                     }
                                     //$dobapt = date('d-m-Y', strtotime($dobapt1));
                                     $bap_name = $row['bapt'];
                                     $dofr_com1 = $row['dofr_com'];
                                     if ($dofr_com1 == "") {
                                        # code...
                                       $dofr_com = $dofr_com1;
                                     } else {
                                       $dofr_com = date('d-m-Y',strtotime($dofr_com1));
                                     }
                                     $do_confo1 = $row['do_confo'];
                                     if ($do_confo1 == "") {
                                        # code...
                                       $do_confo = $do_confo1;
                                     } else {
                                       $do_confo = date('d-m-Y',strtotime($do_confo1));
                                     }
                                     $do_mr1 = $row['do_mr'];
                                     if ($do_mr1 == "") {
                                        # code...
                                       $do_mr = $do_mr1;
                                     } else {
                                       $do_mr = date('d-m-Y',strtotime($do_mr1));
                                     }
                                     //$gen = $row['gen'];
                                     $occ = $row['occ'];
                                     //$bg = $row['bg'];
                                     $mob = $row['mob'];
                                     $native = $row['native'];
                                     //$sub_mon = $row['sub_mon'];
                                     //$sub_yr = $row['sub_yr'];
                                     $do_dem1 = $row['do_dem'];
                                     if ($do_dem1 == "") {
                                        # code...
                                       $do_dem = $do_dem1;
                                     } else {
                                       $do_dem = date('d-m-Y',strtotime($do_dem1));
                                     }
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
                           </tr>
                           <?php } ?>          
                        </tbody>
                     </table>
                  </div>
            </div>
         </div>
      </div>
   </section>
   <!--================ Blog Area end =================-->

    <?php include "includes/ch_footer.php"; ?>