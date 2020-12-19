<?php include "includes/config.php"; ?>
<?php
	session_start(); ob_start();
	if (isset($_POST['submit'])) {
        # code...
        //print_r($_POST);
        $fr_name = $_POST['fr_name'];
        $ls_name = $_POST['ls_name'];
        $dobirth = $_POST['dobirth'];
        $dobapt = $_POST['dobapt'];
        //echo $dobapt;
        // if ($dobapt == "") {
        //     # code...
        //     $dobapt = NULL;
        // }
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
        $pid = $_POST['pid'];
        $image = $_POST['image'];
        $image2 = $_FILES['fileToUpload']['name'];
        // echo $image;

        //$_SESSION['no_meb'] = $_POST['fam_meb'];
        //echo $query;
        if ($image2 == "") {
            # code...
            $query = "UPDATE pari SET fr_name='$fr_name', ls_name='$ls_name', dobirth='$dobirth', dobapt='$dobapt', bap_name='$bap_name', dofr_com='$dofr_com', do_confo='$do_confo', do_mr='$do_mr', gen='$gen', occ='$occ', bg='$bg', mob='$mob', native='$native', sub_mon='$sub_mon', sub_yr='$sub_yr', do_dem='$do_dem', cod='$cod', address='$address' WHERE sr = $pid";
            $check = mysqli_query($connection, $query);
        } else {
            $target_dir = "../images2/";
            //$_FILES["fileToUpload"]["name"] = $_POST["amb"];
            $imageFileType = strtolower(pathinfo($_FILES["fileToUpload"]["name"],PATHINFO_EXTENSION));
            $_FILES["fileToUpload"]["name"] = $pid.".".$imageFileType;
            $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
            if (file_exists($target_file)) {
                # code...
                unlink($target_file);
            }
            // print_r($_FILES);
            // echo " ".$target_file." ";
            //$uploadOk = 1;
            //echo $imageFileType;
            //Check if image file is a actual image or fake image
            //$check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
            // echo $target_file;
            // die("Ambada");
            
            if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
                //echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
                $query = "UPDATE pari SET fr_name='$fr_name', ls_name='$ls_name', dobirth='$dobirth', dobapt='$dobapt', bap_name='$bap_name', dofr_com='$dofr_com', do_confo='$do_confo', do_mr='$do_mr', gen='$gen', occ='$occ', bg='$bg', mob='$mob', native='$native', sub_mon='$sub_mon', sub_yr='$sub_yr', do_dem='$do_dem', cod='$cod', address='$address', image='$target_file' WHERE sr = $pid";
                $check = mysqli_query($connection, $query);
                //$_SESSION['more'] = $pid;
                //header("location: pari_details.php");

            } else {
                echo "Sorry, there was an error uploading your file.";
            }
            //$check_insert = mysqli_query($connection, $query);
        }
        if (!$check) {
            # code...
            die("Update Query Failed");
        } else {
            $_SESSION['more'] = $pid;
            echo '<script language = "javascript">alert("Updated Successfully");';
            //header("location: add_fam.php");
            echo 'document.location="pari_details.php";';
            echo '</script>';
        }
    } else {
    	//header("location: pari.php");
    } 
?>