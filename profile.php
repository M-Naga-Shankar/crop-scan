<?php 
include 'include/config.php';

if(!empty($_POST))
{
    $id=$_POST['id'];
    $name=$_POST['name'];
    $phone=$_POST['moblie'];
    $pass=$_POST['pass'];
    echo $id."dajshfikhdbrfber";
 
	$sqls=mysqli_query($conn,"UPDATE `user` SET `name`='$name',`phone`='$phone',`password`='$pass' WHERE id='$id'");

   	

	if($sqls==true)
	{
    
		
    $uid=$userId;
    echo "ok done";
     header("Location:profile.php?status=1");
   
	}
	else
	{
		$status=2;
		 echo "no";
	
	      header("Location:profile.php?status=2");
	}
}

?>

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
      Profile Updated <strong>Successfully</strong>
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
      Profile Update <strong>UnSuccessfull</strong>
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    <br>
<?php
}}
?>
            <div class="authincation h-100 my-5">
        <div class="container-fluid h-100">
            <div class="row justify-content-center h-100 align-items-center">
                <div class="col-md-6">
                    <div class="authincation-content">
                        <div class="row no-gutters">
                            <div class="col-xl-12">
                                <div class="auth-form">
                                    <h4 class="text-center mb-4">Profile</h4>
                                    <form action="" method='POST'>
 <?php

                                    $id=$_SESSION['admin_id'];


                                        include './include/config.php';
                               $sl_id = mysqli_query($conn, "select * from user where id='$id'");


                while ($j = mysqli_fetch_array($sl_id)) {
                  ?>

                                    <div class="form-group">
                                            <label><strong>Name</strong></label>
                                            <input type="hidden" value="<?= $j['id'] ?>" name="id" >
                                            <input type="text" name='name' class="form-control" value="<?= $j['name'] ?>">
                                        </div>
                                        <div class="form-group">
                                            <label><strong>Moblie</strong></label>
                                            <input type="number" name='moblie' class="form-control" value="<?= $j['phone'] ?>">
                                        </div>
                                        <div class="form-group">
                                            <label><strong>Password</strong></label>
                                            <input type="password" name='pass' class="form-control" value="<?= $j['password'] ?>">
                                        </div>
                                      <?php } ?>
                                        <div class="text-center d-flex justify-content-center ">
                                            <button type="submit" class="col-4 btn btn-success btn-block">Update</button>
                                        </div>
                                    </form>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
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

</body>

</html>