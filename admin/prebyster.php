<?php include "includes/ad_header.php"; ?>
            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                    <div class="table-data__tool-right">
                        <a href="add_pari.php"><button class="au-btn au-btn-icon au-btn--green au-btn--small">
                            <i class="zmdi zmdi-plus"></i>add priest
                        </button></a>
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
                                                <!-- <th>birthdate</th>
                                                <th>date of baptism</th>
                                                <th>batismal name</th>
                                                <th>date of holy communioun</th>
                                                <th>date of confirmation</th>
                                                <th>date of marriage</th>
                                                <th>gender</th>
                                                <th>occupation</th>
                                                <th>blood group</th> -->
                                                <th>Office</th>
                                                <!-- <th>native diocese</th> -->
                                                <!-- <th>subscription last paid</th> -->
                                               <!--  <th>date of demise&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th> 
                                                <th>cause of death</th> -->
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
                                            <?php
                                                
                                            ?>
                                            <tr>
                                            <td>1</td>
                                            <td>First Name</td>
                                            <td>Last Name</td>
                                            <td>Office</td>
                                            <!-- <td><?php //echo $address; ?></td> -->
                                            <td>
                                                <div class="table-data-feature">
                                                        
                                                        <button class="item" data-toggle="tooltip" data-placement="top" title="Edit" type="submit" name="edit" value="<?php echo($sr); ?>" formmethod="post" formaction="update_pari.php">
                                                            <i class="zmdi zmdi-edit"></i>
                                                        </button>
                                                        <button class="item" data-toggle="tooltip" data-placement="top" title="Delete" type="submit" name="delete" value="<?php echo($sr); ?>" formmethod="post" formaction="">
                                                            <i class="zmdi zmdi-delete"></i>
                                                        </button>
                                                        <button class="item" data-toggle="tooltip" data-placement="top" title="More" type="submit" name="more" value="<?php echo($sr); ?>" formmethod="post" formaction="pari_details.php">
                                                            <i class="zmdi zmdi-more"></i>
                                                        </button>
                                                    </div>
                                            </td>
                                        </tr>
                                        <?php  ?>
                                        </tbody>
                                    </table>
                                    </form>
                                </div>
                                <!-- END DATA TABLE-->
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
