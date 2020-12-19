<?php include "includes/ad_header.php"; ?>
<?php
    if (isset($_POST['edit'])) {
         # code...
        $pid = $_POST['edit'];
        $query = "SELECT * FROM pari WHERE sr = $pid";
        $check = mysqli_query($connection, $query);
        if (!$check) {
            # code...
            die("Query Failed");
        }
        while ($row = mysqli_fetch_assoc($check)) {
            # code...
            // $fr_name = $row['fr_name'];
            // $ls_name = $row['ls_name'];
            $address = $row['address'];
            //$sr = 1;
            $fr_name = $row['fr_name'];
            $ls_name = $row['ls_name'];
            $dobirth = $row['dobirth'];
            $dobapt = $row['dobapt'];
            $bap_name = $row['bap_name'];
            $dofr_com = $row['dofr_com'];
            $do_confo = $row['do_confo'];
            $do_mr = $row['do_mr'];
            $gen = $row['gen'];
            $occ = $row['occ'];
            $bg = $row['bg'];
            $mob = $row['mob'];
            $native = $row['native'];
            $sub_mon = $row['sub_mon'];
            $sub_yr = $row['sub_yr'];
            $do_dem = $row['do_dem'];
            $cod = $row['cod'];
            $image = $row['image'];
            // $date = explode("-", $dobirth);
            // $dobirth = $date[2]."-".$date[1]."-".$date[0];
        }
    } else {
        header("location: pari.php");
    }
