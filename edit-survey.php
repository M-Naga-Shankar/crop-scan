

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Focus - Bootstrap Admin Dashboard </title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="./images/favicon.png">
    <link rel="stylesheet" href="./vendor/owl-carousel/css/owl.carousel.min.css">
    <link rel="stylesheet" href="./vendor/owl-carousel/css/owl.theme.default.min.css">
    <link href="./vendor/jqvmap/css/jqvmap.min.css" rel="stylesheet">
    <link href="./css/style.css" rel="stylesheet">



</head>

<body>

    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
        <div class="sk-three-bounce">
            <div class="sk-child sk-bounce1"></div>
            <div class="sk-child sk-bounce2"></div>
            <div class="sk-child sk-bounce3"></div>
        </div>
    </div>
    <!--*******************
        Preloader end
    ********************-->


    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">

        <!--**********************************
            Nav header start
        ***********************************-->
        <?php 
        include './components/header.php';
        
        ?>
        <!--**********************************
            Header end ti-comment-alt
        ***********************************-->

        <!--**********************************
            Sidebar start
        ***********************************-->
        <?php 
        include './components/sidebar.php';
        
        ?>


        <!--**********************************
            Sidebar end
        ***********************************-->

        <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
            <!-- row -->
            <div class="container-fluid">
<?php
if(!empty($_GET['status'])){
if($_GET['status']==1){

?>
                <div class="alert alert-success alert-dismissible fade show" role="alert" style="color:black; font-size:15px;">
      Survey Edited <strong>Successfully</strong>
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    <br>
<?php
}
?>
<?php
if($_GET['status']==2){

?>
                <div class="alert alert-danger alert-dismissible fade show" role="alert" style="color:black; font-size:15px;">
      Survey Edit <strong>UnSuccessfull</strong>
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    <br>
<?php
}}
?>
                          <?php

if(!empty($_GET)){
$id=$_GET['id'];
}

                                        include './include/config.php';
                               $sl_id = mysqli_query($conn, "select * from survey where id='$id'");


                while ($j = mysqli_fetch_array($sl_id)) {
                  ?>

            <div class="card">
                            <div class="card-header">
                                
                                <h4 class="card-title">New Farmer Survey</h4>
                            </div>
                            <div class="card-body">
                                <div class="basic-form">
                                    <form action="update-survey.php" method="POST">

                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label>Farmer Name</label>
                                                <input type='hidden' name="id" value="<?= $j['id'] ?>" >
                                                <input name="name" value="<?= $j['farmer_name'] ?>" type="text" class="form-control" placeholder="Enter Farmer Name">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label>Farmer Phone</label>
                                                <input name="phone" value="<?= $j['farmer_phone'] ?>" type="number" class="form-control" placeholder="Enter Farmer Number">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label>Village Name</label>
                                                <input name="vname" value="<?= $j['village_name'] ?>"  type="text" class="form-control" placeholder="Enter Village Name">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label>Village Pincode</label>
                                                <input name="pincode" value="<?= $j['pincode'] ?>" type="number" class="form-control" placeholder="Enter Village Pincode">
                                            </div>
                                      
                                            <div class="form-group col-md-6">
                                                <label>Select Crop Type</label>
                                                <select name="crop" id="inputState" class="form-control">
                                                    <option selected>Choose...</option>
                                                    <option value="Paddy">Paddy</option>
                                                    <option value="Sugarcane">Sugar Cane</option>
                                                    <option value="Groundnut">Ground Nut</option>
                                                </select>
                                            </div>
                              
                                            <div class="form-group col-md-6">
                                                <label>Select Soil Type</label>
                                                <select name="soil" id="inputState" class="form-control">
                                                    <option selected>Choose...</option>
                                                    <option value="Red Soil">Red soils</option>
                                                    <option value="Black Soil">Black soil</option>
                                                    <option value="Alluvial Soil">Alluvial soil</option>
                                                </select>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label>Enter Land Size (In Acres)</label>
                                                <input name="land" value="<?= $j['land'] ?>" type="number" class="form-control" placeholder="Enter Land Size (In Acres)">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" checked>
                                                <label class="form-check-label">
                                                    I Agree With T&C
                                                </label>
                                            </div>
                                        </div>

                                        <?php
                }
                                        ?>
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                        </div>
</div>
        <!--**********************************
            Content body end
        ***********************************-->


        <!--**********************************
            Footer start
        ***********************************-->
        <?php include './components/footer.php'; ?>
        <!--**********************************
            Footer end
        ***********************************-->

        <!--**********************************
           Support ticket button start
        ***********************************-->

        <!--**********************************
           Support ticket button end
        ***********************************-->


    </div>
    <!--**********************************
        Main wrapper end
    ***********************************-->

    <!--**********************************
        Scripts
    ***********************************-->
    <!-- Required vendors -->
    <script src="./vendor/global/global.min.js"></script>
    <script src="./js/quixnav-init.js"></script>
    <script src="./js/custom.min.js"></script>


    <!-- Vectormap -->
    <script src="./vendor/raphael/raphael.min.js"></script>
    <script src="./vendor/morris/morris.min.js"></script>


    <script src="./vendor/circle-progress/circle-progress.min.js"></script>
    <script src="./vendor/chart.js/Chart.bundle.min.js"></script>

    <script src="./vendor/gaugeJS/dist/gauge.min.js"></script>

    <!--  flot-chart js -->
    <script src="./vendor/flot/jquery.flot.js"></script>
    <script src="./vendor/flot/jquery.flot.resize.js"></script>

    <!-- Owl Carousel -->
    <script src="./vendor/owl-carousel/js/owl.carousel.min.js"></script>

    <!-- Counter Up -->
    <script src="./vendor/jqvmap/js/jquery.vmap.min.js"></script>
    <script src="./vendor/jqvmap/js/jquery.vmap.usa.js"></script>
    <script src="./vendor/jquery.counterup/jquery.counterup.min.js"></script>


    <script src="./js/dashboard/dashboard-1.js"></script>

</body>

</html>