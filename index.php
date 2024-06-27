<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>CROP-SCAN</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="./assets/crop.png">
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
                    <div class="col-lg-3 col-sm-6">
                        <div class="card">
                            <div class="stat-widget-two card-body">
                                <div class="stat-content">
                                    <div class="stat-text">Total Farmers </div>
                                    <div class="stat-digit"> <?php
                                    include './include/config.php';
                                    $sql = "SELECT COUNT(*) AS count FROM survey";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Fetch the count
    $row = $result->fetch_assoc();
    echo $row['count'];
} else {
    echo "0 results";
}

// Close the connection
$conn->close();
?> </div>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar progress-bar-success w-85" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="card">
                            <div class="stat-widget-two card-body">
                                <div class="stat-content">
                                    <div class="stat-text">Total Land (in Acres)</div>
                                    <div class="stat-digit"> 
                                    <?php
                                    include './include/config.php';
                                    $sql1 = "SELECT SUM(land) AS sum FROM survey";
$result = $conn->query($sql1);

if ($result->num_rows > 0) {
    // Fetch the count
    $row = $result->fetch_assoc();
    echo $row['sum'];
} else {
    echo "0 results";
}

// Close the connection
$conn->close();
?> 
                                    </div>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar progress-bar-primary w-75" role="progressbar" aria-valuenow="78" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="card">
                            <div class="stat-widget-two card-body">
                                <div class="stat-content">
                                    <div class="stat-text">Total Survey</div>
                                    <div class="stat-digit"> <?php
                                    include './include/config.php';
                                    $sql = "SELECT COUNT(*) AS count FROM survey";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Fetch the count
    $row = $result->fetch_assoc();
    echo $row['count'];
} else {
    echo "0 results";
}

// Close the connection
$conn->close();
?> </div>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar progress-bar-warning w-50" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="card">
                            <div class="stat-widget-two card-body">
                                <div class="stat-content">
                                    <div class="stat-text">Task pincodes</div>
                                    <div class="stat-digit"> </i><?php
                                    include './include/config.php';
                                   $sql3 = "SELECT COUNT(DISTINCT pincode) AS pincodes FROM survey";
$result = $conn->query($sql3);

if ($result->num_rows > 0) {
    // Fetch the count
    $row = $result->fetch_assoc();
    echo $row['pincodes'];
} else {
    echo "0 results";
}

// Close the connection
$conn->close();
?> </div>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar progress-bar-danger w-65" role="progressbar" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                        <!-- /# card -->
                    </div>
                    <!-- /# column -->
                </div>
                <div class="row">
                <div class="col-lg-6 col-sm-6" >
                                <div class="card" style="height:400px;">
                                    <div class="card-header">
                                        <h4 class="card-title">Crop Analysis </h4>
                                    </div>
                                    <div class="card-body">
                                        <canvas id="lineChart_2"></canvas>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-6 col-sm-6">
    <div class="card" style="height:400px;">
        <div class="card-header">
            <h4 class="card-title">Land Analysis </h4>
        </div>
        <div class="card-body">
            <div id="morris-donut-chart" class="morris_chart_height"></div>
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

    <script src="./vendor/chart.js/Chart.bundle.min.js"></script>
    <script src="./js/plugins-init/chartjs-init.js"></script>
    <script src="./js/dashboard/dashboard-1.js"></script>
    <script src="./vendor/raphael/raphael.min.js"></script>
    <script src="./vendor/morris/morris.min.js"></script>
    <script src="./js/plugins-init/morris-init.js"></script>
   
    <?php
include './include/config.php';
$paddy = "SELECT COUNT(*) AS count FROM survey where crop_type='Paddy'";
$result = $conn->query($paddy);

if ($result->num_rows > 0) {
    // Fetch the count
    $row = $result->fetch_assoc();
    $paddy_c= $row['count'];
} 

$sugarcane= "SELECT COUNT(*) AS count FROM survey where crop_type='Sugarcane'";
$result = $conn->query($sugarcane);

if ($result->num_rows > 0) {
    // Fetch the count
    $row = $result->fetch_assoc();
    $sugar_c= $row['count'];
}

