<?php include "includes/ad_header.php"; ?>
            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-header">
                                        Add Parishioner
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
                                                    <input type="text" id="text-input" name="fr_name" placeholder="First Name" class="form-control" required="yes">
                                                    <!-- <small class="form-text text-muted">This is a help text</small> -->
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Last Name</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="text-input" name="ls_name" placeholder="Last Name" class="form-control" required="yes">
                                                    <!-- <small class="form-text text-muted">This is a help text</small> -->
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Date of Birth</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="date" id="text-input" name="dobirth" placeholder="Text" class="form-control" required="yes">
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
                                                    <input type="text" id="text-input" name="bap_name" placeholder="Baptismal Name" class="form-control">
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
                                                    <input type="tel" id="text-input" name="mob" placeholder="Mobile No." class="form-control">
                                                    <!-- <small class="form-text text-muted">This is a help text</small> -->
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Native Diocese</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="text-input" name="nat" placeholder="Native Diocese" class="form-control">
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
                                                                echo "<option value='$sr'>$month</option>";

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
                                                    <label for="sub_yr" class=" form-control-label">Subscription Year</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <select name="sub_yr" id="select" class="form-control">
                                                        <?php
                                                            for ($i=2006; $i <= date('Y'); $i++) { 
                                                                 # code...
                                                                echo "<option value = '$i'>$i</option>";
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
                                           
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="textarea-input" class=" form-control-label">Address</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <textarea name="address" id="textarea-input" rows="9" placeholder="Address" class="form-control" required="yes"></textarea>
                                                </div>
                                            </div>
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
                                            if (isset($_POST['submit'])) {
                                                 # code...
                                                $fr_name = $_POST['fr_name'];
                                                $ls_name = $_POST['ls_name'];
                                                $dobirth = $_POST['dobirth'];
                                                $dobapt = $_POST['dobapt'];
                                                //echo $dobapt;
                                                if ($dobapt == "") {
                                                    # code...
                                                    $dobapt = NULL;
                                                }
                                                $bap_name = $_POST['bap_name'];
                                                $dofr_com = $_POST['dofr_com'];
                                                $do_confo = $_POST['do_confo'];
                                                $do_mr = $_POST['do_mr'];
                                                $gen = $_POST['gen'];
                                                $occ = $_POST['occ'];
                                                $bg = $_POST['bg'];
                                                $mob = $_POST['mob'];
                                                $native = $_POST['nat'];
                                                $sub_mon = $_POST['sub_mon'];
                                                $sub_yr = $_POST['sub_yr'];
                                                $do_dem = $_POST['do_dem'];
                                                $cod = $_POST['cod'];
                                                $address = $_POST['address'];
                                                //$_SESSION['no_meb'] = $_POST['fam_meb'];

                                                $query = "INSERT INTO pari(fr_name, ls_name, dobirth, dobapt, bap_name, dofr_com, do_confo, do_mr, gen, occ, bg, mob, native, sub_mon, sub_yr, do_dem, cod, address) VALUES('$fr_name', '$ls_name', '$dobirth', '$dobapt', '$bap_name', '$dofr_com', '$do_confo', '$do_mr', '$gen', '$occ', '$bg', '$mob', '$native', '$sub_mon', '$sub_yr', '$do_dem', '$cod', '$address')";
                                                $check_insert = mysqli_query($connection, $query);
                                                if (!$check_insert) {
                                                    # code...
                                                    die("Insert Query Failed");
                                                }

                                                $pid = mysqli_insert_id($connection);
                                                $target_dir = "../images2/";
                                                //$_FILES["fileToUpload"]["name"] = $_POST["amb"];
                                                $imageFileType = strtolower(pathinfo($_FILES["fileToUpload"]["name"],PATHINFO_EXTENSION));
                                                $_FILES["fileToUpload"]["name"] = $pid.".".$imageFileType;
                                                $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
                                                // print_r($_FILES);
                                                // echo " ".$target_file." ";
                                                $uploadOk = 1;
                                                //echo $imageFileType;
                                                //Check if image file is a actual image or fake image
                                                $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
                                                // echo $target_file;
                                                // die("Ambada");
                                                if($check !== false) {
                                                    echo "File is an image - " . $check["mime"] . ".";
                                                    $uploadOk = 1;
                                                } else {
                                                    echo "File is not an image.";
                                                    $uploadOk = 0;
                                                }
                                                if ($uploadOk == 0) {
                                                    echo "Sorry, your file was not uploaded.";
                                                // if everything is ok, try to upload file
                                                } else {
                                                    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
                                                        //echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
                                                        $query = "UPDATE pari SET image='$target_file' WHERE sr='$pid'";
                                                        $check = mysqli_query($connection, $query);
                                                        $_SESSION['more'] = $pid;
                                                        header("location: pari_details.php");

                                                    } else {
                                                        echo "Sorry, there was an error uploading your file.";
                                                    }
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
