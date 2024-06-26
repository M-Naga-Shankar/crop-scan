<?php 
session_start();
if (!isset($_SESSION['admin_id'])) {
  header("location:index.php");
}
include 'include/config.php';

if(!empty($_GET))
{

    $id=$_GET['id'];

    $sql=mysqli_query($conn,"DELETE FROM `survey` WHERE id='$id'");

   	

	if($sql==true)
	{
    
		
    $uid=$userId;
    echo "ok done";
     header("Location:manage-survey.php?status=1");
   
	}
	else
	{
		$status=2;
		 echo "no";
	
	    header("Location:manage-survey.php?status=2");
	}

}

?>