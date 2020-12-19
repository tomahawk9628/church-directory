<?php include "includes/ad_header.php"; ?>
<?php
    if (isset($_POST['pid'])) {
        # code...
        $hd_no = $_POST['pid'];
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
                                        Add Family
                                    </div>
                                    <div class="card-body card-block">
                                        <form action="" method="post" enctype="multipart/form-data" class="form-horizontal">
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
                                                    <input type="text" id="text-input" name="fr_name" placeholder="First Name" class="form-control">
                                                    <!-- <small class="form-text text-muted">This is a help text</small> -->
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Last Name</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="text-input" name="ls_name" placeholder="Last Name" class="form-control">
                                                    <!-- <small class="form-text text-muted">This is a help text</small> -->
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="select" class=" form-control-label">Relation With the Parishioner</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <select name="relation" id="select" class="form-control">
                                                        <?php
                                                            $query = "SELECT * FROM relation";
                                                            $select_relation = mysqli_query($connection,$query);
                                                            if (!$select_relation) {
                                                                # code...
                                                                die("Relation Query Failed".mysqli_error());
                                                             } 
                                                             while($row = mysqli_fetch_assoc($select_relation))
                                                             {
                                                                $sr = $row['sr'];
                                                                $relation = $row['type'];
                                                                echo "<option value='$sr'>$relation</option>";

                                                             }
                                                        ?>
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
                                                    <label for="text-input" class=" form-control-label">Date of Birth</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="date" id="text-input" name="dob" placeholder="Text" class="form-control">
                                                    <!-- <small class="form-text text-muted">This is a help text</small> -->
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Date of Baptism</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="date" id="text-input" name="dobapt" placeholder="Text" class="form-control">
                                                    <!-- <small class="form-text text-muted">This is a help text</small> -->
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Baptismal Name</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="text-input" name="bapt" placeholder="Baptismal Name" class="form-control">
                                                    <!-- <small class="form-text text-muted">This is a help text</small> -->
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Date of Holy Communion</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="date" id="text-input" name="dofr_com" placeholder="Text" class="form-control">
                                                    <!-- <small class="form-text text-muted">This is a help text</small> -->
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Date of Confirmation</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="date" id="text-input" name="do_confo" placeholder="Text" class="form-control">
                                                    <!-- <small class="form-text text-muted">This is a help text</small> -->
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Date of Marriage</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="date" id="text-input" name="do_mr" placeholder="Text" class="form-control">
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
                                                                echo "<option value='$sr'>$gender</option>";

                                                             }
                                                        ?>
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
                                                    <input type="textarea" id="text-input" name="occ" placeholder="Occupation" class="form-control">
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
                                                                echo "<option value='$sr'>$blood</option>";

                                                             }
                                                        ?>
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
                                                    <input type="number" id="text-input" name="mob" placeholder="Mobile No." class="form-control">
                                                    <!-- <small class="form-text text-muted">This is a help text</small> -->
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Native Diocese</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="text-input" name="native" placeholder="Native Diocese" class="form-control">
                                                    <!-- <small class="form-text text-muted">This is a help text</small> -->
                                                </div>
                                            </div>
                                            <!--  -->
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Date of Demise</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="date" id="text-input" name="do_dem" placeholder="Text" class="form-control">
                                                    <!-- <small class="form-text text-muted">This is a help text</small> -->
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Cause of Death</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="text-input" name="cod" placeholder="Cause of Death" class="form-control">
                                                    <!-- <small class="form-text text-muted">This is a help text</small> -->
                                                </div>
                                            </div>
                                            <input type="hidden" name="pid" value="<?php echo($hd_no); ?>">
                                            <!-- <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="textarea-input" class=" form-control-label">Address</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <textarea name="address" id="textarea-input" rows="9" placeholder="Address" class="form-control"></textarea>
                                                </div>
                                            </div> -->
                                    
                                            <input type="submit" name="submit" class="btn btn-primary btn-sm">
                                            <input type="reset" name="reset" class="btn btn-danger btn-sm">
                                        </form>
                                        <?php
                                            if (isset($_POST['submit'])) {
                                                 # code...
                                                //print_r($_POST);
                                                $fr_name = $_POST['fr_name'];
                                                $ls_name = $_POST['ls_name'];
                                                $relation = $_POST['relation'];
                                                $dob = $_POST['dob'];
                                                $dobapt = $_POST['dobapt'];
                                                //echo $dobapt;
                                                // if ($dobapt == "") {
                                                //     # code...
                                                //     $dobapt = NULL;
                                                // }
                                                $bapt = $_POST['bapt'];
                                                $dofr_com = $_POST['dofr_com'];
                                                $do_confo = $_POST['do_confo'];
                                                $do_mr = $_POST['do_mr'];
                                                $gen = $_POST['gen'];
                                                $occ = $_POST['occ'];
                                                $bg = $_POST['bg'];
                                                $mob = $_POST['mob'];
                                                $native = $_POST['native'];
                                                // // $sub_mon = $_POST['sub_mon'];
                                                // // $sub_yr = $_POST['sub_yr'];
                                                $do_dem = $_POST['do_dem'];
                                                $cod = $_POST['cod'];
                                                //$address = $_POST['address'];

                                                $query = "INSERT INTO pari_fame(hd_no, fr_name, ls_name, relation, dob, dobapt, bapt, dofr_com, do_confo, do_mr, gen, occ, bg, mob, native, do_dem, cod) VALUES('$hd_no', '$fr_name', '$ls_name', '$relation', '$dob', '$dobapt', '$bapt', '$dofr_com', '$do_confo', '$do_mr', '$gen', '$occ', '$bg', '$mob', '$native', '$do_dem', '$cod')";
                                                $check_insert = mysqli_query($connection, $query);
                                                if (!$check_insert) {
                                                    # code...
                                                    die("Insert Query Failed");
                                                } else {
                                                    $_SESSION['more'] = $hd_no;
                                                    echo '<script language = "javascript">alert("Inserted Successfully");';
                                                    //header("location: add_fam.php");
                                                    echo 'document.location="pari_details.php";';
                                                    echo '</script>';
                                                }
                                             } 
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