$groundnut= "SELECT COUNT(*) AS count FROM survey where crop_type='Groundnut'";
$result = $conn->query($groundnut);

if ($result->num_rows > 0) {
    // Fetch the count
    $row = $result->fetch_assoc();
    $ground_c= $row['count'];
} 

$blackgram= "SELECT COUNT(*) AS count FROM survey where crop_type='Blackgram'";
$result = $conn->query($blackgram);

if ($result->num_rows > 0) {
    // Fetch the count
    $row = $result->fetch_assoc();
    $black_c= $row['count'];
} 

$redsoil = "SELECT SUM(land) AS sum FROM survey where soli_type='Red Soil'";
$result = $conn->query($redsoil);

if ($result->num_rows > 0) {
    // Fetch the count
    $row = $result->fetch_assoc();
    $red_s= $row['sum'];
} 

$blacksoil = "SELECT SUM(land) AS sum FROM survey where soli_type='Black Soil'";
$result = $conn->query($blacksoil);

if ($result->num_rows > 0) {
    // Fetch the count
    $row = $result->fetch_assoc();
    $black_s= $row['sum'];
} 

$Alluvial = "SELECT SUM(land) AS sum FROM survey where soli_type='Alluvial Soil'";
$result = $conn->query($Alluvial);

if ($result->num_rows > 0) {
    // Fetch the count
    $row = $result->fetch_assoc();
    $allu_s= $row['sum'];
} 

$data = [
    ["label" => "Red Soil", "value" => $red_s],
    ["label" => "Black Soil", "value" => $black_s],
    ["label" => "Alluvial Soil", "value" => $allu_s]
];
$values = [$paddy_c, $sugar_c, $ground_c,$black_c];
?>

<script>
document.addEventListener("DOMContentLoaded", function() {
    // Ensure Chart.js is loaded
    if (typeof Chart === 'undefined') {
        console.error("Chart.js library is not loaded.");
    }

    const lineChart_2 = document.getElementById("lineChart_2").getContext('2d');

    // Generate gradient
    const lineChart_2gradientStroke = lineChart_2.createLinearGradient(500, 0, 100, 0);
    lineChart_2gradientStroke.addColorStop(0, "rgba(26, 51, 213, 1)");
    lineChart_2gradientStroke.addColorStop(1, "rgba(26, 51, 213, 0.5)");

    // Store original line controller for later use
    const originalLineController = Chart.controllers.line;

    Chart.controllers.line = Chart.controllers.line.extend({
        draw: function () {
            originalLineController.prototype.draw.apply(this, arguments);
            let nk = this.chart.chart.ctx;
            let _stroke = nk.stroke;
            nk.stroke = function () {
                nk.save();
                nk.shadowColor = 'rgba(0, 0, 128, .2)';
                nk.shadowBlur = 10;
                nk.shadowOffsetX = 0;
                nk.shadowOffsetY = 10;
                _stroke.apply(this, arguments);
                nk.restore();
            }
        }
    });

    lineChart_2.height = 100;

    new Chart(lineChart_2, {
        type: 'line',
        data: {
            labels: ["Paddy", "Sugar Cane", "Ground Nut", "Black Gram"],
            datasets: [{
                label: "Crop : ",
                data: <?php echo json_encode($values); ?>,
                borderColor: lineChart_2gradientStroke,
                borderWidth: 2,
                backgroundColor: 'transparent',
                pointBackgroundColor: 'rgba(26, 51, 213, 0.5)'
            }]
        },
        options: {
            legend: false,
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero: true,
                        max: 100,
                        min: 0,
                        stepSize: 20,
                        padding: 10
                    }
                }],
                xAxes: [{
                    ticks: {
                        padding: 5
                    }
                }]
            }
        }
    });

    // Data for Morris.js Donut chart
    var data = <?php echo json_encode($data); ?>;

    Morris.Donut({
        element: 'morris-donut-chart',
        data: data,
        resize: true,
        colors: ['#FF474C', '#808080', '#DAA06D']
    });
});
</script>

</body>

</html>