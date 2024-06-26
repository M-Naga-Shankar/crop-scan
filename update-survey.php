<?php 
session_start();
if (!isset($_SESSION['admin_id'])) {
  header("location:index.php");
}
include 'include/config.php';

if(!empty($_POST))
{
    $id=$_POST['id'];
    $name=$_POST['name'];
    $phone=$_POST['phone'];
    $vname=$_POST['vname'];
    $pincode=$_POST['pincode'];
    $crop=$_POST['crop'];
    $soil=$_POST['soil'];
    $land=$_POST['land'];
    
    
 
	$sql=mysqli_query($conn,"UPDATE `survey` SET `farmer_name`='$name',`farmer_phone`='$phone',`village_name`='$vname',`pincode`='$pincode',`crop_type`='$crop',`soli_type`='$soil',`land`='$land' WHERE id='$id'");

   	

	if($sql==true)
	{
    
		
    $uid=$userId;
    echo "ok done";
     header("Location:edit-survey.php?id=$id&status=1");
   
	}
	else
	{
		$status=2;
		 echo "no";
	
	      header("Location:edit-survey.php?id=$id&status=2");
	}
}

?>