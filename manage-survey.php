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
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Survey Data</h4>
                                <div class="d-flex flex-row align-items-center">
                                <div class="p-1 mx-3"><input id="searchInput" class="p-2" type="text" style="border-radius:7px;" placeholder="Search"></div>
                                <div class="p-1 "><a><button class="btn btn-primary">New Survey</button> </a></div>
</div>
                            </div>
                            <style>
                                th{
                                    color:black;
                                    font-weight:600px;
                                }
                                td{
                                    color:black;
                                }
                                </style>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="dataTable" class="table table-bordered table-responsive-sm">
                                        <thead>
                                            <tr>
                                                <th>id</th>
                                                <th>Date</th>
                                                <th>Survey By</th>
                                                <th>Village Name</th>
                                                <th>Pincode</th>
                                                <th>Farmer Name</th>
                                                <th>Farmer Phone</th>
                                                <th>Crop Type</th>
                                                <th>Soil Type</th>
                                                <th>Land Size (Acres)</th>
                                                <th>Action</th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php
                                        include './include/config.php';
                               $sl_id = mysqli_query($conn, "select * from survey");


                while ($j = mysqli_fetch_array($sl_id)) {
                  ?>
                                            <tr>
                                                <th><?= $j['id'] ?></th>
                                                <td><?= $j['date'] ?></td>
                                                <td><span class="badge badge-success" style="font-size:13px;"><?= $j['survey_by'] ?></span> </td>
                                                <td><?= $j['village_name'] ?></td>
                                            
                                                <td class="text-black" ><?= $j['pincode'] ?></td>
                                                <td class="text-black"><?= $j['farmer_name'] ?></td>
                                                <td class="text-black"><?= $j['farmer_phone'] ?></td>
                                                <td class="text-black"><?= $j['crop_type'] ?></td>
                                                <td class="text-black"><?= $j['soli_type'] ?></td>
                                                <td class="text-black"><?= $j['land'] ?></div>
                                                <td><span><a href="edit-survey.php?id=<?= $j['id'] ?>" class="mr-4" data-toggle="tooltip"
                                                            data-placement="top" title="Edit"><i
                                                                class="fa fa-pencil color-muted"></i> </a><a
                                                            href="delete-survey.php?id=<?= $j['id'] ?>" data-toggle="tooltip"
                                                            data-placement="top" title="Close"><i
                                                                class="fa fa-close color-danger"></i></a></span>
                                                </td>
                                            </tr>
                                            <?php
                }
                                            ?>
                                            
                                        </tbody>
                                    </table>
                                </div>
                            </div>
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
        <div class="footer">
            <div class="copyright">
                <p>Copyright © Designed &amp; Developed by <a href="#" target="_blank">Quixkit</a> 2019</p>
            </div>
        </div>
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
<script>
document.getElementById('searchInput').addEventListener('input', function () {
    const filter = this.value.toLowerCase();
    const rows = document.querySelectorAll('#dataTable tbody tr');

    rows.forEach(row => {
        const cells = row.getElementsByTagName('td');
        let rowContainsFilterText = false;

        for (let i = 0; i < cells.length; i++) {
            if (cells[i].innerText.toLowerCase().includes(filter)) {
                rowContainsFilterText = true;
                break;
            }
        }

        if (rowContainsFilterText) {
            row.style.display = '';
        } else {
            row.style.display = 'none';
        }
    });
});


</script>

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