?>
            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-header">
                                        Update Parishioner
                                    </div>
                                    <div class="card-body card-block">
                                        <form action="up_pari.php" method="post" enctype="multipart/form-data" class="form-horizontal">
                                            <!-- <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label class=" form-control-label">Static</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <p class="form-control-static">Username</p>
                                                </div>
                                            </div> -->
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">First Name</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="text-input" name="fr_name" placeholder="First Name" class="form-control" required="yes" value="<?php echo($fr_name); ?>">
                                                    <!-- <small class="form-text text-muted">This is a help text</small> -->
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Last Name</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="text-input" name="ls_name" placeholder="Last Name" class="form-control" required="yes" value="<?php echo($ls_name); ?>">
                                                    <!-- <small class="form-text text-muted">This is a help text</small> -->
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Date of Birth</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="date" id="text-input" name="dobirth" placeholder="Text" class="form-control" required="yes" value="<?php echo($dobirth); ?>">
                                                    <!-- <small class="form-text text-muted">This is a help text</small> -->
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Date of Baptism</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="date" id="text-input" name="dobapt" placeholder="Text" class="form-control" value="<?php echo($dobapt); ?>">
                                                    <!-- <small class="form-text text-muted">This is a help text</small> -->
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Baptismal Name</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="text-input" name="bap_name" placeholder="Baptismal Name" class="form-control" value="<?php echo($bap_name); ?>">
                                                    <!-- <small class="form-text text-muted">This is a help text</small> -->
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Date of Holy Communion</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="date" id="text-input" name="dofr_com" placeholder="Text" class="form-control" value="<?php echo($dofr_com); ?>">
                                                    <!-- <small class="form-text text-muted">This is a help text</small> -->
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Date of Confirmation</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="date" id="text-input" name="do_confo" placeholder="Text" class="form-control" value="<?php echo($do_confo); ?>">
                                                    <!-- <small class="form-text text-muted">This is a help text</small> -->
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Date of Marriage</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="date" id="text-input" name="do_mr" placeholder="Text" class="form-control" value="<?php echo($do_mr); ?>">
                                                    <!-- <small class="form-text text-muted">This is a help text</small> -->
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="select" class=" form-control-label">Gender</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <select name="gen" id="select" class="form-control">
                                                        <?php
                                                            $query = "SELECT * FROM gender";
                                                            $select_gender = mysqli_query($connection,$query);
                                                            if (!$select_gender) {
                                                                # code...
                                                                die("Gender Query Failed".mysqli_error());
                                                             } 
                                                             while($row = mysqli_fetch_assoc($select_gender))
                                                             {
                                                                $sr = $row['sr'];
                                                                $gender = $row['type'];
                                                        ?>
                                                        <option value='<?php echo($sr) ?>'<?php if($gen == $sr) echo "selected=selected"; ?>><?php echo $gender; ?></option>
                                                    <?php } ?>
                                                    </select>
                                                    <!-- <select name="select" id="select" class="form-control">
                                                        <option value="0">Please select</option>
                                                        <option value="1">Option #1</option>
                                                        <option value="2">Option #2</option>
                                                        <option value="3">Option #3</option>
                                                    </select> -->
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Occupation</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="textarea" id="text-input" name="occ" placeholder="Occupation" class="form-control" value="<?php echo($occ); ?>">
                                                    <!-- <small class="form-text text-muted">This is a help text</small> -->
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="select" class=" form-control-label">Blood Group</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <select name="bg" id="select" class="form-control">
                                                        <!-- <option value = "0">None Selected</option> -->
                                                        <?php
                                                            $query = "SELECT * FROM bloodg";
                                                            $select_blood = mysqli_query($connection,$query);
                                                            if (!$select_blood) {
                                                                # code...
                                                                die("Blood Query Failed".mysqli_error());
                                                             } 
                                                             while($row = mysqli_fetch_assoc($select_blood))
                                                             {
                                                                $sr = $row['sr'];
                                                                $blood = $row['type'];
                                                        ?>
                                                        <option value='<?php echo($sr) ?>'<?php if($bg == $sr) echo "selected=selected"; ?>><?php echo $blood; ?></option>
                                                    <?php } ?>
                                                        <!-- <option value="0">Please select</option>
                                                        <option value="1">Option #1</option>
                                                        <option value="2">Option #2</option>
                                                        <option value="3">Option #3</option> -->
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Mobile No.</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="tel" id="text-input" name="mob" placeholder="Mobile No." class="form-control" value="<?php echo($mob); ?>">
                                                    <!-- <small class="form-text text-muted">This is a help text</small> -->
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Native Diocese</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="text-input" name="nat" placeholder="Native Diocese" class="form-control" value="<?php echo($native); ?>">
                                                    <!-- <small class="form-text text-muted">This is a help text</small> -->
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="select" class=" form-control-label">Subscription Month</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <select name="sub_mon" id="select" class="form-control">
                                                        <?php
                                                            $query = "SELECT * FROM mon";
                                                            $select_month = mysqli_query($connection,$query);
                                                            if (!$select_month) {
                                                                # code...
                                                                die("Gender Query Failed".mysqli_error());
                                                             } 
                                                             while($row = mysqli_fetch_assoc($select_month))
                                                             {
                                                                $sr = $row['sr'];
                                                                $month = $row['name'];
                                                        ?>
                                                        <option value='<?php echo($sr) ?>' <?php if ($sr == $sub_mon) echo "selected = selected"; ?>><?php echo $month; ?></option>
                                                    <?php } ?>
                                                        <!-- <option value="0">Please select</option>
                                                        <option value="1">Option #1</option>
                                                        <option value="2">Option #2</option>
                                                        <option value="3">Option #3</option> -->
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="sub_yr" class=" form-control-label">Subscription Year</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <select name="sub_yr" id="select" class="form-control">
                                                        <?php
                                                            for ($i=2006; $i <= date('Y'); $i++) { 
                                                                 # code...
                                                        ?>
                                                        <option value = '<?php echo($i) ?>' <?php if($i == $sub_yr) echo "selected=selected";?>><?php echo $i; ?></option>
                                                    <?php } ?>
                                                        <!-- <option value="0">Please select</option>
                                                        <option value="1">Option #1</option>
                                                        <option value="2">Option #2</option>
                                                        <option value="3">Option #3</option> -->
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Date of Demise</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="date" id="text-input" name="do_dem" placeholder="Text" class="form-control"value="<?php echo($do_dem); ?>">
                                                    <!-- <small class="form-text text-muted">This is a help text</small> -->
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Cause of Death</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="text-input" name="cod" placeholder="Cause of Death" class="form-control" value="<?php echo($cod); ?>">
                                                    <!-- <small class="form-text text-muted">This is a help text</small> -->
                                                </div>
                                            </div>
                                           
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="textarea-input" class=" form-control-label">Address</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <textarea name="address" id="textarea-input" rows="9" placeholder="Address" class="form-control" required="yes"><?php echo($address); ?></textarea>
                                                </div>
                                            </div>
                                            <input type="hidden" name="pid" value="<?php echo($pid); ?>">
                                            <input type="hidden" name="image" value="<?php echo($image); ?>">
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="file-input" class=" form-control-label">Family Image</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="file" accept="image/*" id="file-input" name="fileToUpload" class="form-control-file">
                                                </div>
                                            </div>
                                            <!-- <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="select" class=" form-control-label">Family Members</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <select name="fam_meb" id="select" class="form-control">
                                                        <option value="0">Please select</option>
                                                        <option value="1">1</option>
                                                        <option value="2">2</option>
                                                        <option value="3">3</option>
                                                        <option value="4">4</option>
                                                        <option value="5">5</option>
                                                        <option value="6">6</option>
                                                        <option value="7">7</option>
                                                        <option value="8">8</option>
                                                        <option value="9">9</option>
                                                        <option value="10">10</option>
                                                    </select>
                                                </div>
                                            </div> -->
                                            
                                            <input type="submit" name="submit" class="btn btn-primary btn-sm">
                                            <input type="reset" name="reset" class="btn btn-danger btn-sm">
                                        </form>
                                        <?php
                                            
                                        ?>
                                    </div>
                              </div>
                            </div>
                        </div>
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
