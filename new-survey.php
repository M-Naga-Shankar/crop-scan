<?php 
session_start();
if (!isset($_SESSION['admin_id'])) {
  header("location:index.php");
}
include 'include/config.php';

if(!empty($_POST))
{
    $survey_by=$_SESSION['name'];
    $name=$_POST['name'];
    $phone=$_POST['phone'];
    $vname=$_POST['vname'];
    $pincode=$_POST['pincode'];
    $crop=$_POST['crop'];
    $soil=$_POST['soil'];
    $land=$_POST['land'];
    
    
 
	$sql=mysqli_query($conn,"INSERT INTO `survey`(`survey_by`, `farmer_name`, `farmer_phone`, `village_name`, `pincode`, `crop_type`, `soli_type`, `land`) VALUES ('$survey_by','$name','$phone','$vname','$pincode','$crop','$soil','$land')");

   	

	if($sql==true)
	{
    
		
    $uid=$userId;
    echo "ok done";
     header("Location:add-survey.php?status=1");
   
	}
	else
	{
		$status=2;
		 echo "no";
	
	      header("Location:add-survey.php?status=2");
	}
}

?>